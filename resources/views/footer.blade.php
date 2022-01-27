@section('footer')
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
                                <a href="{{ route('productList') }}">
                                    <p class="category-menu">Product</p>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('concept') }}">
                                    <p class="category-menu">Concept</p>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('news') }}">
                                    <p class="category-menu">News</p>
                                </a>
                            </li>
                            <li>
                                <a href="">
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

  <!-- js読み込み -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="{{ asset('js/hamburger.js') }}"></script>
  <script src="{{ asset('js/topbom.js') }}"></script>



@endsection
