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
                    <a href="{{route('all.meetings')}}" class="dropdown-toggle no-arrow {{ Route::is('all.meetings') ? 'active' : '' }}">
                        <span class="micon bi bi-body-text"></span><span class="mtext">Meeting Management</span>
                    </a>
                </li>



            </ul>
        </div>
    </div>
</div>
