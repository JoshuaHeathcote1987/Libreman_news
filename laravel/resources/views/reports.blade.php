<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Libreman-Report</title>

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Serif:wght@500&family=Roboto+Slab:wght@500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/my.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fs-all.css') }}">

    <style>
        body {
            background: rgb(0, 95, 255);
            background: linear-gradient(120deg, rgba(0, 95, 255, 1) 0%, rgba(0, 27, 71, 1) 50%, rgba(65, 0, 0, 1) 50%, rgba(255, 0, 0, 1) 100%);
            background-repeat: no-repeat;
            background-size: 100% auto;
            background-position: center top;
            background-attachment: fixed;
            overflow-x: hidden;
        }

    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-white">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
                aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="{{ url('/') }}">📰 Libreman</a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled"></a>
                    </li>
                </ul>


                <form action="{{ route('logout') }}" method="post">
                    @if (Auth::check())
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown dropdown-menu-end dropdown-menu-lg-start">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ Auth::user()->name }}
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end"
                                        aria-labelledby="navbarDarkDropdownMenuLink">
                                        @csrf
                                        <li><button type="submit" class="dropdown-item btn btn-link"><i
                                                    class="fa-solid fa-arrow-right-from-bracket"></i>&nbsp;&nbsp;&nbsp;&nbsp;Logout</button>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    @else
                        <a class="mx-3 text-decoration-none text-white" href="{{ route('login') }}">🔐 Login</a>
                        <a class="text-decoration-none text-white" href="{{ route('register') }}">🖋 Register</a>
                    @endif
                </form>

            </div>
        </div>
    </nav>

    {{-- Navbar Bottom --}}
    <nav class="navbar fixed-bottom navbar-light border-top border-dark bg-light bg-gradient">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <div class="ml-5" id="dateAndTime">Starting Now...</div>
            </a>
        </div>
    </nav>

    <div class="row px-2 py-2">
        {{-- Column 1 --}}
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="card text-center">
                <div class="card-header bg-dark bg-gradient text-white">
                    Monday 24th February 2022
                </div>
                <div class="card-body">
                    <h5 class="card-title">The Black Belt</h5>
                    <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Et tortor consequat id porta nibh
                        venenatis cras. Tempus egestas sed sed risus pretium quam. Nec ultrices dui sapien eget mi
                        proin. Gravida rutrum quisque non tellus orci ac. Ultricies integer quis auctor elit sed
                        vulputate. Amet facilisis magna etiam tempor orci eu lobortis. Arcu vitae elementum curabitur
                        vitae. Adipiscing commodo elit at imperdiet dui accumsan sit amet nulla. Euismod lacinia at quis
                        risus sed vulputate. Etiam erat velit scelerisque in dictum non consectetur a erat. Id volutpat
                        lacus laoreet non curabitur gravida. Sit amet dictum sit amet justo donec enim diam vulputate.
                        Iaculis nunc sed augue lacus viverra vitae congue eu.
                        Sit amet purus gravida quis. Non arcu risus quis varius. Aliquet porttitor lacus luctus
                        accumsan. Arcu dictum varius duis at consectetur lorem. Nisl vel pretium lectus quam id leo in
                        vitae turpis. Mattis nunc sed blandit libero volutpat sed. Sit amet consectetur adipiscing elit
                        duis tristique sollicitudin nibh sit. Mauris vitae ultricies leo integer malesuada. Etiam erat
                        velit scelerisque in. Euismod quis viverra nibh cras pulvinar mattis nunc sed blandit.
                        In fermentum posuere urna nec tincidunt praesent semper feugiat. Dictumst vestibulum rhoncus est
                        pellentesque elit ullamcorper dignissim. Vulputate mi sit amet mauris commodo quis. Sapien eget
                        mi proin sed libero enim sed faucibus turpis. Nunc sed velit dignissim sodales. Massa sed
                        elementum tempus egestas. Dapibus ultrices in iaculis nunc sed augue lacus viverra vitae.
                        Integer eget aliquet nibh praesent tristique. Ultrices mi tempus imperdiet nulla malesuada
                        pellentesque. Ultricies integer quis auctor elit sed. Posuere morbi leo urna molestie at
                        elementum eu facilisis. Senectus et netus et malesuada fames ac turpis. Condimentum mattis
                        pellentesque id nibh tortor id aliquet lectus proin. Eu consequat ac felis donec et odio. Massa
                        enim nec dui nunc mattis enim. Dictum non consectetur a erat nam at. Nisl vel pretium lectus
                        quam id leo in. Sagittis eu volutpat odio facilisis. Lectus mauris ultrices eros in cursus
                        turpis massa tincidunt.</p>

                    <a href="#"><i class="fa-brands fa-facebook text-dark fa-xl mx-1"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram text-dark fa-xl mx-1"></i></a>
                    <a href="#"><i class="fa-solid fa-envelope text-dark fa-xl mx-1"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter text-dark fa-xl mx-1"></i></a>
                    <hr>
                    <i type="button" class="fa-solid fa-pen-to-square fa-xl mx-1" data-bs-toggle="modal"
                    data-bs-target="#editArticle"></i>
                    <i type="button" class="fa-solid fa-circle-plus fa-xl mx-1" data-bs-toggle="modal"
                        data-bs-target="#createArticle"></i>
                    <i type="button" class="fa-solid fa-circle-minus fa-xl mx-1" data-bs-toggle="modal"
                    data-bs-target="#deleteArticle"></i>
                </div>
                <div class="card-footer bg-secondary bg-gradient text-white">
                    2 days ago
                </div>
            </div>
            {{-- Comments --}}
            <div class="d-grid gap-2">
                <button class="btn btn-dark border-bottom border-white my-2" type="button" data-bs-toggle="collapse"
                    data-bs-target="#commentCollapse" aria-expanded="false" aria-controls="collapseExample">
                    Show / Hide Comments
                </button>
            </div>
            </p>
            <div class="collapse" style="margin-bottom: 4rem;" id="commentCollapse">
                <div class="card card-body" style="text-align: justify;">
                    <h3>Joshua</h3>
                    <h4>Tuesday 25th February 2022</h4>
                    <hr>
                    <p>eiusmod tempor incididunt ut labore et dolore magna aliqua. Et tortor consequat id porta nibh
                        venenatis cras. Tempus egestas sed sed risus pretium quam. Nec ultrices dui sapien eget mi
                        proin. Gravida rutrum quisque non tellus orci ac. Ultricies integer quis auctor elit sed
                        vulputate. Amet facilisis magna etiam tempor orci eu lobortis. Arcu vitae elementum curabitur
                        vitae. Adipiscing commodo elit at imperdiet dui accumsan sit amet nulla. Euismod lacinia at quis
                        risus sed vulputate. Etiam erat velit scelerisque in dictum non consectetur a erat. Id volutpat
                        lacus laoreet non curabitur gravida. Sit amet dictum sit amet justo donec enim diam vulputate.
                        Iaculis nunc sed augue lacus viverra vitae congue eu.
                        Sit amet purus gravida quis. Non arcu risus quis varius. Aliquet porttitor lacus luctus
                        accumsan. Arcu dictum varius duis at consectetur lorem. Nisl vel pretium lectus quam id leo in
                        vitae turpis. Mattis nunc sed blandit libero volutpat sed. Sit amet consectetur adipiscing elit
                        duis tristique sollicitudin nibh sit. Mauris vitae ultricies leo integer malesuada. Etiam erat
                        velit scelerisque in. Euismod quis viverra nibh cras pulvinar mattis nunc sed blandit.
                        In fermentum posuere urna nec tincidunt praesent semper feugiat. Dictumst vestibulum rhoncus est
                        pellentesque elit ullamcorper dignissim. Vulputate mi sit amet mauris commodo quis. Sapien eget
                        mi proin sed libero enim sed faucibus turpis. Nunc sed velit dignissim sodales. Massa sed
                        elementum tempus egestas. Dapibus ultrices in iaculis nunc sed augue lacus viverra vitae.
                        Integer eget aliquet nibh praesent tristique. Ultrices mi tempus imperdiet nulla malesuada
                        pellentesque. Ultricies integer quis auctor elit sed. Posuere morbi leo urna molestie at
                        elementum eu facilisis. Senectus et netus et malesuada fames ac turpis. Condimentum mattis
                        pellentesque id nibh tortor id aliquet lectus proin. Eu consequat ac felis donec et odio. Massa
                        enim nec dui nunc mattis enim. Dictum non consectetur a erat nam at. Nisl vel pretium lectus
                        quam id leo in. Sagittis eu volutpat odio facilisis. Lectus mauris ultrices eros in cursus
                        turpis massa tincidunt.</p>

                    <hr>
                    <div class="text-left">
                        <i type="button" class="fa-solid fa-pen-to-square fa-xl mx-1" data-bs-toggle="modal"
                        data-bs-target="#createComment"></i>
                        <i type="button" class="fa-solid fa-circle-plus fa-xl mx-1" data-bs-toggle="modal"
                        data-bs-target="#editComment"></i>
                        <i type="button" class="fa-solid fa-circle-minus fa-xl mx-1" data-bs-toggle="modal"
                        data-bs-target="#deleteComment"></i>
                    </div>
                </div>
            </div>
        </div>
        {{-- Column 2 --}}
        <div class="col-lg-6 col-md-6 col-sm-12 d-none d-sm-block d-sm-none d-md-block">
            <div class="row">
                <div class="col-xl-4 col-lg-6 col-md-6 mb-2">
                    <div class="card" style="width: 100%;">
                        <img src="https://assets.thehansindia.com/h-upload/2022/02/27/1279101-ukraine-war.jpg"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                        <div class="card-footer text-muted">
                            2 days ago
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mb-2">
                    <div class="card" style="width: 100%;">
                        <img src="https://payuka.co.ke/wp-content/uploads/2022/02/Russia-ukraine-war.jpg"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                        <div class="card-footer text-muted">
                            2 days ago
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 mb-2">
                    <div class="card" style="width: 100%;">
                        <img src="https://i0.wp.com/sonorasonora.com/wp-content/uploads/2022/02/War-in-Ukraine-At-UN-a-Russian-delegate-apologizes.jpg?resize=1024%2C538&ssl=1"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                        <div class="card-footer text-muted">
                            2 days ago
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createArticle">
        Launch demo modal
    </button>

    <!-- Article Modals -->
    <div class="modal fade" id="createArticle" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Article</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="form-floating" action="" method="POST">
                        <div class="form-floating mb-3">
                            <input name="head" type="text" class="form-control" id="floatingInput"
                                placeholder="name@example.com">
                            <label for="floatingInput">Head</label>
                        </div>
                        <div class="form-floating">
                            <textarea name="body" class="form-control" placeholder="Leave a comment here"
                                id="floatingTextarea"></textarea>
                            <label for="floatingTextarea">Body</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editArticle" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Article</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="form-floating" action="" method="POST">
                        @csrf
                        <div class="form-floating mb-3">
                            <input name="head" type="text" class="form-control" id="floatingInput"
                                placeholder="name@example.com">
                            <label for="floatingInput">Head</label>
                        </div>
                        <div class="form-floating">
                            <textarea name="body" class="form-control" placeholder="Leave a comment here"
                                id="floatingTextarea"></textarea>
                            <label for="floatingTextarea">Body</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteArticle" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Article?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="form-floating" action="" method="POST">
                        @csrf
                        <p>Are you sure you want to delete?</p> 
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>

    {{-- Comment Modals --}}
    <div class="modal fade" id="deleteComment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Comment?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="form-floating" action="" method="POST">
                        @csrf
                        <p>Are you sure you want to delete?</p> 
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editComment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Comment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="form-floating" action="" method="POST">
                        @csrf
                        <div class="form-floating mb-3">
                            <input name="head" type="text" class="form-control" id="floatingInput"
                                placeholder="name@example.com">
                            <label for="floatingInput">Head</label>
                        </div>
                        <div class="form-floating">
                            <textarea name="body" class="form-control" placeholder="Leave a comment here"
                                id="floatingTextarea"></textarea>
                            <label for="floatingTextarea">Body</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="createComment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Comment</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="form-floating" action="" method="POST">
                        <div class="form-floating mb-3">
                            <input name="head" type="text" class="form-control" id="floatingInput"
                                placeholder="name@example.com">
                            <label for="floatingInput">Head</label>
                        </div>
                        <div class="form-floating">
                            <textarea name="body" class="form-control" placeholder="Leave a comment here"
                                id="floatingTextarea"></textarea>
                            <label for="floatingTextarea">Body</label>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/fs-all.js') }}"></script>


    {{-- Date and Time --}}
    <script>
        var span = document.getElementById('dateAndTime');

        function time() {
            var d = new Date();
            var a = d.get
            var s = d.getSeconds();
            var m = d.getMinutes();
            var h = d.getHours();
            span.textContent = d;
        }

        setInterval(time, 1000);
    </script>

</body>

</html>
