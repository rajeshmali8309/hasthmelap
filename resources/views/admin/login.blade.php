<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hasthmelap | Register</title>
    <link href="{{ url('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ url('css/global.css')}}" rel="stylesheet">
    <link href="{{ url('css/blog.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lexend&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="{{ url('js/theme.min.js')}}"></script>
</head>

<body>
    <section id="center" class="search_form pt-5 pb-5">
        <div class="container-xl">

            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show text-center reg_success" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            @endif


            @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show text-center reg_success" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            @endif

            <h1 class="text_theme text-center mb-4">ADMIN LOGIN</h1>

            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <div class="shadow p-4 rounded bg-white">
                        <form method="post">
                            @csrf
                            <div class="form-group mt-2">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" required>
                            </div>

                            <div class="form-group mt-2">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                            </div>

                            <div class="form-group mt-2">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="password" value="{{old('password')}}"
                                    placeholder="Enter password" name="password" required>
                            </div>

                            <div class="form-group mt-3 d-grid">
                                <button type="submit" class="btn bg_theme text-white">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script>
    setTimeout(() => {
        let alertBox = document.querySelector('.reg_success');
        if (alertBox) {
            alertBox.classList.remove('show');
            alertBox.classList.add('hide');
        }
    }, 3000);
</script>

</html>