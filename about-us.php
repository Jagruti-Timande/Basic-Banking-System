<?php include('nav.php') ?>

<html>
<head>
<title>Bank Information</title>
<link rel="stylesheet" href="style.css" >
<!-- CSS -->
<style>
  *{
	margin:0;
	padding:0;
	
}
body
{
	background-image: url("https://www.doughroller.net/wp-content/uploads/201…/largest-banks-in-the-world-648x364-c-default.jpg");
	font-family:sans-serif;
	
	
	
}
#nav-bar
{
	background-color:#1b021bea;
	position: sticky;
	top:0;
	z-index:10;
	float: right;
}
.nav-link:hover{
    background-color:rgb(10, 49, 134);
}
.navbar
{

    padding: 0 !important;
}
navbar-brand img
{
	height:40px;
	padding-left:20px;
}
.navbar-nav li
{
	padding: 0 10px;
}
.navbar-nav li a
{
color:#fff !important;
font-weight:600;
float:right;
text-align:left;
}
.fa-bars
{
	color:#fd0932;
	font-size:30p !important;
}
.navbar-toggler
{
	outline:none !important;
}
/*---banner section--*/
#main
{
	text-align: center;
background-color:rgb(175, 75, 122);
color:#fff;
padding-top:10%;	
}
.container h1 img{
	padding-bottom: 10px;
}


/*---service section---*/
#features1
{
	text-align: center;
	padding: 10% 15%;
}
 #features
 {
     text-align: center;
	 padding: 10% 15%; background-image: url('file:///C:/Users/hp/Desktop/imgres.htm');

 }
 .features1 h3
{
	padding:5px;
	margin-top:25px;
	text-transform:uppercase;
}

.features h3
{
	padding:5px;
	margin-top:25px;
	text-transform:uppercase;
}
.title::before
{
	content:'';
	background:#e9ec40;
	height:5px;
	width:600px;
	margin-left:auto;
	margin-right:auto;
	display:block;
	transform:translatey(63px);
}
.title::after
{
	content:'';
	background:#e3e709;
	height:10px;
	width:50px;
	margin-left:auto;
	margin-right:auto;
    margin-bottom:40px;
    display: block;
	transform:translatey(8px);
}
#features .btn-primary
{
	box-shadow:none;
	padding:10px 25px;
	border:none;
	align-content: center;
	background-image:linear-gradient(to right,#9cba17,#5ed7e7)
}
/* Action*/
  #action{
    background-color:rgb(175, 75, 122);
    padding: 7% 15%;
    text-align: center;
    line-height: 1.5;
    color: rgb(250, 246, 246);
  }
  .main{
    font-size: 3rem;
    line-height: 1.5;
    padding: 10px 0px;
  }
.fa {
  padding: 20px;
  font-size: 30px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  border-radius: 50%;
}

/* footer */
#footer{
	background-color:rgb(175, 75, 122);
    color:#fff;
    padding: 4% 25%;
    text-align: center;
}
</style>
<link rel="stylesheet" 
href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
 <!-- Google fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,300&display=swap" rel="stylesheet">
</head>
<body>
<section id="nav-bar">
<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#"><img src=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-bars"="true"></i>
  </button>

</nav>
</section>
<!----------------------------------------->

<section id="action" class="coloured-section">
    <h1 class="title">"Our Extra Facilities!!"</h1>
  </section>
  <section id="features1" class="white-section">
        <div class="row text-center">
          <div class="feature-boxes col-lg-4 col-md-6">
            <h3 class="feature-title">Do banking in just single click</h3>
            <p>You can check your transaction easily by one click</p>
          </div>
          <div class="feature-boxes col-lg-4 col-md-6">
            <h3 class="feature-title">Check your Transaction</h3>
            <p>We provide you best and secure networks to work.</p>
          </div>
          <div class="feature-boxes col-lg-4 col-md-6">
            <h3 class="feature-title">We are here for a service of trust.</h3>
            <p>Send your money easily from anywhere.</p>
          </div>
    </div>
    </section>
    
    <!---Action -->
    <footer id="footer" class="coloured-section">
      <p>FIND US ON SOCIAL MEDIA</p>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <i class="social-icon fa fa-facebook-square"aria-hidden></i>
        <i class="social-icon fa fa-instagram" aria-hidden="true"></i>
      <i class="social-icon fa fa-twitter" aria-hidden="true"></i>
        <i class="social-icon fa fa-linkedin" aria-hidden="true"></i>
    
      </footer>
    </body>
    </html>
    <?php include('footer.php') ?>