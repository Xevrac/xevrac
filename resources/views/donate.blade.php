<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>xevrac</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        <script type="text/javascript" src="//code.jquery.com/jquery-latest.js"></script>
        <script data-pace-options='{ "ajax": false }' src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
        <script src="{{ asset('js/app.js') }}"></script>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ mix('css/main.css') }}">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div id="particles-js" style="position: absolute;width: 100%;height: 100%;z-index: -1; background-color: #182741; overflow: hidden;"></div>
        <div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">
            <div class="mx-auto sm:px-6 lg:px-8 max-w-full" style="width: 32%;">
                <div>
                    <svg width="259.439990234375px" height="131.63999023437498px" xmlns="http://www.w3.org/2000/svg" viewBox="164.2800048828125 0 259.439990234375 64" style="background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%;" preserveAspectRatio="xMidYMid"><defs><filter id="editing-hole" x="-100%" y="-100%" width="300%" height="300%"><feFlood flood-color="#000000" result="black"></feFlood><feMorphology operator="dilate" radius="2" in="SourceGraphic" result="erode"></feMorphology><feGaussianBlur in="erode" stdDeviation="4" result="blur"></feGaussianBlur><feOffset in="blur" dx="2" dy="2" result="offset"></feOffset><feComposite operator="atop" in="offset" in2="black" result="merge"></feComposite><feComposite operator="in" in="merge" in2="SourceGraphic" result="inner-shadow"></feComposite></filter></defs><g filter="url(#editing-hole)"><g transform="translate(163.02734375, 91.734375)"><path d="M1.25 0L11.97-16.38L11.97-16.38Q10.69-18.19 9.41-20.17L9.41-20.17L9.41-20.17Q8.13-22.16 6.84-24.17L6.84-24.17L6.84-24.17Q5.56-26.19 4.28-28.16L4.28-28.16L4.28-28.16Q3-30.13 1.72-31.94L1.72-31.94L8.88-31.94L15.06-21.94L15.97-20L16.84-21.94L16.84-21.94Q18.47-24.38 19.97-26.94L19.97-26.94L19.97-26.94Q21.47-29.50 23.06-31.94L23.06-31.94L30.16-31.94L19.50-15.84L29.97 0L22.81 0L16.28-10.44L15.44-12.28L14.59-10.44L8.28 0L1.25 0ZM33.66-15.66L33.66-15.66L33.66-15.66Q33.66-20.16 34.75-23.41L34.75-23.41L34.75-23.41Q35.84-26.66 37.81-28.75L37.81-28.75L37.81-28.75Q39.78-30.84 42.52-31.83L42.52-31.83L42.52-31.83Q45.25-32.81 48.53-32.81L48.53-32.81L48.53-32.81Q51.56-32.81 53.95-31.80L53.95-31.80L53.95-31.80Q56.34-30.78 58-28.94L58-28.94L58-28.94Q59.66-27.09 60.53-24.53L60.53-24.53L60.53-24.53Q61.41-21.97 61.41-18.88L61.41-18.88L61.41-18.88Q61.41-17.81 61.31-16.91L61.31-16.91L61.31-16.91Q61.22-16 61.09-15.34L61.09-15.34L61.09-15.34Q60.97-14.56 60.81-13.94L60.81-13.94L40.31-14.03L40.31-14.03Q40.34-11.25 40.91-9.42L40.91-9.42L40.91-9.42Q41.47-7.59 42.58-6.53L42.58-6.53L42.58-6.53Q43.69-5.47 45.38-5.05L45.38-5.05L45.38-5.05Q47.06-4.63 49.38-4.63L49.38-4.63L49.38-4.63Q51.34-4.63 52.91-4.88L52.91-4.88L52.91-4.88Q54.47-5.13 55.56-5.47L55.56-5.47L55.56-5.47Q56.81-5.84 57.81-6.34L57.81-6.34L57.81-6.34Q58.28-5.25 58.55-4.31L58.55-4.31L58.55-4.31Q58.81-3.38 58.94-2.69L58.94-2.69L58.94-2.69Q59.06-1.88 59.13-1.25L59.13-1.25L59.13-1.25Q58.09-0.72 56.63-0.31L56.63-0.31L56.63-0.31Q55.38 0.03 53.56 0.33L53.56 0.33L53.56 0.33Q51.75 0.63 49.38 0.63L49.38 0.63L49.38 0.63Q45.63 0.63 42.70-0.22L42.70-0.22L42.70-0.22Q39.78-1.06 37.77-2.98L37.77-2.98L37.77-2.98Q35.75-4.91 34.70-8.02L34.70-8.02L34.70-8.02Q33.66-11.13 33.66-15.66ZM40.41-18.59L54.72-18.59L54.72-19.66L54.72-19.66Q54.72-21.63 54.23-23.14L54.23-23.14L54.23-23.14Q53.75-24.66 52.91-25.69L52.91-25.69L52.91-25.69Q52.06-26.72 50.91-27.25L50.91-27.25L50.91-27.25Q49.75-27.78 48.41-27.78L48.41-27.78L48.41-27.78Q46.44-27.78 44.94-27.27L44.94-27.27L44.94-27.27Q43.44-26.75 42.42-25.64L42.42-25.64L42.42-25.64Q41.41-24.53 40.91-22.78L40.91-22.78L40.91-22.78Q40.41-21.03 40.41-18.59L40.41-18.59ZM74.31 0L64.72-31.94L71.44-31.94L78.53-6.59L79.34-3.09L80.13-6.59L87-31.94L93.63-31.94L84.13 0L74.31 0ZM97-32.28L102.75-32.28L105.97-28.91L105.97-28.91Q106.31-29.69 106.86-30.39L106.86-30.39L106.86-30.39Q107.41-31.09 108.14-31.63L108.14-31.63L108.14-31.63Q108.88-32.16 109.80-32.47L109.80-32.47L109.80-32.47Q110.72-32.78 111.81-32.78L111.81-32.78L111.81-32.78Q112.72-32.78 113.56-32.64L113.56-32.64L113.56-32.64Q114.41-32.50 115.41-32.16L115.41-32.16L115.41-32.16Q115.44-32.09 115.48-31.66L115.48-31.66L115.48-31.66Q115.53-31.22 115.53-30.56L115.53-30.56L115.53-30.56Q115.53-30.06 115.47-29.39L115.47-29.39L115.47-29.39Q115.41-28.72 115.27-28.02L115.27-28.02L115.27-28.02Q115.13-27.31 114.86-26.63L114.86-26.63L114.86-26.63Q114.59-25.94 114.19-25.44L114.19-25.44L113.59-25.28L113.59-25.28Q112.97-25.59 112.20-25.81L112.20-25.81L112.20-25.81Q111.44-26.03 110.63-26.03L110.63-26.03L110.63-26.03Q109.38-26.03 108.53-25.86L108.53-25.86L108.53-25.86Q107.69-25.69 107.16-25.50L107.16-25.50L107.16-25.50Q106.53-25.28 106.16-25L106.16-25L106.16 0L99.47 0L99.47-26.22L97-28.75L97-32.28ZM118.44-9.13L118.44-9.13L118.44-9.13Q118.44-11.72 119.19-13.53L119.19-13.53L119.19-13.53Q119.94-15.34 121.39-16.50L121.39-16.50L121.39-16.50Q122.84-17.66 124.92-18.23L124.92-18.23L124.92-18.23Q127-18.81 129.69-18.97L129.69-18.97L136.66-19.34L136.66-21.84L136.66-21.84Q136.66-23.53 136.36-24.63L136.36-24.63L136.36-24.63Q136.06-25.72 135.38-26.38L135.38-26.38L135.38-26.38Q134.69-27.03 133.55-27.30L133.55-27.30L133.55-27.30Q132.41-27.56 130.72-27.56L130.72-27.56L130.72-27.56Q129.03-27.56 127.52-27.19L127.52-27.19L127.52-27.19Q126-26.81 124.88-26.38L124.88-26.38L124.88-26.38Q123.53-25.84 122.41-25.19L122.41-25.19L122.41-25.19Q121.72-26.16 121.31-27.05L121.31-27.05L121.31-27.05Q120.91-27.94 120.69-28.66L120.69-28.66L120.69-28.66Q120.41-29.47 120.31-30.22L120.31-30.22L120.31-30.22Q121.81-30.97 123.53-31.53L123.53-31.53L123.53-31.53Q125.03-32.03 126.98-32.44L126.98-32.44L126.98-32.44Q128.94-32.84 131.09-32.84L131.09-32.84L131.09-32.84Q134.66-32.84 137-32.22L137-32.22L137-32.22Q139.34-31.59 140.73-30.33L140.73-30.33L140.73-30.33Q142.13-29.06 142.67-27.14L142.67-27.14L142.67-27.14Q143.22-25.22 143.22-22.59L143.22-22.59L143.22-5.16L145.84-1.97L145.84 0L140.06 0L137.66-2.78L136.53-2.78L136.53-2.78Q136.38-2.63 135.70-2.08L135.70-2.08L135.70-2.08Q135.03-1.53 133.98-0.92L133.98-0.92L133.98-0.92Q132.94-0.31 131.61 0.16L131.61 0.16L131.61 0.16Q130.28 0.63 128.78 0.63L128.78 0.63L128.78 0.63Q126.44 0.63 124.53-0.08L124.53-0.08L124.53-0.08Q122.63-0.78 121.27-2.08L121.27-2.08L121.27-2.08Q119.91-3.38 119.17-5.17L119.17-5.17L119.17-5.17Q118.44-6.97 118.44-9.13ZM125.25-9.69L125.25-9.69L125.25-9.69Q125.25-8.25 125.66-7.30L125.66-7.30L125.66-7.30Q126.06-6.34 126.80-5.78L126.80-5.78L126.80-5.78Q127.53-5.22 128.58-5L128.58-5L128.58-5Q129.63-4.78 130.91-4.78L130.91-4.78L130.91-4.78Q132.09-4.78 133.14-5.08L133.14-5.08L133.14-5.08Q134.19-5.38 134.97-5.75L134.97-5.75L134.97-5.75Q135.88-6.16 136.66-6.72L136.66-6.72L136.66-15.13L130.38-14.72L130.38-14.72Q128.91-14.63 127.92-14.22L127.92-14.22L127.92-14.22Q126.94-13.81 126.34-13.16L126.34-13.16L126.34-13.16Q125.75-12.50 125.50-11.61L125.50-11.61L125.50-11.61Q125.25-10.72 125.25-9.69ZM149.91-16.03L149.91-16.03L149.91-16.03Q149.91-20.16 150.91-23.30L150.91-23.30L150.91-23.30Q151.91-26.44 153.83-28.56L153.83-28.56L153.83-28.56Q155.75-30.69 158.55-31.77L158.55-31.77L158.55-31.77Q161.34-32.84 164.94-32.84L164.94-32.84L164.94-32.84Q166.25-32.84 167.59-32.59L167.59-32.59L167.59-32.59Q168.94-32.34 170.03-32.06L170.03-32.06L170.03-32.06Q171.28-31.72 172.47-31.28L172.47-31.28L172.47-31.28Q172.38-30.41 172.19-29.47L172.19-29.47L172.19-29.47Q172.03-28.66 171.73-27.70L171.73-27.70L171.73-27.70Q171.44-26.75 171-25.84L171-25.84L171-25.84Q170.16-26.19 169.19-26.50L169.19-26.50L169.19-26.50Q168.34-26.75 167.25-26.97L167.25-26.97L167.25-26.97Q166.16-27.19 164.94-27.19L164.94-27.19L164.94-27.19Q162.84-27.19 161.30-26.42L161.30-26.42L161.30-26.42Q159.75-25.66 158.72-24.20L158.72-24.20L158.72-24.20Q157.69-22.75 157.19-20.69L157.19-20.69L157.19-20.69Q156.69-18.63 156.69-16.06L156.69-16.06L156.69-16.06Q156.69-10.44 158.86-7.53L158.86-7.53L158.86-7.53Q161.03-4.63 165.25-4.63L165.25-4.63L165.25-4.63Q166.50-4.63 167.63-4.83L167.63-4.83L167.63-4.83Q168.75-5.03 169.66-5.28L169.66-5.28L169.66-5.28Q170.69-5.59 171.59-5.97L171.59-5.97L171.59-5.97Q171.91-5.28 172.16-4.47L172.16-4.47L172.16-4.47Q172.38-3.75 172.55-2.83L172.55-2.83L172.55-2.83Q172.72-1.91 172.69-0.84L172.69-0.84L172.69-0.84Q171.53-0.44 170.28-0.09L170.28-0.09L170.28-0.09Q169.22 0.19 167.89 0.41L167.89 0.41L167.89 0.41Q166.56 0.63 165.25 0.63L165.25 0.63L165.25 0.63Q157.91 0.63 153.91-3.56L153.91-3.56L153.91-3.56Q149.91-7.75 149.91-16.03Z" fill="#ffffff"></path></g></g>
                    <style>text {font-size: 64px;font-family: Arial Black;dominant-baseline: central;text-anchor: middle;}</style></svg>
                </div>

                <div class="mt-8 shadow info-fade" style="background: rgba(108, 117, 162, 0.1);">
                    <div class="overflow-hidden">
                        <iframe class="info-fade" src='https://ko-fi.com/xevrac/?hidefeed=true&widget=true&embed=true' style='border:12px;width:100%;padding:16px;background:rgba(108, 117, 162, 0.1);overflow-y: hidden;' height='524' title='donate'></iframe>
                    </div>
                </div>
                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <a href="https://xevrac.com" class="ml-1 underline text-gray-600 hover:text-gray-400">
                                Back
                            </a>
                        </div>
                    </div>

                    <div class="ml-24 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        {{ file_exists(base_path() . '/version.json') ? File::get(base_path() . '/version.json') : 'VERSION' }}
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
