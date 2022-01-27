@section('head')

    <head>

        {{-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> --}}
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <!-- All the files that are required -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
          

        <script src="http://code.jquery.com/jquery-3.4.1.min.js"></script>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
        <title>@yield('title')</title>
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <meta name="description" content="@yield('description')">
        {{-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script> --}}
        
    </head>

    <header>
        <div class="header">
            <div class="header-wrapper">
                <div class="header-width">
                    <!-- サイトロゴ -->
                    <div class="header-img">
                        <a href="{{ route('index') }}" class="logo">
                            <img src="./images/logo/logo.png" alt="サイトロゴ">
                        </a>
                    </div>
                    <!-- ハンバーガーメニュー -->
                    <div id="nav-button" class="nav-button sp-page"><i class="fas fa-bars" aria-label="menu"></i></div>
                </div>
    
                <!---------------------- SPメニュー ------------------------>
                <nav class="sp-nav sp-page">
                    <ul class="sp-nav-list">
                        <li><a href="{{ route('productList') }}">Products</a></li>
                        <li><a href="{{ route('concept') }}">Concept</a></li>
                        <li><a href="{{ route('news') }}">News</a></li>
                        <li><a href="">Contact</a></li>
                    </ul>
    
                    <div class="shop-wrapper">
                        <ul class="shop-store">
                            <!-- amazon -->
                            <li class="ec-site">
                                <a href="https://www.amazon.co.jp/ref=ap_frn_logo" target="_blank">
                                    <p>Amazon<span class="space"><i class="fas fa-chevron-right"></i></span></p>
                                </a>
                            </li>
                            <!-- rakuten -->
                            <li class="ec-site">
                                <a href="https://www.rakuten.co.jp/" target="_blank">
                                    <p>Rakuten<span class="space"><i class="fas fa-chevron-right"></i></span></p>
                                </a>
                            </li>
                            <!-- zozo -->
                            <li class="ec-site">
                                <a href="https://zozo.jp/" target="_blank">
                                    <p>Zozotown<span class="space"><i class="fas fa-chevron-right"></i></span></p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
    
                <!--------------------- PCメニュー --------------------->
                <nav class="pc-nav pc-page">
                    <ul class="pc-nav-list">
                        <li><a href="{{ route('productList') }}">Products</a></li>
                        <li><a href="{{ route('concept') }}">Concept</a></li>
                        <li><a href="{{ route('news') }}">News</a></li>
                        <li><a href="">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    
    </header>
    

      <!-- パンくずリスト -->
    {{-- <ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
            <a itemprop="item" href="index.html">
                <span class="item-name" itemprop="name">TOP</span>
            </a>
            <meta itemprop="position" content="1" />
        </li>
    </ol> --}}



@endsection
