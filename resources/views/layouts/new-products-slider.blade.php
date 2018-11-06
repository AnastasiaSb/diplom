<section class="section featured-product wow fadeInUp">
    <h3 class="section-title">New products</h3>
    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
        @foreach($products as $product)
        <div class="item item-carousel">
            <div class="products">

                <div class="product">
                    <div class="product-image">
                        <div class="image">
                            <a href="/product/{{$product->slug}}"><img  src="assets/images/blank.gif" data-echo="assets/images/products/2.jpg" alt=""></a>
                        </div><!-- /.image -->

                        <div class="tag new"><span>new</span></div>
                    </div><!-- /.product-image -->


                    <div class="product-info text-left">
                        <h3 class="name"><a href="/product/{{$product->slug}}">{{$product->name}}</a></h3>
                        <div class="rating rateit-small"></div>
                        <div class="description"></div>

                        <div class="product-price">
				<span class="price">
					{{$product->price}}				</span>
                            <span class="price-before-discount">{{$product->price}}</span>

                        </div><!-- /.product-price -->

                    </div><!-- /.product-info -->
                    <div class="cart clearfix animate-effect">
                        <div class="action">
                            <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                        <i class="fa fa-shopping-cart"></i>
                                    </button>
                                    <button class="btn btn-primary" type="button">Add to cart</button>

                                </li>

                                <li class="lnk wishlist">
                                    <a class="add-to-cart" href="index.php?page=detail" title="Wishlist">
                                        <i class="icon fa fa-heart"></i>
                                    </a>
                                </li>

                                <li class="lnk">
                                    <a class="add-to-cart" href="index.php?page=detail" title="Compare">
                                        <i class="fa fa-retweet"></i>
                                    </a>
                                </li>
                            </ul>
                        </div><!-- /.action -->
                    </div><!-- /.cart -->
                </div><!-- /.product -->

            </div><!-- /.products -->
        </div><!-- /.item -->
        @endforeach

    </div><!-- /.home-owl-carousel -->
</section><!-- /.section -->
<!-- ============================================== FEATURED PRODUCTS : END ============================================== -->