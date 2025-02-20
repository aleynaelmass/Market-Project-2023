<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Anasayfa</title>
    <meta name="viewport" content="width=device-witdh, initial-scale=1">
    <!-- boostrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('admin-login.css')}}">
    
    <link
          rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
        />


        @vite('resources/js/app.js')


  </head>
  <body>

      <div class="container text-center">
        <div class="row">
          
          <div class="col">
            <div class="card w-100 " style="width: 18rem;">
                
                <div class="card-body">
                  <h5 class="card-title">Barkode Okuma Ekranı</h5>

                  <div id="readResult">

                  </div>
                  

                 <div id="scanning-text">Okunuyor ...</div>
                </div>
              </div>
          </div>
          
        </div>
      </div>


      <script>
              Quagga.init({
                  inputStream : {
                    name : "Live",
                    type : "LiveStream",
                    target: document.querySelector('#readResult')    // Or '#yourElement' (optional)
                  },
                  decoder : {
                    readers : ["code_128_reader"]
                  }
                }, function(err) {
                    if (err) {
                        console.log(err);
                        return
                    }
                    console.log("Initialization finished. Ready to start");
                    Quagga.start();
        });

      </script>

  </body>
</html>