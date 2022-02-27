<?php

$conn = mysqli_connect('localhost','root','','formdb');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container col-lg-6">
        <h2 class="text-center text-danger">Get Data from Database</h2>
        <form action="">
            Username: <input type="text" name="" id="" class="form-control"> <br>
            Password: <input type="password" name="" value="" class="form-control"> <br>
            Degree: <select name="" id="" class="form-control" onchange="myfunc(this.value)">
                <option value="">Select any one</option>
                <?php
                    $q = "select * from degree";
                    $result = mysqli_query($conn,$q);
                    while($rows=mysqli_fetch_array($result)){
                        ?>
                            <option value="<?php echo $rows['mid'];?>"><?php echo $rows['degrees']; ?></option>
                        <?php
                    }
                ?>
            </select>
            <br>
            Classes: <select name="" id="dataget" class="form-control">
                <option value="">Select any class</option>
            </select>
            <br><br>
            <button class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script type="text/javascript">
        function myfunc(datavalue){
            $.ajax({
                url:'class.php',
                type:'post',
                data:{datapost : datavalue},
                success: function(result){
                    $('#dataget').html(result);
                }
            });
        }
    </script>
</body>
</html>