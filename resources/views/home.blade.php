@extends('layouts.app')

@section('top_bar')

@include('topbar')

@endsection

@section('content')
<!--Sliders Section-->
<!--Sliders Section-->
<section class="bg-light animation-background">
	<div class="container">
		<div class="row">
			<div class="col-xl-6 col-lg-7 col-md-7 col-md-auto">
				<div class="sptb mx-auto text-center d-none d-lg-block">
					<img alt="img" class="w-100 h-100 float-md-right floating" src="./assets/images/demo.png">
				</div>
			</div>
			<div class="col-xl-5  col-lg-5 col-md-12 mx-auto d-block">
				<div class="sptb ">
					<div class="card mb-0 shadow-none">
						<div class="card-body section-title">
							<div class="mb-5">
								<h1 class="mb-1 text-capitalize">Search Your Suitable Job</h1>
							</div>
							<div class="row">
								<div class="col-lg-12 col-md-12 d-block mx-auto">
									<div class="bg-transparent">
										<div class="form">
											<div class="form-group bg-white">
												<label class="form-label text-dark">Key
													Skills</label>
												<input class="form-control" id="text4" placeholder="Key Skills, Designation" type="text">
											</div>
											<div class="form-group">
												<label class="form-label text-dark">loaction</label>
												<input class="form-control" id="text5" placeholder="Select Location" type="text">
											</div>
											<div class="form-group">
												<label class="form-label text-dark">Category</label>
												<select class="form-control input-lg select2-no-search" data-placeholder="Select Category">
													<optgroup label="Categories">
														<option>All Categories</option>
														<option value="1">Computer / IT
															Internship</option>
														<option value="2">Marketing Internship
														</option>
														<option value="3">Finance Internship
														</option>
														<option value="4">Media Internship
														</option>
														<option value="5">Civil Internship
														</option>
														<option value="6">Mechanical Internship
														</option>
														<option value="7">Digital Marketing
															Internship</option>
														<option value="8">HR Internship</option>

													</optgroup>
												</select>
											</div>
											<div class="form-group">
												<label class="form-label text-dark">Job
													Type</label>
												<select class="form-control input-lg select2-no-search" data-placeholder="Select Category">
													<optgroup label="Categories">
														<option>All</option>
														<option value="1">Full Time Jobs
														</option>
														<option value="1">Part Time Jobs
														</option>
														<option value="2">Work From Home
														</option>
														<option value="3">Internships</option>
													</optgroup>
												</select>
											</div>
											<div class="mb-0">
												<a class="btn btn-lg btn-block btn-primary" href="#">Search Here</a>
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
<!--Sliders Section-->

<!--Statistics-->
<section class="sptb bg-white">
	<div class="container">
		<div class="section-title center-block text-center">
			<h1>Job Type</h1>
		</div>
		<div class="item-all-cat">
			<div class="row category-type">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="item-all-card text-dark text-center card mb-lg-0">
						<a href="jobs-list.html"></a>
						<div class="iteam-all-icon1 ">
							<img alt="Sales" class=" imag-service" src="./assets/images/svgs/jobs/house-white.svg">
						</div>
						<div class="item-all-text mt-3">
							<h5 class="mb-0 text-body">Work From Home</h5>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="item-all-card text-dark text-center card mb-lg-0">
						<a href="jobs-list-internship.html"></a>
						<div class="iteam-all-icon1">
							<img alt="Driver" class="imag-service" src="./assets/images/svgs/jobs/calendar-white.svg">
						</div>
						<div class="item-all-text mt-3">
							<h5 class="mb-0 text-body">Internship + Stipend</h5>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="item-all-card text-dark text-center card  mb-sm-0">
						<a href="jobs-list2.html"></a>
						<div class="iteam-all-icon1">
							<img alt="IT-Hardware" class="imag-service" src="./assets/images/svgs/jobs/hourglass-white.svg">
						</div>
						<div class="item-all-text mt-3">
							<h5 class="mb-0 text-body">Part Time</h5>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="item-all-card text-dark text-center card mb-0">
						<a href="jobs-list3.html"></a>
						<div class="iteam-all-icon1">
							<img alt="Software" class="imag-service" src="./assets/images/svgs/jobs/businessman-white.svg">
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

<!--Categories-->
<section class="sptb bg-light">
	<div class="container">
		<div class="section-title center-block text-center">
			<h1>Training + Internships</h1>
		</div>
		<div class="item-all-cat center-block text-center education-categories">
			<div class="row">
				<div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
					<div class="item-all-card text-dark text-center">
						<a href="jobs-list.html"></a>
						<div class="iteam-all-icon">
							<img alt="Cashier" class="imag-service" src="./assets/new images/python-file.png">
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
							<img alt="beautician" class="imag-service" src="./assets/new images/math.png">
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
							<img alt="Driver" class="imag-service" src="./assets/new images/machine-learning.png">
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
							<img alt="Hardware" class="imag-service" src="./assets/new images/iot.png">
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
							<img alt="operator" class="imag-service" src="./assets/new images/java.png">
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
							<img alt="nurse" class="imag-service" src="./assets/new images/development.png">
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
							<img alt="truck" class="imag-service" src="./assets/new images/blog.png">
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
							<img alt="web" class="imag-service" src="./assets/new images/android.png">
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
							<img alt="presentation" class="imag-service" src="./assets/new images/website-design.png">
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
							<img alt="Life Insurance" class="imag-service" src="./assets/new images/picture.png">
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
							<img alt="charts" class="imag-service" src="./assets/new images/php.png">
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
							<img alt="cooking" class="imag-service" src="./assets/new images/dotnet.png">
						</div>
						<div class="item-all-text mt-3">
							<h5 class="mb-0 text-body">.Net</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="mt-4">
				<a class="btn  btn-primary" href="#">View More</a>
			</div>
		</div>
	</div>
</section>
<!--Categories-->

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
						<!-- <img alt="img" class=" avatar avatar-xxl brround mx-auto"
                                src="./assets/images/users/male/1.jpg"> -->
						<div class="item-card2">
							<div class="item-card2-desc text-center">
								<div class="item-card2-text mt-3">
									<a class="text-dark" href="company-list.html">
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
								<p><i class="fa fa-quote-left "></i> Hey I got the job!
									Excellent Training Institute
									were you can learn how to work in an organization, build up
									your personality and
									good support through out the course. Here I carried out .NET
									course which helped
									me to learn new technology and build up a new personality
									too.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="card mb-0">
					<div class="card-body">
						<!-- <img alt="img" class=" avatar avatar-xxl brround mx-auto"
                                src="./assets/images/users/female/1.jpg"> -->
						<div class="item-card2">
							<div class="item-card2-desc text-center">
								<div class="item-card2-text mt-3">
									<a class="text-dark" href="company-list.html">
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
								<p><i class="fa fa-quote-left"></i> Best training center for
									student to learn and
									take experience.it was an amazing training center. The
									tutors are well-trained,
									knowledgeable, friendly and helpful, they guided us in the
									best way. I feel very
									positive . I am happy and excited that I
									got job in "21 St century Informatics ". I am thankful to
									Dcodetech.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="card mb-0">
					<div class="card-body">
						<!-- <img alt="img" class=" avatar avatar-xxl brround mx-auto"
                                src="./assets/images/users/female/2.jpg"> -->
						<div class="item-card2">
							<div class="item-card2-desc text-center">
								<div class="item-card2-text mt-3">
									<a class="text-dark" href="company-list.html">
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
								<p><i class="fa fa-quote-left "></i> Recently i got a job as a
									Associate Software
									Engineer. I cannot express how great the training was and
									the overall
									managment,trainners,staff of the dcodetech. I would
									defintely recommend this to
									my friends to Join trainning at dcodetech. Thank you !!</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="card mb-0">
					<div class="card-body">
						<!-- <img alt="img" class=" avatar avatar-xxl brround mx-auto"
                                src="./assets/images/users/male/21.jpg"> -->
						<div class="item-card2">
							<div class="item-card2-desc text-center">
								<div class="item-card2-text mt-3">
									<a class="text-dark" href="company-list.html">
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
								<p><i class="fa fa-quote-left "></i> I have got a job in "21st
									century informatics".
									I did certification in .net from dcodetech .Thanks to
									dcodetech team to
									motivating me how to build up in organization and
									personality too .Thanks to
									trainers who have build up my logics . I am very glad that I
									was part of
									dcodetech. Thanks a lot !</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="card mb-0">
					<div class="card-body">
						<!-- <img alt="img" class=" avatar avatar-xxl brround mx-auto"
                                src="./assets/images/users/female/11.jpg"> -->
						<div class="item-card2">
							<div class="item-card2-desc text-center">
								<div class="item-card2-text mt-3">
									<a class="text-dark" href="company-list.html">
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
								<p><i class="fa fa-quote-left "></i> I got the job as a java
									developer in a reputed
									organization by joining here in dcodetech.This is well know
									for computer
									training center. I was completed Java training from this
									center last year. They
									have good faculty of all courses. If we are talking about
									placement they are
									offering lots of placement.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="card mb-0">
					<div class="card-body">
						<!-- <img alt="img" class=" avatar avatar-xxl brround mx-auto"
                                src="./assets/images/users/male/12.jpg"> -->
						<div class="item-card2">
							<div class="item-card2-desc text-center">
								<div class="item-card2-text mt-3">
									<a class="text-dark" href="company-list.html">
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
								<p><i class="fa fa-quote-left "></i> As i got the job and i am
									excited to share my
									views for the reason that I
									got the knowledge thoroughly from here (Dcodetech). I found
									that all the
									technical aspect of knowledge of trainer here is very
									commendable and
									outstanding. I
									wiil be grateful to them always. Thanks ! Again.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="card mb-0">
					<div class="card-body">
						<!-- <img alt="img" class=" avatar avatar-xxl brround mx-auto"
                                src="./assets/images/users/female/15.jpg"> -->
						<div class="item-card2">
							<div class="item-card2-desc text-center">
								<div class="item-card2-text mt-3">
									<a class="text-dark" href="company-list.html">
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
								<p><i class="fa fa-quote-left "></i> I Got Job Hurrey !!! By
									joining at Dcodetech,
									Because of them only i got the job in reputed IT
									organisation immediately after
									completion of my dot net course. Thanks! to Decodetech.
									Specially
									"Reshma Mam" who motivates me in whole course duration.
									Thanks! again to
									Decodtech!
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="card mb-0">
					<div class="card-body">
						<!-- <img alt="img" class=" avatar avatar-xxl brround mx-auto"
                                src="./assets/images/users/female/17.jpg"> -->
						<div class="item-card2">
							<div class="item-card2-desc text-center">
								<div class="item-card2-text mt-3">
									<a class="text-dark" href="company-list.html">
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
							<div class="product-filter-icons">
								<p class=" text-justify"><i class="fa fa-quote-left "></i> I got
									a job from
									Dcodetech as
									PHP Developer.
									All the trainers are well-experienced and supportive. My
									Experience
									at Dcodetech was very good." I can make my own projects in
									PHP after learning
									from Dcodetech,my skills are improved, Dcodetech is the best
									place to learn Web & Software development skills.</p>
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
<section class="sptb bg-light">
	<div class="container">
		<div class="section-title center-block text-center">
			<h1>Latest Jobs</h1>

		</div>
		<div class="panel panel-primary">
			<div class="">
				<div class="tabs-menu ">
					<!-- Tabs -->
					<ul class="nav panel-tabs jobs-tabs mb-6">
						<li class=""><a class="active show" data-toggle="tab" href="#index1">All</a></li>
						<li><a class="" data-toggle="tab" href="#index2">Full Time</a></li>
						<li><a class="" data-toggle="tab" href="#index3">Part Time</a></li>
						<li><a class="" data-toggle="tab" href="#index4">Work From Home </a>
						</li>
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
												<a class="text-dark" href="jobs-full-time.html">
													<h4 class="font-weight-semibold">PHP &
														CodeIgniter,MySQL</h4>
												</a>
											</div>
											<p class="mb-0">Microlan is a Digital Business solutions company based in Mumbai (India) providing
												Customized Software Development, Product development, Web Application Development,
												Mobile Application Development and IT Consulting Services.</p>
										</div>
									</div>
									<div class="card-body py-2">
										<a class="icons font-weight-semibold text-body" href="mr-4"><i class="fa fa-inr  text-muted mr-1"></i> 2,00,000 - 4,00,000</a>
										<a class="mr-4 float-right"><i class="fa fa-clock-o  text-muted mr-1"></i>Full Time Job</a>
									</div>
									<div class="card-body py-2">
										<div class="d-flex align-items-center mt-auto">
											<img alt="avatar-img" class="avatar brround avatar-md mr-2" src="./assets/new%20images/logo%20(1).png">
											<div>
												<a class="text-default fs-13" href="profile.html">Microlan IT
													services pvt. ltd.</a>
												<small class="d-block text-muted">2 days
													ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a class="btn btn-sm btn-secondary text-white" href="jobs-full-time.html">See
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
												<a class="text-dark" href="jobs-part-time2.html">
													<h4 class="font-weight-semibold">Python, Data Science</h4>
												</a>
											</div>
											<p class="mb-0">K2S2 Digistrat Solutions Pvt. Ltd. (Formerly K2S2 Consultants) works as Digital
												Transformation Partner for organizations that wish to transform their business
												digitally.</p>
										</div>
									</div>
									<div class="card-body py-2">
										<a class="icons font-weight-semibold text-body" href="mr-4"><i class="fa fa-inr  text-muted mr-1"></i> 1,00,000 - 3,00,000</a>
										<a class="mr-4 float-right"><i class="fa fa-clock-o  text-muted mr-1"></i>Part Time Job</a>
									</div>
									<div class="card-body py-2">
										<div class="d-flex align-items-center mt-auto">
											<img alt="avatar-img" class="avatar brround avatar-md mr-3" src="./assets/new%20images/logo1.png">
											<div>
												<a class="text-default" href="profile.html">K2S2
													Digistrat Solutions Pvt. Ltd </a>
												<small class="d-block text-muted">2 days
													ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a class="btn  btn-sm btn-secondary text-white" href="jobs-part-time2.html">See
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
												<a class="text-dark" href="jobs3.html">
													<h4 class="font-weight-semibold">Web Design </h4>
												</a>
											</div>
											<p class="mb-0">K2S2 Digistrat Solutions Pvt. Ltd. (Formerly K2S2 Consultants) works as Digital
												Transformation Partner for organizations that wish to transform their business
												digitally.</p>
										</div>
									</div>
									<div class="card-body py-2">
										<a class="icons font-weight-semibold text-body" href="mr-4"><i class="fa fa-inr  text-muted mr-1"></i> 1,00,000 to 1,50,000</a>
										<a class="mr-4 float-right"><i class="fa fa-clock-o  text-muted mr-1"></i>Work From Home</a>
									</div>
									<div class="card-body py-2">
										<div class="d-flex align-items-center mt-auto">
											<img alt="avatar-img" class="avatar brround avatar-md mr-3" src="./assets/new%20images/logo1.png">
											<div>
												<a class="text-default" href="profile.html">K2S2
													Digistrat
													Solutions Pvt. Ltd </a>
												<small class="d-block text-muted">3 days
													ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a class="btn  btn-sm btn-secondary text-white" href="jobs3.html">See
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
												<a class="text-dark" href="jobs2.html">
													<h4 class="font-weight-semibold">Python, Data Science</h4>
												</a>
											</div>
											<p class="mb-0">K2S2 Digistrat Solutions Pvt. Ltd. (Formerly K2S2 Consultants) works as Digital
												Transformation Partner for organizations that wish to transform their business
												digitally.</p>
										</div>
									</div>
									<div class="card-body py-2">
										<a class="icons font-weight-semibold text-body" href="mr-4"><i class="fa fa-inr  text-muted mr-1"></i> 1,00,000 to 2,00,000</a>
										<a class="mr-4 float-right"><i class="fa fa-clock-o  text-muted mr-1"></i>Work From Home</a>
									</div>
									<div class="card-body py-2">
										<div class="d-flex align-items-center mt-auto">
											<img alt="avatar-img" class="avatar brround avatar-md mr-3" src="./assets/new%20images/logo1.png">
											<div>
												<a class="text-default" href="profile.html">K2S2
													Digistrat Solutions Pvt. Ltd </a>
												<small class="d-block text-muted">2 days
													ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a class="btn  btn-sm btn-secondary text-white" href="jobs2.html">See
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
												<a class="text-dark" href="jobs-full-time3.html">
													<h4 class="font-weight-semibold">Web Design </h4>
												</a>
											</div>
											<p class="mb-0">K2S2 Digistrat Solutions Pvt. Ltd. (Formerly K2S2 Consultants) works as Digital
												Transformation Partner for organizations that wish to transform their business
												digitally.</p>
										</div>
									</div>
									<div class="card-body py-2">
										<a class="icons font-weight-semibold text-body" href="mr-4"><i class="fa fa-inr  text-muted mr-1"></i> 1,00,000 - 3,00,000</a>
										<a class="mr-4 float-right"><i class="fa fa-clock-o  text-muted mr-1"></i>Full Time Job</a>
									</div>
									<div class="card-body py-2">
										<div class="d-flex align-items-center mt-auto">
											<img alt="avatar-img" class="avatar brround avatar-md mr-3" src="./assets/new%20images/logo1.png">
											<div>
												<a class="text-default" href="profile.html">K2S2
													Digistrat
													Solutions Pvt. Ltd </a>
												<small class="d-block text-muted">3 days
													ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a class="btn  btn-sm btn-secondary text-white" href="jobs-full-time3.html">See
													Details</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-6">
								<div class="card overflow-hidden">
									<div class="card-body">
										<div class="item-card7-desc">
											<div class="item-card7-text">
												<a class="text-dark" href="jobs-part-time.html">
													<h4 class="font-weight-semibold">PHP &
														CodeIgniter,MySQL</h4>
												</a>
											</div>
											<p class="mb-0">Microlan is a Digital Business solutions company based in Mumbai (India) providing
												Customized Software Development, Product development, Web Application Development,
												Mobile Application Development and IT Consulting Services.</p>
										</div>
									</div>
									<div class="card-body py-2">
										<a class="icons font-weight-semibold text-body" href="mr-4"><i class="fa fa-inr  text-muted mr-1"></i> 1,50,000 - 3,50,000</a>
										<a class="mr-4 float-right"><i class="fa fa-clock-o  text-muted mr-1"></i>Part Time Job</a>
									</div>
									<div class="card-body py-2">
										<div class="d-flex align-items-center mt-auto">
											<img alt="avatar-img" class="avatar brround avatar-md mr-2" src="./assets/new%20images/logo%20(1).png">
											<div>
												<a class="text-default fs-13" href="profile.html">Microlan IT
													services pvt. ltd.</a>
												<small class="d-block text-muted">2 days
													ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a class="btn btn-sm btn-secondary text-white" href="jobs-part-time.html">See
													Details</a>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- <div class="col-xl-4 col-md-6">
                                    <div class="card overflow-hidden">
                                        <div class="card-body">
                                            <div class="item-card7-desc">
                                                <div class="item-card7-text">
                                                    <a class="text-dark" href="jobs.html">
                                                        <h4 class="font-weight-semibold">Python +
                                                            Django</h4>
                                                    </a>
                                                </div>
                                                <p class="mb-0">Sed ut perspiciatis unde omnis iste
                                                    natus error sit
                                                    voluptatem accIndiantium doloremque.</p>
                                            </div>
                                        </div>
                                        <div class="card-body py-2">
                                            <a class="icons font-weight-semibold text-body"
                                                href="mr-4"><i
                                                    class="fa fa-inr  text-muted mr-1"></i> 800</a>
                                            <a class="mr-4 float-right"><i
                                                    class="fa fa-clock-o  text-muted mr-1"></i>Internship</a>
                                        </div>
                                        <div class="card-body py-2">
                                            <div class="d-flex align-items-center mt-auto">
                                                <img alt="avatar-img"
                                                    class="avatar brround avatar-md mr-2"
                                                    src="./assets/images/products/logo/img1.jpg">
                                                <div>
                                                    <a class="text-default fs-13"
                                                        href="profile.html">Dezignolics</a>
                                                    <small class="d-block text-muted">2 days
                                                        ago</small>
                                                </div>
                                                <div class="ml-auto text-muted">
                                                    <a class="btn btn-sm btn-secondary text-white"
                                                        href="jobs.html">See
                                                        Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="card overflow-hidden">
                                        <div
                                            class="power-ribbon power-ribbon-top-left text-warning">
                                            <span class="bg-warning"><i
                                                    class="fa fa-bolt"></i></span></div>
                                        <div class="card-body">
                                            <div class="item-card7-desc">
                                                <div class="item-card7-text">
                                                    <a class="text-dark" href="jobs.html">
                                                        <h4 class="font-weight-semibold">Data
                                                            Science</h4>
                                                    </a>
                                                </div>
                                                <p class="mb-0">Sed ut perspiciatis unde omnis iste
                                                    natus error sit
                                                    voluptatem accusantium doloremque.</p>
                                            </div>
                                        </div>
                                        <div class="card-body py-2">
                                            <a class="icons font-weight-semibold text-body"
                                                href="mr-4"><i
                                                    class="fa fa-inr  text-muted mr-1"></i> 800</a>
                                            <a class="mr-4 float-right"><i
                                                    class="fa fa-clock-o  text-muted mr-1"></i>Part
                                                Time</a>
                                        </div>
                                        <div class="card-body py-2">
                                            <div class="d-flex align-items-center mt-auto">
                                                <img alt="avatar-img"
                                                    class="avatar brround avatar-md mr-2"
                                                    src="./assets/images/products/logo/img2.jpg">
                                                <div>
                                                    <a class="text-default"
                                                        href="profile.html">K2F2</a>
                                                    <small class="d-block text-muted">2 days
                                                        ago</small>
                                                </div>
                                                <div class="ml-auto text-muted">
                                                    <a class="btn  btn-sm btn-secondary text-white"
                                                        href="jobs.html">See
                                                        Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="card overflow-hidden">
                                        <div
                                            class="power-ribbon power-ribbon-top-left text-warning">
                                            <span class="bg-warning"><i
                                                    class="fa fa-bolt"></i></span></div>
                                        <div class="card-body">
                                            <div class="item-card7-desc">
                                                <div class="item-card7-text">
                                                    <a class="text-dark" href="jobs.html">
                                                        <h4 class="font-weight-semibold">Data
                                                            Analytics</h4>
                                                    </a>
                                                </div>
                                                <p class="mb-0">Sed ut perspiciatis unde omnis iste
                                                    natus error sit
                                                    voluptatem accusantium doloremque.</p>
                                            </div>
                                        </div>
                                        <div class="card-body py-2">
                                            <a class="icons font-weight-semibold text-body"
                                                href="mr-4"><i
                                                    class="fa fa-inr  text-muted mr-1"></i> 800</a>
                                            <a class="mr-4 float-right"><i
                                                    class="fa fa-clock-o  text-muted mr-1"></i>Internship</a>
                                        </div>
                                        <div class="card-body py-2">
                                            <div class="d-flex align-items-center mt-auto">
                                                <img alt="avatar-img"
                                                    class="avatar brround avatar-md mr-3"
                                                    src="./assets/images/products/logo/img3.jpg">
                                                <div>
                                                    <a class="text-default"
                                                        href="profile.html">Dezignolics</a>
                                                    <small class="d-block text-muted">5 days
                                                        ago</small>
                                                </div>
                                                <div class="ml-auto text-muted">
                                                    <a class="btn  btn-sm btn-secondary text-white"
                                                        href="jobs.html">See
                                                        Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="card overflow-hidden">
                                        <div class="ribbon ribbon-top-left text-danger"><span
                                                class="bg-danger">Free</span>
                                        </div>
                                        <div class="card-body">
                                            <div class="item-card7-desc">
                                                <div class="item-card7-text">
                                                    <a class="text-dark" href="jobs.html">
                                                        <h4 class="font-weight-semibold">Web Design
                                                            + Php</h4>
                                                    </a>
                                                </div>
                                                <p class="mb-0">Sed ut perspiciatis unde omnis iste
                                                    natus error sit
                                                    voluptatem accusantium doloremque.</p>
                                            </div>
                                        </div>
                                        <div class="card-body py-2">
                                            <a class="icons font-weight-semibold text-body"
                                                href="mr-4"><i
                                                    class="fa fa-inr  text-muted mr-1"></i> 300</a>
                                            <a class="mr-4 float-right"><i
                                                    class="fa fa-clock-o  text-muted mr-1"></i>Internship</a>
                                        </div>
                                        <div class="card-body py-2">
                                            <div class="d-flex align-items-center mt-auto">
                                                <img alt="avatar-img"
                                                    class="avatar brround avatar-md mr-3"
                                                    src="./assets/images/products/logo/img4.jpg">
                                                <div>
                                                    <a class="text-default"
                                                        href="profile.html">Dezignolics</a>
                                                    <small class="d-block text-muted">4 days
                                                        ago</small>
                                                </div>
                                                <div class="ml-auto text-muted">
                                                    <a class="btn  btn-sm btn-secondary text-white"
                                                        href="jobs.html">See
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
                                                    <a class="text-dark" href="jobs.html">
                                                        <h4 class="font-weight-semibold">Web Design
                                                            + .Net</h4>
                                                    </a>
                                                </div>
                                                <p class="mb-0">Sed ut perspiciatis unde omnis iste
                                                    natus error sit
                                                    voluptatem accusantium doloremque.</p>
                                            </div>
                                        </div>
                                        <div class="card-body py-2">
                                            <a class="icons font-weight-semibold text-body"
                                                href="mr-4"><i
                                                    class="fa fa-inr  text-muted mr-1"></i> 300</a>
                                            <a class="mr-4 float-right"><i
                                                    class="fa fa-clock-o  text-muted mr-1"></i>Internship</a>
                                        </div>
                                        <div class="card-body py-2">
                                            <div class="d-flex align-items-center mt-auto">
                                                <img alt="avatar-img"
                                                    class="avatar brround avatar-md mr-3"
                                                    src="./assets/images/products/logo/img5.jpg">
                                                <div>
                                                    <a class="text-default"
                                                        href="profile.html">Dezignolics</a>
                                                    <small class="d-block text-muted">2 days
                                                        ago</small>
                                                </div>
                                                <div class="ml-auto text-muted">
                                                    <a class="btn  btn-sm btn-secondary text-white"
                                                        href="jobs.html">See
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
                                                    <a class="text-dark" href="jobs.html">
                                                        <h4 class="font-weight-semibold">Android
                                                        </h4>
                                                    </a>
                                                </div>
                                                <p class="mb-0">Sed ut perspiciatis unde omnis iste
                                                    natus error sit
                                                    voluptatem accusantium doloremque.</p>
                                            </div>
                                        </div>
                                        <div class="card-body py-2">
                                            <a class="icons font-weight-semibold text-body"
                                                href="mr-4"><i
                                                    class="fa fa-inr  text-muted mr-1"></i> 300</a>
                                            <a class="mr-4 float-right"><i
                                                    class="fa fa-clock-o  text-muted mr-1"></i>Internship</a>
                                        </div>
                                        <div class="card-body py-2">
                                            <div class="d-flex align-items-center mt-auto">
                                                <img alt="avatar-img"
                                                    class="avatar brround avatar-md mr-3"
                                                    src="./assets/images/products/logo/img6.jpg">
                                                <div>
                                                    <a class="text-default"
                                                        href="profile.html">Dezignolics</a>
                                                    <small class="d-block text-muted">3 days
                                                        ago</small>
                                                </div>
                                                <div class="ml-auto text-muted">
                                                    <a class="btn  btn-sm btn-secondary text-white"
                                                        href="jobs.html">See
                                                        Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
						</div>
					</div>
					<div class="tab-pane" id="index2">
						<div class="row">
							<div class="col-xl-4 col-md-6">
								<div class="card overflow-hidden">
									<div class="card-body">
										<div class="item-card7-desc">
											<div class="item-card7-text">
												<a class="text-dark" href="jobs-full-time.html">
													<h4 class="font-weight-semibold">PHP &
														CodeIgniter,MySQL</h4>
												</a>
											</div>
											<p class="mb-0">Microlan is a Digital Business solutions company based in Mumbai (India) providing
												Customized Software Development, Product development, Web Application Development,
												Mobile Application Development and IT Consulting Services.</p>
										</div>
									</div>
									<div class="card-body py-2">
										<a class="icons font-weight-semibold text-body" href="mr-4"><i class="fa fa-inr  text-muted mr-1"></i> 2,00,000 - 4,00,000</a>
										<a class="mr-4 float-right"><i class="fa fa-clock-o  text-muted mr-1"></i>Full Time Job</a>
									</div>
									<div class="card-body py-2">
										<div class="d-flex align-items-center mt-auto">
											<img alt="avatar-img" class="avatar brround avatar-md mr-2" src="./assets/new%20images/logo%20(1).png">
											<div>
												<a class="text-default fs-13" href="profile.html">Microlan IT
													services pvt. ltd.</a>
												<small class="d-block text-muted">2 days
													ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a class="btn btn-sm btn-secondary text-white" href="jobs-full-time.html">See
													Details</a>
											</div>
										</div>
									</div>
								</div>
							</div>

							<!-- <div class="col-xl-4 col-md-6">
                                    <div class="card overflow-hidden">
                                        <div
                                            class="power-ribbon power-ribbon-top-left text-warning">
                                            <span class="bg-warning"><i
                                                    class="fa fa-bolt"></i></span></div>
                                        <div class="card-body">
                                            <div class="item-card7-desc">
                                                <div class="item-card7-text">
                                                    <a class="text-dark" href="jobs.html">
                                                        <h4 class="font-weight-semibold">Data
                                                            Analytics</h4>
                                                    </a>
                                                </div>
                                                <p class="mb-0">Sed ut perspiciatis unde omnis iste
                                                    natus error sit
                                                    voluptatem accusantium doloremque.</p>
                                            </div>
                                        </div>
                                        <div class="card-body py-2">
                                            <a class="icons font-weight-semibold text-body"
                                                href="mr-4"><i
                                                    class="fa fa-inr  text-muted mr-1"></i> 800</a>
                                            <a class="mr-4 float-right"><i
                                                    class="fa fa-clock-o  text-muted mr-1"></i>Internship</a>
                                        </div>
                                        <div class="card-body py-2">
                                            <div class="d-flex align-items-center mt-auto">
                                                <img alt="avatar-img"
                                                    class="avatar brround avatar-md mr-3"
                                                    src="./assets/images/products/logo/img3.jpg">
                                                <div>
                                                    <a class="text-default"
                                                        href="profile.html">Dezignolics</a>
                                                    <small class="d-block text-muted">5 days
                                                        ago</small>
                                                </div>
                                                <div class="ml-auto text-muted">
                                                    <a class="btn  btn-sm btn-secondary text-white"
                                                        href="jobs.html">See
                                                        Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-md-6">
                                    <div class="card overflow-hidden">
                                        <div class="ribbon ribbon-top-left text-danger"><span
                                                class="bg-danger">Free</span>
                                        </div>
                                        <div class="card-body">
                                            <div class="item-card7-desc">
                                                <div class="item-card7-text">
                                                    <a class="text-dark" href="jobs.html">
                                                        <h4 class="font-weight-semibold">Web Design
                                                            + Php</h4>
                                                    </a>
                                                </div>
                                                <p class="mb-0">Sed ut perspiciatis unde omnis iste
                                                    natus error sit
                                                    voluptatem accusantium doloremque.</p>
                                            </div>
                                        </div>
                                        <div class="card-body py-2">
                                            <a class="icons font-weight-semibold text-body"
                                                href="mr-4"><i
                                                    class="fa fa-inr  text-muted mr-1"></i> 300</a>
                                            <a class="mr-4 float-right"><i
                                                    class="fa fa-clock-o  text-muted mr-1"></i>Internship</a>
                                        </div>
                                        <div class="card-body py-2">
                                            <div class="d-flex align-items-center mt-auto">
                                                <img alt="avatar-img"
                                                    class="avatar brround avatar-md mr-3"
                                                    src="./assets/images/products/logo/img4.jpg">
                                                <div>
                                                    <a class="text-default"
                                                        href="profile.html">Dezignolics</a>
                                                    <small class="d-block text-muted">4 days
                                                        ago</small>
                                                </div>
                                                <div class="ml-auto text-muted">
                                                    <a class="btn  btn-sm btn-secondary text-white"
                                                        href="jobs.html">See
                                                        Details</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
							<div class="col-xl-4 col-md-6">
								<div class="card">
									<div class="card-body">
										<div class="item-card7-desc">
											<div class="item-card7-text">
												<a class="text-dark" href="jobs-full-time2.html">
													<h4 class="font-weight-semibold">Python, Data Science</h4>
												</a>
											</div>
											<p class="mb-0">K2S2 Digistrat Solutions Pvt. Ltd. (Formerly K2S2 Consultants) works as Digital
												Transformation Partner for organizations that wish to transform their business
												digitally.</p>
										</div>
									</div>
									<div class="card-body py-2">
										<a class="icons font-weight-semibold text-body" href="mr-4"><i class="fa fa-inr  text-muted mr-1"></i> 1,50,000 - 4,00,000</a>
										<a class="mr-4 float-right"><i class="fa fa-clock-o  text-muted mr-1"></i>Full Time Job</a>
									</div>
									<div class="card-body py-2">
										<div class="d-flex align-items-center mt-auto">
											<img alt="avatar-img" class="avatar brround avatar-md mr-3" src="./assets/new%20images/logo1.png">
											<div>
												<a class="text-default" href="profile.html">K2S2
													Digistrat Solutions Pvt. Ltd </a>
												<small class="d-block text-muted">2 days
													ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a class="btn  btn-sm btn-secondary text-white" href="jobs-full-time2.html">See
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
												<a class="text-dark" href="jobs-full-time3.html">
													<h4 class="font-weight-semibold">Web Design </h4>
												</a>
											</div>
											<p class="mb-0">K2S2 Digistrat Solutions Pvt. Ltd. (Formerly K2S2 Consultants) works as Digital
												Transformation Partner for organizations that wish to transform their business
												digitally.</p>
										</div>
									</div>
									<div class="card-body py-2">
										<a class="icons font-weight-semibold text-body" href="mr-4"><i class="fa fa-inr  text-muted mr-1"></i> 1,00,000 - 3,00,000</a>
										<a class="mr-4 float-right"><i class="fa fa-clock-o  text-muted mr-1"></i>Full Time Job</a>
									</div>
									<div class="card-body py-2">
										<div class="d-flex align-items-center mt-auto">
											<img alt="avatar-img" class="avatar brround avatar-md mr-3" src="./assets/new%20images/logo1.png">
											<div>
												<a class="text-default" href="profile.html">K2S2
													Digistrat
													Solutions Pvt. Ltd </a>
												<small class="d-block text-muted">3 days
													ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a class="btn  btn-sm btn-secondary text-white" href="jobs-full-time3.html">See
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
									<div class="card-body">
										<div class="item-card7-desc">
											<div class="item-card7-text">
												<a class="text-dark" href="jobs-part-time.html">
													<h4 class="font-weight-semibold">PHP &
														CodeIgniter,MySQL</h4>
												</a>
											</div>
											<p class="mb-0">Microlan is a Digital Business solutions company based in Mumbai (India) providing
												Customized Software Development, Product development, Web Application Development,
												Mobile Application Development and IT Consulting Services.</p>
										</div>
									</div>
									<div class="card-body py-2">
										<a class="icons font-weight-semibold text-body" href="mr-4"><i class="fa fa-inr  text-muted mr-1"></i> 1,50,000 - 3,50,000</a>
										<a class="mr-4 float-right"><i class="fa fa-clock-o  text-muted mr-1"></i>Part Time Job</a>
									</div>
									<div class="card-body py-2">
										<div class="d-flex align-items-center mt-auto">
											<img alt="avatar-img" class="avatar brround avatar-md mr-2" src="./assets/new%20images/logo%20(1).png">
											<div>
												<a class="text-default fs-13" href="profile.html">Microlan IT
													services pvt. ltd.</a>
												<small class="d-block text-muted">2 days
													ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a class="btn btn-sm btn-secondary text-white" href="jobs-part-time.html">See
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
												<a class="text-dark" href="jobs-part-time2.html">
													<h4 class="font-weight-semibold">Python, Data Science</h4>
												</a>
											</div>
											<p class="mb-0">K2S2 Digistrat Solutions Pvt. Ltd. (Formerly K2S2 Consultants) works as Digital
												Transformation Partner for organizations that wish to transform their business
												digitally.</p>
										</div>
									</div>
									<div class="card-body py-2">
										<a class="icons font-weight-semibold text-body" href="mr-4"><i class="fa fa-inr  text-muted mr-1"></i> 1,00,000 - 3,00,000</a>
										<a class="mr-4 float-right"><i class="fa fa-clock-o  text-muted mr-1"></i>Part Time Job</a>
									</div>
									<div class="card-body py-2">
										<div class="d-flex align-items-center mt-auto">
											<img alt="avatar-img" class="avatar brround avatar-md mr-3" src="./assets/new%20images/logo1.png">
											<div>
												<a class="text-default" href="profile.html">K2S2
													Digistrat Solutions Pvt. Ltd </a>
												<small class="d-block text-muted">2 days
													ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a class="btn  btn-sm btn-secondary text-white" href="jobs-part-time2.html">See
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
												<a class="text-dark" href="jobs-part-time3.html">
													<h4 class="font-weight-semibold">Web Design </h4>
												</a>
											</div>
											<p class="mb-0">K2S2 Digistrat Solutions Pvt. Ltd. (Formerly K2S2 Consultants) works as Digital
												Transformation Partner for organizations that wish to transform their business
												digitally.</p>
										</div>
									</div>
									<div class="card-body py-2">
										<a class="icons font-weight-semibold text-body" href="mr-4"><i class="fa fa-inr  text-muted mr-1"></i> 1,00,000 - 2,50,000</a>
										<a class="mr-4 float-right"><i class="fa fa-clock-o  text-muted mr-1"></i>Part Time Job</a>
									</div>
									<div class="card-body py-2">
										<div class="d-flex align-items-center mt-auto">
											<img alt="avatar-img" class="avatar brround avatar-md mr-3" src="./assets/new%20images/logo1.png">
											<div>
												<a class="text-default" href="profile.html">K2S2
													Digistrat
													Solutions Pvt. Ltd </a>
												<small class="d-block text-muted">3 days
													ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a class="btn  btn-sm btn-secondary text-white" href="jobs-part-time3.html">See
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
							<div class="col-xl-4 col-md-6">
								<div class="card overflow-hidden">
									<div class="card-body">
										<div class="item-card7-desc">
											<div class="item-card7-text">
												<a class="text-dark" href="jobs.html">
													<h4 class="font-weight-semibold">PHP &
														CodeIgniter,MySQL</h4>
												</a>
											</div>
											<p class="mb-0">Microlan is a Digital Business solutions company based in Mumbai (India) providing
												Customized Software Development, Product development, Web Application Development,
												Mobile Application Development and IT Consulting Services.</p>
										</div>
									</div>
									<div class="card-body py-2">
										<a class="icons font-weight-semibold text-body" href="mr-4"><i class="fa fa-inr  text-muted mr-1"></i> 1,50,000 to 3,00,000</a>
										<a class="mr-4 float-right"><i class="fa fa-clock-o  text-muted mr-1"></i>Work From Home</a>
									</div>
									<div class="card-body py-2">
										<div class="d-flex align-items-center mt-auto">
											<img alt="avatar-img" class="avatar brround avatar-md mr-2" src="./assets/new%20images/logo%20(1).png">
											<div>
												<a class="text-default fs-13" href="profile.html">Microlan IT
													services pvt. ltd.</a>
												<small class="d-block text-muted">2 days
													ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a class="btn btn-sm btn-secondary text-white" href="job.html">See
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
												<a class="text-dark" href="jobs2.html">
													<h4 class="font-weight-semibold">Python, Data Science</h4>
												</a>
											</div>
											<p class="mb-0">K2S2 Digistrat Solutions Pvt. Ltd. (Formerly K2S2 Consultants) works as Digital
												Transformation Partner for organizations that wish to transform their business
												digitally.</p>
										</div>
									</div>
									<div class="card-body py-2">
										<a class="icons font-weight-semibold text-body" href="mr-4"><i class="fa fa-inr  text-muted mr-1"></i> 1,00,000 - 2,00,000</a>
										<a class="mr-4 float-right"><i class="fa fa-clock-o  text-muted mr-1"></i>Work From Home</a>
									</div>
									<div class="card-body py-2">
										<div class="d-flex align-items-center mt-auto">
											<img alt="avatar-img" class="avatar brround avatar-md mr-3" src="./assets/new%20images/logo1.png">
											<div>
												<a class="text-default" href="profile.html">K2S2
													Digistrat Solutions Pvt. Ltd </a>
												<small class="d-block text-muted">2 days
													ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a class="btn  btn-sm btn-secondary text-white" href="jobs2.html">See
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
												<a class="text-dark" href="jobs3.html">
													<h4 class="font-weight-semibold">Web Design </h4>
												</a>
											</div>
											<p class="mb-0">K2S2 Digistrat Solutions Pvt. Ltd. (Formerly K2S2 Consultants) works as Digital
												Transformation Partner for organizations that wish to transform their business
												digitally.</p>
										</div>
									</div>
									<div class="card-body py-2">
										<a class="icons font-weight-semibold text-body" href="mr-4"><i class="fa fa-inr  text-muted mr-1"></i> 1,00,000 - 1,50,000</a>
										<a class="mr-4 float-right"><i class="fa fa-clock-o  text-muted mr-1"></i>Work From Home</a>
									</div>
									<div class="card-body py-2">
										<div class="d-flex align-items-center mt-auto">
											<img alt="avatar-img" class="avatar brround avatar-md mr-3" src="./assets/new%20images/logo1.png">
											<div>
												<a class="text-default" href="profile.html">K2S2
													Digistrat
													Solutions Pvt. Ltd </a>
												<small class="d-block text-muted">3 days
													ago</small>
											</div>
											<div class="ml-auto text-muted">
												<a class="btn  btn-sm btn-secondary text-white" href="jobs3.html">See
													Details</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="text-center">
				<a class="btn  btn-primary " href=""> View More</a>
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
			<p class="invisible">Mauris ut cursus nunc. Morbi eleifend, ligula at consectetur
				vehicula</p>
		</div>
		<div class="owl-carousel owl-carousel-icons4" id="company-carousel">
			<div class="item h-100">
				<div class="card mb-0">
					<div class="card-body">
						<img alt="company1" src="./assets/new images/company/accenture.png">
					</div>
				</div>
			</div>
			<div class="item">
				<div class="card mb-0">
					<div class="card-body">
						<img alt="company1" src="./assets/new images/company/capgamini.jpg">
					</div>
				</div>
			</div>
			<div class="item">
				<div class="card mb-0">
					<div class="card-body">
						<img alt="company1" src="./assets/new images/company/carwale.png">
					</div>
				</div>
			</div>
			<div class="item">
				<div class="card mb-0">
					<div class="card-body">
						<img alt="company1" src="./assets/new images/company/justdial.png">
					</div>
				</div>
			</div>
			<div class="item">
				<div class="card mb-0">
					<div class="card-body">
						<img alt="company1" src="./assets/new images/company/mindgate.png">
					</div>
				</div>
			</div>
			<div class="item">
				<div class="card mb-0">
					<div class="card-body">
						<img alt="company1" src="./assets/new images/company/peol.JPG">
					</div>
				</div>
			</div>
			<div class="item">
				<div class="card mb-0">
					<div class="card-body">
						<img alt="company1" src="./assets/new images/company/sankey.jpg">
					</div>
				</div>
			</div>
			<div class="item">
				<div class="card mb-0">
					<div class="card-body">
						<img alt="company1" src="./assets/new images/company/techmahindrA.png">
					</div>
				</div>
			</div>


		</div>
	</div>
</section>
<!--/Top Companies-->


<!--Section-->
<section class="sptb  bg-white border-top">
	<div class="container">
		<div class="row no-gutters row-deck find-job">
			<div class="col-md-6">
				<div class="bg-white p-0 mt-5 mt-md-0 border box-shadow2">
					<div class="card-body text-center">
						<div class="bg-white icon-bg  icon-service text-purple mb-4">
							<img alt="img" src="./assets/images/svgs/jobs/find.svg">
						</div>
						<h6 class="card-title fs-18 mb-4">Do You Want to Find a Job?</h6>
						<p class="invisible">it look like readable English. Many desktop
							publishing packages and web
							page editors now
							use Lorem Ipsum as their default model text</p>
						<a class="btn btn-primary text-white" href="index.html">Find Job</a>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="bg-white p-0 mt-5 mt-md-0 border box-shadow2">
					<div class="card-body text-center">
						<div class="bg-light icon-bg  icon-service text-purple mb-4">
							<img alt="img" src="./assets/images/svgs/jobs/work.svg">
						</div>
						<h6 class="card-title fs-18 mb-4">Are You Looking For A Candidate?</h6>
						<p class="invisible">it look like readable English. Many desktop
							publishing packages and web
							page editors now
							use Lorem Ipsum as their default model text</p>
						<a class="btn btn-primary text-white" href="index.html">Find
							Candidate</a>
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
				<div class="owl-carousel testimonial-owl-carousel" id="myCarousel">
					<div class="item text-center">
						<div class="row">
							<div class="col-xl-8 col-md-12 d-block mx-auto">
								<div class="testimonia">
									<p class="text-white-80">
										<i class="fa fa-quote-left text-white-80"></i> It was
										very good opportunity
										for us and it was quite a good experience. We got to
										learn new things.
										Teaching staff are good . They support us to solve a
										error's . Thank You for
										the internship.
									</p>


									<div class="rating-stars">
										<input class="rating-value star" name="rating-stars-value" readonly="readonly" type="number" value="4">
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
									<!-- <div class="owl-controls clickable">
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
                                        </div> -->
								</div>
							</div>
						</div>
					</div>
					<div class="item text-center">
						<div class="row">
							<div class="col-xl-8 col-md-12 d-block mx-auto">
								<div class="testimonia">
									<p class="text-white-80"><i class="fa fa-quote-left"></i> It
										was very good
										opportunity for us and it was quite a good experience.
										We got to learn new
										things. Teaching staff are good . They support us to
										solve a error's . Thank
										You for the internship. </p>
									<div class="testimonia-data">
										<!-- <h3 class="title">Shrinath Bhosale</h3>
                                        <span class="post">Web Developer</span> -->
										<div class="rating-stars">
											<input class="rating-value star" name="rating-stars-value" readonly="readonly" type="number" value="3">
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
											<!-- <div class="owl-controls clickable">
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
                                                </div> -->
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
										with you amazing peoples. I really felt profession
										environment,through out
										the internship i wish we will meet soon again..with a
										new amazing ideas</p>
									<div class="testimonia-data">
										<!-- <h3 class="title">Manasi Shedale</h3>
                                        <span class="post">Web Developer</span> -->
										<div class="rating-stars">
											<input class="rating-value star" name="rating-stars-value" readonly="readonly" type="number" value="3">
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
											<!-- <div class="owl-controls clickable">
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
                                                </div> -->
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

@endsection