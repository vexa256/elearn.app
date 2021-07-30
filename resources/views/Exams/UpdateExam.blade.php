 @include('main.head')
 @include('main.nav')
 @include('main.pagestart')





  <div class="card">
                            <div class="card-header">
                                 <div class="alert alert-primary icons-alert" style="margin-top: 1%;  font-size: 18px !important"> <p style="font-size: 18px !important"><strong>Your are attaching an exam to the course: {{$Exam->CourseName}}</strong></p>
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
                                            <section style="max-height: 600px; overflow-y: scroll;">
                                                <form method="POST" class="wizard-form" id="basic-forms" action="{{ route('UpdateExamLogic', ['id'=>$Exam->id]) }}">
                                                       @csrf
                                            <input type="hidden" name="CourseName" value="{{$Exam->CourseName}}">
                                                    <input type="hidden" name="CourseID" value="{{$Exam->CourseID}}">


                                                         <div class="form-group row" style="padding-top: 2%; padding-left: 2%; padding-right: 2%">
                                                            <div class="col-md-4 ">
                                                                <label  class="block">Exam Name </label>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input value="{{$Exam->ExamName}}" name="ExamName"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>

                                                         @if(!is_null($counter))

                                            @foreach($counter as $c)


                                            @php
                                            $qn = 'qn'.$c->c;
                                            $opt1 = $qn.'op1';
                                            $opt2 = $qn.'op2';
                                            $opt3 = $qn.'op3';
                                            $opt4 = $qn.'op4';
                                            $ans = $qn.'ans';
                                            @endphp
                                                    <h3>{{$qn}}</h3>

                                                   
                                                   

                                                    <fieldset>
                                                       

                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Question {{$c->c}}</label>
                                                            </div>
                                                             <div class="col-md-8 col-lg-10">
                                                                <textarea value="" name="{{$qn}}"  class=" form-control">{{$Exam->$qn}}</textarea>
                                                            </div>
                                                        </div>



                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Qn {{$c->c}} option 1</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <input value="{{$Exam->$opt1}}" name="qn{{$c->c}}op1"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>


                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Qn {{$c->c}} option 2</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <input value="{{$Exam->$opt2}}" name="qn{{$c->c}}op2"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>


                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Qn {{$c->c}} option 3</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <input value="{{$Exam->$opt3}}" name="qn{{$c->c}}op3"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>



                                                        <div class="form-group row">
                                                            <div class="col-md-4 col-lg-2">
                                                                <label  class="block">Qn {{$c->c}} option 4</label>
                                                            </div>
                                                            <div class="col-md-8 col-lg-10">
                                                                <input value="{{$Exam->$opt4}}" name="qn{{$c->c}}op4"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>


                                                         <div class="form-group row">
                                                            <div class="col-md-4 col-md-3">
                                                                <label  class="block">Correct Answer option </label>
                                                            </div>
                                                            <div class="col-md-8 col-md-9">
                                                                <input value="{{$Exam->$ans}}" name="qn{{$c->c}}ans"  type="text"  class=" form-control">
                                                            </div>
                                                        </div>
                                                    </fieldset>


                                                     @endforeach

                                                   @endif



                                                     <h3>Description</h3>

                                                 

                                                    <fieldset>
                                                       

                                                        <div class="form-group row">
                                                            <div class="col-md-2 ">
                                                                <label  class="block">Exam Description</label>
                                                            </div>
                                                            <div class="col-md-6 ">
                                                                <textarea value="" name="Description"  class="editor form-control">
                                                                    
                                                                    {{$Exam->Description}}

                                                                </textarea>
                                                            </div>
                                                       
                                                            <div class="col-md-4">
                                                               <input type="submit" name="" value="Update Exam" class="btn btn-danger float-left">
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