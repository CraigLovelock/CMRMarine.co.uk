@extends('layouts/base')

@section('content')

    <header class="tile header" id="home">
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
    </header>

    <section class="tile full-page-image-with-center-text">
        <div class="container">
            <div class="central-cta">
                <h1 class="object heading-style-one">custom mast repairs & hydraulics</h1>
                <h3 class="object subheading-style-one"></h3>
                <a href="#" class="object button solid dark-blue">
                    mast repair and hydraulics
                </a>
            </div>
        </div>
    </section>

    <section class="tile about-us" id="about">
        <div class="container">
            <div class="inner">
                <h3 class="object heading-style-two underline">About CMR Marine</h3>
                <div class="body-style">
                    <p>Not only is this service mobile, it is operated by our engineer who has 30 years of experience working in all aspects of mast manufacture, repairs and rebuilds. This includes rigging hydraulics and manufacturing custom fittings to suit your needs.</p>
                </div>
            </div>
            <div class="object grid four-col">
                <ul>
                    <li>
                        <i class="fa fa-anchor icon"></i>
                        <span class="heading" id="mast">mast repairs</span>
                        <p class="text">
                            Supply and repairs on any aluminium or carbon masts, booms and associated fittings.
                        </p>
                    </li><!--
                    --><li>
                        <i class="fa fa-wrench icon"></i>
                        <span class="heading" id="#hydro">hydraulics</span>
                        <p class="text">
                            Inspection, service, maintenance, repair, installion and test for all types of mast hydraulic systems.
                        </p>
                    </li><!--
                    --><li>
                        <i class="fa fa-clock-o icon"></i>
                        <span class="heading">24 / 7 service</span>
                        <p class="text">
                            Emergency call out at any time of the day including out of hours.
                        </p>
                    </li><!--
                    --><li>
                        <i class="fa fa-hand-paper-o icon"></i>
                        <span class="heading">custom fabrication</span>
                        <p class="text">
                            Supply and manufacture aluminum and stainless steel fittings as required.
                        </p>
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
                    <h3>Custom Fabrication</h3>
                    <p>Suspendisse tellus metus, dapibus non sapien pretium, pulvinar cursus dui. Morbi vel pretium turpis. Integer lorem urna, sodales non ornare eu, tempor vitae dolor. Integer pulvinar justo non maximus euismod.</p>
                    <p>Phasellus et ipsum leo. Aliquam pharetra nisi ac tortor efficitur faucibus. Curabitur elementum posuere neque, a scelerisque neque gravida scelerisque.</p>
                    <h3>Inspection & repair</h3>
                    <p>
                        Nunc sed convallis dolor. In sagittis mattis gravida. Sed hendrerit consequat leo laoreet iaculis. Vivamus pellentesque hendrerit luctus. Donec non nulla urna. Sed ullamcorper non felis eget gravida. Morbi posuere quam nisi, non semper diam ultricies quis. Cras in ante et mi tincidunt convallis sit amet ut velit.
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
                    <h3>install, repair & servicer</h3>
                    <p>Suspendisse tellus metus, dapibus non sapien pretium, pulvinar cursus dui. Morbi vel pretium turpis. Integer lorem urna, sodales non ornare eu, tempor vitae dolor. Integer pulvinar justo non maximus euismod.</p>
                    <p>Phasellus et ipsum leo. Aliquam pharetra nisi ac tortor efficitur faucibus. Curabitur elementum posuere neque, a scelerisque neque gravida scelerisque.</p>
                    <h3>custom parts fabrication</h3>
                    <p>Nunc sed convallis dolor. In sagittis mattis gravida. Sed hendrerit consequat leo laoreet iaculis. Vivamus pellentesque hendrerit luctus. Donec non nulla urna.</p>
                    <p>Sed ullamcorper non felis eget gravida. Morbi posuere quam nisi, non semper diam ultricies quis. Cras in ante et mi tincidunt convallis sit amet ut velit.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="tile contact" id="contact">
        <div id="map"></div>
        <div class="container">
            <div class="inner">
                <h3 class="object heading-style-two underline">Get In Contact</h3>
            </div>
            <div class="left">
                {!! Form::open(['url' => '/contact', 'action' => 'post', 'class' => 'object form']) !!}
                    {!! Form::text('name', NULL, ['class' => 'form-control', 'placeholder' => 'Enter your name']) !!}
                    {!! Form::email('email', NULL, ['class' => 'form-control', 'placeholder' => 'Enter your email']) !!}
                    {!! Form::number('number', NULL, ['class' => 'form-control', 'placeholder' => 'Enter your number']) !!}
                    {!! Form::textarea('message', NULL, ['class' => 'form-control', 'placeholder' => 'Enter your message / question']) !!}
                    {!! Form::submit('Send Message', ['class' => 'object button solid dark-blue']) !!}
                {!! Form::close() !!}
            </div><!--
            --><div class="right">
                <div class="icon-with-text-and-info">
                    <i class="fa fa-map-signs"></i>
                    <span>Address</span>
                    <p>
                        Unit 6, Mill View Barn<br />
                        Grange Road
                        Netley
                        Southampton <br />
                        SO31 8GD
                    </p>
                </div>
                <div class="icon-with-text-and-info">
                    <i class="fa fa-paper-plane"></i>
                    <span>E-mail</span>
                    <p>tim@cmrmarine.co.uk</p>
                </div>
                <div class="icon-with-text-and-info">
                    <i class="fa fa-phone"></i>
                    <span>Phone</span>
                    <p>07342 969 868</p>
                </div>
                <div class="icon-with-text-and-info">
                    <i class="fa fa-clock-o"></i>
                    <span>Opening Hours</span>
                    <p>7am - 6pm</p>
                    <p>Emergency services out of hours</p>
                </div>
            </div>
        </div>
    </section>

    <section class="tile key-contact-section">
        <div class="container">
            <div class="left">
                tim@cmrmarine.co.uk
            </div><!--
            --><div class="right">
                07342 969 868
            </div>
        </div>
    </section>

    <footer class="tile footer">
        <div class="container">
            <p>© copyright cmrmarine 2016</p><!--
            --><ul>
                <li><a href="#">home</a></li>
                <li><a href="#">mast repairs</a></li>
                <li><a href="#">hydraulics</a></li>
                <li><a href="#">contact</a></li>
            </ul>
        </div>
    </footer>

    <script>
          var map;
          function initMap() {
            var mylatlong = {lat: 50.8982929, lng: -1.4308836};
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
