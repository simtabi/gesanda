@props([
    'paginationEnabled' => true,
    'showPagination'    => true,
    'wrapInCard'        => true,
    'cardStyling'       => true,
    'cardBodyStyling'   => 'py-4 px-4',
    'wireAttributes',
    'model',

    'spinnerTarget'       => ['previousPage', 'nextPage', 'gotoPage'],
    'spinnerLoadingText'  => 'Please wait...',
    'spinnerColor'        => '#5C7AEA',
    'spinnerSize'         => '26px',
    'spinnerType'         => 'circle-spinner',
    'spinnerStyling'      => 'm-0 p-0 lh-0',
    'spinnerAnimateClass' => 'animate__animated animate__fadeIn',
])

@if($model instanceof \Illuminate\Database\Eloquent\Model| $model instanceof Illuminate\Pagination\LengthAwarePaginator)

    @if ($showPagination && ($model->count() >= 1))

        @if ($wrapInCard)
            <div {!! $attributes->merge(["class" => "card my-2"]) !!}>
                <div class="card-body d-flex flex-column {{$cardBodyStyling}}">
                    @endif

                    @if ($paginationEnabled && ($model->lastPage() >= 1) && $model->hasPages())
                        <div class="row">
                            <div class="col-12 col-md-6 d-flex justify-content-start">
                                {{ $model->links() }}

                                @if (!empty($spinnerTarget))
                                    @php
                                        if (!is_array($spinnerTarget)) {
                                                $spinnerTarget = [$spinnerTarget];
                                        }
                                    @endphp

                                    @forelse($spinnerTarget as $target)
                                        <x-gesanda::spinner
                                            :wireTarget="$target"
                                            :loadingText="$spinnerLoadingText"
                                            :color="$spinnerColor"
                                            :size="$spinnerSize"
                                            :type="$spinnerType"
                                            :spinnerStyling="$spinnerStyling"
                                            :animateClass="$spinnerAnimateClass"
                                        />
                                    @empty

                                    @endforelse
                                @endif

                            </div>

                            <div class="col-12 col-md-6 d-flex align-items-center justify-content-end">
                                <div class="text-center text-md-end text-muted">
                                    <span>@lang('Showing')</span>
                                    <strong>{{ $model->count() ? $model->firstItem() : 0 }}</strong>
                                    <span>@lang('to')</span>
                                    <strong>{{ $model->count() ? $model->lastItem() : 0 }}</strong>
                                    <span>@lang('of')</span>
                                    <strong>{{ $model->total() }}</strong>
                                    <span>@lang('results')</span>
                                </div>
                            </div>
                        </div>
                    @else
                        <div {!! $attributes->merge(["class" => "row my-2"]) !!}>
                            <div class="col-12 text-center text-md-end text-muted">
                                <span>@lang('Showing')</span>
                                <strong>{{ $model->count() ? $model->firstItem() : 0 }}</strong>
                                <span>@lang('to')</span>
                                <strong>{{ $model->count() ? $model->lastItem() : 0 }}</strong>
                                <span>@lang('of')</span>
                                <strong>{{ $model->total() }}</strong>
                                <span>@lang('results')</span>
                            </div>
                        </div>
                    @endif

                    @if ($wrapInCard)
                </div>

            </div>
        @endif

    @endif
@endif
