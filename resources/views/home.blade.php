 @include('main.head')
 @include('main.nav')
 @include('main.pagestart')

               
           
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Hello {{ Auth::user()->name }}</h5>
                                <span>Welcome to the  EAPHLN e-learning system </span>
                                <div class="card-header-right">
                                    <i class="icofont icofont-rounded-down"></i>
                                    <i class="icofont icofont-refresh"></i>
                                    <i class="icofont icofont-close-circled"></i>
                                </div>
                            </div>
                            <div class="card-block">
                                <p>
                                    
                                    The EAPHLN e-learning system is intended to be utilized as a training tool to build the capacity of the laboratories professionals within the region|The EAPHLNP is a World Bank-funded project that is being implemented by the East African Community (EAC) Partner States namely; Burundi Kenya, Rwanda, Tanzania and Uganda in collaboration with the East African Community Secretariat and the East Central and Southern African Health Community (ECSA-HC). The objective of the project is "to establish a network of efficient, high quality, accessible public health labaratories for the diagnosis and surveillance of Tuberculosis (TB) and other communicable diseases".


                                </p>
                            </div>
                            <div class="progress" style="height: 80px">
  <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:{{$percent_friendly}}%;">


    <span  class="btn btn-inverse">General User  progress {{$percent_friendly}}%</span>



  </div>
</div>
                        </div>
                    </div>
              
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card social-widget-card">
                                                    <div class="card-block-big bg-facebook">
                                                        <h3>{{$Passed}}</h3>
                                                        <span class="m-t-10">Passed Exams</span>
                                                         <i class="fa fa-edit"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Facebook card end -->
                                            <!-- Twitter card start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card social-widget-card">
                                                    <div class="card-block-big bg-twitter">
                                                        <h3>{{$Failed}}</h3>
                                                        <span class="m-t-10">Failed Exams</span>
                                                       <i class="fa fa-wrench"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Twitter card end -->
                                            <!-- Linked in card start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card social-widget-card">
                                                    <div class="card-block-big bg-linkein">
                                                        <h3>{{$TotaleCourse}}</h3>
                                                        <span class="m-t-10">Available Courses</span>
                                                        <i class="fa fa-tags"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Linked in card end -->
                                            <!-- Google-plus card start -->
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card social-widget-card">
                                                    <div class="card-block-big bg-google-plus">
                                                        <h3>{{$Exams_all}}</h3>
                                                        <span class="m-t-10">Available Exams</span>
                                                        <i class="fa fa-file"></i>
                                                    </div>
                                                </div>
                                            </div>
                                     


                                          <div class="col-md-4">
                                                <div class="card analytic-user">
                                                    <div class="card-block-big text-center">
                                                        <i class="icofont icofont-wallet"></i>
                                                        <h1>{{$cert}}</h1>
                                                        <h4>Course Certifications</h4>
                                                    </div>
                                                    <div class="card-footer p-t-25 p-b-25">
                                                       
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-8">

                                             <div class="card">
                                            <div class="card-header btn-success jesus" >
                                                <h5 style="color: white !important">Account Info Summary</h5>
                                                
                                            </div>
                                            <div class="card-block table-border-style">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                              
                                                                <th> Name</th>
                                                                <th>Email Name</th>
                                                                <th>Nationality</th>
                                                                <th>Profession</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">{{ Auth::user()->name }}</th>
                                                                <td>{{ Auth::user()->email }}</td>
                                                                <td>{{ Auth::user()->Nationality }}</td>
                                                                <td>{{ Auth::user()->Profesion }}</td>
                                                            </tr>
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                               </div>

        
           
  
          @include('main.footer')           
                 