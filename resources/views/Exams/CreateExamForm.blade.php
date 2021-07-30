 @include('main.head')
 @include('main.nav')
 @include('main.pagestart')





  <div class="card">
                            <div class="card-header">
                                 <div class="alert alert-primary icons-alert" style="margin-top: 1%;  font-size: 18px !important"> <p style="font-size: 18px !important"><strong>Your are attaching an exam to the course: {{$Course->CourseName}}</strong></p>
                                                                </div>

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
                                                <form method="POST" class="wizard-form" id="basic-forms" action="{{route('CreateExam')}}">
                                                       @csrf
                                                    <h3>Qn 1</h3>

                                                    <input type="hidden" name="CourseName" value="{{$Course->CourseName}}">
                                                    <input type="hidden" name="CourseID" value="{{$Course->CourseID}}">
                                                   

                                                    <fieldset>
                                                        <div class="form-group row">
                                                          
                                                            <div class="col-md-4 col-lg-4">
                                                                <input value="Course Name : {{$Course->CourseName}}" name=""  type="text" readonly class=" form-control">
                                                            </div>
                                                       
                                                            <div class="col-md-2 col-lg-2">
                                                                <label  class="block">Exam Name</label>
                                                            </div>
                                                            <div class="col-md-6 col-lg-6">
                                                                <input value="" name="ExamName"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Question 1</label>
                                                            </div>
                                                             <div class="col-md-8 col-lg-10">
                                                                <textarea value="" name="qn1"  class=" form-control"></textarea>
                                                            </div>
                                                        </div>



                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Qn 1 option 1</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <input value="" name="qn1op1"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>


                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Qn 1 option 2</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <input value="" name="qn1op2"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>


                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Qn 1 option 3</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <input value="" name="qn1op3"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>



                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Qn 1 option 4</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <input value="" name="qn1op4"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>


                                                         <div class="form-group row">
                                                            <div class="col-md-4 col-md-3">
                                                                <label  class="block">Correct Answer option </label>
                                                            </div>
                                                            <div class="col-md-8 col-md-9">
                                                                <input value="" name="qn1ans"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                     <h3>Qn 2</h3>

                                                 

                                                    <fieldset>
                                                       

                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Question 2</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <textarea value="" name="qn2"  class=" form-control"></textarea>
                                                            </div>
                                                        </div>



                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Qn 2 option 1</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <input value="" name="qn2op1"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>


                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Qn 2 option 2</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <input value="" name="qn2op2"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>


                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Qn 2 option 3</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <input value="" name="qn2op3"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>



                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Qn 2 option 4</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <input value="" name="qn2op4"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>


                                                         <div class="form-group row">
                                                            <div class="col-md-4 col-md-3">
                                                                <label  class="block">Correct Answer option </label>
                                                            </div>
                                                            <div class="col-md-8 col-md-9">
                                                                <input value="" name="qn2ans"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>
                                                        
                                                    </fieldset>



                                                     <h3>Qn 3</h3>

                                                 

                                                    <fieldset>
                                                       

                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Question 3</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <textarea value="" name="qn3"  class=" form-control"></textarea>
                                                            </div>
                                                        </div>



                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Qn 3 option 1</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <input value="" name="qn3op1"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>


                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Qn 3 option 2</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <input value="" name="qn3op2"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>


                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Qn 3 option 3</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <input value="" name="qn3op3"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>



                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Qn 3 option 4</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <input value="" name="qn3op4"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>


                                                         <div class="form-group row">
                                                            <div class="col-md-4 col-md-3">
                                                                <label  class="block">Correct Answer option </label>
                                                            </div>
                                                            <div class="col-md-8 col-md-9">
                                                                <input value="" name="qn3ans"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>
                                                        
                                                    </fieldset>


                                                     <h3>Qn 4</h3>

                                                 

                                                    <fieldset>
                                                       

                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Question 4</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <textarea value="" name="qn4"  class=" form-control"></textarea>
                                                            </div>
                                                        </div>



                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Qn 4 option 1</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <input value="" name="qn4op1"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>


                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Qn 4 option 2</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <input value="" name="qn4op2"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>


                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Qn 4 option 3</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <input value="" name="qn4op3"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>



                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Qn 4 option 4</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <input value="" name="qn4op4"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>


                                                         <div class="form-group row">
                                                            <div class="col-md-4 col-md-3">
                                                                <label  class="block">Correct Answer option </label>
                                                            </div>
                                                            <div class="col-md-8 col-md-9">
                                                                <input value="" name="qn4ans"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>
                                                        
                                                    </fieldset>


                                                     <h3>Qn 5</h3>

                                                 

                                                    <fieldset>
                                                       

                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Question 5</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <textarea value="" name="qn5"  class=" form-control"></textarea>
                                                            </div>
                                                        </div>



                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Qn 5 option 1</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <input value="" name="qn5op1"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>


                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Qn 5 option 2</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <input value="" name="qn5op2"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>


                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Qn 5 option 3</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <input value="" name="qn5op3"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>



                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Qn 5 option 4</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <input value="" name="qn5op4"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>


                                                         <div class="form-group row">
                                                            <div class="col-md-4 col-md-3">
                                                                <label  class="block">Correct Answer option </label>
                                                            </div>
                                                            <div class="col-md-8 col-md-9">
                                                                <input value="" name="qn5ans"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>
                                                        
                                                    </fieldset>
                                                   

                                                    <h3>Qn 6</h3>

                                                 

                                                    <fieldset>
                                                       

                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Question 6</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <textarea value="" name="qn6"  class=" form-control"></textarea>
                                                            </div>
                                                        </div>



                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Qn 6 option 1</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <input value="" name="qn6op1"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>


                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Qn 6 option 2</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <input value="" name="qn6op2"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>


                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Qn 6 option 3</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <input value="" name="qn6op3"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>



                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Qn 6 option 4</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <input value="" name="qn6op4"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>


                                                         <div class="form-group row">
                                                            <div class="col-md-4 col-md-3">
                                                                <label  class="block">Correct Answer option </label>
                                                            </div>
                                                            <div class="col-md-8 col-md-9">
                                                                <input value="" name="qn6ans"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>
                                                        
                                                    </fieldset>

                                                     <h3>Qn 7</h3>

                                                 

                                                    <fieldset>
                                                       

                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Question 7</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <textarea value="" name="qn7"  class=" form-control"></textarea>
                                                            </div>
                                                        </div>



                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Qn 7 option 1</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <input value="" name="qn7op1"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>


                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Qn 7 option 2</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <input value="" name="qn7op2"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>


                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Qn 7 option 3</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <input value="" name="qn7op3"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>



                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Qn 7 option 4</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <input value="" name="qn7op4"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>


                                                         <div class="form-group row">
                                                            <div class="col-md-4 col-md-3">
                                                                <label  class="block">Correct Answer option </label>
                                                            </div>
                                                            <div class="col-md-8 col-md-9">
                                                                <input value="" name="qn7ans"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>
                                                        
                                                    </fieldset>

                                                     <h3>Qn 8</h3>

                                                 

                                                    <fieldset>
                                                       

                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Question 8</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <textarea value="" name="qn8"  class=" form-control"></textarea>
                                                            </div>
                                                        </div>



                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Qn 8 option 1</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <input value="" name="qn8op1"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>


                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Qn 8 option 2</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <input value="" name="qn8op2"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>


                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Qn 8 option 3</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <input value="" name="qn8op3"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>



                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Qn 8 option 4</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <input value="" name="qn8op4"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>


                                                         <div class="form-group row">
                                                            <div class="col-md-4 col-md-3">
                                                                <label  class="block">Correct Answer option </label>
                                                            </div>
                                                            <div class="col-md-8 col-md-9">
                                                                <input value="" name="qn8ans"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>
                                                        
                                                    </fieldset>

                                                     <h3>Qn 9</h3>

                                                 

                                                    <fieldset>
                                                       

                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2"9
                                                                <label  class="block">Question 9</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <textarea value="" name="qn9"  class=" form-control"></textarea>
                                                            </div>
                                                        </div>



                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Qn 9 option 1</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <input value="" name="qn9op1"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>


                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Qn 9 option 2</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <input value="" name="qn9op2"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>


                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Qn 9 option 3</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <input value="" name="qn9op3"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>



                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Qn 9 option 4</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <input value="" name="qn9op4"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>


                                                         <div class="form-group row">
                                                            <div class="col-md-4 col-md-3">
                                                                <label  class="block">Correct Answer option </label>
                                                            </div>
                                                            <div class="col-md-8 col-md-9">
                                                                <input value="" name="qn9ans"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>
                                                        
                                                    </fieldset>


                                                     <h3>Qn 10</h3>

                                                 

                                                    <fieldset>
                                                       

                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Question 10</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <textarea value="" name="qn10"  class=" form-control"></textarea>
                                                            </div>
                                                        </div>



                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Qn 10 option 1</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <input value="" name="qn10op1"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>


                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Qn 10 option 2</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <input value="" name="qn10op2"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>


                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Qn 10 option 3</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <input value="" name="qn10op3"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>



                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Qn 10 option 4</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <input value="" name="qn10op4"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>


                                                         <div class="form-group row">
                                                            <div class="col-md-4 col-md-3">
                                                                <label  class="block">Correct Answer option </label>
                                                            </div>
                                                            <div class="col-md-8 col-md-9">
                                                                <input value="" name="qn10ans"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>
                                                        
                                                    </fieldset>


                                                     <h3>Description</h3>

                                                 

                                                    <fieldset>
                                                       

                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Exam Description</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <textarea value="" name="Description"  class="editor form-control"></textarea>
                                                            </div>
                                                        </div>


                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label class="block">.....</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                               <input type="submit" name="" value="Create Exam" class="btn btn-danger float-right">
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