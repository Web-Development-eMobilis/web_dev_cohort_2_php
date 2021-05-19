
<?php
session_start();
//if statement to check
if(isset($_SESSION['name'])){
  //session
}else{
  //not logined
  header('location:login.php');
}
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">My School</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="showstudents.php">Students</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="addstudent.php">Add Students</a>
        </li>
       
        <li class="nav-item disabled">
          
          <a class="nav-link" href="#">Welcome  <?php echo $_SESSION['name']?></a>
        </li>

        <form class="d-flex" method="POST" action="logout.php">
        <button class="btn btn-outline-warning" type="submit">LogOut</button>
      </form>
      </ul>
    </div>
  </div>
</nav>

