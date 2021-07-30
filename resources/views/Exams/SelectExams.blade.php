 @include('main.head')
 @include('main.nav')
 @include('main.pagestart')


<div class="card">
                                            <div class="card-header">
                                                <h5>Attempt Exams</h5>
                                                <div class="alert alert-primary icons-alert" style="margin-top: 1%">
                                                                   
                                                                    <p><strong>Attempt Exams, Click the attempt button to access an Exam</strong></p>
                                                                </div>
                                               
                                                
                                            </div>
                                            <div class="card-block jesus">
                                                <div class="table-responsive">
                                                    <div class="dt-responsive table-responsive">
                                                        <table id="res-config" class="table table-striped table-bordered ">
                                                            <thead>
                                                                <tr>
                                                                    <th>Course name</th>
                                                                    <th>Exam name</th>
                                                                    <th>Exam Description</th>
                                                                    <th>Attempt Exam</th>
                                                                    
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>


                                            @if(!is_null($Exams))

                                            @foreach($Exams as $Exam)
                                                                <tr>
                                                                    <td>{{$Exam->CourseName}}</td>
                                                                    <td>{{$Exam->ExamName}}</td>
                                                  <td><a href="#ViewmoreMOre{{$Exam->id}}" data-toggle="modal" class="btn btn-danger ">View</a></td>
                                                                    <td><a href="{{ route('AttemptExamForm', ['id'=>$Exam->id]) }}" class=" btn btn-info">Attempt</a></td>
                                                                    
                                                                
                                                                    
                                                                </tr>


                                            @endforeach

                                            @endif

                                                               
                                                               
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>




  @include('Exams.DescModal')
  @include('main.footer')