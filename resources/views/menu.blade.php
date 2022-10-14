<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

  @yield("menu")
      <header id="header">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light">
            <div class="navbar-top">
              <div class="d-flex justify-content-between align-items-center">
                <ul class="navbar-top-left-menu">
                  
                </ul>
                <ul class="navbar-top-right-menu">
                  <li class="nav-item">
                    <a href="#" class="nav-link"><i class="mdi mdi-magnify"></i></a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo route("lg")?>" class="nav-link">Login</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="navbar-bottom">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <a class="navbar-brand" href="#"
                    ><img src="assets/images/logo.svg" alt=""
                  /></a>
                </div>
                <div>
                  <button
                    class="navbar-toggler"
                    type="button"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                  >
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div
                    class="navbar-collapse justify-content-center collapse"
                    id="navbarSupportedContent"
                  >
                    <ul
                      class="navbar-nav d-lg-flex justify-content-between align-items-center"
                    >
                      <li>
                        <button class="navbar-close">
                          <i class="mdi mdi-close"></i>
                        </button>
                      </li>
                      <li class="nav-item active">
                        <a class="nav-link" href="<?php echo route("ut")?>">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo route("op")?>">Opini</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo route("tg")?>">Tegnologi</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo route("ii")?>">Islami</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo route("og")?>">Olahraga</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo route("pl")?>">POLITIk</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo route("tr")?>">Travel</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo route("ct")?>">Contact</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <ul class="social-media">
                  <li>
                    <a href="#">
                      <i class="mdi mdi-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="mdi mdi-youtube"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="mdi mdi-twitter"></i>
                    </a>
                  </li>
                  <li>
                      <a href="#">
                        <i class="mdi mdi-instagram"></i>
                      </a>
                    </li> 
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </header>
</body>
</html>
    
 


