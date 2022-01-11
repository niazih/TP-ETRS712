

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>
<body>


<?php
include "config.php";

if ($conn){

        $sql = "select * from user";
        $result = $conn->query($sql);

        while ($data = $result->fetch()) {
            ?>




        <div class="container">
            <h1> Vous etes connecté !</h1>
            <small> bellow data is shown from database</small>
            <h4> username <?php echo $data['name'];  ?> and Email: <?php echo $data['email']; ?> From dataabse !</h4>
            <a href="#" class="btn btn-danger my-4"> <i class="fa fa-sign-out"></i> Deconnecter </a>
        </div>




    <?php

        }
        
}else{
?>

    <div class="container">
        <h1> Vous n'etes pas connecté !</h1>
    </div>

<?php
}
?>

</body>
</html>
