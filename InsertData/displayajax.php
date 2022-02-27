<?php
$conn = mysqli_connect('localhost','root','','formdb');
$q = "select * from ajaxinsert";
$query = mysqli_query($conn,$q);
if(mysqli_num_rows($query)>0){
    while($result=mysqli_fetch_array($query)){
        ?>
         <tr>
            <td><?php echo $result['id'] ?></td>
            <td><?php echo $result['email'] ?></td>
            <td><?php echo $result['password'] ?></td>
         </tr>
        <?php
    }
}

?>