<div class="left-side-bar">
    <div class="brand-logo">
        <a href="{{url('/')}}" style="color: rgb(13, 79, 233); font-weight: bold;">
            Art Trade

        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">

                <li >
                    <a href="{{route('seller.dashboard')}}" class="dropdown-toggle no-arrow {{ Route::is('seller.dashboard') ? 'active' : '' }}">
                        <span class="micon bi bi-house"></span><span class="mtext">Home</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('all.products')}}" class="dropdown-toggle no-arrow {{ Route::is('all.products') ? 'active' : '' }}">
                        <span class="micon bi bi-grid"></span><span class="mtext">Products</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('all.sales')}}" class="dropdown-toggle no-arrow {{ Route::is('all.sales') ? 'active' : '' }}">
                        <span class="micon bi bi-list"></span><span class="mtext">Sales</span>
                    </a>
                </li>




                <li>
                    <a href="#" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-body-text"></span><span class="mtext">Content Management</span>
                    </a>
                </li>



            </ul>
        </div>
    </div>
</div>
