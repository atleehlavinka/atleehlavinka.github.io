<?php
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script defer src="js/lib/fontawesome-all.min.js"></script>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" >
        <link href="css/stylesheet.css" rel="stylesheet" >
        <link href="css/carousel.css" rel="stylesheet" >

        <title>The Idaho Souvenir Store</title>
    </head>
    <body class="backgroundimg">
    
        <header>
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark mb-5">
                <div class="container-fluid">
                    <div class="container-fluid row">
                        <div class="container container-fluid col">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarCollapse">
                                <ul class="navbar-nav me-auto mb-2 mb-md-0">
                                    <li class="nav-item mt-1">
                                        <a class="navbar-brand" href="index.html">The Idaho Souvenir Store</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="index.html">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="about.html">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact.html">Contact</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="store.html">Store</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="admin.php">Admin</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="listemployees.php">EmpList</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
              </nav>
        </header>
        
        <main>
        
          <div class="container sectiontitle">
            <br><br>
            <h1 class="mt-5 text-center ">Error</h1>
            <br><br><br><br>
          </div>

          <div class="container marketing sectioncontent mt-5 py-5 px-5 mb-5 bg-dark">
            <section class="container-fluid secondary" id="contact">
                <div class="container-fluid text-sm-center">
                    <h3><?php echo $_SESSION['message']; ?></h3>
                </div>
            </section>
          </div>
        </main>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        
          <footer class="bg-dark d-flex justify-content-center">
            <section class="layout-social py-5">
                <a class="text-light px-2" href="https://twitter.com/planetoftheweb">
                    <i class="layout-icon fab fa-twitter"></i>
                </a>
    
                <a class="text-light px-2" href="https://linkedin.com/in/planetoftheweb">
                    <i class="layout-icon fab fa-linkedin"></i>
                </a>
    
                <a class="text-light px-2" href="https://github.com/planetoftheweb">
                    <i class="layout-icon fab fa-github"></i>
                </a>
    
                <a class="text-light px-2" href="https://www.youtube.com/user/planetoftheweb">
                    <i class="layout-icon fab fa-youtube"></i>
                </a>
            </section>
          </footer>

      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      <script src="./js/contact.js"></script>
    </BODY>
</HTML>

