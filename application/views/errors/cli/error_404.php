<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style>
    body{
      background: #1DBF73;
      color: #000;
    }
    ul{
      list-style: dotted;
    }
    li{
      padding: 4px;
    }
    h1{text-align: center; font-size: 40px;}
  </style>
</head>
<body>

  <h1>page not found. check your routes or link</h1>
  <h1>Requested URL: http://<?php echo $_SERVER['HTTP_HOST'];?> <?php echo $_SERVER['REQUEST_URI'];?></h1>
  <h1>Time: <?php echo date('d-m-Y,h:iA'); ?></h1>
  

</body>
</html>