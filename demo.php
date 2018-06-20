<?php
include_once ('model/db.class.php');

$result = $conn->query("select * from phuhuynh");

while($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo $row['ph_id'];
}