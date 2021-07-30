<!DOCTYPE html>
<html >
<head>
	<title>Certificate</title>
	<link rel="stylesheet" type="text/css" href="{{url('assets/css/style.css')}}">
	 <link rel="stylesheet" type="text/css" href="{{url('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">

	 <style type="text/css">
	 	.{

             webkit-box-shadow: -3px 13px 24px -1px rgba(0,0,0,0.3); box-shadow: -3px 13px 24px -1px rgba(0,0,0,0.3);
        }
	 </style>
</head>
<body style="background-color: white; padding-left: auto">

               
                            
                                <img class="" src="{{url('assets/1.png')}}" style="height: 70%">
                         
                            
                            <div class="card-block" style="background-color: white">
                                <p>
                                	<div style=" background-color: white">
                                    <h6><strong>{{Auth::user()->name}}</strong></h6>
                                </div>
                                </p>
                                 <p>
                                	<div style=" background-image: url('assets/4.png'); background-repeat: repeat;">
                                    <h6>Has successfully completed the {{$Courses->CourseName}} course</h6>
                                </div>
                                </p>

                                <img class="" src="{{url('assets/3.png')}}" style="height: 70%">
                                                   </div>
                       
                        
      
</body>
</html>