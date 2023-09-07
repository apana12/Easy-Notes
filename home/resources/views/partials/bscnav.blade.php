 <header class="p-3 bg-dark text-white">


     <div class="container">
         <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
             <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                 <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                     <use xlink:href="#bootstrap" />
                 </svg>
             </a>
             <div class="pull-right" style="padding-right:15px;">
                 <a class="btn btn-secondary" href="{{ route('homes.index') }}" enctype="multipart/form-data">Back</a>
             </div>
             <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                @auth
                 <div class="dropdown1" style="padding-right:20px;">
                     <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                         data-bs-toggle="dropdown" aria-expanded="false">
                         Semester
                     </button>
                     <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                         <li><a class="dropdown-item" href="{{ route('bsc_sem.1sem') }}">First Semester</a></li>
                         <li><a class="dropdown-item" href="{{ route('bsc_sem.2sem') }}">Second Semester</a></li>
                     </ul>
                 </div>
                @endauth
                 <div class="dropdown1" style="padding-right:20px;">
                     <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                         data-bs-toggle="dropdown" aria-expanded="false">
                         Syllabus
                     </button>
                     <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                         <li><a class="dropdown-item" href="{{ route('bsc_syl.1syl') }}">First Semester</a></li>
                         <li><a class="dropdown-item" href="{{ route('bsc_syl.2syl') }}">Second Semester</a></li>
                     </ul>
                 </div>

                 <div class="dropdown1" style="padding-right:20px;">
                     <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                         data-bs-toggle="dropdown" aria-expanded="false">
                         Old Questions
                     </button>
                     <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                         <li><a class="dropdown-item" href="{{ route('bsc_old.1old') }}">First Semester</a></li>
                         <li><a class="dropdown-item" href="{{ route('bsc_old.2old') }}">Second Semester</a></li>
                     </ul>
                 </div>
             </ul>

             <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                 <input type="search" class="form-control form-control-dark" placeholder="Search..."
                     aria-label="Search">
             </form>

             @auth
                 {{ auth()->user()->name }}
                 <div class="text-end">
                     <a href="{{ route('logout.perform') }}" class="btn btn-outline-light me-2">Logout</a>
                 </div>
             @endauth

             @guest
                 <div class="text-end">
                     <a href="{{ route('login.perform') }}" class="btn btn-outline-light me-2">Login</a>
                     <a href="{{ route('register.perform') }}" class="btn btn-warning">Sign-up</a>
                 </div>
             @endguest
         </div>
     </div>
 </header>
