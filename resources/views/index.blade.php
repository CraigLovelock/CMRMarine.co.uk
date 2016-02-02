@extends('layouts/base')

@section('content')

    <header class="tile header">
        <div class="container">
            <a href="#home">
                <img src="/images/logo-outlined.svg" alt="cmr marine logo" />
            </a>

            <nav class="nav">
                <li><a href="#home">Home</a></li><!--
                --><li><a href="#about">About</a></li><!--
                --><li><a href="#mast">Mast Repairs</a></li><!--
                --><li><a href="#hydro">Hydraulics</a></li><!--
                --><li class="object button ghost-button blue"><a href="#contact">Contact</a></li>

            </nav>
            <div class="menu-icon">
                <i class="fa fa-align-justify"></i>
                <span>Menu</span>
            </div>
            <div class="menu-close-icon">
                <i class="fa fa-times"></i>
                <span>Close</span>
            </div>
        </div>

        <div class="object mobile-call-button">
            <a href="tel: 07342969868">
                Click to call: 07342 969 868
            </a>
        </div>
    </header>

    <section class="tile full-page-image-with-center-text" id="home">
        <div class="container">
            <div class="central-cta">
                <h1 class="object heading-style-one">custom mast repairs & hydraulics</h1>
                <h3 class="object subheading-style-one">Providing custom mast repairs and hydraulic services on the south coast</h3>
                <a href="#mast" class="object button solid dark-blue half-width">
                    our services
                </a>
                <a href="tel: 07342969868" class="object button ghost-button blue main-padding half-width">
                    tel: 07342 969 868
                </a>
            </div>
        </div>
    </section>

    <section class="tile about-us" id="about">
        <div class="container">
            <div class="inner">
                <h3 class="object heading-style-two underline">About CMR Marine</h3>
                <div class="body-style">
                    <p>
                        CMR Marine (Custom Mast Repairs & Hydraulics) provides mast repairs and hydraulics services on the south coast.
                    </p>
                    <p>
                        Not only is this service mobile, it is operated by our engineer who has 30 years of experience working in all aspects of mast manufacture, repairs and rebuilds.</p>
                    </p>
                    <p>
                        Our services include rigging hydraulics and manufacturing custom fittings to suit your needs.</p>
                    </p>
                </div>
            </div>
            <div class="object grid four-col">
                <ul>
                    <li>
                        <i class="fa fa-anchor icon"></i>
                        <a href="#mast">
                            <span class="heading">mast repairs</span>
                        </a>
                        <p class="text">
                            Supply and repairs on any aluminium or carbon masts, booms and associated fittings.
                        </p>
                        <a href="#mast" class="object button ghost-button blue">More Information</a>
                    </li><!--
                    --><li>
                        <i class="fa fa-wrench icon"></i>
                        <a href="#hydro">
                            <span class="heading">hydraulics</span>
                        </a>
                        <p class="text">
                            Inspection, service, maintenance, repair, installion and test for all types of mast hydraulic systems.
                        </p>
                        <a href="#hydro" class="object button ghost-button blue">More Information</a>
                    </li><!--
                    --><li>
                        <i class="fa fa-clock-o icon"></i>
                        <a href="#contact">
                            <span class="heading">Emergency Repairs</span>
                        </a>
                        <p class="text">
                            Emergency call out at any time of the day including out of hours and weekends / bank holidays.
                        </p>
                        <a href="#contact" class="object button ghost-button blue">Contact</a>
                    </li><!--
                    --><li>
                        <i class="fa fa-hand-paper-o icon"></i>
                        <a href="#contact">
                            <span class="heading">custom fabrication</span>
                        </a>
                        <p class="text">
                            Supply and manufacture high quality aluminum and stainless steel fittings as required.
                        </p>
                        <a href="#contact" class="object button ghost-button blue">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="tile heading-block-with-image-and-content" id="mast">
        <div class="container">
            <div class="inner">
                <h3 class="object block-heading underline">Mast Repairs</h3>
            </div>
        </div>
        <div class="image" style="background-image: url(/images/rigging.jpg)"></div>
    </section>

    <section class="tile basic-body-style">
        <div class="container">
            <div class="inner">
                <div class="body-style">

                    <p class="highlight">
                        "CMR Marine undertakes all types of mast repairs aswell as looking at ways to improve the strength in all areas of your mast, boom and the repaired areas."
                    </p>

                    <h3>Replacement</h3>
                    <p>
                        We replace fittings / fastenings and strengthening where necessary to prevent reoccurring issues.
                    </p>

                    <h3>Strengthening</h3>
                    <p>
                        Our services also include strengthening high stress areas such as spreader / shroud terminal points which will prevent wear and tear and damage to your mast.
                    </p>

                    <h3>Fabrication</h3>
                    <p>
                        We can also fabricate / modify mast and boom fittings along with supplying machined parts.
                    </p>

                </div>
            </div>
        </div>
    </section>

    <section class="tile heading-block-with-image-and-content flipped" id="hydro">
        <div class="container">
            <div class="inner">
                <h3 class="object block-heading underline">Hydraulics</h3>
            </div>
        </div>
        <div class="image" style="background-image: url(/images/hydo.jpg)"></div>
    </section>

    <section class="tile basic-body-style">
        <div class="container">
            <div class="inner">
                <div class="body-style">
                    <p class="highlight">
                        “Maintaining your hydraulic system is essential to prevent costly repairs and replacements.”
                    </p>
                    <p>
                        The most common cause of hydraulic failure is contaminated oil. Periodically Checking / replacing the oil and filters will improve the working life of your hydraulic system and help prevent failure along with servicing / checking your hydraulic rams / operating panels.
                    </p>
                    <h3>Our Solutions</h3>
                    <ul>
                        <li>We can check and maintain your system</li>
                        <li>Replace seals and damaged parts</li>
                        <li>Polish out scratches on piston rods</li>
                        <li>Strip down, clean and reassemble all hydraulic cylinders, vangs, mast jacks, pumps and operating panels</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="tile contact">
        <div id="map"></div>
        <div class="container" id="contact">
            <div class="inner">
                <h3 class="object heading-style-two underline">Get In Contact</h3>
            </div>
            <div class="left">
                {!! Form::open(['url' => '/contact', 'action' => 'post', 'class' => 'object form']) !!}
                    {!! Form::text('name', NULL, ['class' => 'form-control', 'placeholder' => 'Enter your name']) !!}
                    {!! Form::email('email', NULL, ['class' => 'form-control', 'placeholder' => 'Enter your email']) !!}
                    {!! Form::number('number', NULL, ['class' => 'form-control', 'placeholder' => 'Enter your number']) !!}
                    {!! Form::textarea('message', NULL, ['rows' => 4, 'class' => 'form-control', 'placeholder' => 'Enter your message / question']) !!}
                    {!! Form::submit('Send Message', ['class' => 'object button solid dark-blue send-contact']) !!}
                {!! Form::close() !!}
            </div><!--
            --><div class="right">
                <div class="icon-with-text-and-info">
                    <i class="fa fa-map-signs"></i>
                    <span>Address</span>
                    <p>
                        Unit 6, Mill View Barn<br />
                        Grange Road,
                        Netley<br />
                        Southampton,
                        SO31 8GD
                    </p>
                </div>
                <div class="icon-with-text-and-info">
                    <i class="fa fa-paper-plane"></i>
                    <span>E-mail</span>
                    <p><a href="mailto:tim@cmrmarine.co.uk">tim@cmrmarine.co.uk</a></p>
                </div>
                <div class="icon-with-text-and-info">
                    <i class="fa fa-phone"></i>
                    <span>Phone</span>
                    <p><a href="tel:07342969868">07342 969 868</a></p>
                </div>
                <div class="icon-with-text-and-info">
                    <i class="fa fa-clock-o"></i>
                    <span>Opening Hours</span>
                    <p>7am - 6pm*</p>
                    <p class="small">*emergency out of hours available</p>
                </div>
            </div>
        </div>
    </section>

    <section class="tile key-contact-section">
        <div class="container">
            <div class="left">
                <a href="mailto:tim@cmrmarine.co.uk">tim@cmrmarine.co.uk</a>
            </div><!--
            --><div class="right">
                <a href="tel:07342969868">07342 969 868</a>
            </div>
        </div>
    </section>

    <footer class="tile footer">
        <div class="container">
            <p>© copyright cmrmarine 2016</p><!--
            --><ul>
                <li><a href="#home">home</a></li>
                <li><a href="#mast">mast repairs</a></li>
                <li><a href="#hydro">hydraulics</a></li>
                <li><a href="#contact">contact</a></li>
            </ul>
        </div>
    </footer>

    <script>
          var map;
          function initMap() {
            var mylatlong = {lat: 50.8887877, lng: -1.3385646};
            map = new google.maps.Map(document.getElementById('map'), {
              center: mylatlong,
              zoom: 14,
              draggable: false,
              //zoomControl: false,
              streetViewControl: false,
              disableDefaultUI: true,
              panControl: false,
              scaleControl: false,
            });
            var marker = new google.maps.Marker({
                position: mylatlong,
                map: map,
                title: 'Hello World!'
            });
            google.maps.event.addDomListener(window, 'resize', function() {
                map.setCenter(mylatlong);
            });
          }
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxHr893iKC79VtHX1Lg29ERKnJ4S7rHOA&callback=initMap"
        async defer></script>

@stop
