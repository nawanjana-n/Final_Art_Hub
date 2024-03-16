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
                    <a href="#" class="dropdown-toggle no-arrow">
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

                    </ul>
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
