<html>
    <head>
        @wp_head
        <title>Jose - @yield('title')</title>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        @yield('css')
    </head>
    <body class="dark:bg-gray-800 dark:text-white relative">
        @include('header')

        <div class="">
            @yield('content')
        </div>

        @include('footer')
        @dump($context)
        @wp_footer
        @yield('js')
        <script src="/app/themes/jose/calendar.js"></script>
    </body>
</html>