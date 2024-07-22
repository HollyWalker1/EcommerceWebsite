<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arts'n'Crafts</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/5120d680a7.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="assets/css/style.css"/>
</head>
<body>

  <!--Navbar-->

  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="shop.html">Shop</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact Us</a>
          </li>

          <li class="nav-item">
            <a href="cart.html"><i class="fa-solid fa-basket-shopping"></i></a>
            <a href="account.html"><i class="fa-solid fa-user"></i></a>
          </li>
        </ul>
      </div>
      <div class="brand-name">
        <h2>Arts'N'Crafts</h2>
      </div>
      <img class="logo" src="assets/imgs/logo.jpg"/>
    </div>
  </nav>

  <!--Home-->
  <section id="home">
    <div class ="container">
      <h5>NEW SUMMER ARRIVALS</h5>
      <h1>High Quality at Low Prices</h1>
      <p>A vast range of craft materials at <span>affordable prices</span> so that you can bring <br>your projects to life.</br></p>
      <button>Shop Now</button>
    </div>
  </section>

  <!--Divider-->
  <section id="collections" class="container">
    <div class="row">
      <img class="img-fluid col-lg-2 col-md-4 col-sm-5" src="assets/imgs/collection1.jpg"/>
      <img class="img-fluid col-lg-1 col-md-2 col-sm-1" src="assets/imgs/space.jpg"/>
      <img class="img-fluid col-lg-2 col-md-4 col-sm-5" src="assets/imgs/collection2.jpg"/>
      <img class="img-fluid col-lg-1 col-md-2 col-sm-1" src="assets/imgs/space.jpg"/>
      <img class="img-fluid col-lg-2 col-md-4 col-sm-5" src="assets/imgs/collection3.jpg"/>
      <img class="img-fluid col-lg-1 col-md-2 col-sm-1" src="assets/imgs/space.jpg"/>
      <img class="img-fluid col-lg-2 col-md-4 col-sm-5" src="assets/imgs/collection4.jpg"/>
    </div>
  </section>

  <!--New-->

  <section id="new" class="w-100">
    <div class="split">
      <div class="container text-center py-2">
        <h3>New Arrivals</h3>
      </div>
    </div>
    <div class="row p-0 m-0">
      <!--First-->
      <div class="one col-lg-4 col-md-6 col-sm-12">
        <img class="img-fluid" src="assets/imgs/1.jpg"/>
        <div class="details">
          <h2>8pc POSCA Acrylic Pen Set</h2>
          <button>SHOP NOW</button>
        </div>
      </div>
      <!--Second-->
      <div class="one col-lg-4 col-md-6 col-sm-12">
        <img class="img-fluid" src="assets/imgs/2.jpg"/>
        <div class="details">
          <h2>24pc Winsor&Newton Paints</h2>
          <button>SHOP NOW</button>
        </div>
      </div>
      <!--Third-->
      <div class="one col-lg-4 col-md-6 col-sm-12">
        <img class="img-fluid" src="assets/imgs/3.jpg"/>
        <div class="details">
          <h2>Crochet Starter Kit</h2>
          <button>SHOP NOW</button>
        </div>
      </div>
    </div>
  </section>

  <!--Featured Products-->
  <section id="featured">
    <div class="split">
      <div class="container text-center py-2">
          <h3>Best Sellers</h3>
      </div>
    </div>  
      <div class="row mx-auto container-fluid">
        <?php include("server/get_featured.php");?>

        <?php while($row=$featured->fetch_assoc()){ ?>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row["product_image"]; ?>"/>

          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name"><?php echo $row["product_name"]; ?></h5>
          <h4 class="p-price">£<?php echo $row["product_price"]; ?></h4>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <?php }?>
      </div>
    </div>
  </section>

  <!--Sale Banner-->
  <section id="banner" class="my-5 py-5">
    <div class="container">
      <h5>SUMMER SALE</h5>
      <h1>Up to <span>50% off</span> selected products</h1>
      <button>SHOP NOW</button>
    </div>
  </section>

  <!--Paint Supplies-->
  <section id="featured">
    <div class="split">
      <div class="container text-center py-2">
          <h3>Painting Supplies</h3>
      </div>
    </div>  
      <div class="row mx-auto container-fluid">
      <?php include("server/get_paint.php");?>

      <?php while($row=$paint->fetch_assoc()){ ?>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row["product_image"]; ?>"/>

          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name"><?php echo $row["product_name"]; ?></h5>
          <h4 class="p-price">£<?php echo $row["product_price"]; ?></h4>
          <button class="add-to-cart">Add to Cart</button>
        </div>
        <?php }?>
      </div>
    </div>
  </section>

   <!--Knitting, Crocheting and Sewing-->
  <section id="featured">
    <div class="split">
      <div class="container text-center py-2">
          <h3>Knitting, Crocheting and Sewing</h3>
      </div>
    </div>  
      <div class="row mx-auto container-fluid">
      <?php include("server/get_kcs.php");?>

      <?php while($row=$kcs->fetch_assoc()){ ?>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row["product_image"]; ?>"/>

          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name"><?php echo $row["product_name"]; ?></h5>
          <h4 class="p-price">£<?php echo $row["product_price"]; ?></h4>
          <button class="add-to-cart">Add to Cart</button>
        </div>

        <?php } ?>
      </div>
    </div>
  </section>

   <!--Drawing Supplies-->
   <section id="featured">
    <div class="split">
      <div class="container text-center py-2">
          <h3>Drawing Supplies</h3>
      </div>
    </div>  
      <div class="row mx-auto container-fluid">
      <?php include("server/get_drawing.php");?>

      <?php while($row=$drawing->fetch_assoc()){ ?>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="assets/imgs/<?php echo $row["product_image"]; ?>"/>

          <div class="star">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
          <h5 class="p-name"><?php echo $row["product_name"]; ?></h5>
          <h4 class="p-price">£<?php echo $row["product_price"]; ?></h4>
          <button class="add-to-cart">Add to Cart</button>
        </div>

        <?php } ?>

      </div>
    </div>
  </section>

  <!--Footer-->
  <footer class="mt-5 py-5">
    <div class="row container mx-auto pt-5">
      <div class="footer-one col-lg-3 col-md-6 col-sm-12">
        <img class="logo" src ="assets/imgs/logo.jpg"/>
        <p class="pt-3">Shop now to make use of our amazing offers!</p>
      </div>
      <div class="footer-one col-lg-3 col-md-6 col-sm-12">
        <h5 class="pb-2">Sections</h5>
        <ul>
          <li><a href="#">PAINTING</a></li>
          <li><a href="#">KNITTING</a></li>
          <li><a href="#">CROCHET</a></li>
          <li><a href="#">SEWING</a></li>
          <li><a href="#">DRAWING</a></li>
          <li><a href="#">ALL</a></li>
          <li><a href="#">NEW ARRIVALS</a></li>
        </ul>
      </div>
      <div class="footer-one col-lg-3 col-md-6 col-sm-12">
        <h5 class="pb-2">Contact Us</h5>
        <div>
          <h6>ADDRESS</h6>
          <p>43 Street, City</p>
        </div>
        <div>
          <h6>PHONE NUMBER</h6>
          <p>652 957 2881</p>
        </div>
        <div>
          <h6>EMAIL</h6>
          <p>ArtsnCraftsInfo@email.com</p>
        </div>
      </div>
      <div class="footer-one col-lg-3 col-md-6 col-sm-12">
        <h5 class="pb-2">Instagram</h5>
        <div class="row">
          <img src="assets/imgs/featured3.jpg" class="img-fluid w-25 h-100 m-2"/>
          <img src="assets/imgs/paint3.jpg" class="img-fluid w-25 h-100 m-2"/>
          <img src="assets/imgs/kcs2.jpg" class="img-fluid w-25 h-100 m-2"/>
          <img src="assets/imgs/drawing4.jpg" class="img-fluid w-25 h-100 m-2"/>
          <img src="assets/imgs/2.jpg" class="img-fluid w-25 h-100 m-2"/>
        </div>
      </div>
    </div>

    <div class="copyright mt-5">
      <div class="row container mx-auto">
        <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
          <img src="assets/imgs/payment.png"/>
        </div>
        <div class="col-lg-3 col-md-5 col-sm-12 mb-4 text-nowrap mx-4">
          <p>Arts'N'Crafts @ 2024 All Rights Reserved</p>
        </div>
        <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>