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
                        <source media="(max-width:768px)" srcset="./images/cover/sp-products.jpg">
                        <source media="(min-width:769px)" srcset="./images/cover/pc-products.jpg">
                        <img src="#" alt="カバー画像1">
                    </picture>
                </div>

                <div class="coverletter">
                    <p class="cover-title">PRODUCTS</p>
                </div>
            </div>
        </section>

        <!-- コンテンツのメインページ -->


        <div class="page-wrapper">
            <div class="sub-main">
                <!--------------------- プロダクト --------------------->
                <div class="products-wrapper">
                    <div class="products-global-container">
                        <!-- 大コンテナ１ -->
                        <div class="primary-wrapper">
                            <div class="primary-container">
                                <!-- item1 -->
                                <div class="pri-product">
                                    <picture class="#">
                                        <source media="(max-width:768px)" srcset="./images/products/sp-tops_1.jpg">
                                        <source media="(min-width:769px)" srcset="./images/products/item_1.jpg">
                                        <img src="#" alt="カバー画像1">
                                    </picture>
                                    <div class="item-price">
                                        <p>Product</p>
                                        <p>¥1000</p>
                                    </div>
                                </div>
                                <!-- item2 -->
                                <div class="pri-product">
                                    <picture class="#">
                                        <source media="(max-width:768px)" srcset="./images/products/sp-tops_2.jpg">
                                        <source media="(min-width:769px)" srcset="./images/products/item_2.jpg">
                                        <img src="#" alt="カバー画像2">
                                    </picture>
                                    <div class="item-price">
                                        <p>Product</p>
                                        <p>¥2000</p>
                                    </div>
                                </div>
                                <!-- item3 -->
                                <div class="pri-product">
                                    <picture class="#">
                                        <source media="(max-width:768px)" srcset="./images/products/sp-tops_3.jpg">
                                        <source media="(min-width:769px)" srcset="./images/products/item_3.jpg">
                                        <img src="#" alt="カバー画像3">
                                    </picture>
                                    <div class="item-price black">
                                        <p>Product</p>
                                        <p>¥3000</p>
                                    </div>
                                </div>
                                <div class="pri-product">
                                    <picture class="#">
                                        <source media="(max-width:768px)" srcset="./images/products/sp-tops_3.jpg">
                                        <source media="(min-width:769px)" srcset="./images/products/item_3.jpg">
                                        <img src="#" alt="カバー画像4">
                                    </picture>
                                    <div class="item-price black">
                                        <p>Product</p>
                                        <p>¥3000</p>
                                    </div>
                                </div>
                                <div class="pri-product">
                                    <picture class="#">
                                        <source media="(max-width:768px)" srcset="./images/products/sp-tops_2.jpg">
                                        <source media="(min-width:769px)" srcset="./images/products/item_2.jpg">
                                        <img src="#" alt="カバー画像5">
                                    </picture>
                                    <div class="item-price">
                                        <p>Product</p>
                                        <p>¥2000</p>
                                    </div>
                                </div>
                                <div class="pri-product">
                                    <picture class="#">
                                        <source media="(max-width:768px)" srcset="./images/products/sp-tops_1.jpg">
                                        <source media="(min-width:769px)" srcset="./images/products/item_1.jpg">
                                        <img src="#" alt="カバー画像6">
                                    </picture>
                                    <div class="item-price">
                                        <p>Product</p>
                                        <p>¥1000</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 平行線 -->
                        <hr class="pc-page">

                        <!-- 小コンテナ１ -->
                        <div class="products-secondary-container">
                            <div class="secondary-img">
                                <div class="sec-product">
                                    <picture class="#">
                                        <source media="(max-width:768px)" srcset="./images/products/sp-product1.jpg">
                                        <source media="(min-width:769px)" srcset="./images/products/product_1@2x.jpg">
                                        <img src="#" alt="カバー画像7">
                                    </picture>
                                    <div class="product-article">
                                        <p>ここにテキストが入ります。</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 平行線 -->
                        <hr class="pc-page">

                        <!-- 大コンテナ１ -->
                        <div class="primary-wrapper">
                            <div class="primary-container">
                                <!-- item1 -->
                                <div class="pri-product">
                                    <picture class="#">
                                        <source media="(max-width:768px)" srcset="./images/products/sp-tops_1.jpg">
                                        <source media="(min-width:769px)" srcset="./images/products/item_1.jpg">
                                        <img src="#" alt="カバー画像1">
                                    </picture>
                                    <div class="item-price">
                                        <p>Product</p>
                                        <p>¥1000</p>
                                    </div>
                                </div>
                                <!-- item2 -->
                                <div class="pri-product">
                                    <picture class="#">
                                        <source media="(max-width:768px)" srcset="./images/products/sp-tops_2.jpg">
                                        <source media="(min-width:769px)" srcset="./images/products/item_2.jpg">
                                        <img src="#" alt="カバー画像2">
                                    </picture>
                                    <div class="item-price">
                                        <p>Product</p>
                                        <p>¥2000</p>
                                    </div>
                                </div>
                                <!-- item3 -->
                                <div class="pri-product">
                                    <picture class="#">
                                        <source media="(max-width:768px)" srcset="./images/products/sp-tops_3.jpg">
                                        <source media="(min-width:769px)" srcset="./images/products/item_3.jpg">
                                        <img src="#" alt="カバー画像3">
                                    </picture>
                                    <div class="item-price black">
                                        <p>Product</p>
                                        <p>¥3000</p>
                                    </div>
                                </div>
                                <div class="pri-product">
                                    <picture class="#">
                                        <source media="(max-width:768px)" srcset="./images/products/sp-tops_3.jpg">
                                        <source media="(min-width:769px)" srcset="./images/products/item_3.jpg">
                                        <img src="#" alt="カバー画像4">
                                    </picture>
                                    <div class="item-price black">
                                        <p>Product</p>
                                        <p>¥3000</p>
                                    </div>
                                </div>
                                <div class="pri-product">
                                    <picture class="#">
                                        <source media="(max-width:768px)" srcset="./images/products/sp-tops_2.jpg">
                                        <source media="(min-width:769px)" srcset="./images/products/item_2.jpg">
                                        <img src="#" alt="カバー画像5">
                                    </picture>
                                    <div class="item-price">
                                        <p>Product</p>
                                        <p>¥2000</p>
                                    </div>
                                </div>
                                <div class="pri-product">
                                    <picture class="#">
                                        <source media="(max-width:768px)" srcset="./images/products/sp-tops_1.jpg">
                                        <source media="(min-width:769px)" srcset="./images/products/item_1.jpg">
                                        <img src="#" alt="カバー画像6">
                                    </picture>
                                    <div class="item-price">
                                        <p>Product</p>
                                        <p>¥1000</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 平行線 -->
                        <hr class="pc-page">

                        <!-- 小コンテナ１ -->

                        <div class="products-secondary-container">
                            <div class="secondary-img">
                                <div class="sec-product">
                                    <picture class="#">
                                        <source media="(max-width:768px)" srcset="./images/products/sp-product2.jpg">
                                        <source media="(min-width:769px)" srcset="./images/products/product_2@2x.jpg">
                                        <img src="#" alt="カバー画像7">
                                    </picture>
                                    <div class="product-article">
                                        <p>ここにテキストが入ります。</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- 平行線 -->
                        <hr class="pc-page">

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
