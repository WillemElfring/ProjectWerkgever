<?php
/**
 * Created by PhpStorm.
 * User: Willem
 * Date: 3-4-2017
 * Time: 11:06
 */


$sql = "SELECT * FROM album";
$result = $mysqli->query($sql);
$albumList = convertResultToArray($result);