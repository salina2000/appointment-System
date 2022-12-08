<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>  
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Doctor Appointment Booking System</title>
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
    <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
      <header>
        <div>
        <nav class="navbar navbar-expand-lg fixed-top bg-primary">
          <div class="container">
            <a class="navbar-brand" href=" / ">Nanda Healthcare</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            
              @if (Route::has('login'))
              <ul class="navbar-nav">
              @auth
                <li class="nav-item active">
                    <a  href="{{ url('/home') }}"></a>
                      <a class="nav-link" href="{{ url('/home') }}" >Home </a>
              @else   
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/admin') }}">Login as Admin</a>
                </li>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">Login as User</a>
                </li>
                @if (Route::has('register'))
                <a href="{{ route('register') }}"></a>
                @endif
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>
                @endauth
                @endif
              </ul>
            </div>
          </div>
        </nav>
        </div>
    </header>
  
    <br><br><br><br><br><br>
        
       <div class="container" > 
        <div class="centre col-lg-13 col-lg-offset-13" >
            <div class="container" >
                <h1 style="text-align: center;"><strong>What services do we offer to our clients</strong></h1>
                <div class="row p-2 mt-5" style="text-align: center;">
                    <div class="col-6">
                        <div class="h-100 shadow-lg p-3 mb-3" style="border-radius:25px; background-color:rgb(254,254,254)">
                            <div class="d-flex flex-column justify-content-evenly" style="align-items:center">
                                <i class="fas fa-user-tie"></i>
                                <h2>Professionalism</h2>
                                <p>Professional and experienced doctors.</p>
                            </div>
                        </div>

                    </div>
                    <div class="col-6">
                        <div class="h-100 shadow-lg p-3 mb-3" style="border-radius:25px; background-color:rgb(254,254,254)">
                            <div class="d-flex flex-column justify-content-evenly" style="align-items:center">
                                <i class="fas fa-handshake"></i>
                                <h2>Reliable service</h2>
                                <p>Well-maintained equipments, reliable service.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row p-2 mt-3" style="text-align: center;">
                    <div class="col-6">
                        <div class="h-100 shadow-lg p-3 mb-3" style="border-radius:25px; background-color:rgb(254,254,254)">
                            <div class="d-flex flex-column justify-content-evenly" style="align-items:center">
                                <i class="fas fa-user-shield"></i>
                                <h2>Secure</h2>
                                <p>Client safety is top priority.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="h-100 shadow-lg p-3 mb-3" style="border-radius:25px; background-color:rgb(254,254,254)">
                            <div class="d-flex flex-column justify-content-evenly" style="align-items:center">
                                <i class="fas fa-headset"></i>
                                <h2>Great support</h2>
                                <p>We, welcome all customer request and provide professional support.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
      </div>
      
        
       
    </body>
</html>
