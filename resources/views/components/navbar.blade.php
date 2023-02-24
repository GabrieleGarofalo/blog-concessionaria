<script src="https://kit.fontawesome.com/f70f02fcab.js" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg contanier-navbar radius m-3">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img id="logo" src="./img/luxuryCar2.png" alt="">
      </a>
      <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse p-4 d-flex justify-content-between" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route('welcome')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('marche')}}">Marche</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('prezzi')}}">Prezzi</a>
          </li>
       
         
        
          <li class="nav-item">
            <a class="nav-link" href="{{route('chisiamo')}}">Chi Siamo</a>
          </li>
        
        </ul>
        <div class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-regular fa-heart text-white fs-4"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa-solid fa-gear text-white fs-4"></i></a>
          </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-user text-white fs-4"></i>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">accedi</a></li>
              <li><a class="dropdown-item" href="#">logout</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">recupera credenziali</a></li>
            </ul>
          </li>

          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">  <li class="nav-item">
              <a class="nav-link" href="{{route('prezzi')}}">Prezzi</a>
            </li></a></li>
            <li><a class="dropdown-item" href="#">logout</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">recupera credenziali</a></li>
          </ul>
        </li>



      </div>
      </div>
    </div>

  </nav>

