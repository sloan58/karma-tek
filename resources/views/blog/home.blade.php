@extends('blog.layouts.master')

@section('styles')
    <link href="/assets/css/home.css" rel="stylesheet">
@stop

@section('page-header')
    <header class="intro-header home-header">
        <div class="container">
            <div class="row">
                <div class="site-heading main-page-header">
                    <div class="col-md-10 col-md-offset-1">
                    <div class="well">
                    <img class="img-responsive center-block" src="assets/img/Karma-Tek.png">
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
@stop

@section('content')

    <!-- ========== SERVICES - GREY SECTION ========== -->
    <section id="services" name="services"></section>
    <div id="g">
        <div class="container">
            <div class="row">
                <h3>OUR SERVICES</h3>
                <br>
                <br>
                <div class="col-lg-4">
                    <img class="img-circle" src="assets/img/Telephone.jpg">
                    <h3><bold>Unified Communications</bold></h3>
                    <p>Our certified Unified Communications team is skilled in delivering reliable, highly available enterprise solutions for your business.</bold></p>
                </div>
                <div class="col-lg-4">
                    <img class="img-circle" src="assets/img/datacenter.jpeg">
                    <h3><bold>Unified Computing Systems</bold></h3>
                    <p>Our certified UCS engineers have the skills and experience to bring your services into a virtual environment, optimizing your resources and investment.</p>
                </div>
                <div class="col-lg-4">
                    <img class="img-circle" src="assets/img/code.png">
                    <h3><bold>Custom Integrations</bold></h3>
                    <p>Modern solutions provide robust API's to help you deploy and manage your network.  We develop applications to optimize these integration opportunities.</p>
                </div>
            </div>
        </div><!-- /container -->
    </div><!-- /g -->

    <section id="portfolio" name="portfolio"></section>
    <div id="portfoliowrap">
        <div class="row col-lg-12">
            <br>
            <h3><i class="fa fa-spinner fa-pulse fa-5x"></i></h3>
            <br>
            <h3 class="text-center">We're ITIL certified and will be there for your technology lifecycle</h3>
        </div>
    </div><!-- /container -->

    <!-- ========== WHITE SECTION ========== -->
    <div id="w">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h3>WE WORK HARD TO DELIVER <bold>HIGH QUALITY SERVICE</bold>. OUR AIM IS YOUR COMPLETE <bold>SATISFACTION</bold>.
                    </h3>
                </div>
            </div>
        </div><!-- /container -->
    </div><!-- /w -->

    <!-- ========== ABOUT - GREY SECTION ========== -->
    <section id="about" name="about"></section>
    <div id="g">
        <div class="container">
            <div class="row">
                <h3>ABOUT US</h3>
                <br>
                <br>
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <p>Karma-Tek Consulting is an IT services company based in the Washington, DC metro area.  Our team of industry certified experts are available to assist and just a phone call away.</p>
                    <br>
                    <br>
                </div>
            </div>
        </div><!-- /container -->
    </div><!-- /g -->

    <div id="c">
        <div class="container" id="contact" name="contact">
            <div class="row">
                <div class="col-md-4 col-md-offset-3">
                    <p>Email: <a href="mailto:info@karma-tek.com">info@karma-tek.com</a></p>
                </div>
                <div class="col-md-4">
                    <p>Call: <a href="tel:+15713589825">+15713589825</a></p>
                </div>
            </div>
        </div>
    </div>
@stop
