@include('main.head')
@include('main.nav')
@include('main.pagestart')


<div class="card">
                                            <div class="card-header">
                                                <h5>Manage all courses in the system</h5>
                                                <div class="alert alert-primary icons-alert" style="margin-top: 1%">
                                                                   
                                                                    <p><strong>This interface allow you to manage all courses in the system, Click a management button to execute a function</strong></p>
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
                                                                    <th>Attach Notes</th>
                                                                    <th>Update Course</th>
                                                                    <th>Delete Course</th>
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>


                                            @if(!is_null($Courses))

                                            @foreach($Courses as $Course)
                                                                <tr>
                                                                    <td>{{$Course->CourseName}}</td>
                                                  <td><a href="#Viewmore{{$Course->id}}" data-toggle="modal" class="btn btn-sm btn-warning ">View</a></td>
                                                                    <td><a href="{{ route('CreateExamForm', ['id'=>$Course->id]) }}" class=" btn btn-sm btn-info">Attach</a></td>
                                                                    <td> <a style="color: white" href="{{ route('AddCourseNotesForm', ['id'=>$Course->id]) }}" class=" btn btn-sm btn-inverse">Attach</a></td>
                                                                    <td><a style="color: white" href="{{ route('UpdateCourse', ['id'=>$Course->id]) }}" class=" btn btn-sm btn-primary">Update</a></td>
                                                                    <td><a style="color: white" data-route="{{ route('DeleteCourse', ['id'=>$Course->id]) }}" class=" btn DeleteCourse btn-sm btn-danger">Delete</a></td>
                                                                    
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