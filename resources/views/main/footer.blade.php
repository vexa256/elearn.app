      
                    

                   
</div>
                </div>
            </div>



        </div>
    </div>
</div>
 </div>
    </div> 
</div>



                                            <div class="modal fade" id="AddAdmin" tabindex="-1" role="dialog">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Create an admin ccount</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body btn-inverse">
                                                        

                                                        @include('auth.admin')


                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>


   @include('main.warning')
    
<script type="text/javascript" src="{{url('bower_components/jquery/dist/jquery.min.js')}}"></script>

 @if(session()->has('error_data_custom'))


    <script>
      <?php echo session()->get('error_data_custom')  ; ?>  
    </script>



         @endif






@isset($error_data_custom)

 <script>

<?php echo $error_data_custom;?>

   </script>

@endisset

<script type="text/javascript" src="{{url('bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{url('bower_components/tether/dist/js/tether.min.js')}}"></script>
<script type="text/javascript" src="{{url('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{url('bower_components/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
<script type="text/javascript" src="{{url('bower_components/modernizr/modernizr.js')}}"></script>
<script type="text/javascript" src="{{url('bower_components/modernizr/feature-detects/css-scrollbars.js')}}"></script>
<script type="text/javascript" src="{{url('bower_components/classie/classie.js')}}"></script>
<script type="text/javascript" src="{{url('bower_components/i18next/i18next.min.js')}}"></script>
<script type="text/javascript" src="{{url('bower_components/i18next-xhr-backend/i18nextXHRBackend.min.js')}}"></script>
<script type="text/javascript" src="{{url('bower_components/i18next-browser-languagedetector/i18nextBrowserLanguageDetector.min.js')}}"></script>
<script type="text/javascript" src="{{url('bower_components/jquery-i18next/jquery-i18next.min.js')}}"></script>
<script type="text/javascript" src="{{url('bower_components/jquery.cookie/jquery.cookie.js')}}"></script>
<script type="text/javascript" src="{{url('bower_components/jquery.steps/build/jquery.steps.js')}}"></script>
<script type="text/javascript" src="{{url('bower_components/jquery-validation/dist/jquery.validate.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/pcoded.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/demo-12.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/jquery.mousewheel.min.js')}}"></script>
<script type="text/javascript" src="{{url('ckeditor/ckeditor.js')}}"></script>
<script type="text/javascript" src="{{url('ckeditor/adapters/jquery.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/script.js')}}"></script>
<script type="text/javascript" src="{{url('assets/pages/forms-wizard-validation/form-wizard.js')}}"></script>
<script type="text/javascript" src="{{url('assets/app.js')}}"></script>


@isset($counter)


    <script>
 CKEDITOR.disableAutoInline = true;
  CKEDITOR.config.height = 300;
   CKEDITOR.config.width = 'auto';

</script>



@else

<script>

  CKEDITOR.disableAutoInline = true;
  CKEDITOR.config.height = 300;
   CKEDITOR.config.width = 'auto';

</script>

@endisset


        <script type="text/javascript" src="{{url('datatables/jquery.dataTables.min.js')}}"></script>
        <script type="text/javascript" src="{{url('datatables/dataTables.bootstrap4.min.js')}}"></script>
        <script type="text/javascript" src="{{url('datatables/dataTables.buttons.min.js')}}"></script>
        <script type="text/javascript" src="{{url('datatables/buttons.bootstrap4.min.js')}}"></script>
        <script type="text/javascript" src="{{url('datatables/jszip.min.js')}}"></script>
        <script type="text/javascript" src="{{url('datatables/pdfmake.min.js')}}"></script>
        <script type="text/javascript" src="{{url('datatables/vfs_fonts.js')}}"></script>
        <script type="text/javascript" src="{{url('datatables/buttons.html5.min.js')}}"></script>
        <script type="text/javascript" src="{{url('datatables/buttons.print.min.js')}}"></script>
        <script type="text/javascript" src="{{url('datatables/buttons.colVis.min.js')}}"></script>
        <script type="text/javascript" src="{{url('datatables/dataTables.responsive.min.js')}}"></script>
        <script type="text/javascript" src="{{url('datatables/responsive.bootstrap4.min.js')}}"></script>




    
</body>



</html>
