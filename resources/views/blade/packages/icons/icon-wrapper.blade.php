@props([

])

<div {!! $attributes->merge(["class" => "svg-icon clearfix"]) !!}>
  {!! $slot !!}
</div>
