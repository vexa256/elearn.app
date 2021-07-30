@include('main.head')
@include('main.nav')
@include('main.pagestart')


<div class="card">
                                            <div class="card-header">
                                                <h5>List of  all courses in the system</h5>
                                                <div class="alert alert-primary icons-alert" style="margin-top: 1%">
                                                                   
                                                                    <p><strong><h4> Click the certify button to print certificate</h4></strong></p>
                                                                </div>
                                               
                                                
                                            </div>
                                            <div class="card-block jesus">
                                                <div class="table-responsive">
                                                    <div class="dt-responsive table-responsive">
                                                        <table id="res-config" class="table table-striped table-bordered ">
                                                            <thead>
                                                                <tr>
                                                                    <th>Course name</th>
                                                                    <th>Description</th>
                                                                    <th>Attach Exam</th>
                                                                  
                                                                    
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>


                                            @if(!is_null($Courses))

                                            @foreach($Courses as $Course)
                                                                <tr>
                                                                    <td>{{$Course->CourseName}}</td>
                                                                    <td><a href="#Viewmore{{$Course->id}}" data-toggle="modal" class="btn btn-sm btn-danger "><i class="fa fa-binoculars"></i> View</a></td>
                                                                    <td><a href="{{ route('PrintCertificate', ['id'=>$Course->id]) }}" class=" btn btn-sm btn-inverse" style="color: white"> <i class="fa fa-certificate"></i> Certify</a></td>
                                                                   
                                                                  
                                                                    
                                                                </tr>


                                            @endforeach

                                            @endif

                                                               
                                                               
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>






 @include('Courses.CourseModal')  
 @include('main.footer')  