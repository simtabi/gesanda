<?php

namespace Simtabi\Gesanda\Views\Components\Form\Partials;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\MessageBag;
use Illuminate\Support\ViewErrorBag;
use Simtabi\Gesanda\Abstracts\AbstractComponent;

class Errors extends AbstractComponent
{

    public function __construct(
        public string|null       $title            = 'Something went wrong!',
        public string|null       $type             = 'warning',
        public string|null       $icon             = null,
        public string|null       $inputKey         = null,
        public string|null       $sessionKey       = null,
        public string|null       $bag              = 'default',
        public string|null       $message          = null,
        public ViewErrorBag|null $errors           = null,
        public bool              $showAllErrors    = true,
        public ?string           $responseMessage  = null,
    )
    {
        parent::__construct();

        $this->getErrors();
    }

    public function getContextMessages(): object|null
    {

        $statusTypes = [
            'success' => [
                'success',
                'status',
            ],
            'warning' => [
                'warning',
                'fail',
            ],
            'danger'  => [
                'error',
            ],
        ];
        $message     = [];

        foreach ($statusTypes as $sType => $statuses){

            foreach ($statuses as $status)
            {
                if (Session::has($status))
                {
                    $message = [
                        'message' => Session::get($status),
                        'type'    => $sType,
                        'title'   => null,
                    ];

                    break;
                }
            }

        }

        return !empty($message) ? (object) $message : null;
    }

    public function getErrors(): ViewErrorBag
    {

        if(!empty($this->bag) && Session::has($this->bag))
        {
            $this->errors = Session::get($this->bag, new ViewErrorBag());
        }

        return $this->errors;
    }

    public function getError(string $key): ?string
    {
        $errors = $this->getErrors();

        return $errors->has($key) ? $errors->first($key) : null;

    }

    public function getSessionMessage(): null|string|array
    {
        return !empty($this->sessionKey) && Session::has($this->sessionKey) ? Session::get($this->sessionKey, null) : null;
    }

    public function getResponseMessage(): ?string
    {
        return $this->responseMessage;
    }

    protected function setViewPath(): string
    {
        return 'form.partials.errors';
    }

}

