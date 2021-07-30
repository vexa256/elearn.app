      <nav class="navbar header-navbar pcoded-header" header-theme="theme4" >
            <div class="navbar-wrapper">
                <div class="navbar-logo">
                    <a class="mobile-menu" id="mobile-collapse" href="#!">
                        <i class="ti-menu"></i>
                    </a>
                    <a class="mobile-search morphsearch-search" href="#">
                        <i class="ti-search"></i>
                    </a>
                    <a href="{{url('/home')}}" class="user-details">
                      EAPHLN E-learning
                    </a>
                    <a class="mobile-options">
                        <i class="ti-more"></i>
                    </a>
                </div>
                <div class="navbar-container container-fluid">
                    <div>
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>
                            <li>
                                <a class="main-search morphsearch-search" href="#">
                                    <!-- themify icon -->
                                    <i class="ti-search"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>

                             <li class="user-profile header-notification">
                                <a href="#!">
                                   
                                  <i class="fa fa-filter"></i>  <span> Certification</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul style="background-color: #2C3E50;" class="show-notification profile-notification jesus btn-inverse">
                                    <li class="timo">
                                        <a href="{{route('CertifiedUsers')}}" style="color: white">
                                            <i class="fa fa-users"></i> Certified Students
                                        </a>
                                    </li>


                                    <li>
                                        <a href="{{route('Mycertifications')}}" style="color: white">
                                            <i class="fa fa-user"></i> My Certifications
                                        </a>
                                    </li>

                                     <li>
                                        <a href="{{route('certification')}}" style="color: white">
                                            <i class="fa fa-certificate"></i>   Certify
                                        </a>
                                    </li>
                                    
                                </ul>
                            </li>

                            


                             <li class="user-profile header-notification timo">
                                <a href="#!">
                                   
                                  <i class="fa fa-gears"></i>   <span>System Users</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul style="background-color: #2C3E50;" class="show-notification profile-notification jesus btn-inverse">
                                    <li>
                                        <a href="{{route('ManageUsers')}}" style="color: white">
                                          <i class="fa fa-user"></i> Manage Users
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#AddAdmin" data-toggle="modal" style="color: white">
                                          <i class="fa fa-user"></i> Create admin account
                                        </a>
                                    </li>

                                     <li>
                                        <a href="{{route('ManageAdmins')}}" style="color: white">
                                          <i class="fa fa-user"></i> Manage admin accounts
                                        </a>
                                    </li>


                                    
                                </ul>
                            </li>



                             <li class="user-profile header-notification" style="display: none">
                                <a href="#!">
                                   
                                 <i class="fa fa-bug"></i>   <span> Feedback</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul style="background-color: #2C3E50;" class="show-notification profile-notification jesus btn-inverse">
                                    <li>
                                        <a href="#!" style="color: white">
                                         <i class="fa fa-comment"></i>  Send Us feedback
                                        </a>
                                    </li>


                                    
                                </ul>
                            </li>

                             <li class="user-profile header-notification">
                                <a href="#!">
                                   
                                 <i class="fa fa-binoculars"></i>   <span> Scoreboard</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul style="background-color: #2C3E50;" class="show-notification profile-notification jesus btn-inverse">
                                    <li>
                                        <a href="{{route('scoreboard')}}" style="color: white">
                                         <i class="fa fa-bookmark"></i>  View scoreboard
                                        </a>
                                    </li>


                                    
                                </ul>
                            </li>
                            
                            
                        </ul>
                        <ul class="nav-right">
                            
                         
                            <li class="user-profile header-notification">
                                <a href="#!">
                                    <img src="{{url('assets/images/user.png')}}" alt="User-Profile-Image">
                                    <span>{{ Auth::user()->name }}</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">
                                    <li>
                                        <a href="{{route('UpdateAccountForm')}}">
                                            <i class="ti-settings"></i> Update Account
                                        </a>
                                    </li>
                                    
                                    <li>
                                        <a href="{{ route('logout') }}">
                                            <i class="ti-layout-sidebar-left"></i> Logout
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>


                  
                    </div>
                </div>
            </div>
        </nav>