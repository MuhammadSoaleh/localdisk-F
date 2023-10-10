<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from lawfirm-admin-template.multipurposethemes.com/main/widgets_chart.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Jul 2023 04:24:51 GMT -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://lawfirm-admin-template.multipurposethemes.com/images/favicon.ico">

    <title>Law Firm - Dashboard  Chart Widgets</title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="css/vendors_css.css">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/skin_color.css">
	
</head>

<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
	
<div class="wrapper">
	<div id="loader"></div>

  <header class="main-header">
	<div class="d-flex align-items-center logo-box justify-content-start">	
		<!-- Logo -->
		<a href="index.html" class="logo">
		  <!-- logo-->
		  <div class="logo-mini w-50">
			  <span class="light-logo"><img src="../images/logo-letter.png" alt="logo"></span>
			  <span class="dark-logo"><img src="../images/logo-letter.png" alt="logo"></span>
		  </div>
		  <div class="logo-lg">
			  <span class="light-logo"><img src="../images/logo-dark-text.png" alt="logo"></span>
			  <span class="dark-logo"><img src="../images/logo-light-text.png" alt="logo"></span>
		  </div>
		</a>	
	</div>  
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
	  <div class="app-menu">
		<ul class="header-megamenu nav">
			<li class="btn-group nav-item">
				<a href="#" class="waves-effect waves-light nav-link push-btn btn-primary-light" data-toggle="push-menu" role="button">
					<i class="icon-Menu"><span class="path1"></span><span class="path2"></span></i>
			    </a>
			</li>
			<li class="btn-group d-lg-inline-flex d-none">
				<div class="app-menu">
					<div class="search-bx mx-5">
						<form>
							<div class="input-group">
							  <input type="search" class="form-control" placeholder="Search">
							  <div class="input-group-append">
								<button class="btn" type="submit" id="button-addon3"><i class="icon-Search"><span class="path1"></span><span class="path2"></span></i></button>
							  </div>
							</div>
						</form>
					</div>
				</div>
			</li>
		</ul> 
	  </div>
		
      <div class="navbar-custom-menu r-side">
        <ul class="nav navbar-nav">			
			<li class="btn-group nav-item d-lg-inline-flex d-none">
				<a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link full-screen btn-primary-light" title="Full Screen">
					<i class="icon-Position"></i>
			    </a>
			</li>
		  <!-- Notifications -->
		  <li class="dropdown notifications-menu">
			<a href="#" class="waves-effect waves-light dropdown-toggle btn-primary-light" data-bs-toggle="dropdown" title="Notifications">
			  <i class="icon-Notification"><span class="path1"></span><span class="path2"></span></i>
			</a>
			<ul class="dropdown-menu animated bounceIn">
			  <li class="header">
				<div class="p-20">
					<div class="flexbox">
						<div>
							<h4 class="mb-0 mt-0">Notifications</h4>
						</div>
						<div>
							<a href="#" class="text-danger">Clear All</a>
						</div>
					</div>
				</div>
			  </li>
			  <li>
				<!-- inner menu: contains the actual data -->
				<ul class="menu sm-scrol">
				  <li>
					<a href="#">
					  <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit blandit.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et nisi
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero dictum fermentum.
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-primary"></i> Nunc fringilla lorem 
					</a>
				  </li>
				  <li>
					<a href="#">
					  <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
					</a>
				  </li>
				</ul>
			  </li>
			  <li class="footer">
				  <a href="#">View all</a>
			  </li>
			</ul>
		  </li>			  
          <!-- Control Sidebar Toggle Button -->
          <li class="btn-group nav-item">
              <a href="#" data-toggle="control-sidebar" title="Setting" class="waves-effect full-screen waves-light btn-primary-light">
			  	<i class="icon-Settings1"><span class="path1"></span><span class="path2"></span></i>
			  </a>
          </li>
			
        </ul>
      </div>
    </nav>
  </header>
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar position-relative">
		<div class="user-profile bb-1 px-20 py-10">
			<div class="d-block text-center">			
				<div class="image">
				  <img src="../images/avatar/avatar-13.png" class="avatar avatar-xxl bg-primary-light rounded100" alt="User Image">
				</div>
				<div class="info pt-15">
					<a class="px-20 fs-18 fw-500" href="#">Johen Doe</a>
				</div>
			</div>
			<ul class="list-inline profile-setting mt-20 mb-0 d-flex justify-content-center gap-3">
				<li><a href="mailbox.html" data-bs-toggle="tooltip" title="Email"><i class="icon-Incoming-mail fs-24"><span class="path1"></span><span class="path2"></span></i></a></li>
				<li><a href="contact_app_chat.html" data-bs-toggle="tooltip" title="Chat"><i class="icon-Group-chat fs-24"><span class="path1"></span><span class="path2"></span></i></a></li>
				<li><a href="auth_login.html" data-bs-toggle="tooltip" title="Logout"><i class="icon-Lock-overturning fs-24"><span class="path1"></span><span class="path2"></span></i></a></li>
			</ul>
	    </div>
	  	<div class="multinav">
		  <div class="multinav-scroll" style="height: 100%;">	
			  <!-- sidebar menu-->
			  <ul class="sidebar-menu" data-widget="tree">				
				<li>
				  <a href="index.html">
					<i class="icon-Layout-4-blocks"><span class="path1"></span><span class="path2"></span></i>
					<span>Dashboard</span>
				  </a>
				</li>
				<li>
				  <a href="appointments.html">
					<i class="icon-Barcode-read"><span class="path1"></span><span class="path2"></span></i>
					<span>Appointments</span>
				  </a>
				</li>			
				<li class="treeview">
				  <a href="#">
					<i class="icon-User"><span class="path1"></span><span class="path2"></span></i>
					<span>Cases</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="cases.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Cases</a></li>
					<li><a href="case_details.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Case Details</a></li>
				  </ul>
				</li>				
				<li class="treeview">
				  <a href="#">
					<i class="icon-Hummer"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
					<span>Attorney</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="attorney_list.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Attorneys</a></li>
					<li><a href="attorney_details.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Attorney Details</a></li>
				  </ul>
				</li>
				<li class="header">Components</li>
				<li class="treeview">
				  <a href="#">
					<i class="icon-Library"><span class="path1"></span><span class="path2"></span></i>
					<span>Features</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">											
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Card
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="box_cards.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>User Card</a></li>
							<li><a href="box_advanced.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Advanced Card</a></li>
							<li><a href="box_basic.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Basic Card</a></li>
							<li><a href="box_color.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Card Color</a></li>
							<li><a href="box_group.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Card Group</a></li>
						</ul>
					</li>												
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>BS UI
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="ui_grid.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Grid System</a></li>
							<li><a href="ui_badges.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Badges</a></li>
							<li><a href="ui_border_utilities.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Border</a></li>
							<li><a href="ui_buttons.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Buttons</a></li>	
							<li><a href="ui_color_utilities.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Color</a></li>
							<li><a href="ui_dropdown.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dropdown</a></li>
							<li><a href="ui_dropdown_grid.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dropdown Grid</a></li>
							<li><a href="ui_progress_bars.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Progress Bars</a></li>
						</ul>
					</li>										
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Icons
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="icons_fontawesome.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Font Awesome</a></li>
							<li><a href="icons_glyphicons.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Glyphicons</a></li>
							<li><a href="icons_material.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Material Icons</a></li>	
							<li><a href="icons_themify.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Themify Icons</a></li>
							<li><a href="icons_simpleline.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Simple Line Icons</a></li>
							<li><a href="icons_cryptocoins.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Cryptocoins Icons</a></li>
							<li><a href="icons_flag.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Flag Icons</a></li>
							<li><a href="icons_weather.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Weather Icons</a></li>
						</ul>
					</li>									
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Custom UI
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="ui_ribbons.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Ribbons</a></li>
							<li><a href="ui_sliders.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Sliders</a></li>
							<li><a href="ui_typography.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Typography</a></li>
							<li><a href="ui_tab.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Tabs</a></li>
							<li><a href="ui_timeline.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Timeline</a></li>
							<li><a href="ui_timeline_horizontal.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Horizontal Timeline</a></li>
						</ul>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Components
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="component_bootstrap_switch.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Bootstrap Switch</a></li>
							<li><a href="component_date_paginator.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Date Paginator</a></li>
							<li><a href="component_media_advanced.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Advanced Medias</a></li>
							<li><a href="component_rangeslider.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Range Slider</a></li>
							<li><a href="component_rating.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Ratings</a></li>
							<li><a href="component_animations.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Animations</a></li>
							<li><a href="extension_fullscreen.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Fullscreen</a></li>
							<li><a href="extension_pace.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Pace</a></li>
							<li><a href="component_nestable.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Nestable</a></li>
							<li><a href="component_portlet_draggable.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Draggable Portlets</a></li>	
						</ul>
					</li>  
				  </ul>
				</li>			
				<li class="treeview">
				  <a href="#">
					<i class="icon-Box2"><span class="path1"></span><span class="path2"></span></i>
					<span>Forms, Tables & Charts</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>					
				  <ul class="treeview-menu">					
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Forms
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="forms_advanced.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Form Elements</a></li>
							<li><a href="forms_general.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Form Layout</a></li>
							<li><a href="forms_wizard.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Form Wizard</a></li>	
							<li><a href="forms_validation.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Form Validation</a></li>
							<li><a href="forms_mask.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Formatter</a></li>
							<li><a href="forms_xeditable.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Xeditable Editor</a></li>
							<li><a href="forms_dropzone.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Dropzone</a></li>
							<li><a href="forms_code_editor.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Code Editor</a></li>
							<li><a href="forms_editors.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Editor</a></li>
							<li><a href="forms_editor_markdown.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Markdown</a></li>
						</ul>
					</li> 		
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Tables
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="tables_simple.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Simple tables</a></li>
							<li><a href="tables_data.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Data tables</a></li>
							<li><a href="tables_editable.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Editable Tables</a></li>
							<li><a href="tables_color.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Table Color</a></li>
						</ul>
					</li> 
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Charts
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="charts_chartjs.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>ChartJS</a></li>
							<li><a href="charts_flot.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Flot</a></li>
							<li><a href="charts_inline.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Inline charts</a></li>
							<li><a href="charts_morris.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Morris</a></li>
							<li><a href="charts_peity.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Peity</a></li>
							<li><a href="charts_chartist.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Chartist</a></li>
							<li><a href="charts_c3_axis.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Axis Chart</a></li>
							<li><a href="charts_c3_bar.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Bar Chart</a></li>
							<li><a href="charts_c3_data.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Data Chart</a></li>
							<li><a href="charts_c3_line.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Line Chart</a></li>
							<li><a href="charts_echarts_basic.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Basic Charts</a></li>
							<li><a href="charts_echarts_bar.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Bar Chart</a></li>
							<li><a href="charts_echarts_pie_doughnut.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Pie & Doughnut Chart</a></li>
						</ul>
					</li>
				  </ul>
				</li>				 
				<li class="treeview">
				  <a href="#">
					<i class="icon-Globe"><span class="path1"></span><span class="path2"></span></i>
					<span>Apps & Widgets</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">					
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Apps
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="extra_calendar.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Calendar</a></li>
							<li><a href="contact_app.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Contact List</a></li>
							<li><a href="contact_app_chat.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Chat</a></li>
							<li><a href="extra_taskboard.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Todo</a></li>
							<li><a href="mailbox.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Mailbox</a></li>
						</ul>
					</li>										
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Widgets
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li class="treeview">
								<a href="#">
									<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Custom
									<span class="pull-right-container">
										<i class="fa fa-angle-right pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="widgets_blog.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Blog</a></li>
									<li><a href="widgets_chart.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Chart</a></li>
									<li><a href="widgets_list.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>List</a></li>
									<li><a href="widgets_social.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Social</a></li>
									<li><a href="widgets_statistic.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Statistic</a></li>
									<li><a href="widgets_weather.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Weather</a></li>
									<li><a href="widgets.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Widgets</a></li>
									<li><a href="email_index.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Emails</a></li>	
								</ul>
							</li>											  	
							<li class="treeview">
								<a href="#">
									<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Maps
									<span class="pull-right-container">
										<i class="fa fa-angle-right pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="map_google.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Google Map</a></li>
									<li><a href="map_vector.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Vector Map</a></li>
								</ul>
							</li>					  	
							<li class="treeview">
								<a href="#">
									<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Modals
									<span class="pull-right-container">
										<i class="fa fa-angle-right pull-right"></i>
									</span>
								</a>
								<ul class="treeview-menu">
									<li><a href="component_modals.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Modals</a></li>
									<li><a href="component_sweatalert.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Sweet Alert</a></li>
									<li><a href="component_notification.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Toastr</a></li>
								</ul>
							</li>
						</ul>
					</li>					
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Ecommerce
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="ecommerce_products.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Products</a></li>
							<li><a href="ecommerce_cart.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Products Cart</a></li>
							<li><a href="ecommerce_products_edit.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Products Edit</a></li>
							<li><a href="ecommerce_details.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Product Details</a></li>
							<li><a href="ecommerce_orders.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Product Orders</a></li>
							<li><a href="ecommerce_checkout.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Products Checkout</a></li>
						</ul>
					</li>
					<li class="treeview">
						<a href="#">
							<i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Sample Pages
							<span class="pull-right-container">
								<i class="fa fa-angle-right pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="invoice.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Invoice</a></li>
							<li><a href="invoicelist.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Invoice List</a></li>	
							<li><a href="extra_app_ticket.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Support Ticket</a></li>
							<li><a href="extra_profile.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>User Profile</a></li>
							<li><a href="contact_userlist_grid.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Userlist Grid</a></li>
							<li><a href="contact_userlist.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Userlist</a></li>	
							<li><a href="sample_faq.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>FAQs</a></li>
							<li><a href="sample_blank.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Blank</a></li>
							<li><a href="sample_coming_soon.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Coming Soon</a></li>
							<li><a href="sample_custom_scroll.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Custom Scrolls</a></li>
							<li><a href="sample_gallery.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Gallery</a></li>
							<li><a href="sample_lightbox.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Lightbox Popup</a></li>
							<li><a href="sample_pricing.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Pricing</a></li>
						</ul>
					</li>
				  </ul>
				</li>	 
				<li class="treeview">
				  <a href="#">
					<i class="icon-Lock-overturning"><span class="path1"></span><span class="path2"></span></i>
					<span>Authentication</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="auth_login.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Login</a></li>
					<li><a href="auth_register.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Register</a></li>
					<li><a href="auth_lockscreen.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Lockscreen</a></li>
					<li><a href="auth_user_pass.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Recover password</a></li>	
				  </ul>
				</li>
				<li class="treeview">
				  <a href="#">
					<i class="icon-Warning-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>
					<span>Miscellaneous</span>
					<span class="pull-right-container">
					  <i class="fa fa-angle-right pull-right"></i>
					</span>
				  </a>
				  <ul class="treeview-menu">
					<li><a href="error_404.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Error 404</a></li>
					<li><a href="error_500.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Error 500</a></li>
					<li><a href="error_maintenance.html"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Maintenance</a></li>	
				  </ul>
				</li>	 	     
			  </ul>
			  
			  <div class="sidebar-widgets">
				  <div class="mx-25 mb-30 pb-20 side-bx bg-primary-light rounded20">
					<div class="text-center">
						<img src="https://lawfirm-admin-template.multipurposethemes.com/images/svg-icon/color-svg/custom-17.svg" class="sideimg p-5" alt="">
						<h4 class="title-bx text-primary">Make an Appointments</h4>
						<a href="#" class="py-10 fs-14 mb-0 text-primary">
							Best Law Services here <i class="mdi mdi-arrow-right"></i>
						</a>
					</div>
				  </div>
				<div class="copyright text-center m-25">
					<p><strong class="d-block">Law Firm Dashboard</strong> © <script>document.write(new Date().getFullYear())</script> All Rights Reserved</p>
				</div>
			  </div>
		  </div>
		</div>
    </section>
  </aside>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="me-auto">
					<h4 class="page-title">Chart widgets</h4>
					<div class="d-inline-block align-items-center">
						<nav>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
								<li class="breadcrumb-item" aria-current="page">Widgets</li>
								<li class="breadcrumb-item active" aria-current="page">Chart widgets</li>
							</ol>
						</nav>
					</div>
				</div>
				
			</div>
		</div>	  

		<!-- Main content -->
		<section class="content">

			<div class="row">
				
				<div class="col-xl-6">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title">Orders Overview</h4>
							<div class="box-controls pull-right">
								<ul class="nav nav-pills nav-pills-sm" role="tablist">
									<li class="nav-item">
										<a class="nav-link py-2 px-4 b-0" data-bs-toggle="tab" href="#">
											<span class="nav-text base-font">Month</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link py-2 px-4 b-0" data-bs-toggle="tab" href="#">
											<span class="nav-text base-font">Week</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link py-2 px-4 b-0 active" data-bs-toggle="tab" href="#">
											<span class="nav-text base-font">Day</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="box-body">
							<div class="row">
								<div class="col-lg-8 col-12">
									<div id="charts_widget_1_chart"></div>
								</div>
								<div class="col-lg-4 col-12 d-flex flex-column">
									<div class="flex-grow-1 bg-danger p-30 flex-grow-1 bg-img"
										style="background-position: calc(100% + 0.5rem) bottom; background-size: auto 70%; background-image: url(https://lawfirm-admin-template.multipurposethemes.com/images/svg-icon/color-svg/custom-3.svg)">
										<h4 class="ont-weight-500">User Confidence</h4>
										<p class="my-10">
											Boost marketing & sales<br/>through product confidence.
										</p>
										<a href="#" class="btn btn-warning-light py-2 px-6">Learn</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-xl-6">
					<div class="box">
						<div class="box-header">
							<h4 class="box-title">Profit
							</h4>
							<div class="box-controls pull-right">
								<ul class="nav nav-pills nav-pills-sm" role="tablist">
									<li class="nav-item">
										<a class="nav-link py-2 px-4 b-0" data-bs-toggle="tab" href="#">
											<span class="nav-text base-font">Month</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link py-2 px-4 b-0" data-bs-toggle="tab" href="#">
											<span class="nav-text base-font">Week</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link py-2 px-4 b-0 active" data-bs-toggle="tab" href="#">
											<span class="nav-text base-font">Day</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="box-body">
							<div class="row">
								<div class="col-lg-4 col-12 d-flex flex-column">
									<div class="bg-warning-light p-30">
										<div class="d-flex align-items-center mb-30">
											<div class="me-15 bg-white h-40 w-40 l-h-50 rounded text-center">
												  <span class="icon-Library fs-18 text-success"><span class="path1"></span><span class="path2"></span></span>
											</div>
											<div class="d-flex flex-column fw-500">
												<a href="#" class="text-dark hover-primary fs-16">$800</a>
												<span class="text-muted">Duis faucibus lorem</span>
											</div>
										</div>
										<div class="d-flex align-items-center mb-30">
											<div class="me-15 bg-white h-40 w-40 l-h-50 rounded text-center">
												<span class="icon-Write fs-18 text-warning"><span class="path1"></span><span class="path2"></span></span>
											</div>
											<div class="d-flex flex-column fw-500">
												<a href="#" class="text-dark hover-danger fs-16">$400</a>
												<span class="text-muted">Sed quis augue </span>
											</div>
										</div>
										<div class="d-flex align-items-center mb-30">
											<div class="me-15 bg-white h-40 w-40 l-h-50 rounded text-center">
												<span class="icon-Group-chat fs-18 text-primary"><span class="path1"></span><span class="path2"></span></span>
											</div>
											<div class="d-flex flex-column fw-500">
												<a href="#" class="text-dark hover-success fs-16">$900</a>
												<span class="text-muted">Phasellus vitae</span>
											</div>
										</div>
										<div class="d-flex align-items-center">
											<div class="me-15 bg-white h-40 w-40 l-h-50 rounded text-center">
												<span class="icon-Attachment1 fs-18 text-info"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
											</div>
											<div class="d-flex flex-column fw-500">
												<a href="#" class="text-dark hover-info fs-16">$80</a>
												<span class="text-muted">Aliquam in magna</span>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-8 col-12">
									<div id="charts_widget_2_chart"></div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-xl-4">
					<div class="box">
						<div class="box-body">
							<div class="d-flex">
								<h3 class="fw-600 mb-0">1,125</h3>
								<span class="badge badge-info badge-pill align-self-center ms-auto">+55,6%</span>
							</div>
							<div>
								User online
								<div class="text-muted fs-16">845 avg</div>
							</div>
						</div>
						<div class="container-fluid">
							<div id="chart_bar_basic"></div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-xl-4">

					<!-- Basic line chart -->
					<div class="box">
						<div class="box-body">
							<div class="d-flex">
								<h3 class="fw-600 mb-0">3,952</h3>
							</div>

							<div>
								Orders Monthly
								<div class="text-muted fs-16">9,758 avg</div>
							</div>
						</div>

						<div id="line_chart_simple"></div>
					</div>
					<!-- /basic line chart -->

				</div>

				<div class="col-md-6 col-xl-4">

					<!-- Basic sparklines -->
					<div class="box">
						<div class="box-body">
							<div class="d-flex">
								<h3 class="fw-600 mb-0">85.4%</h3>
								<div class="list-icons ms-auto">
									<div class="list-icons-item dropdown">
										<a href="#" class="list-icons-item dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-cog"></i></a>
										<div class="dropdown-menu dropdown-menu-end">
											<a href="#" class="dropdown-item">Update data</a>
											<a href="#" class="dropdown-item">Detailed log</a>
											<a href="#" class="dropdown-item">Statistics</a>
											<a href="#" class="dropdown-item">Clear list</a>
										</div>
									</div>
								</div>
							</div>

							<div>
								Current server loading
								<div class="text-muted fs-16">24.6% avg</div>
							</div>
						</div>

						<div id="sparklines_basic"></div>
					</div>
					<!-- /basic sparklines -->

				</div>
			</div>

			<div class="row">

				<div class="col-md-6 col-xl-4">

					<!-- Bar chart in colored card -->
					<div class="box bg-info">
						<div class="box-body">
							<div class="d-flex">
								<h3 class="fw-600 mb-0">8,958</h3>
								<span class="badge badge-danger badge-pill align-self-center ms-auto">+22,6%</span>
							</div>

							<div>
								User online
								<div class="fs-16">854 avg</div>
							</div>
						</div>

						<div class="container-fluid">
							<div id="chart_bar_color"></div>
						</div>
					</div>
					<!-- /bar chart in colored card -->

				</div>

				<div class="col-md-6 col-xl-4">

					<!-- Line chart in colored card -->
					<div class="box bg-warning">
						<div class="box-body">
							<div class="d-flex">
								<h3 class="fw-600 mb-0">9,854</h3>
							</div>

							<div>
								Orders Monthly
								<div class="fs-16">6,854 avg</div>
							</div>
						</div>

						<div id="line_chart_color"></div>
					</div>
					<!-- /line chart in colored card -->

				</div>

				<div class="col-md-6 col-xl-4">

					<!-- Sparklines in colored card -->
					<div class="box bg-primary">
						<div class="box-body">
							<div class="d-flex">
								<h3 class="fw-600 mb-0">85.4%</h3>
								<div class="list-icons ms-auto">
									<div class="list-icons-item dropdown">
										<a href="#" class="list-icons-item dropdown-toggle text-white" data-bs-toggle="dropdown"><i class="fa fa-cog"></i></a>
										<div class="dropdown-menu dropdown-menu-end">
											<a href="#" class="dropdown-item">Update data</a>
											<a href="#" class="dropdown-item">Detailed log</a>
											<a href="#" class="dropdown-item">Statistics</a>
											<a href="#" class="dropdown-item">Clear list</a>
										</div>
									</div>
								</div>
							</div>

							<div>
								Current server loading
								<div class="fs-16">85.6% avg</div>
							</div>
						</div>

						<div id="sparklines_color"></div>
					</div>
					<!-- /sparklines in colored card -->

				</div>
			</div>
			<!-- /widgets with charts -->

		  <div class="row">  

			  <div class="col-md-6">
					<div class="box bg-success-light">
					  <div class="box-body">
						  <div class="media align-items-center p-0">
							  <h3 class="mx-0 mb-5 fw-500">Issue Reports</h3>
						  </div>
						  <div class="flexbox align-items-center mt-5">
							<div>
							  <h4 class="no-margin"><span>-27,497</span></h4>
							</div>
							<div class="text-end">
							  <h4 class="no-margin"><span>-1.35%</span></h4>
							</div>
						  </div>
					</div>
					<div class="box-footer p-0 no-border bg-transparent">
						<div class="chart"><canvas id="chartjs3" class="h-80"></canvas></div>
					</div>
				 </div>
			  </div>

			  <div class="col-md-6">
					<div class="box bg-primary-light">
					  <div class="box-body">
						  <div class="media align-items-center p-0">
							  <h3 class="mx-0 mb-5 fw-500">Orders</h3>
						  </div>
						  <div class="flexbox align-items-center mt-5">
							<div>
							  <h4 class="no-margin"><span>17,800</span></h4>
							</div>
							<div class="text-end">
							  <h4 class="no-margin"><span>+1.35%</span></h4>
							</div>
						  </div>
					</div>
					<div class="box-footer p-0 no-border bg-transparent">
						<div class="chart"><canvas id="chartjs4" class="h-80"></canvas></div>
					</div>
				 </div>
			  </div>

			  <div class="col-md-6">
				<div class="box">
				  <div class="box-body">
					  <div class="media align-items-center p-0">
						  <h3 class="mx-0 mb-5 fw-500">Daily Sales</h3>
					  </div>
					  <div class="flexbox align-items-center mt-5">
						<div>
						  <h4 class="no-margin"><span class="text-primary">+$17,800</span></h4>
						</div>
						<div class="text-end">
						  <h4 class="no-margin"><span class="text-success">+1.35%</span></h4>
						</div>
					  </div>
				</div>
				<div class="box-footer p-0 no-border">
					<div class="chart"><canvas id="chartjs1" class="h-80"></canvas></div>
				</div>
			   </div>
			</div>

			  <div class="col-md-6">
					<div class="box">
					  <div class="box-body">
						  <div class="media align-items-center p-0">
							  <h3 class="mx-0 mb-5 fw-500">Member Profit</h3>
						  </div>
						  <div class="flexbox align-items-center mt-5">
							<div>
							  <h4 class="no-margin"><span class="text-success">+$17,800</span></h4>
							</div>
							<div class="text-end">
							  <h4 class="no-margin"><span class="text-danger">-1.35%</span></h4>
							</div>
						  </div>
					</div>
					<div class="box-footer p-0 no-border">
						<div class="chart"><canvas id="chartjs2" class="h-80"></canvas></div>
					</div>
				 </div>
			  </div>

			  <div class="col-md-6 col-lg-4">
				<div class="box box-body">
				  <div class="flexbox">
					<h6 class="text-uppercase">Analysis</h6>
					<h6><i class="ion-android-arrow-dropup text-success fs-18 me-1"></i> %20</h6>
				  </div>

				  <ul class="list-inline my-10">
					<li class="px-10">
					  <h6 class="mb-0 text-bold">8952</h6>
					  <small>Abu Dhabi</small>
					</li>

					<li class="be-1 bs-1 px-10">
					  <h6 class="mb-0 text-bold">7458</h6>
					  <small>Miami</small>
					</li>

					<li class="px-10">
					  <h6 class="mb-0 text-bold">3254</h6>
					  <small>London</small>
					</li>
				  </ul>

				  <div id="linearea">1,3,5,4,6,8,7,9,7,8,10,16,14,10</div>
				</div>
			  </div>		  

			  <div class="col-md-6 col-lg-4">
				<div class="box box-body">
				  <div class="flexbox">
					<h6 class="text-uppercase">Analysis</h6>
					<h6><i class="ion-android-arrow-dropup text-success fs-18 me-1"></i> %20</h6>
				  </div>

				  <ul class="list-inline my-10">
					<li class="px-10">
					  <h6 class="mb-0 text-bold">76.58%</h6>
					  <small>All Time</small>
					</li>

					<li class="be-1 bs-1 px-10">
					  <h6 class="mb-0 text-bold">35.12%</h6>
					  <small>Last Month</small>
					</li>

					<li class="px-10">
					  <h6 class="mb-0 text-bold">6.66%</h6>
					  <small>Today</small>
					</li>
				  </ul>

				  <div id="baralc" class="text-center"></div>
				</div>
			  </div>		  

			  <div class="col-md-6 col-lg-4">
				<div class="box bg-img" style="background-image: url(../images/gallery/thumb/9.jpg);" data-overlay="5">
				  <div class="box-body text-white">
					<div class="fs-50 fw-200">6,374</div>
					<p>Increase in page views</p>
				  </div>

				  <div id="lineIncrease"></div>
				</div>
			  </div>

			  <div class="col-md-6 col-lg-4">
				<div class="box">
				  <div class="box-body bg-img" style="background-image: url(../images/gallery/thumb/5.jpg);" data-overlay="5">
					<div class="flexbox mb-20">
					  <h6 class="text-uppercase text-white">Today</h6>
					  <h6 class="text-white"><i class="ion-android-arrow-dropup"></i> %20</h6>
					</div>
					<div id="lineToday"></div>
				  </div>

				  <div class="box-body">
					<ul class="flexbox flex-justified align-items-center">
					  <li class="text-end">
						<div class="fs-20 text-success">%60</div>
						<small class="text-uppercase">Direct sale</small>
					  </li>

					  <li class="text-center px-2">
						<div class="easypie" data-percent="53">
						  <span class="percent">53%</span>
						</div>

					  </li>

					  <li class="text-start">
						<div class="fs-20 text-warning">%40</div>
						<small class="text-uppercase">Whole sale</small>
					  </li>
					</ul>
				  </div>
				</div>
			  </div>

			  <div class="col-md-6 col-lg-4">
				<div class="box">
				  <div class="box-body bg-primary">
					<div class="flexbox mb-20">
					  <h6 class="text-uppercase text-white">Analysis</h6>
					  <h6 class="text-white"><i class="ion-android-arrow-dropup"></i> %20</h6>
					</div>
					<div class="text-center" id="baranl">1,4,3,7,6,4,8,9,6,8,12,6,7,9,4,8,5,7,9,13,10,9,9,8</div>
				  </div>

				  <div class="box-body">
					<div class="flexbox align-items-center">
					  <div>
						<small class="text-uppercase">Maximum bounce</small>
						<div class="fs-26 mt-16">2500</div>
					  </div>
					  <div class="easypie" data-percent="75" data-bar-color="#0bb2d4" data-scale-color="transparent">
						  <span class="percent">75%</span>
						</div>

					</div>
				  </div>
				</div>
			  </div>

			  <div class="col-md-6 col-lg-4">
				<div class="box">
				  <div class="box-body bg-info">
					<div class="flexbox mb-20">
					  <div class="dropdown">
						<h6 class="text-uppercase text-white dropdown-toggle" data-bs-toggle="dropdown">Today</h6>
						<div class="dropdown-menu">
						  <a class="dropdown-item active" href="#">Today</a>
						  <a class="dropdown-item" href="#">Yesterday</a>
						  <a class="dropdown-item" href="#">Last week</a>
						  <a class="dropdown-item" href="#">Last month</a>
						</div>
					  </div>

					  <h6 class="text-white"><i class="ion-android-arrow-dropup"></i> %20</h6>
					</div>

					<div id="lineTo">1,4,3,7,6,4,8,9,6,8,12</div>
				  </div>

				  <div class="box-body">
					<h6 class="text-uppercase text-center mb-30">Top locations</h6>

					<ul class="flexbox flex-justified text-cente mb-15">
					  <li class="text-center">
						<div class="fs-18">8952</div>
						<small>Abu Dhabi</small>
					  </li>

					  <li class="be-1 bs-1 botder-light text-center">
						<div class="fs-18">7458</div>
						<small>Miami</small>
					  </li>

					  <li class="text-center">
						<div class="fs-18">3254</div>
						<small>London</small>
					  </li>
					</ul>
				  </div>
				</div>
			  </div>

			  <div class="col-md-6 col-lg-4">
				<div class="box">
				  <div class="box-header with-border">
					<h5 class="box-title">Top Advertisers</h5>
					<div class="box-tools pull-right">
						<ul class="card-controls">
						  <li class="dropdown">
							<a data-bs-toggle="dropdown" href="#"><i class="ion-android-more-vertical"></i></a>
							<div class="dropdown-menu dropdown-menu-end">
							  <a class="dropdown-item active" href="#">Today</a>
							  <a class="dropdown-item" href="#">Yesterday</a>
							  <a class="dropdown-item" href="#">Last week</a>
							  <a class="dropdown-item" href="#">Last month</a>
							</div>
						  </li>
						  <li><a href="#" class="link card-btn-reload" data-bs-toggle="tooltip" title="" data-bs-original-title="Refresh"><i class="fa fa-circle-thin"></i></a></li>
						</ul>
					</div>
				  </div>

				  <div class="box-body">
					<div class="text-center py-20">                  
					  <div class="donut" data-peity='{ "fill": ["#ff4c52", "#faa700", "#3e8ef7"], "radius": 78, "innerRadius": 58  }' >9,6,5</div>
					</div>

					<ul class="list-inline">
					  <li class="flexbox mb-5">
						<div>
						  <span class="badge badge-dot badge-lg me-1" style="background-color: #ff4c52"></span>
						  <span>Abu Dhabi</span>
						</div>
						<div>8952</div>
					  </li>

					  <li class="flexbox mb-5">
						<div>
						  <span class="badge badge-dot badge-lg me-1" style="background-color: #faa700"></span>
						  <span>Miami</span>
						</div>
						<div>7458</div>
					  </li>

					  <li class="flexbox">
						<div>
						  <span class="badge badge-dot badge-lg me-1" style="background-color: #3e8ef7"></span>
						  <span>London</span>
						</div>
						<div>3254</div>
					  </li>
					</ul>
				  </div>
				</div>
			  </div>

			  <div class="col-md-6 col-lg-4">
				<div class="box">
				  <div class="box-header with-border">
					<h5 class="box-title">Top Locations</h5>
					<div class="box-tools pull-right">
						<ul class="card-controls">
						  <li class="dropdown">
							<a data-bs-toggle="dropdown" href="#"><i class="ion-android-more-vertical"></i></a>
							<div class="dropdown-menu dropdown-menu-end">
							  <a class="dropdown-item active" href="#">Today</a>
							  <a class="dropdown-item" href="#">Yesterday</a>
							  <a class="dropdown-item" href="#">Last week</a>
							  <a class="dropdown-item" href="#">Last month</a>
							</div>
						  </li>
						  <li><a href="#" class="link card-btn-reload" data-bs-toggle="tooltip" title="" data-bs-original-title="Refresh"><i class="fa fa-circle-thin"></i></a></li>
						</ul>
					</div>
				  </div>

				  <div class="box-body">
					<div class="text-center py-20">
						<div class="donut" data-peity='{ "fill": ["#faa700", "#3e8ef7", "#06d79c"], "radius": 80, "innerRadius": 60  }' >9,6,5</div>
					</div>

					<ul class="flexbox flex-justified text-center mt-30">
					  <li>
						<div class="fs-20 text-primary">8952</div>
						<small>Abu Dhabi</small>
					  </li>

					  <li class="be-1 bs-1">
						<div class="fs-20 text-info">7458</div>
						<small>Miami</small>
					  </li>

					  <li>
						<div class="fs-20 text-yellow">3254</div>
						<small>London</small>
					  </li>
					</ul>
				  </div>
				</div>
			  </div>

			  <div class="col-md-6 col-lg-4">
				<div class="box">
				  <div class="box-header with-border">
					<h5 class="box-title">Top Locations</h5>

					<div class="box-tools pull-right">
						<ul class="card-controls">
						  <li class="dropdown">
							<a data-bs-toggle="dropdown" href="#"><i class="ion-android-more-vertical"></i></a>
							<div class="dropdown-menu dropdown-menu-end">
							  <a class="dropdown-item active" href="#">Today</a>
							  <a class="dropdown-item" href="#">Yesterday</a>
							  <a class="dropdown-item" href="#">Last week</a>
							  <a class="dropdown-item" href="#">Last month</a>
							</div>
						  </li>
						  <li><a href="#" class="link card-btn-reload" data-bs-toggle="tooltip" title="" data-bs-original-title="Refresh"><i class="fa fa-circle-thin"></i></a></li>
						</ul>
					</div>
				  </div>

				  <div class="box-body">
					<div class="flexbox mt-20">
						<div class="bar" data-peity='{ "fill": ["#666EE8", "#28D094", "#FF9149"], "height": 130, "width": 90, "padding":0.2 }'>8952,7458,3254</div>
					  <ul class="list-inline align-self-end text-muted text-end mb-0">
						<li>Abu Dhabi <span class="badge badge-ring badge-primary ms-2"></span></li>
						<li>Miami <span class="badge badge-ring badge-success ms-2"></span></li>
						<li>London <span class="badge badge-ring badge-warning ms-2"></span></li>
					  </ul>
					</div>
					<p class="mt-20">Distinctively Masterricate interdependent sources rather than timely leadership skills. Synergistically repurpose market positioning functionalities via top-line.</p>
				  </div>
				</div>
			  </div>	

			  <div class="col-md-6 col-lg-4">
				<div class="box box-body b-1 border-success">
				  <div class="flexbox">
					<div id="linechart" ></div>
					<div class="text-end">
					  <span>New Users</span><br>
					  <span>
						<i class="ion-ios-arrow-up text-success"></i>
						<span class="fs-18 ms-1">589</span>
					  </span>
					</div>
				  </div>
				</div>
			  </div>

			  <div class="col-md-6 col-lg-4">
				<div class="box box-body b-1 border-warning">
				  <div class="flexbox">
					<div id="barchart"></div>
					<div class="text-end">
					  <span>Yearly Sale</span><br>
					  <span>
						<i class="ion-ios-arrow-up text-success"></i>
						<span class="fs-18 ms-1">%90</span>
					  </span>
					</div>
				  </div>
				</div>
			  </div>

			  <div class="col-md-6 col-lg-4">
				<div class="box box-body b-1 border-primary">
				  <div class="flexbox">
					<div id="discretechart"></div>
					<div class="text-end">
					  <span>Impressions</span><br>
					  <span>
						<i class="ion-ios-arrow-up text-success"></i>
						<span class="fs-18 ms-1">%90</span>
					  </span>
					</div>
				  </div>
				</div>
			  </div>

			  <div class="col-md-6 col-lg-4">
				<div class="box box-body">
				  <div class="flexbox">
					<div class="text-start">
					  <span>New Users</span><br>
					  <span>
						<i class="ion-ios-arrow-up text-success"></i>
						<span class="fs-18 ms-1">589</span>
					  </span>
					</div>
					<div id="linechart2" ></div>
				  </div>
				</div>
			  </div>

			  <div class="col-md-6 col-lg-4">
				<div class="box box-body bg-danger">
				  <div class="flexbox">
					<div class="text-start">
					  <span>Yearly Sale</span><br>
					  <span>
						<i class="ion-ios-arrow-up text-success"></i>
						<span class="fs-18 ms-1">%90</span>
					  </span>
					</div>
					<div id="barchart2"></div>
				  </div>
				</div>
			  </div>

			  <div class="col-md-6 col-lg-4">
				<div class="box box-body bg-warning">
				  <div class="flexbox">
					<div class="text-start">
					  <span>Impressions</span><br>
					  <span>
						<i class="ion-ios-arrow-up text-success"></i>
						<span class="fs-18 ms-1">%90</span>
					  </span>
					</div>
					<div id="discretechart2"></div>
				  </div>
				</div>
			  </div>	

			</div>  

		  <div class="row">
			  <div class="col-md-6 col-lg-3">
				  <div class="box">				  
					  <div class="box-header no-border">
						<div class="box-tools pull-right">
							<ul class="card-controls">
							  <li class="dropdown">
								<a data-bs-toggle="dropdown" href="#"><i class="fa fa-cog"></i></a>
								<div class="dropdown-menu dropdown-menu-end">
								  <a class="dropdown-item active" href="#">Today</a>
								  <a class="dropdown-item" href="#">Yesterday</a>
								  <a class="dropdown-item" href="#">Last week</a>
								  <a class="dropdown-item" href="#">Last month</a>
								</div>
							  </li>
							  <li><a href="#" class="link card-btn-reload" data-bs-toggle="tooltip" title="" data-bs-original-title="Refresh"><i class="fa fa-circle-thin"></i></a></li>
							</ul>
						</div>
					  </div>

					  <div class="box-body">
						  <div class="text-center">
							  <div class="easypie" data-percent="75" data-bar-color="#ff4c52" data-scale-color="transparent">
								<span class="icon-box"><i class="fa fa-clock-o text-danger"></i></span>
							  </div>
							  <h3 class="countnm per mb-5">75%</h3>
							  <p class="mb-0">Time available</p>
							  <p class="text-fade"><small>51% average</small></p>
							  <div id="barchart3" class="mt-15"></div>
						  </div>
					  </div>
				  </div>
			  </div>
			  <div class="col-md-6 col-lg-3">
				  <div class="box">				  
					  <div class="box-header no-border">
						<div class="box-tools pull-right">
							<ul class="card-controls">
							  <li class="dropdown">
								<a data-bs-toggle="dropdown" href="#"><i class="fa fa-cog"></i></a>
								<div class="dropdown-menu dropdown-menu-end">
								  <a class="dropdown-item active" href="#">Today</a>
								  <a class="dropdown-item" href="#">Yesterday</a>
								  <a class="dropdown-item" href="#">Last week</a>
								  <a class="dropdown-item" href="#">Last month</a>
								</div>
							  </li>
							  <li><a href="#" class="link card-btn-reload" data-bs-toggle="tooltip" title="" data-bs-original-title="Refresh"><i class="fa fa-circle-thin"></i></a></li>
							</ul>
						</div>
					  </div>

					  <div class="box-body">
						  <div class="text-center">
							  <div class="easypie" data-percent="82" data-bar-color="#0bb2d4" data-scale-color="transparent">
								<span class="icon-box"><i class="fa fa-trophy text-primary"></i></span>
							  </div>
							  <h3 class="countnm per mb-5">82%</h3>
							  <p class="mb-0">Target goal</p>
							  <p class="text-fade"><small>43% average</small></p>
							  <div id="linearea2" class="mt-15"></div>
						  </div>
					  </div>
				  </div>
			  </div>
			  <div class="col-md-6 col-lg-3">
				  <div class="box">				  
					  <div class="box-header no-border">
						<div class="box-tools pull-right">
							<ul class="card-controls">
							  <li class="dropdown">
								<a data-bs-toggle="dropdown" href="#"><i class="fa fa-cog"></i></a>
								<div class="dropdown-menu dropdown-menu-end">
								  <a class="dropdown-item active" href="#">Today</a>
								  <a class="dropdown-item" href="#">Yesterday</a>
								  <a class="dropdown-item" href="#">Last week</a>
								  <a class="dropdown-item" href="#">Last month</a>
								</div>
							  </li>
							  <li><a href="#" class="link card-btn-reload" data-bs-toggle="tooltip" title="" data-bs-original-title="Refresh"><i class="fa fa-circle-thin"></i></a></li>
							</ul>
						</div>
					  </div>

					  <div class="box-body">
						  <div class="text-center">
							  <div class="easypie" data-percent="45" data-bar-color="#17b3a3" data-scale-color="transparent">
								<span class="icon-box"><i class="fa fa-thumbs-up text-success"></i></span>
							  </div>
							  <h3 class="countnm per mb-5">45%</h3>
							  <p class="mb-0">Campaign</p>
							  <p class="text-fade"><small>32% average</small></p>
							  <div id="linechart3" class="mt-15"></div>
						  </div>
					  </div>
				  </div>
			  </div>
			  <div class="col-md-6 col-lg-3">
				  <div class="box">				  
					  <div class="box-header no-border">
						<div class="box-tools pull-right">
							<ul class="card-controls">
							  <li class="dropdown">
								<a data-bs-toggle="dropdown" href="#"><i class="fa fa-cog"></i></a>
								<div class="dropdown-menu dropdown-menu-end">
								  <a class="dropdown-item active" href="#">Today</a>
								  <a class="dropdown-item" href="#">Yesterday</a>
								  <a class="dropdown-item" href="#">Last week</a>
								  <a class="dropdown-item" href="#">Last month</a>
								</div>
							  </li>
							  <li><a href="#" class="link card-btn-reload" data-bs-toggle="tooltip" title="" data-bs-original-title="Refresh"><i class="fa fa-circle-thin"></i></a></li>
							</ul>
						</div>
					  </div>

					  <div class="box-body">
						  <div class="text-center">
							  <div class="easypie" data-percent="55" data-bar-color="#faa700" data-scale-color="transparent">
								<span class="icon-box"><i class="fa fa-shopping-bag text-warning"></i></span>
							  </div>
							  <h3 class="countnm per mb-5">55%</h3>
							  <p class="mb-0">Sales Overview</p>
							  <p class="text-fade"><small>47% average</small></p>
							  <div id="discretechart3" class="mt-15"></div>
						  </div>
					  </div>
				  </div>
			  </div>		
		  </div>	

		  <div class="row">
			  <div class="col-md-6 col-lg-3">
				  <div class="box">				  
					  <div class="box-header no-border">
						  <h6>Miami, Florida</h6>
						<div class="box-tools pull-right">
							<ul class="card-controls">
							  <li class="dropdown">
								<a data-bs-toggle="dropdown" href="#"><i class="fa fa-cog"></i></a>
								<div class="dropdown-menu dropdown-menu-end">
								  <a class="dropdown-item active" href="#">Today</a>
								  <a class="dropdown-item" href="#">Yesterday</a>
								  <a class="dropdown-item" href="#">Last week</a>
								  <a class="dropdown-item" href="#">Last month</a>
								</div>
							  </li>
							  <li><a href="#" class="link card-btn-reload" data-bs-toggle="tooltip" title="" data-bs-original-title="Refresh"><i class="fa fa-circle-thin"></i></a></li>
							</ul>
						</div>
					  </div>

					  <div class="box-body">
						  <div class="flexbox">
							  <div id="barchart4"></div>
							  <div>
								  <h3 class="countnm mb-5">41458245</h3>
								  <p class="mb-0">USD</p>
								  <p class="text-fade"><small>Today's sales</small></p>		  
							  </div>				
						  </div>
					  </div>
				  </div>
			  </div>
			  <div class="col-md-6 col-lg-3">
				  <div class="box">				  
					  <div class="box-header no-border">
						  <h6>Miami, Florida</h6>
						<div class="box-tools pull-right">
							<ul class="card-controls">
							  <li class="dropdown">
								<a data-bs-toggle="dropdown" href="#"><i class="fa fa-cog"></i></a>
								<div class="dropdown-menu dropdown-menu-end">
								  <a class="dropdown-item active" href="#">Today</a>
								  <a class="dropdown-item" href="#">Yesterday</a>
								  <a class="dropdown-item" href="#">Last week</a>
								  <a class="dropdown-item" href="#">Last month</a>
								</div>
							  </li>
							  <li><a href="#" class="link card-btn-reload" data-bs-toggle="tooltip" title="" data-bs-original-title="Refresh"><i class="fa fa-circle-thin"></i></a></li>
							</ul>
						</div>
					  </div>

					  <div class="box-body">
						  <div class="flexbox">
							  <div id="linearea3"></div>
							  <div>
								  <h3 class="countnm mb-5">458185</h3>
								  <p class="mb-0">USD</p>
								  <p class="text-fade"><small>Today's sales</small></p>		  
							  </div>				
						  </div>
					  </div>
				  </div>
			  </div>
			  <div class="col-md-6 col-lg-3">
				  <div class="box">				  
					  <div class="box-header no-border">
						  <h6>Miami, Florida</h6>
						<div class="box-tools pull-right">
							<ul class="card-controls">
							  <li class="dropdown">
								<a data-bs-toggle="dropdown" href="#"><i class="fa fa-cog"></i></a>
								<div class="dropdown-menu dropdown-menu-end">
								  <a class="dropdown-item active" href="#">Today</a>
								  <a class="dropdown-item" href="#">Yesterday</a>
								  <a class="dropdown-item" href="#">Last week</a>
								  <a class="dropdown-item" href="#">Last month</a>
								</div>
							  </li>
							  <li><a href="#" class="link card-btn-reload" data-bs-toggle="tooltip" title="" data-bs-original-title="Refresh"><i class="fa fa-circle-thin"></i></a></li>
							</ul>
						</div>
					  </div>

					  <div class="box-body">
						  <div class="flexbox">
							  <div id="linechart4"></div>	
							  <div>
								  <h3 class="countnm mb-5">458185</h3>
								  <p class="mb-0">USD</p>
								  <p class="text-fade"><small>Today's sales</small></p>		  
							  </div>			
						  </div>
					  </div>
				  </div>
			  </div>
			  <div class="col-md-6 col-lg-3">
				  <div class="box">				  
					  <div class="box-header no-border">
						  <h6>Miami, Florida</h6>
						<div class="box-tools pull-right">
							<ul class="card-controls">
							  <li class="dropdown">
								<a data-bs-toggle="dropdown" href="#"><i class="fa fa-cog"></i></a>
								<div class="dropdown-menu dropdown-menu-end">
								  <a class="dropdown-item active" href="#">Today</a>
								  <a class="dropdown-item" href="#">Yesterday</a>
								  <a class="dropdown-item" href="#">Last week</a>
								  <a class="dropdown-item" href="#">Last month</a>
								</div>
							  </li>
							  <li><a href="#" class="link card-btn-reload" data-bs-toggle="tooltip" title="" data-bs-original-title="Refresh"><i class="fa fa-circle-thin"></i></a></li>
							</ul>
						</div>
					  </div>

					  <div class="box-body">
						  <div class="flexbox">
							  <div id="discretechart4"></div>
							  <div>
								  <h3 class="countnm mb-5">458185</h3>
								  <p class="mb-0">USD</p>
								  <p class="text-fade"><small>Today's sales</small></p>		  
							  </div>				
						  </div>
					  </div>
				  </div>
			  </div>

		  </div>	    

		</section>
		<!-- /.content -->	  
	  </div>
  </div>
  <!-- /.content-wrapper -->

   <footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">
        <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
		  <li class="nav-item">
			<a class="nav-link" href="javascript:void(0)">FAQ</a>
		  </li>
		  <li class="nav-item">
			<a class="nav-link" href="https://themeforest.net/item/lawfirm-responsive-bootstrap-admin-template/32736939">Purchase Now</a>
		  </li>
		</ul>
    </div>
	  &copy; <script>document.write(new Date().getFullYear())</script> <a href="https://www.multipurposethemes.com/">Multipurpose Themes</a>. All Rights Reserved.
  </footer>
  <!-- Control Sidebar -->
  <aside class="control-sidebar">
	  
	<div class="rpanel-title"><span class="pull-right btn btn-circle btn-danger" data-toggle="control-sidebar"><i class="ion ion-close text-white"></i></span> </div>  <!-- Create the tabs -->
    <ul class="nav nav-tabs control-sidebar-tabs">
      <li class="nav-item"><a href="#control-sidebar-home-tab" data-bs-toggle="tab" class="active"><i class="mdi mdi-message-text"></i></a></li>
      <li class="nav-item"><a href="#control-sidebar-settings-tab" data-bs-toggle="tab"><i class="mdi mdi-playlist-check"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
          <div class="flexbox">
			<a href="javascript:void(0)" class="text-grey">
				<i class="ti-more"></i>
			</a>	
			<p>Users</p>
			<a href="javascript:void(0)" class="text-end text-grey"><i class="ti-plus"></i></a>
		  </div>
		  <div class="lookup lookup-sm lookup-right d-none d-lg-block">
			<input type="text" name="s" placeholder="Search" class="w-p100">
		  </div>
          <div class="media-list media-list-hover mt-20">
			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-success" href="#">
				<img src="../images/avatar/1.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Tyler</strong></a>
				</p>
				<p>Praesent tristique diam...</p>
				  <span>Just now</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-danger" href="#">
				<img src="../images/avatar/2.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Luke</strong></a>
				</p>
				<p>Cras tempor diam ...</p>
				  <span>33 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-warning" href="#">
				<img src="../images/avatar/3.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-primary" href="#">
				<img src="../images/avatar/4.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>			
			
			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-success" href="#">
				<img src="../images/avatar/1.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Tyler</strong></a>
				</p>
				<p>Praesent tristique diam...</p>
				  <span>Just now</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-danger" href="#">
				<img src="../images/avatar/2.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Luke</strong></a>
				</p>
				<p>Cras tempor diam ...</p>
				  <span>33 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-warning" href="#">
				<img src="../images/avatar/3.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>

			<div class="media py-10 px-0">
			  <a class="avatar avatar-lg status-primary" href="#">
				<img src="../images/avatar/4.jpg" alt="...">
			  </a>
			  <div class="media-body">
				<p class="fs-16">
				  <a class="hover-primary" href="#"><strong>Evan</strong></a>
				</p>
				<p>In posuere tortor vel...</p>
				  <span>42 min ago</span>
			  </div>
			</div>
			  
		  </div>

      </div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
          <div class="flexbox">
			<a href="javascript:void(0)" class="text-grey">
				<i class="ti-more"></i>
			</a>	
			<p>Todo List</p>
			<a href="javascript:void(0)" class="text-end text-grey"><i class="ti-plus"></i></a>
		  </div>
        <ul class="todo-list mt-20">
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_1" class="filled-in">
			  <label for="basic_checkbox_1" class="mb-0 h-15"></label>
			  <!-- todo text -->
			  <span class="text-line">Nulla vitae purus</span>
			  <!-- Emphasis label -->
			  <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
			  <!-- General tools such as edit or delete-->
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_2" class="filled-in">
			  <label for="basic_checkbox_2" class="mb-0 h-15"></label>
			  <span class="text-line">Phasellus interdum</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_3" class="filled-in">
			  <label for="basic_checkbox_3" class="mb-0 h-15"></label>
			  <span class="text-line">Quisque sodales</span>
			  <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_4" class="filled-in">
			  <label for="basic_checkbox_4" class="mb-0 h-15"></label>
			  <span class="text-line">Proin nec mi porta</span>
			  <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_5" class="filled-in">
			  <label for="basic_checkbox_5" class="mb-0 h-15"></label>
			  <span class="text-line">Maecenas scelerisque</span>
			  <small class="badge bg-primary"><i class="fa fa-clock-o"></i> 1 week</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_6" class="filled-in">
			  <label for="basic_checkbox_6" class="mb-0 h-15"></label>
			  <span class="text-line">Vivamus nec orci</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 1 month</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_7" class="filled-in">
			  <label for="basic_checkbox_7" class="mb-0 h-15"></label>
			  <!-- todo text -->
			  <span class="text-line">Nulla vitae purus</span>
			  <!-- Emphasis label -->
			  <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
			  <!-- General tools such as edit or delete-->
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_8" class="filled-in">
			  <label for="basic_checkbox_8" class="mb-0 h-15"></label>
			  <span class="text-line">Phasellus interdum</span>
			  <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5 by-1">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_9" class="filled-in">
			  <label for="basic_checkbox_9" class="mb-0 h-15"></label>
			  <span class="text-line">Quisque sodales</span>
			  <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
			<li class="py-15 px-5">
			  <!-- checkbox -->
			  <input type="checkbox" id="basic_checkbox_10" class="filled-in">
			  <label for="basic_checkbox_10" class="mb-0 h-15"></label>
			  <span class="text-line">Proin nec mi porta</span>
			  <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
			  <div class="tools">
				<i class="fa fa-edit"></i>
				<i class="fa fa-trash-o"></i>
			  </div>
			</li>
		  </ul>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
	
	<!-- ./side demo panel -->
	<div class="sticky-toolbar">	    
	    <a href="https://themeforest.net/item/lawfirm-responsive-bootstrap-admin-template/32736939" data-bs-toggle="tooltip" data-bs-placement="left" title="Buy Now" class="waves-effect waves-light btn btn-success btn-flat mb-5 btn-sm" target="_blank">
			<span class="icon-Money"><span class="path1"></span><span class="path2"></span></span>
		</a>
	    <a href="https://themeforest.net/user/multipurposethemes/portfolio" data-bs-toggle="tooltip" data-bs-placement="left" title="Portfolio" class="waves-effect waves-light btn btn-danger btn-flat mb-5 btn-sm" target="_blank">
			<span class="icon-Image"></span>
		</a>
	    <a id="chat-popup" href="#" data-bs-toggle="tooltip" data-bs-placement="left" title="Live Chat" class="waves-effect waves-light btn btn-warning btn-flat btn-sm">
			<span class="icon-Group-chat"><span class="path1"></span><span class="path2"></span></span>
		</a>
	</div>
	<!-- Sidebar -->
	
	<div id="chat-box-body">
		<div id="chat-circle" class="waves-effect waves-circle btn btn-circle btn-sm btn-warning l-h-50">
            <div id="chat-overlay"></div>
            <span class="icon-Group-chat fs-18"><span class="path1"></span><span class="path2"></span></span>
		</div>

		<div class="chat-box">
            <div class="chat-box-header p-15 d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button class="waves-effect waves-circle btn btn-circle btn-primary-light h-40 w-40 rounded-circle l-h-45" type="button" data-bs-toggle="dropdown">
                      <span class="icon-Add-user fs-22"><span class="path1"></span><span class="path2"></span></span>
                  </button>
                  <div class="dropdown-menu min-w-200">
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Color me-15"></span>
                        New Group</a>
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Clipboard me-15"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                        Contacts</a>
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Group me-15"><span class="path1"></span><span class="path2"></span></span>
                        Groups</a>
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Active-call me-15"><span class="path1"></span><span class="path2"></span></span>
                        Calls</a>
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Settings1 me-15"><span class="path1"></span><span class="path2"></span></span>
                        Settings</a>
                    <div class="dropdown-divider"></div>
					<a class="dropdown-item fs-16" href="#">
                        <span class="icon-Question-circle me-15"><span class="path1"></span><span class="path2"></span></span>
                        Help</a>
					<a class="dropdown-item fs-16" href="#">
                        <span class="icon-Notifications me-15"><span class="path1"></span><span class="path2"></span></span> 
                        Privacy</a>
                  </div>
                </div>
                <div class="text-center flex-grow-1">
                    <div class="text-dark fs-18">Mayra Sibley</div>
                    <div>
                        <span class="badge badge-sm badge-dot badge-primary"></span>
                        <span class="text-muted fs-12">Active</span>
                    </div>
                </div>
                <div class="chat-box-toggle">
                    <button id="chat-box-toggle" class="waves-effect waves-circle btn btn-circle btn-danger-light h-40 w-40 rounded-circle l-h-45" type="button">
                      <span class="icon-Close fs-22"><span class="path1"></span><span class="path2"></span></span>
                    </button>                    
                </div>
            </div>
            <div class="chat-box-body">
                <div class="chat-box-overlay">   
                </div>
                <div class="chat-logs">
                    <div class="chat-msg user">
                        <div class="d-flex align-items-center">
                            <span class="msg-avatar">
                                <img src="../images/avatar/2.jpg" class="avatar avatar-lg" alt="">
                            </span>
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary fw-bold">Mayra Sibley</a>
                                <p class="text-muted fs-12 mb-0">2 Hours</p>
                            </div>
                        </div>
                        <div class="cm-msg-text">
                            Hi there, I'm Jesse and you?
                        </div>
                    </div>
                    <div class="chat-msg self">
                        <div class="d-flex align-items-center justify-content-end">
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary fw-bold">You</a>
                                <p class="text-muted fs-12 mb-0">3 minutes</p>
                            </div>
                            <span class="msg-avatar">
                                <img src="../images/avatar/3.jpg" class="avatar avatar-lg" alt="">
                            </span>
                        </div>
                        <div class="cm-msg-text">
                           My name is Anne Clarc.         
                        </div>        
                    </div>
                    <div class="chat-msg user">
                        <div class="d-flex align-items-center">
                            <span class="msg-avatar">
                                <img src="../images/avatar/2.jpg" class="avatar avatar-lg" alt="">
                            </span>
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary fw-bold">Mayra Sibley</a>
                                <p class="text-muted fs-12 mb-0">40 seconds</p>
                            </div>
                        </div>
                        <div class="cm-msg-text">
                            Nice to meet you Anne.<br>How can i help you?
                        </div>
                    </div>
                </div><!--chat-log -->
            </div>
            <div class="chat-input">      
                <form>
                    <input type="text" id="chat-input" placeholder="Send a message..."/>
                    <button type="submit" class="chat-submit" id="chat-submit">
                        <span class="icon-Send fs-22"></span>
                    </button>
                </form>      
            </div>
		</div>
	</div>
	
	<!-- Page Content overlay -->
	
	
	<!-- Vendor JS -->
	<script src="js/vendors.min.js"></script>
	<script src="js/pages/chat-popup.js"></script>
    <script src="../assets/icons/feather-icons/feather.min.js"></script>
	
	<script src="../assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>
	<script src="../assets/vendor_components/jquery.peity/jquery.peity.js"></script>
	<script src="../assets/vendor_components/easypiechart/dist/jquery.easypiechart.js"></script>
	<script src="../assets/vendor_components/chart.js-master/Chart.min.js"></script>
	<script src="../assets/vendor_components/d3/d3.min.js"></script>
	<script src="../assets/vendor_components/d3/d3_tooltip.js"></script>
    
	<!-- Law Firm App -->
	<script src="js/template.js"></script>
	
	<script src="js/pages/chart-widgets.js"></script>
    <script src="js/pages/chartjs-int.js"></script>
	
</body>

<!-- Mirrored from lawfirm-admin-template.multipurposethemes.com/main/widgets_chart.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Jul 2023 04:24:53 GMT -->
</html>
