<!--============================================== TOP MENU ============================================== -->
<div class="top-bar animate-dropdown">
	<div class="container">
		<div class="header-top-inner">
			<div class="cnt-account">
				<ul class="list-unstyled">
				@guest
                            <li><a href="#"><i class="icon fa fa-user"></i>My Account</a></li>
							<li><a href="#"><i class="icon fa fa-heart"></i>Wishlist</a></li>
							<li><a href="#"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>
							<li><a href="{{ route('register') }}"><i class="icon fa fa-key"></i>Register</a></li>
							<li><a href="{{ route('login') }}"><i class="icon fa fa-sign-in"></i>Login</a></li>
                        @else
                        	<li><a href="#"><i class="icon fa fa-user"></i>My Account</a></li>
							<li><a href="#"><i class="icon fa fa-heart"></i>Wishlist</a></li>
							<li><a href="#"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>
							<li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="icon fa fa-key"></i>Logout</a></li>
                           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>                         
                        @endguest
				</ul>
			</div><!-- /.cnt-account -->

			<div class="cnt-block">
				<ul class="list-unstyled list-inline">
					<li class="dropdown dropdown-small">
						<a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="key">currency :</span><span class="value">USD </span><b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">USD</a></li>
							<li><a href="#">INR</a></li>
							<li><a href="#">GBP</a></li>
						</ul>
					</li>

					<li class="dropdown dropdown-small">
						<a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="key">language :</span><span class="value">{{ app()->getLocale() }} </span><b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="/setlang/ru">ru</a></li>
							<li><a href="/setlang/en">en</a></li>
							<li><a href="/setlang/uk">ua</a></li>
						</ul>
					</li>
				</ul><!-- /.list-unstyled -->
			</div><!-- /.cnt-cart -->
			<div class="clearfix"></div>
		</div><!-- /.header-top-inner -->
	</div><!-- /.container -->
</div><!-- /.header-top -->
<!-- ============================================== TOP MENU : END ==============================================