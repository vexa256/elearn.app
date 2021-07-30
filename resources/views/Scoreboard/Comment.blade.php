 
                                            @if(!is_null($Scoreboards))

                                            @foreach($Scoreboards as $Scoreboard)


                                            <div class="modal fade" id="ViewmoreNotes{{$Scoreboard->id}}" tabindex="-1" role="dialog">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Your course rating comment</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body" style="max-height: 400px; overflow-y: scroll;">
                                                          <div class="alert alert-primary icons-alert" style="margin-top: 1%"> <p><strong style="font-size: 15px">Your course rating comment for the exam: {{$Scoreboard->ExamName}}</strong></p>
                                                                </div>

                                                                
                                                       <textarea class="editor">{{$Scoreboard->CourseComment}}</textarea>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger waves-effect " data-dismiss="modal">Close</button>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                          @endforeach

                                            @endif