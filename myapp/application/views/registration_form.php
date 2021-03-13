<!DOCTYPE html>
<html>
<head>
	<title>Evolvers</title>
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0, shrink-to-fit=no">
	<link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">
	<!-- <link href="<?php //echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet"> -->
	<link href="<?php echo base_url('assets/css/font-family.css');?>" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- <script src="<?php //echo base_url('assets/js/jquery.js');?>"></script> -->
	<!-- <script src="<?php //echo base_url('assets/js/bootstrap.min.js');?>"></script> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>


	<section class="head_bar">
		<p>3rd International Annual Conference, 29 June 2019, New Delhi, India</p>
	</section>


<div class="fixed_nav">
	<section class="logo_area">
		<img src="<?php echo base_url('assets/images/evolvers_logo.png'); ?>" alt="">
	</section>

</div>


	<section class="registration_box">
		

		<div class="registrat_head">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
					<img src="<?php echo base_url('assets/images/icons/icon1.png'); ?>">
					<h5>HABITAT CENTER</h5>
					<h6>ASIF ALI ROAD, NEW DELHI-110001</h6>
				</div>
				<div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
					<img src="<?php echo base_url('assets/images/icons/icon2.png'); ?>">
					<h5>29 JUNE 2019</h5>
					<h6>08:30 AM - 11:00 PM</h6>
				</div>
				<div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
					<img src="<?php echo base_url('assets/images/icons/icon3.png'); ?>">
					<h5>300 AVAILABLE SEATS</h5>
					<h6>HURRY UP! FEW TICKETS ARE LEFT</h6>
				</div>
			</div>
		</div>


		<div class="registration_status">
			<div class="status_row">
				<div class="circle1">
					<p class="active_status">1</p>
					<p class="active_name">FILL DETAILS</p>
				</div>
				<div class="circle2" id="circle2">
					<p class="inactive_status" id="active_status">2</p>
					<p class="inactive_name" id="active_name">SELECT TICKET & PAY</p>
				</div>
				<div class="circle3" id="circle3">
					<p class="inactive_status" id="inactive_status">3</p>
					<p class="inactive_name" id="inactive_name">CONFIRMATION</p>
				</div>
			</div>
		</div>


		<div class="registration_form" id="section1">
			<h1>Registration</h1>
			<form>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<div class="form-group switcher">
							<label>You are a </label><button type="button" id="show" class="btn btn-primary member" onclick="member_show();">MEMBER</button><button type="button" class="btn visitor" id="hide" onclick="member_hide();">VISITOR</button>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="member_id">
						<div class="form-group"> 
							<label>Membership ID Number</label><span class="error">*</span><br>
							<input type="text" name="id_no" Required>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<div class="form-group">
							<label>First Name</label><span class="error">*</span><br>
							<input type="text" name="fname" Required>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<div class="form-group">
							<label>Last Name</label><span class="error">*</span><br>
							<input type="text" name="lname" Required>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<div class="form-group">
							<label>Email Address</label><span class="error">*</span><br>
							<input type="email" name="email" Required>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<div class="form-group">
							<label>Contact Number</label><span class="error">*</span><br>
							<input type="text" name="cnumber" Required>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<div class="form-group">
							<label>Your City</label><span class="error">*</span><br>
							<input type="text" name="city" Required>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<div class="form-group">
							<label>Website Link</label><br>
							<input type="text" name="link">
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<div class="form-group">
							<label>Company Name</label><br>
							<input type="text" name="name">
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<div class="form-group">
							<label>Designation</label><br>
							<input type="text" name="designation">
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<button type="submit" class="btn btn-default submit_form" id="submit_form">PROCEED</button>
						<p>By submitting this form, you agree to our <span class="blue"> Terms & Conditions</span></p>
					</div>
				</div>
			</form>
		</div>



		<div class="paymoney" id="section2" style="display: none;">
			
			<div class="member_info row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="border">
					<p class="light_black">Vikram Sindhu(LB785422)</p>
					<p class="light_black">Founder</p>
					<p class="light_black">vikram.sind@gmail.com</p>
					<p class="light_black">9818379200</p>
					<p class="light_black">Delhi</p>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="border">
					<div class="center_align">
						<p class="light_black">YYZ Autopart Pvt Ltd</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" id="border">
					<div class="align_right">
						<h6 class="red">MEMBER</h6>
						<p class="light_grey">Challenger - Automobiles</p>
					</div>
				</div>
			</div>
		
			<div class="ticket_detail">
				<h3>SELECT TICKET</h3>
				<div class="detail_box row">
					<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5" id="border">
						<div class="ticket_des">
							<h5 class="member_head">MEMBER GOLD - PASS</h5>
							<p class="light_black">1 MEMBER + 2 FAMILY MEMBER</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" id="border">
						<div class="align_center">
							<div class="container">
								<div class="row">
							        <div class="col-lg-2">
							            <div class="input-group">
		                                    <span class="input-group-btn">
		                                        <button type="button" class="quantity-left-minus btn btn-number"  data-type="minus" data-field="">
		                                          <span><i class="fa fa-minus" aria-hidden="true"></i></span>
		                                        </button>
		                                    </span>
							                <input type="text" id="quantity" name="quantity" class="form-control input-number" value="10" min="1" max="100">
							                <span class="input-group-btn">
							                <button type="button" class="quantity-right-plus btn btn-number" data-type="plus" data-field="">
							                <span><i class="fa fa-plus" aria-hidden="true"></i></span>
											</button>
							                </span>
							            </div>
							        </div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="border">
						<div class="align_right ticket_des">
							<p class="light_grey">2 X $250</p>
							<h6 class="red">$500</h6>
						</div>
					</div>
				</div>
			</div>

			<div class="confirm_payment right_align">
				<h5>TOTAL<span class="gap">$500</span></h5>
				<button type="button" class="btn btn-primary pay" id="paid">PAY</button>
			</div>


		</div>


		<div class="confirmation_mode" id="section3" style="display: none;">


			<div class="confirm_sent row">
				<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
					<p class="sent_mail">Your ticket has been sent to<span class="email_id"> vikram.sind@gmail.com</span><img src="<?php echo base_url('assets/images/Image_2.png'); ?>"></p>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
					<div class="align_right">
						<button type="button" class="btn btn-default resend_mail">Resend</button>
					</div>
				</div>
			</div>


			<div class="conference_details">
				<p class="conference_name">SANKALP 2K19. Annual Conference</p>
				<p class="conference_time">24 July,2019, 08:00 AM at Habitat Center, Asif Ali Road, New Delhi - 110001</p>
			</div>

            <div class="member_data">
            	<h3>PURCHASED BY</h3>
				<div class="member_info row">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" id="border">
						<p class="light_black">Vikram Sindhu(LB785422)</p>
						<p class="light_black">Founder</p>
						<p class="light_black">vikram.sind@gmail.com</p>
						<p class="light_black">9818379200</p>
						<p class="light_black">Delhi</p>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" id="border">
						<div class="center_align">
							<p class="light_black">YYZ Autopart Pvt Ltd</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" id="border">
						<div class="align_right">
							<h6 class="red">MEMBER</h6>
							<p class="light_grey">Challenger - Automobiles</p>
						</div>
					</div>
				</div>
			</div>
		
			<div class="ticket_detail">
				<h3>TICKET</h3>
				<div class="detail_box row">
					<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5" id="border">
						<div class="ticket_des">
							<h5 class="member_head">MEMBER GOLD - PASS</h5>
							<p class="light_black">1 MEMBER + 2 FAMILY MEMBER</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" id="border">
					
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="border">
						<div class="align_right ticket_des">
							<p class="light_grey">2 X $250</p>
							<h6 class="red">$500</h6>
						</div>
					</div>
				</div>
			</div>

			<div class="confirm_payment right_align">
				<button type="button" class="btn btn-primary pay">DONE</button>
			</div>



		</div>


	</section>


	<footer class="footer-area container-fluid">
		<div class="row">
			<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
				<img src="<?php echo base_url('assets/images/evolvers_logo.png'); ?>" alt="" class="footer_logo">
				<p>Evolvers is India's largest and most successful business networking organisation. We offer our members the opportunity to share ideas, contacts, and most importantly, business referrals!</p>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<h5 class="links_heading">QUICK LINKS</h5>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<ul class="menu1">
							<li>Speaker</li>
							<li>Gallery</li>
							<li>Schedule</li>
						</ul>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<ul class="menu2">
							<li>Partners</li>
							<li>Contact</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<h5 class="contact_heading">CONTACT</h5>
				<i class="fa fa-map-marker" aria-hidden="true"></i><span>I-9,LGF,Lajpat Nagar-III, New Delhi 110024</span><br>
				<i class="fa fa-envelope" aria-hidden="true"></i><span>info@evolvers.co.in</span><br>
				<i class="fa fa-phone" aria-hidden="true"></i><span>+91-11-49400901/02</span>


				<h5 class="follow_heading">FOLLOW US</h5>
				<div class="social_links">
					<img src="<?php echo base_url('assets/images/icons/facebook.png'); ?>">
					<img src="<?php echo base_url('assets/images/icons/linkedin.png'); ?>">
				</div>
  
			</div>
		</div>
	</footer>


	<div class="copyright_section">
			<p>Copyright <i class="fa fa-copyright"></i>  2019 - Evolvers | Terms & Conditions | Disclaimer | Privacy Policy</p>
	</div>



	<script>
		
		function member_show()
		{
			document.getElementById('member_id').style.cssText = 'display: block;';
			$("#hide").addClass("visitor");
			$("#show").addClass("member");
			$("#show").removeClass('visitor');
	        $("#hide").removeClass('member');

		}

		function member_hide()
		{
			document.getElementById('member_id').style.cssText = 'display: none;';
			$("#show").addClass("visitor");
			$("#hide").addClass("member");
			$("#hide").removeClass('visitor');
	        $("#show").removeClass('member');
		}


        $("#submit_form").click(function(){
        	$("#active_status").addClass("active_status");
        	$("#active_name").addClass("active_name");
	        $("#active_status").removeClass('inactive_status');
	        $("#active_name").removeClass('inactive_name');
	        $("#section1").hide();
	        $("#section2").show();
	        $("#section3").hide();
        
         });


          $("#paid").click(function(){
        	$("#inactive_status").addClass("active_status");
        	$("#inactive_name").addClass("active_name");
	        $("#inactive_status").removeClass('inactive_status');
	        $("#inactive_name").removeClass('inactive_name');
	          $("#section1").hide();
	        $("#section2").hide();
	        $("#section3").show();
        
         });


        $(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

	     $('.quantity-left-minus').click(function(e){
	        // Stop acting like a button
	        e.preventDefault();
	        // Get the field name
	        var quantity = parseInt($('#quantity').val());
	        
	        // If is not undefined
	      
	            // Increment
	            if(quantity>0){
	            $('#quantity').val(quantity - 1);
	            }
	    });
	    
	});

        function shownav()
{
	$('.responsive-collapse').toggle();
}

$(document).ready(function() {
        // Transition effect for navbar 
        $(window).scroll(function() {

          // checks if window is scrolled more than 500px, adds/removes solid class
          if($(this).scrollTop() > 1) { 
              $('.fixed_nav').addClass('solid');
              // $('#navbar').css('background','#fff');
              // alert('vfhgfgjh');
          } else {
              $('.fixed_nav').removeClass('solid');
          }
        });
});


 

	</script>


</body>
</html>