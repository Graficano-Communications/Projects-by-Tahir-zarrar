<div class="header" id="home">
	<div class="container">
		<ul>
		    <!-- <li><a><img src="images/logo.png" class="img-responsive" alt="logo"></a></li> -->
			<li><a href="#"><h3>Cardiac Instruments | </h3></a></li>
			<li><a href="#"><h3>Dashboard</h3></a></li>
			 <li class="nav-item dropdown">
                               @guest
                                <h4>Dasboard</h4>
                               @else
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-center" href="{{ route('logout') }}" style="color: black" 
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                                @endguest
                            </li>
		</ul>
	</div>
</div>