<?php
// ++++Import the task to make some work easier+++++
require './workers/task.php'
     ?>
<?php

require './conf/config.php';
$url = 'Home';
$ip = $_SERVER['REMOTE_ADDR'];
$ip_info = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));

if ($ip_info && $ip_info->geoplugin_countryName != null) {

     $sql = "INSERT IGNORE INTO analys (topic,country, country_code, city, region, lat, long, continent_code, continent, timezone, currency, ip)
VALUES ('" . $url . "', '" . $ip_info->geoplugin_countryName . "', '" . $ip_info->geoplugin_countryCode . "', '" . $ip_info->geoplugin_city . "', '" . $ip_info->geoplugin_region . "',  '" . $ip_info->geoplugin_latitude . "', '" . $ip_info->geoplugin_longitude . "', '" . $ip_info->geoplugin_timezone . "', '" . $ip_info->geoplugin_continentCode . "', '" . $ip_info->geoplugin_continentName . "', '" . $ip_info->geoplugin_timezone . "','" . $ip_info->geoplugin_currencyCode . "')";
     $conn->exec($sql);
}

?>

<!-- Html code goes here -->

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
     <link rel="shortcut icon" href="./images/logo/me.png" type="image/x-icon">
     <title>Kilogrammy- The Best website development Company in Nigeria Lagos. Bring your ideal We can turn it to more powerfull and selling Point by building your company and also make you win #1 rank on google seo world</title>
    
<meta property="og:site_name" content="Kilogrammy" />

<meta property="og:type" content="website" />

<meta property="og:url" content="https://www.kilogrammy.com" />

<meta name="twitter:card" content="summary_large_image" />

<meta name="twitter:creator" content="@The_kilogrammy" />

<meta name="twitter:site" content="@The_kilogrammy" />

<meta property="og:title" content="Bring your ideal We can turn it to more powerfull and selling Point by building your company and also make you win #1 rank on google seo world" />

<met win="twitter:title" c seo worldontent="Bring your ideal We can turn it to more powerfull and selling Point by building your company and also make you win #1 rank on google seo world" />

<meta
  property="og:description"
  content="Maximize your online presence with the help of our multi-disciplinary digital solutions company. Our team of expert developers, designers, and SEO specialists create custom websites, mobile apps, logos, and user interfaces that deliver exceptional experiences. With our user-centered design approach, cutting-edge development techniques, and SEO-friendly optimization, you can trust us to help you stand out in a crowded market, drive more traffic, and increase your online revenue. Whether you need a simple brochure website or a complex e-commerce platform, we have the skills and expertise to bring your vision to life. Contact us today to start your digital journey."
/>

<meta
  name="description"
  content="Maximize your online presence with the help of our multi-disciplinary digital solutions company. Our team of expert developers, designers, and SEO specialists create custom websites, mobile apps, logos, and user interfaces that deliver exceptional experiences. With our user-centered design approach, cutting-edge development techniques, and SEO-friendly optimization, you can trust us to help you stand out in a crowded market, drive more traffic, and increase your online revenue. Whether you need a simple brochure website or a complex e-commerce platform, we have the skills and expertise to bring your vision to life. Contact us today to start your digital journey."
/>

<meta
  property="og:image"
  content="../images/banner_uiux.jpg"
/>

<meta
  name="twitter:image"
  content="../images/banner_uiux.jpg"
/>
     <link rel="stylesheet" href="./style/kilogrammy.css">
     <!-- bootrap cdn -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css"
          integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
     <!-- bootrap icons -->
     <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css"
          integrity="sha512-YFENbnqHbCRmJt5d+9lHimyEMt8LKSNTMLSaHjvsclnZGICeY/0KYEeiHwD1Ux4Tcao0h60tdcMv+0GljvWyHg=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>

<body>

     <!-- <?php
     // Import navigation Cpnts
     // Import('./components/nav.php');
     // Import Fist Home Hero Banner Cpnts
     // Import('./components/Home_Banner.php');
     // Import Fist Home about_section Banner Cpnts
     // Import('./components/about_section.php');
     // Import footer Cpnts
     // Import('./components/footer.php');
     

     // Import navigation Cpnts
     Import('./components/home_nav.php');

     // Import navigation Cpnts
     Import('./components/home.php');

     // Import footer Cpnts
     Import('./components/footer.php');
     ?>
 
    


</body>

</html>