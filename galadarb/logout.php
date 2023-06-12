<link rel="shortcut icon" type="image/x-icon" href="images.jpg" />
<?php
unset($_SESSION["id"]);
unset($_SESSION["name"]);
header("Location:index.php");
?>