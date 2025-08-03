<style>
  #create {
    border: 1px solid #0066ff;
    color: #0066ff;
    margin-right: 1rem;
  }

  #create:hover {
    border: 1px solid #0066ff;
    color: #ffffff;
    background-color: #0066ff;
  }

  #sign_out {
    border: 1px solid #e60000;
    color: #e60000;
  }

  #sign_out:hover {
    border: 1px solid #e60000;
    color: #ffffff;
    background-color: #e60000;
  }

</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tags</a>
        </li>
        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> -->
        <!-- <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li> -->
      </ul>
      <ul class="navbar-nav">
        <?php 
          if (isset($_SESSION['user_Fname'])) {
            echo "
              <li class='nav-item'>
                <a id='create' class='nav-link' aria-disabled='true' href='create_post.php'>Create</a>
              </li>

              <li class='nav-item'>
                <a id='sign_out' class='nav-link' aria-disabled='true' href='sign_out.php'>Sign Out</a>
              </li>
            ";
          } else {
            echo "
              <li class='nav-item '>
                <a class='nav-link' aria-disabled='true' href='sign_in.php'>Sign In</a>
              </li>

              <li class='nav-item'>
                <a class='nav-link' aria-disabled='true' href='sign_up.php'>Sign Up</a>
              </li>
            ";
          }
        ?>
      </ul>
    </div>
  </div>
</nav>