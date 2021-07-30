@include('main.head')
@include('main.nav')
@include('main.pagestart')


<div class="card">
                                            <div class="card-header">
                                                <h5>Hello {{Auth::user()->name}}, This is a list of all courses that you have certified in</h5>
                                                <div class="alert alert-primary icons-alert" style="margin-top: 1%">
                                                                   
                                                                    <p><strong> Use the table search to filter the results for example , Nationality </strong></p>
                                                                </div>
                                               
                                                
                                            </div>
                                            <div class="card-block jesus">
                                                <div class="table-responsive">
                                                    <div class="dt-responsive table-responsive">
                                                        <table id="res-config" class="table table-striped table-bordered ">
                                                            <thead>
                                                                <tr>
                                                                    <th class="btn-danger">User's name</th>
                                                                    <th>Nationality</th>

                                                                    <th>Email</th>
                                                                    <th>Course</th>
                                                                    <th class="btn-inverse">Certification date</th>
                                                                 
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>


                                            @if(!is_null($Users))

                                            @foreach($Users as $User)
                                                                <tr>
                                                                    <td class="btn-primary">{{$User->UserName}}</td>
                                                                    <td>{{$User->Nationality}}</td>
                                                                  
                                                                    <td class="btn-success">{{$User->UserEmail}}</td>
                                                                    <td>{{$User->CourseName}}</td>
                                                                    <td>{{$User->created_at}}</td>
                                                  
                                                                    
                                                                </tr>


                                            @endforeach

                                            @endif

                                                               
                                                               
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>







 @include('main.footer')  