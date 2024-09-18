<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.public.head')
</head>

@section('content')
<div id="preloader"></div>
<style>
#preloader {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 9999;
  overflow: hidden;
  background: #fff;
}
#preloader:before {
  content: "";
  position: fixed;
  top: calc(50% - 30px);
  left: calc(50% - 30px);
  border: 6px solid #35A5B1;
  border-top-color: #e7e4fe;
  border-radius: 50%;
  width: 60px;
  height: 60px;
  animation: animate-preloader 1s linear infinite;
}
@keyframes animate-preloader {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
</style>
<div class="pageWrapper">
    @include('layouts.public.nav')
    <!--Body Content-->
    <div id="page-content">

        <?php if ($cHS > 0) : ?>
    	<!--Home slider-->
    	<div class="slideshow slideshow-wrapper pb-section">
        	<div class="home-slideshow">
                @foreach ($HomeSlider as $H)
            	<div class="slide">
                	<div class="blur-up lazyload">
                        <img class="blur-up lazyload" data-src="{{ url('') }}/assets1/img/HomeSlider/{{ $H->image_home_sliders }}" src="{{ url('') }}/assets1/img/HomeSlider/{{ $H->image_home_sliders }}" alt="Shop Our New Collection" title="Shop Our New Collection" />
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!--End Home slider-->
        <?php endif;?>
        <?php if ($cP > 0) : ?>
        <!--New Arrival Product-->
        <div class="product-rows section pt-0">
        	<div class="container">
            	<div class="row">
                	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
        				<div class="section-header text-center">
                            <h2 class="h2">New Arrivals</h2>
                            <p>Grab these new items before they are gone!</p>
                        </div>
            		</div>
                </div>
	            <div class="grid-products">
                	<div class="row">
                        @foreach ($Product as $P)
                    	<div class="col-6 col-sm-2 col-md-3 col-lg-3 item">
                            <div class="product-image">
                                <!--start product image -->
                                <a href="#" class="grid-view-item__link">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload" data-src="{{ url('') }}/assets1/img/Produk/{{ $P->image_p_products }}" src="{{ url('') }}/assets1/img/Produk/{{ $P->image_p_products }}" alt="image" title="product" />
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload" data-src="{{ url('') }}/assets1/img/Produk/{{ $P->image_s_products }}" src="{{ url('') }}/assets1/img/Produk/{{ $P->image_s_products }}" alt="image" title="product" />
                                    <!-- End hover image -->
                                </a>
                                <!-- end product image -->
                                <!-- product button -->
                                {{-- <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                    <button class="btn btn-addto-cart" type="button" tabindex="0">Add To Cart</button>
                                </form> --}}
                                {{-- <div class="button-set">
                                    <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                    <!-- Start product button -->
                                    <div class="wishlist-btn">
                                        <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist">
                                            <i class="icon anm anm-heart-l"></i>
                                        </a>
                                    </div>
                                    <div class="compare-btn">
                                        <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                            <i class="icon anm anm-random-r"></i>
                                        </a>
                                    </div>
                                </div> --}}
                                <!-- End product button -->
                            </div>
                            <!--End start product image -->

                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name text-uppercase">
                                    <a href="#">{{ $P->name_products }} | {{ $P->code_products }}</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">Rp {{ number_format($P->price_products, 0, ',', '.') }}</span>
                                </div>
                                <!-- End product price -->
                            </div>
                            <!-- End product details -->
                        </div>
                        @endforeach
                    </div>
                    <div class="row">
                    	<div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center">
                        	<a href="{{ route('collection.publik') }}" class="btn">Lihat Semua</a>
                        </div>
                    </div>
                </div>
           </div>
        </div>
        <!--End New Arrival Product-->
        <?php endif;?>

        <!--Testimonial Slider-->
        <div class="section testimonial-slider mb-5 pt-0 pb-0" style="background-color: #e3e3e3">
        	<div class="container-fluid">
                <div class="quote-wraper" style="background-color: #e3e3e3">
                    <!--Testimonial Slider Title-->
                    <div class="section-header text-center">
                        <h2 class="h2">What They're Saying</h2>
                    </div>
                    <!--End Testimonial Slider Title-->
                    <!--Testimonial Slider Items-->
                    <div class="quotes-slider">
                    	<div class="quotes-slide">
                            <blockquote class="quotes-slider__text text-center">
                              <div class="rte-setting"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                              <br><br>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p></div>
                              <p class="authour">Happy Customer</span></p>
                            </blockquote>
                        </div>
                        <div class="quotes-slide">
                            <blockquote class="quotes-slider__text text-center">
                              <div class="rte-setting"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p></div>
                              <p class="authour">Happy Customer</p>
                            </blockquote>
                        </div>
                        <div class="quotes-slide">
                            <blockquote class="quotes-slider__text text-center">
                              <div class="rte-setting"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p></div>
                              <p class="authour">Happy Customer</span></p>
                            </blockquote>
                        </div>
                    </div>
                    <!--Testimonial Slider Items-->
                </div>
            </div>
        </div>
        <!--End Testimonial Slider-->

        <?php if ($cB > 0) : ?>
        <!--Latest Blog-->
        <div class="latest-blog section pt-0 mb-3">
        	<div class="container">
            	<div class="row">
                	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
        				<div class="section-header text-center">
      						<h2 class="h2">Latest From our Blog</h2>
					    </div>
            		</div>
                </div>
            	<div class="row">
                    @foreach ($Blog as $B)
                	<div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    	<div class="wrap-blog">
                        	<a href="#" class="article__grid-image">
              					<img src="{{ url('') }}/assets1/img/Blog/{{ $B->thumbnail_blog }}" alt="{{ $B->title_blog }}" title="{{ $B->title_blog }}" class="blur-up lazyloaded"/>
				            </a>
                            <div class="article__grid-meta article__grid-meta--has-image">
                                <div class="wrap-blog-inner">
                                    <h2 class="h3 article__title">
                                      <a href="#">{{ $B->title_blog }}</a>
                                    </h2>
                                    <span class="article__date">{{ $B->created_at->format('F d, Y') }}</span>
                                    <div class="rte article__grid-excerpt">
                                        {{ Str::limit($B->content_blog, 135, '...') }}
                                    </div>
                                    <ul class="list--inline article__meta-buttons">
                                    	<li><a href="#">Read more</a></li>
                                    </ul>
                                </div>
							</div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 text-center mt-5">
                        <a href="{{ route('blog.publik') }}" class="btn">Lihat Semua</a>
                    </div>
                </div>
            </div>
        </div>
        <!--End Latest Blog-->
        <?php endif;?>

        <!--Store Feature-->
        <div class="store-feature section" style="background-color: #e3e3e3">
        	<div class="container">
            	<div class="row">
                	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    	<ul class="display-table store-info">
                        	<li class="display-table-cell">
                            	<i class="icon anm anm-truck-l"></i>
                            	<h5>Free Shipping &amp; Return</h5>
                            	<span class="sub-text">Free shipping on all US orders</span>
                            </li>
                          	<li class="display-table-cell">
                            	<i class="icon anm anm-dollar-sign-r"></i>
                                <h5>Money Guarantee</h5>
                                <span class="sub-text">30 days money back guarantee</span>
                          	</li>
                          	<li class="display-table-cell">
                            	<i class="icon anm anm-comments-l"></i>
                                <h5>Online Support</h5>
                                <span class="sub-text">We support online 24/7 on day</span>
                            </li>
                          	<li class="display-table-cell">
                            	<i class="icon anm anm-credit-card-front-r"></i>
                                <h5>Secure Payments</h5>
                                <span class="sub-text">All payment are Secured and trusted.</span>
                        	</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--End Store Feature-->
    </div>
    @include('layouts.public.footer')
    @include('layouts.public.script')
</div>
@endsection

<body class="template-index home2-default">
    @yield('content')
</body>
</html>
