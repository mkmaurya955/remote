<?php

include_once("config.php");

$UID= $_GET ['UID'];
$data = $_GET ['product1'];
$data1 = $_GET ['price1'];
$data2 = $_GET ['product2'];
$data3 = $_GET ['price2'];
$data4 = $_GET ['product3'];
$data5 = $_GET ['price3'];
$data6 = $_GET ['product4'];
$data7 = $_GET ['price4'];
$data8 = $_GET['total'];
//to update the table row by remote server(on web text=http://localhost/test/write_to_custdatabase.php?product1=desktops&price1=30&product2=lion&price2=43&product3=animal&price3=23&product4=cow&price4=34&total=345&UID=manish)
$sql = "UPDATE customer SET product1 = '$data', price1 = '$data1', product2 = '$data2', price2 = '$data3', product3 = '$data4', price3 = '$data5', product4= '$data6', price4= '$data7', total = '$data8'  WHERE UID = '$UID'";
$db->query($sql);
if ($db->query($sql) === TRUE) {
   // echo " Data entered correctly.";
} else {
   // echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "SELECT * FROM customer";
$result = $db->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "output : " . $row["output"];
        echo $row["product1"];
        echo $row["price1"];
        echo $row["product2"];
        echo $row["price2"];
        echo $row["product3"];
        echo $row["price3"];
        echo $row["product4"];
        echo $row["price4"];
        echo $row["total"];
        //echo $result;
    }
} else {
echo "Error: " . $sql . "  " . $db->error;
    echo "No results";
}

$db->close();

?>
