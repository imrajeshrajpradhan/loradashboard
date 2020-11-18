<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Asiczen Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="../../assets/img/icon.ico" type="image/x-icon"/>
	
	<!-- Fonts and icons -->
	<script src="../../assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../../assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../assets/css/atlantis.min.css">
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="../../assets/css/demo.css">

	<!-- Downlink From CSS -->
	<style >
		
		input[type=text], select {
		    width: 95%;
		    padding: 8px 15px;
		    margin: 3px 6px;
		    display: inline-block;
		    border: 1px solid #ccc;
		    border-radius: 4px;
		    box-sizing: border-box;
		}

		input[type=submit] {
		    width: 95%;
		    background-color: #3364FF;
		    color: white;
		    padding: 10px 20px;
		    margin: 3px 6px;
		    border: none;
		    border-radius: 4px;
		    cursor: pointer;
		}
	</style>
	<!-- END OF Downlink From CSS -->

</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header" data-background-color="blue">
				
				<a href="../index.php" class="logo">
					<img src="../../assets/img/logo.png" style="width: 80%;" alt="navbar brand" class="navbar-brand">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
				
				<div class="container-fluid">
					<div class="collapse" id="search-nav">
						<form class="navbar-left navbar-form nav-search mr-md-3">
							<div class="input-group">
								<div class="input-group-prepend">
									<button type="submit" class="btn btn-search pr-1">
										<i class="fa fa-search search-icon"></i>
									</button>
								</div>
								<input type="text" placeholder="Search ..." class="form-control">
							</div>
						</form>
					</div>
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item toggle-nav-search hidden-caret">
							<a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
								<i class="fa fa-search"></i>
							</a>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-envelope"></i>
							</a>
							<ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">
								<li>
									<div class="dropdown-title d-flex justify-content-between align-items-center">
										Messages 									
										<a href="#" class="small">Mark all as read</a>
									</div>
								</li>
								<li>
									<div class="message-notif-scroll scrollbar-outer">
										<div class="notif-center">
											<a href="#">
												<div class="notif-img"> 
													<img src="../../assets/img/jm_denis.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Jimmy Denis</span>
													<span class="block">
														How are you ?
													</span>
													<span class="time">5 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-img"> 
													<img src="../../assets/img/chadengle.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Chad</span>
													<span class="block">
														Ok, Thanks !
													</span>
													<span class="time">12 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-img"> 
													<img src="../../assets/img/mlane.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Jhon Doe</span>
													<span class="block">
														Ready for the meeting today...
													</span>
													<span class="time">12 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-img"> 
													<img src="../../assets/img/talha.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="subject">Talha</span>
													<span class="block">
														Hi, Apa Kabar ?
													</span>
													<span class="time">17 minutes ago</span> 
												</div>
											</a>
										</div>
									</div>
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);">See all messages<i class="fa fa-angle-right"></i> </a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-bell"></i>
								<span class="notification">4</span>
							</a>
							<ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
								<li>
									<div class="dropdown-title">You have 4 new notification</div>
								</li>
								<li>
									<div class="notif-center">
										<a href="#">
											<div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i> </div>
											<div class="notif-content">
												<span class="block">
													New user registered
												</span>
												<span class="time">5 minutes ago</span> 
											</div>
										</a>
										<a href="#">
											<div class="notif-icon notif-success"> <i class="fa fa-comment"></i> </div>
											<div class="notif-content">
												<span class="block">
													Rahmad commented on Admin
												</span>
												<span class="time">12 minutes ago</span> 
											</div>
										</a>
										<a href="#">
											<div class="notif-img"> 
												<img src="../../assets/img/profile2.jpg" alt="Img Profile">
											</div>
											<div class="notif-content">
												<span class="block">
													Reza send messages to you
												</span>
												<span class="time">12 minutes ago</span> 
											</div>
										</a>
										<a href="#">
											<div class="notif-icon notif-danger"> <i class="fa fa-heart"></i> </div>
											<div class="notif-content">
												<span class="block">
													Farrah liked Admin
												</span>
												<span class="time">17 minutes ago</span> 
											</div>
										</a>
									</div>
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);">See all notifications<i class="fa fa-angle-right"></i> </a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
								<i class="fas fa-layer-group"></i>
							</a>
							<div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
								<div class="quick-actions-header">
									<span class="title mb-1">Quick Actions</span>
									<span class="subtitle op-8">Shortcuts</span>
								</div>
								<div class="quick-actions-scroll scrollbar-outer">
									<div class="quick-actions-items">
										<div class="row m-0">
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-file-1"></i>
													<span class="text">Generated Report</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-database"></i>
													<span class="text">Create New Database</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-pen"></i>
													<span class="text">Create New Post</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-interface-1"></i>
													<span class="text">Create New Task</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-list"></i>
													<span class="text">Completed Tasks</span>
												</div>
											</a>
											<a class="col-6 col-md-4 p-0" href="#">
												<div class="quick-actions-item">
													<i class="flaticon-file"></i>
													<span class="text">Create New Invoice</span>
												</div>
											</a>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="../../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="../../assets/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text">
												<h4>BIKASH</h4>
												<p class="text-muted">hello@example.com</p><a href="profile.html" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
											</div>
										</div>
									</li>
									<li>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">My Profile</a>
										<a class="dropdown-item" href="#">My Balance</a>
										<a class="dropdown-item" href="#">Inbox</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Account Setting</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Logout</a>
									</li>
								</div>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>
		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">
			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="../../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									BIKASH
									<span class="user-level">Administrator</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									<li>
										<a href="#edit">
											<span class="link-collapse">Edit Profile</span>
										</a>
									</li>
									<li>
										<a href="#settings">
											<span class="link-collapse">Settings</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item active">
							<a href="../../demo1/index.php" class="collapsed">
								<i class="fas fa-home"></i>
								<span class="sub-item"> Dashboard</span>
							</a>	
						</li>
						<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">Components</h4>
						</li>
						
						<li class="nav-item">
							<a href="datatables.php">
								<i class="fas fa-table"></i>
								<span class="sub-item">Energy Metering</span>
								
							</a>
						</li>
						<li class="nav-item">
							<a href="../maps/jqvmap.html">
								<i class="fas fa-map-marker-alt"></i>
								<span class="sub-item"> Maps</span>
							</a>
						</li>
						<li class="nav-item">
							<a  href="../charts/charts.html">
								<i class="far fa-chart-bar"></i>
								<span class="sub-item"> Charts</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Tables</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="#">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Tables</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Meter Table</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-7">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Energy Utility</div>
								</div>
								<div class="card-body">
									<div class="card-sub">									
										This contain spcific Meter data :
									</div>
									<?php
										error_reporting(E_ALL & ~E_NOTICE);
										ini_set( "display_errors", 0); 

										$inputmote = $_GET['link'];
											//echo $inputmote;
											error_reporting(E_ALL & ~E_NOTICE);
											ini_set( "display_errors", 0); 
											$servername = "localhost";
											$username = "root";
											$password = "";
											$dbname = "azlora";
											$conn = new mysqli($servername, $username, $password, $dbname);
											if (mysqli_connect_errno()) {
												printf("Connect failed: %s\n", mysqli_connect_error());
												exit();
											}
											if (!$conn) {
												die("Connection failed: " . mysqli_connect_error());
											}
											
											
											/*====================Get Json Packet==================================*/
											/*====================Select from database and show in table==================================*/
											$select = "SELECT * FROM demo_loradata WHERE deveui='" .$inputmote."' ORDER BY  time_of_mof DESC";

											if($result = mysqli_query($conn, $select)){
												
												if(mysqli_num_rows($result) > 0){
													?>
													<div class="tbl-header">
													<table class="table mt-3" >
													<thead>
													<tr>
														<th ><b>Device ID</b></th>
														<th ><b>Energy Units</b></th>
														<th ><b>Frame Count</b></th>
														<th ><b>Date</b></th>
													</tr>
													</thead>
													<tbody>
													<?php while($row = mysqli_fetch_array($result)){?>
													
														<tr> 
															<td >
																<?php echo $row["deveui"];?>
															</td>
															<td ><?php echo $row["meterdata"];?></td>
															<td ><?php echo $row["frame_cnt"];?></td>
															<td ><?php echo $row["time_of_mof"];?></td></tr>			
																	
														<?php 
													}?>
											<?php  } 
											}
										?>
										</tbody>
									</table>
								</div>
							</div>
						</div>	
					</div>
					<div class="col-md-5">
							<!-- Form to send Downlink  -->
							<div class="card">
								<div style="margin-bottom: 10px;">
								<form action="send_appdata.php" method="post">
									<p id="demo" style="color: black;font-size:18px;margin-left: 10px;margin-top: 5px; "><b>Configure packet Time Interval in Minutes :</b></p>
									<input type="text" style="font-weight: bold;" name="devEUI" value=<?php echo $inputmote ?>><br>
									<input type="text" name="duration"><br>
									<input type="submit" value="Submit">
								</form> 
								</div>
							</div>
							<div class="card">
									<!-- GRAPH IMPORT  -->
								<?php
									$dataPoints = array();
									$dataPoints2 = array();

									//$select = "SELECT * FROM demo_loradata";
									$select="SELECT MONTH(time_of_mof) dateonly FROM demo_loradata where deveui='$inputmote' GROUP BY dateonly";

									if($result = mysqli_query($conn, $select)){
										if(mysqli_num_rows($result) > 0){
										while($row = mysqli_fetch_array($result)){
											
										/*----last meterreading against particular date-----*/	
										$ldata1="SELECT `meterdata` FROM demo_loradata where deveui='$inputmote' and MONTH(`time_of_mof`)='".$row["dateonly"]."' ORDER BY id DESC LIMIT 1";
										$ldata2=mysqli_query($conn, $ldata1);
										$ldata3=mysqli_fetch_row($ldata2);
										$ldata=$ldata3['0'];////////////last meterdata
										$lmonthName = date("F", mktime(0, 0, 0, $ldata, 10));
										
										/*----first meterreading against particular date-----*/	
										$fdata1="SELECT `meterdata` FROM demo_loradata where deveui='$inputmote' and MONTH(`time_of_mof`)='".$row["dateonly"]."' ORDER BY id ASC LIMIT 1";
										$fdata2=mysqli_query($conn, $fdata1);
										$fdata3=mysqli_fetch_row($fdata2);
										$fdata=$fdata3['0'];////////////first meterdata
										$fmonthName = date("F", mktime(0, 0, 0, $fdata, 10));

										/*----differece between last & fast meterreading against particular date-----*/	
										$subdata=$ldata-$fdata;
										
										$x=$row["meterdata"];
										$y=$row["dateonly"];
										array_push($dataPoints, array("y" => $subdata, "label" => $y));
										array_push($dataPoints2, array("y" => $ldata, "label" => $y));
									}}}

									function strToHex($string){
										$hex = '';
										for ($i=0; $i<strlen($string); $i++){
											$ord = ord($string[$i]);
											$hexCode = dechex($ord);
											$hex .= substr('0'.$hexCode, -2);
										}
										return strToUpper($hex);
									}?>
									<!----------------------------------------------------------------------------------------------->
									<script>
									window.onload = function () {

									var chart1 = new CanvasJS.Chart("chartContainer1", {
										title: {
											text: "Meter Reading Graph"
										},
										axisY: {
											title: "Highest Meter Data"
										},
										data: [{
											type: "line",
											dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
										}]
									});
									chart1.render();
									


									var chart = new CanvasJS.Chart("chartContainer", {
										animationEnabled: true,
										exportEnabled: true,
										theme: "light1", // "light1", "light2", "dark1", "dark2"
										title:{
											text: "Datewise Electricity Usage"
										},
										data: [{
											type: "column", //change type to bar, line, area, pie, etc
											//indexLabel: "{y}", //Shows y value on all Data Points
											indexLabelFontColor: "#5A5757",
											indexLabelPlacement: "outside",
											dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
										}]
									});
									chart.render();
									}
									</script>
									<div id="chartContainer" style="height: 300px; width: 95%;"></div>
									<div id="chartContainer1" style="height: 350px; width: 95%;"></div><br/><br/>
									<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script></div>
							</div>
						</div>
					</div>
				</div>
					<footer class="footer">
						<div class="container-fluid">
							<nav class="pull-left">
								<ul class="nav">
									<li class="nav-item">
										<a class="nav-link" href="http://www.asiczen.com/">
											Asiczen Technology
										</a>
									</li>
								</ul>
							</nav>	
						</div>
					</footer>
			</div>
		
		<!-- Custom template | don't include it in your project! -->
		<!--<div class="custom-template">
			<div class="title">Settings</div>
			<div class="custom-content">
				<div class="switcher">
					<div class="switch-block">
						<h4>Logo Header</h4>
						<div class="btnSwitch">
							<button type="button" class="changeLogoHeaderColor" data-color="dark"></button>
							<button type="button" class="selected changeLogoHeaderColor" data-color="blue"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="purple"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="green"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="red"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="white"></button>
							<br/>
							<button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="light-blue2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
							<button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Navbar Header</h4>
						<div class="btnSwitch">
							<button type="button" class="changeTopBarColor" data-color="dark"></button>
							<button type="button" class="changeTopBarColor" data-color="blue"></button>
							<button type="button" class="changeTopBarColor" data-color="purple"></button>
							<button type="button" class="changeTopBarColor" data-color="light-blue"></button>
							<button type="button" class="changeTopBarColor" data-color="green"></button>
							<button type="button" class="changeTopBarColor" data-color="orange"></button>
							<button type="button" class="changeTopBarColor" data-color="red"></button>
							<button type="button" class="changeTopBarColor" data-color="white"></button>
							<br/>
							<button type="button" class="changeTopBarColor" data-color="dark2"></button>
							<button type="button" class="selected changeTopBarColor" data-color="blue2"></button>
							<button type="button" class="changeTopBarColor" data-color="purple2"></button>
							<button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
							<button type="button" class="changeTopBarColor" data-color="green2"></button>
							<button type="button" class="changeTopBarColor" data-color="orange2"></button>
							<button type="button" class="changeTopBarColor" data-color="red2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Sidebar</h4>
						<div class="btnSwitch">
							<button type="button" class="selected changeSideBarColor" data-color="white"></button>
							<button type="button" class="changeSideBarColor" data-color="dark"></button>
							<button type="button" class="changeSideBarColor" data-color="dark2"></button>
						</div>
					</div>
					<div class="switch-block">
						<h4>Background</h4>
						<div class="btnSwitch">
							<button type="button" class="changeBackgroundColor" data-color="bg2"></button>
							<button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
							<button type="button" class="changeBackgroundColor" data-color="bg3"></button>
							<button type="button" class="changeBackgroundColor" data-color="dark"></button>
						</div>
					</div>
				</div>
			</div>
			<div class="custom-toggle">
				<i class="flaticon-settings"></i>
			</div>
		</div>-->
		<!-- End Custom template -->
	</div>
	<!--   Core JS Files   -->
	<script src="../../assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="../../assets/js/core/popper.min.js"></script>
	<script src="../../assets/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="../../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	
	<!-- jQuery Scrollbar -->
	<script src="../../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Atlantis JS -->
	<script src="../../assets/js/atlantis.min.js"></script>
	<!-- Atlantis DEMO methods, don't include it in your project! -->
	<script src="../../assets/js/setting-demo2.js"></script>
	<script>
		$('#displayNotif').on('click', function(){
			var placementFrom = $('#notify_placement_from option:selected').val();
			var placementAlign = $('#notify_placement_align option:selected').val();
			var state = $('#notify_state option:selected').val();
			var style = $('#notify_style option:selected').val();
			var content = {};

			content.message = 'Turning standard Bootstrap alerts into "notify" like notifications';
			content.title = 'Bootstrap notify';
			if (style == "withicon") {
				content.icon = 'fa fa-bell';
			} else {
				content.icon = 'none';
			}
			content.url = 'index.html';
			content.target = '_blank';

			$.notify(content,{
				type: state,
				placement: {
					from: placementFrom,
					align: placementAlign
				},
				time: 1000,
			});
		});
	</script>
</body>
</html>