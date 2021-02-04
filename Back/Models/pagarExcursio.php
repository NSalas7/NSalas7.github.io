<?php

require_once "../Config/DBCon.php";
$excursio = 1;
$data = date("d-m-y")." ".date("h:i:s");



$sql = "Insert into Pagament (data,excursioactual_id) values($data,$excursio)";

echo $sql;