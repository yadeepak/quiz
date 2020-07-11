@extends('layouts.app')

@section('top_bar')

@include('topbar')

@endsection

@section('content')
	<!--Sliders Section-->
	<section>
		<div class="banner-1 cover-image sptb-3 pb-14 sptb-tab bg-background2"
			data-image-src="../assets/images/banners/banner1.jpg">
			<div class="header-text mb-0">
				<div class="container">
					<div class="text-center text-white mb-7">
						<h1 class="mb-1">Find The Best Job / Internship For Your Future</h1>
						<p>It is a long established fact that a reader will be distracted by the readable.</p>
					</div>
					<div class="row">
						<div class="col-xl-10 col-lg-12 col-md-12 d-block mx-auto">
							<div class="search-background bg-transparent">
								<div class="form row no-gutters ">
									<div class="form-group  col-xl-4 col-lg-3 col-md-12 mb-0 bg-white ">
										<input type="text" class="form-control input-lg br-tr-md-0 br-br-md-0"
											id="text4" placeholder="Search Jobs / Internships">
									</div>
									<div class="form-group  col-xl-3 col-lg-3 col-md-12 mb-0 bg-white">
										<input type="text" class="form-control input-lg br-md-0" id="text5"
											placeholder="Select Location">
										<span><img src="../assets/images/svg/gps.svg" class="location-gps"></span>
									</div>
									<div class="form-group col-xl-3 col-lg-3 col-md-12 select2-lg  mb-0 bg-white">
										<select class="form-control select2-show-search  border-bottom-0"
											data-placeholder="Select Category">
											<optgroup label="Categories">
												<option>All Categories</option>
												<option value="1">Accountant</option>
												<option value="2">IT Software</option>
												<option value="3">Banking</option>
												<option value="4">Finaces</option>
												<option value="5">Cook/Chef</option>
												<option value="6">Driveing</option>
												<option value="7">HR Recruiter</option>
												<option value="8">IT Hardware</option>
												<option value="9">Sales</option>
											</optgroup>
										</select>
									</div>
									<div class="col-xl-2 col-lg-3 col-md-12 mb-0">
										<a href="#" class="btn btn-lg btn-block btn-secondary br-tl-md-0 br-bl-md-0"><i
												class="fa fa-search mr-1"></i>Search</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><!-- /header-text -->
			<div class="header-slider-img">
				<div class="container">
					<div id="small-categories" class="owl-carousel owl-carousel-icons7">
						<div class="item">
							<div class="card mb-0">
								<div class="card-body p-3">
									<div class="cat-item d-flex">
										<a href="jobs-list.html"></a>
										<div class="cat-img mr-4 bg-primary-transparent p-3 brround">
											<img src="../assets/new images/website-design.png" alt="img">
										</div>
										<div class="cat-desc text-left">
											<h5 class="mb-3 mt-0">Web Design</h5>
											<small class="badge badge-pill badge-primary mr-2">7,485 Jobs</small>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="card mb-0">
								<div class="card-body p-3">
									<div class="cat-item d-flex">
										<a href="jobs-list.html"></a>
										<div class="cat-img mr-4 bg-secondary-transparent p-3 brround">
											<img src="../assets/new images/wrench.png" alt="img">
										</div>
										<div class="cat-desc text-left">
											<h5 class="mb-3">Engineering</h5>
											<small class="badge badge-pill badge-secondary mr-2">3,451 Jobs</small>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="card mb-0">
								<div class="card-body p-3">
									<div class="cat-item d-flex">
										<a href="jobs-list.html"></a>
										<div class="cat-img mr-4 bg-success-transparent p-3 brround">
											<img src="../assets/new images/organization.png" alt="img">
										</div>
										<div class="cat-desc text-left">
											<h5 class="mb-3">Media</h5>
											<small class="badge badge-pill badge-success mr-2">4,758 Jobs</small>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="card mb-0">
								<div class="card-body p-3">
									<div class="cat-item d-flex">
										<a href="jobs-list.html"></a>
										<div class="cat-img mr-4 bg-danger-transparent p-3 brround">
											<img src="../assets/new images/teacher.png" alt="img">
										</div>
										<div class="cat-desc text-left">
											<h5 class="mb-3">Teacher</h5>
											<small class="badge badge-pill badge-danger mr-2">6,457 Jobs</small>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="card mb-0">
								<div class="card-body p-3">
									<div class="cat-item d-flex">
										<a href="jobs-list.html"></a>
										<div class="cat-img mr-4 bg-warning-transparent p-3 brround">
											<img src="../assets/new images/it.png" alt="img">
										</div>
										<div class="cat-desc text-left">
											<h5 class="mb-3">It Solutions</h5>
											<small class="badge badge-pill badge-warning mr-2">2,875 Jobs</small>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="card mb-0">
								<div class="card-body p-3">
									<div class="cat-item d-flex">
										<a href="jobs-list.html"></a>
										<div class="cat-img mr-4 bg-info-transparent p-3 brround">
											<img src="../assets/new images/technical-support.png" alt="img">
										</div>
										<div class="cat-desc text-left">
											<h5 class="mb-3">Call Center</h5>
											<small class="badge badge-pill badge-info mr-2">2,154 Jobs</small>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Sliders Section-->

	<!--Categories-->
	<section class="sptb">
		<div class="container">
			<div class="section-title center-block text-center">
				<h1>Internship Categories</h1>
			</div>
			<div class="item-all-cat center-block text-center education-categories">
				<div class="row">
					<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
						<div class="item-all-card text-dark text-center">
							<a href="jobs-list.html"></a>
							<div class="iteam-all-icon">
								<img src="../assets/new images/python-file.png" class="imag-service" alt="Cashier">
							</div>
							<div class="item-all-text mt-3">
								<h5 class="mb-0 text-body">Python + Django</h5>
							</div>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
						<div class="item-all-card text-dark text-center">
							<a href="jobs-list.html"></a>
							<div class="iteam-all-icon">
								<img src="../assets/new images/math.png" class="imag-service" alt="beautician">
							</div>
							<div class="item-all-text mt-3">
								<h5 class="mb-0 text-body">Data Science</h5>
							</div>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
						<div class="item-all-card text-dark text-center">
							<a href="jobs-list.html"></a>
							<div class="iteam-all-icon">
								<img src="../assets/new images/machine-learning.png" class="imag-service" alt="Driver">
							</div>
							<div class="item-all-text mt-3">
								<h5 class="mb-0 text-body">Machine Learning</h5>
							</div>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
						<div class="item-all-card text-dark text-center">
							<a href="jobs-list.html"></a>
							<div class="iteam-all-icon">
								<img src="../assets/new images/iot.png" class="imag-service" alt="Hardware">
							</div>
							<div class="item-all-text mt-3">
								<h5 class="mb-0 text-body">IoT</h5>
							</div>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
						<div class="item-all-card text-dark text-center">
							<a href="jobs-list.html"></a>
							<div class="iteam-all-icon">
								<img src="../assets/new images/java.png" class="imag-service" alt="operator">
							</div>
							<div class="item-all-text mt-3">
								<h5 class="mb-0 text-body">Core Java</h5>
							</div>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
						<div class="item-all-card text-dark text-center">
							<a href="jobs-list.html"></a>
							<div class="iteam-all-icon">
								<img src="../assets/new images/development.png" class="imag-service" alt="nurse">
							</div>
							<div class="item-all-text mt-3">
								<h5 class="mb-0 text-body">Web Development</h5>
							</div>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
						<div class="item-all-card text-dark text-center">
							<a href="jobs-list.html"></a>
							<div class="iteam-all-icon">
								<img src="../assets/new images/blog.png" class="imag-service" alt="truck">
							</div>
							<div class="item-all-text mt-3">
								<h5 class="mb-0 text-body">Digital Marketing</h5>
							</div>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
						<div class="item-all-card text-dark text-center">
							<a href="jobs-list.html"></a>
							<div class="iteam-all-icon">
								<img src="../assets/new images/android.png" class="imag-service" alt="web">
							</div>
							<div class="item-all-text mt-3">
								<h5 class="mb-0 text-body">Android App</h5>
							</div>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
						<div class="item-all-card text-dark text-center">
							<a href="jobs-list.html"></a>
							<div class="iteam-all-icon">
								<img src="../assets/new images/website-design.png" class="imag-service"
									alt="presentation">
							</div>
							<div class="item-all-text mt-3">
								<h5 class="mb-0 text-body">Web Designing</h5>
							</div>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
						<div class="item-all-card text-dark text-center">
							<a href="jobs-list.html"></a>
							<div class="iteam-all-icon">
								<img src="../assets/new images/picture.png" class="imag-service" alt="Life Insurance">
							</div>
							<div class="item-all-text mt-3">
								<h5 class="mb-0 text-body">Photography</h5>
							</div>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
						<div class="item-all-card text-dark text-center">
							<a href="jobs-list.html"></a>
							<div class="iteam-all-icon">
								<img src="../assets/new images/php.png" class="imag-service" alt="charts">
							</div>
							<div class="item-all-text mt-3">
								<h5 class="mb-0 text-body">Php</h5>
							</div>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
						<div class="item-all-card text-dark text-center">
							<a href="jobs-list.html"></a>
							<div class="iteam-all-icon">
								<img src="../assets/new images/dotnet.png" class="imag-service" alt="cooking">
							</div>
							<div class="item-all-text mt-3">
								<h5 class="mb-0 text-body">.Net</h5>
							</div>
						</div>
					</div>
				</div>
				<div class="mt-4">
					<a href="#" class="btn  btn-primary">View More</a>
				</div>
			</div>
		</div>
	</section>
	<!--Categories-->

	<!--Featured Jobs-->
	<section class="sptb bg-white">
		<div class="container" id="container1">
			<div class="section-title center-block text-center">
				<h1>Recent Jobs</h1>
			</div>
			<div class="row">
				<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
					<div class="card overflow-hidden">
						<div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i
									class="fa fa-bolt"></i></span></div>
						<div class="card-body">
							<div class="item-det row">
								<div class="col-md-9">
									<a href="jobs.html" class="text-dark">
										<h4 class="mb-2 fs-16 font-weight-semibold">Web Designer <span
												class="badge badge-danger fs-12">Fulltime</span></h4>
									</a>
									<div class="">
										<ul class="mb-0 d-flex">
											<li class="mr-5"><a href="#" class="icons"><i
														class="si si-briefcase text-muted mr-1"></i> IT Hardware &amp;
													Network Pvt ltd</a></li>
											<li class="mr-5"><a href="#" class="icons"><i
														class="si si-location-pin text-muted mr-1"></i> USA</a></li>
										</ul>
									</div>
								</div>
								<div class="col-md-3 col-auto">
									<div class="icons mt-3 mt-sm-0 pb-0">
										<a href="jobs.html" class="btn  btn-primary mt-2 float-md-right"> Apply Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card overflow-hidden">
						<div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i
									class="fa fa-bolt"></i></span></div>
						<div class="card-body">
							<div class="item-det row">
								<div class="col-md-9">
									<a href="jobs.html" class="text-dark">
										<h4 class="mb-2 fs-16 font-weight-semibold">Opening for Java Developer <span
												class="badge badge-warning fs-12">parttime</span></h4>
									</a>
									<div class="">
										<ul class="mb-0 d-flex">
											<li class="mr-5"><a href="#" class="icons"><i
														class="si si-briefcase text-muted mr-1"></i> Spinspon Software
													Solutions</a></li>
											<li class="mr-5"><a href="#" class="icons"><i
														class="si si-location-pin text-muted mr-1"></i> USA, UK</a></li>
										</ul>
									</div>
								</div>
								<div class="col-md-3 col-auto">
									<div class="icons mt-3 mt-sm-0 pb-0">
										<a href="jobs.html" class="btn  btn-primary mt-2 float-md-right"> Apply Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-body">
							<div class="item-det row">
								<div class="col-md-9">
									<a href="jobs.html" class="text-dark">
										<h4 class="mb-2 fs-16 font-weight-semibold">Looking For Project Leader <span
												class="badge badge-danger fs-12">Fulltime</span></h4>
									</a>
									<div class="">
										<ul class="mb-0 d-flex">
											<li class="mr-5"><a href="#" class="icons"><i
														class="si si-briefcase text-muted mr-1"></i>Umbrella Corporation
													Pvt Ltd</a></li>
											<li class="mr-5"><a href="#" class="icons"><i
														class="si si-location-pin text-muted mr-1"></i> USA, Canada</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-md-3 col-auto">
									<div class="icons mt-3 mt-sm-0 pb-0">
										<a href="jobs.html" class="btn  btn-primary mt-2 float-md-right"> Apply Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card overflow-hidden">
						<div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i
									class="fa fa-bolt"></i></span></div>
						<div class="card-body">
							<div class="item-det row">
								<div class="col-md-9">
									<a href="jobs.html" class="text-dark">
										<h4 class="mb-2 fs-16 font-weight-semibold">Web Developer Freelancer <span
												class="badge badge-info fs-12">Work From Home</span></h4>
									</a>
									<div class="">
										<ul class="mb-0 d-flex">
											<li class="mr-5"><a href="#" class="icons"><i
														class="si si-briefcase text-muted mr-1"></i>Acmen
													Corporation</a></li>
											<li class="mr-5"><a href="#" class="icons"><i
														class="si si-location-pin text-muted mr-1"></i> Japan</a></li>
										</ul>
									</div>
								</div>
								<div class="col-md-3 col-auto">
									<div class="icons mt-3 mt-sm-0 pb-0">
										<a href="jobs.html" class="btn  btn-primary mt-2 float-md-right"> Apply Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-body">
							<div class="item-det row">
								<div class="col-md-9">
									<a href="jobs.html" class="text-dark">
										<h4 class="mb-2 fs-16 font-weight-semibold">Requirement for Web Developer <span
												class="badge badge-warning fs-12">Parttime</span></h4>
									</a>
									<div class="">
										<ul class="mb-0 d-flex">
											<li class="mr-5"><a href="#" class="icons"><i
														class="si si-briefcase text-muted mr-1"></i>Web Tech Software
													Solutions</a></li>
											<li class="mr-5"><a href="#" class="icons"><i
														class="si si-location-pin text-muted mr-1"></i>London</a></li>
										</ul>
									</div>
								</div>
								<div class="col-md-3 col-auto">
									<div class="icons mt-3 mt-sm-0 pb-0">
										<a href="jobs.html" class="btn  btn-primary mt-2 float-md-right"> Apply Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6">
					<div class="card">
						<div class="card-body">
							<div class="item-det row">
								<div class="col-md-9">
									<a href="jobs.html" class="text-dark">
										<h4 class="mb-2 fs-16 font-weight-semibold">Openings For PHP Developer <span
												class="badge badge-primary fs-12">Internship</span></h4>
									</a>
									<div class="">
										<ul class="mb-0 d-flex">
											<li class="mr-5"><a href="#" class="icons"><i
														class="si si-briefcase text-muted mr-1"></i>rejoin Solutions</a>
											</li>
											<li class="mr-5"><a href="#" class="icons"><i
														class="si si-location-pin text-muted mr-1"></i> USA</a></li>
										</ul>
									</div>
								</div>
								<div class="col-md-3 col-auto">
									<div class="icons mt-3 mt-sm-0 pb-0">
										<a href="jobs.html" class="btn  btn-primary mt-2 float-md-right"> Apply Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card overflow-hidden">
						<div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i
									class="fa fa-bolt"></i></span></div>
						<div class="card-body">
							<div class="item-det row">
								<div class="col-md-9">
									<a href="jobs.html" class="text-dark">
										<h4 class="mb-2 fs-16 font-weight-semibold">Wanted Python Developer <span
												class="badge badge-primary fs-12">Internship</span></h4>
									</a>
									<div class="">
										<ul class="mb-0 d-flex">
											<li class="mr-5"><a href="#" class="icons"><i
														class="si si-briefcase text-muted mr-1"></i> IT Hardware &amp;
													Network Pvt ltd</a></li>
											<li class="mr-5"><a href="#" class="icons"><i
														class="si si-location-pin text-muted mr-1"></i> India</a></li>
										</ul>
									</div>
								</div>
								<div class="col-md-3 col-auto">
									<div class="icons mt-3 mt-sm-0 pb-0">
										<a href="jobs.html" class="btn  btn-primary mt-2 float-md-right"> Apply Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card overflow-hidden">
						<div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i
									class="fa fa-bolt"></i></span></div>
						<div class="card-body">
							<div class="item-det row">
								<div class="col-md-9">
									<a href="jobs.html" class="text-dark">
										<h4 class="mb-2 fs-16 font-weight-semibold">Sales Executive and Marketing <span
												class="badge badge-danger fs-12">Fulltime</span></h4>
									</a>
									<div class="">
										<ul class="mb-0 d-flex">
											<li class="mr-5"><a href="#" class="icons"><i
														class="si si-briefcase text-muted mr-1"></i> Sales & Market
													Place</a></li>
											<li class="mr-5"><a href="#" class="icons"><i
														class="si si-location-pin text-muted mr-1"></i>China</a></li>
										</ul>
									</div>
								</div>
								<div class="col-md-3 col-auto">
									<div class="icons mt-3 mt-sm-0 pb-0">
										<a href="jobs.html" class="btn  btn-primary mt-2 float-md-right"> Apply Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card overflow-hidden">
						<div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i
									class="fa fa-bolt"></i></span></div>
						<div class="card-body">
							<div class="item-det row">
								<div class="col-md-9">
									<a href="jobs.html" class="text-dark">
										<h4 class="mb-2 fs-16 font-weight-semibold">Urgently Wanted Delivery Boys <span
												class="badge badge-warning fs-12">parttime</span></h4>
									</a>
									<div class="">
										<ul class="mb-0 d-flex">
											<li class="mr-5"><a href="#" class="icons"><i
														class="si si-briefcase text-muted mr-1"></i> Food Delivery</a>
											</li>
											<li class="mr-5"><a href="#" class="icons"><i
														class="si si-location-pin text-muted mr-1"></i> USA , Cuba</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-md-3 col-auto">
									<div class="icons mt-3 mt-sm-0 pb-0">
										<a href="jobs.html" class="btn  btn-primary mt-2 float-md-right"> Apply Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card overflow-hidden">
						<div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i
									class="fa fa-bolt"></i></span></div>
						<div class="card-body">
							<div class="item-det row">
								<div class="col-md-9">
									<a href="jobs.html" class="text-dark">
										<h4 class="mb-2 fs-16 font-weight-semibold">Openings For Hr Recruiters <span
												class="badge badge-danger fs-12">Fulltime</span></h4>
									</a>
									<div class="">
										<ul class="mb-0 d-flex">
											<li class="mr-5"><a href="#" class="icons"><i
														class="si si-briefcase text-muted mr-1"></i> Soft Infra-tech pvt
													ltd</a></li>
											<li class="mr-5"><a href="#" class="icons"><i
														class="si si-location-pin text-muted mr-1"></i> USA , India</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-md-3 col-auto">
									<div class="icons mt-3 mt-sm-0 pb-0">
										<a href="jobs.html" class="btn  btn-primary mt-2 float-md-right"> Apply Now</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/Featured Jobs-->

	<!--Statistics-->
	<section class="sptb">
		<div class="container">
			<div class="section-title center-block text-center">
				<h1>Job Type</h1>
			</div>
			<div class="item-all-cat">
				<div class="row category-type">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="item-all-card text-dark text-center card mb-lg-0">
							<a href="jobs-list.html"></a>
							<div class="iteam-all-icon1">
								<img src="../assets/images/svgs/jobs/house-white.svg" class="imag-service" alt="Sales">
							</div>
							<div class="item-all-text mt-3">
								<h5 class="mb-0 text-body">Work From Home</h5>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="item-all-card text-dark text-center card mb-lg-0">
							<a href="jobs-list.html"></a>
							<div class="iteam-all-icon1">
								<img src="../assets/images/svgs/jobs/calendar-white.svg" class="imag-service"
									alt="Driver">
							</div>
							<div class="item-all-text mt-3">
								<h5 class="mb-0 text-body">Internship</h5>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="item-all-card text-dark text-center card  mb-sm-0">
							<a href="jobs-list.html"></a>
							<div class="iteam-all-icon1">
								<img src="../assets/images/svgs/jobs/hourglass-white.svg" class="imag-service"
									alt="IT-Hardware">
							</div>
							<div class="item-all-text mt-3">
								<h5 class="mb-0 text-body">Part Time</h5>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="item-all-card text-dark text-center card mb-0">
							<a href="jobs-list.html"></a>
							<div class="iteam-all-icon1">
								<img src="../assets/images/svgs/jobs/businessman-white.svg" class="imag-service"
									alt="Software">
							</div>
							<div class="item-all-text mt-3">
								<h5 class="mb-0 text-body">Full Time</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/Statistics-->

	<!--Latest Jobs-->
	<section class="sptb bg-white">
		<div class="container">
			<div class="section-title center-block text-center">
				<h1>Students Testimonials</h1>

			</div>
			<div class="owl-carousel owl-carousel-icons2">
				<div class="item">
					<div class="card mb-0">
						<div class="card-body">
							<img src="../assets/images/users/male/1.jpg" alt="img"
								class=" avatar avatar-xxl brround mx-auto">
							<div class="item-card2">
								<div class="item-card2-desc text-center">
									<div class="item-card2-text mt-3">
										<a href="company-list.html" class="text-dark">
											<h4 class="font-weight-bold">Vishal Kamble</h4>
										</a>
									</div>

									<p class="">.Net Developer (3 months)</p>

								</div>
							</div>
						</div>
						<div class="card-footer">
							<div class="product-filter-desc">
								<div class="product-filter-icons text-justify">
									<p><i class="fa fa-quote-left "></i> Hey I got the job! Excellent Training Institute
										were you can learn how to work in an organization, build up your personality and
										good support through out the course. Here I carried out .NET course which helped
										me to learn new technology and build up a new personality too. Trainers are to
										skilled and helpful. Now, I am Working as Software Developer in "Brillino".</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="card mb-0">
						<div class="card-body">
							<img src="../assets/images/users/female/1.jpg" alt="img"
								class=" avatar avatar-xxl brround mx-auto">
							<div class="item-card2">
								<div class="item-card2-desc text-center">
									<div class="item-card2-text mt-3">
										<a href="company-list.html" class="text-dark">
											<h4 class="font-weight-bold">Kiran</h4>
										</a>
									</div>
									<p class="">.Net Developer (3 months)</p>

								</div>
							</div>
						</div>
						<div class="card-footer">
							<div class="product-filter-desc">
								<div class="product-filter-icons text-justify">
									<p><i class="fa fa-quote-left"></i> Best training center for student to learn and
										take experience.it was an amazing training center. The tutors are well-trained,
										knowledgeable, friendly and helpful, they guided us in the best way. I feel very
										positive when I passout from my dot net training. I am happy and excited that I
										got job in "21 St century Informatics ". I am thankful to Dcodetech.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="card mb-0">
						<div class="card-body">
							<img src="../assets/images/users/female/2.jpg" alt="img"
								class=" avatar avatar-xxl brround mx-auto">
							<div class="item-card2">
								<div class="item-card2-desc text-center">
									<div class="item-card2-text mt-3">
										<a href="company-list.html" class="text-dark">
											<h4 class="font-weight-bold">Shreyas Mithbavkar</h4>
										</a>
									</div>
									<p class="">.Net Developer (6 Months)</p>

								</div>
							</div>
						</div>
						<div class="card-footer">
							<div class="product-filter-desc">
								<div class="product-filter-icons text-justify">
									<p><i class="fa fa-quote-left "></i> Recently i got a job as a Associate Software
										Engineer. I cannot express how great the training was and the overall
										managment,trainners,staff of the dcodetech. I would defintely recommend this to
										my friends to Join trainning at dcodetech. Thank you !!</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="card mb-0">
						<div class="card-body">
							<img src="../assets/images/users/male/21.jpg" alt="img"
								class=" avatar avatar-xxl brround mx-auto">
							<div class="item-card2">
								<div class="item-card2-desc text-center">
									<div class="item-card2-text mt-3">
										<a href="company-list.html" class="text-dark">
											<h4 class="font-weight-bold">Priya Devkar </h4>
										</a>
									</div>
									<p class="">.Net Developer </p>

								</div>
							</div>
						</div>
						<div class="card-footer">
							<div class="product-filter-desc">
								<div class="product-filter-icons text-justify">
									<p><i class="fa fa-quote-left "></i> I have got a job in "21st century informatics".
										I did certification in .net from dcodetech .Thanks to dcodetech team to
										motivating me how to build up in organization and personality too .Thanks to
										trainers who have build up my logics . I am very glad that I was part of
										dcodetech. Thanks a lot !</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="card mb-0">
						<div class="card-body">
							<img src="../assets/images/users/female/11.jpg" alt="img"
								class=" avatar avatar-xxl brround mx-auto">
							<div class="item-card2">
								<div class="item-card2-desc text-center">
									<div class="item-card2-text mt-3">
										<a href="company-list.html" class="text-dark">
											<h4 class="font-weight-bold">Deepak Gaikwad</h4>
										</a>
									</div>
									<p class="">Java Developer</p>

								</div>
							</div>
						</div>
						<div class="card-footer">
							<div class="product-filter-desc">
								<div class="product-filter-icons text-justify">
									<p><i class="fa fa-quote-left "></i> I got the job as a java developer in a reputed
										organization by joining here in dcodetech.This is well know for computer
										training center. I was completed Java training from this center last year. They
										have good faculty of all courses. If we are talking about placement they are
										offering lots of placement to you related to your courses.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="card mb-0">
						<div class="card-body">
							<img src="../assets/images/users/male/12.jpg" alt="img"
								class=" avatar avatar-xxl brround mx-auto">
							<div class="item-card2">
								<div class="item-card2-desc text-center">
									<div class="item-card2-text mt-3">
										<a href="company-list.html" class="text-dark">
											<h4 class="font-weight-bold">Mandar Dandekar</h4>
										</a>
									</div>
									<p class="">Web Developer </p>

								</div>
							</div>
						</div>
						<div class="card-footer">
							<div class="product-filter-desc">
								<div class="product-filter-icons text-justify">
									<p><i class="fa fa-quote-left "></i> As i got the job and i am excited to share my
										views for the reason that I
										got the knowledge thoroughly from here (Dcodetech). I found that all the
										technical aspect of knowledge of trainer here is very commendable and
										outstanding. And due to under their pioneering effort we achieved a total
										insight of technical knowledge and all basic conceptual idea of all topics. I
										wiil be grateful to them always. Thanks ! Again.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="card mb-0">
						<div class="card-body">
							<img src="../assets/images/users/female/15.jpg" alt="img"
								class=" avatar avatar-xxl brround mx-auto">
							<div class="item-card2">
								<div class="item-card2-desc text-center">
									<div class="item-card2-text mt-3">
										<a href="company-list.html" class="text-dark">
											<h4 class="font-weight-bold">
												Prashant Bochkari</h4>
										</a>
									</div>
									<p class="">Software Developer </p>

								</div>
							</div>
						</div>
						<div class="card-footer">
							<div class="product-filter-desc">
								<div class="product-filter-icons text-justify">
									<p><i class="fa fa-quote-left "></i> I Got Job Hurrey !!! By joining at Dcodetech,
										Because of them only i got the job in reputed IT organisation (as a software
										developer) immediately after completion of my dot net course. It instills and
										bring positiveness in me. Dot net trainers are equipped with knowledge and
										delivery of all technical queries all in all. Student must join this course and
										avail the informative aspect of IT field . Thanks! to Decodetech. Specially
										"Reshma Mam" who motivates me in whole course duration, where i lacks in
										technical course related issues. Thanks! again to Decodtech!</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="card mb-0">
						<div class="card-body">
							<img src="../assets/images/users/female/17.jpg" alt="img"
								class=" avatar avatar-xxl brround mx-auto">
							<div class="item-card2">
								<div class="item-card2-desc text-center">
									<div class="item-card2-text mt-3">
										<a href="company-list.html" class="text-dark">
											<h4 class="font-weight-bold">
												Ritesh. Mahipatrao</h4>
										</a>
									</div>
									<p class="">Php Developer (3 Yrs Exp)</p>

								</div>
							</div>
						</div>
						<div class="card-footer">
							<div class="product-filter-desc">
								<div class="product-filter-icons text-justify">
									<p><i class="fa fa-quote-left "></i> I got a job from Dcodetech as PHP Developer.
										All the trainers are well-experienced and very supportive.Training environment
										is so Positive. I have learnt a lot from the peers and trainers. My Experience
										at Dcodetech was very good." I can make my own projects in PHP after learning
										from Dcodetech,my confidence and skills are improved, Dcodetech is the best
										place to learn Web & Software development skills.It was an industry level
										experience.Highly recommended to one and all. My Experience at Dcodetech was
										very good.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Latest Jobs-->

	<!--latest Jobs-->
	<section class="sptb">
		<div class="container">
			<div class="section-title center-block text-center">
				<h1>Latest Internships</h1>

			</div>
			<div class="panel panel-primary">
				<div class="">
					<div class="tabs-menu ">
						<!-- Tabs -->
						<ul class="nav panel-tabs jobs-tabs mb-6">
							<li class=""><a href="#index1" class="active show" data-toggle="tab">All</a></li>
							<li><a href="#index2" data-toggle="tab" class="">Internship</a></li>
							<li><a href="#index3" data-toggle="tab" class="">Part Time Jobs</a></li>
							<li><a href="#index4" data-toggle="tab" class="">Work From Home Jobs</a></li>
						</ul>
					</div>
				</div>
				<div class="panel-body">
					<div class="tab-content">
						<div class="tab-pane active show" id="index1">
							<div class="row">
								<div class="col-xl-4 col-md-6">
									<div class="card overflow-hidden">
										<div class="card-body">
											<div class="item-card7-desc">
												<div class="item-card7-text">
													<a href="jobs.html" class="text-dark">
														<h4 class="font-weight-semibold">Python</h4>
													</a>
												</div>
												<p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit
													voluptatem accusantium doloremque.</p>
											</div>
										</div>
										<div class="card-body py-2">
											<a href="mr-4" class="icons font-weight-semibold text-body"><i
													class="fa fa-inr  text-muted mr-1"></i> 800</a>
											<a class="mr-4 float-right"><i
													class="fa fa-clock-o  text-muted mr-1"></i>Internship</a>
										</div>
										<div class="card-body py-2">
											<div class="d-flex align-items-center mt-auto">
												<img src="../assets/images/products/logo/img1.jpg"
													class="avatar brround avatar-md mr-2" alt="avatar-img">
												<div>
													<a href="profile.html" class="text-default fs-13">Dezignolics</a>
													<small class="d-block text-muted">2 days ago</small>
												</div>
												<div class="ml-auto text-muted">
													<a href="jobs.html" class="btn btn-sm btn-secondary text-white">See
														Details</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-md-6">
									<div class="card overflow-hidden">
										<div class="power-ribbon power-ribbon-top-left text-warning"><span
												class="bg-warning"><i class="fa fa-bolt"></i></span></div>
										<div class="card-body">
											<div class="item-card7-desc">
												<div class="item-card7-text">
													<a href="jobs.html" class="text-dark">
														<h4 class="font-weight-semibold">Data Science</h4>
													</a>
												</div>
												<p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit
													voluptatem accusantium doloremque.</p>
											</div>
										</div>
										<div class="card-body py-2">
											<a href="mr-4" class="icons font-weight-semibold text-body"><i
													class="fa fa-inr  text-muted mr-1"></i> 800</a>
											<a class="mr-4 float-right"><i
													class="fa fa-clock-o  text-muted mr-1"></i>Part Time</a>
										</div>
										<div class="card-body py-2">
											<div class="d-flex align-items-center mt-auto">
												<img src="../assets/images/products/logo/img2.jpg"
													class="avatar brround avatar-md mr-2" alt="avatar-img">
												<div>
													<a href="profile.html" class="text-default">K2F2</a>
													<small class="d-block text-muted">2 days ago</small>
												</div>
												<div class="ml-auto text-muted">
													<a href="jobs.html" class="btn  btn-sm btn-secondary text-white">See
														Details</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-md-6">
									<div class="card overflow-hidden">
										<div class="power-ribbon power-ribbon-top-left text-warning"><span
												class="bg-warning"><i class="fa fa-bolt"></i></span></div>
										<div class="card-body">
											<div class="item-card7-desc">
												<div class="item-card7-text">
													<a href="jobs.html" class="text-dark">
														<h4 class="font-weight-semibold">Data Analytics</h4>
													</a>
												</div>
												<p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit
													voluptatem accusantium doloremque.</p>
											</div>
										</div>
										<div class="card-body py-2">
											<a href="mr-4" class="icons font-weight-semibold text-body"><i
													class="fa fa-inr  text-muted mr-1"></i> 800</a>
											<a class="mr-4 float-right"><i
													class="fa fa-clock-o  text-muted mr-1"></i>Internship</a>
										</div>
										<div class="card-body py-2">
											<div class="d-flex align-items-center mt-auto">
												<img src="../assets/images/products/logo/img3.jpg"
													class="avatar brround avatar-md mr-3" alt="avatar-img">
												<div>
													<a href="profile.html" class="text-default">Dezignolics</a>
													<small class="d-block text-muted">5 days ago</small>
												</div>
												<div class="ml-auto text-muted">
													<a href="jobs.html" class="btn  btn-sm btn-secondary text-white">See
														Details</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-md-6">
									<div class="card overflow-hidden">
										<div class="ribbon ribbon-top-left text-danger"><span
												class="bg-danger">Free</span></div>
										<div class="card-body">
											<div class="item-card7-desc">
												<div class="item-card7-text">
													<a href="jobs.html" class="text-dark">
														<h4 class="font-weight-semibold">Web Design + Php</h4>
													</a>
												</div>
												<p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit
													voluptatem accusantium doloremque.</p>
											</div>
										</div>
										<div class="card-body py-2">
											<a href="mr-4" class="icons font-weight-semibold text-body"><i
													class="fa fa-inr  text-muted mr-1"></i> 300</a>
											<a class="mr-4 float-right"><i
													class="fa fa-clock-o  text-muted mr-1"></i>Internship</a>
										</div>
										<div class="card-body py-2">
											<div class="d-flex align-items-center mt-auto">
												<img src="../assets/images/products/logo/img4.jpg"
													class="avatar brround avatar-md mr-3" alt="avatar-img">
												<div>
													<a href="profile.html" class="text-default">Dezignolics</a>
													<small class="d-block text-muted">4 days ago</small>
												</div>
												<div class="ml-auto text-muted">
													<a href="jobs.html" class="btn  btn-sm btn-secondary text-white">See
														Details</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-md-6">
									<div class="card">
										<div class="card-body">
											<div class="item-card7-desc">
												<div class="item-card7-text">
													<a href="jobs.html" class="text-dark">
														<h4 class="font-weight-semibold">Web Design + .Net</h4>
													</a>
												</div>
												<p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit
													voluptatem accusantium doloremque.</p>
											</div>
										</div>
										<div class="card-body py-2">
											<a href="mr-4" class="icons font-weight-semibold text-body"><i
													class="fa fa-inr  text-muted mr-1"></i> 300</a>
											<a class="mr-4 float-right"><i
													class="fa fa-clock-o  text-muted mr-1"></i>Internship</a>
										</div>
										<div class="card-body py-2">
											<div class="d-flex align-items-center mt-auto">
												<img src="../assets/images/products/logo/img5.jpg"
													class="avatar brround avatar-md mr-3" alt="avatar-img">
												<div>
													<a href="profile.html" class="text-default">Dezignolics</a>
													<small class="d-block text-muted">2 days ago</small>
												</div>
												<div class="ml-auto text-muted">
													<a href="jobs.html" class="btn  btn-sm btn-secondary text-white">See
														Details</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-md-6">
									<div class="card">
										<div class="card-body">
											<div class="item-card7-desc">
												<div class="item-card7-text">
													<a href="jobs.html" class="text-dark">
														<h4 class="font-weight-semibold">Android</h4>
													</a>
												</div>
												<p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit
													voluptatem accusantium doloremque.</p>
											</div>
										</div>
										<div class="card-body py-2">
											<a href="mr-4" class="icons font-weight-semibold text-body"><i
													class="fa fa-inr  text-muted mr-1"></i> 300</a>
											<a class="mr-4 float-right"><i
													class="fa fa-clock-o  text-muted mr-1"></i>Internship</a>
										</div>
										<div class="card-body py-2">
											<div class="d-flex align-items-center mt-auto">
												<img src="../assets/images/products/logo/img6.jpg"
													class="avatar brround avatar-md mr-3" alt="avatar-img">
												<div>
													<a href="profile.html" class="text-default">Dezignolics</a>
													<small class="d-block text-muted">3 days ago</small>
												</div>
												<div class="ml-auto text-muted">
													<a href="jobs.html" class="btn  btn-sm btn-secondary text-white">See
														Details</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="index2">
							<div class="row">
								<div class="col-xl-4 col-md-6">
									<div class="card overflow-hidden">
										<div class="card-body">
											<div class="item-card7-desc">
												<div class="item-card7-text">
													<a href="jobs.html" class="text-dark">
														<h4 class="font-weight-semibold">Python</h4>
													</a>
												</div>
												<p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit
													voluptatem accusantium doloremque.</p>
											</div>
										</div>
										<div class="card-body py-2">
											<a href="mr-4" class="icons font-weight-semibold text-body"><i
													class="fa fa-inr  text-muted mr-1"></i> 800</a>
											<a class="mr-4 float-right"><i
													class="fa fa-clock-o  text-muted mr-1"></i>Internship</a>
										</div>
										<div class="card-body py-2">
											<div class="d-flex align-items-center mt-auto">
												<img src="../assets/images/products/logo/img1.jpg"
													class="avatar brround avatar-md mr-2" alt="avatar-img">
												<div>
													<a href="profile.html" class="text-default fs-13">Dezignolics</a>
													<small class="d-block text-muted">2 days ago</small>
												</div>
												<div class="ml-auto text-muted">
													<a href="jobs.html" class="btn btn-sm btn-secondary text-white">See
														Details</a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="col-xl-4 col-md-6">
									<div class="card overflow-hidden">
										<div class="power-ribbon power-ribbon-top-left text-warning"><span
												class="bg-warning"><i class="fa fa-bolt"></i></span></div>
										<div class="card-body">
											<div class="item-card7-desc">
												<div class="item-card7-text">
													<a href="jobs.html" class="text-dark">
														<h4 class="font-weight-semibold">Data Analytics</h4>
													</a>
												</div>
												<p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit
													voluptatem accusantium doloremque.</p>
											</div>
										</div>
										<div class="card-body py-2">
											<a href="mr-4" class="icons font-weight-semibold text-body"><i
													class="fa fa-inr  text-muted mr-1"></i> 800</a>
											<a class="mr-4 float-right"><i
													class="fa fa-clock-o  text-muted mr-1"></i>Internship</a>
										</div>
										<div class="card-body py-2">
											<div class="d-flex align-items-center mt-auto">
												<img src="../assets/images/products/logo/img3.jpg"
													class="avatar brround avatar-md mr-3" alt="avatar-img">
												<div>
													<a href="profile.html" class="text-default">Dezignolics</a>
													<small class="d-block text-muted">5 days ago</small>
												</div>
												<div class="ml-auto text-muted">
													<a href="jobs.html" class="btn  btn-sm btn-secondary text-white">See
														Details</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-md-6">
									<div class="card overflow-hidden">
										<div class="ribbon ribbon-top-left text-danger"><span
												class="bg-danger">Free</span></div>
										<div class="card-body">
											<div class="item-card7-desc">
												<div class="item-card7-text">
													<a href="jobs.html" class="text-dark">
														<h4 class="font-weight-semibold">Web Design + Php</h4>
													</a>
												</div>
												<p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit
													voluptatem accusantium doloremque.</p>
											</div>
										</div>
										<div class="card-body py-2">
											<a href="mr-4" class="icons font-weight-semibold text-body"><i
													class="fa fa-inr  text-muted mr-1"></i> 300</a>
											<a class="mr-4 float-right"><i
													class="fa fa-clock-o  text-muted mr-1"></i>Internship</a>
										</div>
										<div class="card-body py-2">
											<div class="d-flex align-items-center mt-auto">
												<img src="../assets/images/products/logo/img4.jpg"
													class="avatar brround avatar-md mr-3" alt="avatar-img">
												<div>
													<a href="profile.html" class="text-default">Dezignolics</a>
													<small class="d-block text-muted">4 days ago</small>
												</div>
												<div class="ml-auto text-muted">
													<a href="jobs.html" class="btn  btn-sm btn-secondary text-white">See
														Details</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-md-6">
									<div class="card">
										<div class="card-body">
											<div class="item-card7-desc">
												<div class="item-card7-text">
													<a href="jobs.html" class="text-dark">
														<h4 class="font-weight-semibold">Web Design + .Net</h4>
													</a>
												</div>
												<p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit
													voluptatem accusantium doloremque.</p>
											</div>
										</div>
										<div class="card-body py-2">
											<a href="mr-4" class="icons font-weight-semibold text-body"><i
													class="fa fa-inr  text-muted mr-1"></i> 300</a>
											<a class="mr-4 float-right"><i
													class="fa fa-clock-o  text-muted mr-1"></i>Internship</a>
										</div>
										<div class="card-body py-2">
											<div class="d-flex align-items-center mt-auto">
												<img src="../assets/images/products/logo/img5.jpg"
													class="avatar brround avatar-md mr-3" alt="avatar-img">
												<div>
													<a href="profile.html" class="text-default">Dezignolics</a>
													<small class="d-block text-muted">2 days ago</small>
												</div>
												<div class="ml-auto text-muted">
													<a href="jobs.html" class="btn  btn-sm btn-secondary text-white">See
														Details</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-md-6">
									<div class="card">
										<div class="card-body">
											<div class="item-card7-desc">
												<div class="item-card7-text">
													<a href="jobs.html" class="text-dark">
														<h4 class="font-weight-semibold">Android</h4>
													</a>
												</div>
												<p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit
													voluptatem accusantium doloremque.</p>
											</div>
										</div>
										<div class="card-body py-2">
											<a href="mr-4" class="icons font-weight-semibold text-body"><i
													class="fa fa-inr  text-muted mr-1"></i> 300</a>
											<a class="mr-4 float-right"><i
													class="fa fa-clock-o  text-muted mr-1"></i>Internship</a>
										</div>
										<div class="card-body py-2">
											<div class="d-flex align-items-center mt-auto">
												<img src="../assets/images/products/logo/img6.jpg"
													class="avatar brround avatar-md mr-3" alt="avatar-img">
												<div>
													<a href="profile.html" class="text-default">Dezignolics</a>
													<small class="d-block text-muted">3 days ago</small>
												</div>
												<div class="ml-auto text-muted">
													<a href="jobs.html" class="btn  btn-sm btn-secondary text-white">See
														Details</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="index3">
							<div class="row">
								<div class="col-xl-4 col-md-6">
									<div class="card overflow-hidden">
										<div class="power-ribbon power-ribbon-top-left text-warning"><span
												class="bg-warning"><i class="fa fa-bolt"></i></span></div>
										<div class="card-body">
											<div class="item-card7-desc">
												<div class="item-card7-text">
													<a href="jobs.html" class="text-dark">
														<h4 class="font-weight-semibold">Data Science</h4>
													</a>
												</div>
												<p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit
													voluptatem accusantium doloremque.</p>
											</div>
										</div>
										<div class="card-body py-2">
											<a href="mr-4" class="icons font-weight-semibold text-body"><i
													class="fa fa-inr  text-muted mr-1"></i> 800</a>
											<a class="mr-4 float-right"><i
													class="fa fa-clock-o  text-muted mr-1"></i>Part Time</a>
										</div>
										<div class="card-body py-2">
											<div class="d-flex align-items-center mt-auto">
												<img src="../assets/images/products/logo/img2.jpg"
													class="avatar brround avatar-md mr-2" alt="avatar-img">
												<div>
													<a href="profile.html" class="text-default">K2F2</a>
													<small class="d-block text-muted">2 days ago</small>
												</div>
												<div class="ml-auto text-muted">
													<a href="jobs.html" class="btn  btn-sm btn-secondary text-white">See
														Details</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="index4">
							<div class="row">

							</div>
						</div>
					</div>
				</div>
				<div class="text-center">
					<a href="" class="btn  btn-primary "> View More</a>
				</div>
			</div>
		</div>
	</section>
	<!--/Latest Jobs-->

	<!--Top Companies-->
	<section class="sptb bg-white">
		<div class="container">
			<div class="section-title center-block text-center">
				<h1>Alumini</h1>
				<p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
			</div>
			<div id="company-carousel" class="owl-carousel owl-carousel-icons4">
				<div class="item h-100">
					<div class="card mb-0">
						<div class="card-body">
							<img src="../assets/new images/company/accenture.png" alt="company1">
						</div>
					</div>
				</div>
				<div class="item">
					<div class="card mb-0">
						<div class="card-body">
							<img src="../assets/new images/company/capgamini.jpg" alt="company1">
						</div>
					</div>
				</div>
				<div class="item">
					<div class="card mb-0">
						<div class="card-body">
							<img src="../assets/new images/company/carwale.png" alt="company1">
						</div>
					</div>
				</div>
				<div class="item">
					<div class="card mb-0">
						<div class="card-body">
							<img src="../assets/new images/company/justdial.png" alt="company1">
						</div>
					</div>
				</div>
				<div class="item">
					<div class="card mb-0">
						<div class="card-body">
							<img src="../assets/new images/company/mindgate.png" alt="company1">
						</div>
					</div>
				</div>
				<div class="item">
					<div class="card mb-0">
						<div class="card-body">
							<img src="../assets/new images/company/peol.JPG" alt="company1">
						</div>
					</div>
				</div>
				<div class="item">
					<div class="card mb-0">
						<div class="card-body">
							<img src="../assets/new images/company/sankey.jpg" alt="company1">
						</div>
					</div>
				</div>
				<div class="item">
					<div class="card mb-0">
						<div class="card-body">
							<img src="../assets/new images/company/techmahindrA.png" alt="company1">
						</div>
					</div>
				</div>


			</div>
		</div>
	</section>
	<!--/Top Companies-->

	<!--Section-->
	<section class="sptb">
		<div class="container">
			<div class="section-title center-block text-center">
				<h1>New Jobs</h1>
				<p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
			</div>
			<div class="owl-carousel owl-carousel-icons2">
				<div class="item">
					<div class="card mb-0">
						<div class="card-body">
							<div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i
										class="fa fa-bolt"></i></span></div>
							<img src="../assets/images/products/logo/logo1.jpg" alt="img"
								class=" avatar avatar-xxl brround mx-auto">
							<div class="item-card2">
								<div class="item-card2-desc">
									<div class="text-center">
										<div class="item-card2-text mt-3">
											<a href="company-list.html" class="text-dark">
												<h4 class="font-weight-bold">Web Developer jobs</h4>
											</a>
										</div>
										<p class="">Emergin</p>
									</div>
									<div class="item-card7-text">
										<ul class="icon-card mb-0">
											<li class=""><a href="#" class="icons"><i
														class="si si-location-pin text-muted mr-1"></i> Los Angles</a>
											</li>
											<li><a href="#" class="icons"><i class="si si-event text-muted mr-1"></i> 5
													hours ago</a></li>
											<li class="mb-0"><a href="#" class="icons"><i
														class="si si-user text-muted mr-1"></i> Sally Peake</a></li>
											<li class="mb-2"><a href="#" class="icons"><i
														class="si si-briefcase text-muted mr-1"></i> 2 Yrs Exp</a></li>
										</ul>
									</div>
									<div class="text-center">
										<a href="company-details.html" class="btn btn-white btn-sm mt-2">5 Positions</a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-footer  p-0">
							<div class=" w-100">
								<a class="float-left w-50 text-center p-2 border-right text-muted" href="#"><i
										class="fa fa-clock-o mr-1"></i> Part Time</a>
								<a class=" float-left w-50 text-center p-2  text-muted" href="#"><i
										class="fa fa-usd mr-1"></i> 32 - 40</a>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="card mb-0">
						<div class="card-body">
							<div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i
										class="fa fa-bolt"></i></span></div>
							<img src="../assets/images/products/logo/logo2.jpg" alt="img"
								class=" avatar avatar-xxl brround mx-auto">
							<div class="item-card2">
								<div class="item-card2-desc">
									<div class="text-center">
										<div class="item-card2-text mt-3">
											<a href="company-list.html" class="text-dark">
												<h4 class="font-weight-bold">Software Developer Jobs</h4>
											</a>
										</div>
										<p class="">Pro.Meet</p>
									</div>
									<div class="item-card7-text">
										<ul class="icon-card mb-0">
											<li class=""><a href="#" class="icons"><i
														class="si si-location-pin text-muted mr-1"></i> Los Angles</a>
											</li>
											<li><a href="#" class="icons"><i class="si si-event text-muted mr-1"></i> 9
													hours ago</a></li>
											<li class="mb-0"><a href="#" class="icons"><i
														class="si si-user text-muted mr-1"></i> Sally Peake</a></li>
											<li class="mb-2"><a href="#" class="icons"><i
														class="si si-briefcase text-muted mr-1"></i> 4 Yrs Exp</a></li>
										</ul>
									</div>
									<div class="text-center">
										<a href="company-details.html" class="btn btn-white btn-sm mt-2">3 Positions</a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-footer  p-0">
							<div class=" w-100">
								<a class="float-left w-50 text-center p-2 border-right text-muted" href="#"><i
										class="fa fa-clock-o mr-1"></i> Full Time</a>
								<a class=" float-left w-50 text-center p-2  text-muted" href="#"><i
										class="fa fa-usd mr-1"></i> 50 - 60</a>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="card mb-0">
						<div class="card-body">
							<img src="../assets/images/products/logo/logo3.jpg" alt="img"
								class=" avatar avatar-xxl brround mx-auto">
							<div class="item-card2">
								<div class="item-card2-desc">
									<div class="text-center">
										<div class="item-card2-text mt-3">
											<a href="company-list.html" class="text-dark">
												<h4 class="font-weight-bold">Hardware Engineer Jobs</h4>
											</a>
										</div>
										<p class="">Ecohomes</p>
									</div>
									<div class="item-card7-text">
										<ul class="icon-card mb-0">
											<li class=""><a href="#" class="icons"><i
														class="si si-location-pin text-muted mr-1"></i> Los Angles</a>
											</li>
											<li><a href="#" class="icons"><i class="si si-event text-muted mr-1"></i> 5
													hours ago</a></li>
											<li class="mb-0"><a href="#" class="icons"><i
														class="si si-user text-muted mr-1"></i> Sally Peake</a></li>
											<li class="mb-2"><a href="#" class="icons"><i
														class="si si-briefcase text-muted mr-1"></i> 2 Yrs Exp</a></li>
										</ul>
									</div>
									<div class="text-center">
										<a href="company-details.html" class="btn btn-white btn-sm mt-2">2 Positions</a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-footer  p-0">
							<div class=" w-100">
								<a class="float-left w-50 text-center p-2 border-right text-muted" href="#"><i
										class="fa fa-clock-o mr-1"></i> Full Time</a>
								<a class=" float-left w-50 text-center p-2  text-muted" href="#"><i
										class="fa fa-usd mr-1"></i> 30 - 40</a>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="card mb-0">
						<div class="card-body">
							<img src="../assets/images/products/logo/logo4.jpg" alt="img"
								class=" avatar avatar-xxl brround mx-auto">
							<div class="item-card2">
								<div class="item-card2-desc">
									<div class="text-center">
										<div class="item-card2-text mt-3">
											<a href="company-list.html" class="text-dark">
												<h4 class="font-weight-bold">Accountant Jobs</h4>
											</a>
										</div>
										<p class="">Emergin</p>
									</div>
									<div class="item-card7-text">
										<ul class="icon-card mb-0">
											<li class=""><a href="#" class="icons"><i
														class="si si-location-pin text-muted mr-1"></i> Los Angles</a>
											</li>
											<li><a href="#" class="icons"><i class="si si-event text-muted mr-1"></i> 5
													hours ago</a></li>
											<li class="mb-0"><a href="#" class="icons"><i
														class="si si-user text-muted mr-1"></i> Sally Peake</a></li>
											<li class="mb-2"><a href="#" class="icons"><i
														class="si si-briefcase text-muted mr-1"></i> 3 Yrs Exp</a></li>
										</ul>
									</div>
									<div class="text-center">
										<a href="company-details.html" class="btn btn-white btn-sm mt-2">4 Positions</a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-footer  p-0">
							<div class=" w-100">
								<a class="float-left w-50 text-center p-2 border-right text-muted" href="#"><i
										class="fa fa-clock-o mr-1"></i> Part Time</a>
								<a class=" float-left w-50 text-center p-2  text-muted" href="#"><i
										class="fa fa-usd mr-1"></i> 12 - 20</a>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="card mb-0">
						<div class="card-body">
							<div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i
										class="fa fa-bolt"></i></span></div>
							<img src="../assets/images/products/logo/logo5.jpg" alt="img"
								class=" avatar avatar-xxl brround mx-auto">
							<div class="item-card2">
								<div class="item-card2-desc">
									<div class="text-center">
										<div class="item-card2-text mt-3">
											<a href="company-list.html" class="text-dark">
												<h4 class="font-weight-bold">HR Recruiter Jobs</h4>
											</a>
										</div>
										<p class="">Pro.Net</p>
									</div>
									<div class="item-card7-text">
										<ul class="icon-card mb-0">
											<li class=""><a href="#" class="icons"><i
														class="si si-location-pin text-muted mr-1"></i> Los Angles</a>
											</li>
											<li><a href="#" class="icons"><i class="si si-event text-muted mr-1"></i> 5
													hours ago</a></li>
											<li class="mb-0"><a href="#" class="icons"><i
														class="si si-user text-muted mr-1"></i> Sally Peake</a></li>
											<li class="mb-2"><a href="#" class="icons"><i
														class="si si-briefcase text-muted mr-1"></i> 1 Yrs Exp</a></li>
										</ul>
									</div>
									<div class="text-center">
										<a href="company-details.html" class="btn btn-white btn-sm mt-2">9 Positions</a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-footer  p-0">
							<div class=" w-100">
								<a class="float-left w-50 text-center p-2 border-right text-muted" href="#"><i
										class="fa fa-clock-o mr-1"></i> Full Time</a>
								<a class=" float-left w-50 text-center p-2  text-muted" href="#"><i
										class="fa fa-usd mr-1"></i> 10 - 15</a>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="card mb-0">
						<div class="card-body">
							<img src="../assets/images/products/logo/logo6.jpg" alt="img"
								class=" avatar avatar-xxl brround mx-auto">
							<div class="item-card2">
								<div class="item-card2-desc">
									<div class="text-center">
										<div class="item-card2-text mt-3">
											<a href="company-list.html" class="text-dark">
												<h4 class="font-weight-bold">Sales Executive Jobs</h4>
											</a>
										</div>
										<p class="">Team Work</p>
									</div>
									<div class="item-card7-text">
										<ul class="icon-card mb-0">
											<li class=""><a href="#" class="icons"><i
														class="si si-location-pin text-muted mr-1"></i> Los Angles</a>
											</li>
											<li><a href="#" class="icons"><i class="si si-event text-muted mr-1"></i> 5
													hours ago</a></li>
											<li class="mb-0"><a href="#" class="icons"><i
														class="si si-user text-muted mr-1"></i> Sally Peake</a></li>
											<li class="mb-2"><a href="#" class="icons"><i
														class="si si-briefcase text-muted mr-1"></i> 3 Yrs Exp</a></li>
										</ul>
									</div>
									<div class="text-center">
										<a href="company-details.html" class="btn btn-white btn-sm mt-2">3 Positions</a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-footer  p-0">
							<div class=" w-100">
								<a class="float-left w-50 text-center p-2 border-right text-muted" href="#"><i
										class="fa fa-clock-o mr-1"></i> Full Time</a>
								<a class=" float-left w-50 text-center p-2  text-muted" href="#"><i
										class="fa fa-usd mr-1"></i> 19 - 28</a>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="card mb-0">
						<div class="card-body">
							<img src="../assets/images/products/logo/logo7.jpg" alt="img"
								class=" avatar avatar-xxl brround mx-auto">
							<div class="item-card2">
								<div class="item-card2-desc">
									<div class="text-center">
										<div class="item-card2-text mt-3">
											<a href="company-list.html" class="text-dark">
												<h4 class="font-weight-bold">HR Executive Jobs</h4>
											</a>
										</div>
										<p class="">Ecohomes</p>
									</div>
									<div class="item-card7-text">
										<ul class="icon-card mb-0">
											<li class=""><a href="#" class="icons"><i
														class="si si-location-pin text-muted mr-1"></i> Los Angles</a>
											</li>
											<li><a href="#" class="icons"><i class="si si-event text-muted mr-1"></i> 5
													hours ago</a></li>
											<li class="mb-0"><a href="#" class="icons"><i
														class="si si-user text-muted mr-1"></i> Sally Peake</a></li>
											<li class="mb-2"><a href="#" class="icons"><i
														class="si si-briefcase text-muted mr-1"></i> 2 Yrs Exp</a></li>
										</ul>
									</div>
									<div class="text-center">
										<a href="company-details.html" class="btn btn-white btn-sm mt-2">2 Positions</a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-footer  p-0">
							<div class=" w-100">
								<a class="float-left w-50 text-center p-2 border-right text-muted" href="#"><i
										class="fa fa-clock-o mr-1"></i> Part Time</a>
								<a class=" float-left w-50 text-center p-2  text-muted" href="#"><i
										class="fa fa-usd mr-1"></i> 12 - 32</a>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="card mb-0">
						<div class="card-body">
							<div class="power-ribbon power-ribbon-top-left text-warning"><span class="bg-warning"><i
										class="fa fa-bolt"></i></span></div>
							<img src="../assets/images/products/logo/logo8.jpg" alt="img"
								class=" avatar avatar-xxl brround mx-auto">
							<div class="item-card2">
								<div class="item-card2-desc">
									<div class="text-center">
										<div class="item-card2-text mt-3">
											<a href="company-list.html" class="text-dark">
												<h4 class="font-weight-bold">Accountant Jobs</h4>
											</a>
										</div>
										<p class="">Pro.meet</p>
									</div>
									<div class="item-card7-text">
										<ul class="icon-card mb-0">
											<li class=""><a href="#" class="icons"><i
														class="si si-location-pin text-muted mr-1"></i> Los Angles</a>
											</li>
											<li><a href="#" class="icons"><i class="si si-event text-muted mr-1"></i> 5
													hours ago</a></li>
											<li class="mb-0"><a href="#" class="icons"><i
														class="si si-user text-muted mr-1"></i> Sally Peake</a></li>
											<li class="mb-2"><a href="#" class="icons"><i
														class="si si-briefcase text-muted mr-1"></i> 1 Yrs Exp</a></li>
										</ul>
									</div>
									<div class="text-center">
										<a href="company-details.html" class="btn btn-white btn-sm mt-2">8 Positions</a>
									</div>
								</div>
							</div>
						</div>
						<div class="card-footer  p-0">
							<div class=" w-100">
								<a class="float-left w-50 text-center p-2 border-right text-muted" href="#"><i
										class="fa fa-clock-o mr-1"></i> Full Time</a>
								<a class=" float-left w-50 text-center p-2  text-muted" href="#"><i
										class="fa fa-usd mr-1"></i> 12 - 40</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/Section-->

	<!--Section-->
	<section class="sptb bg-white border-top">
		<div class="container">
			<div class="row no-gutters row-deck find-job">
				<div class="col-md-6">
					<div class="bg-light p-0 box-shadow2 border-transparent">
						<div class="card-body text-center">
							<div class="bg-white icon-bg  icon-service text-purple mb-4">
								<img src="../assets/images/svgs/jobs/find.svg" alt="img">
							</div>
							<h6 class="card-title fs-18 mb-4">Do You Want to Find a Job?</h6>
							<p>it look like readable English. Many desktop publishing packages and web page editors now
								use Lorem Ipsum as their default model text</p>
							<a href="jobs-list.html" class="btn btn-primary text-white">Find Job</a>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="bg-white p-0 mt-5 mt-md-0 border box-shadow2">
						<div class="card-body text-center">
							<div class="bg-light icon-bg  icon-service text-purple mb-4">
								<img src="../assets/images/svgs/jobs/work.svg" alt="img">
							</div>
							<h6 class="card-title fs-18 mb-4">Are You Looking For A Candidate?</h6>
							<p>it look like readable English. Many desktop publishing packages and web page editors now
								use Lorem Ipsum as their default model text</p>
							<a href="candidate-listing.html" class="btn btn-primary text-white">Find Candidate</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/Section-->

	<!--Testimonials-->
	<section class="sptb position-relative pattern">
		<div class="container">
			<div class="section-title center-block text-center">
				<h1 class="text-white position-relative">Testimonials</h1>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div id="myCarousel" class="owl-carousel testimonial-owl-carousel">
						<div class="item text-center">
							<div class="row">
								<div class="col-xl-8 col-md-12 d-block mx-auto">
									<div class="testimonia">
										<p class="text-white-80">
											<i class="fa fa-quote-left text-white-80"></i> It was very good opportunity
											for us and it was quite a good experience. We got to learn new things.
											Teaching staff are good . They support us to solve a error's . Thank You for
											the internship.
										</p>
										<h3 class="title">Ejaz Ahammed</h3>
										<span class="post">Web Developer</span>
										<div class="rating-stars">
											<input type="number" readonly="readonly" class="rating-value star"
												name="rating-stars-value" value="4">
											<div class="rating-stars-container">
												<div class="rating-star sm">
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-star sm">
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-star sm">
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-star sm">
													<i class="fa fa-star"></i>
												</div>
												<div class="rating-star sm">
													<i class="fa fa-star"></i>
												</div>
											</div>
										</div>
										<div class="owl-controls clickable">
											<div class="owl-pagination">
												<div class="owl-page active">
													<span class=""></span>
												</div>
												<div class="owl-page ">
													<span class=""></span>
												</div>
												<div class="owl-page">
													<span class=""></span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item text-center">
							<div class="row">
								<div class="col-xl-8 col-md-12 d-block mx-auto">
									<div class="testimonia">
										<p class="text-white-80"><i class="fa fa-quote-left"></i> It was very good
											opportunity for us and it was quite a good experience. We got to learn new
											things. Teaching staff are good . They support us to solve a error's . Thank
											You for the internship. </p>
										<div class="testimonia-data">
											<h3 class="title">Shrinath Bhosale</h3>
											<span class="post">Web Developer</span>
											<div class="rating-stars">
												<input type="number" readonly="readonly" class="rating-value star"
													name="rating-stars-value" value="3">
												<div class="rating-stars-container">
													<div class="rating-star sm">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm">
														<i class="fa fa-star"></i>
													</div>
												</div>
												<div class="owl-controls clickable">
													<div class="owl-pagination">
														<div class="owl-page ">
															<span class=""></span>
														</div>
														<div class="owl-page active">
															<span class=""></span>
														</div>
														<div class="owl-page">
															<span class=""></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item text-center">
							<div class="row">
								<div class="col-xl-8 col-md-12 d-block mx-auto">
									<div class="testimonia">
										<p class="text-white-80"><i class="fa fa-quote-left"></i>loved a lot working
											with you amazing peoples. I really felt profession environment,through out
											the internship i wish we will meet soon again..with a new amazing ideas</p>
										<div class="testimonia-data">
											<h3 class="title">Manasi Shedale</h3>
											<span class="post">Web Developer</span>
											<div class="rating-stars">
												<input type="number" readonly="readonly" class="rating-value star"
													name="rating-stars-value" value="3">
												<div class="rating-stars-container">
													<div class="rating-star sm">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm">
														<i class="fa fa-star"></i>
													</div>
													<div class="rating-star sm">
														<i class="fa fa-star"></i>
													</div>
												</div>
												<div class="owl-controls clickable">
													<div class="owl-pagination">
														<div class="owl-page ">
															<span class=""></span>
														</div>
														<div class="owl-page">
															<span class=""></span>
														</div>
														<div class="owl-page active">
															<span class=""></span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/Testimonials-->

	<!--Blogs-->
	<section class="sptb bg-white">
		<div class="container">
			<div class="section-title center-block text-center">
				<h1>News</h1>
				<p>Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur vehicula</p>
			</div>
			<div id="defaultCarousel" class="owl-carousel Card-owlcarousel owl-carousel-icons">
				<div class="item">
					<div class="card mb-0">
						<div class="item7-card-img">
							<a href="#"></a>
							<img src="../assets/images/products/products/ed1.jpg" alt="img" class="cover-image">
						</div>
						<div class="card-body p-4">
							<div class="item7-card-desc d-flex mb-2">
								<a href="#"><i class="fa fa-calendar-o text-muted mr-2"></i>Dec-03-2018</a>
								<div class="ml-auto">
									<a href="#"><i class="fa fa-comment-o text-muted mr-2"></i>4 Comments</a>
								</div>
							</div>
							<a href="blog-details.html" class="text-dark">
								<h4 class="font-weight-semibold">Excepteur occaecat cupidatat</h4>
							</a>
							<p>Ut enim ad minima veniam, quis exercitationem, enim ad minima veniam, quis nostrum
								exercitationem </p>
							<div class="d-flex align-items-center pt-2 mt-auto">
								<img src="../assets/images/users/male/5.jpg" class="avatar brround avatar-md mr-3"
									alt="avatar-img">
								<div>
									<a href="profile.html" class="text-default">Joanne Nash</a>
									<small class="d-block text-muted">1 day ago</small>
								</div>
								<div class="ml-auto text-muted">
									<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i
											class="fe fe-heart mr-1"></i></a>
									<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i
											class="fa fa-thumbs-o-up"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="card mb-0">
						<div class="item7-card-img">
							<a href="#"></a>
							<img src="../assets/images/products/products/j2.jpg" alt="img" class="cover-image">
						</div>
						<div class="card-body p-4">
							<div class="item7-card-desc d-flex mb-2">
								<a href="#"><i class="fa fa-calendar-o text-muted mr-2"></i>Nov-28-2018</a>
								<div class="ml-auto">
									<a href="#"><i class="fa fa-comment-o text-muted mr-2"></i>2 Comments</a>
								</div>
							</div>
							<a href="blog-details.html" class="text-dark">
								<h4 class="font-weight-semibold">Sed ut perspiciatis unde iste</h4>
							</a>
							<p>Ut enim ad minima veniam, quis exercitationem, enim ad minima veniam, quis nostrum
								exercitationem </p>
							<div class="d-flex align-items-center pt-2 mt-auto">
								<img src="../assets/images/users/male/7.jpg" class="avatar brround avatar-md mr-3"
									alt="avatar-img">
								<div>
									<a href="profile.html" class="text-default">Tanner Mallari</a>
									<small class="d-block text-muted">2 days ago</small>
								</div>
								<div class="ml-auto text-muted">
									<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i
											class="fe fe-heart mr-1"></i></a>
									<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i
											class="fa fa-thumbs-o-up"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="card mb-0">
						<div class="item7-card-img">
							<a href="#"></a>
							<img src="../assets/images/products/products/ed2.jpg" alt="img" class="cover-image">
						</div>
						<div class="card-body p-4">
							<div class="item7-card-desc d-flex mb-2">
								<a href="#"><i class="fa fa-calendar-o text-muted mr-2"></i>Nov-19-2018</a>
								<div class="ml-auto">
									<a href="#"><i class="fa fa-comment-o text-muted mr-2"></i>8 Comments</a>
								</div>
							</div>
							<a href="blog-details.html" class="text-dark">
								<h4 class="font-weight-semibold">At vero eos et accusamus et iusto</h4>
							</a>
							<p>Ut enim ad minima veniam, quis exercitationem, enim ad minima veniam, quis nostrum
								exercitationem </p>
							<div class="d-flex align-items-center pt-2 mt-auto">
								<img src="../assets/images/users/female/15.jpg" class="avatar brround avatar-md mr-3"
									alt="avatar-img">
								<div>
									<a href="profile.html" class="text-default">Aracely Bashore</a>
									<small class="d-block text-muted">5 days ago</small>
								</div>
								<div class="ml-auto text-muted">
									<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i
											class="fe fe-heart mr-1"></i></a>
									<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i
											class="fa fa-thumbs-o-up"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="card mb-0">
						<div class="item7-card-img">
							<a href="#"></a>
							<img src="../assets/images/products/products/ed5.jpg" alt="img" class="cover-image">
						</div>
						<div class="card-body p-4">
							<div class="item7-card-desc d-flex mb-2">
								<a href="#"><i class="fa fa-calendar-o text-muted mr-2"></i>Dec-03-2018</a>
								<div class="ml-auto">
									<a href="#"><i class="fa fa-comment-o text-muted mr-2"></i>4 Comments</a>
								</div>
							</div>
							<a href="blog-details.html" class="text-dark">
								<h4 class="font-weight-semibold">Excepteur occaecat cupidatat</h4>
							</a>
							<p>Ut enim ad minima veniam, quis exercitationem, enim ad minima veniam, quis nostrum
								exercitationem </p>
							<div class="d-flex align-items-center pt-2 mt-auto">
								<img src="../assets/images/users/male/15.jpg" class="avatar brround avatar-md mr-3"
									alt="avatar-img">
								<div>
									<a href="profile.html" class="text-default">Royal Hamblin</a>
									<small class="d-block text-muted">10 days ago</small>
								</div>
								<div class="ml-auto text-muted">
									<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i
											class="fe fe-heart mr-1"></i></a>
									<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i
											class="fa fa-thumbs-o-up"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="card mb-0">
						<div class="item7-card-img">
							<a href="#"></a>
							<img src="../assets/images/products/products/j3.jpg" alt="img" class="cover-image">
						</div>
						<div class="card-body p-4">
							<div class="item7-card-desc d-flex mb-2">
								<a href="#"><i class="fa fa-calendar-o text-muted mr-2"></i>Nov-28-2018</a>
								<div class="ml-auto">
									<a href="#"><i class="fa fa-comment-o text-muted mr-2"></i>2 Comments</a>
								</div>
							</div>
							<a href="blog-details.html" class="text-dark">
								<h4 class="font-weight-semibold">Sed ut perspiciatis unde omnis iste</h4>
							</a>
							<p>Ut enim ad minima veniam, quis exercitationem, enim ad minima veniam, quis nostrum
								exercitationem </p>
							<div class="d-flex align-items-center pt-2 mt-auto">
								<img src="../assets/images/users/female/5.jpg" class="avatar brround avatar-md mr-3"
									alt="avatar-img">
								<div>
									<a href="profile.html" class="text-default">Rosita Chatmon</a>
									<small class="d-block text-muted">10 days ago</small>
								</div>
								<div class="ml-auto text-muted">
									<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i
											class="fe fe-heart mr-1"></i></a>
									<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i
											class="fa fa-thumbs-o-up"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="card mb-0">
						<div class="item7-card-img">
							<a href="#"></a>
							<img src="../assets/images/products/products/ed7.jpg" alt="img" class="cover-image">
						</div>
						<div class="card-body p-4">
							<div class="item7-card-desc d-flex mb-2">
								<a href="#"><i class="fa fa-calendar-o text-muted mr-2"></i>Nov-19-2018</a>
								<div class="ml-auto">
									<a href="#"><i class="fa fa-comment-o text-muted mr-2"></i>8 Comments</a>
								</div>
							</div>
							<a href="blog-details.html" class="text-dark">
								<h4 class="font-weight-semibold">At vero eos et accusamus et iusto</h4>
							</a>
							<p>Ut enim ad minima veniam, quis exercitationem, enim ad minima veniam, quis nostrum
								exercitationem </p>
							<div class="d-flex align-items-center pt-2 mt-auto">
								<img src="../assets/images/users/male/6.jpg" class="avatar brround avatar-md mr-3"
									alt="avatar-img">
								<div>
									<a href="profile.html" class="text-default">Loyd Nolf</a>
									<small class="d-block text-muted">15 days ago</small>
								</div>
								<div class="ml-auto text-muted">
									<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i
											class="fe fe-heart mr-1"></i></a>
									<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i
											class="fa fa-thumbs-o-up"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--Blogs-->

	@endsection

