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
      <li><a class="active" href="#"><i class="fa fa-group"></i> <span class="margin"> Registered Users</span></a></li>
      <li><a href="#" style="margin-left: 12px;"><i class="fa fa-ellipsis-v"></i> <span class="margin"> Package Management</span></a></li>
      <li><a href="#"><i class="fa fa-sliders"></i> <span class="margin"> Settings</span></a></li>
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
    
    <section class="page_heading container-fluid">
      <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
          <p><i class="fa fa-group"></i> Event/Members</p>
        </div>
        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
          <p class="event_member"><span class="sideborder">Members</span>Visitors</p>
        </div>
      </div>
    </section>

     <section class="search_areas container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
          <i class="fa fa-file-o"></i>
          <i class="fa fa-trash" aria-hidden="true"></i>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
          <div class="form_right">
            <form>
              <div class="form-group">
                <input type="date" name="regitration_date" id="registration_date" placeholder="12/05/2019">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

        <section class="package_data">
        <div class="col-lg-12" style="padding-top: 15px;">
          <table id="table_id" class="table table-striped table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0;  width: 100%;">
              <thead>
                <tr>
                  <th><input type="checkbox" name="select" value="select"></th>
                  <th>VIS ID</th>
                  <th>MEM ID</th>
                  <th>Name</th>
                  <th>Company</th>
                  <th>Category</th>
                  <th>Industry</th>
                  <th>Mobile</th>
                  <th>Email</th>
                  <th>Ticket</th>
                  <th>Event Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              <tr>
                <td><input type="checkbox" name="select" value="select"></td>
                <td>V201964</td>
                <td>M201964</td>
                <td>Tara Vargese</td>
                <td>Fabco India LLP</td>
                <td>Challenger</td>
                <td>Textile</td>
                <td>9876543210</td>
                <td>tara@fabcoindia.com</td>
                <td>GOLD-2</td>
                <td>14-May-19</td>
                <td><a href="#"><i class="fa fa-pencil-square-o"></i></a><a href="#"><i class="fa fa-eye"></i></a></td>
              </tr>
              <tr>
              <td><input type="checkbox" name="select" value="select"></td>
                <td>V201964</td>
                <td>M201964</td>
                <td>Tara Vargese</td>
                <td>Fabco India LLP</td>
                <td>Challenger</td>
                <td>Textile</td>
                <td>9876543210</td>
                <td>tara@fabcoindia.com</td>
                <td>GOLD-2</td>
                <td>14-May-19</td>
                <td><a href="#"><i class="fa fa-pencil-square-o"></i></a><a href="#"><i class="fa fa-eye"></i></a></td>
              </tr>
              <tr>
                <td><input type="checkbox" name="select" value="select"></td>
                <td>V201964</td>
                <td>M201964</td>
                <td>Tara Vargese</td>
                <td>Fabco India LLP</td>
                <td>Challenger</td>
                <td>Textile</td>
                <td>9876543210</td>
                <td>tara@fabcoindia.com</td>
                <td>GOLD-2</td>
                <td>14-May-19</td>
                <td><a href="#"><i class="fa fa-pencil-square-o"></i></a><a href="#"><i class="fa fa-eye"></i></a></td>
              </tr>
               <tr>
                <td><input type="checkbox" name="select" value="select"></td>
                <td>V201964</td>
                <td>M201964</td>
                <td>Tara Vargese</td>
                <td>Fabco India LLP</td>
                <td>Challenger</td>
                <td>Textile</td>
                <td>9876543210</td>
                <td>tara@fabcoindia.com</td>
                <td>GOLD-2</td>
                <td>14-May-19</td>
                <td><a href="#"><i class="fa fa-pencil-square-o"></i></a><a href="#"><i class="fa fa-eye"></i></a></td>
              </tr>
               <tr>
                <td><input type="checkbox" name="select" value="select"></td>
                <td>V201964</td>
                <td>M201964</td>
                <td>Tara Vargese</td>
                <td>Fabco India LLP</td>
                <td>Challenger</td>
                <td>Textile</td>
                <td>9876543210</td>
                <td>tara@fabcoindia.com</td>
                <td>GOLD-2</td>
                <td>14-May-19</td>
                <td><a href="#"><i class="fa fa-pencil-square-o"></i></a><a href="#"><i class="fa fa-eye"></i></a></td>
              </tr>
               <tr>
                <td><input type="checkbox" name="select" value="select"></td>
                <td>V201964</td>
                <td>M201964</td>
                <td>Tara Vargese</td>
                <td>Fabco India LLP</td>
                <td>Challenger</td>
                <td>Textile</td>
                <td>9876543210</td>
                <td>tara@fabcoindia.com</td>
                <td>GOLD-2</td>
                <td>14-May-19</td>
                <td><a href="#"><i class="fa fa-pencil-square-o"></i></a><a href="#"><i class="fa fa-eye"></i></a></td>
              </tr>
               <tr>
                <td><input type="checkbox" name="select" value="select"></td>
                <td>V201964</td>
                <td>M201964</td>
                <td>Tara Vargese</td>
                <td>Fabco India LLP</td>
                <td>Challenger</td>
                <td>Textile</td>
                <td>9876543210</td>
                <td>tara@fabcoindia.com</td>
                <td>GOLD-2</td>
                <td>14-May-19</td>
                <td><a href="#"><i class="fa fa-pencil-square-o"></i></a><a href="#"><i class="fa fa-eye"></i></a></td>
              </tr>
            </tbody>
          </table>
        </div>
      </section>