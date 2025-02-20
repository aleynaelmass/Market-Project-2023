<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
       
        
        <link rel="stylesheet" href="{{asset('bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('dataTables.bootstrap5.min.css')}}">
        <link rel="stylesheet" href="{{asset('admin-dashboard.css')}}">
        <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css')}}">


        <title>Admin Dashboard</title>
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
                  href="../ttez/admin-dashboard.html"
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
                        <li><a class="dropdown-item" href="#">Admin Bilgileri</a></li>
                        <li><a class="dropdown-item" href="#">İşlemler</a></li>
                        <li>
                          <a class="dropdown-item" href="../ttez/admin-login.html">Çıkış</a>
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
                      <a href="./admin-bilgileri.html" class="nav-link px-3 active">
                        <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                        <span>Admin Bilgileri</span>
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
                              <span>Marketler</span>
                            </a>
                          </li>
                          <li>
                            <a href="#" class="nav-link px-3">
                              <span class="me-2"
                                ><i class="bi bi-speedometer2"></i
                              ></span>
                              <span>Geri Bildirim Ekranı</span>
                            </a>
                          </li>
                         
                          
                        </ul>
                      </div>
                    </li>
                    
                    <li>
                      <a href="#" class="nav-link px-3">
                        <span class="me-2"><i class="bi bi-book-fill"></i></span>
                        <span>Market ve Satıcı Bilgileri</span>
                      </a>
                    </li>
                    
                    <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
                    <li>
                      <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                        Ek işlemler
                      </div>
                    </li>
                   
                    <li>
                      <a href="#" class="nav-link px-3">
                        <span class="me-2"><i class="bi bi-table"></i></span>
                        <span>Tüm Ürünler</span>
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
                    <h4>Dashboard</h4>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3 mb-3">
                    <div class="card bg-primary text-white h-100">
                      <div class="card-body py-5"> <a href="#" class="btn btn-primary">Market işlemleri için tıklayınız.</a></div>
                      
                    </div>
                  </div>
                  <div class="col-md-3 mb-3">
                    <div class="card bg-warning text-white h-100">
                      <div class="card-body py-5"><a href="#" class="btn btn-warning text-white"> Ürün İşlemleri için tıklayınız. </a></div>
                     
                    </div>
                    
                  </div>
                  <div class="col-md-3 mb-3 w-50">
                    <div class="card bg-warning text-white ">
                      <div class="card-body py-5"><a href="#" class="btn btn-warning text-white"> Market İşlemleri </a></div>
                      
                     
                    </div>
                    
                  </div>
                   
                  
                  
                </div>
                <div class="row">
                  <div class="col-md-6 mb-3">
                   
                  </div>
                  <div class="col-md-6 mb-3">
                    
                  </div>
                </div>
                <div class="row">
                    
                    <div class="col-md-6 mb-3">
                      <div class="card h-100">
                        <div class="card-header">
                          <span class="me-2"><i class="bi bi-bar-chart-fill"></i></span>
                          Marketlerin satışları
                        </div>
                        <div class="card-body">
                          <canvas class="chart" width="400" height="200">
                           
                          </canvas>
                        </div>
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
            <script src="{{asset('admin-dash.js')}}"></script>
          
            
          </body>
</html>