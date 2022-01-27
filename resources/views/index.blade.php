@extends('template')

@section('title', 'ゲスト用ページ')
@section('description', 'ユーザー登録のページ')
    @include('head')

@section('content')



<!------------------- メイン ------------------>
<main>
    <!--------- カバー画像 ------->
    <section class="cover">
        <div class="cover-wrap">
            <div class="cover-img">
                <picture class="cover-pic">
                    <source media="(max-width:768px)" srcset="./images/cover/sp-main.jpg">
                    <source media="(min-width:769px)" srcset="./images/cover/pc-main.jpg">
                    <img src="#" alt="カバー画像1">
                </picture>
            </div>

            <div class="coverletter">
                <p class="cover-title">Sample shop</p>
            </div>
        </div>
    </section>


    <!-- 全体のコンテンツ -->

    <div class="page-wrapper">
        <div class="main">
            <!--------------------- プロダクト --------------------->
            <section class="products">
                <!-- 題名 -->
                <div class="head-title">
                    <p class="section-title">_PRODUCTS</p>
                    <p class="more-button sp-page"><a href="./products.html">MORE<span class="space"><i class="fas fa-angle-right"></i></span></a></p>
                </div>

                <!-- 画像スクロール spページ -->
                <div class="scroll sp-page">
                    <div class="sc-container">
                        <!-- トップスコンテナ -->
                        <div class="tops-container">
                            <div class="sc-img">
                                <div class="sc-product">
                                    <img src="./images/products/tops_1.jpg" alt="tops_1">
                                    <div class="item-price">
                                        <p>Product</p>
                                        <p>¥1000</p>
                                    </div>
                                </div>
                                <div class="sc-product">
                                    <img src="./images/products/tops_2.jpg" alt="tops_2">
                                    <div class="item-price black">
                                        <p>Product</p>
                                        <p>¥2000</p>
                                    </div>
                                </div>
                            </div>
                            <div class="sc-kind pc-page">
                                <p class="product-kind">Tops</p>
                            </div>
                        </div>


                        <!-- ボトムスコンテナ -->
                        <div class="bottoms-container">
                            <div class="sc-img">

                                <div class="sc-product">
                                    <img src="./images/products/bottom_1.jpg" alt="bottom_1">
                                    <div class="item-price">
                                        <p>Product</p>
                                        <p>¥1000</p>
                                    </div>
                                </div>
                                <div class="sc-product">
                                    <img src="./images/products/bottom_2.jpg" alt="bottom_2">
                                    <div class="item-price">
                                        <p>Product</p>
                                        <p>¥2000</p>
                                    </div>
                                </div>
                            </div>

                            <div class="sc-kind pc-page">
                                <p class="product-kind">Bottoms</p>
                            </div>
                        </div>

                        <!-- アクセサリーコンテナ -->
                        <div class="accessories-container">
                            <div class="sc-img">
                                <div class="sc-product">
                                    <img src="./images/products/shoes_1.jpg" alt="shoes_1">
                                    <div class="item-price black">
                                        <p>Product</p>
                                        <p>¥1000</p>
                                    </div>
                                </div>
                                <div class="sc-product">
                                    <img src="./images/products/shoes_2.jpg" alt="shoes_2">
                                    <div class="item-price">
                                        <p>Product</p>
                                        <p>¥2000</p>
                                    </div>
                                </div>

                            </div>
                            <div class="sc-kind pc-page">
                                <p class="product-kind">Accessories</p>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- pc-ページのプロダクト -->
                <div class="product-table-wrapper pc-page">
                    <table>
                        <tbody>
                            <!-- トップス -->
                            <tr class="tr">
                                <!-- 商品画像 -->
                                <td>
                                    <div class="td-img">
                                        <img class="img1" src="./images/products/tops_1.jpg" alt="tops_1">
                                        <img class="img2" src="./images/products/tops_2.jpg" alt="tops_2">
                                    </div>
                                </td>
                                <!-- 円 -->
                                <td class="bg2-relative">
                                    <div class="background-2"></div>
                                </td>
                                <!-- 種類 -->
                                <td class="kind tops-kind">Tops</td>
                            </tr>
                            <!-- ボトムス -->
                            <tr class="tr-reverse">
                                <td>
                                    <div class="td-reverse-img">
                                        <img class="img1" src="./images/products/bottom_1.jpg" alt="bottom_1">
                                        <img class="img2" src="./images/products/bottom_2.jpg" alt="bottom_2">
                                    </div>
                                </td>
                                <td class="bg1-relative">
                                    <div class="background-1"></div>
                                </td>
                                <td class="reverse-kind bottoms-kind">Bottoms</td>
                            </tr>
                            <!-- アクセサリー -->
                            <tr class="tr">
                                <td>
                                    <div class="td-img">
                                        <img class="img1" src="./images/products/shoes_1.jpg" alt="shoes_1">
                                        <img class="img2" src="./images/products/shoes_2.jpg" alt="shoes_2">
                                    </div>
                                </td>
                                <td class="bg2-relative">
                                    <div class="background-2"></div>
                                </td>
                                <td class="kind accessories-kind">Accessories</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>

            <!--------------------- コンセプト --------------------->
            <section class="concept">

                <!-- 題名 -->
                <div class="head-title">
                    <p class="section-title">_CONCEPT</p>
                    <p class="more-button sp-page"><a href="./concept.html">MORE<span class="space"><i class="fas fa-angle-right"></i></span></a></p>
                </div>
                <!-- コンセプト内容 -->
                <div class="concept-wrapper">
                    <div class="concept-bg">
                        <picture class="concept-pic">
                            <source media="(max-width:768px)" srcset="./images/concept/sp-concept_bg.jpg">
                            <source media="(min-width:769px)" srcset="./images/concept/pc-concept_bg.jpg">
                            <img src="#" alt="コンセプト画像">
                        </picture>
                    </div>
                    <div class="concept-content">
                        <p class="concept-title">Concept_1</p>
                        <p class="concept-text bottom">ここにテキストが入ります。</p>
                        <p class="concept-text bottom">ここにテキストが入ります。</p>
                        <p class="concept-text">ここにテキストが入ります。</p>
                    </div>
                </div>
            </section>

            <!--------------------- ニュース --------------------->
            <section class="news">
                <!-- 題名 -->
                <div class="head-title">
                    <p class="section-title">_NEWS</p>
                    <p class="more-button sp-page"><a href="./news.html">MORE<span class="space"><i class="fas fa-angle-right"></i></span></a></p>
                </div>
                <!-- ニュース内容 -->
                <div class="news-wrapper">
                    <div class="news-column">
                        <div class="news-contents">
                            <picture class="concept-pic">
                                <source media="(max-width:768px)" srcset="./images/news/sp-news_1.jpg">
                                <source media="(min-width:769px)" srcset="./images/news/pc-news_1.jpg">
                                <img src="#" alt="ニュース1">
                            </picture>
                            <div class="news-text-wrap">
                                <p class="news-title">Title</p>
                                <p class="news-day">Ne​ws | <span>2020/10/01</span></p>
                                <p class="news-detail">ここにテキストが入ります。ここにテキストが入ります。</p>
                            </div>
                        </div>
                        <div class="news-contents">
                            <picture class="concept-pic">
                                <source media="(max-width:768px)" srcset="./images/news/sp-news_2.jpg">
                                <source media="(min-width:769px)" srcset="./images/news/pc-news_2.jpg">
                                <img src="#" alt="ニュース2">
                            </picture>
                            <div class="news-text-wrap">
                                <p class="news-title">Title</p>
                                <p class="news-day">Ne​ws | <span>2020/10/01</span></p>
                                <p class="news-detail">ここにテキストが入ります。ここにテキストが入ります。</p>
                            </div>
                        </div>
                    </div>
                    <div class="news-column">
                        <div class="news-contents">
                            <picture class="concept-pic">
                                <source media="(max-width:768px)" srcset="./images/news/sp-news_3.jpg">
                                <source media="(min-width:769px)" srcset="./images/news/pc-news_3.jpg">
                                <img src="#" alt="ニュース3">
                            </picture>
                            <div class="news-text-wrap">
                                <p class="news-title">Title</p>
                                <p class="news-day">Ne​ws | <span>2020/10/01</span></p>
                                <p class="news-detail">ここにテキストが入ります。ここにテキストが入ります。</p>
                            </div>
                        </div>
                        <div class="news-contents">
                            <picture class="concept-pic">
                                <source media="(max-width:768px)" srcset="./images/news/sp-news_1.jpg">
                                <source media="(min-width:769px)" srcset="./images/news/pc-news_1.jpg">
                                <img src="#" alt="ニュース4">
                            </picture>
                            <div class="news-text-wrap">
                                <p class="news-title">Title</p>
                                <p class="news-day">Ne​ws | <span>2020/10/01</span></p>
                                <p class="news-detail">ここにテキストが入ります。ここにテキストが入ります。</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- サイドバー -->
        <div class="sidebar pc-page">
            <div class="side-container">
                <p class="side-site-title">Sample&nbsp;shop</p>
                <p class="side-guide">Follow&nbsp;us</p>
                <ul class="side-shop-sns">
                    <li><a href="https://twitter.com/TwitterJP" target="_blank"><i class="fab fa-twitter black-sns" aria-label="twitter"></i></a></li>
                    <li><a href="https://www.instagram.com/instagram" target="_blank"><i class="fab fa-instagram black-sns" aria-label="instagram"></i></a></li>
                    <li><a href="https://www.facebook.com/facebookappJapan/" target="_blank"><i class="fab fa-facebook-f black-sns" aria-label="facebook"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</main>

<!--------------------- フッター --------------------->
<div class="index-height-wrapper">
    <footer class="bottom-contents">
        <!-------- ショップ --------->
        <section class="shop">
            <div class="shop-wrapper gray">
                <div class="shop-intro">
                    <p>ショッピングサイトから探す</p>
                </div>
                <ul class="shop-store">
                    <!-- amazon -->
                    <li class="ec-site bottomshopping">
                        <a href="https://www.amazon.co.jp/ref=ap_frn_logo" target="_blank">
                            <p>Amazon<span class="space"><i class="fas fa-chevron-right"></i></span></p>
                        </a>
                    </li>
                    <!-- rakuten -->
                    <li class="ec-site bottomshopping">
                        <a href="https://www.rakuten.co.jp/" target="_blank">
                            <p>Rakuten<span class="space"><i class="fas fa-chevron-right"></i></span></p>
                        </a>
                    </li>
                    <!-- zozo -->
                    <li class="ec-site bottomshopping">
                        <a href="https://zozo.jp/" target="_blank">
                            <p>Zozotown<span class="space"><i class="fas fa-chevron-right"></i></span></p>
                        </a>
                    </li>
                </ul>
            </div>
        </section>

        <!--------------------- メイン下部 --------------------->
        <div class="bottom-container">
            <section class="main-bottom">
                <!-- topに戻る -->
                <div id="topBtn">
                    <p><i class="fas fa-angle-left"></i><span class="half-space">Pagetop</span></p>
                </div>

                <div class="bottom-wrapper">
                    <!-------- カテゴリー -------->
                    <div class="category-wrapper">
                        <p class="category-title">CATEGORY</p>
                        <!-- アイテム一覧 -->
                        <ul class="category-container">
                            <li>
                                <a href="products.html">
                                    <p class="category-menu">Product</p>
                                </a>
                            </li>
                            <li>
                                <a href="concept.html">
                                    <p class="category-menu">Concept</p>
                                </a>
                            </li>
                            <li>
                                <a href="news.html">
                                    <p class="category-menu">News</p>
                                </a>
                            </li>
                            <li>
                                <a href="contact.html">
                                    <p class="category-menu">Contact</p>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!-- SNS -->
                    <div class="sns-wrapper">
                        <p class="site-title">Sample shop</p>
                        <p class="sns-guide">Follow us</p>
                        <ul class="shop-sns">
                            <li><a href="https://twitter.com/TwitterJP" target="_blank"><i class="fab fa-twitter" aria-label="twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/instagram" target="_blank"><i class="fab fa-instagram" aria-label="instagram"></i></a></li>
                            <li><a href="https://www.facebook.com/facebookappJapan/" target="_blank"><i class="fab fa-facebook-f" aria-label="facebook"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer">
                    <p>Sample shop &copy; All Right Reserved.</p>
                </div>
            </section>
        </div>
    </footer>
</div>


    @endsection
