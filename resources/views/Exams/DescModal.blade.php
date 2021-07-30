 
                                            @if(!is_null($Exams))

                                            @foreach($Exams as $Exam)


                                            <div class="modal fade" id="ViewmoreMOre{{$Exam->id}}" tabindex="-1" role="dialog">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Exam Description</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="alert alert-danger icons-alert" style="margin-top: 1%"> <p><strong>Parent Course : {{$Exam->CourseName}}</strong></p>
                                                                </div>
                                                          <div class="alert alert-primary icons-alert" style="margin-top: 1%"> <p><strong>Decsription for the Course Exam: {{$Exam->ExamName}}</strong></p>
                                                                </div>
                                                       <textarea class="editor">{{$Exam->Description}}</textarea>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger waves-effect " data-dismiss="modal">Close</button>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                          @endforeach

                                            @endif