<?php
function searchCityTime($city_name)
{
    require('config/cities.php');

    foreach ($cities as $city) {
        if ($city["name"] === $city_name) {
            $date_time = new DateTime("", new DateTimeZone($city["time_zone"]));
            $time = $date_time->format("H:i");
            $city["time"] = $time;

            // デバック
            // var_dump($date_time);
            // echo "<br>";
            // var_dump($time);
            // echo "<br>";

            return $city;
        }
    }
}
