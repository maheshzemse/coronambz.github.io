
<?php
include('style.php');
include('connection.php');
include('form.php');







?>

<!DOCTYPE html>
<html>
<head>
	<title>Corona</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

<style type="text/css">
  .corona_r img{
  animation: goc 3s linear infinite;

}
-
@keyframes goc
{

  0%    { transform: rotate(0); }
  100%  { transform: rotate(360deg);}
}



.leftside img{
  animation: gg 3s linear infinite;

}

@keyframes gg
{

  0%    { transform: rotate(0); }
  100%  { transform: rotate(360deg);}
}

</style>



</head>
<body>

<nav class="navbar  navbar-expand-lg nav_style fixed-top ">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
       </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#symtoms">Symtoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#prevention">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="IndiaCoronaLive.php">IndiaCoronaLive</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
    </ul>
  </div>
</nav>


<div class="main_header">
	<div class="row w-100 h-100">
		<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
			<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
				<img src="left.png" width="300" height="300">
			</div>
			
			</div>

		<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
			<div class="rightside text-capitalize leftside w-100 h-100 d-flex justify-content-center align-items-center">
				<h1>Lets stay safe & fight together against COR<span class="corona_r"><img  src="right.png " width="70px height70px"></span>NA virus</h1>
			</div>
			</div>

	</div>
</div>

<!--******************************corona updates************---->


<section class="corona_update">

  <div class="mb-3 ">
    <h3 class="text-uppercase text-center">covid-19 updates</h3>
  </div>

    <div class=" d-flex justify-content-around align-items-center mt-5">
      <div>
        <h1 class="count">1,524,266</h1>
        <p>Passenger screen at airport</p>
      </div>

       <div>
        <h1 class="count">512</h1>
        <p>Active COVID-19 cases</p>
      </div>
       <div>
        <h1 class="count">40</h1>
        <p>Discharged cases</p>
      </div>
       <div>
        <h1 class="count">9</h1>
        <p>Death cases</p>
      </div>
    </div>
</section>


<!--****************about section****************-->

<div class="container sub_section  pt-5 pb-5 " id="aboutid" >
  <div class="section_header text-center mb-5 mt-5 pt-5">

    <h1>About Covid-19  </h1>
  </div>
    <div class="row pt-5">
      <div class="col-lg-5 col-md-4 col-12 ">
        <img src="aboutcorona.jpg" class="img-fluid">
     </div>

     <div class="col-lg-6 col-md-4 col-12">
        <h2 > What is Covid-19 (corona Virus)</h2>
        <p class="text-justify">Coronaviruses are a family of viruses that cause disease in animals. Seven, including the new virus, have made the jump to humans, but most just cause cold-like symptoms.

Covid-19 is closely related to severe acute respiratory syndrome (Sars) which swept around the world in 2002 to 2003. That virus infected around 8,000 people and killed about 800 but it soon ran itself out, largely because most of those infected were seriously ill so it was easier to control.

Another coronavirus is Middle East respiratory syndrome (Mers), cases of which have been occurring sporadically since it first emerged in 2012 - there have been around 2,500 cases and nearly 900 deaths. 

Covid-19 is different to these two other coronaviruses in that the spectrum of disease is broad, with around 80 per cent of cases leading to a mild infection. 
</p>
     </div>
    </div>
  </div>
</div>

<!--//////////////////corona symtoms///////////////////--->



<div class="container-fluid pt-5 pb-5 " id="symtoms" >
  <div class="section_header text-center mb-5 mt-5 pt-5">

    <h1> Corona virus Symtoms </h1>
  </div>

  <div class="container">
    <div class="row ">
      <div class="col-lg-4 col-md-4 col-12 mt-4">
        <figure class="text-center">
        <img src="cough.jpg" class="img-fluid" width="120" height="120">
        <figcaption>COUGH</figcaption>
        </figure>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-4">
        <figure class="text-center">
        <img src="nose.jpg" class="img-fluid" width="90" height="40">
        <figcaption>RUNNY NOSE</figcaption>
        </figure>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-4 ">
        <figure class="text-center">-
        <img src="fever.jpg" class="img-fluid" width="60" height="40">
        <figcaption>FEVER</figcaption>
        </figure>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-4">
        <figure class="text-center">
        <img src="cold.jpg" class="img-fluid" width="120" height="120">
        <figcaption>COLD</figcaption>
        </figure>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-4">
        <figure class="text-center">
        <img src="tiredness.jpg" class="img-fluid" width="120" height="120">
        <figcaption>TIREDNESS</figcaption>
        </figure>
      </div>

      <div class="col-lg-4 col-md-4 col-12 mt-4">
        <figure class="text-center">
        <img src="breath.jpg" class="img-fluid" width="120" height="120">
        <figcaption>DIFFICULTY IN BREATHING</figcaption>
        </figure>
      </div>
   </div>
  </div>
</div>


<!---**************6 Steps Prevention Against Coronavirus*******************---->

<div class="container-fluid sub_section pt-5 pb-5 " id="prevention" >
  <div class="section_header text-center mb-5 mt-5 pt-5">

    <h1> 6 Steps Prevention Against Coronavirus </h1>

  </div>

  <div class="container">
    <div class="row">

      <div class="col-lg-4 col-md-4 col-12 mt-5">

        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
              <img src="hadwash.jpg" class="img-fluid" width="90" height="90">
             </figure>
           </div>
                 <div class="col-lg-8 col-md-4 col-12">
                   <p>
                      Wash your hands regularly for 20 seconds,with soap and water.
                   </p>
                  </div>
                </div>
        </div>


         <div class="col-lg-4 col-md-4 col-12 mt-5">

        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
              <img src="mask.jpg" class="img-fluid" width="90" height="90">
             </figure>
           </div>
                 <div class="col-lg-8 col-md-4 col-12">
                   <p>
                    Cover your nose and mouth with diposible tissue or fixed elbow when you cough or sneeze
                   </p>
                  </div>
                </div>
        </div>
     

      <div class="col-lg-4 col-md-4 col-12 mt-5">

        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
              <img src="close.jpg" class="img-fluid" width="90" height="90">
             </figure>
           </div>
                 <div class="col-lg-8 col-md-4 col-12">
                   <p>
                      Avoid close contact(1 meter)with the people who are unwell.
                   </p>
                  </div>
                </div>
        </div>
     

      <div class="col-lg-4 col-md-4 col-12 mt-5">

        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
              <img src="home.jpg" class="img-fluid" width="90" height="90">
             </figure>
           </div>
                 <div class="col-lg-8 col-md-4 col-12">
                   <p>
                      stay at home and self-isolate from others in the household if you fell unwell
                    </p>
                  </div>
                </div>
        </div>
     

      <div class="col-lg-4 col-md-4 col-12 mt-5">

        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
              <img src="news.jpg" class="img-fluid" width="50" height="90">
             </figure>
           </div>
                 <div class="col-lg-8 col-md-4 col-12">
                   <p>
                      Stay informed by watching news and follow the recommended practices
                   </p>
                  </div>
                </div>
        </div>
     

      <div class="col-lg-4 col-md-4 col-12 mt-5">

        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
            <figure class="text-center">
              <img src="fever1.jpg" class="img-fluid" width="90" height="90">
             </figure>
           </div>
                 <div class="col-lg-8 col-md-4 col-12">
                   <p>
                      If you have fever,cough and difficult breathing,seek medical care early
                   </p>
                  </div>
                </div>
        </div>
      </div>
    </div>

</div>

    <!------------Contact us-------------------------------------------------------------------------------->
  

<div class="container-fluid pt-5 pb-5 " id="contact" >
  <div class="section_header text-center mb-5 mt-5 pt-5">
     <h1> Contact Us</h1>
 </div>

<div class="container">
  <div class="row">
    <div class="col-lg-8 offset-lg-2 lg-12">

      <form method="POST" action="">

  <div class="form-group">
    <label >UserName</label>
    <input type="text"  name="username"class="form-control"  placeholder="Enter the Full Name" autocomplete="off" required>
  </div>

   <div class="form-group">
    <label >Mobile No</label>
    <input type="Number"  name="mob"class="form-control"  placeholder="Enter Mobile Number" autocomplete="off" required>
  </div>

  <div class="form-group">
    <label >Email</label>
    <input type="email"  name="email"class="form-control"  placeholder="Enter the Email Id" autocomplete="off" required>
  </div>

 
  <div class="form-group">
    <label >Comment</label>
    <textarea class="form-control" name="textarea"rows="3"></textarea>
  </div>

  <input type="submit" name="submit" value="submit" class="btn btn-primary">

</form>
</div>
    </div>
</div>
</div>


<!-----------footer------------------------------------------------------------------->

<footer class="mt-5">
  <div class="footer_style  text-white text-center container-fluid">

    <p>copyright by @maheshzemse</p>
    
  </div>
</footer>

</body>
</html>


































