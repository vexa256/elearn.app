@include('main.head')
@include('main.nav')
@include('main.pagestart')


<div class="card">
                                            <div class="card-header">
                                                <h5>Course content selection</h5>
                                                <div class="alert alert-primary icons-alert" style="margin-top: 1%">
                                                                   
                                                                    <p><strong>This interface allow you to choose the course material to interact with, Click the assigned buttons to access either Notes or Exams</strong></p>
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
                                                                    <th> Exams</th>
                                                                    <th> Notes</th>
                                                                   
                                                                </tr>
                                                            </thead>
                                                            <tbody>


                                            @if(!is_null($Courses))

                                            @foreach($Courses as $Course)
                                                                <tr>
                                                                    <td>{{$Course->CourseName}}</td>
                                                  <td><a href="#Viewmore{{$Course->id}}" data-toggle="modal" class="btn btn-sm btn-warning ">View</a></td>
                                                                    <td><a href="{{ route('SelectExams', ['id'=>$Course->id]) }}" class=" btn btn-sm btn-info">View</a></td>
                                                                    <td> <a style="color: white" href="{{ route('SelectNotes', ['id'=>$Course->id]) }}" class=" btn btn-sm btn-inverse">View</a></td>
                                                                    
                                                                   
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