 @include('main.head')
 @include('main.nav')
 @include('main.pagestart')
<!-- Facebook card start -->
<div class="row">
                    <div class="col-md-4 ">
                        <div class="card social-widget-card">
                            <div class="card-block-big bg-facebook">
                                <h3>{{$Users_total}}</h3>
                                <span class="m-t-10">Total Students</span>
                                <i class="fa fa-graduation-cap"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Facebook card end -->
                    <!-- Twitter card start -->
                    <div class="col-md-4 ">
                        <div class="card social-widget-card">
                            <div class="card-block-big bg-twitter">
                                <h3>{{$Certifications}}</h3>
                                <span class="m-t-10">Certified Students</span>
                                <i class="fa fa-graduation-cap"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Twitter card end -->
                    <!-- Linked in card start -->
                    <div class="col-md-4 ">
                        <div class="card social-widget-card">
                            <div class="card-block-big bg-linkein">
                                <h3>{{$UGANDAN}} </h3>
                                <span class="m-t-10"> Students from Uganda</span>
                                <i class="fa fa-flag"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Linked in card end -->
                    <!-- Google-plus card start -->
                    <div class="col-md-4 ">
                        <div class="card social-widget-card">
                            <div class="card-block-big bg-google-plus">
                                <h3>{{$KENYAN}}</h3>
                                <span class="m-t-10">Students from Kenya</span>
                                <i class="fa fa-flag"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Google-plus card end -->
                    <!-- Documents card start -->
                    <div class="col-md-4 ">
                        <div class="card client-blocks dark-primary-border">
                            <div class="card-block">
                                <h5>    Students from Tanzania</h5>
                                <ul>
                                    <li>
                                        <i class="fa fa-flag"></i>
                                    </li>
                                    <li class="text-right">
                                        {{$TANZANIAN}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Code Counter start -->
                    <div class="col-md-4">
                        <div class="card bg-primary large-widget-card">
                            <div class="card-block-big">
                                <h4>{{$BURUNDIAN}}</h4>
                                <h6>Students from Burundi</h6>
                                <i class="fa fa-flag"></i>
                            </div>
                        </div>
                    </div>
                     
                    <!-- Code Counter end -->
                    <!-- Downloads counter start -->
                    <div class="col-md-6">
                        <div class="card bg-inverse large-widget-card">
                            <div class="card-block-big">
                                <h4>{{$Exams}}</h4>
                                <h6>Total Exams</h6>
                                <i class="fa fa-folder"></i>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="card bg-danger large-widget-card">
                            <div class="card-block-big">
                                <h4>{{$Course}}</h4>
                                <h6>Total Courses</h6>
                                <i class="fa fa-file"></i>
                            </div>
                        </div>
                    </div>
                </div>

                   @include('main.footer')           
                 