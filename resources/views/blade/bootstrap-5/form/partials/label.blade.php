@if($label)
    <label {{ $attributes->merge(['for' => $id]) }}>
        <span class="form-check-label fw-bold text-gray-700 @if ($isRequired()) required @endif">{!! $label !!}</span>

        @if(!empty($tooltip))
            <i class="{{$tooltipIcon ?? 'fas fa-exclamation-circle ms-2 fs-7'}}" data-bs-toggle="tooltip" title="{{$tooltipTitle ?? ''}}" data-bs-original-title="{{$tooltip ?? ''}}" aria-label="{{$tooltip}}"></i>
        @endif
    </label>
@endif
