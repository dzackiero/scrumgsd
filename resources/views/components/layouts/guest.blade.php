<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ isset($title) ? "$title - Scrum GSD" : "Scrum GSD" }}</title>

    <link rel="icon" type="image/png" href="{{asset("images/icon.png")}}">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body>
<x-navigation-bar/>
<div class="w-screen min-h-svh bg-gradient-to-r from-primary-900 to-secondary-500">
    <svg class="absolute top-0 left-0 w-96 h-80 md:w-[604px] md:h-[504px]"
         viewBox="0 0 687 505" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g opacity="0.2">
            <path d="M228.669 305.031L163.155 195.509L184.136 115.137L145.698 52.5138L183.008 -6.0756L152.599 -58.556"
                  stroke="white"/>
            <path d="M324.595 -112.213L390.11 -2.69111L369.128 77.681L407.566 140.304L370.256 198.893L400.666 251.374"
                  stroke="white"/>
            <path d="M65.8373 456.013L-4.30076 329.544L-0.815012 267.816L-56.7364 172.793" stroke="white"/>
            <path d="M487.427 -263.196L557.566 -136.726L554.08 -74.9981L610.001 20.0249" stroke="white"/>
            <path d="M49.683 273.341L-19.8484 171.509L-12.6882 112.98L-90.8609 1.88981" stroke="white"/>
            <path d="M503.582 -80.5229L573.113 21.3092L565.953 79.8378L644.126 190.928" stroke="white"/>
            <path d="M258.308 165.858L148.364 3.30819" stroke="white"/>
            <path d="M294.957 26.9595L404.9 189.509" stroke="white"/>
            <path d="M195.377 375.157L77.199 218.492" stroke="white"/>
            <path d="M47.6704 151.516L4.60638 80.4522L15.9116 49.0118L-22.1186 -11.3651" stroke="white"/>
            <path d="M505.594 41.3022L548.658 112.366L537.353 143.806L575.383 204.183" stroke="white"/>
            <path d="M109.612 403.211L91.4465 375.575L97.9209 338.824" stroke="white"/>
            <path d="M15.3862 -30.5487L146.832 148.204L218.904 157.546L331.5 330.441" stroke="white"/>
            <path d="M537.878 223.366L406.432 44.6134L334.361 35.2721L221.765 -137.623" stroke="white"/>
            <circle cx="9.131" cy="9.131" r="8.631"
                    transform="matrix(0.983913 -0.17865 -0.17865 -0.983913 324.895 340.921)" fill="white"
                    stroke="white"/>
            <circle cx="7.60917" cy="7.60917" r="7.10917"
                    transform="matrix(0.983913 -0.17865 -0.17865 -0.983913 72.1636 184.189)" fill="white"
                    stroke="white"/>
            <circle cx="7.60917" cy="7.60917" r="7.10917"
                    transform="matrix(-0.983913 0.17865 0.17865 0.983913 481.101 8.62831)" fill="white" stroke="white"/>
            <circle cx="7.60917" cy="7.60917" r="7.10917"
                    transform="matrix(0.983913 -0.17865 -0.17865 -0.983913 41.543 160.362)" fill="white"
                    stroke="white"/>
            <circle cx="7.60917" cy="7.60917" r="7.10917"
                    transform="matrix(-0.983913 0.17865 0.17865 0.983913 511.722 32.4561)" fill="white" stroke="white"/>
            <circle cx="7.60917" cy="7.60917" r="7.10917"
                    transform="matrix(-0.983913 0.17865 0.17865 0.983913 650.389 182.83)" fill="white" stroke="white"/>
            <circle cx="7.60917" cy="7.60917" r="7.10917"
                    transform="matrix(-0.983913 0.17865 0.17865 0.983913 581.511 195.337)" fill="white" stroke="white"/>
            <circle cx="7.60917" cy="7.60917" r="7.10917"
                    transform="matrix(0.983913 -0.17865 -0.17865 -0.983913 252.929 174.568)" fill="white"
                    stroke="white"/>
            <circle cx="7.60917" cy="7.60917" r="7.10917"
                    transform="matrix(-0.983913 0.17865 0.17865 0.983913 300.335 18.2494)" fill="white" stroke="white"/>
            <circle cx="7.60917" cy="7.60917" r="7.10917"
                    transform="matrix(0.992314 -0.123742 -0.123742 -0.992314 189.297 386.336)" fill="white"
                    stroke="white"/>
            <circle cx="7.60917" cy="7.60917" r="7.10917"
                    transform="matrix(0.983913 -0.17865 -0.17865 -0.983913 226.488 318.574)" fill="white"
                    stroke="white"/>
            <circle cx="7.60917" cy="7.60917" r="7.10917"
                    transform="matrix(0.983913 -0.17865 -0.17865 -0.983913 141.488 12.2903)" fill="white"
                    stroke="white"/>
            <circle cx="7.60917" cy="7.60917" r="7.10917"
                    transform="matrix(-0.983913 0.17865 0.17865 0.983913 411.776 180.527)" fill="white" stroke="white"/>
            <circle cx="7.60917" cy="7.60917" r="7.10917"
                    transform="matrix(-0.983913 0.17865 0.17865 0.983913 544.755 214.384)" fill="white" stroke="white"/>
            <circle cx="7.60917" cy="7.60917" r="7.10917"
                    transform="matrix(-0.983913 0.17865 0.17865 0.983913 406.045 242.664)" fill="white" stroke="white"/>
            <circle cx="7.60917" cy="7.60917" r="7.10917"
                    transform="matrix(-0.983913 0.17865 0.17865 0.983913 404.543 259.95)" fill="white" stroke="white"/>
            <circle cx="7.60917" cy="7.60917" r="7.10917"
                    transform="matrix(-0.983913 0.17865 0.17865 0.983913 280.016 178.931)" fill="white" stroke="white"/>
            <circle cx="7.60917" cy="7.60917" r="7.10917"
                    transform="matrix(0.992314 -0.123742 -0.123742 -0.992314 70.913 228.412)" fill="white"
                    stroke="white"/>
            <circle cx="7.60917" cy="7.60917" r="7.10917"
                    transform="matrix(0.983913 -0.17865 -0.17865 -0.983913 137.069 277.581)" fill="white"
                    stroke="white"/>
            <circle cx="7.60917" cy="7.60917" r="7.10917"
                    transform="matrix(0.983913 -0.17865 -0.17865 -0.983913 103.484 412.057)" fill="white"
                    stroke="white"/>
            <circle cx="7.60917" cy="7.60917" r="7.10917"
                    transform="matrix(0.983913 -0.17865 -0.17865 -0.983913 100.812 486.784)" fill="white"
                    stroke="white"/>
            <circle cx="7.60917" cy="7.60917" r="7.10917"
                    transform="matrix(0.983913 -0.17865 -0.17865 -0.983913 59.7099 464.86)" fill="white"
                    stroke="white"/>
            <circle cx="7.60917" cy="7.60917" r="7.10917"
                    transform="matrix(0.983913 -0.17865 -0.17865 -0.983913 92.7471 344.404)" fill="white"
                    stroke="white"/>
            <circle cx="7.60917" cy="7.60917" r="7.10917"
                    transform="matrix(0.983913 -0.17865 -0.17865 -0.983913 43.5557 282.187)" fill="white"
                    stroke="white"/>
            <circle cx="7.60917" cy="7.60917" r="7.10917"
                    transform="matrix(-0.983913 0.17865 0.17865 0.983913 616.4 12.6762)" fill="white" stroke="white"/>
            <path d="M77.8516 175.652L143.636 268.427" stroke="white"/>
            <path d="M474.974 17.4744L410.068 -75.9174" stroke="white"/>
        </g>
    </svg>

    <div class="pt-36">
        {{ $slot }}
    </div>
</div>
<x-copyright/>
</body>
</html>
