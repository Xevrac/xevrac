<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>xevrac_</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div id="particles-js" style="position: absolute;width: 100%;height: 100%;z-index: -1; background-color: #182741;"></div>
        <div class="relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg width="259.439990234375px" height="131.63999023437498px" xmlns="http://www.w3.org/2000/svg" viewBox="164.2800048828125 0 259.439990234375 64" style="background: rgba(0, 0, 0, 0) none repeat scroll 0% 0%;" preserveAspectRatio="xMidYMid"><defs><filter id="editing-hole" x="-100%" y="-100%" width="300%" height="300%"><feFlood flood-color="#000000" result="black"></feFlood><feMorphology operator="dilate" radius="2" in="SourceGraphic" result="erode"></feMorphology><feGaussianBlur in="erode" stdDeviation="4" result="blur"></feGaussianBlur><feOffset in="blur" dx="2" dy="2" result="offset"></feOffset><feComposite operator="atop" in="offset" in2="black" result="merge"></feComposite><feComposite operator="in" in="merge" in2="SourceGraphic" result="inner-shadow"></feComposite></filter></defs><g filter="url(#editing-hole)"><g transform="translate(163.02734375, 91.734375)"><path d="M1.25 0L11.97-16.38L11.97-16.38Q10.69-18.19 9.41-20.17L9.41-20.17L9.41-20.17Q8.13-22.16 6.84-24.17L6.84-24.17L6.84-24.17Q5.56-26.19 4.28-28.16L4.28-28.16L4.28-28.16Q3-30.13 1.72-31.94L1.72-31.94L8.88-31.94L15.06-21.94L15.97-20L16.84-21.94L16.84-21.94Q18.47-24.38 19.97-26.94L19.97-26.94L19.97-26.94Q21.47-29.50 23.06-31.94L23.06-31.94L30.16-31.94L19.50-15.84L29.97 0L22.81 0L16.28-10.44L15.44-12.28L14.59-10.44L8.28 0L1.25 0ZM33.66-15.66L33.66-15.66L33.66-15.66Q33.66-20.16 34.75-23.41L34.75-23.41L34.75-23.41Q35.84-26.66 37.81-28.75L37.81-28.75L37.81-28.75Q39.78-30.84 42.52-31.83L42.52-31.83L42.52-31.83Q45.25-32.81 48.53-32.81L48.53-32.81L48.53-32.81Q51.56-32.81 53.95-31.80L53.95-31.80L53.95-31.80Q56.34-30.78 58-28.94L58-28.94L58-28.94Q59.66-27.09 60.53-24.53L60.53-24.53L60.53-24.53Q61.41-21.97 61.41-18.88L61.41-18.88L61.41-18.88Q61.41-17.81 61.31-16.91L61.31-16.91L61.31-16.91Q61.22-16 61.09-15.34L61.09-15.34L61.09-15.34Q60.97-14.56 60.81-13.94L60.81-13.94L40.31-14.03L40.31-14.03Q40.34-11.25 40.91-9.42L40.91-9.42L40.91-9.42Q41.47-7.59 42.58-6.53L42.58-6.53L42.58-6.53Q43.69-5.47 45.38-5.05L45.38-5.05L45.38-5.05Q47.06-4.63 49.38-4.63L49.38-4.63L49.38-4.63Q51.34-4.63 52.91-4.88L52.91-4.88L52.91-4.88Q54.47-5.13 55.56-5.47L55.56-5.47L55.56-5.47Q56.81-5.84 57.81-6.34L57.81-6.34L57.81-6.34Q58.28-5.25 58.55-4.31L58.55-4.31L58.55-4.31Q58.81-3.38 58.94-2.69L58.94-2.69L58.94-2.69Q59.06-1.88 59.13-1.25L59.13-1.25L59.13-1.25Q58.09-0.72 56.63-0.31L56.63-0.31L56.63-0.31Q55.38 0.03 53.56 0.33L53.56 0.33L53.56 0.33Q51.75 0.63 49.38 0.63L49.38 0.63L49.38 0.63Q45.63 0.63 42.70-0.22L42.70-0.22L42.70-0.22Q39.78-1.06 37.77-2.98L37.77-2.98L37.77-2.98Q35.75-4.91 34.70-8.02L34.70-8.02L34.70-8.02Q33.66-11.13 33.66-15.66ZM40.41-18.59L54.72-18.59L54.72-19.66L54.72-19.66Q54.72-21.63 54.23-23.14L54.23-23.14L54.23-23.14Q53.75-24.66 52.91-25.69L52.91-25.69L52.91-25.69Q52.06-26.72 50.91-27.25L50.91-27.25L50.91-27.25Q49.75-27.78 48.41-27.78L48.41-27.78L48.41-27.78Q46.44-27.78 44.94-27.27L44.94-27.27L44.94-27.27Q43.44-26.75 42.42-25.64L42.42-25.64L42.42-25.64Q41.41-24.53 40.91-22.78L40.91-22.78L40.91-22.78Q40.41-21.03 40.41-18.59L40.41-18.59ZM74.31 0L64.72-31.94L71.44-31.94L78.53-6.59L79.34-3.09L80.13-6.59L87-31.94L93.63-31.94L84.13 0L74.31 0ZM97-32.28L102.75-32.28L105.97-28.91L105.97-28.91Q106.31-29.69 106.86-30.39L106.86-30.39L106.86-30.39Q107.41-31.09 108.14-31.63L108.14-31.63L108.14-31.63Q108.88-32.16 109.80-32.47L109.80-32.47L109.80-32.47Q110.72-32.78 111.81-32.78L111.81-32.78L111.81-32.78Q112.72-32.78 113.56-32.64L113.56-32.64L113.56-32.64Q114.41-32.50 115.41-32.16L115.41-32.16L115.41-32.16Q115.44-32.09 115.48-31.66L115.48-31.66L115.48-31.66Q115.53-31.22 115.53-30.56L115.53-30.56L115.53-30.56Q115.53-30.06 115.47-29.39L115.47-29.39L115.47-29.39Q115.41-28.72 115.27-28.02L115.27-28.02L115.27-28.02Q115.13-27.31 114.86-26.63L114.86-26.63L114.86-26.63Q114.59-25.94 114.19-25.44L114.19-25.44L113.59-25.28L113.59-25.28Q112.97-25.59 112.20-25.81L112.20-25.81L112.20-25.81Q111.44-26.03 110.63-26.03L110.63-26.03L110.63-26.03Q109.38-26.03 108.53-25.86L108.53-25.86L108.53-25.86Q107.69-25.69 107.16-25.50L107.16-25.50L107.16-25.50Q106.53-25.28 106.16-25L106.16-25L106.16 0L99.47 0L99.47-26.22L97-28.75L97-32.28ZM118.44-9.13L118.44-9.13L118.44-9.13Q118.44-11.72 119.19-13.53L119.19-13.53L119.19-13.53Q119.94-15.34 121.39-16.50L121.39-16.50L121.39-16.50Q122.84-17.66 124.92-18.23L124.92-18.23L124.92-18.23Q127-18.81 129.69-18.97L129.69-18.97L136.66-19.34L136.66-21.84L136.66-21.84Q136.66-23.53 136.36-24.63L136.36-24.63L136.36-24.63Q136.06-25.72 135.38-26.38L135.38-26.38L135.38-26.38Q134.69-27.03 133.55-27.30L133.55-27.30L133.55-27.30Q132.41-27.56 130.72-27.56L130.72-27.56L130.72-27.56Q129.03-27.56 127.52-27.19L127.52-27.19L127.52-27.19Q126-26.81 124.88-26.38L124.88-26.38L124.88-26.38Q123.53-25.84 122.41-25.19L122.41-25.19L122.41-25.19Q121.72-26.16 121.31-27.05L121.31-27.05L121.31-27.05Q120.91-27.94 120.69-28.66L120.69-28.66L120.69-28.66Q120.41-29.47 120.31-30.22L120.31-30.22L120.31-30.22Q121.81-30.97 123.53-31.53L123.53-31.53L123.53-31.53Q125.03-32.03 126.98-32.44L126.98-32.44L126.98-32.44Q128.94-32.84 131.09-32.84L131.09-32.84L131.09-32.84Q134.66-32.84 137-32.22L137-32.22L137-32.22Q139.34-31.59 140.73-30.33L140.73-30.33L140.73-30.33Q142.13-29.06 142.67-27.14L142.67-27.14L142.67-27.14Q143.22-25.22 143.22-22.59L143.22-22.59L143.22-5.16L145.84-1.97L145.84 0L140.06 0L137.66-2.78L136.53-2.78L136.53-2.78Q136.38-2.63 135.70-2.08L135.70-2.08L135.70-2.08Q135.03-1.53 133.98-0.92L133.98-0.92L133.98-0.92Q132.94-0.31 131.61 0.16L131.61 0.16L131.61 0.16Q130.28 0.63 128.78 0.63L128.78 0.63L128.78 0.63Q126.44 0.63 124.53-0.08L124.53-0.08L124.53-0.08Q122.63-0.78 121.27-2.08L121.27-2.08L121.27-2.08Q119.91-3.38 119.17-5.17L119.17-5.17L119.17-5.17Q118.44-6.97 118.44-9.13ZM125.25-9.69L125.25-9.69L125.25-9.69Q125.25-8.25 125.66-7.30L125.66-7.30L125.66-7.30Q126.06-6.34 126.80-5.78L126.80-5.78L126.80-5.78Q127.53-5.22 128.58-5L128.58-5L128.58-5Q129.63-4.78 130.91-4.78L130.91-4.78L130.91-4.78Q132.09-4.78 133.14-5.08L133.14-5.08L133.14-5.08Q134.19-5.38 134.97-5.75L134.97-5.75L134.97-5.75Q135.88-6.16 136.66-6.72L136.66-6.72L136.66-15.13L130.38-14.72L130.38-14.72Q128.91-14.63 127.92-14.22L127.92-14.22L127.92-14.22Q126.94-13.81 126.34-13.16L126.34-13.16L126.34-13.16Q125.75-12.50 125.50-11.61L125.50-11.61L125.50-11.61Q125.25-10.72 125.25-9.69ZM149.91-16.03L149.91-16.03L149.91-16.03Q149.91-20.16 150.91-23.30L150.91-23.30L150.91-23.30Q151.91-26.44 153.83-28.56L153.83-28.56L153.83-28.56Q155.75-30.69 158.55-31.77L158.55-31.77L158.55-31.77Q161.34-32.84 164.94-32.84L164.94-32.84L164.94-32.84Q166.25-32.84 167.59-32.59L167.59-32.59L167.59-32.59Q168.94-32.34 170.03-32.06L170.03-32.06L170.03-32.06Q171.28-31.72 172.47-31.28L172.47-31.28L172.47-31.28Q172.38-30.41 172.19-29.47L172.19-29.47L172.19-29.47Q172.03-28.66 171.73-27.70L171.73-27.70L171.73-27.70Q171.44-26.75 171-25.84L171-25.84L171-25.84Q170.16-26.19 169.19-26.50L169.19-26.50L169.19-26.50Q168.34-26.75 167.25-26.97L167.25-26.97L167.25-26.97Q166.16-27.19 164.94-27.19L164.94-27.19L164.94-27.19Q162.84-27.19 161.30-26.42L161.30-26.42L161.30-26.42Q159.75-25.66 158.72-24.20L158.72-24.20L158.72-24.20Q157.69-22.75 157.19-20.69L157.19-20.69L157.19-20.69Q156.69-18.63 156.69-16.06L156.69-16.06L156.69-16.06Q156.69-10.44 158.86-7.53L158.86-7.53L158.86-7.53Q161.03-4.63 165.25-4.63L165.25-4.63L165.25-4.63Q166.50-4.63 167.63-4.83L167.63-4.83L167.63-4.83Q168.75-5.03 169.66-5.28L169.66-5.28L169.66-5.28Q170.69-5.59 171.59-5.97L171.59-5.97L171.59-5.97Q171.91-5.28 172.16-4.47L172.16-4.47L172.16-4.47Q172.38-3.75 172.55-2.83L172.55-2.83L172.55-2.83Q172.72-1.91 172.69-0.84L172.69-0.84L172.69-0.84Q171.53-0.44 170.28-0.09L170.28-0.09L170.28-0.09Q169.22 0.19 167.89 0.41L167.89 0.41L167.89 0.41Q166.56 0.63 165.25 0.63L165.25 0.63L165.25 0.63Q157.91 0.63 153.91-3.56L153.91-3.56L153.91-3.56Q149.91-7.75 149.91-16.03Z" fill="#ffffff"></path></g></g>
                    <style>text {font-size: 64px;font-family: Arial Black;dominant-baseline: central;text-anchor: middle;}</style></svg>
                </div>

                <div class="shadow" style="background: rgba(108, 117, 162, 0.1);">
                <div class="mt-8 overflow-hidden">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        {{ file_exists(base_path() . '/version.json') ? File::get(base_path() . '/version.json') : 'VERSION' }}
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
