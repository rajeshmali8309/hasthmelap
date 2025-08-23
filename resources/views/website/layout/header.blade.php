<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="HasthMelap ek matrimonial website hai jaha ladka ya ladki ke liye perfect shaadi partner ki talash khatam hoti hai. Apna profile banaye aur best life partner paye.">
   <meta name="keywords" content="shaadi, matrimony, matrimonial site, marriage, ladka ladki shadi, online matchmaking, hasthmelap, partner search, wedding, rishta">
   <meta name="author" content="HasthMelap">
   <meta charset="UTF-8">

   <!-- Viewport (for mobile responsive) -->
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>@yield('title', 'Hasthmelap')</title>
   <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
   <link href="{{ url('css/global.css') }}" rel="stylesheet">
   <link href="{{ url('css/about.css') }}" rel="stylesheet">
   <link href="{{ url('css/index.css') }}" rel="stylesheet">
   <script src="{{ url('js/script.js') }}" defer></script>
   <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

   <!-- Font Awesome cdn -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

   <section id="header" style="position:fixed; width: 100%; z-index:1">
      <nav class="navbar navbar-expand-lg navbar-light w-100 shadow bg_theme">
         <div class="container-xl">
            <a class="d-flex text-white" href="{{route('index')}}">
               <!-- <b class="fs-3 d-block logo"><i class="bi bi-arrow-through-heart text-danger me-1 align-middle"></i>  Hasthmelap</b> -->
               <img src="{{ asset('image/logo2.png') }}" class="p-2" width="80" height="70" alt="Logo" />
            </a>
            <button class="navbar-toggler offcanvas-nav-btn  ms-auto me-3" type="button">
               <img src="{{ asset('image/icons-svg/list.svg') }}" width="40" height="40" alt="Open TemplateOnweb website menu" />
            </button>
            <div class="offcanvas offcanvas-start offcanvas-nav" style="width: 20rem">
               <div class="offcanvas-header shadow" style="background-color: rgb(247, 156, 129) !important;">
                  <a class="d-flex me-3 text-white" href="{{route('index')}}">
                     <img src="{{ asset('image/logo2.png') }}" width="60%" height="60%" alt="Logo" />
                  </a>
                  <img src="{{ asset('image/icons-svg/list.svg') }}" width="40" height="40" class="ms-auto bg_theme" data-bs-dismiss="offcanvas" aria-label="Close" alt="Close TemplateOnweb website menu" />

               </div>
               <div class="offcanvas-body pt-0 align-items-center">
                  <ul class="navbar-nav align-items-lg-center ms-auto">
                     <li class="nav-item">
                        <a class="nav-link" id="home-active" href="{{route('index')}}">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" id="gallery-active" href="{{route('gallery')}}">Gallery</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" id="services-active" href="{{route('services')}}">Services</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" id="about-active" href="{{route('about')}}">About Us</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" id="contact-active" href="{{route('contact')}}">Contact Us</a>
                     </li>
                  </ul>
                  <ul class="navbar-nav align-items-lg-center ms-auto">
                     <li class="nav-item dropdown drop_border">
                        <a class="nav-link dropdown-toggle fs-4" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           <i class="bi bi-person"></i>
                        </a>
                        <ul class="dropdown-menu drop_1 drop_log shadow" aria-labelledby="navbarDropdown">
                           @if(session()->has('user_id'))
                           <li><a class="dropdown-item" href="{{route('profile')}}"> Profile </a></li>
                           <li><a class="dropdown-item" href="{{route('logout')}}" onclick="return confirm('Do you really want to logout?')"> Logout </a></li>
                           @else
                           <li><a class="dropdown-item" href="{{route('login')}}"> Login </a></li>
                           <li><a class="dropdown-item border-0" href="{{route('register')}}"> Register</a></li>
                           @endif
                        </ul>
                     </li>

                     <li class="nav-item dropdown drop_border">
                        <a class="nav-link dropdown-toggle border-0 bg_theme fs-5" href="#" id="searchToggle">
                           <i class="bi bi-search"></i>
                        </a>
                        <ul class="dropdown-menu drop_1 drop_search shadow p-3">
                           <li>
                              <div class="input-group">
                                 <input type="text" id="searchBox" class="form-control" placeholder="Search by name and age">
                              </div>
                           </li>
                           <li>
                              <div id="searchResults" class="mt-3" style="display:none; max-height:250px; overflow-y:auto;">

                                 <!-- show search data in this section from ajax -->

                              </div>
                           </li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         </div>
      </nav>
   </section>