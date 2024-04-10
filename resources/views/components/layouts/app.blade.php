<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ isset($title) ? "Scrum GSD - $title" : "Scrum GSD" }}</title>

    <link rel="icon" type="image/png" href="{{asset("images/icon.png")}}">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')
</head>
<body>
<x-navigation-bar/>
<div class="w-screen min-h-svh bg-gradient-to-r from-primary-900 to-secondary-500">
    <svg class="absolute top-0 right-0 w-96 h-80 md:w-[604px] md:h-[504px]" viewBox="0 0 687 505" fill="none"
         xmlns="http://www.w3.org/2000/svg">
        <g opacity="0.2">
            <path
                d="M458.331 305.031L523.845 195.509L502.864 115.137L541.302 52.5138L503.992 -6.0756L534.401 -58.556"
                stroke="white"/>
            <path
                d="M362.405 -112.213L296.89 -2.69111L317.872 77.681L279.434 140.304L316.744 198.893L286.334 251.374"
                stroke="white"/>
            <path d="M621.163 456.013L691.301 329.544L687.815 267.816L743.736 172.793" stroke="white"/>
            <path d="M199.573 -263.196L129.435 -136.726L132.92 -74.9981L76.9989 20.0249" stroke="white"/>
            <path d="M637.317 273.341L706.848 171.509L699.688 112.98L777.861 1.88981" stroke="white"/>
            <path d="M183.418 -80.5229L113.887 21.3092L121.047 79.8378L42.8744 190.928" stroke="white"/>
            <path d="M428.692 165.858L538.636 3.30819" stroke="white"/>
            <path d="M392.043 26.9595L282.1 189.509" stroke="white"/>
            <path d="M491.623 375.157L609.801 218.492" stroke="white"/>
            <path d="M639.33 151.516L682.394 80.4522L671.088 49.0118L709.119 -11.3651" stroke="white"/>
            <path d="M181.406 41.3022L138.342 112.366L149.647 143.806L111.617 204.183" stroke="white"/>
            <path d="M577.389 403.211L595.554 375.575L589.079 338.824" stroke="white"/>
            <path d="M671.614 -30.5487L540.168 148.204L468.096 157.546L355.5 330.441" stroke="white"/>
            <path d="M149.121 223.366L280.568 44.6134L352.639 35.2721L465.235 -137.623" stroke="white"/>
            <circle cx="354.752" cy="330.305" r="8.631" transform="rotate(-169.709 354.752 330.305)" fill="white"
                    stroke="white"/>
            <circle cx="608.709" cy="175.343" r="7.10917" transform="rotate(-169.709 608.709 175.343)" fill="white"
                    stroke="white"/>
            <circle cx="212.026" cy="17.4744" r="7.10917" transform="rotate(10.2911 212.026 17.4744)" fill="white"
                    stroke="white"/>
            <circle cx="639.33" cy="151.515" r="7.10917" transform="rotate(-169.709 639.33 151.515)" fill="white"
                    stroke="white"/>
            <circle cx="181.406" cy="41.3022" r="7.10917" transform="rotate(10.2911 181.406 41.3022)" fill="white"
                    stroke="white"/>
            <circle cx="42.7385" cy="191.677" r="7.10917" transform="rotate(10.2911 42.7385 191.677)" fill="white"
                    stroke="white"/>
            <circle cx="111.617" cy="204.183" r="7.10917" transform="rotate(10.2911 111.617 204.183)" fill="white"
                    stroke="white"/>
            <circle cx="427.943" cy="165.722" r="7.10917" transform="rotate(-169.709 427.943 165.722)" fill="white"
                    stroke="white"/>
            <circle cx="392.792" cy="27.0955" r="7.10917" transform="rotate(10.2911 392.792 27.0955)" fill="white"
                    stroke="white"/>
            <circle cx="491.094" cy="377.844" r="7.10917" transform="rotate(-172.892 491.094 377.844)" fill="white"
                    stroke="white"/>
            <circle cx="454.384" cy="309.728" r="7.10917" transform="rotate(-169.709 454.384 309.728)" fill="white"
                    stroke="white"/>
            <circle cx="539.384" cy="3.44412" r="7.10917" transform="rotate(-169.709 539.384 3.44412)" fill="white"
                    stroke="white"/>
            <circle cx="281.351" cy="189.374" r="7.10917" transform="rotate(10.2911 281.351 189.374)" fill="white"
                    stroke="white"/>
            <circle cx="148.373" cy="223.23" r="7.10917" transform="rotate(10.2911 148.373 223.23)" fill="white"
                    stroke="white"/>
            <circle cx="287.083" cy="251.51" r="7.10917" transform="rotate(10.2911 287.083 251.51)" fill="white"
                    stroke="white"/>
            <circle cx="288.584" cy="268.796" r="7.10917" transform="rotate(10.2911 288.584 268.796)" fill="white"
                    stroke="white"/>
            <circle cx="413.112" cy="187.777" r="7.10917" transform="rotate(10.2911 413.112 187.777)" fill="white"
                    stroke="white"/>
            <circle cx="609.478" cy="219.92" r="7.10917" transform="rotate(-172.892 609.478 219.92)" fill="white"
                    stroke="white"/>
            <circle cx="543.804" cy="268.735" r="7.10917" transform="rotate(-169.709 543.804 268.735)" fill="white"
                    stroke="white"/>
            <circle cx="577.389" cy="403.211" r="7.10917" transform="rotate(-169.709 577.389 403.211)" fill="white"
                    stroke="white"/>
            <circle cx="580.061" cy="477.938" r="7.10917" transform="rotate(-169.709 580.061 477.938)" fill="white"
                    stroke="white"/>
            <circle cx="621.163" cy="456.013" r="7.10917" transform="rotate(-169.709 621.163 456.013)" fill="white"
                    stroke="white"/>
            <circle cx="588.126" cy="335.558" r="7.10917" transform="rotate(-169.709 588.126 335.558)" fill="white"
                    stroke="white"/>
            <circle cx="637.317" cy="273.341" r="7.10917" transform="rotate(-169.709 637.317 273.341)" fill="white"
                    stroke="white"/>
            <circle cx="76.7271" cy="21.5223" r="7.10917" transform="rotate(10.2911 76.7271 21.5223)" fill="white"
                    stroke="white"/>
            <path d="M609.148 175.652L543.364 268.427" stroke="white"/>
            <path d="M212.026 17.4744L276.932 -75.9174" stroke="white"/>
        </g>
    </svg>
    <div class="pt-36">
        {{ $slot }}
    </div>
</div>
<x-copyright/>
</body>
</html>
