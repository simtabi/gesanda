@php
    $validationClass = $getValidationClass($errors);
    $errorMessage    = $getErrorMessage($errors);
    $captionId       = $getId() ?: $getDefaultId('radio');
    $isWired         = $componentIsWired();
    $wiredKey        = !empty($getNestedWireKey()) ? $getNestedWireKey().'.'.$name : $name;
@endphp
<div @class(['mb-3' => $marginBottom, $validationClass => $validationClass])>
    <div>
        <x-gesanda::form-label class="form-label" :label="$getLabel()"/>
    </div>
    @foreach($group as $groupValue => $groupLabel)
        @php
            $radioId = $getId(suffix: $groupValue) ?: $getDefaultId(prefix: 'radio', suffix: $groupValue);
            $checked = $getGroupModeCheckedStatus($groupValue);
        @endphp
        <div @class(['form-check', 'form-check-inline' => $inline])>
            <input {{ $attributes->merge([
                'wire:model' . $getComponentLivewireModifier() => $isWired && ! $hasComponentNativeLivewireModelBinding() ? ($name ? $wiredKey . '.' . $name : $wiredKey) : null,
                'id'               => $radioId,
                'class'            => 'form-check-input',
                'name'             => $isWired ? null : $name,
                'value'            => $groupValue,
                'checked'          => $isWired ? null : $checked,
                'aria-describedby' => $caption ? $captionId . '-caption' : null,
            ]) }} type="radio">
            <x-gesanda::form-label :id="$radioId" class="form-check-label" :label="$groupLabel"/>
        </div>
    @endforeach

    @if($showInputError && !empty($errorMessage))
        <x-gesanda::errors :message="$errorMessage"/>
    @endif

    @if (empty($errorMessage))
        <x-gesanda::form-caption :inputId="$id" :caption="$caption"/>
    @endif
</div>
