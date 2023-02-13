<?php
// ++++Import the task to make some work easier+++++
require '../workers/task.php';
require '../conf/config.php';

?>




<?php
// navigation
Import('../components/nav.php');

if (!empty($_GET['topic'])) {
    $topic = htmlentities($_GET['topic']);
    $ip = $_SERVER['REMOTE_ADDR'];
    $ip_info = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));

    if ($ip_info && $ip_info->geoplugin_countryName != null) {

        $sql = "INSERT IGNORE INTO analys (topic,country, country_code, city, region, lat, long, continent_code, continent, timezone, currency, ip)
VALUES ('" . $topic . "', '" . $ip_info->geoplugin_countryName . "', '" . $ip_info->geoplugin_countryCode . "', '" . $ip_info->geoplugin_city . "', '" . $ip_info->geoplugin_region . "',  '" . $ip_info->geoplugin_latitude . "', '" . $ip_info->geoplugin_longitude . "', '" . $ip_info->geoplugin_timezone . "', '" . $ip_info->geoplugin_continentCode . "', '" . $ip_info->geoplugin_continentName . "', '" . $ip_info->geoplugin_timezone . "','" . $ip_info->geoplugin_currencyCode . "')";
        $conn->exec($sql);
    }
    Import('../components/blogpage.php');

} else {
    $topic = "blog";
    $ip = $_SERVER['REMOTE_ADDR'];
    $ip_info = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=" . $ip));

    if ($ip_info && $ip_info->geoplugin_countryName != null) {

        $sql = "INSERT IGNORE INTO analys (topic,country, country_code, city, region, lat, long, continent_code, continent, timezone, currency, ip)
VALUES ('" . $url . "', '" . $ip_info->geoplugin_countryName . "', '" . $ip_info->geoplugin_countryCode . "', '" . $ip_info->geoplugin_city . "', '" . $ip_info->geoplugin_region . "',  '" . $ip_info->geoplugin_latitude . "', '" . $ip_info->geoplugin_longitude . "', '" . $ip_info->geoplugin_timezone . "', '" . $ip_info->geoplugin_continentCode . "', '" . $ip_info->geoplugin_continentName . "', '" . $ip_info->geoplugin_timezone . "','" . $ip_info->geoplugin_currencyCode . "')";
        $conn->exec($sql);
    }
    Import('../components/blog.php');

}

// footer
Import('../components/footer.php');
?>


</body>

</html>