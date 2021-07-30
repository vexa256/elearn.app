@include('main.head')
@include('main.nav')
@include('main.pagestart')


<div class="card">
                                            <div class="card-header">
                                                <h5>This is your scoreboard</h5>
                                                <div class="alert alert-primary icons-alert" style="margin-top: 1%">
                                                                   
                                                                    <p><strong>All your exam results are displayed here. Please note that re-attempting a test will delete the currently saved score and data of that test instance</strong></p>
                                                                </div>
                                               
                                                
                                            </div>
                                            <div class="card-block jesus">
                                                <div class="table-responsive">
                                                    <div class="dt-responsive table-responsive">
                                                        <table id="res-config" class="table table-striped table-bordered ">
                                                            <thead>
                                                                <tr>
                                                                    <th>Course Name</th>
                                                                    <th>Exam  Name</th>
                                                                    <th>Score Sataus</th>
                                                                    <th>Mark</th>
                                                                     <th>Your Course rate</th>
                                                                    <th>Your Course Comment</th>
                                                                    <th>Re-attempt Exam</th>
                                                                  
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>


                                            @if(!is_null($Scoreboards))

                                            @foreach($Scoreboards as $Scoreboard)
                                                                <tr>
                                                                    <td>{{$Scoreboard->CourseName}}</td>
                                                                    <td>{{$Scoreboard->ExamName}}</td>
                                                                    <td>{{$Scoreboard->Score}}</td>
                                                                    <td>{{$Scoreboard->Mark}}</td>
                                                                    <td>{{$Scoreboard->Courserating}}</td>
<td><a href="#ViewmoreNotes{{$Scoreboard->id}}" data-toggle="modal" class="btn  btn-sm btn-inverse"  style="color:white">View</a></td>
                                                                    <td><a data-route="{{ route('Reattempt', ['id'=>$Scoreboard->id]) }}" class=" btn Reattempt btn-sm btn-danger"  style="color:white">Re-attempt Exam</a></td>
                                                
                                                                   
                                                                    
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