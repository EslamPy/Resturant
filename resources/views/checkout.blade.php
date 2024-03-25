<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title></title>
<link rel="stylesheet" href="css/checkout.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
<header id="home">
    <nav class="navbar">
        <img style="width: 127px; margin-right: 50px;" src="img/logo.png" alt="">

        <ul class="nav-list">
          <li class="nav-item"><a href="#home">الرئيسية</a></li>
          <li class="nav-item"><a href="#products">قائمة الطعام</a></li>
        </ul>
    </nav>
      
    <div class="sale-banner">
        <img style="width: 90%; " src="img/ba.png" alt="">
    </div>
</header>



<div class="row">
    <div class="col-75">
      <div class="container">
        <form action="/action_page.php">
        
          <div class="row">
            <div class="col-50">
              <label for="fname"><i class="fa fa-user"></i>الاسم بالكامل</label>
              <input type="text" id="fname" name="firstname" placeholder="Full Name">
              <label for="email"><i class="fa fa-envelope"></i> رقم الهاتف</label>
              <input type="text" id="email" name="phone" placeholder="phone">
              <label for="adr"><i class="fa fa-address-card-o"></i> العنوان بالكامل</label>
              <input type="text" id="adr" name="address" placeholder="Address">
              
  
             
            </div>
  
            
            
          </div>
          <label>
            
          <input type="submit" value="Continue to checkout" class="btn">
        </form>
      </div>
    </div>
    <div class="col-25">
      <div class="container">
        <h4>في السلة <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i></span></h4>
        <p><a href="#">Product 1</a> <span class="price">$15</span></p>
        <p><a href="#">Product 2</a> <span class="price">$5</span></p>
        <p><a href="#">Product 3</a> <span class="price">$8</span></p>
        <p><a href="#">Product 4</a> <span class="price">$2</span></p>
        <hr>
        <p>اجمالي <span class="price" style="color:black"><b>$30</b></span></p>
      </div>
    </div>
  </div>

  

</body>
</html>
