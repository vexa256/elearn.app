 @include('main.head')
 @include('main.nav')
 @include('main.pagestart')


<div class="card">
                                            <div class="card-header">
                                                <h5>Manage all course exams in the system</h5>
                                                <div class="alert alert-primary icons-alert" style="margin-top: 1%">
                                                                   
                                                                    <p><strong>This interface allow you to manage all course exams in the system, Click a management button to execute a function</strong></p>
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
                                                                    <th>Description</th>
                                                                    <th>Attempt Exam</th>
                                                                   
                                                                    <th>Update Course</th>
                                                                    <th>Delete Course</th>
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>


                                            @if(!is_null($Exams))

                                            @foreach($Exams as $Exam)
                                                                <tr>
                                                                    <td>{{$Exam->CourseName}}</td>
                                                                    <td>{{$Exam->ExamName}}</td>
                                                  <td><a href="#ViewmoreMOre{{$Exam->id}}" data-toggle="modal" class="btn btn-sm btn-danger ">View</a></td>
                                                                    <td><a href="{{ route('AttemptExamForm', ['id'=>$Exam->id]) }}" class=" btn btn-sm btn-info">Attempt</a></td>

                                                                  

                                                                    <td> <a href="{{ route('UpdateExam', ['id'=>$Exam->id]) }}" class=" btn btn-sm btn-inverse"  style="color:white">Update Exam</a></td>
                                                                    <td><a data-route="{{ route('DeleteExam', ['id'=>$Exam->id]) }}" class=" btn DeleteExam btn-sm btn-warning"  style="color:white">Delete Exam</a></td>
                                                                    
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