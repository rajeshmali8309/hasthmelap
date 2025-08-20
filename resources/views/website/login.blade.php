<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hasthmelap | Login</title>
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('css/global.css') }}" rel="stylesheet">
    <link href="{{ url('css/blog.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <section id="center" class="search_form pt-5 pb-5">
        <div class="container">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <h1 class="text_theme text-center mb-4">LOGIN</h1>

            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <div class="shadow p-4 rounded bg-white">
                        <h4 class="text-center mb-2 mt-2">Sign in to Matrimony</h4>
                        <span class="d-block text-center">
                            Not a member?
                            <a class="text_theme" href="{{ route('register') }}">Sign up now</a>
                        </span>

                        <form method="post" class="mt-3">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="email"
                                    value="{{ old('email') }}" placeholder="Enter email" name="email">
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password:</label>
                                <input type="password" class="form-control" id="password"
                                    placeholder="Enter password" name="password">
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn bg_theme text-white">Login</button>
                            </div>
                        </form>

                        <div class="text-center mt-4">
                            <a href="{{ route('index') }}">Go Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>
	<!-- jQuery Script file -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	<!-- login validation -->
	 <script>
		// Trim function on blur
        $("input").on("blur", function() {
            let value = $(this).val().trim();
            $(this).val(value);
        });

        // Focus remove error
        $("input").on("focus", function() {
            $(this).next(".text-danger").remove();
        });

		const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

		$("#email").on("blur", function() {
            if ($(this).val() === "" || !emailRegex.test($(this).val())) {
                showError($(this), "Please enter a valid email.");
            }
        });

		$("#password").on("blur", function() {
            if ($(this).val() === "") {
                showError($(this), "Please enter your Password");
            }
        });

		// Show error function
        function showError(input, message) {
            input.next(".text-danger").remove();
            input.after('<div class="text-danger small">' + message + '</div>');
        }

		$("form").on("submit", function(e) {
            let isValid = true;

            // Email Regex patterns
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            // Email
            if ($("#email").val().trim() === "" || !emailRegex.test($("#email").val().trim())) {
                SubmitshowError($("#email"), "Please enter a valid email.");
                isValid = false;
            }

            // Password
            if ($("#password").val().trim() === "") {
                SubmitshowError($("#password"), "Please enter your Password");
                isValid = false;
            }

            // Show error function
            function SubmitshowError(input, message) {
                input.next(".text-danger").remove(); // remove old error
                input.after('<div class="text-danger small">' + message + '</div>'); // add new error
            }

            if (!isValid) {
                e.preventDefault(); // Stop form submit
            }
        });

	 </script>
</body>

</html>