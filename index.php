<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Money Desk</title>
</head>

<body>

  
    <?php include 'navbar.php'; ?>


    <!-- carousel -->

    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/06_Personal-loan.jpg" alt="Los Angeles" width="1100" height="500">
                <div class="carousel-caption">
                    <h3 class="text-primary">Personal loan</h3>
                    <button type="button" class="btn btn-secondary">Apply now</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/cibil score.jpg" alt="Chicago" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>cibil score</h3>
                    <button type="button" class="btn btn-secondary">Check now</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/credit card.jpg" alt="New York" width="1100" height="500">
                <div class="carousel-caption">
                    <h3 class="text-danger">credit card</h3>
                    <button type="button" class="btn btn-secondary">Apply now</button>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <!-- About us section -->
    <section class="my-3">
        <div class="py-4">
            <h2 class="text-center">About Us</h2> 
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="images/card.jpg" class="img-fluid aboutimg" alt="there is no image">
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="display-7">This is about money desk</h2>
                    <p class="py-2">The Money Desk is designed to equip you with the tools and knowledge you need to
                        successfully navigate through today’s complex financial jungle. From videos to podcasts to links
                        to other resources, consider The Money Desk your virtual financial planner. </p>
                    <a href="about.php" class="btn btn-success">Check more</a>
                </div>
            </div>

    </section>


    <!-- Services section -->
    <section class="my-3">
        <div class="py-4">
            <h2 class="text-center">Our Services</h2>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="images/hdfc.png" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">HDFC Bank</h4>
                            <p class="card-text">ATM Card</p>
                            <a href="#" class="btn btn-primary">See card</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="images/Uco.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">UCO Bank</h4>
                            <p class="card-text">ATM Card</p>
                            <a href="#" class="btn btn-primary">See card</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="images/visa.webp" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Visa Bank</h4>
                            <p class="card-text">ATM Card</p>
                            <a href="#" class="btn btn-primary">See card</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

<!-- Contact Us form -->
<section class="my-3">
        <div class="py-4">
            <h2 class="text-center">Contact Us</h2>
        </div> 

        <div class="w-50 m-auto">
            <form action="userinfo.php" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name = "user" autocomplete="off" class="form-control">
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name = "email" autocomplete="off" class="form-control">
                </div>

                <div class="form-group">
                    <label>Mobile number</label>
                    <input type="text" name = "mobile" autocomplete="off" class="form-control">
                </div>

                <div class="form-group">
                    <label>Comments</label>
                    <textarea class = "form-control" name = "comments">

                    </textarea>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
</section>


<!-- footer -->
<footer>
    <p class="p-3 bg-dark text-white text-center">2023@Money Desk production</p>
</footer>







    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>