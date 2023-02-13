<?php

function Import($var = null)
{
  //    Import components
  if ($var == null) {
    echo '<p style="color:red;"> its like you have wrong directory in you import </p>';
  } else {
    require $var;
  }
}
function Seo($title, $description, $author, $url, $type, $image, $site_name)
{
  echo <<<EOT
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
                <link rel="shortcut icon" href="https://neilpatel.com/favicon.ico" type="image/x-icon">
                
                <title>12 Essential Open Graph Meta Tags for Facebook and Twitter</title>
                <meta name="description" content="Open graph meta tags provide more control over how social media sites display your links. Here's why they matter -- and how to implement them.">
                <link rel="canonical" href="https://neilpatel.com/blog/open-graph-meta-tags/">
                <meta property="og:locale" content="en_US">
                <meta property="og:type" content="article">
                <meta property="og:title" content="12 Essential Open Graph Meta Tags for Facebook and Twitter">
                <meta property="og:description" content="Open graph meta tags provide more control over how social media sites display your links. Here's why they matter -- and how to implement them.">
                <meta property="og:url" content="https://neilpatel.com/blog/open-graph-meta-tags/">
                <meta property="og:site_name" content="Neil Patel">
                <meta property="article:published_time" content="2022-08-04T19:00:00+00:00">
                <meta property="article:modified_time" content="2022-08-04T19:00:03+00:00">
                <meta property="og:image" content="https://neilpatel.com/wp-content/uploads/2022/07/ogp-tags-1-1-700x341.jpg">
                <meta name="author" content="Neil Patel">
                <meta name="twitter:card" content="summary_large_image">
                <meta name="twitter:label1" content="Written by">
                <meta name="twitter:data1" content="Neil Patel">
                <meta name="twitter:label2" content="Est. reading time">
                <meta name="twitter:data2" content="17 minutes">
                EOT;
}




?>