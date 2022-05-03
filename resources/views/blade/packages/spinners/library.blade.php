@props([
    'type',
    'color',
])

@if($type == 'atom')
    <svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         width="40px" height="40px" viewBox="0 0 40 40" enable-background="new 0 0 40 40" xml:space="preserve">
  <path opacity="0.2" fill="#000" d="M20.201,5.169c-8.254,0-14.946,6.692-14.946,14.946c0,8.255,6.692,14.946,14.946,14.946
    s14.946-6.691,14.946-14.946C35.146,11.861,28.455,5.169,20.201,5.169z M20.201,31.749c-6.425,0-11.634-5.208-11.634-11.634
    c0-6.425,5.209-11.634,11.634-11.634c6.425,0,11.633,5.209,11.633,11.634C31.834,26.541,26.626,31.749,20.201,31.749z"/>
        <path fill="#000" d="M26.013,10.047l1.654-2.866c-2.198-1.272-4.743-2.012-7.466-2.012h0v3.312h0
    C22.32,8.481,24.301,9.057,26.013,10.047z">
            <animateTransform attributeType="xml"
                              attributeName="transform"
                              type="rotate"
                              from="0 20 20"
                              to="360 20 20"
                              dur="0.5s"
                              repeatCount="indefinite"/>
        </path>
  </svg>
@elseif($type == 'circle-spinner')
    <svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         width="40px" height="40px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
  <path fill="#000" d="M25.251,6.461c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,6.543-14.615,14.615-14.615V6.461z">
      <animateTransform attributeType="xml"
                        attributeName="transform"
                        type="rotate"
                        from="0 25 25"
                        to="360 25 25"
                        dur="0.6s"
                        repeatCount="indefinite"/>
  </path>
  </svg>
@elseif($type == 'circle-spinner-alt')
    <svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         width="40px" height="40px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">
  <path fill="#000" d="M43.935,25.145c0-10.318-8.364-18.683-18.683-18.683c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,6.543-14.615,14.615-14.615c8.072,0,14.615,6.543,14.615,14.615H43.935z">
      <animateTransform attributeType="xml"
                        attributeName="transform"
                        type="rotate"
                        from="0 25 25"
                        to="360 25 25"
                        dur="0.6s"
                        repeatCount="indefinite"/>
  </path>
  </svg>
@elseif($type == 'audio-bar')
    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         width="24px" height="24px" viewBox="0 0 24 24" style="enable-background:new 0 0 50 50;" xml:space="preserve">
    <rect x="0" y="0" width="4" height="7" fill="#333">
        <animateTransform  attributeType="xml"
                           attributeName="transform" type="scale"
                           values="1,1; 1,3; 1,1"
                           begin="0s" dur="0.6s" repeatCount="indefinite" />
    </rect>

        <rect x="10" y="0" width="4" height="7" fill="#333">
            <animateTransform  attributeType="xml"
                               attributeName="transform" type="scale"
                               values="1,1; 1,3; 1,1"
                               begin="0.2s" dur="0.6s" repeatCount="indefinite" />
        </rect>
        <rect x="20" y="0" width="4" height="7" fill="#333">
            <animateTransform  attributeType="xml"
                               attributeName="transform" type="scale"
                               values="1,1; 1,3; 1,1"
                               begin="0.4s" dur="0.6s" repeatCount="indefinite" />
        </rect>
  </svg>
@elseif($type == 'audio-bar-alt')
    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         width="24px" height="30px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
    <rect x="0" y="0" width="4" height="10" fill="#333">
        <animateTransform attributeType="xml"
                          attributeName="transform" type="translate"
                          values="0 0; 0 20; 0 0"
                          begin="0" dur="0.6s" repeatCount="indefinite" />
    </rect>
        <rect x="10" y="0" width="4" height="10" fill="#333">
            <animateTransform attributeType="xml"
                              attributeName="transform" type="translate"
                              values="0 0; 0 20; 0 0"
                              begin="0.2s" dur="0.6s" repeatCount="indefinite" />
        </rect>
        <rect x="20" y="0" width="4" height="10" fill="#333">
            <animateTransform attributeType="xml"
                              attributeName="transform" type="translate"
                              values="0 0; 0 20; 0 0"
                              begin="0.4s" dur="0.6s" repeatCount="indefinite" />
        </rect>
  </svg>
@elseif($type == 'audio-bar-alt-2')
    <svg width="55" height="80" viewBox="0 0 55 80" xmlns="http://www.w3.org/2000/svg" fill="#FFF">
        <g transform="matrix(1 0 0 -1 0 80)">
            <rect width="10" height="20" rx="3">
                <animate attributeName="height"
                         begin="0s" dur="4.3s"
                         values="20;45;57;80;64;32;66;45;64;23;66;13;64;56;34;34;2;23;76;79;20" calcMode="linear"
                         repeatCount="indefinite" />
            </rect>
            <rect x="15" width="10" height="80" rx="3">
                <animate attributeName="height"
                         begin="0s" dur="2s"
                         values="80;55;33;5;75;23;73;33;12;14;60;80" calcMode="linear"
                         repeatCount="indefinite" />
            </rect>
            <rect x="30" width="10" height="50" rx="3">
                <animate attributeName="height"
                         begin="0s" dur="1.4s"
                         values="50;34;78;23;56;23;34;76;80;54;21;50" calcMode="linear"
                         repeatCount="indefinite" />
            </rect>
            <rect x="45" width="10" height="30" rx="3">
                <animate attributeName="height"
                         begin="0s" dur="2s"
                         values="30;45;13;80;56;72;45;76;34;23;67;30" calcMode="linear"
                         repeatCount="indefinite" />
            </rect>
        </g>
    </svg>
@elseif($type == 'bars')
    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         width="24px" height="30px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
    <rect x="0" y="13" width="4" height="5" fill="#333">
        <animate attributeName="height" attributeType="XML"
                 values="5;21;5"
                 begin="0s" dur="0.6s" repeatCount="indefinite" />
        <animate attributeName="y" attributeType="XML"
                 values="13; 5; 13"
                 begin="0s" dur="0.6s" repeatCount="indefinite" />
    </rect>
        <rect x="10" y="13" width="4" height="5" fill="#333">
            <animate attributeName="height" attributeType="XML"
                     values="5;21;5"
                     begin="0.15s" dur="0.6s" repeatCount="indefinite" />
            <animate attributeName="y" attributeType="XML"
                     values="13; 5; 13"
                     begin="0.15s" dur="0.6s" repeatCount="indefinite" />
        </rect>
        <rect x="20" y="13" width="4" height="5" fill="#333">
            <animate attributeName="height" attributeType="XML"
                     values="5;21;5"
                     begin="0.3s" dur="0.6s" repeatCount="indefinite" />
            <animate attributeName="y" attributeType="XML"
                     values="13; 5; 13"
                     begin="0.3s" dur="0.6s" repeatCount="indefinite" />
        </rect>
  </svg>
@elseif($type == 'bars-alt')
    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         width="24px" height="30px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
    <rect x="0" y="0" width="4" height="20" fill="#333">
        <animate attributeName="opacity" attributeType="XML"
                 values="1; .2; 1"
                 begin="0s" dur="0.6s" repeatCount="indefinite" />
    </rect>
        <rect x="7" y="0" width="4" height="20" fill="#333">
            <animate attributeName="opacity" attributeType="XML"
                     values="1; .2; 1"
                     begin="0.2s" dur="0.6s" repeatCount="indefinite" />
        </rect>
        <rect x="14" y="0" width="4" height="20" fill="#333">
            <animate attributeName="opacity" attributeType="XML"
                     values="1; .2; 1"
                     begin="0.4s" dur="0.6s" repeatCount="indefinite" />
        </rect>
  </svg>
@elseif($type == 'bars-alt-2')
    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         width="24px" height="30px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
    <rect x="0" y="10" width="4" height="10" fill="#333" opacity="0.2">
        <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0s" dur="0.6s" repeatCount="indefinite" />
        <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0s" dur="0.6s" repeatCount="indefinite" />
        <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0s" dur="0.6s" repeatCount="indefinite" />
    </rect>
        <rect x="8" y="10" width="4" height="10" fill="#333"  opacity="0.2">
            <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
            <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
            <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.15s" dur="0.6s" repeatCount="indefinite" />
        </rect>
        <rect x="16" y="10" width="4" height="10" fill="#333"  opacity="0.2">
            <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
            <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
            <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.3s" dur="0.6s" repeatCount="indefinite" />
        </rect>
  </svg>
@elseif($type == 'bars-alt-3')
    <style>
        /* Spinner Bars */
        .lds-bars {
            position: relative;
            width: 10px;
            border: 1px {{$color}} solid;
            background-color: rgba({{$color}},0.25);
            -webkit-animation: spBars 1s infinite linear;
            animation: spBars 1s infinite linear;
        }
        .lds-bars:after, .lds-bars:before {
            content:'';
            position: absolute;
            width: inherit;
            height: inherit;
            border: inherit;
            background-color: inherit;
            top: -1px;
        }
        .lds-bars:before {
            left: -20px;
            -webkit-animation: spBarsBefore 1s infinite linear;
            animation: spBarsBefore 1s infinite linear;
        }
        .lds-bars:after {
            right: -20px;
            -webkit-animation: spBarsAfter 1s infinite linear;
            animation: spBarsAfter 1s infinite linear;
        }
        @keyframes spBarsBefore {
            0% {
                transform: scale(1,1);
            }
            25% {
                transform: scale(1,1.25);
            }
            50% {
                transform: scale(1,0.75);
            }
            75% {
                transform: scale(1,1);
            }
            100% {
                transform: scale(1,1);
            }
        }
        @keyframes spBars {
            0% {
                transform: scale(1,1);
            }
            25% {
                transform: scale(1,1);
            }
            50% {
                transform: scale(1,1.25);
            }
            75% {
                transform: scale(1,1);
            }
            100% {
                transform: scale(1,1);
            }
        }
        @keyframes spBarsAfter {
            0% {
                transform: scale(1,1);
            }
            25% {
                transform: scale(1,1);
            }
            50% {
                transform: scale(1,0.75);
            }
            75% {
                transform: scale(1,1.25);
            }
            100% {
                transform: scale(1,1);
            }
        }
    </style>
    <div class="lds lds-bars"></div>
@elseif($type == 'bars-alt-4')
    <svg width="135" height="140" viewBox="0 0 135 140" xmlns="http://www.w3.org/2000/svg" fill="#fff">
        <rect y="10" width="15" height="120" rx="6">
            <animate attributeName="height"
                     begin="0.5s" dur="1s"
                     values="120;110;100;90;80;70;60;50;40;140;120" calcMode="linear"
                     repeatCount="indefinite" />
            <animate attributeName="y"
                     begin="0.5s" dur="1s"
                     values="10;15;20;25;30;35;40;45;50;0;10" calcMode="linear"
                     repeatCount="indefinite" />
        </rect>
        <rect x="30" y="10" width="15" height="120" rx="6">
            <animate attributeName="height"
                     begin="0.25s" dur="1s"
                     values="120;110;100;90;80;70;60;50;40;140;120" calcMode="linear"
                     repeatCount="indefinite" />
            <animate attributeName="y"
                     begin="0.25s" dur="1s"
                     values="10;15;20;25;30;35;40;45;50;0;10" calcMode="linear"
                     repeatCount="indefinite" />
        </rect>
        <rect x="60" width="15" height="140" rx="6">
            <animate attributeName="height"
                     begin="0s" dur="1s"
                     values="120;110;100;90;80;70;60;50;40;140;120" calcMode="linear"
                     repeatCount="indefinite" />
            <animate attributeName="y"
                     begin="0s" dur="1s"
                     values="10;15;20;25;30;35;40;45;50;0;10" calcMode="linear"
                     repeatCount="indefinite" />
        </rect>
        <rect x="90" y="10" width="15" height="120" rx="6">
            <animate attributeName="height"
                     begin="0.25s" dur="1s"
                     values="120;110;100;90;80;70;60;50;40;140;120" calcMode="linear"
                     repeatCount="indefinite" />
            <animate attributeName="y"
                     begin="0.25s" dur="1s"
                     values="10;15;20;25;30;35;40;45;50;0;10" calcMode="linear"
                     repeatCount="indefinite" />
        </rect>
        <rect x="120" y="10" width="15" height="120" rx="6">
            <animate attributeName="height"
                     begin="0.5s" dur="1s"
                     values="120;110;100;90;80;70;60;50;40;140;120" calcMode="linear"
                     repeatCount="indefinite" />
            <animate attributeName="y"
                     begin="0.5s" dur="1s"
                     values="10;15;20;25;30;35;40;45;50;0;10" calcMode="linear"
                     repeatCount="indefinite" />
        </rect>
    </svg>
@elseif($type == 'bars-alt-5')
    <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
    <rect x="20" y="50" width="4" height="10" fill="#fff">
        <animateTransform attributeType="xml"
                          attributeName="transform" type="translate"
                          values="0 0; 0 20; 0 0"
                          begin="0" dur="0.6s" repeatCount="indefinite" />
    </rect>
        <rect x="30" y="50" width="4" height="10" fill="#fff">
            <animateTransform attributeType="xml"
                              attributeName="transform" type="translate"
                              values="0 0; 0 20; 0 0"
                              begin="0.2s" dur="0.6s" repeatCount="indefinite" />
        </rect>
        <rect x="40" y="50" width="4" height="10" fill="#fff">
            <animateTransform attributeType="xml"
                              attributeName="transform" type="translate"
                              values="0 0; 0 20; 0 0"
                              begin="0.4s" dur="0.6s" repeatCount="indefinite" />
        </rect>
</svg>
@elseif($type == 'heartrate')
    <style>

        #pulsar{
            stroke-dasharray:281;
            -webkit-animation: dash 2.5s infinite linear forwards;
        }

        /*Animation*/
        @-webkit-keyframes dash {
            from { stroke-dashoffset: 814; }
            to { stroke-dashoffset: -814; }
        }
    </style>
    <svg version="1.2" height="300" width="600" xmlns="http://www.w3.org/2000/svg" viewport="0 0 60 60" xmlns:xlink="http://www.w3.org/1999/xlink">
        <path id="pulsar" stroke="rgba(0,155,155,1)" fill="none" stroke-width="1"stroke-linejoin="round" d="M0,90L250,90Q257,60 262,87T267,95 270,88 273,92t6,35 7,-60T290,127 297,107s2,-11 10,-10 1,1 8,-10T319,95c6,4 8,-6 10,-17s2,10 9,11h210" />
    </svg>
@elseif($type == 'md-spinner')
    <style>

        .spinner {
            animation: rotator {{$duration}} linear infinite;
        }

        @keyframes rotator {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(270deg); }
        }

        .path {
            stroke-dasharray: {{$offset}};
            stroke-dashoffset: 0;
            transform-origin: center;
            animation:
            dash {{$duration}} ease-in-out infinite,
            colors ({{$duration}} * 4) ease-in-out infinite;
        }

        @keyframes colors {
            0% { stroke: #4285F4; }
            25% { stroke: #DE3E35; }
            50% { stroke: #F7C223; }
            75% { stroke: #1B9A59; }
            100% { stroke: #4285F4; }
        }

        @keyframes dash {
            0% { stroke-dashoffset: {{$offset}}; }
            50% {
                stroke-dashoffset: {{$offset}}/4;
                transform:rotate(135deg);
            }
            100% {
                stroke-dashoffset: {{$offset}};
                transform:rotate(450deg);
            }
        }
    </style>
    <svg class="spinner" width="65px" height="65px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
        <circle class="path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
    </svg>
@elseif($type == 'gradient-square-cube')
    <style>
        svg {
            transform: rotate(45deg);
        }

        .gradient {
            animation-iteration-count: infinite;
            animation-duration: 1s;
            fill: url('#gradient-fill');
        }
        .square {
            animation-iteration-count: infinite;
            animation-duration: 2s;
            transition-timing-function: ease-in-out;
        }

        .s1 {
            animation-name: slide-1;
        }

        .s2 {
            animation-name: slide-2;
        }

        .s3 {
            animation-name: slide-3;
        }

        .s4 {
            animation-name: slide-4;
        }

        .s5 {
            animation-name: slide-5;
        }

        .s6 {
            animation-name: slide-6;
        }

        .s7 {
            animation-name: slide-7;
        }

        @keyframes slide-1 {
            37.5% {
                transform: translateX(0px);
            }
            50% {
                transform: translateX(100px);
            }
            100% {
                transform: translateX(100px);
            }
        }

        @keyframes slide-2 {
            25% {
                transform: translateX(0px);
            }
            37.5% {
                transform: translateX(100px);
            }
            100% {
                transform: translateX(100px);
            }
        }

        @keyframes slide-3 {
            12.5% {
                transform: translateY(0px);
            }
            25% {
                transform: translateY(100px);
            }
            100% {
                transform: translateY(100px);
            }
        }

        @keyframes slide-4 {
            50% {
                transform: translateY(0px);
            }
            62.5% {
                transform: translateY(-100px);
            }
            100% {
                transform: translateY(-100px);
            }
        }

        @keyframes slide-5 {
            12.5% {
                transform: translate(-100px, 0px);
            }
            87.5% {
                transform: translate(-100px, 0px);
            }
            100% {
                transform: translate(-100px, 100px);
            }
        }

        @keyframes slide-6 {
            62.5% {
                transform: translateY(0px);
            }
            75% {
                transform: translateY(-100px);
            }
            100% {
                transform: translateY(-100px);
            }
        }

        @keyframes slide-7 {
            75%  {
                transform: translateX(0px);
            }
            87.5% {
                transform: translateX(-100px);
            }
            100% {
                transform: translateX(-100px);
            }
        }
    </style>
    <svg width="100" height="100" viewBox="0 0 300 300">
        <defs>
            <linearGradient id="gradient-fill" gradientUnits="userSpaceOnUse" x1="0" y1="300" x2="300" y2="0">
                <stop offset="0%">
                    <animate attributeName="stop-color" values="#00E06B;#CB0255;#00E06B" dur="5s" repeatCount="indefinite" />
                </stop>
                <stop offset="100%">
                    <animate attributeName="stop-color" values="#04AFC8;#8904C5;#04AFC8" dur="8s" repeatCount="indefinite" />
                </stop>
            </linearGradient>
            <clipPath id="clip">
                <rect class="square s1" x="0" y="0" rx="12" ry="12" height="90" width="90"></rect>
                <rect class="square s2" x="100" y="0" rx="12" ry="12" height="90" width="90"></rect>
                <rect class="square s3" x="200" y="0" rx="12" ry="12" height="90" width="90"></rect>
                <rect class="square s4" x="0" y="100" rx="12" ry="12" height="90" width="90"></rect>
                <rect class="square s5" x="200" y="100" rx="12" ry="12" height="90" width="90"></rect>
                <rect class="square s6" x="0" y="200" rx="12" ry="12" height="90" width="90"></rect>
                <rect class="square s7" x="100" y="200" rx="12" ry="12" height="90" width="90"></rect>
            </clipPath>
        </defs>
        <rect class="gradient" clip-path="url('#clip')" height="300" width="300"></rect>
    </svg>
@elseif($type == 'clock')
    <svg version="1.1" id="L2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
<circle fill="none" stroke="#fff" stroke-width="4" stroke-miterlimit="10" cx="50" cy="50" r="48"/>
        <line fill="none" stroke-linecap="round" stroke="#fff" stroke-width="4" stroke-miterlimit="10" x1="50" y1="50" x2="85" y2="50.5">
            <animateTransform
                attributeName="transform"
                dur="2s"
                type="rotate"
                from="0 50 50"
                to="360 50 50"
                repeatCount="indefinite" />
        </line>
        <line fill="none" stroke-linecap="round" stroke="#fff" stroke-width="4" stroke-miterlimit="10" x1="50" y1="50" x2="49.5" y2="74">
            <animateTransform
                attributeName="transform"
                dur="15s"
                type="rotate"
                from="0 50 50"
                to="360 50 50"
                repeatCount="indefinite" />
        </line>
</svg>
@elseif($type == 'ring')
    <svg version="1.1" id="L3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
<circle fill="none" stroke="#fff" stroke-width="4" cx="50" cy="50" r="44" style="opacity:0.5;"/>
        <circle fill="#fff" stroke="#e74c3c" stroke-width="3" cx="8" cy="54" r="6" >
            <animateTransform
                attributeName="transform"
                dur="2s"
                type="rotate"
                from="0 50 48"
                to="360 50 52"
                repeatCount="indefinite" />

        </circle>
</svg>
@elseif($type == 'dots')
    <svg version="1.1" id="L4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
  <circle fill="#fff" stroke="none" cx="6" cy="50" r="6">
      <animate
          attributeName="opacity"
          dur="1s"
          values="0;1;0"
          repeatCount="indefinite"
          begin="0.1"/>
  </circle>
        <circle fill="#fff" stroke="none" cx="26" cy="50" r="6">
            <animate
                attributeName="opacity"
                dur="1s"
                values="0;1;0"
                repeatCount="indefinite"
                begin="0.2"/>
        </circle>
        <circle fill="#fff" stroke="none" cx="46" cy="50" r="6">
            <animate
                attributeName="opacity"
                dur="1s"
                values="0;1;0"
                repeatCount="indefinite"
                begin="0.3"/>
        </circle>
</svg>
@elseif($type == 'dots-alt')
    <svg version="1.1" id="L5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
  <circle fill="#fff" stroke="none" cx="6" cy="50" r="6">
      <animateTransform
          attributeName="transform"
          dur="1s"
          type="translate"
          values="0 15 ; 0 -15; 0 15"
          repeatCount="indefinite"
          begin="0.1"/>
  </circle>
        <circle fill="#fff" stroke="none" cx="30" cy="50" r="6">
            <animateTransform
                attributeName="transform"
                dur="1s"
                type="translate"
                values="0 10 ; 0 -10; 0 10"
                repeatCount="indefinite"
                begin="0.2"/>
        </circle>
        <circle fill="#fff" stroke="none" cx="54" cy="50" r="6">
            <animateTransform
                attributeName="transform"
                dur="1s"
                type="translate"
                values="0 5 ; 0 -5; 0 5"
                repeatCount="indefinite"
                begin="0.3"/>
        </circle>
</svg>
@elseif($type == 'square-box')
    <svg version="1.1" id="L6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
   <rect fill="none" stroke="#fff" stroke-width="4" x="25" y="25" width="50" height="50">
       <animateTransform
           attributeName="transform"
           dur="0.5s"
           from="0 50 50"
           to="180 50 50"
           type="rotate"
           id="strokeBox"
           attributeType="XML"
           begin="rectBox.end"/>
   </rect>
        <rect x="27" y="27" fill="#fff" width="46" height="50">
            <animate
                attributeName="height"
                dur="1.3s"
                attributeType="XML"
                from="50"
                to="0"
                id="rectBox"
                fill="freeze"
                begin="0s;strokeBox.end"/>
        </rect>
</svg>
@elseif($type == 'audio')
    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
<rect fill="#fff" width="3" height="100" transform="translate(0) rotate(180 3 50)">
    <animate
        attributeName="height"
        attributeType="XML"
        dur="1s"
        values="30; 100; 30"
        repeatCount="indefinite"/>
</rect>
        <rect x="17" fill="#fff" width="3" height="100" transform="translate(0) rotate(180 20 50)">
            <animate
                attributeName="height"
                attributeType="XML"
                dur="1s"
                values="30; 100; 30"
                repeatCount="indefinite"
                begin="0.1s"/>
        </rect>
        <rect x="40" fill="#fff" width="3" height="100" transform="translate(0) rotate(180 40 50)">
            <animate
                attributeName="height"
                attributeType="XML"
                dur="1s"
                values="30; 100; 30"
                repeatCount="indefinite"
                begin="0.3s"/>
        </rect>
        <rect x="60" fill="#fff" width="3" height="100" transform="translate(0) rotate(180 58 50)">
            <animate
                attributeName="height"
                attributeType="XML"
                dur="1s"
                values="30; 100; 30"
                repeatCount="indefinite"
                begin="0.5s"/>
        </rect>
        <rect x="80" fill="#fff" width="3" height="100" transform="translate(0) rotate(180 76 50)">
            <animate
                attributeName="height"
                attributeType="XML"
                dur="1s"
                values="30; 100; 30"
                repeatCount="indefinite"
                begin="0.1s"/>
        </rect>
</svg>
@elseif($type == 'circle')
    <svg version="1.1" id="L9" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
    <path fill="#fff" d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
        <animateTransform
            attributeName="transform"
            attributeType="XML"
            type="rotate"
            dur="1s"
            from="0 50 50"
            to="360 50 50"
            repeatCount="indefinite" />
    </path>
</svg>
@elseif($type == 'pulsating-ring')
    <svg width="60" height="60" viewBox="0 0 44 44" xmlns="http://www.w3.org/2000/svg" stroke="currentColor">
        <style type="text/css">
            <![CDATA[
            #c1, #c2 {
                animation:
                    size cubic-bezier(0.165, 0.84, 0.44, 1) 1.8s,
                    opacity cubic-bezier(0.3, 0.61, 0.355, 1) 1.8s;
                animation-iteration-count: infinite;
                transform-origin: 50% 50%;
                stroke-opacity: 1;
            }
            @keyframes size {
                0% { transform: scale(0); }
                100% { transform: scale(1); }
            }
            @keyframes opacity {
                0% { stroke-opacity: 1; }
                100% { stroke-opacity: 0; }
            }
            #c2 { animation-delay: -.9s; }
            ]]>
        </style>
        <g fill="none" fill-rule="evenodd" stroke-width="2">
            <circle cx="22" cy="22" r="20" id="c1" fill="none"></circle>
            <circle cx="22" cy="22" r="20" id="c2" fill="none"></circle>
        </g>
    </svg>
@elseif($type == 'donut')
    <svg class="whole" width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g id="loader">
            <animateTransform
                xlink:href="#loader"
                attributeName="transform"
                attributeType="XML"
                type="rotate"
                from="0 50 50"
                to="360 50 50"
                dur="1s"
                begin="0s"
                repeatCount="indefinite"
                restart="always"
            />
            <path class="a" opacity="0.2" fill-rule="evenodd" clip-rule="evenodd" d="M50 100C77.6142 100 100 77.6142 100 50C100 22.3858 77.6142 0 50 0C22.3858 0 0 22.3858 0 50C0 77.6142 22.3858 100 50 100ZM50 90C72.0914 90 90 72.0914 90 50C90 27.9086 72.0914 10 50 10C27.9086 10 10 27.9086 10 50C10 72.0914 27.9086 90 50 90Z" fill="#66B1DC"/>
            <path class="b" fill-rule="evenodd" clip-rule="evenodd" d="M100 50C100 22.3858 77.6142 0 50 0V10C72.0914 10 90 27.9086 90 50H100Z" fill="#66B1DC"/>
        </g>
    </svg>
@elseif($type == 'ball-triangle')
    <svg width="57" height="57" viewBox="0 0 57 57" xmlns="http://www.w3.org/2000/svg" stroke="#fff">
        <g fill="none" fill-rule="evenodd">
            <g transform="translate(1 1)" stroke-width="2">
                <circle cx="5" cy="50" r="5">
                    <animate attributeName="cy"
                             begin="0s" dur="2.2s"
                             values="50;5;50;50"
                             calcMode="linear"
                             repeatCount="indefinite" />
                    <animate attributeName="cx"
                             begin="0s" dur="2.2s"
                             values="5;27;49;5"
                             calcMode="linear"
                             repeatCount="indefinite" />
                </circle>
                <circle cx="27" cy="5" r="5">
                    <animate attributeName="cy"
                             begin="0s" dur="2.2s"
                             from="5" to="5"
                             values="5;50;50;5"
                             calcMode="linear"
                             repeatCount="indefinite" />
                    <animate attributeName="cx"
                             begin="0s" dur="2.2s"
                             from="27" to="27"
                             values="27;49;5;27"
                             calcMode="linear"
                             repeatCount="indefinite" />
                </circle>
                <circle cx="49" cy="50" r="5">
                    <animate attributeName="cy"
                             begin="0s" dur="2.2s"
                             values="50;50;5;50"
                             calcMode="linear"
                             repeatCount="indefinite" />
                    <animate attributeName="cx"
                             from="49" to="49"
                             begin="0s" dur="2.2s"
                             values="49;5;27;49"
                             calcMode="linear"
                             repeatCount="indefinite" />
                </circle>
            </g>
        </g>
    </svg>
@elseif($type == 'threedots')
    <svg width="120" height="30" viewBox="0 0 120 30" xmlns="http://www.w3.org/2000/svg" fill="#fff">
        <circle cx="15" cy="15" r="15">
            <animate attributeName="r" from="15" to="15"
                     begin="0s" dur="0.8s"
                     values="15;9;15" calcMode="linear"
                     repeatCount="indefinite" />
            <animate attributeName="fill-opacity" from="1" to="1"
                     begin="0s" dur="0.8s"
                     values="1;.5;1" calcMode="linear"
                     repeatCount="indefinite" />
        </circle>
        <circle cx="60" cy="15" r="9" fill-opacity="0.3">
            <animate attributeName="r" from="9" to="9"
                     begin="0s" dur="0.8s"
                     values="9;15;9" calcMode="linear"
                     repeatCount="indefinite" />
            <animate attributeName="fill-opacity" from="0.5" to="0.5"
                     begin="0s" dur="0.8s"
                     values=".5;1;.5" calcMode="linear"
                     repeatCount="indefinite" />
        </circle>
        <circle cx="105" cy="15" r="15">
            <animate attributeName="r" from="15" to="15"
                     begin="0s" dur="0.8s"
                     values="15;9;15" calcMode="linear"
                     repeatCount="indefinite" />
            <animate attributeName="fill-opacity" from="1" to="1"
                     begin="0s" dur="0.8s"
                     values="1;.5;1" calcMode="linear"
                     repeatCount="indefinite" />
        </circle>
    </svg>
@elseif($type == 'circles-and-dots')
    <svg width="135" height="135" viewBox="0 0 135 135" xmlns="http://www.w3.org/2000/svg" fill="#fff">
        <path d="M67.447 58c5.523 0 10-4.477 10-10s-4.477-10-10-10-10 4.477-10 10 4.477 10 10 10zm9.448 9.447c0 5.523 4.477 10 10 10 5.522 0 10-4.477 10-10s-4.478-10-10-10c-5.523 0-10 4.477-10 10zm-9.448 9.448c-5.523 0-10 4.477-10 10 0 5.522 4.477 10 10 10s10-4.478 10-10c0-5.523-4.477-10-10-10zM58 67.447c0-5.523-4.477-10-10-10s-10 4.477-10 10 4.477 10 10 10 10-4.477 10-10z">
            <animateTransform
                attributeName="transform"
                type="rotate"
                from="0 67 67"
                to="-360 67 67"
                dur="2.5s"
                repeatCount="indefinite"/>
        </path>
        <path d="M28.19 40.31c6.627 0 12-5.374 12-12 0-6.628-5.373-12-12-12-6.628 0-12 5.372-12 12 0 6.626 5.372 12 12 12zm30.72-19.825c4.686 4.687 12.284 4.687 16.97 0 4.686-4.686 4.686-12.284 0-16.97-4.686-4.687-12.284-4.687-16.97 0-4.687 4.686-4.687 12.284 0 16.97zm35.74 7.705c0 6.627 5.37 12 12 12 6.626 0 12-5.373 12-12 0-6.628-5.374-12-12-12-6.63 0-12 5.372-12 12zm19.822 30.72c-4.686 4.686-4.686 12.284 0 16.97 4.687 4.686 12.285 4.686 16.97 0 4.687-4.686 4.687-12.284 0-16.97-4.685-4.687-12.283-4.687-16.97 0zm-7.704 35.74c-6.627 0-12 5.37-12 12 0 6.626 5.373 12 12 12s12-5.374 12-12c0-6.63-5.373-12-12-12zm-30.72 19.822c-4.686-4.686-12.284-4.686-16.97 0-4.686 4.687-4.686 12.285 0 16.97 4.686 4.687 12.284 4.687 16.97 0 4.687-4.685 4.687-12.283 0-16.97zm-35.74-7.704c0-6.627-5.372-12-12-12-6.626 0-12 5.373-12 12s5.374 12 12 12c6.628 0 12-5.373 12-12zm-19.823-30.72c4.687-4.686 4.687-12.284 0-16.97-4.686-4.686-12.284-4.686-16.97 0-4.687 4.686-4.687 12.284 0 16.97 4.686 4.687 12.284 4.687 16.97 0z">
            <animateTransform
                attributeName="transform"
                type="rotate"
                from="0 67 67"
                to="360 67 67"
                dur="8s"
                repeatCount="indefinite"/>
        </path>
    </svg>
@elseif($type == 'grid-dots')
    <svg width="105" height="105" viewBox="0 0 105 105" xmlns="http://www.w3.org/2000/svg" fill="#fff">
        <circle cx="12.5" cy="12.5" r="12.5">
            <animate attributeName="fill-opacity"
                     begin="0s" dur="1s"
                     values="1;.2;1" calcMode="linear"
                     repeatCount="indefinite" />
        </circle>
        <circle cx="12.5" cy="52.5" r="12.5" fill-opacity=".5">
            <animate attributeName="fill-opacity"
                     begin="100ms" dur="1s"
                     values="1;.2;1" calcMode="linear"
                     repeatCount="indefinite" />
        </circle>
        <circle cx="52.5" cy="12.5" r="12.5">
            <animate attributeName="fill-opacity"
                     begin="300ms" dur="1s"
                     values="1;.2;1" calcMode="linear"
                     repeatCount="indefinite" />
        </circle>
        <circle cx="52.5" cy="52.5" r="12.5">
            <animate attributeName="fill-opacity"
                     begin="600ms" dur="1s"
                     values="1;.2;1" calcMode="linear"
                     repeatCount="indefinite" />
        </circle>
        <circle cx="92.5" cy="12.5" r="12.5">
            <animate attributeName="fill-opacity"
                     begin="800ms" dur="1s"
                     values="1;.2;1" calcMode="linear"
                     repeatCount="indefinite" />
        </circle>
        <circle cx="92.5" cy="52.5" r="12.5">
            <animate attributeName="fill-opacity"
                     begin="400ms" dur="1s"
                     values="1;.2;1" calcMode="linear"
                     repeatCount="indefinite" />
        </circle>
        <circle cx="12.5" cy="92.5" r="12.5">
            <animate attributeName="fill-opacity"
                     begin="700ms" dur="1s"
                     values="1;.2;1" calcMode="linear"
                     repeatCount="indefinite" />
        </circle>
        <circle cx="52.5" cy="92.5" r="12.5">
            <animate attributeName="fill-opacity"
                     begin="500ms" dur="1s"
                     values="1;.2;1" calcMode="linear"
                     repeatCount="indefinite" />
        </circle>
        <circle cx="92.5" cy="92.5" r="12.5">
            <animate attributeName="fill-opacity"
                     begin="200ms" dur="1s"
                     values="1;.2;1" calcMode="linear"
                     repeatCount="indefinite" />
        </circle>
    </svg>
@elseif($type == 'love-hearts')
    <svg width="140" height="64" viewBox="0 0 140 64" xmlns="http://www.w3.org/2000/svg" fill="#fff">
        <path d="M30.262 57.02L7.195 40.723c-5.84-3.976-7.56-12.06-3.842-18.063 3.715-6 11.467-7.65 17.306-3.68l4.52 3.76 2.6-5.274c3.717-6.002 11.47-7.65 17.305-3.68 5.84 3.97 7.56 12.054 3.842 18.062L34.49 56.118c-.897 1.512-2.793 1.915-4.228.9z" fill-opacity=".5">
            <animate attributeName="fill-opacity"
                     begin="0s" dur="1.4s"
                     values="0.5;1;0.5"
                     calcMode="linear"
                     repeatCount="indefinite" />
        </path>
        <path d="M105.512 56.12l-14.44-24.272c-3.716-6.008-1.996-14.093 3.843-18.062 5.835-3.97 13.588-2.322 17.306 3.68l2.6 5.274 4.52-3.76c5.84-3.97 13.592-2.32 17.307 3.68 3.718 6.003 1.998 14.088-3.842 18.064L109.74 57.02c-1.434 1.014-3.33.61-4.228-.9z" fill-opacity=".5">
            <animate attributeName="fill-opacity"
                     begin="0.7s" dur="1.4s"
                     values="0.5;1;0.5"
                     calcMode="linear"
                     repeatCount="indefinite" />
        </path>
        <path d="M67.408 57.834l-23.01-24.98c-5.864-6.15-5.864-16.108 0-22.248 5.86-6.14 15.37-6.14 21.234 0L70 16.168l4.368-5.562c5.863-6.14 15.375-6.14 21.235 0 5.863 6.14 5.863 16.098 0 22.247l-23.007 24.98c-1.43 1.556-3.757 1.556-5.188 0z" />
    </svg>
@elseif($type == 'oval-ring')
    <svg width="38" height="38" viewBox="0 0 38 38" xmlns="http://www.w3.org/2000/svg" stroke="#fff">
        <g fill="none" fill-rule="evenodd">
            <g transform="translate(1 1)" stroke-width="2">
                <circle stroke-opacity=".5" cx="18" cy="18" r="18"/>
                <path d="M36 18c0-9.94-8.06-18-18-18">
                    <animateTransform
                        attributeName="transform"
                        type="rotate"
                        from="0 18 18"
                        to="360 18 18"
                        dur="1s"
                        repeatCount="indefinite"/>
                </path>
            </g>
        </g>
    </svg>
@elseif($type == 'puff')
    <svg width="44" height="44" viewBox="0 0 44 44" xmlns="http://www.w3.org/2000/svg" stroke="#fff">
        <g fill="none" fill-rule="evenodd" stroke-width="2">
            <circle cx="22" cy="22" r="1">
                <animate attributeName="r"
                         begin="0s" dur="1.8s"
                         values="1; 20"
                         calcMode="spline"
                         keyTimes="0; 1"
                         keySplines="0.165, 0.84, 0.44, 1"
                         repeatCount="indefinite" />
                <animate attributeName="stroke-opacity"
                         begin="0s" dur="1.8s"
                         values="1; 0"
                         calcMode="spline"
                         keyTimes="0; 1"
                         keySplines="0.3, 0.61, 0.355, 1"
                         repeatCount="indefinite" />
            </circle>
            <circle cx="22" cy="22" r="1">
                <animate attributeName="r"
                         begin="-0.9s" dur="1.8s"
                         values="1; 20"
                         calcMode="spline"
                         keyTimes="0; 1"
                         keySplines="0.165, 0.84, 0.44, 1"
                         repeatCount="indefinite" />
                <animate attributeName="stroke-opacity"
                         begin="-0.9s" dur="1.8s"
                         values="1; 0"
                         calcMode="spline"
                         keyTimes="0; 1"
                         keySplines="0.3, 0.61, 0.355, 1"
                         repeatCount="indefinite" />
            </circle>
        </g>
    </svg>
@elseif($type == 'rings')
    <svg width="45" height="45" viewBox="0 0 45 45" xmlns="http://www.w3.org/2000/svg" stroke="#fff">
        <g fill="none" fill-rule="evenodd" transform="translate(1 1)" stroke-width="2">
            <circle cx="22" cy="22" r="6" stroke-opacity="0">
                <animate attributeName="r"
                         begin="1.5s" dur="3s"
                         values="6;22"
                         calcMode="linear"
                         repeatCount="indefinite" />
                <animate attributeName="stroke-opacity"
                         begin="1.5s" dur="3s"
                         values="1;0" calcMode="linear"
                         repeatCount="indefinite" />
                <animate attributeName="stroke-width"
                         begin="1.5s" dur="3s"
                         values="2;0" calcMode="linear"
                         repeatCount="indefinite" />
            </circle>
            <circle cx="22" cy="22" r="6" stroke-opacity="0">
                <animate attributeName="r"
                         begin="3s" dur="3s"
                         values="6;22"
                         calcMode="linear"
                         repeatCount="indefinite" />
                <animate attributeName="stroke-opacity"
                         begin="3s" dur="3s"
                         values="1;0" calcMode="linear"
                         repeatCount="indefinite" />
                <animate attributeName="stroke-width"
                         begin="3s" dur="3s"
                         values="2;0" calcMode="linear"
                         repeatCount="indefinite" />
            </circle>
            <circle cx="22" cy="22" r="8">
                <animate attributeName="r"
                         begin="0s" dur="1.5s"
                         values="6;1;2;3;4;5;6"
                         calcMode="linear"
                         repeatCount="indefinite" />
            </circle>
        </g>
    </svg>
@elseif($type == 'spinning-circles')
    <svg width="58" height="58" viewBox="0 0 58 58" xmlns="http://www.w3.org/2000/svg">
        <g fill="none" fill-rule="evenodd">
            <g transform="translate(2 1)" stroke="#FFF" stroke-width="1.5">
                <circle cx="42.601" cy="11.462" r="5" fill-opacity="1" fill="#fff">
                    <animate attributeName="fill-opacity"
                             begin="0s" dur="1.3s"
                             values="1;0;0;0;0;0;0;0" calcMode="linear"
                             repeatCount="indefinite" />
                </circle>
                <circle cx="49.063" cy="27.063" r="5" fill-opacity="0" fill="#fff">
                    <animate attributeName="fill-opacity"
                             begin="0s" dur="1.3s"
                             values="0;1;0;0;0;0;0;0" calcMode="linear"
                             repeatCount="indefinite" />
                </circle>
                <circle cx="42.601" cy="42.663" r="5" fill-opacity="0" fill="#fff">
                    <animate attributeName="fill-opacity"
                             begin="0s" dur="1.3s"
                             values="0;0;1;0;0;0;0;0" calcMode="linear"
                             repeatCount="indefinite" />
                </circle>
                <circle cx="27" cy="49.125" r="5" fill-opacity="0" fill="#fff">
                    <animate attributeName="fill-opacity"
                             begin="0s" dur="1.3s"
                             values="0;0;0;1;0;0;0;0" calcMode="linear"
                             repeatCount="indefinite" />
                </circle>
                <circle cx="11.399" cy="42.663" r="5" fill-opacity="0" fill="#fff">
                    <animate attributeName="fill-opacity"
                             begin="0s" dur="1.3s"
                             values="0;0;0;0;1;0;0;0" calcMode="linear"
                             repeatCount="indefinite" />
                </circle>
                <circle cx="4.938" cy="27.063" r="5" fill-opacity="0" fill="#fff">
                    <animate attributeName="fill-opacity"
                             begin="0s" dur="1.3s"
                             values="0;0;0;0;0;1;0;0" calcMode="linear"
                             repeatCount="indefinite" />
                </circle>
                <circle cx="11.399" cy="11.462" r="5" fill-opacity="0" fill="#fff">
                    <animate attributeName="fill-opacity"
                             begin="0s" dur="1.3s"
                             values="0;0;0;0;0;0;1;0" calcMode="linear"
                             repeatCount="indefinite" />
                </circle>
                <circle cx="27" cy="5" r="5" fill-opacity="0" fill="#fff">
                    <animate attributeName="fill-opacity"
                             begin="0s" dur="1.3s"
                             values="0;0;0;0;0;0;0;1" calcMode="linear"
                             repeatCount="indefinite" />
                </circle>
            </g>
        </g>
    </svg>
@elseif($type == 'tailspin')
    <svg width="38" height="38" viewBox="0 0 38 38" xmlns="http://www.w3.org/2000/svg">
        <defs>
            <linearGradient x1="8.042%" y1="0%" x2="65.682%" y2="23.865%" id="a">
                <stop stop-color="#fff" stop-opacity="0" offset="0%"/>
                <stop stop-color="#fff" stop-opacity=".631" offset="63.146%"/>
                <stop stop-color="#fff" offset="100%"/>
            </linearGradient>
        </defs>
        <g fill="none" fill-rule="evenodd">
            <g transform="translate(1 1)">
                <path d="M36 18c0-9.94-8.06-18-18-18" id="Oval-2" stroke="url(#a)" stroke-width="2">
                    <animateTransform
                        attributeName="transform"
                        type="rotate"
                        from="0 18 18"
                        to="360 18 18"
                        dur="0.9s"
                        repeatCount="indefinite" />
                </path>
                <circle fill="#fff" cx="36" cy="18" r="1">
                    <animateTransform
                        attributeName="transform"
                        type="rotate"
                        from="0 18 18"
                        to="360 18 18"
                        dur="0.9s"
                        repeatCount="indefinite" />
                </circle>
            </g>
        </g>
    </svg>
@elseif($type == 'circle')
    <style>
        /* Spinner Circle Rotation */
        .lds-circle {
            border: 4px rgba({{$color}},0.25) solid;
            border-top: 4px rgba({{$color}},1) solid;
            border-radius: 50%;
            -webkit-animation: spCircRot .6s infinite linear;
            animation: spCircRot .6s infinite linear;
        }
        @-webkit-keyframes spCircRot {
            from { -webkit-transform: rotate(0deg); }
            to { -webkit-transform: rotate(359deg); }
        }
        @keyframes spCircRot {
            from { transform: rotate(0deg); }
            to { transform: rotate(359deg); }
        }
    </style>
    <div class="lds lds-circle"></div>
@elseif($type == '3balls')
    <style>

        /* Spinner 3Balls Scale */
        .lds-3balls, .lds-3balls:before, .lds-3balls:after {
            border-radius: 50%;
            background-color: {{$color}};
            width: 18px;
            height: 18px;
            transform-origin: center center;
            display: inline-block;
        }
        .lds-3balls {
            position: relative;
            background-color: rgba({{$color}},1);
            opacity: 1;
            -webkit-animation: spScaleAlpha 1s infinite linear;
            animation: spScaleAlpha 1s infinite linear;
        }
        .lds-3balls:before, .lds-3balls:after {
            content: '';
            position: relative;
            opacity: 0.25;
        }
        .lds-3balls:before {
            left: 30px;
            top: 0px;
            -webkit-animation: spScaleAlphaBefore 1s infinite linear;
            animation: spScaleAlphaBefore 1s infinite linear;
        }
        .lds-3balls:after {
            left: -30px;
            top: -23px;
            -webkit-animation: spScaleAlphaAfter 1s infinite linear;
            animation: spScaleAlphaAfter 1s infinite linear;
        }
        @-webkit-keyframes spScaleAlpha {
            0% { opacity: 1; }
            33% { opacity: 0.25; }
            66% { opacity: 0.25; }
            100% { opacity: 1; }
        }
        @keyframes spScaleAlpha {
            0% { opacity: 1; }
            33% {  opacity: 0.25; }
            66% { opacity: 0.25; }
            100% {  opacity: 1; }
        }
        @-webkit-keyframes spScaleAlphaBefore {
            0% { opacity: 0.25; }
            33% { opacity: 1; }
            66% { opacity: 0.25; }
        }
        @keyframes spScaleAlphaBefore {
            0% { opacity: 0.25; }
            33% { opacity: 1; }
            66% { opacity: 0.25; }
        }
        @-webkit-keyframes spScaleAlphaAfter {
            33% { opacity: 0.25; }
            66% { opacity: 1; }
            100% { opacity: 0.25; }
        }
        @keyframes spScaleAlphaAfter {
            33% { opacity: 0.25; }
            66% { opacity: 1; }
            100% { opacity: 0.25; }
        }
    </style>
    <div class="lds lds-3balls"></div>
@elseif($type == 'volume')
    <style>
        /* Spinner VolumeButton */
        .lds-volume {
            background-color: {{$color}};
            border-radius: 50%;
            position: relative;
            -webkit-animation: spVolRot .6s infinite linear;
            animation: spVolRot .6s infinite linear;
        }
        .lds-volume:after {
            content: '';
            border-radius: 50%;
            position: absolute;
            display: block;
            width: 10px;
            height: 10px;
            left: 5px;
            top: 5px;
            background-color: lighten({{$color}},100%);
        }
        @-webkit-keyframes spVolRot {
            from { -webkit-transform: rotate(0deg); }
            to { -webkit-transform: rotate(359deg); }
        }
        @keyframes spVolRot {
            from { transform: rotate(0deg); }
            to { transform: rotate(359deg); }
        }
    </style>
    <div class="lds lds-volume"></div>
@elseif($type == 'heartrate')
    <style>
        /* Spinner Vortex */
        .lds-vortex {
            border: 1px {{$color}} solid;
            border-radius: 4px;
            overflow: hidden;
            position: relative;
        }
        .lds-vortex:after, .lds-vortex:before {
            content: '';
            border-radius: 50%;
            position: absolute;
            width: inherit;
            height: inherit;
            -webkit-animation: spVortex 2s infinite linear;
            animation: spVortex 2s infinite linear;
        }
        .lds-vortex:before {
            border-top: 6px {{$color}} solid;
            top: -3px;
            left: calc( -50% - 3px );
            transform-origin: right center;
        }
        .lds-vortex:after {
            border-bottom: 6px {{$color}} solid;
            top: 3px;
            right: calc( -50% - 3px );
            transform-origin: left center;
        }
        @-webkit-keyframes spVortex {
            from { -webkit-transform: rotate(0deg); }
            to { -webkit-transform: rotate(359deg); }
        }
        @keyframes spVortex {
            from { transform: rotate(0deg); }
            to { transform: rotate(359deg); }
        }
    </style>
    <div class="lds lds-vortex"></div>
@elseif($type == 'slices')
    <style>
        /* Spinner Slices */
        .lds-slices {
            border-radius: 50%;
            border-top: 16px rgba({{$color}},0.75) solid;
            border-left: 16px rgba({{$color}},0.25) solid;
            border-bottom: 16px rgba({{$color}},0.25) solid;
            border-right: 16px rgba({{$color}},0.25) solid;
            -webkit-animation: spSlices 1s infinite linear;
            animation: spSlices 1s infinite linear;
        }
        @-webkit-keyframes spSlices {
            0% {
                border-top: 16px rgba({{$color}},0.75) solid;
                border-right: 16px rgba({{$color}},0.25) solid;
                border-bottom: 16px rgba({{$color}},0.25) solid;
                border-left: 16px rgba({{$color}},0.25) solid;
            }
            25% {
                border-top: 16px rgba({{$color}},0.25) solid;
                border-right: 16px rgba({{$color}},0.75) solid;
                border-bottom: 16px rgba({{$color}},0.25) solid;
                border-left: 16px rgba({{$color}},0.25) solid;
            }
            50% {
                border-top: 16px rgba({{$color}},0.25) solid;
                border-right: 16px rgba({{$color}},0.25) solid;
                border-bottom: 16px rgba({{$color}},0.75) solid;
                border-left: 16px rgba({{$color}},0.25) solid;
            }
            75% {
                border-top: 16px rgba({{$color}},0.25) solid;
                border-right: 16px rgba({{$color}},0.25) solid;
                border-bottom: 16px rgba({{$color}},0.25) solid;
                border-left: 16px rgba({{$color}},0.75) solid;
            }
            100% {
                border-top: 16px rgba({{$color}},0.75) solid;
                border-right: 16px rgba({{$color}},0.25) solid;
                border-bottom: 16px rgba({{$color}},0.25) solid;
                border-left: 16px rgba({{$color}},0.25) solid;
            }
        }
        @keyframes spSlices {
            0% {
                border-top: 16px rgba({{$color}},0.75) solid;
                border-right: 16px rgba({{$color}},0.25) solid;
                border-bottom: 16px rgba({{$color}},0.25) solid;
                border-left: 16px rgba({{$color}},0.25) solid;
            }
            25% {
                border-top: 16px rgba({{$color}},0.25) solid;
                border-right: 16px rgba({{$color}},0.75) solid;
                border-bottom: 16px rgba({{$color}},0.25) solid;
                border-left: 16px rgba({{$color}},0.25) solid;
            }
            50% {
                border-top: 16px rgba({{$color}},0.25) solid;
                border-right: 16px rgba({{$color}},0.25) solid;
                border-bottom: 16px rgba({{$color}},0.75) solid;
                border-left: 16px rgba({{$color}},0.25) solid;
            }
            75% {
                border-top: 16px rgba({{$color}},0.25) solid;
                border-right: 16px rgba({{$color}},0.25) solid;
                border-bottom: 16px rgba({{$color}},0.25) solid;
                border-left: 16px rgba({{$color}},0.75) solid;
            }
            100% {
                border-top: 16px rgba({{$color}},0.75) solid;
                border-right: 16px rgba({{$color}},0.25) solid;
                border-bottom: 16px rgba({{$color}},0.25) solid;
                border-left: 16px rgba({{$color}},0.25) solid;
            }
        }
    </style>
    <div class="lds lds-slices"></div>
@elseif($type == 'sphere')
    <style>
        /* Spinner Sphere */
        .lds-sphere {
            border-radius: 50%;
            border-left: 0px {{$color}} solid;
            border-right: 0px {{$color}} solid;
            -webkit-animation: spSphere 1s infinite linear;
            animation: spSphere 1s infinite linear;
        }
        @-webkit-keyframes spSphere {
            0% {
                border-left: 0px {{$color}} solid;
                border-right: 0px {{$color}} solid;
            }
            33% {
                border-left: 32px {{$color}} solid;
                border-right: 0px {{$color}} solid;
            }
            34% {
                border-left: 0px {{$color}} solid;
                border-right: 32px {{$color}} solid;
            }
            66% {
                border-left: 0px {{$color}} solid;
                border-right: 0px {{$color}} solid;
            }
        }
        @keyframes spSphere {
            0% {
                border-left: 0px {{$color}} solid;
                border-right: 0px {{$color}} solid;
            }
            33% {
                border-left: 32px {{$color}} solid;
                border-right: 0px {{$color}} solid;
            }
            34% {
                border-left: 0px {{$color}} solid;
                border-right: 32px {{$color}} solid;
            }
            66% {
                border-left: 0px {{$color}} solid;
                border-right: 0px {{$color}} solid;
            }
        }

    </style>
    <div class="lds lds-sphere"></div>
@elseif($type == 'clock')
    <style>
        /* Spinner Clock */
        .lds-clock {
            border: 1px {{$color}} solid;
            border-radius: 50%;
            position: relative;
        }
        .lds-clock:before {
            content:'';
            border-left: 1px {{$color}} solid;
            position: absolute;
            top: 2px;
            width: 1px;
            height: calc( 50% - 2px );
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
            -ms-transform-origin: 0% 100%;
            -webkit-transform-origin: 0% 100%;
            transform-origin: 0% 100%;
            -webkit-animation: spClock 1s infinite linear;
            animation: spClock 1s infinite linear;
        }
        @-webkit-keyframes spClock {
            from { -webkit-transform: rotate(0deg); }
            to { -webkit-transform: rotate(359deg); }
        }
        @keyframes spClock {
            from { transform: rotate(0deg); }
            to { transform: rotate(359deg); }
        }
    </style>
    <div class="lds lds-clock"></div>
@elseif($type == 'wave')
    <style>
        /* Spinner Wave */
        .lds-wave {
            border-radius: 50%;
            position: relative;
            opacity: 1;
        }
        .lds-wave:before, .lds-wave:after  {
            content:'';
            border: 1px {{$color}} solid;
            border-radius: 50%;
            width: 100%;
            height: 100%;
            position: absolute;
            left:0px;
        }
        .lds-wave:before {
            transform: scale(1,1);
            opacity: 1;
            -webkit-animation: spWaveBe 0.6s infinite linear;
            animation: spWaveBe 0.6s infinite linear;
        }
        .lds-wave:after {
            transform: scale(0,0);
            opacity: 0;
            -webkit-animation: spWaveAf 0.6s infinite linear;
            animation: spWaveAf 0.6s infinite linear;
        }
        @-webkit-keyframes spWaveAf {
            from { -webkit-transform: scale(0.5,0.5); opacity: 0; }
            to { -webkit-transform: scale(1,1); opacity: 1; }
        }
        @keyframes spWaveAf {
            from { transform: scale(0.5,0.5); opacity: 0; }
            to { transform: scale(1,1); opacity: 1; }
        }
        @-webkit-keyframes spWaveBe {
            from { -webkit-transform: scale(1,1); opacity: 1; }
            to { -webkit-transform: scale(1.5,1.5); opacity: 0; }
        }
        @keyframes spWaveBe {
            from { -webkit-transform: scale(1,1); opacity: 1; }
            to { -webkit-transform: scale(1.5,1.5); opacity: 0; }
        }
    </style>
    <div class="lds lds-wave"></div>
@elseif($type == 'texture')
    <style>
        /* Spinner Texture */
        .lds-texture {
            border: 1px {{$color}} solid;
            border-radius: 4px;
            position: relative;
            background: linear-gradient(45deg, transparent 49%, {{$color}} 50%, {{$color}} 50%, transparent 51%, transparent),
            linear-gradient(-45deg, transparent 49%, {{$color}} 50%, {{$color}} 50%, transparent 51%, transparent);
            background-size: 16px 16px;
            background-position: 0% 0%;
            -webkit-animation: spTexture 1s infinite linear;
            animation: spTexture 1s infinite linear;
        }
        @-webkit-keyframes spTexture {
            from { background-position: 0px 0px; }
            to { background-position: -16px 0px; }
        }
        @keyframes spTexture {
            from { background-position: 0px 0px; }
            to { background-position: -16px 0px; }
        }
    </style>
    <div class="lds lds-texture"></div>
@elseif($type == 'loadbar')
    <style>
        /* Spinner LoadBar */
        .lds-loadbar {
            width: 50px;
            height: 18px;
            border: 1px {{$color}} solid;
            border-radius: 4px;
            background: linear-gradient(-60deg, transparent 0%, transparent 50%, {{$color}} 50%, {{$color}} 75%, transparent 75%, transparent);
            background-size: 20px 30px;
            background-position: 0px 0px;
            -webkit-animation: spLoadBar 0.8s infinite linear;
            animation: spLoadBar 0.8s infinite linear;
        }
        @-webkit-keyframes spLoadBar {
            from { background-position: 0px 0px; }
            to { background-position: -20px 0px; }
        }
        @keyframes spLoadBar {
            from { background-position: 0px 0px; }
            to { background-position: -20px 0px; }
        }
    </style>
    <div class="lds lds-loadbar"></div>
@elseif($type == 'hydrogen')
    <style>
        /* Spinner Hydrogen */
        .lds-hydrogen {
            position: relative;
            border: 1px {{$color}} solid;
            border-radius: 50%;
            -webkit-animation: spHydro 0.6s infinite linear;
            animation: spHydro 0.6s infinite linear;
        }
        .lds-hydrogen:before, .lds-hydrogen:after {
            content: '';
            position: absolute;
            width: 10px;
            height: 10px;
            background-color: {{$color}};
            border-radius: 50%;
        }
        .lds-hydrogen:before {
            top: calc( 50% - 5px );
            left: calc( 50% - 5px );
        }
        .lds-hydrogen:after {
            top: -1px;
            left: -1px;
        }
        @-webkit-keyframes spHydro {
            from { -webkit-transform: rotate(0deg); }
            to { -webkit-transform: rotate(359deg); }
        }
        @keyframes spHydro {
            from { transform: rotate(0deg); }
            to { transform: rotate(359deg); }
        }
    </style>
    <div class="lds lds-hydrogen"></div>
@elseif($type == 'timer')
    <svg version="1.1" id="L2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
         viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
<circle fill="none" stroke="#fff" stroke-width="4" stroke-miterlimit="10" cx="50" cy="50" r="48"/>
        <line fill="none" stroke-linecap="round" stroke="#fff" stroke-width="4" stroke-miterlimit="10" x1="50" y1="50" x2="85" y2="50.5">
            <animateTransform
                attributeName="transform"
                dur="2s"
                type="rotate"
                from="0 50 50"
                to="360 50 50"
                repeatCount="indefinite" />
        </line>
        <line fill="none" stroke-linecap="round" stroke="#fff" stroke-width="4" stroke-miterlimit="10" x1="50" y1="50" x2="49.5" y2="74">
            <animateTransform
                attributeName="transform"
                dur="15s"
                type="rotate"
                from="0 50 50"
                to="360 50 50"
                repeatCount="indefinite" />
        </line>
</svg>
@elseif($type == 'typing_loader')
    <style>

        /*Typing Loader*/
        .lds-typing_loader{
            width: 6px;
            height: 6px;
            border-radius: 50%;
            -webkit-animation: typing 1s linear infinite alternate;
            -moz-animation: Typing 1s linear infinite alternate;
            animation: typing 1s linear infinite alternate;
            left: -12px;
        }
        @-webkit-keyframes typing{
            0%{
                background-color: rgba(255,255,255, 1);
                box-shadow: 12px 0px 0px 0px rgba(255,255,255,0.2),
                24px 0px 0px 0px rgba(255,255,255,0.2);
            }
            25%{
                background-color: rgba(255,255,255, 0.4);
                box-shadow: 12px 0px 0px 0px rgba(255,255,255,2),
                24px 0px 0px 0px rgba(255,255,255,0.2);
            }
            75%{ background-color: rgba(255,255,255, 0.4);
                box-shadow: 12px 0px 0px 0px rgba(255,255,255,0.2),
                24px 0px 0px 0px rgba(255,255,255,1);
            }
        }

        @-moz-keyframes typing{
            0%{
                background-color: rgba(255,255,255, 1);
                box-shadow: 12px 0px 0px 0px rgba(255,255,255,0.2),
                24px 0px 0px 0px rgba(255,255,255,0.2);
            }
            25%{
                background-color: rgba(255,255,255, 0.4);
                box-shadow: 12px 0px 0px 0px rgba(255,255,255,2),
                24px 0px 0px 0px rgba(255,255,255,0.2);
            }
            75%{ background-color: rgba(255,255,255, 0.4);
                box-shadow: 12px 0px 0px 0px rgba(255,255,255,0.2),
                24px 0px 0px 0px rgba(255,255,255,1);
            }
        }

        @keyframes typing{
            0%{
                background-color: rgba(255,255,255, 1);
                box-shadow: 12px 0px 0px 0px rgba(255,255,255,0.2),
                24px 0px 0px 0px rgba(255,255,255,0.2);
            }
            25%{
                background-color: rgba(255,255,255, 0.4);
                box-shadow: 12px 0px 0px 0px rgba(255,255,255,2),
                24px 0px 0px 0px rgba(255,255,255,0.2);
            }
            75%{ background-color: rgba(255,255,255, 0.4);
                box-shadow: 12px 0px 0px 0px rgba(255,255,255,0.2),
                24px 0px 0px 0px rgba(255,255,255,1);
            }
        }
    </style>
    <div class="lds lds-typing_loader"></div>
@elseif($type == 'location_indicator')
    <style>
        /*Location indicator */
        .lds-location_indicator{

        }

        .lds-location_indicator:before, .lds-location_indicator:after{
            position: absolute;
            content: "";
        }

        .lds-location_indicator:before{
            width: 20px;
            height: 20px;
            border-radius: 100% 100% 100% 0;
            box-shadow: 0px 0px 0px 2px rgba(255,255,255,1);
            -webkit-animation: mapping 1s linear infinite;
            -moz-animation: mapping 1s linear infinite;
            animation: mapping 1s linear infinite;
            -webkit-transform: rotate(-46deg);
            -moz-transform: rotate(-46deg);
            transform: rotate(-46deg);
        }

        .lds-location_indicator:after{
            width: 30px;
            height: 10px;
            border-radius: 100%;
            background-color: rgba(255, 255, 255, 0.2);
            top: 24px;
            z-index: -1;
        }

        @-webkit-keyframes mapping{
            0% {top: 0;}
            50%{top: -5px;}
            100% {top:0; }
        }
        @-moz-keyframes mapping{
            0% {top: 0;}
            50%{top: -5px;}
            100% {top:0; }
        }

        @-keyframes mapping {
        0% {
            top: 0;
        }
        50% {
            top: -5px;
        }
        100% {
            top: 0;
        }
        }
    </style>
    <div class="lds lds-location_indicator"></div>
@elseif($type == 'dashboard')
    <style>

        /* go in*/
        .lds-dashboard{
            width: 32px;
            height: 32px;
            border: 2px rgba(255,255,255,1) solid;
            border-radius: 100%;
            overflow: hidden;
            z-index: 1;
        }
        .lds-dashboard:after, .lds-dashboard:before{
            position: absolute;
            content: "";
        }
        .lds-dashboard:after{
            width:14px;
            height: 2px;
            top: 22px;
            left: 16px;
            -webkit-transform-origin: 1px 1px;
            -moz-transform-origin: 1px 1px;
            transform-origin: 1px 1px;
            background-color: rgba(255,255,255,1);
            -webkit-animation: dashboard_hand 2s linear infinite alternate;
            -moz-animation: dashboard_hand 2s linear infinite alternate;
            animation: dashboard_hand 2s linear infinite alternate;
        }
        .lds-dashboard:before{
            width: 32px;
            height: 10px;
            background-color: rgba(255,255,255,1);
            top:22px;
            left: 0;
        }
        @-webkit-keyframes dashboard_hand{
            0%{ -webkit-transform: rotate(-160deg);}
            100%{ -webkit-transform: rotate(-20deg);}
        }
        @-moz-keyframes dashboard_hand{
            0%{ -moz-transform: rotate(-160deg);}
            100%{ -moz-transform: rotate(-20deg);}
        }
        @keyframes dashboard_hand{
            0%{ transform: rotate(-160deg);}
            100%{ transform: rotate(-20deg);}
        }
    </style>
    <div class="lds lds-dashboard"></div>
@elseif($type == 'battery')
    <style>
        /*Battery*/
        .lds-battery{
            width: 28px;
            height: 14px;
            border: 1px {{$color}} solid;
            border-radius: 2px;
            -webkit-animation: charge 5s linear infinite;
            -moz-animation: charge 5s linear infinite;
            animation: charge 5s linear infinite;
            top: 40px;
        }
        .lds-battery:after{
            width: 2px;
            height: 7px;
            background-color: {{$color}};
            border-radius: 0px 1px 1px 0px;
            position: absolute;
            content: "";
            top: 2px;
            right: -4px;
        }
        @-webkit-keyframes charge{
            0%{box-shadow: inset 0px 0px 0px {{$color}};}
            100%{box-shadow: inset 30px 0px 0px {{$color}};}
        }
        @-moz-keyframes charge{
            0%{box-shadow: inset 0px 0px 0px {{$color}};}
            100%{box-shadow: inset 30px 0px 0px {{$color}};}
        }
        @keyframes charge{
            0%{box-shadow: inset 0px 0px 0px {{$color}};}
            100%{box-shadow: inset 30px 0px 0px {{$color}};}
        }
    </style>
    <div class="lds lds-battery"></div>
@elseif($type == 'magnifier')
    <style>
        .lds-magnifier{
            width: 20px;
            height: 20px;
            box-shadow: 0px 0px 0px 1px {{$color}};
            border-radius: 50%;
            -webkit-animation: magnify 1s linear infinite alternate;
            -moz-animation: magnify 1s linear infinite alternate;
            animation: magnify 1s linear infinite alternate;
        }
        .lds-magnifier:after, .magnifier:before{
            position: absolute;
            content: "";
        }
        .lds-magnifier:before{
            content: "me";
            font-size: 12px;
            left: 2px;
            text-align: center;
            top: 2px;
        }
        .lds-magnifier:after{
            width: 2px;
            height: 8px;
            background-color: {{$color}};
            bottom: -6px;
            left: 20px;
            border-radius: 2px;
            -webkit-transform: rotate(-45deg);
            -moz-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }

        @-webkit-keyframes magnify{
            0%{-webkit-transform: scale(1); }
            100%{-webkit-transform: scale(1.5);}
        }
        @-moz-keyframes magnify{
            0%{-moz-transform: scale(1); }
            100%{-moz-transform: scale(1.5);}
        }
        @keyframes magnify{
            0%{transform: scale(1); }
            100%{transform: scale(1.5);}
        }
    </style>
    <div class="lds lds-magnifier"></div>
@elseif($type == 'cloud')
    <style>
        /*cloud*/

        .lds-cloud{
            width: 4px;
            height: 10px;
            opacity: 0.5;
            box-shadow: 6px 0px 0px 0px rgba(255,255,255,1),
            12px 0px 0px 0px rgba(255,255,255,1),
            18px 0px 0px 0px rgba(255,255,255,1),
            24px 0px 0px 0px rgba(255,255,255,1),
            30px 0px 0px 0px rgba(255,255,255,1),
            36px 0px 0px 0px rgba(255,255,255,1);

            -webkit-animation: rain 1s linear infinite alternate;
            -moz-animation: rain 1s linear infinite alternate;
            animation: rain 1s linear infinite alternate;
        }
        .lds-cloud:after{
            width: 40px;
            height: 10px;
            position: absolute;
            content: "";
            background-color: rgba(255,255,255,1);
            top: 0px;
            opacity: 1;
            -webkit-animation: line_flow 2s linear infinite reverse;
            -moz-animation: line_flow 2s linear infinite reverse;
            animation: line_flow 2s linear infinite reverse;
        }

        @-webkit-keyframes rain{
            0%{
                box-shadow: 6px 0px 0px 0px rgba(255,255,255,1),
                12px 0px 0px 0px rgba(255,255,255,0.9),
                18px 0px 0px 0px rgba(255,255,255,0.7),
                24px 0px 0px 0px rgba(255,255,255,0.6),
                30px 0px 0px 0px rgba(255,255,255,0.3),
                36px 0px 0px 0px rgba(255,255,255,0.2);
            }
            100%{
                box-shadow: 6px 0px 0px 0px rgba(255,255,255,0.2),
                12px 0px 0px 0px rgba(255,255,255,0.3),
                18px 0px 0px 0px rgba(255,255,255,0.6),
                24px 0px 0px 0px rgba(255,255,255,0.7),
                30px 0px 0px 0px rgba(255,255,255,0.9),
                36px 0px 0px 0px rgba(255,255,255,1);
                opacity: 1;
            }
        }
        @-moz-keyframes rain{
            0%{
                box-shadow: 6px 0px 0px 0px rgba(255,255,255,1),
                12px 0px 0px 0px rgba(255,255,255,0.9),
                18px 0px 0px 0px rgba(255,255,255,0.7),
                24px 0px 0px 0px rgba(255,255,255,0.6),
                30px 0px 0px 0px rgba(255,255,255,0.3),
                36px 0px 0px 0px rgba(255,255,255,0.2);
            }
            100%{
                box-shadow: 6px 0px 0px 0px rgba(255,255,255,0.2),
                12px 0px 0px 0px rgba(255,255,255,0.3),
                18px 0px 0px 0px rgba(255,255,255,0.6),
                24px 0px 0px 0px rgba(255,255,255,0.7),
                30px 0px 0px 0px rgba(255,255,255,0.9),
                36px 0px 0px 0px rgba(255,255,255,1);
                opacity: 1;
            }
        }
        @keyframes rain{
            0%{
                box-shadow: 6px 0px 0px 0px rgba(255,255,255,1),
                12px 0px 0px 0px rgba(255,255,255,0.9),
                18px 0px 0px 0px rgba(255,255,255,0.7),
                24px 0px 0px 0px rgba(255,255,255,0.6),
                30px 0px 0px 0px rgba(255,255,255,0.3),
                36px 0px 0px 0px rgba(255,255,255,0.2);
            }
            100%{
                box-shadow: 6px 0px 0px 0px rgba(255,255,255,0.2),
                12px 0px 0px 0px rgba(255,255,255,0.3),
                18px 0px 0px 0px rgba(255,255,255,0.6),
                24px 0px 0px 0px rgba(255,255,255,0.7),
                30px 0px 0px 0px rgba(255,255,255,0.9),
                36px 0px 0px 0px rgba(255,255,255,1);
                opacity: 1;
            }
        }

        @-webkit-keyframes line_flow{
            0%{ width: 0px;}
            100%{width: 40px;}
        }
        @-moz-keyframes line_flow{
            0%{ width: 0px;}
            100%{width: 40px;}
        }
        @keyframes line_flow{
            0%{ width: 0px;}
            100%{width: 40px;}
        }
    </style>
    <div class="lds lds-cloud"></div>
@elseif($type == 'eye')
    <style>
        /*eye ball*/
        .lds-eye{
            width: 20px;
            height: 20px;
            background-color: rgba(255,255,255,0.8);
            border-radius: 50%;
            box-shadow: 30px 0px 0px 0px rgba(255,255,255,0.8);
        }

        .lds-eye:after{
            background-color: #59488b;
            width: 10px;
            height: 10px;
            box-shadow: 30px 0px 0px 0px #59488b;
            border-radius: 50%;
            left: 9px;
            top: 8px;
            position: absolute;
            content: "";
            -webkit-animation: eyeball 2s linear infinite alternate;
            -moz-animation: eyeball 2s linear infinite alternate;
            animation: eyeball 2s linear infinite alternate;
        }
        @-webkit-keyframes eyeball{
            0%{left: 9px;}
            100%{left: 1px;}
        }
        @-moz-keyframes eyeball{
            0%{left: 9px;}
            100%{left: 1px;}
        }
        @keyframes eyeball{
            0%{left: 9px;}
            100%{left: 1px;}
        }
    </style>
    <div class="lds lds-eye"></div>
@elseif($type == 'coffee_cup')
    <style>
        /*coffee cup*/
        .lds-coffee_cup{
            width: 20px;
            height: 24px;
            border: 1px rgba(255,255,255,1) solid;
            border-radius: 0px 0px 5px 5px;
        }
        .lds-coffee_cup:after, .lds-coffee_cup:before{
            position: absolute;
            content: "";
        }
        .lds-coffee_cup:after{
            width: 5px;
            height: 12px;
            border: 1px {{$color}} solid;
            border-left: none;
            border-radius: 0px 20px 20px 0px;
            left: 20px;
        }
        .lds-coffee_cup:before{
            width: 1px;
            height: 6px;
            background-color: rgba(255,255,255,1);
            top: -10px;
            left: 4px;
            box-shadow: 5px 0px 0px 0px rgba(255,255,255,1),
            5px -5px 0px 0px rgba(255,255,255,1),
            10px 0px 0px 0px rgba(255,255,255,1);
            -webkit-animation: steam 1s linear infinite alternate;
            -moz-animation: steam 1s linear infinite alternate;
            animation: steam 1s linear infinite alternate;
        }

        @-webkit-keyframes steam{
            0%{height: 0px;}
            100%{height: 6px;}
        }
        @-moz-keyframes steam{
            0%{height: 0px}
            100%{height: 6px;}
        }
        @keyframes steam{
            0%{height: 0px}
            100%{height: 6px;}
        }
    </style>
    <div class="lds lds-coffee_cup"></div>
@elseif($type == 'square')
    <style>
        /*square*/
        .lds-square{
            width: 20px;
            height: 20px;
            border:1px  rgba(255,255,255,1) solid;
            -webkit-animation: fill_color 5s linear infinite;
            -moz-animation: fill_color 5s linear infinite;
            animation: fill_color 5s linear infinite;
        }
        .lds-square:after{
            width: 4px;
            height: 4px;
            position: absolute;
            content: "";
            background-color: rgba(255,255,255,1);
            top: -8px;
            left: 0px;
            -webkit-animation: square_check 1s ease-in-out infinite;
            -moz-animation: square_check 1s ease-in-out infinite;
            animation: square_check 1s ease-in-out infinite;
        }

        @-webkit-keyframes square_check{
            25%{ left: 22px; top: -8px;}
            50%{ left: 22px; top: 22px;}
            75%{ left: -9px; top: 22px;}
            100%{ left: -9px; top: -7px;}
        }
        @-moz-keyframes square_check{
            25%{ left: 22px; top: -8px;}
            50%{ left: 22px; top: 22px;}
            75%{ left: -9px; top: 22px;}
            100%{ left: -9px; top: -7px;}
        }
        @keyframes square_check{
            25%{ left: 22px; top: -8px;}
            50%{ left: 22px; top: 22px;}
            75%{ left: -9px; top: 22px;}
            100%{ left: -9px; top: -7px;}
        }
        @-webkit-keyframes fill_color{
            0%{ box-shadow: inset 0px 0px 0px 0px rgba(255,255,255,0.1);}
            100%{ box-shadow: inset 0px -20px 0px 0px rgba(255,255,255,1);}
        }
        @-moz-keyframes fill_color{
            0%{ box-shadow: inset 0px 0px 0px 0px rgba(255,255,255,0.1);}
            100%{ box-shadow: inset 0px -20px 0px 0px rgba(255,255,255,1);}
        }
        @keyframes fill_color{
            0%{ box-shadow: inset 0px 0px 0px 0px rgba(255,255,255,0.1);}
            100%{ box-shadow: inset 0px -20px 0px 0px rgba(255,255,255,1);}
        }
    </style>
    <div class="lds lds-square"></div>
@elseif($type == 'circle')
    <style>
        /*circle classic*/
        .lds-circle{
            width: 8px;
            height: 8px;
            background-color: rgba(255,255,255,.5);;
            box-shadow: -14px 0px 0px rgba(255,255,255,1);
            border-radius: 50%;
            -webkit-animation: circle_classic 1s ease-in-out infinite alternate;
            -moz-animation: circle_classic 1s ease-in-out infinite alternate;
            animation: circle_classic 1s ease-in-out infinite alternate;
        }

        @-webkit-keyframes circle_classic{
            0%{ opacity: 0.1; -webkit-transform: rotate(0deg) scale(0.5);}
            100%{opacity: 1; -webkit-transform: rotate(360deg) scale(1.2);}
        }
        @-moz-keyframes circle_classic{
            0%{ opacity: 0.1; -moz-transform: rotate(0deg) scale(0.5);}
            100%{opacity: 1; -moz-transform: rotate(360deg) scale(1.2);}
        }
        @keyframes circle_classic{
            0%{ opacity: 0.1; transform: rotate(0deg) scale(0.5);}
            100%{opacity: 1; transform: rotate(360deg) scale(1.2);}
        }
    </style>
    <div class="lds lds-circle"></div>
@elseif($type == 'material')
    <style>

        $offset: 187;
        $duration: 1.4s;

        .lds-material {
            animation: rotator $duration linear infinite;
        }

        @keyframes rotator {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(270deg); }
        }

        .path {
            stroke-dasharray: $offset;
            stroke-dashoffset: 0;
            transform-origin: center;
            animation:
            dash $duration ease-in-out infinite,
            colors ($duration*4) ease-in-out infinite;
        }

        @keyframes colors {
            0% { stroke: #4285F4; }
            25% { stroke: #DE3E35; }
            50% { stroke: #F7C223; }
            75% { stroke: #1B9A59; }
            100% { stroke: #4285F4; }
        }

        @keyframes dash {
            0% { stroke-dashoffset: $offset; }
            50% {
                stroke-dashoffset: $offset/4;
                transform:rotate(135deg);
            }
            100% {
                stroke-dashoffset: $offset;
                transform:rotate(450deg);
            }
        }
    </style>
    <svg class="lds lds-material" width="65px" height="65px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
        <circle class="path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
    </svg>
@else
    xcs
@endif
