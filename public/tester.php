<html>
<head></head>
<body>
[<a href="index.php">Home</a>]
<h1>PHP Tester</h1>
php Version: <?php echo phpversion();?><br/>
<h2>Proxy relevant stuff</h2>
<?php
foreach (getallheaders() as $name => $value) {
  if (preg_match('#^x\-forwarded\-#i', $name)) {
    echo "$name: $value\n<br/>";
  }
}
?>
<?php
foreach (getallheaders() as $name => $value) {
  if (preg_match('#^HTTP_#i', $name)) {
    echo "$name: $value\n<br/>";
  }
}
?>
<?php
foreach (getallheaders() as $name => $value) {
  if (preg_match('#^SERVER_#i', $name)) {
    echo "$name: $value\n<br/>";
  }
}
?>
Remote Addr: <?php echo $_SERVER['REMOTE_ADDR']?><br/>

<h2>All headers </h2>
<?php
foreach (getallheaders() as $name => $value) {
    echo "$name: $value\n<br/>";
}
?>
</body>
</html>
