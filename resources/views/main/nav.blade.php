
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">

   @include('main.topnav')


       
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <nav class="pcoded-navbar">
                    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                    <div class="pcoded-inner-navbar main-menu" style="margin-top: 20%">
                        <div class="">
                            <div class="main-menu-header">
                                <img class="img-40" src="{{url('assets/images/user.png')}}" alt="User-Profile-Image">
                                <div class="user-details">
                                    <span>{{ Auth::user()->name }}</span>
                                   
                                </div>
                            </div>

                          
                        </div>
                        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation" menu-title-theme="theme5" >Courses</div>
                        <ul class="pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="fa fa-certificate" aria-hidden="true"></i></span>
                                    <span class="pcoded-mtext" >Courses</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    <li class="timo">
                                        <a href="{{url('/CreateCourseForm')}}">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" >Create a course</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="timo">
                                        <a href="{{url('/ManageCourse')}}">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" >Course Management</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>

                                     <li class=" ">
                                        <a href="{{route('SelectCourse')}}">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" >Course Selection</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                </ul>
                            </li> 
                        </ul>

                         <div class="timo pcoded-navigatio-lavel" data-i18n="nav.category.navigation" menu-title-theme="theme5" > Exams</div>
                        <ul class="timo pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="fa fa-check" aria-hidden="true"></i></span>
                                    <span class="pcoded-mtext" >Course Exams</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    
                                    <li class=" ">
                                        <a href="{{url('/ManageExams')}}">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" >Exam Management</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>




                                     
                                </ul>
                            </li> 
                        </ul>


                        <div class=" timo pcoded-navigatio-lavel" data-i18n="nav.category.navigation" menu-title-theme="theme5" > Notes</div>
                        <ul class=" timo pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="fa fa-book"></i></span>
                                    <span class="pcoded-mtext" >Course Notes</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    
                                    <li class=" ">
                                        <a href="{{route('ManageNotes')}}" class="">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" >Notes Management</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>

                                     
                                </ul>
                            </li> 
                        </ul>


                         <div class=" timo pcoded-navigatio-lavel" data-i18n="nav.category.navigation" menu-title-theme="theme5" > Course Rating</div>
                        <ul class="timo pcoded-item pcoded-left-item">
                            <li class="pcoded-hasmenu">
                                <a href="javascript:void(0)">
                                    <span class="pcoded-micon"><i class="fa fa-star" aria-hidden="true"></i></span>
                                    <span class="pcoded-mtext" >User Course Rating</span>
                                    <span class="pcoded-mcaret"></span>
                                </a>
                                <ul class="pcoded-submenu">
                                    
                                    <li class=" ">
                                        <a href="{{route('CourseRating')}}" class="">
                                            <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                            <span class="pcoded-mtext" >View Course Rating</span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>

                                     
                                </ul>
                            </li> 
                        </ul>


                        

                        


                         




                         
                        </ul>


                       
                       
                       
                       
                        
                        
                       
                        
                        
                    </div>
                </nav>