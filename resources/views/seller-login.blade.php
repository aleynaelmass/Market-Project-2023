<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Satıcı Giriş</title>
    <meta name="viewport" content="width=device-witdh, initial-scale=1">
    <!-- boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
   
    <link rel="stylesheet" href="{{asset('seller-login.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css')}}">
    
  
  </head>
  <body>

    <div> 
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
       
          <a
            class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold"
            href="../ttez/index.html"
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






<div class="login">
  <h1 class="text-center">Satıcı girişine hoşgeldiniz.</h1>
  <form class="needs-validation">
  <div class="form-group was-validated">
    <label class="form-label"for="email">Email Adress</label>
    <input class="form-control" type="email" id="email" required>
    <div class="invalid-feedback">
      Lütfen mail aderisini giriniz.
    </div>

  </div>
  <div class="form-group was-validated">
    <label class="form-label" for="password">Password</label>
    <input class="form-control" type="password" id="password" required>
    <div class="invalid-feedback">
      Lütfen mail şifrenizi giriniz.
    </div>
  </div>
  <div class="form-group form-check">
    <input class="form-check-input"type="checkbox" id="check">
    <label class="form-check-label" for="check">Beni Hatırla</label>

  </div>
  <input class="btn btn-success w-100" type="submit" value="Giriş Yapınız" >

  </form>

</div>

  </body>
</html>