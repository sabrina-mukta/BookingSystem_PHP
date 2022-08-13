<?php
require "../config.php";
if (isset($_POST['save'])) {
$agentTable="CREATE TABLE agentTable (
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

$busTable="CREATE TABLE busTable (
    busId varchar(255) NOT NULL PRIMARY KEY,
    routeId varchar(255) NOT NULL,
    busNo varchar(255) NOT NULL,
    busName varchar(255) NOT NULL,
    seatNo varchar(255) NOT NULL,
    seatStatus varchar(255) NOT NULL
);";
$sql = mysqli_query($conn, $busTable);

$refundTable="CREATE TABLE refundTable (
    refundId varchar(255) NOT NULL PRIMARY KEY,
    passengerId varchar(255) NOT NULL,
    cancellationFees DECIMAL(10,2),
    causes varchar(255) NOT NULL,
    comment varchar(255) NOT NULL,
    refundStatus varchar(255) NOT NULL
);";
$sql = mysqli_query($conn,$refundTable );
$companySettings="CREATE TABLE companySettings (
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
$discountTable = "CREATE TABLE discountTable(
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

$passengerTable = "CREATE TABLE passengerTable(
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


$logTable = "CREATE TABLE logTable(
    logId varchar(255) NOT NULL PRIMARY KEY,
    userId varchar(255) NOT NULL,
    logingTime DATETIME,
    logoutTime timestamp,
    date date,
    userIp varchar(255)

    
);";

$sql = mysqli_query($conn, $logTable);

$bookingTable = "CREATE TABLE bookingTable(
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
$sql = mysqli_query($conn,$companySettings );
$userTypeTable = "CREATE TABLE userTypeTable(
    userTypeId varchar(255) NOT NULL PRIMARY KEY,
    userTypeName varchar(255) NOT NULL
    );";
$sql = mysqli_query($conn, $userTypeTable);

$userTable = "CREATE TABLE userTable(
    userId varchar(255) NOT NULL PRIMARY KEY,
    userName varchar(255) NOT NULL,
    userPassword varchar(255) NOT NULL,
    userEmail varchar(255) NOT NULL,
    userPhone int NOT NULL,
    userTypeId varchar(255),
    userStatus varchar(255)
    );";
$sql = mysqli_query($conn, $userTable);
$route = "CREATE TABLE route(
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
$del=unlink(__FILE__);
if($del==true){
    header("Location:login.php");
}

}

?>
<center>

</center>