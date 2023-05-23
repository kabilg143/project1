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

      .tips-prev,
      .tips-next {
         position: absolute;
         top: 105%;
         transform: translateY(-50%);
         font-size: 20px;
         cursor: pointer;
         z-index: 1;
         background-color: #FF6600;
      }

      .tips-prev {
         left: 93%;
      }

      .tips-next {
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

      /* hover */
      .imghover {
         overflow: hidden;
      }

      .imghover img {
         transition: 0.5s all ease-in-out;
      }

      .imghover:hover img {
         transform: scale(1.1);
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
   <div style="display:flex;width:92%;margin-left:50px;">
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
      <div style="width:70%;padding-left:20px;margin:10px;border:1px solid grey;border-radius:5px;display:flex">
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

   <div style="display:flex;padding:2px;width:92%;margin:20px;margin-left:45px">
      <div style="width:50%;margin-left:10px"><img src="https://www.mowdirect.co.uk/media/homepage/Cordless-products.png"></div>
      <div style="width:30%;margin-left:10px"><img src="https://www.mowdirect.co.uk/media/homepage/Scarifiers.png"></div>
      <div style="width:30%;margin-left:10px"><img src="https://www.mowdirect.co.uk/media/homepage/robotic-lawnmower.png"></div>

   </div>

   <div style="text-align:center">
      <h2>Explore the <span style="color:#FF6600">top catogries</span></h2>
   </div>
   <div style="display:flex;margin:40px">
      <div class="imghover" style="margin-left:30px">
         <img src="https://www.mowdirect.co.uk/media/homepage/lawn-mowers.png" style="border-radius:10px">
         <p style="text-align:center;color:black">Lawn Mowers</p>
      </div>
      <div class="imghover" style="margin-left:70px">
         <img src="https://www.mowdirect.co.uk/media/homepage/hedgetrimmers.png" style="border-radius:10px">
      </div>
      <div class="imghover" style="margin-left:70px">
         <img src="https://www.mowdirect.co.uk/media/homepage/lawn-tractors.png" style="border-radius:10px">
      </div>
      <div class="imghover" style="margin-left:50px">
         <img src="https://www.mowdirect.co.uk/media/homepage/chainsaws.png" style="border-radius:10px">
      </div>
   </div>
   <div style="display:flex;margin:40px">
      <div class="imghover" style="margin-left:30px">
         <img src="https://www.mowdirect.co.uk/media/homepage/brushcutters.png" style="border-radius:10px">
      </div>
      <div class="imghover" style="margin-left:70px">
         <img src="https://www.mowdirect.co.uk/media/homepage/vacs-and-blowers.png" style="border-radius:10px">
      </div>
      <div class="imghover" style="margin-left:70px">
         <img src="https://www.mowdirect.co.uk/media/homepage/parts-and-accessories.png" style="border-radius:10px">
      </div>
      <div class="imghover" style="margin-left:50px">
         <img src="https://www.mowdirect.co.uk/media/homepage/tillers.png" style="border-radius:10px">
      </div>
   </div>

   <div style="width:90%;height:300px;margin-left:60px;display:flex">
      <div style="width:40%;padding:40px">
         <h2>Any <span style="color:#FF6600"> questions</span> on shopping at <br> Mowdirect? Our <span style="color:#FF6600">experts</span> are <br>happy to help.</h2>
         <p style="font-size:small">Book a slot and get your doubts clarified.</p>
         <a href="#"><button style="background-color:#5C814D;border-radius:3px;color:white">Book a call</button></a>
      </div>
      <div style="width:60%;padding-left:150px">
         <img src="https://www.mowdirect.co.uk/media/homepage/book-a-call.png">
      </div>
   </div>
   <div style="width:90%;height:200px;background-color:rgb(255,247,242);margin-left:60px">
      <h2 style="text-align:center;padding-top:20px">Shop by brand</h2>
      <img src="https://www.mowdirect.co.uk/media/catalog/category/M/o/Mountfield-160w-65h_2_1__2nd.png" style="padding-left:40px">
      <img src="https://www.mowdirect.co.uk/media/catalog/category/S/t/Stiga-Logo-160-65_2nd.png" style="padding-left:40px">
      <img src="https://www.mowdirect.co.uk/media/catalog/category/E/c/Echo-160-w-65h_2_2nd.jpg" style="padding-left:40px">
      <img src="https://www.mowdirect.co.uk/media/catalog/category/F/e/Feider-Logo-160-65_1_2nd.png" style="padding-left:40px">
      <img src="https://www.mowdirect.co.uk/media/catalog/category/E/n/Energizer-Logo-160-41-homepage_2nd.png" style="padding-left:40px">
      <img src="https://www.mowdirect.co.uk/media/catalog/category/R/a/Racing-Logo-New-160-65_2nd.png" style="padding-left:40px">
   </div>
   <h2 style="text-align:center;padding-top:20px">Tips and advice from our blog</h2>

   <div id="tips" style="display:flex;width:93%;height:430px;padding:10px;margin-left:45px;">
      <div style="width:400px;height:470px;border:1px solid grey;padding:10px;border-radius:10px">
         <img src="https://chipsimages.fra1.digitaloceanspaces.com/wp-content/uploads/2023/04/01103445/a-selection-of-fruits-and-vegetables-blog-sized.png" style="width:500px;height:350px;margin-left:-60px;border-radius:10px">
         <h5>May the Fruit & Veg Be with You: A Garden-Party Guide for King Charles III’s Coronation</h5>
         <button style="float:right;border-radius:10px;border-color:#FF6600">Read more</button>
      </div>
      <div style="width:400px;height:470px;border:1px solid grey;margin-left:20px;padding:10px;border-radius:10px">
         <img src="https://chipsimages.fra1.digitaloceanspaces.com/wp-content/uploads/2023/04/28142313/20110429000314973207-minihighres.jpg" style="width:380px;height:350px;border-radius:10px">
         <h5>The Coronation – Get your Garden Party-Ready!</h5>
         <button style="float:right;border-radius:10px;border-color:#FF6600">Read more</button>
      </div>
      <div style="width:400px;height:470px;border:1px solid grey;margin-left:20px;padding:10px;border-radius:10px">
         <img src="https://chipsimages.fra1.digitaloceanspaces.com/wp-content/uploads/2023/04/28111006/westminster-abbey-04-resize-2.png" style="width:380px;height:350px;border-radius:10px">
         <h5>The Coronation: ‘The King ascends the throne; the gardener wields his shovel.’</h5>
         <button style="float:right;border-radius:10px;border-color:#FF6600">Read more</button>
      </div>
      <div style="width:400px;height:470px;border:1px solid grey;margin-left:20px;padding:10px;border-radius:10px">
         <img src="https://chipsimages.fra1.digitaloceanspaces.com/wp-content/uploads/2023/02/22122953/beautiful-modern-house-cement-view-from-garden-1-e1677065721503.jpg" style="width:380px;height:350px;border-radius:10px">
         <h5>The Coronation: ‘The King ascends the throne; the gardener wields his shovel.’</h5>
         <button style="float:right;border-radius:10px;border-color:#FF6600">Read more</button>
      </div>
      <div style="width:400px;height:470px;border:1px solid grey;margin-left:20px;padding:10px;border-radius:10px">
         <img src="https://chipsimages.fra1.digitaloceanspaces.com/wp-content/uploads/2013/07/07125145/Mountfield-827M-Compact-Lawn-Rider-700c.jpg" style="width:380px;height:350px;border-radius:10px">
         <h5>The Coronation: ‘The King ascends the throne; the gardener wields his shovel.’</h5>
         <button style="float:right;border-radius:10px;border-color:#FF6600">Read more</button>
      </div>
   </div>

   <hr style='margin-top:50px;margin-left:50px;margin-right:50px;'>
   <div style='padding:20px;margin-left:50px;margin-right:50px;'>

      <h4 style='text-align:center;'>Mowdirect</h4>
      <p style='font-size:smaller'>Mowdirect The UK's leading online garden machinery retailer prides itself on delivering top quality service, reliable products, at competitive prices to meet the demands of you, our customers. We are backed by our specialist owners who are leaders in the Garden Machinery and DIY tools business across Europe and beyond. You will recognise many of our groups brands such as Energizer, Hyundai, Feider and Racing, then many of the brands we are specialist retailers for such as Stiga, Mountfield, MTD, Echo, Simplicity and OleoMac, covering pructs such as lawnmowers, chainsaws, hedgecutters, scarifiers, cultivators, brushcutters, strimmers, wheelbarrows, DIY power tools such as drills, sanders, jigsaws, and then with power sources including petrol, mains electred and cordless battery technology. One thing that really makes our organisation stand out from all of our competitor's is our EcoSystem, our commitment to the future, ecology and the environment. We have an ethos that products we supply will have a circular ongoing life, that the product will not contribute to landfill and litter the world. We have our re-working factory so that products start their life from new properly, that warranty repairs, damaged delivered goods are handled responsibly, goods are reworked and refurbished responsibly, then we also aim to give our products a second life when you have finished with it by simply returning it to us - the worst case is that items are dismantled and the raw material is recycled. We understand many of the problems people are facing financially at the moment, with our system we are kind to your pocket and then the environment all contributing to us living in a better world.</p>
   </div>
   <div style='background-color:rgb(255,247,242);height:1500px;width:91%;margin-left:60px;margin-right:10px;padding:10px;'>
      <div style='width:95%;height:200px;background-color:white;margin-top:50px;margin-left:30px;padding-top:4px'>
         <h2 style='text-align:center;color:#FF6600;margin-top:50px'>MowNews</h2>
         <p style='text-align:center;font-size:xx-small'>Sign up for tips, reviews & special offers</p>
         <center><input type="email" value="enter your email address..." style='width:50%;padding:5px;border-radius:10px;border-color:#FF6600'>
            <button type="submit" style='padding:5px;border-radius:10px;border-radius:10px;border-color:#FF6600;background-color:#5C814D'>submit</button>
         </center>
      </div>
      <div style='display:flex;margin:30px'>
         <div style='width:290px;text-align:center'>
            <img src="https://www.mowdirect.co.uk/media/homepage/fast-delivery.png">
            <span style='font-size:small'>Fast delivery with tracking</span> <br>
            <span style='font-size:smaller'>to UK Mainland</span>

         </div>
         <div style='width:250px;text-align:center'>
            <img src="https://www.mowdirect.co.uk/media/homepage/expert-advice.png">
            <span style='font-size:small'>Expert advise</span> <br>
            <span style='font-size:smaller'>Benefit from our experience</span>
         </div>
         <div style='width:290px;text-align:center'>
            <img src="https://www.mowdirect.co.uk/media/homepage/our-blog.png">
            <span style='font-size:small'>MowBog</span> <br>
            <span style='font-size:smaller'>MowTalk for news,views,&tips</span>
         </div>
         <div style='width:290px;text-align:center'>
            <img src="https://www.mowdirect.co.uk/media/homepage/secure-payment.png">
            <span style='font-size:small'>Secured payment</span><br>
            <span style='font-size:smaller'>3D secure</span>
         </div>
      </div>

      <div style="background-color:#FF6600;height:200px;display:flex">
         <div>
            <h2 style="color:white;margin-left:15px;margin-top:50px">Buying in Bulk or for Trade?</h2>
            <h5 style="color:white;margin-left:15px;margin-top:10px">Create your trade login to view your the special prices dedicated to our professional customers</h5>
            <button style="color:white;background-color:black;margin-left:15px;margin-top:10px">Explore now</button>
         </div>
         <div>
            <img src="https://www.mowdirect.co.uk/media/wysiwyg/Trade/trade-footer-image.png" style="margin-left:80%;margin-bottom:5%">
         </div>
      </div>

      <div style="width:99%;height:200px;margin:5px;display:flex">
         <div style="width:47%;border:1px solid #FF6600;margin:5px">
            <h4>Secured payment methods</h4>
            <img src="https://www.mowdirect.co.uk/media/wysiwyg/payment-images-01-2023.png">


         </div>
         <div style="width:47%;border:1px solid #FF6600;margin:5px">
            <h4>Lets stay in touch!</h4>
            <div style="display:flex">
               <div style="margin-left:5px;">
                  <img src="https://www.mowdirect.co.uk/media/theme/home-facebook.png">
                  <h6>facebook </h6>
               </div>
               <div style="margin-left:5px;">
                  <img src="https://www.mowdirect.co.uk/media/theme/home-twitter.png">
                  <h6>twitter</h6>
               </div>
               <div style="margin-left:5px;">
                  <img src="https://www.mowdirect.co.uk/media/theme/home-youTube.png">
                  <h6>youtube</h6>
               </div>
               <div style="margin-left:5px;">
                  <img src="https://www.mowdirect.co.uk/media/theme/home-instagram.png">
                  <h6>instagram</h6>
               </div>
               <div style="margin-left:5px;">
                  <img src="https://www.mowdirect.co.uk/media/homepage/blog-icon.png">
                  <h6>blog</h6>
               </div>
               <div style="margin-left:5px;">
                  <img src="https://www.mowdirect.co.uk/media/homepage/help-and-advice.png">
                  <h6>help&advice</h6>
               </div>
            </div>


         </div>
         <div style="width:20%;border:1px solid #FF6600;margin:5px">

            <img src="https://cdn.trustpilot.net/brand-assets/1.1.0/logo-white.svg">
            <h3>Trustpilot</h3>
            <img src="https://cdn.trustpilot.net/brand-assets/4.1.0/stars/stars-4.5.svg">
         </div>
      </div>
      <div style="width:90%;height:320px;display:flex;color:#FF6600">
         <div style="width:40%;height:300px;">
            <h2>About Us</h2>
            <a href="#">
               <h6>Our History</h6>
            </a>
            <a href="#">
               <h6>Our Promise</h6>
            </a>
            <a href="#">
               <h6>Contact Details</h6>
            </a>
            <a href="#">
               <h6>Terms & Conditions</h6>
            </a>
            <a href="#">
               <h6>Security</h6>
            </a>
            <a href="#">
               <h6>Privacy and Cookies</h6>
            </a>
            <a href="#">
               <h6>Our Community</h6>
            </a>

         </div>
         <div style="width:40%;height:300px;color:#FF6600">
            <h2>The Products</h2>
            <a href="#">
               <h6>Our History</h6>
            </a>
            <a href="#">
               <h6>Our Promise</h6>
            </a>
            <a href="#">
               <h6>Contact Details</h6>
            </a>
            <a href="#">
               <h6>Terms & Conditions</h6>
            </a>
            <a href="#">
               <h6>Security</h6>
            </a>
            <a href="#">
               <h6>Privacy and Cookies</h6>
            </a>
            <a href="#">
               <h6>Our Community</h6>
            </a>
         </div>
         <div style="width:40%;height:300px;color:#FF6600">
            <h2>Help & Advice</h2>
            <a href="#">
               <h6>Our History</h6>
            </a>
            <a href="#">
               <h6>Our Promise</h6>
            </a>
            <a href="#">
               <h6>Contact Details</h6>
            </a>
            <a href="#">
               <h6>Terms & Conditions</h6>
            </a>
            <a href="#">
               <h6>Security</h6>
            </a>
            <a href="#">
               <h6>Privacy and Cookies</h6>
            </a>
            <a href="#">
               <h6>Our Community</h6>
            </a>
         </div>
         <div style="width:40%;height:300px;color:#FF6600">
            <h2>Service & Support</h2>
            <a href="#">
               <h6>Our History</h6>
            </a>
            <a href="#">
               <h6>Our Promise</h6>
            </a>
            <a href="#">
               <h6>Contact Details</h6>
            </a>
            <a href="#">
               <h6>Terms & Conditions</h6>
            </a>
            <a href="#">
               <h6>Security</h6>
            </a>
            <a href="#">
               <h6>Privacy and Cookies</h6>
            </a>
            <a href="#">
               <h6>Our Community</h6>
            </a>
         </div>
      </div>
      <hr style='color:#FF6600'>
      <div>
         <h6 style="text-align:center">© 1999-2021 MowDirect. All Rights Reserved. Third party trademarks are hereby acknowledged.</h6>
      </div>
      <br>
      <br>
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

      var slider = $('#priceimg');

      slider.slick({
         slidesToShow: 5, // Show 5 images at a time
         slidesToScroll: 1, // Scroll 5 images at a time
         dots: false, // Hide navigation dots
         prevArrow: '<button type="button" class="pslick-prev"><</button>',
         nextArrow: '<button type="button" class="pslick-next">></button>',
      });

      var tips = $("#tips");
      tips.slick({
         slidesToShow: 3, // Show 5 images at a time
         slidesToScroll: 1, // Scroll 5 images at a time
         dots: false, // Hide navigation dots
         prevArrow: '<button type="button" class="tips-prev"><</button>',
         nextArrow: '<button type="button" class="tips-next">></button>',
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