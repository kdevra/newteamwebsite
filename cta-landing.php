<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>CTA Landing Page</title>
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="fonts/fontello/css/fontello.css" rel="stylesheet">
<!-- Bootstrap css-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link href="css/propeller.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
</head>

<body>
<?php include 'include/header.php';?>
<div class="clearfix"></div>
<section class="career-banner-cover cta-banner">
 <img class="man-img" src="images/man-img.png" alt="man img">
  <div class="container">
    <div class="row banner-content">
     <div class="col-md-8">
     	<h2>Analytics driven <br>
business <br>
results are good. better. </h2>
    <p>Talk to your data directly, no human intervention required.
A continuously evolving solution to suit your viewing habits and preferences.</p>
    <div class="company-data">
        <div class="valigncenter">
          <div class="offices off-cmn"><a href="#"> 
            <br>
            Offices<br>
            <br>
            <span>25</span><span class="blue-color">+</span></a></div>
          <div class="customers off-cmn"><a href="#"> 
            <br>
            Customers<br>
            <br>
            <span>1800</span><span class="blue-color">+</span></a></div>
          <div class="employees off-cmn" style="margin-right: 0"><a href="#"> 
            <br>
            Employees<br>
            <br>
            <span>1500</span><span class="blue-color">+</span></a></div>
          
        </div>
      </div>
     </div>
      <div class="col-md-4 col-lg-4 col-sm-6">
       <div class="cta-form">
        <div class="form">
          
          <form id="contact-form" name="contact" method="post" class="contact-form">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <input type="text" class="form-control" name="Name" autocomplete="off" id="Name" placeholder="Full Name">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <input type="email" class="form-control" name="email" autocomplete="off" id="email" placeholder="Work Email">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <input type="text" class="form-control" name="phoneNumber" autocomplete="off" id="phoneNumber" placeholder="Work Phone">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <input class="form-control" placeholder="Address">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <select class="form-control">
<option value ="Business Analytics">Business Analytics</option>
<option value ="Mapps">Mapps</option>
<option value ="Mapps">Mapps</option>
<option value ="Mapps">Mapps</option>
</select>
  
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="button-group" style="text-align: center;">
                  <input type="submit" name="action" value="Get in Touch" id="contact-submit" class="btn btn-info btn-yellow">
                </div>
              </div>
            </div>
          </form>
        </div>
        <p><sup>*</sup> Some important text here</p>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="clearfix"></div>
<?php include 'include/footer.php';?>

<!-- jQuery before Propeller.js --> 
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/propeller.min.js"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.8.1/bootstrap-slider.min.js"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.0/masonry.pkgd.min.js"></script> 
<script>
	$('.grid').masonry({
  // options... 
  itemSelector: '.grid-item',
  
});
	</script> 
<script>
		$(document).ready(function () {
    $('#myCarousel, #myCarousel1').carousel({
        interval: 10000
    })
    $('.fdi-Carousel .item').each(function () {
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        if (next.next().length > 0) {
            next.next().children(':first-child').clone().appendTo($(this));
        }
        else {
            $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
        }
    });
});
	</script>
	<script>
	$(window).on("scroll", function() {
    if($(window).scrollTop() > 10) {
        $(".navbar-fixed-top").addClass("wh-bg-clr");
    } else {
        
       $(".navbar-fixed-top").removeClass("wh-bg-clr");
    }
});
	$(window).scroll(function(){
  var sticky = $('.header-fixd-btn'),
      scroll = $(window).scrollTop();

  if (scroll >= 710) {
	  sticky.css('display','block');
  } 
  else { 
  sticky.css('display','none');} 
});
	</script>
</body>
</html>