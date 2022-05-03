<?php

namespace Simtabi\Gesanda\Traits\Form;

use Illuminate\Contracts\Support\MessageBag;
use Illuminate\Support\ViewErrorBag;
use Simtabi\Gesanda\Support\FormBinder;

trait HasValidation
{

    public function getModelKeyName(): string
    {
        return !empty($this->nestedWireKey) ? $this->nestedWireKey.'.'.$this->name : $this->name;
    }
    public function getValidationClass(ViewErrorBag $errors, string|null $locale = null): string|null
    {
        $errorBag = $this->getErrorBag($errors);
        if ($errorBag->isEmpty()) {
            return null;
        }

        if (($locale && $errorBag->has($this->name . '.' . $locale)) || $errorBag->has($this->getModelKeyName())) {
            return $this->shouldDisplayValidationFailure() ? 'is-invalid' : null;
        }
        elseif ($errorBag->has($this->getNameWithArrayNotationConvertedInto())) {
            return $this->shouldDisplayValidationFailure() ? 'is-invalid' : null;
        }

        return $this->shouldDisplayValidationSuccess() ? 'is-valid' : null;
    }

    protected function getErrorBag(ViewErrorBag $errors): MessageBag
    {

        if ($this->errorBag) {
            return $errors->getBag($this->errorBag);
        }
        $boundErrorBag = app(FormBinder::class)->getBoundErrorBag();

        if ($boundErrorBag) {
            return $errors->{$boundErrorBag};
        }

        return $errors->getBag('default');
    }

    public function shouldDisplayValidationFailure(): bool
    {
        return $this->displayValidationFailure ?? config('gesanda.display_validation_failure', true);
    }

    public function shouldDisplayValidationSuccess(): bool
    {
        return $this->displayValidationSuccess ?? config('gesanda.display_validation_success', true);
    }

    public function getErrorMessage(ViewErrorBag $errors, string|null $locale = null): string|null
    {
        if (! $this->shouldDisplayValidationFailure()) {
            return null;
        }

        $errorBag = $this->getErrorBag($errors);
        if ($locale) {
            $errorKey   = $this->name . '.' . $locale;
            $rawMessage = $errorBag->first($errorKey);

            return $rawMessage ? str_replace(
                str_replace('_', ' ', $this->name) . '.' . $locale,
                __('validation.attributes.' . $this->name) . ' (' . strtoupper($locale) . ')',
                $rawMessage
            ) : null;
        }

        if ($errorBag->has($this->getNameWithArrayNotationConvertedInto())) {
            return $errorBag->first($this->getNameWithArrayNotationConvertedInto());
        } else{
            return $errorBag->first($this->getModelKeyName());
        }
    }
}
