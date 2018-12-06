<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Kumar+One+Outline|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/carousel.css">
    <SCRIPT type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></SCRIPT>

    <title>Viano</title>
</head>
<body>

<div class="container-fluid" style="background: #fff;">
    <header>
        <div class="row web" style="text-align: left; margin-top: 2% !important;">
            <div class="col-md-4"></div>
            <div class="col-md-1" style = "text-align: center;"><!-- <a href="#">Gallery</a> --></div>
            <div class="col-md-1" style = "text-align: center;"><!-- <a href="#">About</a> --></div>
            <div class="col-md-1" style = "text-align: center;"><!-- <a href="#">Info</a> --></div>
            <div class="col-md-1"><!-- <a href="#">Animation</a> --></div>
            <div class="col-md-2"></div>
            <div class="col-md-1" style="text-align: right;"></div>
            <div class="col-md-1" style="text-align: center;"><a href="#"><img src="img/instagram.svg" style="margin-right: 30%" alt="Bē" class="ico"></a> <a href="#"><img src="img/behance.svg" style="margin-left:9% !important" alt="Bē" class="ico"></a></div>
        </div>
        <div class="row mobile-header">
            <div class="topnav">
               <a href="/" class="active"></a>
                <div id="myLinks">
                    <a href="#">Info</a>
                    <a href="#">About</a>
                    <a href="#">Gallery</a>
                    <a href="#">Animation</a>
                </div>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <h6>Menu</h6>
                </a>
            </div>
            <script src = "js/dropdown-menu.js"></script>
        </div>
    </header>
    <div class="imageDiv" style="background: #fff; max-width: 56%; margin-left: 22% !important; margin-right: 22% !important; padding-bottom: 0 !important;">
        <div class="close" id="navbar"><a href="/"><img class="ico" src="img/cross.svg" alt="x"></a></div>
        <div>
            @foreach ($carusel_images as $carusel_image)

                <img src="uploads/{{ $carusel_image->image }}" class="image" name="pic" style="max-width: 85%; height: auto; margin-top: 7% !important;"/>

            @endforeach
        </div>

    </div>



</div>
<script src="js/image.js"></script>
<!-- <script src="js/antiload.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script>
    window.onscroll = function() {myFunction()};
    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;
    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }
</script>
</body>
</html>
