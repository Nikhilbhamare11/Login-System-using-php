<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $loggedin = true;
}
else{
    $loggedin = false;
}

echo '<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark border-bottom border-body" data-bs-theme="dark"">
  <div class="container-fluid">
    <a class="navbar-brand" href="/Php Projects/LoginSystem/">MyLoginI</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/Php Projects/LoginSystem/welcome.php">Home</a>
        </li>';
        if(!$loggedin){
        echo '<li class="nav-item mx-2">
          <a class="btn btn-success" href="/Php Projects/LoginSystem/login.php" role="button">Login</a>
        </li>
        <li class="nav-item">
          <a class="btn btn-success" href="/Php Projects/LoginSystem/signup.php" role="button">SignUp</a>
        </li>';
        }
        if($loggedin){
          echo '<li class="nav-item mx-2">
            <a class="btn btn-outline-success" href="/Php Projects/LoginSystem/logout.php" role="button">LogOut</a>
          </li>
          </ul>';
        }

        echo'
        <!-- <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form> -->        
    </div>
  </div>
</nav>';
?>