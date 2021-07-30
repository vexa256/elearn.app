@include('main.head')
@include('main.nav')
@include('main.pagestart')


<div class="card">
                                            <div class="card-header">
                                                <h5>Manage all course notes in the system</h5>
                                                <div class="alert alert-primary icons-alert" style="margin-top: 1%">
                                                                   
                                                                    <p><strong>This interface allow you to manage all course notes in the system, Click a management button to execute a function</strong></p>
                                                                </div>
                                               
                                                
                                            </div>
                                            <div class="card-block jesus">
                                                <div class="table-responsive">
                                                    <div class="dt-responsive table-responsive">
                                                        <table id="res-config" class="table table-striped table-bordered ">
                                                            <thead>
                                                                <tr>
                                                                    <th>Course Name</th>
                                                                    <th>Notes Title</th>
                                                                    <th>Description</th>
                                                                    <th>Google Reader</th>
                                                                    <th>Microsoft Reader</th>
                                                                    <th>Delete</th>
                                                                   
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>


                                            @if(!is_null($CourseNotes))

                                            @foreach($CourseNotes as $CourseNote)
                                                                <tr>
                                                                    <td>{{$CourseNote->CourseName}}</td>
                                                                    <td>{{$CourseNote->NotesName}}</td>
                                                  <td><a href="#ViewmoreNotes{{$CourseNote->id}}" data-toggle="modal" class="btn btn-sm btn-danger ">View</a></td>
                                                                    <td><a href="{{ route('GoogleViewer', ['id'=>$CourseNote->id]) }}"  class="btn btn-sm btn-inverse " style="color: white">Open</a></td>
                                                                    <td> <a href="{{ route('MsViewer', ['id'=>$CourseNote->id]) }}" class=" btn btn-sm btn-warning">Open</a></td>
                                                                    <td><a data-route="{{ route('DeleteCourseNotes', ['id'=>$CourseNote->id]) }}" class="DeleteCourseNotes  btn btn-sm btn-primary">Delete</a></td>
                                                                   
                                                                    
                                                                </tr>


                                            @endforeach

                                            @endif

                                                               
                                                               
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>






 @include('CourseNotes.NotesModal')  
 @include('main.footer')  