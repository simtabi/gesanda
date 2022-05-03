<?php

namespace Simtabi\Gesanda\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Simtabi\Gesanda\Http\Livewire\Loader;
use Simtabi\Gesanda\Views\Components\Elements\Alert;
use Simtabi\Gesanda\Views\Components\Elements\Link;
use Simtabi\Gesanda\Views\Components\Form\Button;
use Simtabi\Gesanda\Views\Components\Form\Checkbox;
use Simtabi\Gesanda\Views\Components\Form\Form;
use Simtabi\Gesanda\Views\Components\Form\Input;
use Simtabi\Gesanda\Views\Components\Form\Partials\Addon;
use Simtabi\Gesanda\Views\Components\Form\Partials\Caption;
use Simtabi\Gesanda\Views\Components\Form\Partials\Error;
use Simtabi\Gesanda\Views\Components\Form\Partials\Errors;
use Simtabi\Gesanda\Views\Components\Form\Partials\Label;
use Simtabi\Gesanda\Views\Components\Form\Radio;
use Simtabi\Gesanda\Views\Components\Form\Select;
use Simtabi\Gesanda\Views\Components\Form\Textarea;
use Simtabi\Gesanda\Views\Components\Form\ToggleSwitch;
use Simtabi\Gesanda\Support\FormBinder;
use Livewire\Livewire;

class GesandaServiceProvider extends ServiceProvider
{

    public  const PACKAGE_NAME = 'gesanda';
    private const PATH         = __DIR__ . '/../../';

    public function register(): void
    {
        $this->mergeConfigFrom(self::PATH . 'config/gesanda.php', self::PACKAGE_NAME);

        $this->app->singleton(FormBinder::class, fn() => new FormBinder());
    }

    public function boot(): void
    {
        $this->loadViewsFrom(self::PATH . 'resources/views', self::PACKAGE_NAME);
        $this->loadTranslationsFrom(self::PATH . 'resources/lang', self::PACKAGE_NAME);

        $this->registerBladeComponents();
        $this->declareBladeDirectives();

        if ($this->app->runningInConsole())
        {
            $this->publishes([
                self::PATH . 'config/gesanda.php' => config_path('gesanda.php'),
            ], 'gesanda:config');

            $this->publishes([
                self::PATH . 'public'             => public_path('vendor/gesanda'),
            ], 'gesanda:assets');

            $this->publishes([
                self::PATH . 'resources/views'    => resource_path('views/vendor/gesanda'),
            ], 'gesanda:views');

            $this->publishes([
                self::PATH . 'resources/lang'     => resource_path('lang/vendor/courier'),
            ], 'gesanda:translations');
        }

    }

    protected function registerLivewireComponents()
    {
        Livewire::component('loader', Loader::class);
    }

    protected function registerBladeComponents()
    {

        // form partials
        Blade::component('gesanda::form-addon', Addon::class);
        Blade::component('gesanda::form-caption', Caption::class);
        Blade::component('gesanda::form-label', Label::class);
        Blade::component('gesanda::errors', Errors::class);

        // form input elements
        Blade::component('gesanda::button', Button::class);
        Blade::component('gesanda::checkbox', Checkbox::class);
        Blade::component('gesanda::form', Form::class);
        Blade::component('gesanda::input', Input::class);
        Blade::component('gesanda::radio', Radio::class);
        Blade::component('gesanda::select', Select::class);
        Blade::component('gesanda::textarea', Textarea::class);
        Blade::component('gesanda::toggle-switch', ToggleSwitch::class);

        // layout elements/components
        Blade::component('gesanda::link', Link::class);
        Blade::component('gesanda::alert', Alert::class);

        // general
        Blade::component('gesanda::blade.bootstrap-5.elements.partials.meta', 'gesanda::meta');
        Blade::component('gesanda::blade.bootstrap-5.elements.partials.pagination', 'gesanda::pagination');
        Blade::component('gesanda::blade.bootstrap-5.elements.partials.iteration-index', 'gesanda::iteration-index');

        // loaders & spinners
        Blade::component('gesanda::blade.packages.spinners.library', 'gesanda::spinner-library');
        Blade::component('gesanda::blade.packages.spinners.spinner', 'gesanda::spinner');

        // icons
        Blade::component('gesanda::blade.packages.icons.icon-wrapper', 'gesanda::icon-wrapper');
        Blade::component('gesanda::blade.packages.icons.library.verified', 'gesanda::icon-verified');

    }

    protected function declareBladeDirectives(): void
    {
        Blade::directive('bind', function ($dataBatch) {
            return '<?php app(Simtabi\Gesanda\Support\FormBinder::class)->bindNewDataBatch(' . $dataBatch . ') ?>';
        });
        Blade::directive('endbind', function () {
            return '<?php app(Simtabi\Gesanda\Support\FormBinder::class)->unbindLastDataBatch() ?>';
        });
        Blade::directive('errorbag', function ($errorBagKey) {
            return '<?php app(Simtabi\Gesanda\Support\FormBinder::class)->bindErrorBag(' . $errorBagKey . ') ?>';
        });
        Blade::directive('enderrorbag', function () {
            return '<?php app(Simtabi\Gesanda\Support\FormBinder::class)->unbindErrorBag() ?>';
        });
        Blade::directive('wire', function ($livewireModifier) {
            return '<?php app(Simtabi\Gesanda\Support\FormBinder::class)->bindNewLivewireModifier(' . $livewireModifier . ') ?>';
        });
        Blade::directive('endwire', function () {
            return '<?php app(Simtabi\Gesanda\Support\FormBinder::class)->unbindLastLivewireModifier() ?>';
        });
    }

}
