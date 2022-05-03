@props([
    'spinnerStyling' => 'm-0',
    'animateClass'   => 'animate__animated animate__fadeIn',
    'loadingText'    => 'Please wait...',
    'wireTarget',
    'color'          => '#5C7AEA',
    'size'           => '32px',
    'type'           => 'circle-spinner',
])

<style>

    /**
     * For CSS based spinners
     */
    .lds-loaders{
        clear: both;
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: center;
        position: relative;
        margin: auto;
    }

    .lds-loaders .lds-text{
        font-weight: bold;
    }

    .lds-loaders .lds-icon{
        width: {{$size}};
        height: {{$size}};
        display: inline-flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        position: relative;
        text-align: center;
        margin: 0;
        padding: 0;
        clear: both;
    }

    /**
     * For SVG based spinners
     */
    .lds-loaders svg path,
    .lds-loaders svg rect{
        fill: {{$color}};
    }
    .lds-loaders svg{
        display:inline-block;
    }
</style>

<div class="d-flex align-items-center">
    <div class="{{$spinnerStyling}} m-0 p-0 lh-0 clearfix" @if (!empty($wireTarget)) wire:loading.delay wire:target="{{$wireTarget}}" @endif>
        <div {!! $attributes->merge(['class' => "p-0 m-0 clearfix lds-loaders $animateClass"]) !!}>
            @if(!empty($loadingText) || !is_null($loadingText))
                <span class="lds-text {{$color}}">{!! $loadingText !!}</span>
            @endif
            <div class="lds-icon">
                <x-gesanda::spinner-library :type="$type" :color="$color" />
            </div>
        </div>
    </div>
</div>

