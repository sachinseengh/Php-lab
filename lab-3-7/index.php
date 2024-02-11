<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="signupprocess.php" method="post">
   Name : <input type="text" name="name" id="name">
   <div class="nameerror">

<?php if(isset($_GET['nameerror'])) {?>
    <p class="error"><?php echo $_GET['nameerror']; ?></p>
    <?php } ?>

   </div>
   <br>
   
   Email :
   <input type="text" name="email" id="email">

   <div class="emailerror">

<?php if(isset($_GET['emailerror'])) {?>
    <p class="error"><?php echo $_GET['emailerror']; ?></p>
    <?php } ?>

   </div>
<br>

   <button type="submit">Submit</button>
<br>

   </form>
</body>
</html>