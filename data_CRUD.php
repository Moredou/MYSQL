<?php 

$servername = "";
$username = "";
$password = "";
$dbname = "";

//connect to the account
$conn = mysqli_connect($servername, $username, $password); 
//check database
if(!$conn)
{
    die('Could not connect!:'.mysqli_error());
}
//select the database
mysqli_select_db($conn, $dbname);
//create a table
$sql = "CREATE TABLE table_name(table_id INT(11) AUTO_INCREMENT PRIMARY KEY, table_name varchar(45))";
mysqli_query($conn, $sql);

//insert info to table
$sql = "INSERT INTO table_name(table_id, table_name)VALUES('0','name1')";
mysqli_query($conn,$sql);

//update info to table

$sql = "UPDATE table_name SET table_name= 'XXX' WHERE table_id= 'XX'";

//delete the info from table

$sql = "DELETE FROM table_name WHERE table_id = 'X'"

$result = mysqli_query($conn, "SELECT * FROM table_name");

//print the thead colmun
echo "<table><thead><tr><td>TableID</td><td>TableName</td></tr></thead>";

//loop the table
while($row = mysqli_fetch_array($result))
{
    echo "<tbody>";
    echo "<tr>";
    echo "<td>".$row['table_id']."</td>";
    echo "<td>".$row['table_name']."</td>";
    echo "</tr>";
    echo "</tbody>";

}

echo "<'table>";

//close the database
mysqli_close($conn);

?>