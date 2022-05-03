@props([
    'paginator',
    'loop',
])

@if($paginator instanceof \Illuminate\Pagination\LengthAwarePaginator )
    {{ $loop->iteration + (($paginator->currentPage() -1) * $paginator->perPage())  }}
@else
    {{$loop->iteration}}
@endif
