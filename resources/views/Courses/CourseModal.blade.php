 
                                            @if(!is_null($Courses))

                                            @foreach($Courses as $Course)


                                            <div class="modal fade" id="Viewmore{{$Course->id}}" tabindex="-1" role="dialog">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Course Description</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                          <div class="alert alert-primary icons-alert" style="margin-top: 1%"> <p><strong>Decsription for the Course: {{$Course->CourseName}}</strong></p>
                                                                </div>
                                                       <textarea class="editor">{{$Course->Description}}</textarea>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                          @endforeach

                                            @endif