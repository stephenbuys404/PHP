index.php---------------------------------

<!DOCTYPE html>
<html lang=''en''>
<head>
    <title>Gallery</title>
    <meta charset=''UTF-8''>
    <meta http-equiv=''X-UA-Compatible'' content=''IE=edge''>
    <meta name=''viewport'' content=''width=device-width, initial-scale=1.0''>
    <link rel=''stylesheet'' href=''https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css''>
    <link rel=''stylesheet'' href=''css/style.css''>
</head>
<body>
<nav class=''navbar navbar-expand-lg navbar-light bg-light''>
  <a class=''navbar-brand'' href=''#''>Gallery</a>
  <button class=''navbar-toggler'' type=''button'' data-toggle=''collapse'' data-target=''#navbarSupportedContent'' aria-controls=''navbarSupportedContent'' aria-expanded=''false'' aria-label=''Toggle navigation''>
    <span class=''navbar-toggler-icon''></span>
  </button>


  <div id=''carouselExampleSlidesOnly'' class=''carousel slide'' data-ride=''carousel''>
  <div class=''carousel-inner''>
    <div class=''carousel-item active''>
      <img class=''d-block w-100'' src=''...'' alt=''First slide''>
    </div>
    <div class=''carousel-item''>
      <img class=''d-block w-100'' src=''...'' alt=''Second slide''>
    </div>
    <div class=''carousel-item''>
      <img class=''d-block w-100'' src=''...'' alt=''Third slide''>
    </div>
  </div>
</div>

  <div class=''collapse navbar-collapse'' id=''navbarSupportedContent''>
    <ul class=''navbar-nav mr-auto''>
      <li class=''nav-item active''>
        <a class=''nav-link'' href=''#''>Home <span class=''sr-only''>(current)</span></a>
      </li>
      <li class=''nav-item''>
        <a class=''nav-link'' href=''#''>Link</a>
      </li>
      <li class=''nav-item dropdown''>
        <a class=''nav-link dropdown-toggle'' href=''#'' id=''navbarDropdown'' role=''button'' data-toggle=''dropdown'' aria-haspopup=''true'' aria-expanded=''false''>
          Dropdown
        </a>
        <div class=''dropdown-menu'' aria-labelledby=''navbarDropdown''>
          <a class=''dropdown-item'' href=''#''>Action</a>
          <a class=''dropdown-item'' href=''#''>Another action</a>
          <div class=''dropdown-divider''></div>
          <a class=''dropdown-item'' href=''#''>Something else here</a>
        </div>
      </li>
      <li class=''nav-item''>
        <a class=''nav-link disabled'' href=''#''>Disabled</a>
      </li>
    </ul>
    <form class=''form-inline my-2 my-lg-0'' action=''about.php'' method=''post''>

        <input type=''text'' name=''name''>
        <input type=''text'' name=''email''>
        <input type=''text'' name=''number''>

        <button type=''submit'' >Submit</button>
    </form>
  </div>
</nav>
</body>
</html>



about.php---------------------------------------------


<?php
    $con = mysqli_connect('localhost', 'root');

    if ($con){
        echo ''Conn Success'';
    }
    else
    {
        echo ''failed'';
    }

    mysqli_select_db($con, 'photography');

    $name = $_POST['name'];
    $email =$_POST['email'];
    $number =$_POST['number'];

    $query = ''INSERT INTO users(name, email, number) VALUES('$name', '$email', '$number')'';

    mysqli_query($con,$query);
    header('location:index.php');

?>