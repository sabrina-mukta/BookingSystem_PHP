<?php
require "config.php";
if (isset($_POST['save'])) {
$agentTable="CREATE TABLE IF NOT EXISTS agentTable (
    agentId varchar(255) NOT NULL PRIMARY KEY,
    agentName varchar(255) NOT NULL,
    phoneNo int NOT NULL,
    companyName varchar(255),
    nid int,
    nidUpload varchar(255),
    picture varchar(255),
    email varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    address varchar(255) NOT NULL,
    address2 varchar(255),
    country varchar(255) NOT NULL,
    city varchar(255) NOT NULL,
    zip varchar(255) NOT NULL,
    district varchar(255) NOT NULL,
    gender varchar(255) NOT NULL,
    agentStatus varchar(255) NOT NULL
);";


$sql = mysqli_query($conn, $agentTable);

$busTable="CREATE TABLE IF NOT EXISTS busTable (
    busId varchar(255) NOT NULL PRIMARY KEY,
    routeId varchar(255) NOT NULL,
    busNo varchar(255) NOT NULL,
    busName varchar(255) NOT NULL,
    seatNo varchar(255) NOT NULL,
    seatStatus varchar(255) NOT NULL
);";
$sql = mysqli_query($conn, $busTable);

$refundTable="CREATE TABLE IF NOT EXISTS refundTable (
    refundId varchar(255) NOT NULL PRIMARY KEY,
    passengerId varchar(255) NOT NULL,
    cancellationFees DECIMAL(10,2),
    causes varchar(255) NOT NULL,
    comment varchar(255) NOT NULL,
    refundStatus varchar(255) NOT NULL
);";
$sql = mysqli_query($conn,$refundTable );
$companySettings="CREATE TABLE IF NOT EXISTS companySettings (
    companyId int NOT NULL PRIMARY KEY,
    companyName varchar(255) NOT NULL,
    Address varchar(255),
    email varchar(255) NOT NULL,
    phone int,
    favicon varchar(255) NOT NULL,
    logo varchar(255) NOT NULL,
    languageid varchar(255)
);";
$sql = mysqli_query($conn,$companySettings );
$discountTable = "CREATE TABLE IF NOT EXISTS discountTable(
    discountId int NOT NULL PRIMARY KEY,
    routeId varchar(255) NOT NULL,
    discountName varchar(255),
    startDate timestamp ,
    endDate DATETIME,
    discountPercent int,
    offerStatus varchar(255),
    offerCreationDate  date
);";
$sql = mysqli_query($conn, $discountTable);

$passengerTable = "CREATE TABLE IF NOT EXISTS passengerTable(
    passengerId varchar(255) NOT NULL PRIMARY KEY,
    firstName varchar(255) NOT NULL,
    middleName varchar(255),
    lastName varchar(255),
    phone int NOT NULL,
    emailAddress varchar(255) NOT NULL,
    dateOfBirth date NOT NULL,
    presentAddress varchar(255) NOT NULL,
    permanentAddress varchar(255) NOT NULL,
    country varchar(100),
    city varchar(100),
    zipCode int,
    status varchar(255)

    
);";

$sql = mysqli_query($conn, $passengerTable);


$logTable = "CREATE TABLE IF NOT EXISTS logTable(
    logId varchar(255) NOT NULL PRIMARY KEY,
    userId varchar(255) NOT NULL,
    logingTime DATETIME,
    logoutTime timestamp,
    date date,
    userIp varchar(255)

    
);";

$sql = mysqli_query($conn, $logTable);

$bookingTable = "CREATE TABLE IF NOT EXISTS bookingTable(
    bookingId varchar(255) NOT NULL PRIMARY KEY,
    busId varchar(255) NOT NULL,
    bookingDate DATETIME,
    passengerName varchar(255) NOT NULL,
    routeId varchar(255) ,
    routeName varchar(255) NOT NULL,
    totalSeatBooking varchar(255) NOT NULL,
    price DECIMAL(10,2),
    discount DECIMAL(10,2),
    priceWithDiscount DECIMAL(10,2),
    seatNumber varchar(255)

    
);";
$sql = mysqli_query($conn,$bookingTable );
$userTypeTable = "CREATE TABLE IF NOT EXISTS userTypeTable(
    userTypeId varchar(255) NOT NULL PRIMARY KEY,
    userTypeName varchar(255) NOT NULL
    );";
$sql = mysqli_query($conn, $userTypeTable);

$userTable = "CREATE TABLE IF NOT EXISTS userTable(
    userId varchar(255) NOT NULL PRIMARY KEY,
    userName varchar(255) NOT NULL,
    userPassword varchar(255) NOT NULL,
    userEmail varchar(255) NOT NULL,
    userPhone int NOT NULL,
    userTypeId varchar(255),
    userStatus varchar(255)
    );";
$sql = mysqli_query($conn, $userTable);
$route = "CREATE TABLE IF NOT EXISTS  route(
    routeId varchar(255) NOT NULL PRIMARY KEY,
    routeName varchar(255) NOT NULL,
    startPoint varchar(255),
    endPoint varchar(255),
    stoppagePoint varchar(255),
    distance varchar(255),
    approximateTime varchar(255),
    routeStatus varchar(255)
    );";
$sql = mysqli_query($conn, $route);
echo "Successfully Created All Tables";




sleep(1);
$del=unlink(__FILE__);
if($del==true){
    header("Location:login.php");
}

}

?><!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <div class="mx-auto" style="height: 200px;">
</div>
      <div class="container">
        <div class="col-md-12 text-center">
            <p>Please , Click Install for Properly Setup The Bus Booking System</p>
            <form action="" name="myForm" method="post" enctype="multipart/form-data">
    <input type="submit" class="btn btn-primary" name="save" value="install" />
</form>

        </div>
</body>
</html>