<?php include "index.html" ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/20c5629a29.js" crossorigin="anonymous"></script>
    
    <title>ICA</title>
</head>
<style>
  /* common */
.ribbon {
  width: 100px;
  height: 150px;
  overflow: hidden;
  position: absolute;
}
.ribbon::before,
.ribbon::after {
  position: absolute;
  z-index: -1;
  content: '';
  display: block;
  border: 2px solid #2980b9;
}
.ribbon span {
  position: absolute;
  display: block;
  width: 220px;
  text-transform: uppercase;
  background-color: yellow;
  box-shadow: 0 5px 10px rgba(0,0,0,.1);
  color: black;
  font-weight: 500;
  text-shadow: 0 1px 1px rgba(0,0,0,.2);
  text-align: center;
}


.ribbon-top-right {
  top: -10px;
  right: 10px;
}
.ribbon-top-right::before,
.ribbon-top-right::after {
  border-top-color: transparent;
  border-right-color: transparent;
}
.ribbon-top-right::before {
  top: 0;
  left: 0;
}
.ribbon-top-right::after {
  bottom: 0;
  right: 0;
}
.ribbon-top-right span {
  left: -50px;
  top: 30px;
  transform: rotate(55deg);
}



  .explore-menu-section a{
    display: inline-block;
    background: #2980b9;
    color: #fff;
    font-size: 18px;
    padding: 3px 8px;
    
    font-weight: 400;
    border-radius: 6px;
    border: 2px solid #2980b9;
    transition: all 0.3s ease;
}
.explore-menu-section a:hover{
    color: #2980b9;
    background: none;
    text-decoration: none;
}

</style>
<body>
  <div class="explore-menu-section" id="exploreMenuSection">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1 class="menu-section-heading mt-5 mb-3 p-3">EXPLORE COURSES</h1>
          </div>
          
          <div class="col-12 col-md-6 col-lg-4">
            <div class="menu-item-card shadow p-3 mb-3">
              <img
                src="1.jpg"
                class="menu-item-image w-100"
              />  <div class="ribbon ribbon-top-right"><span>&nbsp;&nbsp;&nbsp;<i class="fa fa-bolt"></i> Trending</span></div>
              <h1 class="menu-card-title">GST</h1>
              <a href="ica.pdf" download>Brochure<i class="fas fa-download"></i></button></a>
              <a href="enquiry.php">Enquiry Now</button></a>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="menu-item-card shadow p-3 mb-3">
              <img
                src="1.jpg"
                class="menu-item-image w-100"
              /><div class="ribbon ribbon-top-right"><span>&nbsp;&nbsp;&nbsp;<i class="fa fa-bolt"></i> Trending</span></div>
              <h1 class="menu-card-title">INCOME TAX</h1>
              <a href="ica.pdf" download>Brochure<i class="fas fa-download"></i></button></a>
              <a href="enquiry.php">Enquiry Now</button></a>

            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="menu-item-card shadow p-3 mb-3">
              <img
                src="1.jpg"
                class="menu-item-image w-100"
              /><div class="ribbon ribbon-top-right"><span>&nbsp;&nbsp;&nbsp;<i class="fa fa-bolt"></i> Trending</span></div>
              <h1 class="menu-card-title">TDS</h1>
              <a href="ica.pdf" download>Brochure<i class="fas fa-download"></i></button></a>
              <a href="enquiry.php">Enquiry Now</button></a>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4">
            <div class="menu-item-card shadow p-3 mb-3">
              <img
                src="1.jpg"
                class="menu-item-image w-100"
              /><div class="ribbon ribbon-top-right"><span>&nbsp;&nbsp;&nbsp;<i class="fa fa-bolt"></i> Trending</span></div>
              <h1 class="menu-card-title">ESIC & EPF</h1>
              <a href="ica.pdf" download>Brochure<i class="fas fa-download"></i></button></a>
              <a href="enquiry.php">Enquiry Now</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>
<?php include "footer.php" ?>