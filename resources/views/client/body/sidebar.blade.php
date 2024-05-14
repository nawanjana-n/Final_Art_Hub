<div class="left-side-bar">
			<div class="brand-logo">
				<a href="{{url('/')}}" style=" justify-content: center;" >
                    <img src="../assets2/img/logo2.png" alt=""  class="img-fluid2 p-2">

                </a>
				<div class="close-sidebar" data-toggle="left-sidebar-close">
					<i class="ion-close-round"></i>
				</div>
			</div>
            <div class="menu-block customscroll">
                <div class="sidebar-menu">
                    <ul id="accordion-menu">

                        <li>
                            <a href="{{route('client.dashboard')}}" class="dropdown-toggle no-arrow {{ Route::is('client.dashboard') ? 'active' : '' }}">
                                <span class="micon bi bi-house"></span><span class="mtext">Home</span>
                            </a>
                        </li>
                        <li>
                        <li>
                            <a href="{{route('all.orders')}}" class="dropdown-toggle no-arrow {{ Route::is('all.orders') ? 'active' : '' }}">
                                <span class="micon bi bi-list"></span><span class="mtext">My Orders</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('shop')}}" class="dropdown-toggle no-arrow">
                                <span class="micon bi bi-bag"></span><span class="mtext">Shop Now</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('cart')}}" class="dropdown-toggle no-arrow">
                                <span class="micon bi bi-cart"></span><span class="mtext">My Cart</span>
                            </a>
                        </li>
                        {{-- <li>
                            <a href="#" class="dropdown-toggle no-arrow">
                                <span class="micon bi bi-chat-right-dots"></span><span class="mtext">Art Works</span>
                            </a>
                        </li> --}}
                        <li>
                            <a href="{{route('contact')}}" class="dropdown-toggle no-arrow">
                                <span class="micon bi bi-chat-right-dots"></span><span class="mtext">Contact Us</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{route('client.zoom.list')}}" class="dropdown-toggle no-arrow {{ Route::is('client.zoom.list') ? 'active' : '' }}">
                                <span class="micon bi bi-chat-dots"></span><span class="mtext">Zoom Meeting Request</span>
                            </a>
                        </li>



                    </ul>
                </div>
            </div>
		</div>
