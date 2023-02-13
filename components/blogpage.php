<?php
require '../conf/config.php';
$topic = htmlentities($_GET['topic']);
$data = $conn->query("SELECT * FROM blog WHERE custom_url='" . $topic . "' order By id DESC LIMIT 1")->fetchAll();
// and somewhere later:
foreach ($data as $row) {
    $topicc = $row['topic'];
    $description = $row['desc'];
    $img = '../filemanager/' . $row['img1'];
    $textbox = $row['textbox'];
    $category = $row['category'];
    $url = $row['custom_url'];
}  


?>

<!-- Html code goes here -->


<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
     <link rel="shortcut icon" href="../images/logo/me.png" type="image/x-icon">
     <title><?php echo $topicc; ?> | Kilogrammy</title>
    
<meta property="og:site_name" content="Kilogrammy" />

<meta property="og:type" content="website" />

<meta property="og:url" content="https://www.kilogrammy.com/blog/<?php echo $url; ?>" />

<meta name="twitter:card" content="summary_large_image" />

<meta name="twitter:creator" content="@The_kilogrammy" />

<meta name="twitter:site" content="@The_kilogrammy" />

<meta property="og:title" content="<?php echo $topicc; ?>" />

<met win="twitter:title" content="<?php echo $topicc; ?>" />

<meta
  property="og:description"
  content="<?php echo $description; ?>"
/>

<meta
  name="description"
  content="<?php echo $description; ?>"
/>

<meta
  property="og:image"
  content="../images/logo/me.png"
/>

<meta
  name="twitter:image"
  content="../images/logo/me.png"
/>   <link rel="stylesheet" href="../style/kilogrammy.css">
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
    

<div class="container my-5 text-center col-lg-6 col-12" style="padding: 20px;
 border-radius:5px; ">
<h1 class="fw-bold" style="font-size:50px;">
<?php echo $topicc; ?>.
</h1>

<br>
<small style="color:gray">Writting by Kilogrammy author, Dont forget that we make website, mobile app,logo, and uiux design.</small>
<div class="p-2 d-flex my-4 shadow col-lg-12 col-12 justify-content-between text-center" style="border-radius:20px;">
<div class="btn fw-bold text-white my-2 p-2 col-lg-4 col-4 text-center" style="background:  var(--purple) !important;"><a href="../" style="text-decoration:none;color:white;">            Check out our works
</a>
        </div>
        <div class="btn fw-bold text-white my-2 p-2 col-lg-4 col-4 text-center" style="background:  var(--purple) !important;">
        <a href="https://kilogrammy.com/make-deal" style="text-decoration:none;color:white;">
        <a href="../contact_us" style="text-decoration: none; color:white; ">    Make a deal with us now</a>
        </a>
        </div>
</div>
</div>




<div class="container p-3 d-flex flex-wrap">
    <div class=" col-11 col-lg-8">
       
  <h3><?php echo $topicc; ?>.</h3>
  <p><?php echo $textbox; ?></p>
</div>
    </div>
   

</div>
<br>
<br>
