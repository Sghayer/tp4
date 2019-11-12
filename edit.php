<?php 
//recuperer les informations de l'etudiants par son id 
include 'dbconnexion.php';
$id = $_GET['id'];
$rep = $bd->prepare('SELECT * FROM students where id='.$id); 
$rep->execute();
$result = $rep->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="from-container">
<form action="update.php" method="post" accept-charset="utf-8">
        <label>firstname<input type="text" name="firstname" value="<?php echo $result['firstname'] ?>"></label><br>
         <label>lastname<input type="text" name="lastname"  value="<?php echo $result['lastname'] ?>"></label><br>
         <label>email<input type="text" name="email" value="<?php echo $result['email'] ?>"></label><br>
         <label>phone<input type="number"name="phone" value="<?php echo $result['phone'] ?>"></label><br>
         <input type="hidden" name="id" value="<?php echo $result['id'] ?>">
         <input type="submit" value="Modifier">
     </form>
    </div>
</body>
</html>