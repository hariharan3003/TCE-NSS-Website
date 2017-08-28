<?php
  $t=mktime(date('h')+5,date('i')+30,date('s'));
  $d = date("Y-m-d h:i:sa",$t);
  if (isset($_COOKIE["time"]))  {
      echo $_COOKIE["time"];
      setcookie('time',$d,time()+60*60*24*365,"/");
    }
  else
  {
    echo "Haven't Visited";
    setcookie('time',$d,time()+10,"/");
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>NSS | TCE</title>
	<link rel="stylesheet" href="css/main.css"/>
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/footer.css"/>


</head>
<body>

<header class="container">
	<div class="row">
    <img class="col-sm-6" src="image/TCE_NSS_Logo.png" alt="TCE_NSS_Logo" usemap="#logomap">
    <map name="logomap">
      <area shape="rect" coords="0,0,90,90" href="index.html" alt="NSS">
      <area shape="rect" coords="500,0,560,90" href="http://tce.edu" alt="TCE">
    </map>
		<nav class="col-sm-6 navbar-static-top">
        <a href="index.html" onmouseover="enlarge(this)" onmouseout="shrink(this)">Home</a>
        <a href="Objectives.html" onmouseover="enlarge(this)" onmouseout="shrink(this)">Objectives</a>
        <a href="Activities.html" onmouseover="enlarge(this)" onmouseout="shrink(this)">Activities</a>
        <a href="News.html" onmouseover="enlarge(this)" onmouseout="shrink(this)">News</a>
        <a href="Gallery.html" onmouseover="enlarge(this)" onmouseout="shrink(this)">Gallery</a>
        <a href="ContactUs2.html" onmouseover="enlarge(this)" onmouseout="shrink(this)">ContactUs</a> 
        <a href="LogIn.html" onmouseover="enlarge(this)" onmouseout="shrink(this)">LogIn</a>
        <script type="text/javascript">
          function enlarge(x){
            x.style.fontSize="20px";
          }
          function shrink(x){
            x.style.fontSize="15px";
          }
        </script>
    </nav>
    <hr>
	</div>
  <hr style="background:#F87431; border:0; height:7px" />
</header>


<section class="jumbotron">
	 <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="image/group.png">
          <div class="container">
            <div class="carousel-caption">
              <h1>BLOOD DONATION CAMP</h1>
              <p class="lead">The Year's Best!</p>
              <a class="btn btn-large btn-primary" href="KnowMore.html" data-toggle="modal">Know More</a>
            </div>
          </div>
        </div>
    </div><!-- /.carousel -->

</section>



 
<div class="container">
	
	<div class="col-sm-8">
	

			<div class='textarea'>
                            <div  class='maintext'>About NSS</div>
                                <div  class='text'>
                                    National Service Scheme (NSS) is a voluntary organisation launched in Gandhiji's birth centenary year, 1969. The program aims to promote personality development by means of participation in community service. Starting from a handful of 37 universities, today it has got more than 3.2 million student volunteers from all over the country.<br>
                                </div>  


   			 </div>
                    <div class='textarea'>
                            <div  class='maintext'>About NSS, TCE</div>
                                <div  class='text'>
                                    In <abbr title = "Thiagarajar College of Engineering">TCE</abbr>, NSS has been made a part of extra curricular activity among the first and second year undergraduate students. The programme comprises of weekly social activities, awareness programmes, seasonal special activities and an annual camp.</br>
                                    National Service Scheme provides diversified opportunities to students in the college to develop their personality through community services. Community services rendered by the students have covered several aspects like adoption of villages for intensive development work, mass tree plantation, technology transfer programmes, technologies for rural development, various technical training programmes for self-help groups and rural youth etc.,
                                </div>
    				</div>
    </div>


    <div class="col-sm-4">
        <a href="http://nss.nic.in/">
          <img class="map" width="230px" height="220px" align="right" src="image\nss_logo.png" / >
        </a>
    		
    		<a href="http://www.tce.edu">
          <img class="map" width="250px" height="190px" align="right" src="image\tce_mainbuilding.png" />
        </a> 
    </div>
</div>

<br><br>
<div class="row">
  <div class="col-lg-12">
    <ul class="mendi-social-networks">

      <li class="copyright">
      <a href="" title="" target="blank_">
        <p>Developed by GoTech!</p>
        <span class="followers">&copy; TCE Madurai</span>
      </a>
      </li>

      <li class="facebook">
      <a href="https://www.facebook.com/National-Service-Scheme-TCE-677444149072063/" title="" target="blank_">
        <p>JOIN US ON FACEBOOK</p>
        <span class="followers">500+ Followers</span>
      </a>
      </li>

      <li class="tce">
      <a href="http://tce.edu" title="" target="blank_">
        <p>TCE Madurai</p>
        <span class="followers">A Temple of Learning</span>
      </a>
      </li>

      <li class="linkedin">
      <a href="" title="" target="blank_">
        <p>CONNECT ON LINKEDIN</p>
        <span class="followers">Know about our Volunteers</span>
      </a>
      </li>
    </ul>
  </div>
</div>

</body>
</html>