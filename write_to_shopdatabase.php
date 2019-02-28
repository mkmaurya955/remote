<?php

include_once("config.php");

$UID= $_GET ['UID'];
$data = $_GET ['product1'];
$data1 = $_GET ['stock1'];
$data2 = $_GET ['product2'];
$data3 = $_GET ['stock2'];
$data4 = $_GET ['product3'];
$data5 = $_GET ['stock3'];
$data6 = $_GET ['product4'];
$data7 = $_GET ['stock4'];

//to update the table row by remote server(on web text=http://localhost/test/write_to_shopdatabase.php?product1=desktops&stock1=30&product2=lion&stock2=43&product3=animal&stock3=23&product4=cow&stock4=34&UID=surya)
$sql = "UPDATE shopkeeper SET product1 = '$data', stock1 = '$data1', product2 = '$data2', stock2 = '$data3', product3 = '$data4', stock3 = '$data5', product4= '$data6', stock4= '$data7'  WHERE UID = '$UID'";
$db->query($sql);
if ($db->query($sql) === TRUE) {
   // echo " Data entered correctly.";
} else {
   // echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "SELECT * FROM shopkeeper";
$result = $db->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "output : " . $row["output"];
        echo $row["product1"];
        echo $row["stock1"];
        echo $row["product2"];
        echo $row["stock2"];
        echo $row["product3"];
        echo $row["stock3"];
        echo $row["product4"];
        echo $row["stock4"];
        //echo $result;
    }
} else {
echo "Error: " . $sql . "  " . $db->error;
    echo "No results";
}

$db->close();

?>
