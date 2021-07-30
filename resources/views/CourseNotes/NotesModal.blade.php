 
                                            @if(!is_null($CourseNotes))

                                            @foreach($CourseNotes as $CourseNote)


                                            <div class="modal fade" id="ViewmoreNotes{{$CourseNote->id}}" tabindex="-1" role="dialog">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Course Notes Description</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                          <div class="alert alert-primary icons-alert" style="margin-top: 1%"> <p><strong>Decsription for Notes attached to course: {{$CourseNote->CourseName}}</strong></p>
                                                                </div>

                                                                <div class="alert alert-primary icons-alert" style="margin-top: 1%"> <p><strong>Notes Title: {{$CourseNote->NotesName}}</strong></p>
                                                                </div>
                                                       <textarea class="editor">{{$CourseNote->Description}}</textarea>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger waves-effect " data-dismiss="modal">Close</button>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                          @endforeach

                                            @endif