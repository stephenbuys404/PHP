<!DOCTYPE html>
--CREATE WEBSERVER COMMAND
--php -S localhost:4000
<html lang=''en'' dir=''ltr''>
  <head>
    <meta charset=''utf-8''>
    <title></title>
  </head>
  <body>
    <@php
      echo $_GET[''name''];
      $Name = ''Sally'';
      $Age = 1000;
      echo(''my name is $Name <br>'');
      echo ''and I am $Age years old <br>'';
      echo strtoupper(''sammy'');
      echo substr(''mine'',0,2);
    @>

    <form action=''site.php'' method=''get''>
      Name: <input type=''text'' name=''name''>
      <input type=''submit''>
    </form>
  </body>
</html>