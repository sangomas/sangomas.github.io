
<html>
<head>
  <meta charset="utf-8" />
  <!-- Mobile Specifics  -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="HandheldFriendly" content="true"/>
  <meta name="MobileOptimized" content="320"/>

  <meta name="robots" content="noindex">
  <meta name="robots" content="nofollow">
  <link rel="icon" href="favicon.ico"/>
  <link rel="stylesheet" href="formate.css">
  <title>log in</title>
</head>
<body>
<?php
$name = $_POST["account"];



if ($name == "") {
echo "try again";
}
else {
echo "logged in as ".$name;

}
?>



<?php
$pdo = new PDO('mysql:host=localhost;dbname=Datenbank', 'sangomas', 'Sangomas34');

$pdo = null;
?>









</body>
</html>
