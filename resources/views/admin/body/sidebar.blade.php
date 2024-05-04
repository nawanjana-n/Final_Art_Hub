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

                <li>
                    <a href="{{route('admin.dashboard')}}" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-house"></span><span class="mtext">Home</span>
                    </a>
                </li>

                <li class="dropdown">
                    <a  class="dropdown-toggle">
                        <span class="micon bi bi-hdd-stack"></span
                        ><span class="mtext">Manage Users</span>
                    </a>
                    <ul class="submenu">

                        <li class="dropdown">
                            <a  class="dropdown-toggle">
                                <span class="micon fas fa-user-shield"></span
                                ><span class="mtext">Admins</span>
                            </a>
                            <ul class="submenu child">
                                <li><a href="{{route('all.admin')}}">All Admins</a></li>
                                <li><a href="{{route('add.admin')}}">Add Admin</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a  class="dropdown-toggle">
                                <span class="micon fas fa-user-shield"></span
                                ><span class="mtext">Sellers</span>
                            </a>
                            <ul class="submenu child">
                                <li><a href="{{route('all.seller')}}">All Sellers</a></li>
                                <li><a href="{{route('add.seller')}}">Add Seller</a></li>
                            </ul>
                        </li>


                        <li class="dropdown">
                            <a  class="dropdown-toggle">
                                <span class="micon fas fa-user-shield"></span
                                ><span class="mtext">Clients</span>
                            </a>
                            <ul class="submenu child">
                                <li><a href="{{route('all.client')}}">All Clients</a></li>
                                <li><a href="{{route('add.client')}}">Add Client</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>




                {{-- <li>
                    <a href="#" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-body-text"></span><span class="mtext">Content Management</span>
                    </a>
                </li> --}}

                <li>
                    <a href="{{route('all.category')}}" class="dropdown-toggle no-arrow">
                        <span class="micon fa fa-list-alt"></span><span class="mtext">Category</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.all.products')}}" class="dropdown-toggle no-arrow">
                        <span class="micon fa fa-list"></span><span class="mtext">Products</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('admin.inquiries')}}" class="dropdown-toggle no-arrow">
                        <span class="micon fa fa-bullhorn"></span><span class="mtext">Inquiries</span>
                    </a>
                </li>



            </ul>
        </div>
    </div>
</div>
