<!DOCTYPE html>
<html lang="ja">
<head>
    @yield('head')
</head>
<body>
    <header>
        <!-- 省略 -->
    </header>
    <div id="wrapper">
        @yield('content')
    </div>
    
    <footer>
        @yield('footer')
    </footer>


  
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>

</body>
</html>