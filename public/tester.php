<html>
<head></head>
<body>
[<a href="index.php">Home</a>]
<h1>Server: {{item.servername}}</h1>
php Version: <?php echo phpversion();?><br/>
<h2>Proxy relevant stuff</h2>
<?php
foreach (getallheaders() as $name => $value) {
  if (preg_match('#^x\-forwarded\-#i', $name)) {
    echo "$name: $value\n<br/>";
  }
}
?>
Remote Addr: <?php echo $_SERVER['REMOTE_ADDR']?><br/>
HTTP_CLIENT_IP: <?php echo $_SERVER['HTTP_CLIENT_IP']?><br/>
HTTP_HOST: <?php echo $_SERVER['HTTP_HOST']?><br/>
<h2>All headers </h2>
<?php
foreach (getallheaders() as $name => $value) {
    echo "$name: $value\n<br/>";
}
?>
</body>
</html>
