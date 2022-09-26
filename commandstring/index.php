<html lang="en">
<head>
<title>CommandString</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<?php
if (isset($_GET['command']))
    if ($_GET['command'] == 'ls' || $_GET['command'] == 'ps' || $_GET['command'] == 'whoami' || $_GET['command'] == 'id' || $_GET['command'] == 'pwd')
        system($_GET['command']);
    else echo 'Incorrect data';
?>
</body>
</html>