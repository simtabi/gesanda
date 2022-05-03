@props([
    'title' => null
])

@php
    $groupMode       = (bool) array_filter($group);
    if($groupMode && $caption) {
        $captionId = $getId() ?: $getDefaultId($toggleSwitch ? 'toggle-switch' : 'checkbox');
    }
    $errorMessage    = $getErrorMessage($errors);
    $validationClass = $getValidationClass($errors);
    $isWired         = $componentIsWired();
    $wiredKey        = !empty($getNestedWireKey()) ? $getNestedWireKey().'.'.$name : $name;
@endphp

@if($groupMode)
    <div @class(['mb-3' => $marginBottom])>
        <div>
            @if(!empty($title))
                {!! $title !!}
            @else
                <x-gesanda::form-label class="form-label" :label="$getLabel()"/>
            @endif
        </div>
@endif

@foreach($group as $groupValue => $groupLabel)

    @php
        $id      = $getId(suffix: $groupMode ? $groupValue : null) ?: $getDefaultId(prefix: $toggleSwitch ? 'toggle-switch' : 'checkbox', suffix: $groupMode ? $groupValue : null);
        $label   = $groupMode                ? $groupLabel : $getLabel();
        $checked = $groupMode                ? $getGroupModeCheckedStatus($groupValue) : $getSingleModeCheckedStatus();
    @endphp

    <div @class(['form-check', 'form-switch' => $toggleSwitch, 'form-check-inline' => $inline, 'mb-3' => $groupMode ? null : $marginBottom])>
        <input {{ $attributes->merge([
            'wire:model' . $getComponentLivewireModifier() => $isWired && ! $hasComponentNativeLivewireModelBinding() ? $wiredKey : null,
            'id'               => $id,
            'class'            => 'form-check-input' . ($validationClass ? ' ' . $validationClass : null),
            'name'             => $isWired ? null : $name . ($groupMode ? '[]' : null),
            'value'            => $groupMode ? $groupValue : null,
            'checked'          => $isWired ? null : $checked,
            'aria-describedby' => $caption ? ($groupMode && $caption ? $captionId : $id) . '-caption' : null,
        ]) }} type="checkbox">

        @if(!empty($title))
            {!! $title !!}
        @else
            <x-gesanda::form-label :id="$id" class="form-check-label" :label="$label"/>
        @endif
        @if(! $groupMode)

            @if($showInputError && !empty($errorMessage))
                <x-gesanda::errors :message="$errorMessage"/>
            @endif

        @if (empty($errorMessage))
                <x-gesanda::form-caption :inputId="$id" :caption="$caption"/>
            @endif
        @endif
    </div>
@endforeach
@if($groupMode)
    <x-gesanda::form-caption :inputId="$groupMode && $caption ? $captionId : $id" :caption="$caption"/>
    <x-gesanda::errors class="d-block" :message="$errorMessage"/>
@endif
@if($groupMode)
    </div>
@endif
