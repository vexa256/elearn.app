@include('main.head')
@include('main.nav')
@include('main.pagestart')


<div class="card">
                                            <div class="card-header btn-inverse jesus">
                                                <h5>Manage all admins in the system</h5>
                                                <div class="alert alert-primary icons-alert" style="margin-top: 1%">
                                                                   
                                                                    <p><strong>This interface gives you admin accounts to  management.

                                                                       Use the table search to filter the results for example , Nationality
                                                                    </strong></p>
                                                                </div>
                                               
                                                
                                            </div>
                                            <div class="card-block jesus">
                                                <div class="table-responsive">
                                                    <div class="dt-responsive table-responsive">
                                                        <table id="res-config" class="table table-striped table-bordered ">
                                                            <thead>
                                                                <tr>
                                                                    <th>User's name</th>
                                                                    <th>Nationality</th>
                                                                    <th>Profession</th>
                                                                    <th>Email</th>
                                                                    <th>Delete User</th>
                                                                    
                                                                </tr>
                                                            </thead>
                                                            <tbody>


                                            @if(!is_null($Users))

                                            @foreach($Users as $User)
                                                                <tr>
                                                                    <td>{{$User->name}}</td>
                                                                    <td>{{$User->Nationality}}</td>
                                                                    <td>{{$User->Profesion}}</td>
                                                                    <td>{{$User->email}}</td>
                                                                  <td><a data-route="{{ route('DeleteAdmin', ['id'=>$User->id]) }}" class=" btn DeleteAdmin btn-sm btn-danger"  style="color:white">Delete Admin</a></td>
                                                                   
                                                  
                                                                    
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