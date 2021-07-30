 @include('main.head')
 @include('main.nav')
 @include('main.pagestart')





  <div class="card">
                            <div class="card-header">
                                 <div class="alert alert-primary icons-alert" style="margin-top: 1%;  font-size: 18px !important"> <p style="font-size: 18px !important"><strong>Your are attempting  Exam : {{$Exam->ExamName}} that is is attached to  Course :  {{$Exam->CourseName}}</strong></p>
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
                                                <form method="POST" class="wizard-form" id="basic-forms" action="{{ route('MarkExam')}}">

                                                       @csrf


                                                    <input type="hidden" name="id_unique" value="{{$Exam->id}}">
                                                    <input type="hidden" name="CourseName" value="{{$Exam->CourseName}}">
                                                    <input type="hidden" name="CourseID" value="{{$Exam->CourseID}}">
                                                    <input type="hidden" name="ExamID" value="{{$Exam->ExamID}}">
                                                    <input type="hidden" name="ExamName" value="{{$Exam->ExamName}}">
                                                    <input type="hidden" name="UserEmail" value="{{ Auth::user()->email }}">
                                                    <input type="hidden" name="UserName" value="{{ Auth::user()->name }}">
                                                    <input type="hidden" name="UserID" value="{{ Auth::user()->UserID }}">
                                                   

                                         
                                        

                                                    <h3>Qn 1</h3>

                                                   

                                                    <fieldset>

                                                         <div class="form-group row">
                                                            
                                                            <div class="col-md-12 ">
                                                                <input placeholder="Enter Correct Answer Option e.g 3"  name="qn1ans"  type="text" required  class=" form-control jesus numericd">
                                                            </div>
                                                        </div>
                                                        
                                                              <div class="form-group row">
                                                             <div class="col-md-12 ">
                                                                <textarea readonly   style="height: 200px" value="" name=""  class=" editor form-control jesus">
                                                                  

                                                                        <h2><strong>======= Question 1 ===== </strong></h2>

                                                    <h3><code><strong>{{$Exam->qn1}}</strong></code></h3>

                                                    <p>&nbsp;</p>

                                                    <h2><code><strong>========= Answer Options ==========</strong></code></h2>

                                                    <h2><em><strong>1.&nbsp; </strong></em><tt>{{$Exam->qn1op1}}</tt></h2><br>
                                                    <h2><em><strong>2.&nbsp; </strong></em><tt>{{$Exam->qn1op2}}</tt></h2><br>
                                                    <h2><em><strong>3.&nbsp; </strong></em><tt>{{$Exam->qn1op3}}</tt></h2><br>
                                                    <h2><em><strong>4.&nbsp; </strong></em><tt>{{$Exam->qn1op4}}</tt></h2><br>
                                               

                                                                </textarea>
                                                            </div>
                                                        </div>



                                                       

                                                        
                                                    </fieldset>

                                                     
                                                    <h3>Qn 2</h3>

                                                   

                                                    <fieldset>

                                                         <div class="form-group row">
                                                            
                                                            <div class="col-md-12 ">
                                                                <input placeholder="Enter Correct Answer Option e.g 3"  name="qn2ans"  type="text" required  class=" form-control jesus numericd">
                                                            </div>
                                                        </div>
                                                        
                                                              <div class="form-group row">
                                                             <div class="col-md-12 ">
                                                                <textarea readonly   style="height: 200px" value="" name=""  class=" editor form-control jesus">
                                                                  

                                                                        <h2><strong>======= Question 2 ===== </strong></h2>

                                                    <h3><code><strong>{{$Exam->qn2}}</strong></code></h3>

                                                    <p>&nbsp;</p>

                                                    <h2><code><strong>========= Answer Options ==========</strong></code></h2>

                                                    <h2><em><strong>1.&nbsp; </strong></em><tt>{{$Exam->qn2op1}}</tt></h2><br>
                                                    <h2><em><strong>2.&nbsp; </strong></em><tt>{{$Exam->qn2op2}}</tt></h2><br>
                                                    <h2><em><strong>3.&nbsp; </strong></em><tt>{{$Exam->qn2op3}}</tt></h2><br>
                                                    <h2><em><strong>4.&nbsp; </strong></em><tt>{{$Exam->qn2op4}}</tt></h2><br>
                                               

                                                                </textarea>
                                                            </div>
                                                        </div>



                                                       

                                                        
                                                    </fieldset>

                                                     
                                                    <h3>Qn 3</h3>

                                                   

                                                    <fieldset>

                                                         <div class="form-group row">
                                                            
                                                            <div class="col-md-12 ">
                                                                <input placeholder="Enter Correct Answer Option e.g 3"  name="qn3ans"  type="text" required  class=" form-control jesus numericd">
                                                            </div>
                                                        </div>
                                                        
                                                              <div class="form-group row">
                                                             <div class="col-md-12 ">
                                                                <textarea readonly   style="height: 200px" value="" name=""  class=" editor form-control jesus">
                                                                  

                                                                        <h2><strong>======= Question 3 ===== </strong></h2>

                                                    <h3><code><strong>{{$Exam->qn3}}</strong></code></h3>

                                                    <p>&nbsp;</p>

                                                    <h2><code><strong>========= Answer Options ==========</strong></code></h2>

                                                    <h2><em><strong>1.&nbsp; </strong></em><tt>{{$Exam->qn3op1}}</tt></h2><br>
                                                    <h2><em><strong>2.&nbsp; </strong></em><tt>{{$Exam->qn3op2}}</tt></h2><br>
                                                    <h2><em><strong>3.&nbsp; </strong></em><tt>{{$Exam->qn3op3}}</tt></h2><br>
                                                    <h2><em><strong>4.&nbsp; </strong></em><tt>{{$Exam->qn3op4}}</tt></h2><br>
                                               

                                                                </textarea>
                                                            </div>
                                                        </div>



                                                       

                                                        
                                                    </fieldset>

                                                     



                                                    <h3>Qn 4</h3>

                                                   

                                                    <fieldset>

                                                         <div class="form-group row">
                                                            
                                                            <div class="col-md-12 ">
                                                                <input placeholder="Enter Correct Answer Option e.g 3"  name="qn4ans"  type="text" required  class=" form-control jesus numericd">
                                                            </div>
                                                        </div>
                                                        
                                                              <div class="form-group row">
                                                             <div class="col-md-12 ">
                                                                <textarea readonly   style="height: 200px" value="" name=""  class=" editor form-control jesus">
                                                                  

                                                                        <h2><strong>======= Question 4 ===== </strong></h2>

                                                    <h3><code><strong>{{$Exam->qn4}}</strong></code></h3>

                                                    <p>&nbsp;</p>

                                                    <h2><code><strong>========= Answer Options ==========</strong></code></h2>

                                                    <h2><em><strong>1.&nbsp; </strong></em><tt>{{$Exam->qn4op1}}</tt></h2><br>
                                                    <h2><em><strong>2.&nbsp; </strong></em><tt>{{$Exam->qn4op2}}</tt></h2><br>
                                                    <h2><em><strong>3.&nbsp; </strong></em><tt>{{$Exam->qn4op3}}</tt></h2><br>
                                                    <h2><em><strong>4.&nbsp; </strong></em><tt>{{$Exam->qn4op4}}</tt></h2><br>
                                               

                                                                </textarea>
                                                            </div>
                                                        </div>



                                                       

                                                        
                                                    </fieldset>

                                                     
                                                    <h3>Qn 5</h3>

                                                   

                                                    <fieldset>

                                                         <div class="form-group row">
                                                            
                                                            <div class="col-md-12 ">
                                                                <input placeholder="Enter Correct Answer Option e.g 3"  name="qn5ans"  type="text" required  class=" form-control jesus numericd">
                                                            </div>
                                                        </div>
                                                        
                                                              <div class="form-group row">
                                                             <div class="col-md-12 ">
                                                                <textarea readonly   style="height: 200px" value="" name=""  class=" editor form-control jesus">
                                                                  

                                                                        <h2><strong>======= Question 5 ===== </strong></h2>

                                                    <h3><code><strong>{{$Exam->qn5}}</strong></code></h3>

                                                    <p>&nbsp;</p>

                                                    <h2><code><strong>========= Answer Options ==========</strong></code></h2>

                                                    <h2><em><strong>1.&nbsp; </strong></em><tt>{{$Exam->qn5op1}}</tt></h2><br>
                                                    <h2><em><strong>2.&nbsp; </strong></em><tt>{{$Exam->qn5op2}}</tt></h2><br>
                                                    <h2><em><strong>3.&nbsp; </strong></em><tt>{{$Exam->qn5op3}}</tt></h2><br>
                                                    <h2><em><strong>4.&nbsp; </strong></em><tt>{{$Exam->qn5op4}}</tt></h2><br>
                                               

                                                                </textarea>
                                                            </div>
                                                        </div>



                                                       

                                                        
                                                    </fieldset>

                                                     
                                                     
                                                    <h3>Qn 6</h3>

                                                   

                                                    <fieldset>

                                                         <div class="form-group row">
                                                            
                                                            <div class="col-md-12 ">
                                                                <input placeholder="Enter Correct Answer Option e.g 3"  name="qn6ans"  type="text" required  class=" form-control jesus numericd">
                                                            </div>
                                                        </div>
                                                        
                                                              <div class="form-group row">
                                                             <div class="col-md-12 ">
                                                                <textarea readonly   style="height: 200px" value="" name=""  class=" editor form-control jesus">
                                                                  

                                                                        <h2><strong>======= Question 6 ===== </strong></h2>

                                                    <h3><code><strong>{{$Exam->qn6}}</strong></code></h3>

                                                    <p>&nbsp;</p>

                                                    <h2><code><strong>========= Answer Options ==========</strong></code></h2>

                                                    <h2><em><strong>1.&nbsp; </strong></em><tt>{{$Exam->qn6op1}}</tt></h2><br>
                                                    <h2><em><strong>2.&nbsp; </strong></em><tt>{{$Exam->qn6op2}}</tt></h2><br>
                                                    <h2><em><strong>3.&nbsp; </strong></em><tt>{{$Exam->qn6op3}}</tt></h2><br>
                                                    <h2><em><strong>4.&nbsp; </strong></em><tt>{{$Exam->qn6op4}}</tt></h2><br>
                                               

                                                                </textarea>
                                                            </div>
                                                        </div>



                                                       

                                                        
                                                    </fieldset>

                                                     
                                                    <h3>Qn 7</h3>

                                                   

                                                    <fieldset>

                                                         <div class="form-group row">
                                                            
                                                            <div class="col-md-12 ">
                                                                <input placeholder="Enter Correct Answer Option e.g 3"  name="qn7ans"  type="text" required  class=" form-control jesus numericd">
                                                            </div>
                                                        </div>
                                                        
                                                              <div class="form-group row">
                                                             <div class="col-md-12 ">
                                                                <textarea readonly   style="height: 200px" value="" name=""  class=" editor form-control jesus">
                                                                  

                                                                        <h2><strong>======= Question 7 ===== </strong></h2>

                                                    <h3><code><strong>{{$Exam->qn7}}</strong></code></h3>

                                                    <p>&nbsp;</p>

                                                    <h2><code><strong>========= Answer Options ==========</strong></code></h2>

                                                    <h2><em><strong>1.&nbsp; </strong></em><tt>{{$Exam->qn7op1}}</tt></h2><br>
                                                    <h2><em><strong>2.&nbsp; </strong></em><tt>{{$Exam->qn7op2}}</tt></h2><br>
                                                    <h2><em><strong>3.&nbsp; </strong></em><tt>{{$Exam->qn7op3}}</tt></h2><br>
                                                    <h2><em><strong>4.&nbsp; </strong></em><tt>{{$Exam->qn7op4}}</tt></h2><br>
                                               

                                                                </textarea>
                                                            </div>
                                                        </div>



                                                       

                                                        
                                                    </fieldset>

                                                     
                                                    <h3>Qn 8</h3>

                                                   

                                                    <fieldset>

                                                         <div class="form-group row">
                                                            
                                                            <div class="col-md-12 ">
                                                                <input placeholder="Enter Correct Answer Option e.g 3"  name="qn8ans"  type="text" required  class=" form-control jesus numericd">
                                                            </div>
                                                        </div>
                                                        
                                                              <div class="form-group row">
                                                             <div class="col-md-12 ">
                                                                <textarea readonly   style="height: 200px" value="" name=""  class=" editor form-control jesus">
                                                                  

                                                                        <h2><strong>======= Question 8 ===== </strong></h2>

                                                    <h3><code><strong>{{$Exam->qn8}}</strong></code></h3>

                                                    <p>&nbsp;</p>

                                                    <h2><code><strong>========= Answer Options ==========</strong></code></h2>

                                                    <h2><em><strong>1.&nbsp; </strong></em><tt>{{$Exam->qn8op1}}</tt></h2><br>
                                                    <h2><em><strong>2.&nbsp; </strong></em><tt>{{$Exam->qn8op2}}</tt></h2><br>
                                                    <h2><em><strong>3.&nbsp; </strong></em><tt>{{$Exam->qn8op3}}</tt></h2><br>
                                                    <h2><em><strong>4.&nbsp; </strong></em><tt>{{$Exam->qn8op4}}</tt></h2><br>
                                               

                                                                </textarea>
                                                            </div>
                                                        </div>



                                                       

                                                        
                                                    </fieldset>

                                                     
                                                    <h3>Qn 9</h3>

                                                   

                                                    <fieldset>

                                                         <div class="form-group row">
                                                            
                                                            <div class="col-md-12 ">
                                                                <input placeholder="Enter Correct Answer Option e.g 3"  name="qn9ans"  type="text" required  class=" form-control jesus numericd">
                                                            </div>
                                                        </div>
                                                        
                                                              <div class="form-group row">
                                                             <div class="col-md-12 ">
                                                                <textarea readonly   style="height: 200px" value="" name=""  class=" editor form-control jesus">
                                                                  

                                                                        <h2><strong>======= Question 9 ===== </strong></h2>

                                                    <h3><code><strong>{{$Exam->qn9}}</strong></code></h3>

                                                    <p>&nbsp;</p>

                                                    <h2><code><strong>========= Answer Options ==========</strong></code></h2>

                                                    <h2><em><strong>1.&nbsp; </strong></em><tt>{{$Exam->qn9op1}}</tt></h2><br>
                                                    <h2><em><strong>2.&nbsp; </strong></em><tt>{{$Exam->qn9op2}}</tt></h2><br>
                                                    <h2><em><strong>3.&nbsp; </strong></em><tt>{{$Exam->qn9op3}}</tt></h2><br>
                                                    <h2><em><strong>4.&nbsp; </strong></em><tt>{{$Exam->qn9op4}}</tt></h2><br>
                                               

                                                                </textarea>
                                                            </div>
                                                        </div>



                                                       

                                                        
                                                    </fieldset>

                                                     
                                                    <h3>Qn 10</h3>

                                                   

                                                    <fieldset>

                                                         <div class="form-group row">
                                                            
                                                            <div class="col-md-12 ">
                                                                <input placeholder="Enter Correct Answer Option e.g 3"  name="qn10ans"  type="text" required  class=" form-control jesus numericd">
                                                            </div>
                                                        </div>
                                                        
                                                              <div class="form-group row">
                                                             <div class="col-md-12 ">
                                                                <textarea readonly   style="height: 200px" value="" name=""  class=" editor form-control jesus">
                                                                  

                                                                        <h2><strong>======= Question 10 ===== </strong></h2>

                                                    <h3><code><strong>{{$Exam->qn10}}</strong></code></h3>

                                                    <p>&nbsp;</p>

                                                    <h2><code><strong>========= Answer Options ==========</strong></code></h2>

                                                    <h2><em><strong>1.&nbsp; </strong></em><tt>{{$Exam->qn10op1}}</tt></h2><br>
                                                    <h2><em><strong>2.&nbsp; </strong></em><tt>{{$Exam->qn10op2}}</tt></h2><br>
                                                    <h2><em><strong>3.&nbsp; </strong></em><tt>{{$Exam->qn10op3}}</tt></h2><br>
                                                    <h2><em><strong>4.&nbsp; </strong></em><tt>{{$Exam->qn10op4}}</tt></h2><br>
                                               

                                                                </textarea>
                                                            </div>
                                                        </div>



                                                       

                                                        
                                                    </fieldset>

                                                     
                          
                                                                      <h3>Course Rating</h3>

                                                      <fieldset>
                                                        
                                                         <div class="form-group row">
                                                            
                                                            <div class="col-md-12 ">
                                                                <select   name="Courserating" required   class=" form-control jesus"> 

                                                                  <option value="">Please Rate this Course and Exam</option>
                                                                  <option value="Poor">Poor</option>
                                                                  <option value="Average">Average</option>
                                                                  <option value="Above Average">Above Average</option>
                                                                  <option value="Excellent">Excellent</option>

                                                                </select>
                                                            </div>
                                                        </div>


                                                        <div class="form-group row">
                                                            
                                                            <div class="col-md-9 ">
                                                                <textarea    class="editor" name="CourseComment">
                                                                  
                                                                 <h2><strong><code>Please provide Us with feedback about this Course and Exam, Mention what you think should be done to improve this course and exam. Please clear all this text before you start typing</code></strong></h2>

                                                                </textarea>

                                                            </div>
                                                    
                                                            <div class="col-md-3">
                                                               <input type="submit" name="" value="Submit Exam" class="btn btn-danger ">
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