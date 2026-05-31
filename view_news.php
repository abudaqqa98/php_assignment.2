<?php

include("config.php");

$query = "SELECT * FROM news";

$result = mysqli_query($conn , $query);

?>

<table border="1">

<tr>
    <th>ID</th>
    <th>Title</th>
    <th>Category ID</th>
    <th>Details</th>
    <th>Image</th>
    <th>User ID</th>
</tr>

<?php

while($row = mysqli_fetch_assoc($result)){

?>

<tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['title']; ?></td>
<td><?php echo $row['category_id']; ?></td>
<td><?php echo $row['details']; ?></td>
<td><?php echo $row['image']; ?></td>
<td><?php echo $row['user_id']; ?></td>

</tr>

<?php } ?>

</table>