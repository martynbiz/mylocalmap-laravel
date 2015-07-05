<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials.head')
    </head>
    <body class="with_bigmap">
        @include('partials.header')
        
        <div id="layout_content">
            @yield('content')
        </div>
        
        @include('partials.footer')
    </body>
</html>