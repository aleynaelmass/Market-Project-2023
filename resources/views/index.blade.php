<!--<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="./css/index.css" />
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Navbar</a>
              <a class="navbar-brand" href="../ttez/login.html">logın</a>
            </div>
          </nav>

    </div>
    <div class="container text-center">
        <div class="row">
          <div class="col">
            
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Market Seç
                </button>
                <ul class="dropdown-menu dropdown-menu-dark">
                  <li><a class="dropdown-item " href="#"> Market1</a></li>
                  <li><a class="dropdown-item" href="#">Market2</a></li>
                  <li><a class="dropdown-item" href="#">Market3</a></li>
                  
                  <li><a class="dropdown-item" href="#">Market4</a></li>
                </ul>
              </div>

            
            
          </div>
          <div class="col">
            <div> <h1>Barcode okut</h1></div>
            
          </div>
        </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>!-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Anasayfa</title>
    <meta name="viewport" content="width=device-witdh, initial-scale=1">
    <!-- boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('admin-login.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css')}}">
    
    
  </head>
  <body>
    <div> 
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
       
          <a
            class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold"
            href="../ttez/seller-dashboard2.html"
            >Anasayfa</a
          >
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#topNavBar"
            aria-controls="topNavBar"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="topNavBar">
            <form class="d-flex ms-auto my-3 my-lg-0">
              <div class="input-group">
                
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle ms-2"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <i class="bi bi-person-fill"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li><a class="dropdown-item" href="./seller-login.html">Satıcı Girişi</a></li>
                  <li><a class="dropdown-item" href="./admin-login.html">Admin Girişi</a></li>
                  <li>
                    <a class="dropdown-item" href="../ttez/index.html">Anasayfa</a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav></div>


  
    <div class="container text-center">
        <div class="row">
          <div class="col">
            <div class="card w-100 " style="width: 18rem;">
                
                <div class="card-body">
                  <h5 class="card-title">Marketi Seç Barkodu okut.</h5>
                  <p class="card-text">Marketi seçtikten sonra barkode okutabilirsin.</p>
                  <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Marketler
                    </button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Market 1</a></li>
                      <li><a class="dropdown-item" href="#">Market 2</a></li>
                      <li><a class="dropdown-item" href="#">Market 3</a></li>
                    </ul>
                  </div>
                </div>
              </div>
          </div>
          <div class="col">
            <div class="card w-100 " style="width: 18rem;">
                
                <div class="card-body">
                  <h5 class="card-title">Barkode</h5>

                 <div>Barkode Ekranı</div>

                 <a class="btn btn-lg px-4 mt-2 btn-primary" href="{{route('scan-barcode')}}">Aç</a>
                </div>
              </div>
          </div>
          
        </div>
      </div>


  </body>
</html>