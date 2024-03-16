<div class="header">
    <div class="header-left">
        <div class="menu-icon bi bi-list"></div>


    </div>
    <div class="header-right">

        <div class="user-info-dropdown mr-4">
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                    @php
                            $id = Auth::user()->id;
                            $profileData = App\Models\User::find($id);
                    @endphp
                    <span class="user-icon">
                        <img src="{{ !empty($profileData->photo) ? url('upload/client_images/' . $profileData->photo) : url('upload/no_image.jpg') }}"
                            alt="" class="avatar-photo" />
                    </span>

                    <span class="user-name">{{ Auth::user()->name }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                    



                    <a class="dropdown-item" href="{{ route('client.profile') }}"><i class="dw dw-user1"></i>
                        Profile</a>
                    <a class="dropdown-item" href="{{ route('client.change.password') }}"><i
                            class="bi bi-pencil-square"></i> Change Password</a>
                    <a class="dropdown-item" href="faq.html"><i class="dw dw-help"></i> Help</a>
                    <a class="dropdown-item" href="{{ route('client.logout') }}"><i class="dw dw-logout"></i> Log
                        Out</a>
                </div>
            </div>
        </div>
        <div class="right-sidebar">

            <div class="right-sidebar-body customscroll">
                <div class="right-sidebar-body-content">
                    <h4 class="weight-600 font-18 pb-10">Header Background</h4>
                    <div class="sidebar-btn-group pb-30 mb-10">
                        <a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
                        <a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
                    </div>

                    <h4 class="weight-600 font-18 pb-10"> Sidebar Background </h4>
                    <div class="sidebar-btn-group pb-30 mb-10">
                        <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light">White</a>
                        <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark">Dark</a>
                    </div>


                </div>
            </div>
        </div>

    </div>
</div>
