@include('main.head')
@include('main.nav')
@include('main.pagestart')


<div class="card">
                                            <div class="card-header">
                                                <h5>Course Notes Microsoft office reader</h5>
                                                <div class="alert alert-primary icons-alert" style="margin-top: 1%">
                                                                   
                                                                    <p><strong>Course : {{$CourseNotes->CourseName}}, Notes Title: {{$CourseNotes->NotesName}} </strong></p>
                                                                </div>
                                               
                                                
                                            </div>
                                            <div class="card-block jesus">
                                              
                                                <div id="Container"  style="padding-bottom:56.25%; position:relative; display:block; width: 100%">
                                                <iframe style="position:absolute; top:0; left: 0" src='https://docs.google.com/gview?url=http://elearning.ecsahc.org/upload/{{$CourseNotes->file_url}}&embedded=true' width='100%' height='100%' frameborder='10'> </iframe>
                                                </div>
                                            </div>
                                            </div>
                                        </div>






  
 @include('main.footer')  