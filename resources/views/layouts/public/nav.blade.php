<!--Promotion Bar-->
<div class="notification-bar mobilehide" style="background-color: #35A5B1">
    <a href="https://instagram.com/ayunhe.id" target="_blank" class="notification-bar__message">We are available on Instagram! Click here for Follow</a>
</div>
<!--End Promotion Bar-->
<!--Search Form Drawer-->
<div class="search">
    <div class="search__form">
        <form class="search-bar__form" action="#">
            <button class="go-btn search__button" type="submit"><i class="icon anm anm-search-l"></i></button>
            <input class="search__input" type="search" name="q" value="" placeholder="Search entire store..." aria-label="Search" autocomplete="off">
        </form>
        <button type="button" class="search-trigger close-btn"><i class="anm anm-times-l"></i></button>
    </div>
</div>
<!--End Search Form Drawer-->
<!--Header-->
<div class="header-wrap animated d-flex border-bottom">
    <div class="container-fluid">
        <div class="row align-items-center">
            <!--Desktop Logo-->
            <div class="logo col-md-2 col-lg-2 d-none d-lg-block">
                <a href="index.html">
                    <img src="{{  url('') }}/assets1/logo/logo-nav.png" alt="Ayunhe" title="Ayunhe" height="45"/>
                </a>
            </div>
            <!--End Desktop Logo-->
            <div class="col-2 col-sm-3 col-md-3 col-lg-8">
                <div class="d-block d-lg-none">
                    <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                        <i class="icon anm anm-times-l"></i>
                        <i class="anm anm-bars-r"></i>
                    </button>
                </div>
                <!--Desktop Menu-->
                <nav class="grid__item" id="AccessibleNav"><!-- for mobile -->
                    <ul id="siteNav" class="site-nav medium center hidearrow">
                    <li class="lvl1"><a href="{{ route('home.publik') }}">Home</a></li>
                    <li class="lvl1"><a href="{{ route('about.publik') }}">About Us</a></li>
                    <li class="lvl1"><a href="{{ route('collection.publik') }}">Collection</a></li>
                    <li class="lvl1"><a href="{{ route('blog.publik') }}">Blog</a></li>
                    <li class="lvl1"><a href="{{ route('collection.publik') }}"><b>Buy Now!</b> </a></li>
                  </ul>
                </nav>
                <!--End Desktop Menu-->
            </div>
            <!--Mobile Logo-->
            <div class="col-6 col-sm-6 col-md-6 col-lg-2 d-block d-lg-none mobile-logo mt-3">
                <div class="logo">
                    {{-- <a href="index.html">
                        <img src="{{  url('') }}/assets1/logo/logo-nav.png" alt="Ayunhe" title="Ayunhe" height="45"/>
                    </a> --}}
                </div>
            </div>
            <!--Mobile Logo-->
            <div class="col-4 col-sm-3 col-md-3 col-lg-2">
                <div class="site-cart">
                    <a href="#" class="site-header__cart" title="Cart">
                        <i class="icon anm anm-bag-l"></i>
                        <!-- <span id="CartCount" class="site-header__cart-count" data-cart-render="item_count">2</span> -->
                    </a>
                    <!--Minicart Popup-->
                    {{-- <div id="header-cart" class="block block-cart">
                        <ul class="mini-products-list">
                            <li class="item">
                                <a class="product-image" href="#">
                                    <img src="assets/images/product-images/cape-dress-1.jpg" alt="3/4 Sleeve Kimono Dress" title="" />
                                </a>
                                <div class="product-details">
                                    <a href="#" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
                                    <a href="#" class="edit-i remove"><i class="anm anm-edit" aria-hidden="true"></i></a>
                                    <a class="pName" href="cart.html">Sleeve Kimono Dress</a>
                                    <div class="variant-cart">Black / XL</div>
                                    <div class="wrapQtyBtn">
                                        <div class="qtyField">
                                            <span class="label">Qty:</span>
                                            <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                            <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                            <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="priceRow">
                                        <div class="product-price">
                                            <span class="money">$59.00</span>
                                        </div>
                                     </div>
                                </div>
                            </li>
                            <li class="item">
                                <a class="product-image" href="#">
                                    <img src="assets/images/product-images/cape-dress-2.jpg" alt="Elastic Waist Dress - Black / Small" title="" />
                                </a>
                                <div class="product-details">
                                    <a href="#" class="remove"><i class="anm anm-times-l" aria-hidden="true"></i></a>
                                    <a href="#" class="edit-i remove"><i class="anm anm-edit" aria-hidden="true"></i></a>
                                    <a class="pName" href="cart.html">Elastic Waist Dress</a>
                                    <div class="variant-cart">Gray / XXL</div>
                                    <div class="wrapQtyBtn">
                                        <div class="qtyField">
                                            <span class="label">Qty:</span>
                                            <a class="qtyBtn minus" href="javascript:void(0);"><i class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                            <input type="text" id="Quantity" name="quantity" value="1" class="product-form__input qty">
                                            <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                       <div class="priceRow">
                                        <div class="product-price">
                                            <span class="money">$99.00</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="total">
                            <div class="total-in">
                                <span class="label">Cart Subtotal:</span><span class="product-price"><span class="money">$748.00</span></span>
                            </div>
                             <div class="buttonSet text-center">
                                <a href="cart.html" class="btn btn-secondary btn--small">View Cart</a>
                                <a href="checkout.html" class="btn btn-secondary btn--small">Checkout</a>
                            </div>
                        </div>
                    </div> --}}
                    <!--End Minicart Popup-->
                </div>
                <div class="site-header__search">
                    <button type="button" class="search-trigger"><i class="icon anm anm-search-l"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Header-->

<!--Mobile Menu-->
<div class="mobile-nav-wrapper" role="navigation">
    <div class="closemobileMenu"><i class="icon anm anm-times-l pull-right"></i> Close Menu</div>
    <ul id="MobileNav" class="mobile-nav">
        <li class="lvl1"><a href="{{ route('home.publik') }}">Home</a></li>
        <li class="lvl1"><a href="{{ route('about.publik') }}">About Us</a></li>
        <li class="lvl1"><a href="{{ route('collection.publik') }}">Collection</a></li>
        <li class="lvl1"><a href="{{ route('blog.publik') }}">Blog</a></li>
        <li class="lvl1"><a href="{{ route('collection.publik') }}"><b>Buy Now!</b></a></li>
  </ul>
</div>
<!--End Mobile Menu-->
