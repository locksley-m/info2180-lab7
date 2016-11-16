<?php
$host = getenv('IP');
$username = getenv('C9_USER');
$password = '';
$dbname = 'world';

$checked= $_GET['all'];
$country = $_GET['country'];
$conn = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);

if($checked=='true')
   {
     $stmt = $conn->query("SELECT * FROM countries");
     $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
   }
   
else if($country != '' && $country != null)
   {
     $stmt = $conn->query("SELECT * FROM countries WHERE name LIKE '%$country%'");
     $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

echo '<h3>Result</h3>';
echo '<ul>';
     foreach ($results as $row){
        echo '<li>' . $row['name'] . ' is ruled by ' . $row['head_of_state'] . '</li>';
    }
    echo '</ul>';











