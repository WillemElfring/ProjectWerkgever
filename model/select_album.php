<?php
/**
 * Created by PhpStorm.
 * User: Willem
 * Date: 27-3-2017
 * Time: 19:44
 */


$sql = "SELECT * FROM `item` WHERE `Album_id` = ".$album['id'];
$result = $mysqli->query($sql);
$items = convertResultToArray($result);