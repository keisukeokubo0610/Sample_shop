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
                        <source media="(max-width:768px)" srcset="./images/cover/sp-concept.jpg">
                        <source media="(min-width:769px)" srcset="./images/cover/pc-concept.jpg">
                        <img src="#" alt="カバー画像1">
                    </picture>
                </div>

                <div class="coverletter">
                    <p class="cover-title">CONCEPT</p>
                </div>
            </div>
        </section>

        <!-- 全体のコンテンツ -->

        <div class="page-wrapper">
            <div class="sub-main">

                <!--------------------- コンセプト --------------------->
                <div class="sub-page">
                    <div class="concept-wrapper">

                        <!-- 全体 -->
                        <div class="concept-global-container">
                            <!-- コンセプト１コンテナ -->
                            <div class="left-container">
                                <!-- 背景の円 -->
                                <div class="background-2 sub-concept">
                                </div>
                                <!-- 文字 -->
                                <div class="concept-contents">
                                    <p class="sub-concept-title">Concept1</p>
                                    <p class="sub-contact-text">コンセプトコンセプト</p>
                                </div>
                            </div>

                            <div class="right-container top-move68">
                                <!-- 背景の円 -->
                                <div class="background-1 sub-concept">
                                </div>
                                <div class="concept-contents">
                                    <p class="sub-concept-title">Concept2</p>
                                    <p class="sub-contact-text">コンセプトコンセプト</p>
                                </div>
                            </div>
                            <div class="left-container top-move136">
                                <!-- 背景の円 -->
                                <div class="background-2 sub-concept">
                                </div>
                                <div class="concept-contents">
                                    <p class="sub-concept-title">Concept3</p>
                                    <p class="sub-contact-text">コンセプトコンセプト</p>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
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
