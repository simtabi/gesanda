@php
    $requiredCsrfToken      = in_array($method, ['POST', 'PUT', 'PATCH', 'DELETE']);
    $requiredMethodSpoofing = in_array($method, ['PUT', 'PATCH', 'DELETE']);
@endphp
<form {{ $attributes->merge(['method' => $requiredMethodSpoofing ? 'POST' : $method, 'class' => 'gesanda']) }} novalidate>
    @if($requiredCsrfToken)
        @csrf
    @endif
    @if($requiredMethodSpoofing)
        @method($method)
    @endif
    {{ $slot ?? null }}
</form>
@php
    if($bind) {
        app(\Simtabi\Gesanda\Support\FormBinder::class)->unbindLastDataBatch();
    }
    if($errorBag) {
        app(\Simtabi\Gesanda\Support\FormBinder::class)->unbindErrorBag();
    }
    if($wire) {
        app(\Simtabi\Gesanda\Support\FormBinder::class)->unbindLastLivewireModifier();
    }
@endphp
