@extends('layouts.app')

@section('head')

<script>
    window.Laravel = <?php echo json_encode([
                            'csrfToken' => csrf_token(),
                        ]); ?>
</script>

@endsection

@section('top_bar')

@include('topbar')

@endsection


@section('content')

<!--Breadcrumb-->
<div>
    <div class="bannerimg cover-image bg-background3" data-image-src="./assets/images/banners/banner2.jpg">
        <div class="header-text mb-0">
            <div class="container">
                <div class="text-center text-white ">
                    <h1 class="">About Us</h1>
                    <ol class="breadcrumb text-center">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li aria-current="page" class="breadcrumb-item active text-white">About</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/Breadcrumb-->


<!--main body-->
<div class="container" style="margin-top: 5em;margin-bottom: 5em">
    <div class="row">
        <div class="col-md-5 col-12">
            <h4>WELCOME TO</h4>
            <h1 class="font-weight-bold">DCODETECH</h1>
            <p class="text-justify" style="line-height: 30px">"Dcodetech" established in 2012. Dcodetech is a career
                and
                educational network for
                professionals and
                professional development. We offers a quality learning experience in the areas of IT training.
                Dcodetech's focus is on providing advanced training and certifications in all technologies. We
                provide
                training for .NET, JAVA, PHP, IOS, ANDROID etc. in Thane with certified professionals having very
                good
                experience and skills in particular languages. Dcodetech, a leading IT Training provider, provides
                training methodologies and real-time learning experience to deliver integrated learning solutions.
                Our
                institute also offers a wide range of IT career courses.</p>
            <h2 class="font-weight-bold">Our Vision</h2>
            <p class="text-justify" style="line-height: 30px">To gain recognition as the most reliable and preferred
                technological services Provider Company across
                various business verticals.</p>
            <h2 class="font-weight-bold">Our Mission</h2>
            <p class="text-justify" style="line-height: 30px">Deliver high fidelity services and solutions thereby
                working towards helping our clients to achieve their business objectives.</p>
        </div>
        <div class="col-md-7 col-12 row">
            <div class="col-12">
                <img src="./assets/new%20images/about1.jpg" alt="About1">
            </div>
            <div class="col-6">
                <img src="./assets/new%20images/about2.jpg" alt="About2">
            </div>
            <div class="col-6">
                <img src="./assets/new%20images/about2.jpg" alt="About2">
            </div>
        </div>
    </div>
</div>
<!--/main body-->


@endsection

@section('scripts')

@endsection