<?php
    // Database Connection
    $servername = "localhost";
    $username = "nirajtamang";
    $password = "2065713";
    $database_name= "db_2065713";

    $conn = new mysqli($servername, $username, $password, $database_name);


// Select weather data for given parameters
$sql = "SELECT *
FROM weather
WHERE city = '{$_GET['city']}'
AND weather_when >= DATE_SUB(NOW(), INTERVAL 30 MINUTE)
ORDER BY weather_when DESC limit 1";
$result = $conn -> query($sql);

//If no record found
if ($result->num_rows == 0) {
    $url = 'https://api.openweathermap.org/data/2.5/weather?q=' . $_GET['city'] . '&appid=226088a93a805aef3b73b16d6d221352&units=metric';

    // Fetching data from openweathermap and storing in JSON object
    $data = file_get_contents($url);
    $json = json_decode($data, true);

    // Getting required data
    $weather_description = $json['weather'][0]['description'];
    $weather_temperature = $json['main']['temp'];
    $weather_wind = $json['wind']['speed'];
    $weather_when = date("Y-m-d H:i:s"); 
    $city = $json['name'];
    $humidity = $json['main']['humidity'];
    $pressure = $json['main']['pressure'];
    $windDegree = $json['wind']['deg'];

    // storing data in sql server
    $sql = "INSERT INTO weather (weather_description, weather_temperature, weather_wind, weather_when, city, humidity, pressure, wind_degree)
    VALUES('{$weather_description}', {$weather_temperature}, {$weather_wind}, '{$weather_when}', '{$city}', '{$humidity}', '{$pressure}', '{$windDegree}')";

    // error handling
    if (!$conn -> query($sql)) {
        echo("<h4>SQL error description: " . $conn -> error . "</h4>");

    }
}
?>