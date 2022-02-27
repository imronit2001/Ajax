<?php
$conn = mysqli_connect('localhost','root','','formdb');
$nameid=$_POST['datapost'];
// $nameid=2;
$q = "select * from classes where mid='$nameid'";
$result = mysqli_query($conn,$q);
while($rows=mysqli_fetch_array($result)){
    ?>
    <option value=""><?php echo $rows['classes'];?></option>
    <?php
}
?>