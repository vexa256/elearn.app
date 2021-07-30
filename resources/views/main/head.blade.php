<!DOCTYPE html>
<html>
<head>
     <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="EAPHLN e-learning elearning">
    <meta name="keywords" content="The EAPHLN e-learning system is intended to be utilized as a training tool to build the capacity of the laboratories professionals within the region|The EAPHLNP is a World Bank-funded project that is being implemented by the East African Community (EAC) Partner States namely; Burundi Kenya, Rwanda, Tanzania and Uganda in collaboration with the East African Community Secretariat and the East Central and Southern African Health Community (ECSA-HC). The objective of the project is to establish a network of efficient, high quality, accessible public health labaratories for the diagnosis and surveillance of Tuberculosis (TB) and other communicable diseases">
    <meta name="author" content="HireswareLTD">

    <title>The EAPHLN e-learning system is intended to be utilized as a training tool to build the capacity of the laboratories professionals within the region|The EAPHLNP is a World Bank-funded project that is being implemented by the East African Community (EAC) Partner States namely; Burundi Kenya, Rwanda, Tanzania and Uganda in collaboration with the East African Community Secretariat and the East Central and Southern African Health Community (ECSA-HC). The objective of the project is "to establish a network of efficient, high quality, accessible public health labaratories for the diagnosis and surveillance of Tuberculosis (TB) and other communicable diseases". Designed and maintained by Hiresware Ltd</title>


    
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
  
   

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/x-icon"  href="{{url('assets/images/favicon.ico')}}">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all">
    <link rel="stylesheet" type="text/css" href="{{url('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/icon/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/icon/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/icon/icofont/css/icofont.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/pages/flag-icon/flag-icon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/pages/menu-search/css/component.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/color/color-1.css')}}"  id="color">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/linearicons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/simple-line-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/ionicons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('assets/css/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('bower_components/jquery.steps/demo/css/jquery.steps.css')}}">
    

        <link rel="stylesheet" type="text/css" href="{{url('bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('assets/pages/data-table/css/buttons.dataTables.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('assets/pages/data-table/extensions/responsive/css/responsive.dataTables.css')}}">
    


    <style type="text/css">

         <?php


        $data = Auth::user()->role;

            if($data!='ADMIN'){

                    echo ".timo{



                        display:none !important; 


                    } 


                    .timo2{



                        display:none !important;


                         } ";
            }else {


                echo ".timo{} "; 


            }







             ?>
        

        .btn {
             webkit-box-shadow: -3px 13px 24px -1px rgba(0,0,0,0.3); box-shadow: -3px 13px 24px -1px rgba(0,0,0,0.3);
        }

        .jesus{

             webkit-box-shadow: -3px 13px 24px -1px rgba(0,0,0,0.3); box-shadow: -3px 13px 24px -1px rgba(0,0,0,0.3);
        }

        .pade {

            padding-top: 10% !important;
            padding-left: 5% !important;
            
        }


        .steps {

            display: none !important;
        }


        .icons-alert span {

            font-size: 16px !important;


        }

        .modal-body{

            max-height: 400px !important; overflow-y: scroll;


        }

        .sticky.is-sticky {
  position: fixed;
  left: 0;
  right: 0;
  top: 0;
  z-index: 1000;
  width: 100%;
}



    </style>
   
   



</head>

<body >
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div></div>
        </div>
    </div>
    <!-- Pre-loader end -->