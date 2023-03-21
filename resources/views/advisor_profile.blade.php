<!DOCTYPE html>

<html lang="en">



<head>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

	<title>My Profile</title>
	<!-- Favicons -->

	<link rel="shortcut icon" href="assets/img/favicon.png">
	<link href="//fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap" rel="stylesheet"> 

	

	<!-- Bootstrap CSS -->

	<link rel="stylesheet" href="{{url('public/assets/provider/plugins/bootstrap/css/bootstrap.min.css')}}">



	<!-- Fontawesome CSS -->

	<link rel="stylesheet" href="{{url('public/assets/provider/plugins/fontawesome/css/fontawesome.min.css')}}">

	<link rel="stylesheet" href="{{url('public/assets/provider/plugins/fontawesome/css/all.min.css')}}">



	<!-- Main CSS -->

	<link rel="stylesheet" href="{{url('public/assets/provider/css/style.css')}}">

</head>



<body>



	<div class="main-wrapper">

	

		<!-- Header -->

		<header class="header">

			<nav class="navbar navbar-expand-lg header-nav">

				<div class="navbar-header">

					<a id="mobile_btn" href="javascript:void(0);">

						<span class="bar-icon">

							<span></span>

							<span></span>

							<span></span>

						</span>

					</a>

					<a href="index.html" class="navbar-brand logo">

						<img src="https://professionaler.com/beauty_advisor/public/assets/images/logo.PNG" class="img-fluid" alt="Logo">

					</a>

					<a href="index.html" class="navbar-brand logo-small">

						<img src="https://professionaler.com/beauty_advisor/public/assets/images/logo.PNG" class="img-fluid" alt="Logo">

					</a>

				</div>

				<div class="main-menu-wrapper">

					<div class="menu-header">

						<a href="#" class="menu-logo">

							<img src="https://professionaler.com/beauty_advisor/public/assets/images/logo.PNG" class="img-fluid" alt="Logo">

						</a>

						<a id="menu_close" class="menu-close" href="javascript:void(0);"> <i class="fas fa-times"></i></a>

					</div>

					<!---<ul class="main-nav">

						<li>

							<a href="index.html">Home</a> 

						</li>

						<li>

							<a href="categories.html">Categories</a>

						</li>

						

						

						<li>

							<a href="#" target="_blank">Admin</a>

						</li>

					</ul>--->

				</div>



				<ul class="nav header-navbar-rht">



					<li class="nav-item desc-list">

						<a href="add-service.html" class="nav-link header-login">

							<i class="fas fa-plus-circle mr-1"></i> <span>Post Image</span>

						</a>

					</li>



					<!-- Notifications -->

					<li class="nav-item dropdown logged-item">

						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">

							<i class="fas fa-bell"></i> <span class="badge badge-pill bg-yellow">1</span>

						</a>

						<div class="dropdown-menu notify-blk dropdown-menu-right notifications">

							<div class="topnav-dropdown-header">

								<span class="notification-title">Notifications</span>

								<a href="javascript:void(0)" class="clear-noti">Clear All  </a>

							</div>

							<div class="noti-content">

								<ul class="notification-list">

									<li class="notification-message">

										<a href="notifications.html">

											<div class="media">

												<span class="avatar avatar-sm">

												<!----	<img class="avatar-img rounded-circle" alt="User Image" src="https://professionaler.com/beauty_advisor/public/assets/img/customer/user-01.jpg">

												</span>

												<div class="media-body">

													<p class="noti-details"> <span class="noti-title">Jeffrey Akridge has folloing you</span></p>

													<p class="noti-time"><span class="notification-time">Today 10:04 PM</span></p>

												</div>---->

											</div>

										</a>

									</li>

									<li class="notification-message">

										<a href="notifications.html">

											<div class="media">

												<span class="avatar avatar-sm">

													<img class="avatar-img rounded-circle" alt="User Image" src="{{url('public/assets/provider/img/customer/user-02.jpg')}}">

												</span>

												<div class="media-body">

													<p class="noti-details"> <span class="noti-title">Nancy Olson has follow your profile</span></p>

													<p class="noti-time"><span class="notification-time">Today 9:45 PM</span></p>

												</div>

											</div>

										</a>

									</li>

									<li class="notification-message">

										<a href="notifications.html">

											<div class="media">

												<span class="avatar avatar-sm">

													<img class="avatar-img rounded-circle" alt="User Image" src="{{url('public/assets/provider/img/customer/user-03.jpg')}}">

												</span>

												<div class="media-body">

													<p class="noti-details"> <span class="noti-title">Ramona Kingsley like your image</span></p>

													<p class="noti-time"><span class="notification-time">Yesterday 8:17 AM</span></p>

												</div>

											</div>

										</a>

									</li>

									<li class="notification-message">

										<a href="notifications.html">

											<div class="media">

												<span class="avatar avatar-sm">

													<img class="avatar-img rounded-circle" alt="User Image" src="{{url('public/assets/provider/img/customer/user-04.jpg')}}">

												</span>

												<div class="media-body">

													<p class="noti-details"> <span class="noti-title">Ricardo Lung has follow your profile</span></p>

													<p class="noti-time"><span class="notification-time">Yesterday 6:20 AM</span></p>

												</div>

											</div>

										</a>

									</li>

									<li class="notification-message">

										<a href="notifications.html">

											<div class="media">

												<span class="avatar avatar-sm">

													<img class="avatar-img rounded-circle" alt="User Image" src="{{url('public/assets/provider/img/customer/user-05.jpg')}}">

												</span>

												<div class="media-body">

													<p class="noti-details"> <span class="noti-title">Annette Silva has like your image</span></p>

													<p class="noti-time"><span class="notification-time">17 Sep 2020 10:04 PM</span></p>

												</div>

											</div>

										</a>

									</li>

								</ul>

							</div>

							<div class="topnav-dropdown-footer">

								<a href="notifications.html">View all Notifications</a>

							</div>

						</div>

					</li>

					<!-- /Notifications -->



					<!-- chat 

					<li class="nav-item logged-item">

						<a href="chat.html" class="nav-link">

							<i class="fa fa-comments" aria-hidden="true"></i>

						</a>

					</li>---->

					<!-- /chat -->

					

					<!-- User Menu -->

					<li class="nav-item dropdown has-arrow logged-item">

						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false">

							<span class="user-img">

								<img class="rounded-circle" src="{{url('public/assets/provider/img/provider/provider-01.jpg')}}" alt="" width="31">

							</span>

						</a>

						<div class="dropdown-menu dropdown-menu-right">

							<div class="user-header">

								<div class="avatar avatar-sm">

									<img class="avatar-img rounded-circle" src="{{url('public/assets/provider/img/provider/provider-01.jpg')}}" alt="">

								</div>

								<div class="user-text">

									<h6 class="text-truncate">Thomas</h6>

									<p class="text-muted mb-0">Provider</p>

								</div>

							</div>

							<a class="dropdown-item" href="#">Dashboard</a>

							<a class="dropdown-item" href="#">My Images</a>

							<a class="dropdown-item" href="#">Service List</a>

							<a class="dropdown-item" href="#">Profile Settings</a>

							<!---<a class="dropdown-item" href="#">Wallet</a>

							<a class="dropdown-item" href="#">Subscription</a>

							<a class="dropdown-item" href="#">Availability</a>

							<a class="dropdown-item" href="#">Chat</a>--->

							<a class="dropdown-item" href="#">Logout</a>

						</div>

					</li>

					<!-- /User Menu -->



				</ul>



			</nav>

		</header>

		<!-- /Header -->

		

		<div class="content">

			<div class="container">

				<div class="row">

					<div class="col-xl-3 col-md-4 theiaStickySidebar">

						<div class="mb-4">

							<div class="d-sm-flex flex-row flex-wrap text-center text-sm-left align-items-center">

								<img alt="profile image" src="{{url('public/assets/provider/img/provider/provider-01.jpg')}}" class="avatar-lg rounded-circle">

								<div class="ml-sm-3 ml-md-0 ml-lg-3 mt-2 mt-sm-0 mt-md-2 mt-lg-0">

									<h6 class="mb-0">Thomas Herzberg</h6>

									<p class="text-muted mb-0">Member Since Apr 2020</p>

								</div>

							</div>

						</div>

						<div class="widget settings-menu">

							<ul>

								<li class="nav-item">

									<a href="{{url('advisor-dashboard')}}" class="nav-link">

										<i class="fas fa-chart-line"></i> <span>Dashboard</span>

									</a>

								</li>

								<li class="nav-item">

									<a href="my-services.html" class="nav-link">

										<i class="far fa-address-book"></i> <span>My Services</span>

									</a>

								</li>

								<li class="nav-item">

									<a href="provider-bookings.html" class="nav-link active">

										<i class="far fa-calendar-check"></i> <span>Images List</span>

									</a>

								</li>

								<li class="nav-item">

									<a href="provider-settings.html" class="nav-link">

										<i class="far fa-user"></i> <span>Profile Settings</span>

									</a>

								</li>

							<!---	<li class="nav-item">

									<a href="provider-wallet.html" class="nav-link">

										<i class="far fa-money-bill-alt"></i> <span>Wallet</span>

									</a>

								</li>--->

								<li class="nav-item">

									<a href="provider-subscription.html" class="nav-link">

										<i class="far fa-calendar-alt"></i> <span>Subscription</span>

									</a>

								</li>

							<!---	<li class="nav-item">

									<a href="provider-availability.html" class="nav-link">

										<i class="far fa-clock"></i> <span>Availability</span>

									</a>

								</li>--->

								<!---<li class="nav-item">

									<a href="provider-reviews.html" class="nav-link">

										<i class="far fa-star"></i> <span>Reviews</span>

									</a>

								</li>

								<li class="nav-item">

									<a href="provider-payment.html" class="nav-link">

										<i class="fas fa-hashtag"></i> <span>Payment</span>

									</a>

								</li>--->

							</ul>

						</div>

					</div>

					<div class="col-xl-9 col-md-8">

						<div class="row align-items-center mb-4">

							<div class="col">

								<h4 class="widget-title mb-0">Service List</h4>

							</div>

							<div class="col-auto">

								<div class="sort-by">

									<select class="form-control-sm custom-select searchFilter" id="status">

										<option>All</option>

										<option>Pending</option>

										<option>Inprogress</option>

										<option>Complete Request</option>

										<option>Rejected</option>

										<option>Cancelled</option>

										<option>Completed</option>

									</select>

								</div>

							</div>

						</div>

						<div id="dataList">

							<div class="bookings">

								<div class="booking-list">

									<div class="booking-widget">

										<a href="service-details.html" class="booking-img">

											<img src="{{url('public/assets/provider/img/services/service-02.jpg')}}" alt="User Image">

										</a>

										<div class="booking-det-info">

											<h3>

												<a href="service-details.html">Makeup Artist</a>

											</h3>

										<!---	<ul class="booking-details">

												<li>

													<span>Booking Date</span> 23 Jul 2020 <span class="badge badge-pill badge-prof bg-success">Complete Request sent to User</span>

												</li>

												<li><span>Booking time</span> 13:00:00 - 14:00:00</li>

												<li><span>Amount</span> $500</li>

												<li><span>Location</span> 223 Jehovah Drive Roanoke</li>

												<li><span>Phone</span> 410-242-3850</li>

												<li>

													<span>User</span>

													<div class="avatar avatar-xs mr-1">

														<img class="avatar-img rounded-circle" alt="User Image" src="assets/looks/men.jpg">

													</div>

													Jeffrey Akridge

												</li>

											</ul>--->

										</div>

									</div>

									<div class="booking-action"></div>

								</div>

							</div>

							

							<div class="bookings">

								<div class="booking-list">

									<div class="booking-widget">

										<a href="service-details.html" class="booking-img">

											<img src="{{url('public/assets/provider/img/services/service-03.jpg')}}" alt="User Image">

										</a>

										<div class="booking-det-info">

											<h3>

												<a href="service-details.html">Nail Artist</a>

											</h3>

										<!---	<ul class="booking-details">

												<li>

													<span>Booking Date</span> 21 Jul 2020 <span class="badge badge-pill badge-prof bg-primary">Inprogress</span>

												</li>

												<li><span>Booking time</span> 17:00:00 - 18:00:00</li>

												<li><span>Amount</span> $500</li>

												<li><span>Location</span> 3281 West Fork Street Great Falls</li>

												<li><span>Phone</span> 410-242-3850</li>

												<li>

													<span>User</span>

													<div class="avatar avatar-xs mr-1">

														<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/customer/user-02.jpg">

													</div>

													Nancy Olson

												</li>

											</ul>--->

										</div>

									</div>

								<!----	<div class="booking-action">

										<a href="user-chat.html" class="btn btn-sm bg-info-light"><i class="far fa-eye"></i> Chat</a>

										<a href="javascript:;" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#myCancel"><i class="fas fa-times"></i> Cancel the Service</a>

										<a href="javascript:;" class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> Complete Request to user</a>

									</div>--->

								</div>

							</div>

							

							<div class="bookings">

								<div class="booking-list">

									<div class="booking-widget">

										<a href="service-details.html" class="booking-img">

											<img src="{{url('public/assets/provider/img/services/service-03.jpg')}}" alt="User Image">

										</a>

										<div class="booking-det-info">

											<h3>

												<a href="service-details.html">Hair Artist</a>

											</h3>

											<ul class="booking-details">

												<!---<li>

													<span>Booking Date</span> 21 Jul 2020 <span class="badge badge-pill badge-prof bg-warning">Pending</span>

												</li>

												<li><span>Booking time</span> 13:00:00 - 14:00:00</li>

												<li><span>Amount</span> $500</li>

												<li><span>Location</span> 596 Walton Street Ogden</li>

												<li><span>Phone</span> 410-242-3850</li>

												<li>

													<span>User</span>

													<div class="avatar avatar-xs mr-1">

														<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/customer/user-03.jpg">

													</div>

													Ramona Kingsley

												</li>

											</ul>---->

										</div>

									</div>

									<!----<div class="booking-action">

										<a href="javascript:;" class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> User Request Accept</a>

										<a href="javascript:;" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#myCancel">	<i class="fas fa-times"></i> Cancel the Service</a>

									</div>--->

								</div>

							</div>

							

							<!----<div class="bookings">

								<div class="booking-list">

									<div class="booking-widget">

										<a href="service-details.html" class="booking-img">

											<img src="{{url('public/assets/provider/img/services/service-03.jpg')}}" alt="User Image">

										</a>

										<div class="booking-det-info">

											<h3>

												<a href="service-details.html">House Cleaning Services</a>

											</h3>

											<ul class="booking-details">

												<li>

													<span>Booking Date</span> 23 Jul 2020 <span class="badge badge-pill badge-prof bg-danger">Rejected by User</span>

												</li>

												<li><span>Booking time</span> 12:00:00 - 13:00:00</li>

												<li><span>Amount</span> $500</li>

												<li><span>Location</span> 4371 Maloy Court Rush Center</li>

												<li><span>Phone</span> 410-242-3850</li>

												<li>

													<span>User</span>

													<div class="avatar avatar-xs mr-1">

														<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/customer/user-04.jpg">

													</div>

													Ricardo Lung

												</li>

											</ul>

										</div>

									</div>

									<div class="booking-action">

										<button type="button" data-id="542" class="btn btn-sm bg-default-light"><i class="fas fa-info-circle"></i> Reason</button>

									</div>

								</div>

							</div>

							<div class="bookings">

								<div class="booking-list">

									<div class="booking-widget">

										<a href="service-details.html" class="booking-img">

											<img src="{{url('public/assets/provider/img/services/service-03.jpg')}}" alt="User Image">

										</a>

										<div class="booking-det-info">

											<h3>

												<a href="service-details.html">Computer & Server AMC Service</a>

											</h3>

											<ul class="booking-details">

												<li>

													<span>Booking Date</span> 22 Jul 2020 <span class="badge badge-pill badge-prof bg-warning">Pending</span>

												</li>

												<li><span>Booking time</span> 12:00:00 - 13:00:00</li>

												<li><span>Amount</span> $4</li>

												<li><span>Location</span> 1346 Simpson Street Davenport</li>

												<li><span>Phone</span> 410-242-3850</li>

												<li>

													<span>User</span>

													<div class="avatar avatar-xs mr-1">

														<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/customer/user-05.jpg">

													</div>

													Annette Silva

												</li>

											</ul>

										</div>

									</div>

									<div class="booking-action">

										<a href="javascript:;" class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> User Request Accept</a>

										<a href="javascript:;" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#myCancel"><i class="fas fa-times"></i> Cancel the Service</a>

									</div>

								</div>

							</div>

							

							<div class="bookings">

								<div class="booking-list">

									<div class="booking-widget">

										<a href="service-details.html" class="booking-img">

											<img src="{{url('public/assets/provider/img/services/service-03.jpg')}}" alt="User Image">

										</a>

										<div class="booking-det-info">

											<h3>

												<a href="service-details.html">Interior Designing</a>

											</h3>

											<ul class="booking-details">

												<li>

													<span>Booking Date</span> 22 Jul 2020 <span class="badge badge-pill badge-prof bg-warning">Pending</span>

												</li>

												<li><span>Booking time</span> 11:00:00 - 12:00:00</li>

												<li><span>Amount</span> $100</li>

												<li><span>Location</span> 171 Jadewood Farms Newark</li>

												<li><span>Phone</span> 412-355-7471</li>

												<li>

													<span>User</span>

													<div class="avatar avatar-xs mr-1">

														<img class="avatar-img rounded-circle" alt="User Image" src="assets/img/customer/user-06.jpg">

													</div>

													Stephen Wilson

												</li>

											</ul>

										</div>

									</div>

									<div class="booking-action">

										<a href="javascript:;" class="btn btn-sm bg-success-light"><i class="fas fa-check"></i> User Request Accept</a>

										<a href="javascript:;" class="btn btn-sm bg-danger-light" data-toggle="modal" data-target="#myCancel"><i class="fas fa-times"></i> Cancel the Service</a>

									</div>

								</div>

							</div> 

							<div class="pagination">

								<ul>

									<li class="active">

										<a href="javascript:void(0);">1</a>

									</li>

									<li>

										<a href="javascript:void(0);">2</a>

									</li>

									<li>

										<a href="javascript:void(0);">3</a>

									</li>

									<li>

										<a href="javascript:void(0);">4</a>

									</li>

									<li class="arrow">

										<a href="javascript:void(0);"><i class="fas fa-angle-right"></i></a>

									</li>

								</ul>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>﻿

		

		<!-- Footer -->

		<footer class="footer">

		

			<!-- Footer Top -->

			<div class="footer-top">

				<div class="container">

					<div class="row">

						<div class="col-lg-3 col-md-6">

							<!-- Footer Widget -->

							<div class="footer-widget footer-menu">

								<h2 class="footer-title">Quick Links  </h2>

								<ul>

									<li>
										<a href="{{url('about-us')}}">About Us</a>
									</li>
									<li>
										<a href="{{url('contact-us')}}">Contact Us</a>
									</li>

									<li>

										<a href="#">Faq</a>

									</li>

									<li>

										<a href="#">Help</a>

									</li>

								</ul>

							</div>

							<!-- /Footer Widget -->

						</div>

						<div class="col-lg-3 col-md-6">

							<!-- Footer Widget -->

							<div class="footer-widget footer-menu">

								<h2 class="footer-title">Categories</h2>

								<ul>

									<li><a href="#">Make Up Artist</a></li>

									<li><a href="#">Nail Artist</a></li>

									<li><a href="#">Hair Artist</a></li>

								</ul>

							</div>

							<!-- /Footer Widget -->

						</div>

						<div class="col-lg-3 col-md-6">

							<!-- Footer Widget -->

							<div class="footer-widget footer-contact">

								<h2 class="footer-title">Contact Us</h2>

								<div class="footer-contact-info">

									<div class="footer-address">

										<span><i class="far fa-building"></i></span>

										<p>367 Hillcrest Lane, Irvine, California, United States</p>

									</div>

									<p><i class="fas fa-headphones"></i> 321 546 8764</p>

									<p class="mb-0"><i class="fas fa-envelope"></i> truelysell@example.com</p>

								</div>

							</div>

							<!-- /Footer Widget -->

						</div>

						<div class="col-lg-3 col-md-6">

							<!-- Footer Widget -->

							<div class="footer-widget">

								<h2 class="footer-title">Follow Us</h2>

								<div class="social-icon">

									<ul>

										<li>

											<a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>

										</li>

										<li>

											<a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>

										</li>

										<li>

											<a href="#" target="_blank"><i class="fab fa-youtube"></i></a>

										</li>

										<li>

											<a href="#" target="_blank"><i class="fab fa-google"></i></a>

										</li>

									</ul>

								</div>

								<div class="subscribe-form">

                                    <input type="email" class="form-control" placeholder="Enter your email">

                                    <button type="submit" class="btn footer-btn">

                                        <i class="fas fa-paper-plane"></i>

                                    </button>

                                </div>

							</div>

							<!-- /Footer Widget -->

						</div>

					</div>

				</div>

			</div>

			<!-- /Footer Top -->

			

			<!-- Footer Bottom -->

			<div class="footer-bottom">

				<div class="container">

					<!-- Copyright -->

					<div class="copyright">

						<div class="row">

							<div class="col-md-6 col-lg-6">

								<div class="copyright-text">

									<p class="mb-0">&copy; 2020 <a href="#">Beauty Advisor</a>. All rights reserved.</p>

								</div>

							</div>

							<div class="col-md-6 col-lg-6">

								<!-- Copyright Menu -->

								<div class="copyright-menu">

									<ul class="policy-menu">

										<li>

											<a href="term-condition.html">Terms and Conditions</a>

										</li>

										<li>

											<a href="privacy-policy.html">Privacy</a>

										</li>

									</ul>

								</div>

								<!-- /Copyright Menu -->

							</div>

						</div>

					</div>

					<!-- /Copyright -->

				</div>

			</div>

			<!-- /Footer Bottom -->

			

		</footer>

		<!-- /Footer -->

		

	</div>



	<!-- jQuery -->

	<script src="{{url('public/assets/provider/js/jquery-3.5.0.min.js')}}"></script>



	<!-- Bootstrap Core JS -->

	<script src="{{url('public/assets/provider/js/popper.min.js')}}"></script>

	<script src="{{url('public/assets/provider/plugins/bootstrap/js/bootstrap.min.js')}}"></script>



	<!-- Sticky Sidebar JS -->

	<script src="{{url('public/assets/provider/plugins/theia-sticky-sidebar/ResizeSensor.js')}}"></script>

	<script src="{{url('public/assets/provider/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js')}}"></script>



	<!-- Custom JS -->

	<script src="{{url('public/assets/provider/js/script.js')}}"></script>

	

</body>

</html>