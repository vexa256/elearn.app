@include('main.head')
@include('main.nav')
@include('main.pagestart')


<div class="card">
                                            <div class="card-header">
                                                <h5>User rating of all courses and exams in the system</h5>
                                                <div class="alert alert-primary icons-alert" style="margin-top: 1%">
                                                                   
                                                                    <p><strong>Use the table search to filter the results </strong></p>
                                                                </div>
                                               
                                                
                                            </div>
                                            <div class="card-block jesus">
                                                <div class="table-responsive">
                                                    <div class="dt-responsive table-responsive">
                                                        <table id="res-config" class="table table-striped table-bordered ">
                                                            <thead>
                                                                <tr>
                                                                    <th class="btn-inverse">Course Name</th>
                                                                    <th>Exam  Name</th>
                                                                    <th>Score Sataus</th>
                                                                    <th>Mark</th>
                                                                     <th> Course rate</th>
                                                                    <th class="btn-inverse"> Course Comment</th>
                                                                   
                                                                  
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>


                                            @if(!is_null($Scoreboards))

                                            @foreach($Scoreboards as $Scoreboard)
                                                                <tr>
                                                                    <td class="btn-inverse">{{$Scoreboard->CourseName}}</td>
                                                                    <td class="">{{$Scoreboard->ExamName}}</td>
                                                                    <td class="">{{$Scoreboard->Score}}</td>
                                                                    <td class="">{{$Scoreboard->Mark}}</td>
                                                                    <td class="btn-success">{{$Scoreboard->Courserating}}</td>
<td class=""><a href="#ViewmoreNotes{{$Scoreboard->id}}" data-toggle="modal" class="btn  btn-sm btn-danger"  style="color:white">View</a></td>
                                                                    
                                                
                                                                   
                                                                    
                                                                </tr>


                                            @endforeach

                                            @endif

                                                               
                                                               
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>







 @include('Scoreboard.Comment')  
 @include('main.footer')  