<?php

$sql = "SELECT * from item";
$result = $mysqli->query($sql);
$result = convertResultToArray($result);