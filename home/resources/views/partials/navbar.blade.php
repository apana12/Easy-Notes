{{-- <div class="navbar_custom"> --}}
{{-- <a href="index">Home</a>
    <a href="quiz_game">Quiz</a>
    <a href="feedback">Feedback</a> --}}
<!-- dropdown start -->
{{-- <div class="btn-group"style="cursor: pointer; button:hover;backgroundcolor:#333;">
        <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown"
            aria-expanded="false"style="cursor: pointer; background-color: rgb(63, 63, 71);">
            Faculty
        </button>
        <div class="dropdown-menu" style="cursor: pointer">
            <a href="#">BIM</a>
            <a href="#">BCA</a>
            <a href="#">BSC.Csit</a>
        </div>
    </div> --}}

{{-- <div class="btn-group"style="cursor: pointer; button:hover;backgroundcolor:#333;">
        <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-bs-toggle="dropdown"
            aria-expanded="false"style="cursor: pointer; background-color: rgb(63, 63, 71);">
            Semester
        </button>
        <div class="dropdown-menu" style="cursor: pointer">
            <a href="#">1st Semester</a>
            <a href="#">2nd Semester</a>
            <a href="#">3rd semester</a>
            <a href="#">4th semester</a>
        </div>
    </div> --}}


<!-- dropdown end -->


{{-- <button type="login">Login</button> --}}
{{-- <input type="text" placeholder="search notes"> --}}

{{-- @auth
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
    @endguest --}}
<header class="p-3 bg-dark text-white">


    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap" />
                </svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="index" class="nav-link px-2 text-secondary">Home</a></li>
                <li><a href="quiz_game" class="nav-link px-2 text-white">Quiz</a></li>
                <li><a href="feedback" class="nav-link px-2 text-white">Feedback</a></li>

                <div class="dropdown1" style="padding-right:20px;">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Faculty
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="{{ route('faculties.bim') }}">BIM</a></li>
                        <li><a class="dropdown-item" href="{{ route('faculties.bca') }}">BCA</a></li>
                        <li><a class="dropdown-item" href="{{ route('faculties.bsc') }}">BSC.Csit</a></li>
                    </ul>
                </div>
            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search"
                    id="search">
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


</div>
{{-- <script>
    $('#search').on('keyup', function() {
        var query = $(this).val();
        $.ajax({
            url: "{{ route('homes.index') }}",
            type: "GET",
            data: {
                'query': query
            },
            success: function(data) {
                $('#facultyList').html(data);
            }
        })
    });
    $('body').on('click', 'li', function() {
        var value = $(this).text();
        //do what ever you want
    });
</script> --}}
