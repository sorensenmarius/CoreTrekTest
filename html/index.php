<?php
require_once ('../classes/DBConnection.php');
$db = new DBConnection('mySettings.ini');
?>
<html>
<body>
<pre>
<?php require_once ('../README.md');?>
</pre>
</body>
</html>
