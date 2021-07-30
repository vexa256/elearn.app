@include('main.head')
@include('main.nav')
@include('main.pagestart')


<div class="card">
                                            <div class="card-header">
                                                <h5>Read Course Notes</h5>
                                                <div class="alert alert-primary icons-alert" style="margin-top: 1%">
                                                                   
                                                                    <p><strong>This interface allows you to access the notes for the course : {{$Course}} . Choose between the google docs reader and the microsoft docs reader in relation to accessing the notes</strong></p>
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
                                                                  
                                                                   
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>


                                            @if(!is_null($CourseNotes))

                                            @foreach($CourseNotes as $CourseNote)
                                                                <tr>
                                                                    <td>{{$CourseNote->CourseName}}</td>
                                                                    <td>{{$CourseNote->NotesName}}</td>
                                                  <td><a href="#ViewmoreNotes{{$CourseNote->id}}" data-toggle="modal" class="btn btn-sm btn-danger ">View</a></td>
                                                                    <td><a style="color: white" href="{{ route('GoogleViewer', ['id'=>$CourseNote->id]) }}"  class="btn btn-sm btn-inverse ">Open</a></td>
                                                                    <td> <a href="{{ route('MsViewer', ['id'=>$CourseNote->id]) }}" class=" btn btn-sm btn-warning">Open</a></td>
                                                                    
                                                                    
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