 @include('main.head')
 @include('main.nav')
 @include('main.pagestart')

      

         <div class="card">
                            <div class="card-header">
                                <h5> Your are updating the course {{$Course->CourseName}}</h5>
                                <span style="color:gray ;font-size: 16px !important">This interface lets you update courses in the system. The system automatically tracks all courses in the system</span>

                                 @if ($errors->any())

                                         @foreach ($errors->all() as $error)

                                             <div class="alert alert-danger" role="alert"><strong>Error</strong> 

                                             {{ $error }}  </div>

                                        @endforeach

                                        @endif

                               
                            </div>
                            <div class="card-block jesus">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="wizard">
                                            <section>
                                                <form method="POST" class="wizard-form" id="basic-forms" action="{{route('UpdateCourseLogic', ['id'=>$Course->id])}}">
                                                       @csrf
                                                    <h3> Create New Cuourse </h3>
                                                    <fieldset>
                                                        <div class="form-group row">
                                                            <div class="col-sm-4 col-lg-2">
                                                                <label  class="block">Course Name</label>
                                                            </div>
                                                            <div class="col-sm-8 col-lg-10">
                                                                <input name="CourseName" type="text" class="required form-control" value="{{$Course->CourseName}}">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-4 col-lg-2">
                                                                <label class="block">Description</label>
                                                            </div>
                                                            <div class="col-sm-8 col-lg-10">
                                                                <textarea name="Description" class="editor">{{$Course->Description}}</textarea>  
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <div class="col-sm-4 col-lg-2">
                                                                <label class="block">.....</label>
                                                            </div>
                                                            <div class="col-sm-8 col-lg-10">
                                                               <input type="submit" name="" value="Update Course" class="btn btn-danger float-right">
                                                            </div>
                                                        </div>
                                                        
                                                    </fieldset>
                                                   
                                                    
                                                </form>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>

           @include('main.footer')    