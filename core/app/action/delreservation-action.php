<?php
/**
* BookMedik
* @author EliánMartínez
**/
$user = ReservationData::getById($_GET["id"]);
$user->del();
print "<script>window.location='index.php?view=reservations';</script>";

?>