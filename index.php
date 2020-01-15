<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/CP1896M04/assets/vendor/bootstrap/css/bootstrap1.min.css">
    <link rel="stylesheet" href="/CP1896M04/assets/frontend/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web</title>

</head>

<body>
 
        <div class="row">
            <div class="col-sm-12">
                <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <a class="navbar-brand" href="#">WebSiteName</a>
                        </div>
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Home</a></li>
                            <li><a href="#">Page 1</a></li>
                            <li><a href="#">Page 2</a></li>
                        </ul>
                        <form class="navbar-form navbar-left" action="/action_page.php">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search" name="search">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit">
                                        <i class="glyphicon glyphicon-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
        <!---End Nav-->
 
        <!---Start carousel-->
        <div class="row">
            <div class="container-fluid">
                <div class="col-sm-9">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="/CP1896M04/assets/frontend/img/carousel-1.jpg" alt="Los Angeles" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="/CP1896M04/assets/frontend/img/carousel-2.jpg" alt="Chicago" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="/CP1896M04/assets/frontend/img/carousel-5.jpg" alt="New york" style="width:100%;">
                            </div>
                        </div>
                    </div>
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <div class="col-sm-3">
                    <div class="row">
                        <div class="container">
                            <div class="col-sm-2">
                               
                            </div>
                        </div>
                        <div class="row">
                        <div class="container">
                            <div class="col-sm-4">
                            <img width="95%" height="50%" src="/CP1896M04/assets/frontend/img/banner.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="container">
                            <div class="col-sm-4">
                                <img width="95%" height="59%" src="/CP1896M04/assets/frontend/img/banner2.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!---End carousel-->
        <div class="row">
            <div class="container-fluid">
                <div class="col-sm-5"></div>
                <div class="col-sm-7">
                    <h3>Sản Phẩm Bán Chạy</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container-fluid">
                <div class="col-sm-3">
                    <div class="row">
                        <div class="container">
                            <div class="col-sm-9">
                                <img width="36%" src="/CP1896M04/assets/frontend/img/laptop-1.jpg" alt="">
                                <p>Laptop Aser A20</p>
                            </div>
                         
                            <div class="col-sm-3">
                           
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <div class="container">
                            <div class="col-sm-12">
                                <img width="26.5%"src="/CP1896M04/assets/frontend/img/laptop-4.jpg" alt="">
                                <p>Laptop Levono Gamming</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="row">
                        <div class="container-fluid">
                            <div class="col-sm-12">
                                <img height="195px" width="100%" src="/CP1896M04/assets/frontend/img/laptop-2.jpg" alt="">
                                <p>Laptop Levono Gamming</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                <div class="row">
                        <div class="container">
                            <div class="col-sm-12">
                                <img height="195px" width="25%" src="/CP1896M04/assets/frontend/img/laptop-3.jpg" alt="">
                                <p>Laptop Asus Gamming</p>
                            </div>
                        </div>
                    </div>
                
                </div>

            </div>
        </div>


</body>

</html>