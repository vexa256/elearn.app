 @include('main.head')
 @include('main.nav')
 @include('main.pagestart')

      

         <div class="card">
                            <div class="card-header">
                                <h5>Course Creation Interface</h5>
                                 <div class="alert alert-primary icons-alert" style="margin-top: 1%">
                                                                   
              <p><strong>Your are attaching notes to the Course : {{$Course->CourseName}}</strong></p>
                                                                </div>
                                <span style="color:gray ;font-size: 16px !important">This interface lets you add course notes to the selected Course . The system automatically tracks all course nootes added</span>

                                 @if ($errors->any())

                                         @foreach ($errors->all() as $error)

                                             <div class="alert alert-danger" role="alert"><strong>Error</strong> 

                                             {{ $error }}  </div>

                                        @endforeach

                                        @endif

                               
                            </div>
                            <div class="card-block jesus">
                                <form enctype="multipart/form-data" method="POST" class="wizard-form" id="basic-forms" action="{{route('UploadCourseNotes')}}">
                                 <div class="form-group row">
                                                            <div class="col-sm-4 col-lg-2">
                                                                <label class="block">.....</label>
                                                            </div>
                                                            <div class="col-sm-8 col-lg-10">
                                                               <input type="submit" name="" value="Upload Notes" class="btn btn-danger btn-sm float-right">
                                                            </div>
                                                        </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div id="wizard">
                                            <section>
                                                
                                                       @csrf

                                                    <h3>  </h3>
                                                    <fieldset>
                                                        <div class="form-group row">
                                                           
                                                                <input type="hidden" name="CourseID" value=" {{$Course->CourseID}}">
                                                          <input type="hidden" name="CourseName" value=" {{$Course->CourseName}}">
                                                        
                                                           
                                                            <div class="col-md-6">
                                                                <input placeholder="Notes Title" name="NotesName"  type="text" class="required form-control" value="">

                                                              
                                                            </div>
                                                        <div class="col-md-6">
                                                                <input type="file" class="form-control" name="file_url">
                                                            </div>


                                                       
                                        </div>
                                           <div class="form-group row">
                                                           
                                                            <div class="col-sm-12 col-md-12">
                                                                <textarea name="Description" class="editor">Enter Course Notes Description  Here</textarea>  
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