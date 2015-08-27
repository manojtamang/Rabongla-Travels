<!DOCKTYPE html>
<html lang="en">

<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
   		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/font.css" rel="stylesheet">	
	    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        	
	  <link href="css/custom.css" rel="stylesheet">
    
  
	
    
<title>Welcome To Ravang Tours and Travels</title>

</head>
	
   
<body id="page-top">
	
         <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    	  <div class="container-fluid">
		    <div class="navbar-header">
               <div class="navbar-brand navbar-brand-centered">RAVANGLA TOURS</div>
               
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		   
		    </div>

		    
		    <div class="collapse navbar-collapse" id="navbar-brand-centered">
		      <ul class="nav navbar-nav">
		        <li><a href="?act=home">Home</a></li>
		        <li><a href="#">Destination</a></li>
		        <li><a href="#">Places</a></li>
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="?act=about">About</a></li>
		        <li><a href="#portfolio">Portflio</a></li>
		        <li><a href="#contact">Contact</a></li>		        
		      </ul>
		    </div>
		  </div>
		</nav>       
	   
       <?php 
$acc=@$_GET['act'];
switch($acc)
{
	case '';
	case 'home':include('pages/home.php');break;
	case 'about':include('pages/about.php');break;
	
}
?>



<footer id="contact" class="footer-cont">
<br>
<div class="container">
<div class="row">
<div class="col-md-4 col-sm-6"> 
<h4 style="text-align:left; padding:1px; color:#FFF">ABOUT </h4>
<h5>
<p>
About Us
<br>
Contact Us
<br>
Travel Here
<br>
Choose Us
<br>  
</p>
</h5>
</div>
<div class="col-md-4 col-sm-6">
<h4 style="text-align:left; padding:1px;">Contact Information </h4>
</h5>
<h5>
<p>
Name
<br>
Address
<br>
Location
<br>
Contact No: xxxxxx
<br>  
Email Id: yyyyyyy
</p>
</h5>
</div>
<div class="col-md-4 col-sm-6">
<h4 style="text-align:left;">Follow Us On The Web</h4>
<p></p>
<table class="col-md-8 col-sm-12">
<tbody>
<tr><td><a href="#"><img src="images/facebook.png"></a></td>
<td><a href="#"><img src="images/google.png"></a></td>
<td><a href="#"><img src="images/twitter.png"></a></td>
</tr>
</tbody>
</table>                     
</div>
</div>
</div>
</div>
<hr></hr>

<div class="container">
<div class="row">
<div class="col-md-12 col-sm6">
<h6 style="color:#FFF; text-align:center;">Developed and Designed By Progesh Subba | copyright &copy; All rights reserved</h6> 
</div>
</div>
</div>
</footer>

    <div class="scroll-top page-scroll">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>       
        </a>
    </div>
 
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/custom.js"></script>
	 
	

</body>
</html>	

