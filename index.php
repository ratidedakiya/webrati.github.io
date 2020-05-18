<!DOCTYPE html>
<html>
<head>
  <title></title>

  <link rel="stylesheet" type="text/css" href="rd.css">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="home2">
  <nav>
    <div class="logo">RATI</div>
   <div class="Home"> 
    <ul class="aa">
      <li ><a href="#"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
      <li ><a href="#"><i class="fa fa-sort-desc" aria-hidden="true"></i>Details</a>
        <div class="sub-menu">
          <ul>
            <li><a href="#">how to safe</a></li>
            <li><a href="#">how to spread</a></li>
            <li><a href="#">more</a></li>
          </ul>
        </div>
      </li>
      <li ><a href="about.php"><i class="fa fa-user" aria-hidden="true"></i>about me</a></li>
      <li ><a href="#"><i class="fa fa-phone" aria-hidden="true"></i>contact</a></li>
     
    </ul>
    </div>
  </nav>      
</div>




 <div class="heading">
  <h1>contact</h1>
</div> 



<div class="contact-form">
    <form id="contact-form" action="userinfo.php" method="POST"> 
      <input type="text" name="name" class="form-control" placeholder="your name" required>
      <br>
       <input type="email" name="email" class="form-control" placeholder="email" required>
      <br>
       <textarea type="text" name="msg" class="form-control" placeholder="comment" required></textarea>
      <br>
      <input type="submit"  class="form-control submit">


    </form>
</div>





</body>
</html>
