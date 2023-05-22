<!DOCTYPE html>
<html>

<head>
   <meta charset='utf-8'>
   <meta http-equiv='X-UA-Compatible' content='IE=edge'>
   <title>json</title>
   <meta name='viewport' content='width=device-width, initial-scale=1'>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
   <!-- <link rel='stylesheet' type='text/css' media='screen' href='main.css'> -->
   <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
   <style>
      body {
         margin: 0;
         padding: 0;
         font-family: Arial, Helvetica, sans-serif;
      }

      .topnav {
         overflow: hidden;
         background-color: #FFF7F2;
         padding-left: 50px;
      }

      .topnav a {
         float: left;
         color: #f2f2f2;
         text-align: center;
         padding: 14px 16px;
         text-decoration: none;
         font-size: 14px;
         color: black;
      }

      .topnav a:hover {
         background-color: #FF6600;
         color: white;
      }

      * {
         box-sizing: border-box;

      }

      body {
         font-family: Verdana, sans-serif;
      }

      .mySlides {
         display: none;
         width: 100%;
      }

      .slideshow-container {
         /* max-width: 1000px; */
         width: 100%;
         position: relative;
         margin: auto;
         padding: 0% 3%;
      }

      #logo {
         height: 50px;
         margin-left: 70px;
         margin-top: 30px;
         margin-bottom: 10px;
      }

      #logodiv {
         display: flex;
      }

      .search-container {
         margin-top: 35px;
         margin-left: 10px;
      }

      .search-container button:hover {
         background: #ccc;
      }

      #searchbar,
      #submit {
         height: 35px;
         border-radius: 8px;
      }

      #submit {
         background-color: #01A4EC;
      }

      #searchbar {
         width: 500px;
      }

      /* for slider img  */
      .slider,
      #priceimg {
         border: 1px solid black;
         width: 1000px;
         margin: 0 auto;
         display: flex;
      }

      .slider img,
      #slider img {
         width: 100%;
      }

      .slick-prev,
      .slick-next,
      .pslick-prev,
      .pslick-next {
         position: absolute;
         top: 105%;
         transform: translateY(-50%);
         font-size: 20px;
         cursor: pointer;
         z-index: 1;
         background-color: #FF6600;
      }

      .slick-prev {
         left: 10px;
      }

      .slick-next {
         right: 10px;
      }

      #priceimg {
         border: 1px solid black;
         border-radius: 10px;
         height: 400px;
         width: 90%;
      }

      .pslick-next {
         right: 10px;
      }

      .pslick-prev {
         left: 93%;

      }

      /* ..... */
      #pics {

         margin: 60px;
      }
   </style>
</head>

<body>
   <div id="logodiv">
      <img src="https://www.mowdirect.co.uk/media/logo/stores/1/mowdirect_logo.png" id="logo">
      <div class="search-container">
         <form action="#">
            <input type="text" placeholder="Search.." name="search" id="searchbar">
            <button type="submit" id="submit">&#x1F50D;</button>
         </form>
      </div>
   </div>
   <div id="shownav" class="topnav">
   </div>
   <div class="slideshow-container">
      <div class="mySlides fade">
         <img src="https://www.mowdirect.co.uk/media/mageplaza/bannerslider/banner/image/f/e/feider-fre7548v-03-23-desktop.png" style="width:100%">
      </div>
      <div class="mySlides fade">
         <img src="https://www.mowdirect.co.uk/media/mageplaza/bannerslider/banner/image/r/e/refurbished-hp-banner.png" style="width:100%">
      </div>
      <div class="mySlides fade">
         <img src="https://www.mowdirect.co.uk/media/mageplaza/bannerslider/banner/image/r/a/racing-ride-on-mower-desktop-01-23_2.png" style="width:100%">
      </div>
   </div>
   <br>
   <div class="text">
      <h1 style="color: #FF6600;text-align:center">Check out our latest garden machinery offers on MowDirect</h1>
      <h3 style="text-align:center">Our latest deals</h3>
   </div>


   <div id="priceimg">

   </div>
   <br>
   <br>
   <div id="pics">
      <a href="#"><img src="https://www.mowdirect.co.uk/media/homepage/stiga_cash_back.png"></a>
      <a href="#"> <img src="https://www.mowdirect.co.uk/media/homepage/echo_refunded.png"> </a>
      <a href="#"> <img src="https://www.mowdirect.co.uk/media/homepage/stiga_garden.png"></a>
   </div>
   <br>
   <br>
   <div style="border:1px solid black;display:flex">
      <div style="width:30%;background-color:lightgrey;padding:10px;margin:10px;border-radius:5px">
         <h1 style="color:#5C814D;text-align:center">Refurbished</h1>
         <p style="color:#5C814D;text-indent:30px;text-align:justify">
            At MowDirect we help you take care of the <br>
            environment and then your pocket thanks to our <br>
            <center>refurbushing factory</center><br>
            <center><a href="#"><button style="background-color:black;color:white;">see more</button></a></center>
         </p>
         <img src="https://www.mowdirect.co.uk/media/banners/refurbished/3d-globe.png" style="height:180px;margin-left:80px">
      </div>
      <div style="width:70%;padding-left:20px;margin:10px;border:1px solid black;border-radius:5px;display:flex">
         <div>
            <a href="#"><img src="https://www.mowdirect.co.uk/media/catalog/product/cache/b237878fcdf58dc16025927f3e1aaffb/s/i/simplicity-broadmoor-studio-web-9_1.jpg" style="height:140px;margin-left:50px;margin-top:30px"></a>
            <p style="font-size:small">Simplicity Broadmoor SYT410 Garden Tractor with Lawn-Striping Rollers | Refurbished Model</p>
            <p style="text-align:center"><b>£6,495</b></p>
            <p style="text-align:center"><s>£6,495</s></p>
         </div>
         <div>
            <a href="#"><img src="https://www.mowdirect.co.uk/media/catalog/product/cache/b237878fcdf58dc16025927f3e1aaffb/f/e/feider-tr5220-roller-mower-main-1500c_6_1.jpg" style="height:140px;margin-left:50px;margin-top:30px"></a>
            <p style="font-size:small">Feider TR5220ES Variable-Speed Petrol Rear-Roller Lawnmower with Electric Start | Refurbished Model</p>
            <p style="text-align:center"><b>£449</b></p>
            <p style="text-align:center"><s>£6,495</s></p>
         </div>
         <div>
            <a href="#"><img src="https://www.mowdirect.co.uk/media/catalog/product/cache/b237878fcdf58dc16025927f3e1aaffb/f/e/feider_sp_vac_cropped_1_2.jpg" style="height:140px;margin-left:50px;margin-top:30px"></a>
            <p style="font-size:small">Feider FAST175T Self-Propelled Wheeled Garden Vacuum | Refurbished Model</p>
            <p style="text-align:center"><b>£599.95</b></p>
            <p style="text-align:center"><s>£6,495</s></p>
         </div>
         <div>
            <a href="#"><img src="https://www.mowdirect.co.uk/media/catalog/product/cache/b237878fcdf58dc16025927f3e1aaffb/3/8/382354-cropped_1.jpg" style="height:140px;margin-left:50px;margin-top:30px"></a>
            <p style="font-size:small">WOLF-Garten SDE2800E EVO Electric Garden-Shredder | Refurbished Model</p>
            <p style="text-align:center"><b>£298</b></p>
            <p style="text-align:center"><s>£6,495</s></p>
         </div>


      </div>
   </div>



</body>

</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
   $(document).ready(function() {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.open("get", "http://localhost/project1/nav.json", false);
      xmlhttp.send();

      var result = xmlhttp.responseText;

      var par = JSON.parse(xmlhttp.responseText);
      var data = "";

      for (i = 0; i < par.length; i++) {
         data += '<a href="' + par[i]["link"] + '">' + par[i]["name"] + '</a>';
      }
      document.getElementById("shownav").innerHTML = data;

      var xmlhttp = new XMLHttpRequest();
      xmlhttp.open("get", "http://localhost/project1/price.json", false);
      xmlhttp.send();
      var result = xmlhttp.responseText;
      var par = JSON.parse(xmlhttp.responseText);
      var data = "";

      for (i = 0; i < par.length; i++) {
         data += '<div style="text-align:center"><img src=' + par[i]["link"] + " style='width:240px;height:250px'><br>" + par[i]["price"] + '<br><small>' + par[i]["name"] + '</small><br><a href="#">review</a> </div>';

      }
      document.getElementById("priceimg").innerHTML = data;
      var slider = $('#mySlider');

      slider.slick({
         slidesToShow: 5, // Show 5 images at a time
         slidesToScroll: 1, // Scroll 5 images at a time
         dots: false, // Hide navigation dots
         prevArrow: '<button type="button" class="slick-prev">Previous</button>',
         nextArrow: '<button type="button" class="slick-next">Next</button>',

      });
      var slider = $('#priceimg');

      slider.slick({
         slidesToShow: 5, // Show 5 images at a time
         slidesToScroll: 1, // Scroll 5 images at a time
         dots: false, // Hide navigation dots
         prevArrow: '<button type="button" class="pslick-prev"><</button>',
         nextArrow: '<button type="button" class="pslick-next">></button>',
      });
   });
</script>

<script>
   let slideIndex = 0;
   showSlides();

   function showSlides() {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      for (i = 0; i < slides.length; i++) {
         slides[i].style.display = "none";
      }
      slideIndex++;

      if (slideIndex > slides.length) {
         slideIndex = 1
      }
      slides[slideIndex - 1].style.display = "block";
      setTimeout(showSlides, 3000); // Change image every 2 seconds
   }
</script>