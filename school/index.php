<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
</head>
<body>

<?php
    include('navbar.php');
?>

<div class="container">
    <div class="row">
        <div class="col">
        <img src="https://www.championtutor.com/blog/wp-content/uploads/2020/03/good-secondary-school.jpg" alt="">
        </div>

        <div class="col">
            <table class="table" style="margin-top:100px; padding:20px;" >
                <tr>
                <td>
                <a href="addstudent.php"  class="btn btn-primary">New Student</button>
                </td>

                </tr>
                <tr>
                <td>
                <a href="showstudents.php" class="btn btn-primary">View Students</button>
                </td>
                </tr>
            </table>
        
        </div>
    </div>
</div>
    
</body>
</html>