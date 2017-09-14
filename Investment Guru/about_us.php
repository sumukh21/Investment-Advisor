<?php require('includes/aboutus_inc.php')?>

<html>

<head>
    <title>About Us</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" type="text/css" href="css/control_style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar_style.css">
    <link rel="stylesheet" type="text/css" href="css/aboutus_style.css">
    <link rel="stylesheet" type="text/css" href="css/footer_style.css">
</head>

<body>
    <?php require_once('navbar.php'); ?>

    <header class="heading-section">
        <div class="jumbotron">
            <h1 class="jumbo-head">ABOUT US</h1>
            <p class="jumbo-sub">Our Idea & Our Team</p>
        </div>
    </header>

    <section class="section idea-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="img/invest.svg">
                </div>
                <div class="col-md-6">
                    <h3>Our Idea</h3>
                    <p>
                        Nowadays, investment has become an essential part of living whether it be investing in a policy or stocks.So our goal is to help you invest and earn irrespective of whether its a small amount or a huge amount, because we believe our goal is to help you
                        achieve your GOAL
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-off working-section">
        <div class="container">
            <h3>How we work</h3>
            <h4>Just <strong>3</strong> simple steps to your goal</h4>
            <div class="row row-padding">
                <div class="col-md-4">
                    <div class="card-padding">
                        <div class="card-team">
                            <div class="card-bg">
                                <img src="img/money-bag.svg">
                            </div>
                            <div class="card-content">
                                <p>1. Invest your savings</p>                              
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-padding">
                        <div class="card-team">
                            <div class="card-bg">
                                <img src="img/profit.svg">
                            </div>
                            <div class="card-content">
                                <p>2. Earn from investment</p>                              
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-padding">
                        <div class="card-team">
                            <div class="card-bg">
                                <img src="img/gift.svg">
                            </div>
                            <div class="card-content">
                                <p>3. Get your goal</p>                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-md-offset-5 col-xs-6 col-xs-offset-3">
                <button type="button" class="btn btn-primary btn-main" onclick="location.href='how_it_works.php'">LEARN MORE</button>
            </div>
        </div>
    </section>

    <section class="section choose-section">
        <div class="container">
            <h3>Why Choose Us</h3>
            <div class="row">
                <div class="col-md-3">
                    <div class="choose-content">
                        <i class="fa fa-list-alt fa-inverse fa-4x" aria-hidden="true"></i>
                        <h4>Simple</h4>
                        <p>Simple and easy step by step procedure that you can follow</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="choose-content">
                        <i class="fa fa-calculator fa-inverse fa-4x" aria-hidden="true"></i>
                        <h4>Calculations</h4>
                        <p>We do all the complex calculations for you</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="choose-content">
                        <i class="fa fa-area-chart fa-inverse fa-4x" aria-hidden="true"></i>
                        <h4>Analysis</h4>
                        <p>We provide the results in an easy to understand graphical charts</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="choose-content">
                        <i class="fa fa-trophy fa-inverse fa-4x" aria-hidden="true"></i>
                        <h4>Quality</h4>
                        <p>We provide quality services to our users</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-off team-section">
        <div class="container">
            <h3>Our Team</h3>
            <div class="row">
                <div class="col-md-4">
                    <div class="card-team">
                        <div class="card-image">
                            <img src="img/ben.jpg">
                            <span class="card-name">Ben Zachariah</span>
                        </div>
                        <div class="card-content">
                            <h4>Tester</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores mollitia magnam quae.</p>                              
                        </div>                       
                        <div class="line"></div> 
                        <div class="card-buttons">                       
                            <div class="card-social">
                                <a class="btn facebook"><i class="fa fa-facebook fa-2x"></i></a>
                                <a class="btn linkedin"><i class="fa fa-linkedin fa-2x"></i></a>
                                <a class="btn gplus"><i class="fa fa-google-plus fa-2x"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-team">
                        <div class="card-image">
                            <img src="img/ben.jpg">
                            <span class="card-name">Jibin Philipose</span>
                        </div>
                        <div class="card-content">
                            <h4>Designer</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores mollitia magnam quae.</p>
                        </div>
                        <div class="line"></div> 
                        <div class="card-buttons">                       
                            <div class="card-social">
                                <a class="btn facebook"><i class="fa fa-facebook fa-2x"></i></a>
                                <a class="btn linkedin"><i class="fa fa-linkedin fa-2x"></i></a>
                                <a class="btn gplus"><i class="fa fa-google-plus fa-2x"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card-team">
                        <div class="card-image">
                            <img src="img/ben.jpg">
                            <span class="card-name">Ivan D'Souza</span>
                        </div>
                        <div class="card-content">
                            <h4>Programmer</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores mollitia magnam quae.</p>
                        </div>
                        <div class="line"></div> 
                        <div class="card-buttons">                       
                            <div class="card-social">
                                <a class="btn facebook"><i class="fa fa-facebook fa-2x"></i></a>
                                <a class="btn linkedin"><i class="fa fa-linkedin fa-2x"></i></a>
                                <a class="btn gplus"><i class="fa fa-google-plus fa-2x"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section social-section">
        <div class="container">
            <h3>Follow us</h3>
            <div class="social-button">
                <a class="btn facebook"><i class="fa fa-facebook-square fa-3x"></i></a>
                <a class="btn twitter"><i class="fa fa-twitter-square fa-3x"></i></a>
                <a class="btn gplus"><i class="fa fa-google-plus-square fa-3x"></i></a>
            </div>
        </div>
    </section>

    <section id="contact" class="section bg-off contact-section">
        <div class="container">
            <h3>Contact Us</h3>           
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Contact Details</h4>
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item"><i class="fa fa-map-marker fa-fw"></i>&nbsp; &nbsp; Mount Poinsur, S.V.P. Road, Borivli (West), Mumbai 400 103</li>
                            <li class="list-group-item"><i class="fa fa-phone fa-fw"></i>&nbsp; &nbsp; 022-28928585 / 28908585</li>
                            <li class="list-group-item"><i class="fa fa-fax fa-fw"></i>&nbsp; &nbsp; 022-28954787</li>
                            <li class="list-group-item"><i class="fa fa-envelope fa-fw"></i><a href="#">&nbsp; &nbsp; sfedu@sfitengg.org</a></li>
                            <li class="list-group-item"><i class="fa fa-clock-o fa-fw"></i>&nbsp; &nbsp; Monday - Saturday 9 AM - 5 PM</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Contact Form</h4>
                        </div>
                        <div class="card-form">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-md-2">Name</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" placeholder="eg: Sachin Tendulkar">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-2">Email</label>
                                    <div class="col-md-10">
                                        <input type="email" class="form-control" placeholder="eg: example@company.com">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-2">Subject</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" placeholder="eg: Any issue">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-2">Message</label>
                                    <div class="col-md-10">
                                        <textarea class="form-control" rows="3" placeholder="eg: Brief description of issue"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-3 col-md-offset-9 col-xs-6 col-xs-offset-6">
                                        <button type="button" class="btn btn-primary btn-main">SUBMIT</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="map" style="width:100%;height:300px;">
            <script>
                function myMap() {
                    var myCenter = new google.maps.LatLng(19.243549, 72.855526);
                    var mapCanvas = document.getElementById("map");
                    var mapOptions = {
                        center: myCenter,
                        zoom: 18
                    };
                    var map = new google.maps.Map(mapCanvas, mapOptions);
                    var marker = new google.maps.Marker({
                        position: myCenter,
                        animation: google.maps.Animation.BOUNCE
                    });
                    marker.setMap(map);
                };
            </script>
        </div>
    </section>

    <?php require_once('footer.php'); ?>

    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCN-EhvT3iNAy0-DS7SiVDz5o_K-0q1g_8&callback=myMap"></script>
    <script src="js/navbar_script.js"></script>
    <script src="js/footer_script.js"></script>
</body>

</html>