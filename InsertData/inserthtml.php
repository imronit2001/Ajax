<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <title>Document</title>
</head>

<body>
    <h1 class="text-center">Insert Data</h1>
    <div class="container">
        <form id="myform" action="insert.php" method="post">
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
            </div>
            
            <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>

    <div class="container">
        <h1 class="text-center bg-dark text-white">Display Data Using Ajax</h1>
        <br>
        <table class="table table-stripped table-bordered text-center">
            <thead>
                <th>Id</th>
                <th>Email</th>
                <th>Password</th>
            </thead>
            <tbody id="response">

            </tbody>


        </table>
    </div>


    <script type="text/javascript">
        $(document).ready(function(){
            var form = $('#myform');
            $('#submit').click(function(){
                $.ajax({
                    url: form.attr("action"),
                    type: 'post',
                    data: $("#myform input".serialize()),
                    success: function(data){
                        console.log(data);
                    }
                })
            });
            displaydata();
            function displaydata(){
                $.ajax({
                    url: 'displayajax.php',
                    type: 'post',
                    success: function(responsedata){
                        $('#response').html(responsedata);
                    }
                })
            }
        });
        
    </script>
</body>

</html>