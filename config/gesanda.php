<?php

return [

    /**
     * The UI framework that should be used to generate the components.
     * Can be set to:
     * - bootstrap-5
     * - bootstrap-4
     * - tailwind-2 (upcoming feature)
     */
    'ui' => 'bootstrap-5',

    /** Whether form components should use floating labels. */
    'floating_label' => false,

    /**
     * Whether form input/textarea/checkbox/radio/switch components should display their validation success.
     * Success status will be display when errors are sent to the view with no matching with the component name.
     */
    'display_validation_success' => true,

    /**
     * Whether form input/textarea/checkbox/radio/switch components should display their validation failure.
     * Fail status will be display when errors are sent to the view with a match with the component name.
     */
    'display_validation_failure' => true,


    'livewire_loading_spinner'   => [
        /*
        |--------------------------------------------------------------------------
        | Show Delay
        |--------------------------------------------------------------------------
        |
        | This value is how long it takes for the loading spinner to show up when
        | a Livewire action begins executing. This is in order to prevent it from
        | showing up too frequently. The value is in milliseconds.
        |
        */

        'show_delay' => 1000,

        /*
        |--------------------------------------------------------------------------
        | Animation Speed
        |--------------------------------------------------------------------------
        |
        | This value is the speed in which the loading spinner rotates at. It is
        | used inside the view CSS code. The value is in milliseconds.
        |
        */

        'animation_speed' => 2000,
    ]
];
