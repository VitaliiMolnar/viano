<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Kumar+One+Outline|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <title>Viano</title>
</head>
<body>

<div class="container-fluid">
    <header  style="margin-top: 3% !important">
        <div class="row web">
            <div class="col-md-5"></div>
            <div class="col-md-2" style="text-align: center;"><img src="img/logo1.jpg" style="width: 70%; height: auto;" alt="Viano"></div>
            <div class="col-md-5"></div>
        </div>

        <div class="row web" style="text-align: left; margin-top: 2%;">
            <div class="col-md-4"></div>
            <div class="col-md-1" style = "text-align: center;"><a href="#">Gallery</a></div>
            <div class="col-md-1" style = "text-align: center;"><a href="#">About</a></div>
            <div class="col-md-1" style = "text-align: center;"><a href="#">Info</a></div>
            <div class="col-md-1"><a href="#">Animation</a></div>
            <div class="col-md-2"></div>
            <div class="col-md-1" style="text-align: right;"></div>
            <div class="col-md-1" style="text-align: right;"><a href="#"><img src="img/instagram.svg" style="margin-right: 30%" alt="Bē" class="ico"></a> <a href="#"><img src="img/behance.svg" alt="Bē" class="ico"></a></div>
        </div>

        <div class="row header">
            <div class="col-md-4 logo">
            </div>
            <div class="col-md-3 about">
            </div>
            <div class="col-md-5 about ">
                <div class="row" style="margin-top: 6% !important;">
                    <div class="col-md-10"></div>
                </div>
            </div>
        </div>
        <div class="row mobile-header">
            <div class="topnav">
                <a href="#" class="active">Viano Group</a>
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
    <script>var click = function(){console.log("yes");}</script>
    <div class="gallery" style="margin-top: -2%">

        @foreach ($gallery_images as $gallery_image)

            <div class="mobile-text" ><hr> <h3>{{ $gallery_image->title }}</h3></div>
            <a href=""><div class="imgtext">
                    <form action="#" method = "_GET">
                        <a href="{{ route('carusel.image', ['slug' => $gallery_image->slug]) }}"> <img class="opacity" src="uploads/{{ $gallery_image->image }}" alt=""> </a>
                    </form>
                    <span onclick="click()">
						<b><a href="{{ route('carusel.image', ['slug' => $gallery_image->slug]) }}" >{{ $gallery_image->description }}.</a></b>
					</span>
                </div></a>

        @endforeach

            @for($i = 0; $i < $number; $i++)

                <div class="mobile-text" ><hr> <h3></h3></div>
                <a href=""><div class="imgtext">
                        <form action="#" method = "_GET">
                            <a href=""> <img class="opacity" src="" alt=""> </a>
                        </form>
                        <span onclick="click()">
						<b><a href="" ></a></b>
					</span>
                    </div></a>

            @endfor

        <div class="imgtext">
        </div>

    </div>
</div>

<script src="js/antiload.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>