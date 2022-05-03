@if(!empty($message))
    <div {{ $attributes->merge(['class' => 'invalid-feedback']) }}>{!! $message !!}</div>
@elseif(!empty($inputKey) && !empty($getError($inputKey)))
    <div {{ $attributes->merge(['class' => 'invalid-feedback']) }}>{!! $getError($inputKey) !!}</div>
@else
    @if ($errors->isNotEmpty() && $showAllErrors)

        <div {!! $attributes->merge(['class' => 'notice d-flex bg-light-'.$type.' rounded border-'.$type.' border border-dashed p-6 mt-3 mb-5']) !!} role="alert">
            <div class="svg-icon svg-icon-2hx svg-icon-{{$type}} me-4">
                @if(empty($icon))
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"></rect>
                            <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3"></path>
                            <path d="M11.1750002,14.75 C10.9354169,14.75 10.6958335,14.6541667 10.5041669,14.4625 L8.58750019,12.5458333 C8.20416686,12.1625 8.20416686,11.5875 8.58750019,11.2041667 C8.97083352,10.8208333 9.59375019,10.8208333 9.92916686,11.2041667 L11.1750002,12.45 L14.3375002,9.2875 C14.7208335,8.90416667 15.2958335,8.90416667 15.6791669,9.2875 C16.0625002,9.67083333 16.0625002,10.2458333 15.6791669,10.6291667 L11.8458335,14.4625 C11.6541669,14.6541667 11.4145835,14.75 11.1750002,14.75 Z" fill="#000000"></path>
                        </g>
                    </svg>
                @else
                    {!! $icon !!}
                @endif
            </div>
            <div class="d-flex flex-stack flex-grow-1">
                <div class="fw-bold">
                    <h4 class="text-gray-800 fw-bolder">{{ $title }}</h4>
                    <div class="fs-6 text-gray-600">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    @elseif(!empty($getContextMessages()))
        @php
            $message = $getContextMessages();
            $type    = $message->type;
            $title   = $message->title;
            $msg     = $message->message;
        @endphp

        <div {!! $attributes->merge(['class' => 'alert alert-dismissible bg-'.$type.' d-flex flex-column align-items-center flex-sm-row w-100 p-4']) !!}>

            <div class="svg-icon svg-icon-2hx svg-icon-light me-4 mb-5 mb-sm-0">
                @if(empty($icon))
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path opacity="0.3" d="M2 4V16C2 16.6 2.4 17 3 17H13L16.6 20.6C17.1 21.1 18 20.8 18 20V17H21C21.6 17 22 16.6 22 16V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4Z" fill="black"></path>
                        <path d="M18 9H6C5.4 9 5 8.6 5 8C5 7.4 5.4 7 6 7H18C18.6 7 19 7.4 19 8C19 8.6 18.6 9 18 9ZM16 12C16 11.4 15.6 11 15 11H6C5.4 11 5 11.4 5 12C5 12.6 5.4 13 6 13H15C15.6 13 16 12.6 16 12Z" fill="black"></path>
                    </svg>
                @else
                    {!! $icon !!}
                @endif
            </div>

            <div class="d-flex flex-column text-light pe-0 pe-sm-10">
                @if(!empty($title))
                    <h4 class="mb-2 text-dark">{!! $title !!}</h4>
                @endif
                <span class="fw-bold lead">{!! $msg !!}</span>
            </div>

            <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
                <div class="svg-icon svg-icon-2x svg-icon-light">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"></rect>
                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>
                    </svg>
                </div>
            </button>
        </div>
    @elseif(!empty($getResponseMessage()))
        @php
            $response = $getResponseMessage();
            $success  = null;
            $error    = null;
            $bg       = !empty($success) ? 'success' : (!empty($error) ? 'warning' : 'primary');

            if (is_array($response))
            {
                $success = $response['success'] ?? null;
                $error   = $response['error']   ?? null;
                $msg     = $success             ?? $error;
            }elseif(is_string($message)){
                $msg     = $message;
            }
        @endphp

        @if(!empty($success) || !empty($error) || is_string($msg))

            <div {!! $attributes->merge(['class' => 'alert alert-dismissible bg-'.$bg.' d-flex flex-column align-items-center flex-sm-row w-100 p-4']) !!}>

                <div class="svg-icon svg-icon-2hx svg-icon-light me-4 mb-5 mb-sm-0">
                    @if(empty($icon))
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path opacity="0.3" d="M2 4V16C2 16.6 2.4 17 3 17H13L16.6 20.6C17.1 21.1 18 20.8 18 20V17H21C21.6 17 22 16.6 22 16V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4Z" fill="black"></path>
                            <path d="M18 9H6C5.4 9 5 8.6 5 8C5 7.4 5.4 7 6 7H18C18.6 7 19 7.4 19 8C19 8.6 18.6 9 18 9ZM16 12C16 11.4 15.6 11 15 11H6C5.4 11 5 11.4 5 12C5 12.6 5.4 13 6 13H15C15.6 13 16 12.6 16 12Z" fill="black"></path>
                        </svg>
                    @else
                        {!! $icon !!}
                    @endif
                </div>

                <div class="d-flex flex-column text-light pe-0 pe-sm-10">
                    @if(!empty($title))
                        <h4 class="mb-2 text-dark">{!! $title !!}</h4>
                    @endif
                    <span class="fw-bold lead">{!! $msg !!}</span>
                </div>

                <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
                    <div class="svg-icon svg-icon-2x svg-icon-light">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"></rect>
                            <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>
                        </svg>
                    </div>
                </button>
            </div>
        @endif
    @endif
@endif




