<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="/"><span
                class="flaticon-pizza-1 mr-1"></span>Meal<br><small>Drop</small></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item 
			 	<?php
   if (basename($_SERVER['PHP_SELF']) == 'index.php') {
       echo 'active';
   }
   ?> 
			  "><a href="/" class="nav-link">Home</a></li>
                <li class="nav-item 
			 	<?php
   if (basename($_SERVER['PHP_SELF']) == 'viewrestaurants') {
       echo 'active';
   }
   ?> 
			  "><a href="{{ url('/viewrestaurants') }}"
                        class="nav-link">Restaurants</a></li>
                <li class="nav-item 
			 	<?php
   if (basename($_SERVER['PHP_SELF']) == 'browsecuisines') {
       echo 'active';
   }
   ?> 
			  "><a href="{{ url('/browsecuisines') }}"
                        class="nav-link">Cuisines</a></li>
                <li class="nav-item 
			 	<?php
   if (basename($_SERVER['PHP_SELF']) == 'contact') {
       echo 'active';
   }
   ?> 
			  "><a href="{{ url('/contact') }}" class="nav-link">Contact</a>
                </li>
                <li class="nav-item 
			 	<?php
   if (basename($_SERVER['PHP_SELF']) == 'viewCart') {
       echo 'active';
   }
   ?> 
			  ">@auth
              <a href="{{ url('/viewCart',Auth::user()->id) }}" class="nav-link">Cart</a>
              @endauth
              @guest
              <a href="{{ url('/login') }}" class="nav-link">Cart</a>
              @endguest
            </li>

                <li class="nav-item">

                    @if (Route::has('login'))
                        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                            @auth
                                <li class="nav-item">
									<div class="dropdown nav-link">
										<a @disabled(true)  href="#"  class="dropbtn" pr-4 pl-4"">{{ Auth::user()->name }}</a>
										<div class="dropdown-content">
										  <a class="nav-link pl-3" href="#" @disabled(true) style="cursor: default">{{ __('Manage Account') }}</a>
										  <a class="nav-link pl-3" href="{{ route('profile.show') }}">{{ __('Profile') }}</a>
										  
										  <form method="POST" action="{{ route('logout') }}">
											@csrf
												<button class="nav-link pl-3">{{ __('Log Out') }}</button>
										</form>
										</div>
									  </div> 

								</li>
                            @else
                                <li class="nav-item">
									<a class="nav-link" style="color:#fac564" href="{{ route('login') }}"
                                    class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                                    in</a>
								</li>

                                @if (Route::has('register'))
                                    <li class="nav-item">
										<a class="nav-link" style="color:#fac564" href="{{ route('register') }}"
                                        class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
									</li>
                                @endif
                            @endauth
                        </div>
                    @endif

                </li>

            </ul>
        </div>
    </div>
</nav>
