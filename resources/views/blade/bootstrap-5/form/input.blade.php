@foreach($locales as $locale)
    @php
        $id                   = $getId($locale) ?: $getDefaultId($type, $locale);
        $label                = $getLabel($locale);
        $displayFloatingLabel = $shouldDisplayFloatingLabel();
        $placeholder          = $getPlaceholder($label, $locale);
        $value                = $getValue($locale);
        $prepend              = $getPrepend($locale);
        $append               = $getAppend($locale);
        $errorMessage         = $getErrorMessage($errors, $locale);
        $validationClass      = $getValidationClass($errors, $locale);
        $isWired              = $componentIsWired();
        $wiredKey             = !empty($getNestedWireKey()) ? $getNestedWireKey().'.'.$name : $name;
    @endphp
    <div @class(['d-none' => $type === 'hidden', 'form-floating' => $displayFloatingLabel, 'mb-3' => $marginBottom])>
        @if(($prepend || $append) && ! $displayFloatingLabel)
            <x-gesanda::form-label :id="$id" class="form-label" :label="$label"/>
            <div class="input-group">
        @endif
            @if(! $prepend && ! $append && ! $displayFloatingLabel)
                <x-gesanda::form-label :id="$id" class="form-label" :label="$label"/>
            @endif
            @if($prepend && ! $displayFloatingLabel)
                <x-gesanda::form-addon :addon="$prepend"/>
            @endif
            <input {{ $attributes->except('wire')->merge([
                'wire:model' . $getComponentLivewireModifier() => $isWired && ! $hasComponentNativeLivewireModelBinding() ? ($locale ? $wiredKey . '.' . $locale : $wiredKey) : null,
                'id'                                           => $id,
                'class'                                        => 'form-control' . ($validationClass ? ' ' . $validationClass : null),
                'type'                                         => $type,
                'name'                                         => $isWired ? null : ($locale ? $name . '[' . $locale . ']' : $name),
                'placeholder'                                  => $placeholder,
                'data-locale'                                  => $locale,
                'value'                                        => $isWired ? null : ($value ?? ''),
                'aria-describedby'                             => $caption ? $id . '-caption' : null,
            ]) }}/>
            @if(! $prepend && ! $append && $displayFloatingLabel)
                <x-gesanda::form-label :id="$id" class="form-label" :label="$label"/>
            @endif
            @if($append && ! $displayFloatingLabel)
                <x-gesanda::form-addon :addon="$append"/>
            @endif

                @if($showInputError && !empty($errorMessage))
                    <x-gesanda::errors :message="$errorMessage"/>
                @endif

                @if (empty($errorMessage))
                    <x-gesanda::form-caption :inputId="$id" :caption="$caption"/>
                @endif
        @if(($prepend || $append) && ! $displayFloatingLabel)
            </div>
        @endif
    </div>
@endforeach
