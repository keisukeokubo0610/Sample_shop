@extends('template')

@section('title', '商品一覧')
@section('description', '商品一覧表示')
    @include('head')

@section('content')


    <!------------------- メイン ------------------>
    <main>

        <!--------- カバー画像 ------->
        <section class="cover">
            <div class="cover-wrap">
                <div class="cover-img">
                    <picture class="cover-pic">
                        <source media="(max-width:768px)" srcset="./images/cover/sp-news.jpg">
                        <source media="(min-width:769px)" srcset="./images/cover/pc-news.jpg">
                        <img src="#" alt="カバー画像1">
                    </picture>
                </div>

                <div class="coverletter">
                    <p class="cover-title">NEWS</p>
                </div>
            </div>
        </section>
        <!-- コンテンツのメインページ -->

        <div class="page-wrapper">
            <div class="sub-main">
                <!--------------------- ニュース --------------------->
                <section class="news">
                    <!-- ニュース内容 -->
                    <div class="sub-news-wrapper">
                        <!-- news1 -->
                        <div class="news-contents">
                            <picture class="cover-pic">
                                <source media="(max-width:768px)" srcset="./images/news/sub-news_1.jpg">
                                <source media="(min-width:769px)" srcset="./images/news/subpc-news_1.jpg">
                                <img src="#" alt="ニュース1">
                            </picture>
                            <div class="news-text-wrap">
                                <p class="news-title">Title</p>
                                <p class="news-day">Ne​ws | <span>2020/10/01</span></p>
                                <p class="news-detail">ここにテキストが入ります。<br>ここにテキストが入ります。</p>
                            </div>
                        </div>
                        <!-- news2 -->
                        <div class="news-contents">
                            <picture class="cover-pic">
                                <source media="(max-width:768px)" srcset="./images/news/sub-news_2.jpg">
                                <source media="(min-width:769px)" srcset="./images/news/subpc-news_2.jpg">
                                <img src="#" alt="ニュース2">
                            </picture>
                            <div class="news-text-wrap">
                                <p class="news-title">Title</p>
                                <p class="news-day">Ne​ws | <span>2020/10/01</span></p>
                                <p class="news-detail">ここにテキストが入ります。<br>ここにテキストが入ります。</p>
                            </div>
                        </div>
                        <!-- news3 -->
                        <div class="news-contents">
                            <picture class="cover-pic">
                                <source media="(max-width:768px)" srcset="./images/news/sub-news_3.jpg">
                                <source media="(min-width:769px)" srcset="./images/news/subpc-news_3.jpg">
                                <img src="#" alt="ニュース3">
                            </picture>
                            <div class="news-text-wrap">
                                <p class="news-title">Title</p>
                                <p class="news-day">Ne​ws | <span>2020/10/01</span></p>
                                <p class="news-detail">ここにテキストが入ります。<br>ここにテキストが入ります。</p>
                            </div>
                        </div>
                        <!-- news4 -->
                        <div class="news-contents">
                            <picture class="cover-pic">
                                <source media="(max-width:768px)" srcset="./images/news/sub-news_3.jpg">
                                <source media="(min-width:769px)" srcset="./images/news/subpc-news_3.jpg">
                                <img src="#" alt="ニュース4">
                            </picture>
                            <div class="news-text-wrap">
                                <p class="news-title">Title</p>
                                <p class="news-day">Ne​ws | <span>2020/10/01</span></p>
                                <p class="news-detail">ここにテキストが入ります。<br>ここにテキストが入ります。</p>
                            </div>
                        </div>
                        <!-- news5 -->
                        <div class="news-contents">
                            <picture class="cover-pic">
                                <source media="(max-width:768px)" srcset="./images/news/sub-news_2.jpg">
                                <source media="(min-width:769px)" srcset="./images/news/subpc-news_2.jpg">
                                <img src="#" alt="ニュース5">
                            </picture>
                            <div class="news-text-wrap">
                                <p class="news-title">Title</p>
                                <p class="news-day">Ne​ws | <span>2020/10/01</span></p>
                                <p class="news-detail">ここにテキストが入ります。<br>ここにテキストが入ります。</p>
                            </div>
                        </div>
                        <!-- news6 -->
                        <div class="news-contents">
                            <picture class="cover-pic">
                                <source media="(max-width:768px)" srcset="./images/news/sub-news_1.jpg">
                                <source media="(min-width:769px)" srcset="./images/news/subpc-news_1.jpg">
                                <img src="#" alt="ニュース6">
                            </picture>
                            <div class="news-text-wrap">
                                <p class="news-title">Title</p>
                                <p class="news-day">Ne​ws | <span>2020/10/01</span></p>
                                <p class="news-detail">ここにテキストが入ります。<br>ここにテキストが入ります。</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>



            <!-- サイドバー -->
            <div class="sub-sidebar pc-page">
                <div class="side-container">
                    <p class="side-site-title">Sample&nbsp;shop</p>
                    <p class="side-guide">Follow&nbsp;us</p>
                    <ul class="side-shop-sns">
                        <li><a href="https://twitter.com/TwitterJP" target="_blank"><i class="fab fa-twitter"
                                    aria-label="twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/instagram" target="_blank"><i class="fab fa-instagram"
                                    aria-label="instagram"></i></a></li>
                        <li><a href="https://www.facebook.com/facebookappJapan/" target="_blank"><i
                                    class="fab fa-facebook-f" aria-label="facebook"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </main>



@endsection

{{-- フッターここに入る --}}
@include('footer')
