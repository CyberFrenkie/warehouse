
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('../css/main.css')}}">

    
    <title>Warehouse</title>
  </head>
  <body>
    <div class="wrapper text-center">
      <div class="header">
        <nav class="navbar navbar-expand-lg">
          <div class="container-fluid nav-container-fluid">
            <a class="navbar-brand" href="/">
              <img src="/img/zijin.png" alt="logo" class="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="/">Home</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="/in">IN</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="/out">OUT</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="/stock">STOCK</a>
                </li>
              </ul>
              
              
            </div>
          </div>
        </nav>
        <div class="main">
          @yield('content') 
        </div>
      </div>


   
      
        
        
        
      <div class="footer">
        <a href="" class="copy-link">&copy CyberFrenky</a>
      </div>
    </div>


   
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


  </body>
</html>