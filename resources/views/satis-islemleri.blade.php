<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Satış İşlemleri</title>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
       
        
        <link rel="stylesheet" href="{{asset('seller-dashboard.css')}}">
        <link rel="stylesheet" href="{{asset('bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('dataTables.bootstrap5.min.css')}}">
        <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css')}}">
        
     




        <title>Satıcı Dashboard</title>
      
      
      </head>
    

        <body>
            <!-- top navigation bar -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
              <div class="container-fluid">
                <button
                  class="navbar-toggler"
                  type="button"
                  data-bs-toggle="offcanvas"
                  data-bs-target="#sidebar"
                  aria-controls="offcanvasExample"
                >
                  <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
                </button>
                <a
                  class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold"
                  href="../ttez/seller-dashboard2.html"
                  >Dashboard</a
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
                        <li><a class="dropdown-item" href="#">Satıcı Bilgileri</a></li>
                        <li><a class="dropdown-item" href="#">Ürün İşlemleri</a></li>
                        <li>
                          <a class="dropdown-item" href="">Çıkış</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
            <!-- top navigation bar -->
            <!-- offcanvas -->
            <div class="offcanvas offcanvas-start sidebar-nav bg-dark"
              tabindex="-1"
              id="sidebar">
            
              <div class="offcanvas-body p-0">
                <nav class="navbar-dark">
                  <ul class="navbar-nav">
                    <li>
                      <div class="text-muted small fw-bold text-uppercase px-3">
                        Dashborad
                      </div>
                    </li>
                    <li>
                      <a href="#" class="nav-link px-3 active">
                        <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                        <span>Satıcı Bilgileri</span>
                      </a>
                    </li>
                    <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
                    <li>
                      <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                        İşlemler
                      </div>
                    </li>
                    <li>
                      <a
                        class="nav-link px-3 sidebar-link"
                        data-bs-toggle="collapse"
                        href="#layouts"
                      >
                        <span class="me-2"><i class="bi bi-layout-split"></i></span>
                        <span>Market İşlemleri</span>
                        <span class="ms-auto">
                          <span class="right-icon">
                            <i class="bi bi-chevron-down"></i>
                          </span>
                        </span>
                      </a>
                      <div class="collapse" id="layouts">
                        <ul class="navbar-nav ps-3">
                          <li>
                            <a href="#" class="nav-link px-3">
                              <span class="me-2"
                                ><i class="bi bi-speedometer2"></i
                              ></span>
                              <span>Ürünler</span>
                            </a>
                          </li>
                          <li>
                            <a href="#" class="nav-link px-3">
                              <span class="me-2"
                                ><i class="bi bi-speedometer2"></i
                              ></span>
                              <span>Satış</span>
                            </a>
                          </li>
                          <li>
                            <a href="#" class="nav-link px-3">
                              <span class="me-2"
                                ><i class="bi bi-speedometer2"></i
                              ></span>
                              <span>Piyasa analizi</span>
                            </a>
                          </li>
                          <li>
                            <a href="#" class="nav-link px-3">
                              <span class="me-2"
                                ><i class="bi bi-speedometer2"></i
                              ></span>
                              <span>Stok analizi</span>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li>
                      <a href="#" class="nav-link px-3">
                        <span class="me-2"><i class="bi bi-book-fill"></i></span>
                        <span>Satıcı Bilgileri</span>
                      </a>
                    </li>
                    <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
                    <li>
                      <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                        Ekişlemler
                      </div>
                    </li>
                   
                    <li>
                      <a href="#" class="nav-link px-3">
                        <span class="me-2"><i class="bi bi-table"></i></span>
                        <span>Tables</span>
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
            <!-- offcanvas -->
            <main class="mt-5 pt-3">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-12">
                    <h4>Satış İşlemi</h4>
                  </div>
                </div>
               
                <div class="row ">
                  <div class="col-md-6 mb-6  ">
                    <div class="card-body bg-primary text-white w-75 ">
                        <div class="card-body py-5"><a>Satış İşlemi gerçekleştirmek için Barkode okut.</a>
                            
                        
                        
                        </div>
                       

                       
                      </div>
                   
                  </div>
                  <div class="col-md-6 mb-6  ">
                    <div class="card-body bg-primary text-white w-75 ">
                        <div class="card-body py-5"><a>Ürünler</a>

                            
                        
                        
                        </div>
                       

                       
                      </div>
                   
                  </div>
                 
                </div>
                
                
            </main>
            <script src="{{asset('bootstrap.bundle.min.js')}}"></script>

            
            <script src="{{asset('https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js')}}"></script>
            <script src="{{asset('jquery-3.5.1.js')}}"></script>
            <script src="{{asset('jquery.dataTables.min.js')}}"></script>
            <script src="{{asset('dataTables.bootstrap5.min.js')}}"></script>
            <script src="{{asset('script.js')}}"></script>
            <script src="{{asset('bootstrap.min.css.map')}}"></script>
            
            
          </body>
</html>