<!DOCTYPE html>
<html>
<head>
  <title>Evolvers</title>
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/slicknav.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/infinite-slider.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/font-family.css');?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/nivo_slight.css');?>" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="<?php echo base_url('assets/plugins/dropzone/dist/dropzone.css');?>" rel="stylesheet">
  <script src="<?php echo base_url('assets/js/jquery.js');?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
  <script src="<?php echo base_url('assets/js/slick.js');?>"></script>
  <script src="<?php echo base_url('assets/js/popper.js');?>"></script>
  <script src="<?php echo base_url('assets/counter/dist/jquery-ensure-max-length.min.js'); ?>"></script> 
	
	<script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
	<script src="<?php echo base_url('assets/plugins/dropzone/dist/dropzone.js');?>"></script>
</head>
<body>


	<nav class="vertical-navbar">
      <div class="menu-head row">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
          <i class="fa fa-bars"></i>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
          <p>Menu</p>
        </div>
      </div>
      <ul>
      <li><a href="#"><i class="fa fa-home"></i> <span class="margin"> Dashboard</span></a></li>
      <li><a href="#"><i class="fa fa-user"></i> <span class="margin"> Users</span></a></li>
      <li><a href="#"><i class="fa fa-sticky-note-o"></i> <span class="margin"> Posts</span></a></li>
      <li><a href="#"><i class="fa fa-group"></i> <span class="margin"> Groups</span></a></li>
      <li><a href="#"><i class="fa fa-database"></i> <span class="margin"> Projects</span></a></li>
      </ul>

      <ul>
      <h5 class="side_head">Event</h5>
      <li><a href="#"><i class="fa fa-list-alt"></i> <span class="margin"> Event Summary</span></a></li>
      <li><a href="#"><i class="fa fa-group"></i> <span class="margin"> Registered Users</span></a></li>
      <li><a href="#" style="margin-left: 12px;"><i class="fa fa-ellipsis-v"></i> <span class="margin"> Package Management</span></a></li>
      <li><a class="active" href="#"><i class="fa fa-sliders"></i> <span class="margin"> Settings</span></a></li>
      </ul>

      <ul>
      <h5 class="side_head">Transaction</h5>
      <li><a href="#"><i class="fa fa-credit-card"></i> <span class="margin"> Membership</span></a></li>
      <li><a href="#"><i class="fa fa-credit-card"></i> <span class="margin"> Event</span></a></li>
      </ul>

      <ul>
      <h5 class="side_head">Others</h5>
      <li><a href="#"><i class="fa fa-tag fa-lg"></i> <span class="margin"> Generate Coupons</span></a></li>
      <li><a href="#"><i class="fa fa-envelope"></i> <span class="margin"> Newsletter</span></a></li>
      <li><a href="#"><i class="fa fa-bell"></i> <span class="margin"> Notification</span></a></li>
      <li><a href="#"><i class="fa fa-commenting-o"></i> <span class="margin"> Feedback</span></a></li>
      </ul>



    </nav>

	<section class="profile_bar">
		<div class="profile_details row">
			<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
				<img src="<?php echo base_url('assets/images/profile_img.png'); ?>" alt="" class="profile_img">
			</div>
			<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
				<h6 class="profile_name">Rishabh Pandit</h6>
			</div>
		</div>
	</section>

    <div class="page_wrapper">


    	<section class="page_heading">
				<p><i class="fa fa-group"></i> Event/Settings</p>
		</section> 



		<section class="navmenu" id="header_menu">
			<ul>
				<li class="active_link" id="show_head" onclick="select_tophead(this.id)">Top Header & Banner</li>
				<li id="show_About" onclick="select_about(this.id)">About</li>
				<li onclick="select_keynote(this.id)" id="show_keynote">Keynote Speaker</li>
				<li onclick="select_schedule(this.id)" id="show_schedule">Schedule</li>
				<li onclick="select_gallery(this.id)" id="show_gallery">Gallery</li>
				<li onclick="select_sponsors(this.id)" id="show_sponsors">Sponsors & Promotors</li>
				<li onclick="select_others(this.id)" id="show_others">Others</li>
			</ul>
		</section>


    	
    	<section id="banner_Section">

    		<form> 

	    		<div class="button_area">
	    			<button type="button" class="btn save_button">Save</button><button type="button" class="btn discard_button">Discard</button>
	    		</div>

                <div class="top_bar">
		    		<div class="form-group">
		    			<h4>TOP HEAD BAR</h4>
		    			<textarea type="text" name="head_bar" id="head_bar" onkeyup="textCounter(this,'counter',100);" class="form-control" Required></textarea>
		    			<input disabled  maxlength="4" size="4" value="100" id="counter" class="letter_count">
		    		</div>
		    	</div>

		    	<div class="top_image">
		    		<div class="form-group">
		    			<h4>TOP BANNER</h4>
		    			<label>Background Banner Picture <span class="error">*</span></label>
		    		    <div class="row">
		    		    	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
		    		    		<div class="image_box">
		    		    			<img src="<?php echo base_url('assets/css/bg_image/banner_pic.png'); ?>" alt="">
		    		    		</div>
		    		    	</div>
		    		    	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
		    		    		<div class="banner_specification">
			    		    		<h5>Banner Specification</h5>
			    		    		<h5 class="light_weight">Default - English (United-Status) -en-US</h5>
			    		    		<h5>1366wX740h</h5>
			    		    		<h5>JPG or PNG<span class="light_weight"> (no alpha)</span></h5>
			    		    	</div>
		    		    	</div>
		    		    </div>
		    		</div>
		    	</div>

		    	<div class="top_bar">
		    		<div class="form-group">
		    			<label>Event Title <span class="error">*</span></label><br>
		    			<textarea type="text" name="head_bar" id="head_bar" onkeyup="textCounter(this,'counter1',50);" class="form-control" Required></textarea>
		    			<input disabled  maxlength="4" size="4" value="50" id="counter1" class="letter_count">
		    		</div>
		    	</div>

		    	<div class="top_bar">
		    		<div class="form-group">
		    			<label>Event Short Description <span class="error">*</span></label><br>
		    			<textarea type="text" name="head_bar" id="head_bar" onkeyup="textCounter(this,'counter2',110);" class="form-control" Required></textarea>
		    			<input disabled  maxlength="4" size="4" value="110" id="counter2" class="letter_count">
		    		</div>
		    	</div>

		    	<div class="top_bar">
		    		<div class="form-group">
		    			<label>Event Date <span class="error">*</span></label><br>
		    			<input type="date" name="head_bar" id="head_bar" onkeyup="textCounter(this,'counter3',50);" class="form-control" Required>
		    			<input disabled  maxlength="4" size="4" value="50" id="counter3" class="letter_count">
		    		</div>
		    	</div>

		    	<div class="top_bar">
		    		<div class="form-group">
		    			<label>Event Venue <span class="error">*</span></label><br>
		    			<textarea type="text" name="head_bar" id="head_bar" onkeyup="textCounter(this,'counter4',100);" class="form-control" Required></textarea>
		    			<input disabled  maxlength="4" size="4" value="100" id="counter4" class="letter_count">
		    		</div>
		    	</div>



	    	</form>

		</section>



		<section id="about_Section" style="display:none;">

			<form>

				<div class="button_area">
		    			<button type="button" class="btn save_button">Save</button><button type="button" class="btn discard_button">Discard</button>
		    	</div>

		    	<div class="top_bar">
		    		<div class="form-group">
		    			<label>Title <span class="error">*</span></label><br>
		    			<textarea type="text" name="head_bar" id="head_bar" onkeyup="textCounter(this,'counter5',150);" class="form-control" Required></textarea>
		    			<input disabled  maxlength="4" size="4" value="150" id="counter5" class="letter_count">
		    		</div>
		    	</div>

		    	<div class="top_bar">
		    		<div class="form-group">
		    			<label>Description <span class="error">*</span></label><br>
		    			<textarea type="text" name="head_bar" id="head_bar" class="form-control" Required></textarea>
		    		</div>
		    	</div>

		    </form>

		</section>



		<section id="speakers_section" class="container" style="display:none;">

			<div class="no_speaker">
				<img src="<?php echo base_url('assets/images/employee.png'); ?>" alt="">
				<p> No Keynote Speaker Available</p>
				<div class="add_data">
					<h6><i class="fa fa-plus circle_plus" data-toggle="modal" data-target="#speaker_add"></i> Click Here To Add Keynote Speaker</h6>
				</div>
			</div>


			<div class="speaker_head">
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
						<h4>KEYNOTE SPEAKER</h4>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
						<i class="fa fa-plus add_speaker"></i><span> Add More</span>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
						<i class="fa fa-trash del_speaker"></i><span> Delete All</span>
					</div>
				</div>
			</div>


			<div class="speaker_data">
				<div class="speaker_header row">
					<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
						<h4>Speaker1</h4>
					</div>
					<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
						<p>Modify</p>
					</div>
					<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
						<p>Delete</p>
					</div>
				</div> 

				<div class="speaker_details">
					<h6 class="speakers_name">DR.-ING. STEPHAN NEUGEBAUER</h6>
					<h5 class="speakers_designation">BMW, Chairman of European Road Transport Research Advisory Council(ERTRAC)</h5>
					<div class="row speakers_description">
						<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
							<p class="describe_speaker">Dr. Allen L. Robinson is the Raymond J. Lane Distinguished Professor and Head of the Department of Mechanical Engineering at Carnegie Mellon University.  His research examines the impact of emissions from energy systems on air quality and climate.  Focus areas include the atmospheric transformation of particulate matter emissions from motor vehicles and other combustion sources; methane emissions from the natural gas system; and high-spatial-resolution estimates of human exposure to support health analyses.  Dr. Robinson has authored more than 170 papers in peer-reviewed literature and given numerous invited talks and lectures.  He currently serves as the director of the EPA-supported Center for Air, Climate, and Energy Solutions (CACES), a multi-institution research center focused on creating a cleaner, healthier environment.  He is a member of the Health Effects Institute’s Research Committee.  Dr. Robinson is a fellow in American Association of Aerosol Research and received the American Geophysical Union ASCENT Award.  He holds a B.S. in Civil Engineering from Stanford University, and a Ph.D. in Mechanical Engineering from the University of California at Berkeley.</p>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
							<div class="speaker_image">
								<img src="<?php echo base_url('assets/images/speaker2.jpg'); ?>">
							</div>
						</div>
					</div>
				</div>
			</div>


				<div class="speaker_data">
					<div class="speaker_header row">
						<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
							<h4>Speaker2</h4>
						</div>
						<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
							<p>Modify</p>
						</div>
						<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
							<p>Delete</p>
						</div>
					</div> 

					<div class="speaker_details">
						<h6 class="speakers_name">DR.-ING. STEPHAN NEUGEBAUER</h6>
						<h5 class="speakers_designation">BMW, Chairman of European Road Transport Research Advisory Council(ERTRAC)</h5>
						<div class="row speakers_description">
							<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
								<p class="describe_speaker">Dr. Allen L. Robinson is the Raymond J. Lane Distinguished Professor and Head of the Department of Mechanical Engineering at Carnegie Mellon University.  His research examines the impact of emissions from energy systems on air quality and climate.  Focus areas include the atmospheric transformation of particulate matter emissions from motor vehicles and other combustion sources; methane emissions from the natural gas system; and high-spatial-resolution estimates of human exposure to support health analyses.  Dr. Robinson has authored more than 170 papers in peer-reviewed literature and given numerous invited talks and lectures.  He currently serves as the director of the EPA-supported Center for Air, Climate, and Energy Solutions (CACES), a multi-institution research center focused on creating a cleaner, healthier environment.  He is a member of the Health Effects Institute’s Research Committee.  Dr. Robinson is a fellow in American Association of Aerosol Research and received the American Geophysical Union ASCENT Award.  He holds a B.S. in Civil Engineering from Stanford University, and a Ph.D. in Mechanical Engineering from the University of California at Berkeley.</p>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
								<div class="speaker_image">
									<img src="<?php echo base_url('assets/images/speaker2.jpg'); ?>">
								</div>
							</div>
						</div>
					</div>
				</div>

		</section>



		<section id="schedule_section" class="container-fluid" style="display:none;">


			<div class="event_head">
				<div class="row">
					<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
						<h4>EVENT BANNER</h4>
					</div>
					<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
						<p>Save</p>
					</div>
					<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
						<p>Discard</p>
					</div>
				</div>
			</div>


			<div class="event_input">
				<form>
					<div class="row">
						<div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
							<img src="<?php echo base_url('assets/images/Image_45.png'); ?>" alt="">
						</div>
						<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
							<div class="form-group">
								<label>Header Line</label><br>
								<input type="text" name="head_line1" class="form-control">
							</div>
						</div>
						<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
							<div class="form-group">
								<label>Subheader Line</label><br>
								<input type="text" name="subhead_list1" class="form-control">
							</div>
						</div>
						<div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
						</div>
								

						<div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
							<img src="<?php echo base_url('assets/images/Image_44.png'); ?>" alt="">
						</div>
						<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
							<div class="form-group">
								<label>Header Line</label><br>
								<input type="text" name="head_line2" class="form-control">
							</div>
						</div>
						<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
							<div class="form-group">
								<label>Subheader Line</label><br>
								<input type="text" name="subhead_list2" class="form-control">
							</div>
						</div>
						<div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
						</div>
								

						<div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
							<img src="<?php echo base_url('assets/images/Image_42.png'); ?>" alt="">
						</div>
						<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
							<div class="form-group">
								<label>Header Line</label><br>
								<input type="text" name="head_line3" class="form-control">
							</div>
						</div>
						<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
							<div class="form-group">
								<label>Subheader Line</label><br>
								<input type="text" name="subhead_list3" class="form-control">
							</div>
						</div>
						<div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
						</div>


						<div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
							<img src="<?php echo base_url('assets/images/Image_43.png'); ?>" alt="">
						</div>
						<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
							<div class="form-group">
								<label>Header Line</label><br>
								<input type="text" name="head_line4" class="form-control">
							</div>
						</div>
						<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
							<div class="form-group">
								<label>Subheader Line</label><br>
								<input type="text" name="subhead_list4" class="form-control">
							</div>
						</div>
						<div class="col-lg-1 col-md-1 col-sm-12 col-xs-12">
						</div>
					</div>
				</form>
			</div>


			<div class="event_midhead">
				<div class="row">
					<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
						<h4>EVENT SCHEDULE</h4>
					</div>
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
						<p data-toggle="modal" data-target="#event_add">Add More</p>
					</div>
				</div>
			</div>


			<div class="no_speaker">
				<img src="<?php echo base_url('assets/images/calendar.png'); ?>" alt="">
				<p> No Schedule Available</p>
				<div class="add_data">
					<h6><i class="fa fa-plus circle_plus" data-toggle="modal" data-target="#event add"></i> Click Here To Add Schedule</h6>
				</div>
			</div>


			<div class="event_data">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
						<p class="schedule_count">1.</p>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
						<p class="date_n_time">24 June 2019 08:30 AM</p>
						<h6 class="event_name">Registration Started</h6>
					</div>
					<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
						<p class="edit_options">Modify</p>
					</div>
					<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
						<p class="edit_options">Delete</p>
					</div> 
				</div>
			</div>


			<div class="event_data">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
						<p class="schedule_count">2.</p>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
						<p class="date_n_time">24 June 2019 10:00 AM</p>
						<h6 class="event_name">Opening Ceremony</h6>
						<h6 class="event_description">Lighting of the lamp & Ganesh Vandana Welcome Address by Mr. GP Rao</h6>
					</div>
					<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
						<p class="edit_options">Modify</p>
					</div>
					<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
						<p class="edit_options">Delete</p>
					</div>
				</div>
			</div>



			<div class="event_data">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
						<p class="schedule_count">3.</p>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
						<p class="date_n_time">24 June 2019 10:15 AM</p>
						<h6 class="event_name">Opening Key Note</h6>
						<h6 class="event_description">Mr. Murali Srinivasan</h6>
					</div>
					<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
						<p class="edit_options">Modify</p>
					</div>
					<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
						<p class="edit_options">Delete</p>
					</div>
				</div>
			</div>


		</section>


		
		<section id="gallery_Section" class="container-fluid" style="display:none;">

			<div class="gallery_head">
				<h4>GALLERY</h4>
			</div>


			<div class="gallery_box">
				<div class="add_image">
					<form action="#" class="dropzone">
                        <div class="fallback">
                            <input name="file" type="file" multiple="multiple">
                        </div>
                    </form>
				</div>
			</div>

		</section>



		<section id="promotors_section" style="display:none;"> 

			<div class="sponsors_head">
				<h4>SPONSORS</h4>
			</div>


			<div class="gallery_box">
				<div class="add_image">
					<form action="#" class="dropzone">
                        <div class="fallback">
                            <input name="file" type="file" multiple="multiple">
                        </div>
                    </form>
				</div>
			</div>


			<div class="promotors_head">
				<h4>PROMOTORS</h4>
			</div>


			<div class="gallery_box">
				<div class="add_image">
					<form action="#" class="dropzone">
                        <div class="fallback">
                            <input name="file" type="file" multiple="multiple">
                        </div>
                    </form>
				</div>
			</div>
		</section>



		<section id="others_section" class="container-fluid" style="display:none;">

			<div class="others_head">
				<h4>PROMOTIONAL BANNER</h4>
			</div>


			<div class="banner_area">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
								<img src="<?php echo base_url('assets/images/Image_40.png'); ?>" alt="banner_img" class="banner_img">
							</div>
							<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
								<div class="banner_specification">
			    		    		<h5>Banner Specification</h5>
			    		    		<h5 class="light_weight">Default - English (United-Status) -en-US</h5>
			    		    		<h5>1366wX740h</h5>
			    		    		<h5>JPG or PNG<span class="light_weight"> (no alpha)</span></h5>
			    		    	</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
						<div class="row">
							<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
								<img src="<?php echo base_url('assets/images/Image_10.png'); ?>" alt="banner2" class="banner_img">
							</div>
							<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
								<div class="banner_specification">
			    		    		<h5>Banner Specification</h5>
			    		    		<h5 class="light_weight">Default - English (United-Status) -en-US</h5>
			    		    		<h5>1366wX740h</h5>
			    		    		<h5>JPG or PNG<span class="light_weight"> (no alpha)</span></h5>
			    		    	</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</section>


	</div>

<!-- Event Add Modal Starts -->
	<div class="modal fade" id="event_add" role="dialog">
	    <div class="modal-dialog">
	      <div class="modal-content">
	      	<form>
		        <div class="modal-header">
		        	<h4>Add Event</h4>
		        	<button type="button" class="btn btn-default modalclose" data-dismiss="modal"><i class="fa fa-close mspeakerclose"></i>Close</button>
		        </div>
		        <div class="modal-body">
		        	<div class="row">
		        		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		        			<div class="form-group">
		        				<label> Event Date</label><br>
		        				<input type="date" name="event_date" id="event_date">
		        			</div>
		        		</div>
		        		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
		        			<div class="form-group">
		        				<label>Event Time</label><br>
		        				<input type="time" name="event_time" id="event_time">
		        			</div>
		        		</div>
		        		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		        			<div class="form-group">
		        				<label>Event Title</label><br>
		        				<input type="text" name="event_title" id="event_title">
		        			</div>
		        		</div>
		        		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		        			<div class="form-group">
		        				<label>Event Description</label>
		        				<textarea id="event_descri" name="event_descri"></textarea>
		        			</div>
		        		</div>
		        	</div>
		        </div>
		        <div class="modal-footer">
		          <button type="button" class="btn btn-default save_keynote">Save</button><button type="button" class="btn btn-primary continue_keynote">Save & Continue</button>
		        </div>
	    	</form>
	      </div>
	      
	    </div>
  	</div>
  	<!-- Event Add Modal Ends -->


  	<!-- Speaker Add Modal Starts -->
  	<div class="modal fade" id="speaker_add" role="dialog">
	    <div class="modal-dialog">
	      <div class="modal-content">
	      	<form>
		        <div class="modal-header">
		        	<h4>Add Keynote Speaker</h4>
		        	<button type="button" class="btn btn-default modalclose" data-dismiss="modal"><i class="fa fa-close mspeakerclose"></i>Close</button>
		        </div>
		        <div class="modal-body">
		        	<div class="row">
		        		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
		        			<div class="form-group">
		        				<label>Speaker Name</label><br>
		        				<input type="text" name="speaker_name" class="form-control">
		        			</div>
		        			<div class="form-group">
		        				<label>Designation</label><br>
		        				<input type="text" name="speaker_designation" class="form-control">
		        			</div>
		        		</div>
		        		<div class="col-lg-4 col-md-4 col-sm-3 col-xs-3">
		        			<label>Photo</label>
							<div class="image_speaker">
								<i class="fa fa-plus keynote_icon"></i>
								<p>Add or Drop Speakers Images here</p>
		        			</div>
		        		</div>
		        		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		        			<div class="form-group">
		        				<label>About Speaker</label><br>
		        				<textarea type="text" name="about_speaker" class="form-control"></textarea>
		        			</div>
		        		</div>
		        	</div>
		        </div>
		        <div class="modal-footer">
		          <button type="button" class="btn btn-default save_keynote">Save</button><button type="button" class="btn btn-primary continue_keynote">Save & Continue</button>
		        </div>
	    	</form>
	      </div>
	      
	    </div>
  	</div>
    <!-- Speaker Add Modal Ends -->



	<script>

		// Start Counter Script 
		function textCounter(field,field2,maxlimit)
		{
		 var countfield = document.getElementById(field2);
		 if ( field.value.length > maxlimit ) {
		  field.value = field.value.substring( 0, maxlimit );
		  return false;
		 } else {
		  countfield.value = maxlimit - field.value.length;
		 }
		}
		// End Editor Script

        

        // Start Editor Script
        CKEDITOR.replace( 'event_descri' );
        // End Editor Script


        function select_tophead(id) {
        	$('li').removeClass('active_link');
			$('#show_head').addClass('active_link');
        	$('#banner_Section').show();
        	$('#about_Section').hide();
        	$('#speakers_section').hide();
        	$('#schedule_section').hide();
        	$('#gallery_Section').hide();
        	$('#promotors_section').hide();
        	$('#others_section').hide();
        }
         function select_about(id) {
         	$('li').removeClass('active_link');

        	$('#show_About').addClass('active_link');
        	$('#banner_Section').hide();
        	$('#about_Section').show();
        	$('#speakers_section').hide();
        	$('#schedule_section').hide();
        	$('#gallery_Section').hide();
        	$('#promotors_section').hide();
        	$('#others_section').hide();
        		
        }

 		function select_keynote(id) {
 	  		$('li').removeClass('active_link');

        	$('#show_keynote').addClass('active_link');
        	$('#banner_Section').hide();
        	$('#about_Section').hide();
        	$('#speakers_section').show();
        	$('#schedule_section').hide();
        	$('#gallery_Section').hide();
        	$('#promotors_section').hide();
        	$('#others_section').hide();
        }

 		function select_schedule(id) {
 	  		$('li').removeClass('active_link');

        	$('#show_schedule').addClass('active_link');
        	$('#banner_Section').hide();
        	$('#about_Section').hide();
        	$('#speakers_section').hide();
        	$('#schedule_section').show();
        	$('#gallery_Section').hide();
        	$('#promotors_section').hide();
        	$('#others_section').hide();
        }

 		function select_gallery(id) {
 	  		$('li').removeClass('active_link');

        	$('#show_gallery').addClass('active_link');
        	$('#banner_Section').hide();
        	$('#about_Section').hide();
        	$('#speakers_section').hide();
        	$('#schedule_section').hide();
        	$('#gallery_Section').show();
        	$('#promotors_section').hide();
        	$('#others_section').hide();
        }

 		function select_sponsors(id) {
 	  		$('li').removeClass('active_link');

        	$('#show_sponsors').addClass('active_link');
        	$('#banner_Section').hide();
        	$('#about_Section').hide();
        	$('#speakers_section').hide();
        	$('#schedule_section').hide();
        	$('#gallery_Section').hide();
        	$('#promotors_section').show();
        	$('#others_section').hide();
        }

 		function select_others(id) {
 	  		$('li').removeClass('active_link');

        	$('#show_others').addClass('active_link');
        	$('#banner_Section').hide();
        	$('#about_Section').hide();
        	$('#speakers_section').hide();
        	$('#schedule_section').hide();
        	$('#gallery_Section').hide();
        	$('#promotors_section').hide();
        	$('#others_section').show();
        }



	</script>

</body>
</html>