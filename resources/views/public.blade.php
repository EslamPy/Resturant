<!DOCTYPE html>
<html lang="ar" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sale Website</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"/>
    <link rel="shortcut icon" type="image/png" href="/img/logo.png">
  </head>
  <body>
    <header id="home">
      <nav class="navbar">
        <img
          style="width: 127px; margin-right: 50px"src="img/logo.png"alt=""/>

        <ul class="nav-list">
          <li class="nav-item"><a href="{{ route('public') }}">الرئيسية</a></li>
          <li class="nav-item"><a href="{{ route('Products') }}">قائمة الطعام</a></li>
        </ul>
      </nav>

      <div class="sale-banner">
        <img style="width: 90%" src="img/ba.png" alt=""/>
        <
      </div>
    </header>

    <section class="abut_us">
      <h1>نبذة عنا</h1>
      <p>
        مطعم
        <span>العليين</span>
        ، الموجود في (القطيف - الجارودية)، يعتبر وجهة
        <span>لذيذة ومثيرة</span>
        لعشاق المأكولات
        <span>العربية التقليدية</span>
        . يتميز المطعم
        <span> بأجوائه الراقية والمريحة</span>
        ، حيث يستقبل الزوار بألوان
        <span> دافئة وديكور عصري</span>
        مذهل، مما يجعل تجربة تناول الطعام أكثر
        <span> جاذبية وسحرًا</span>
        . يتميز
        <span>قائمة الطعام</span>
        بمنوعاتها اللذيذة من
        <span> المعجنات الطازجة، والمشويات الشهية، والشاورما المميزة، </span>
        ، إلى جانب
        <span>المقبلات الشهية والمقليات المقرمشة</span>
        . بالإضافة إلى ذلك، يتمتع المطعم
        <span> بسمعة ممتازة</span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </p>
    </section>
    <main>
      <section class="products" id="products">
        <a href=""><div class="product">قسم المعجنات</div></a>
        <a href=""><div class="product">قسم المشويات</div></a>
        <a href=""><div class="product">قسم الشاورما</div></a>
        <a href=""><div class="product">قسم المقليات</div></a>
        <a href=""><div class="product">قسم المقبلات</div></a>
        <a href=""><div class="product">قسم العصيرات</div></a>
      </section>
    </main>
    <footer>
      <p>التواصل</p>
      <a href="">
        <p>
          +966138559289
          <span class="material-symbols-outlined"> call </span>
        </p>
      </a>

      <a href="">
        <p>
          +966533357031
          <span class="material-symbols-outlined"> call </span>
        </p>
      </a>

      <a href="">
        <p>
          القطيف - الجارودية
          <span class="material-symbols-outlined"> location_on </span>
        </p>
      </a>

      <a href="">
        <p>
          @alaliyean
          <span class="material-symbols-outlined"> call </span>
        </p>
      </a>
    </footer>
  </body>
</html>
