<?php

$date = date("Y-m-d");
echo $date;
$con = mysqli_connect("localhost","root","", 'db_jack');
$sql = "SELECT * FROM winners WHERE date = '".$date."'";
// echo $sql;
$result= mysqli_query($con, $sql);
$winner = mysqli_num_rows($result);

?>

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Jackpot</title>

      <link rel="stylesheet" type="text/css" href="css/sweetalert2.css">
      <!-- <link rel="stylesheet" href="css/bootstrap.css">  -->
      <link rel="stylesheet" href="css/style.css">
    
</head>

<body>


  <body id="body">
<section class="container">
  <div class="cube roue1">
    <figure class="front"><img class="detail" width="200px" src="images/rainbow-sprinkles.png"></figure>
    <figure class="back"><img class="detail" width="200px" src="images/regular-chips.png"></figure>
    <figure class="top-front"><img class="detail" width="190px" src="images/double-big-boss-burger.png"></figure>
    <figure class="bottom-back"><img class="detail" width="190px" src="images/pride-buckets.png"></figure>
    <figure class="bottom-front"><img class="detail" width="190px" src="images/1-piece-chicken.png"></figure>
    <figure class="top-back"><img class="detail" width="200px" src="images/hot-chocolate.png"></figure>
    <figure class="top"><img class="detail" width="200px" src="images/candy-floss-syrup-cup.png"></figure>
    <figure class="bottom"><img class="detail" width="160px" src="images/win.jpg"></figure>
  </div>
  
  <div class="cube roue2">
    <figure class="front"><img class="detail" width="200px" src="images/rainbow-sprinkles.png"></figure>
    <figure class="back"><img class="detail" width="200px" src="images/regular-chips.png"></figure>
    <figure class="top-front"><img class="detail" width="190px" src="images/double-big-boss-burger.png"></figure>
    <figure class="bottom-back"><img class="detail" width="190px" src="images/pride-buckets.png"></figure>
    <figure class="bottom-front"><img class="detail" width="190px" src="images/1-piece-chicken.png"></figure>
    <figure class="top-back"><img class="detail" width="200px" src="images/hot-chocolate.png"></figure>
    <figure class="top"><img class="detail" width="200px" src="images/candy-floss-syrup-cup.png"></figure>
    <figure class="bottom"><img class="detail" width="160px" src="images/win.jpg"></figure>
  </div>
  
  <div class="cube roue3">
    <figure class="front"><img class="detail" width="200px" src="images/rainbow-sprinkles.png"></figure>
    <figure class="back"><img class="detail" width="200px" src="images/regular-chips.png"></figure>
    <figure class="top-front"><img class="detail" width="190px" src="images/double-big-boss-burger.png"></figure>
    <figure class="bottom-back"><img class="detail" width="190px" src="images/pride-buckets.png"></figure>
    <figure class="bottom-front"><img class="detail" width="190px" src="images/1-piece-chicken.png"></figure>
    <figure class="top-back"><img class="detail" width="200px" src="images/hot-chocolate.png"></figure>
    <figure class="top"><img class="detail" width="200px" src="images/candy-floss-syrup-cup.png"></figure>
    <figure class="bottom"><img class="detail" width="160px" src="images/win.jpg"></figure>
  </div>
  
  <svg class="svgInterface" xmlns="http://www.w3.org/2000/svg" width="506.3" height="419.1">
    <defs>
      <style type="text/css">@import url(https://fonts.googleapis.com/css?family=Fredoka+One|Oswald:700);</style>
      </defs>
  <path fill="#c1220d" opacity="1" d="M52.7 57.6h399v29h-399zM184.3 125.1h10v174h-10zM312.3 125.1h10v174h-10z"/>
  <path fill="#c1220d" opacity="1" d="M44.7 354.4h18.2c1.7 0 3-1.3 3-3V80.8c0-1.7-1.3-3-3-3H44.7c-1.7 0-3 1.3-3 3v270.7c0 1.6 1.3 2.9 3 2.9zM443.5 354.4h18.2c1.7 0 3-1.3 3-3V80.8c0-1.7-1.3-3-3-3h-18.2c-1.7 0-3 1.3-3 3v270.7c0 1.6 1.3 2.9 3 2.9zM503.3 0H3C1.3 0 0 1.3 0 3v60.9c0 1.7 1.3 3 3 3h500.3c1.7 0 3-1.3 3-3V3c0-1.7-1.3-3-3-3z"/>
    <text x="15" y="45" font-size="30" font-family='Fredoka One' fill="#fcee21">___WIN with Hungry Lion! ___ </text>
  <linearGradient id="a" x1="253.33" x2="253.33" y1="77.77" y2="153.77" gradientUnits="userSpaceOnUse">
    <stop offset=".87" stop-color="#c1220d"/>
    <stop offset="1" stop-color="#c1220d" stop-opacity="0.5"/>
  </linearGradient>
  <path fill="url(#a)" opacity="0.9" d="M59.8 77.8h387v76h-387z"/>
  <linearGradient id="b" x1="253.33" x2="253.33" y1="354.43" y2="278.43" gradientUnits="userSpaceOnUse">
    <stop offset=".87" stop-color="#c1220d"/>
    <stop offset="1" stop-color="#c1220d" stop-opacity="0.5"/>
  </linearGradient>
  <path fill="url(#b)" opacity="0.9" d="M59.8 278.4h387v76h-387z"/>
  
  
  <path fill="white" opacity="0.5"/>
  <a id="gobutton" style="cursor:pointer;"><path fill="#c1220d" stroke="#42210B" stroke-width="1.84" stroke-miterlimit="10" d="M153.3 345.1H56.8c-2.2 0-4-1.8-4-4v-35c0-2.2 1.8-4 4-4h96.5c2.2 0 4 1.8 4 4v35c0 2.3-1.8 4-4 4z"/>
    <text x="60" y="325" font-size="18" font-family='Oswald' fill="#fcee21">INSERT COIN</text>
  <path fill="#42210B" d="M67.3 332.4h74.2v6.7H67.3z"/></a>
  <a id="gobutton2" style="cursor:pointer;"><path fill="#42210B" d="M450.8 345.1h-96.5c-2.2 0-4-1.8-4-4v-35c0-2.2 1.8-4 4-4h96.5c2.2 0 4 1.8 4 4v35c0 2.3-1.8 4-4 4z"/>
    <text x="367" y="335" font-size="28" font-family='Oswald' fill="#fcee21">STOP !</text></a>
  <path fill="#c1220d" d="M313.3 419.1h-120c-2.2 0-4-1.8-4-4v-87.5c0-2.2 1.8-4 4-4h120c2.2 0 4 1.8 4 4v87.5c0 2.2-1.8 4-4 4z"/>
  <path fill="#c1220d" d="M276 352.1l-22.6 6.1-22.6-6.1"/>
  <path fill="#c1220d" d="M198.8 367.8h108.7v42.3H198.8z"/>
  <path fill="#c1220d" d="M198.8 367.8h108.7v10.6H198.8z"/>
  
</svg>
  

  
<svg id="roueFolle" xmlns="http://www.w3.org/2000/svg" width="1428.2" height="1428.2"><path fill="#FF0" d="M602.1 8.7c-16 2.5-31.9 5.6-47.6 9.2l100.2 391.9L602.1 8.7zM710.9 0c-16.2.1-32.2.7-48.1 1.8l39.3 402.5L710.9 0zm267.3 50.4c-15-6-30.2-11.4-45.6-16.4L818.9 422.2 978.2 50.4zM656.4 2.3c-16.2 1.3-32.2 3.1-48 5.5l69.8 398.4L656.4 2.3zm-108 17c-15.8 3.8-31.4 8-46.8 12.8l130.2 383-83.4-395.8zm378.2 12.8c-15.4-4.8-31-9-46.8-12.8l-83.4 395.8 130.2-383zM40.8 475.6c-5.4 15.2-10.3 30.6-14.6 46.2l392.3 98.6L40.8 475.6zM765.5 1.8C749.6.7 733.5.1 717.4 0l8.8 404.3L765.5 1.8zm54.4 6c-15.8-2.4-31.9-4.2-48-5.5L750 406.1 819.9 7.8zM495.6 34.1C480.2 39 465 44.5 450 50.4l159.3 371.8L495.6 34.1zM144.3 283.6c-9.7 12.8-19 26-27.8 39.5l343.9 212.8-316.1-252.3zM113 328.4c-8.7 13.6-17 27.5-24.8 41.6l359.2 185.8L113 328.4zM444.2 52.8c-15 6.1-29.7 12.7-44.2 19.8L587.4 431 444.2 52.8zM178.9 241.3c-10.7 12.1-20.9 24.5-30.7 37.2L474.9 517l-296-275.7zM61.1 424.7c-6.5 14.7-12.6 29.7-18.2 44.9l383.5 128.6L61.1 424.7zm24.1-49.1c-7.6 14.2-14.8 28.6-21.5 43.4l372.5 157.7-351-201.1zM394.3 75.5c-14.5 7.3-28.6 15-42.5 23.2l214.4 342.9L394.3 75.5zm-48 26.4c-13.8 8.3-27.3 17.1-40.5 26.3l240 325.5-199.5-351.8zm-45.7 29.9c-13.1 9.3-25.9 19.1-38.4 29.3l264.2 306.2-225.8-335.5zm-43.3 33.4c-12.4 10.3-24.4 21-36.1 32.1L508 482.6 257.3 165.2zM873.7 17.9c-15.7-3.6-31.5-6.6-47.6-9.1l-52.7 401L873.7 17.9zm549.5 611.3c-1.9-16.1-4.4-32.1-7.3-47.8l-395.4 85.1 402.7-37.3zM216.7 201.8c-11.5 11.2-22.7 22.8-33.5 34.8l307.6 262.6-274.1-297.4zm1028.4 34.8c-10.8-12-21.9-23.6-33.5-34.8L937.5 499.2l307.6-262.6zm182.5 447c-.7-16.2-1.9-32.2-3.6-48.1l-400.7 54.6 404.3-6.5zm-12.9-108.5c-3.1-15.9-6.8-31.7-11-47.2L1016 643.2l398.7-68.1zm13.1 163c.3-8 .4-16 .4-24.1 0-8.1-.2-16.1-.4-24.1L1024.1 714l403.7 24.1zm-216.2 488.3c11.5-11.2 22.7-22.8 33.5-34.8L937.5 929l274.1 297.4zM1402 521.8c-4.4-15.6-9.3-31.1-14.6-46.2l-377.6 144.8 392.2-98.6zM.4 690c-.2 8-.4 16-.4 24.1 0 8.1.2 16.1.4 24l403.7-24L.4 690zm182.8 501.6c10.8 12 21.9 23.6 33.5 34.8L490.8 929l-307.6 262.6zm893.2-1093c-13.9-8.2-28-15.9-42.5-23.2L862 441.5l214.4-342.9zm46.1 29.6c-13.2-9.2-26.7-18-40.5-26.3L882.4 453.7l240.1-325.5zm43.6 33c-12.5-10.2-25.2-20-38.4-29.3L901.9 467.4l264.2-306.2zm219.2 308.5c-5.5-15.2-11.6-30.2-18.2-44.9l-365.3 173.5 383.5-128.6zM1207 197.3c-11.6-11.1-23.7-21.8-36.1-32.1L920.3 482.6 1207 197.3zM1028.3 72.6c-14.5-7.1-29.2-13.7-44.2-19.8L840.8 431l187.5-358.4zm336.3 346.3c-6.7-14.7-13.9-29.2-21.5-43.4l-351 201.2 372.5-157.8zm-84.5-140.3c-9.8-12.8-20.1-25.2-30.8-37.2L953.4 517l326.7-238.4zM1340 370c-7.8-14.2-16-28-24.7-41.6L980.8 555.9 1340 370zm-28.2-46.9c-8.8-13.5-18.1-26.7-27.8-39.5L967.8 535.9l344-212.8zm-810.2 1073c15.4 4.8 31 9 46.8 12.8l83.4-395.8-130.2 383zm482.5-20.7c15-6.1 29.7-12.7 44.2-19.8L840.8 997.1l143.3 378.3zm-51.5 18.7c15.4-5 30.7-10.4 45.6-16.4L818.9 1006l113.7 388.1zm101.4-41.4c14.5-7.3 28.6-15 42.5-23.2L862 986.6l172 366.1zm-371.2 73.7c15.9 1.1 32 1.7 48.1 1.8l-8.8-404.3-39.3 402.5zm419.1-100.1c13.8-8.3 27.3-17.1 40.5-26.3l-240-325.5 199.5 351.8zm-364.6 101.9c16.2-.1 32.2-.7 48.1-1.8l-39.3-402.5-8.8 404.3zm54.5-2.3c16.2-1.3 32.2-3.1 48-5.5L750 1022l21.8 403.9zm399.2-163c12.4-10.3 24.4-21 36.1-32.1L920.3 945.6l250.7 317.3zm-344.9 156.5c16-2.5 31.9-5.6 47.6-9.2l-100.2-391.9 52.6 401.1zm53.7-10.6c15.8-3.8 31.4-8 46.8-12.8l-130.2-383 83.4 395.8zm247.9-112.5c13.1-9.3 25.9-19.1 38.4-29.3L901.9 960.8l225.8 335.5zm259.7-343.7c5.4-15.2 10.3-30.6 14.6-46.2l-392.3-98.6 377.7 144.8zm28.5-105.8c3-15.8 5.4-31.7 7.3-47.8l-402.7-37.2 395.4 85zm-12.2 53.4c4.2-15.5 7.9-31.3 11-47.2L1016 785l387.7 115.2zm20.2-107.5c1.7-15.9 3-31.9 3.6-48.1l-404.4-6.4 400.8 54.5zm-140 351.8c9.7-12.8 19-26 27.8-39.5L967.8 892.2l316.1 252.3zm-34.6 42.3c10.7-12.1 20.9-24.5 30.7-37.2L953.4 911.2l295.9 275.6zm66-87.1c8.7-13.5 16.9-27.4 24.7-41.6L980.8 872.3l334.5 227.4zm51.8-96.3c6.5-14.7 12.6-29.7 18.2-44.9l-383.5-128.6 365.3 173.5zm-24 49.2c7.6-14.2 14.8-28.6 21.5-43.4L992.1 851.5l351 201.1zM24.6 527.9c-4.2 15.5-7.9 31.3-11 47.2l398.7 68.1L24.6 527.9zm18.3 430.6c5.5 15.2 11.6 30.2 18.2 44.9l365.3-173.5L42.9 958.5zM13.6 853c3.1 15.9 6.8 31.7 11 47.2L412.2 785 13.6 853zm594.8 567.4c15.8 2.4 31.9 4.2 48 5.5l21.8-403.9-69.8 398.4zM63.7 1009.2c6.7 14.7 13.9 29.2 21.5 43.4l350.9-201.1-372.4 157.7zM5 799c1.9 16.1 4.4 32.1 7.3 47.8l395.4-85.1L5 799zm-.7-163.5c-1.7 15.9-3 31.9-3.6 48.1l404.4 6.4L4.3 635.5zm8.1-54.2c-3 15.8-5.4 31.7-7.3 47.8l402.7 37.2-395.4-85zM.7 744.6c.7 16.2 1.9 32.2 3.6 48.1L405 738.1.7 744.6zm87.5 313.6c7.8 14.2 16 28 24.7 41.6l334.5-227.4-359.2 185.8zm-62-151.9c4.4 15.6 9.3 31.1 14.6 46.2l377.6-144.8-392.2 98.6zM450 1377.7c15 6 30.2 11.4 45.6 16.4L609.3 1006 450 1377.7zm-98.2-48.2c13.9 8.2 28 15.9 42.5 23.2l171.9-366.1-214.4 342.9zm48.2 26c14.5 7.1 29.2 13.7 44.2 19.8l143.2-378.2L400 1355.5zm154.6 54.8c15.7 3.6 31.5 6.6 47.6 9.1l52.7-401-100.3 391.9zM116.5 1105c8.8 13.5 18.1 26.7 27.8 39.5l316.1-252.3L116.5 1105zm189.3 195c13.2 9.2 26.7 18 40.5 26.3l199.5-351.8-240 325.5zm-84.6-69.2c11.6 11.1 23.7 21.8 36.1 32.1L508 945.6l-286.8 285.2zm-73-81.2c9.8 12.8 20.1 25.2 30.8 37.2l295.9-275.6-326.7 238.4zm114 117.4c12.5 10.2 25.2 20 38.4 29.3l225.8-335.6L262.2 1267z"/></svg>
  
  </section>

</body>
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- <script src="js/bootstrap.js"></script> -->
    <script type="text/javascript" src="js/sweetalert2.js"></script>
    <script  src="js/function.js"></script>
    <script  src="js/index.js"></script>

    <script>
      var winner = "<?=$winner?>";
      console.log(winner);
      // if(winner >= 3){
      //   swal({
      //     type: 'info',
      //     title: 'There are 3 Winners',
      //   });
      // }
    </script>


</body>

</html>


