<?php

include("config.php");

$query = "SELECT * FROM categories";
$result = mysqli_query($conn , $query);

?>

<table border="1">
<tr>
    <th>ID</th>
    <th>Name</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result)){
?>

<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['name']; ?></td>
</tr>

<?php
}
?>

</table>