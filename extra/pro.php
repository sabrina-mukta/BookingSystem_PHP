<?php
require "../config.php";
$sql = "
DELIMITER $$

CREATE PROCEDURE insertBusTable(
    busId varchar(255),
    routeId varchar(255),
    busNo varchar(255),
    busName varchar(255),
    seatNo varchar(255),
    seatStatus varchar(255)
)
BEGIN
INSERT INTO `busTable`(`busId`, `routeId`, `busNo`, `busName`, `seatNo`, `seatStatus`) VALUES (busId,routeId,busNo,busName,seatNo,seatStatus);

END$$ ";
$sql1 = mysqli_query($conn, $sql);
?>
