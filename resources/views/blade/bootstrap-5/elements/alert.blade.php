@props([
    'autoCloseTime',
    'message',
])

@php
    $borderStyle = !empty($borderStyle) ? "border-$borderStyle" : '';
    $borderColor = !empty($borderColor) ? "border-$borderColor" : '';
    $alertColor  = !empty($bg)  ? "alert-$bg"   : '';
    $iconColor   = $isNotice            ? $iconColor            : $alertColor;
    $bg          = !empty($bg)          ? "bg-$bg"              : '';
    $css         = $isNotice            ? "p-6 notice d-flex $bg rounded $borderColor border $borderStyle" : "d-flex align-items-center p-5 mb-10 alert $alertColor";
@endphp


<div {!! $attributes->merge(["class" => $css . " " . ($isActive ? ' active ' : '')]) !!} @if(!$isNotice) id="alert" @endif role="alert">

    @if($iconType == 'svg')
        <span class="svg-icon svg-icon-2tx svg-icon-{{ $iconColor ?? 'warning' }} me-4">{!! $icon ?? '
             <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"></circle>
                <rect fill="#000000" x="11" y="7" width="2" height="8" rx="1"></rect>
                <rect fill="#000000" x="11" y="16" width="2" height="2" rx="1"></rect>
             </svg>' !!}
        </span>
    @else
        {!! $icon !!}
    @endif

    @if($isNotice)
        <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
            <div class="mb-3 mb-md-0 fw-bold">
                @if(!empty($heading))
                    <h4 class="text-gray-800 fw-bolder">{!! $heading !!}</h4>
                @endif
                @if(!empty($message))
                    <div class="{!! $messageCss ?? '' !!} text-gray-700">{!! $message !!}</div>
                @endif
            </div>
            @if(!empty($cta)) {!! $cta !!} @endif
        </div>
    @else
        <div class="d-flex flex-column">
            @if(!empty($heading))
                <h4 class="mb-1 text-{{$alertColor}}">{!! $heading !!}</h4>
            @endif
            @if(!empty($message))
                <span class="{!! $messageCss ?? '' !!}">{!! $message !!}</span>
            @endif
        </div>
    @endif

</div>

<script type="text/javascript">
    setTimeout(function () {
        $('#alert').alert('close');
    }, {{$autoCloseTime}});
</script>
