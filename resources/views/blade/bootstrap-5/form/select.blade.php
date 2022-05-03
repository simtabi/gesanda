@php
    $id                   = $getId() ?: $getDefaultId('select');
    $label                = $getLabel();
    $displayFloatingLabel = $shouldDisplayFloatingLabel();
    $placeholder          = $getPlaceholder($label);
    $prepend              = $getPrepend();
    $append               = $getAppend();
    $errorMessage         = $getErrorMessage($errors);
    $multipleMode         = (bool) $attributes->filter(fn($value, $key) => $key === 'multiple')->first();
    $validationClass      = $getValidationClass($errors);
    $isWired              = $componentIsWired();
    $wiredKey             = !empty($getNestedWireKey()) ? $getNestedWireKey().'.'.$name : $name;
@endphp
<div @class(['form-floating' => $displayFloatingLabel, 'mb-3' => $marginBottom])>

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
            <select {{ $attributes->merge([
            'wire:model' . $getComponentLivewireModifier() => $isWired && ! $hasComponentNativeLivewireModelBinding() ? $wiredKey : null,
            'id'               => $id,
            'name'             => $isWired ? null : $name . ($multipleMode ? '[]' : null),
            'class'            => 'form-select' . ($validationClass ? ' ' . $validationClass : null),
            'placeholder'      => $placeholder,
            'aria-describedby' => $caption ? $id . '-caption' : null,
        ]) }}>
                <?php
                $selectStatus   = false;
                $hasSelection   = false;
                $selections     = [];

                $selectedStatus = function ($datum)
                {
                    return ($datum['selected'] ?? false) === true ? 'selected' : '';
                };

                foreach($options as $i => $x)
                {
                    if(is_array($x))
                    {
                        foreach($x as $ii => $xx)
                        {
                            $hasSelection                    = $isSelected($name, $xx) && ! $isWired;
                            $selections[$i]['optgroup'][$ii] = [
                                'selected' => $hasSelection,
                                'title'    => $xx,
                            ];
                        }
                    }else{
                        $hasSelection   = $isSelected($name, $x) && ! $isWired;
                        $selections[$i] = [
                            'selected' => $hasSelection,
                            'title'    => $x,
                        ];
                    }
                }

                $html = '';
                if ($placeholder || !empty($placeholder) || !is_null($placeholder))
                {
                    $placeholderStatus = $allowPlaceholderToBeSelected && !$hasSelection ? ' selected ' : ' disabled hidden ';
                    $html             .= "<option value=' ' {$placeholderStatus}>{$placeholder}</option>";
                }

                foreach ($selections as $k => $datum)
                {
                    if (isset($datum['optgroup']) && is_array($datum['optgroup']) && (count($datum['optgroup']) >= 1)) {
                        $html .= "<optgroup label='{$k}'>";
                        foreach ($datum['optgroup'] as $ky => $kx)
                        {
                            $html .= "<option value='$ky' {$selectedStatus($kx)} >{$kx['title']}</option>";
                        }
                        $html .= "</optgroup>";
                    }else{
                        $html .= "<option value='$k' {$selectedStatus($datum)} >{$datum['title']}</option>";
                    }

                }
                ?>
                {!! $html !!}
            </select>

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
