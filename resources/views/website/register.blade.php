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
            <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
            @endif

            <h1 class="text_theme text-center mb-4">REGISTER</h1>

            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <div class="shadow p-4 rounded bg-white">
                        <span class="text-center d-block mb-3">
                            Your partner search begins with a<br>SIMPLE REGISTRATION!
                        </span>
                        <form method="post">
                            @csrf

                            <div class="form-group">
                                <label for="profile_for">Create Profile For:</label>
                                <select name="profile_for" id="profile_for" class="form-control">
                                    <option value="">Select Profile For</option>
                                    <option value="self">Self</option>
                                    <option value="son">Son</option>
                                    <option value="daughter">Daughter</option>
                                    <option value="brother">Brother</option>
                                    <option value="sister">Sister</option>
                                    <option value="relative">Relative</option>
                                </select>
                            </div>

                            <div class="form-group mt-2">
                                <label for="first_name">First Name:</label>
                                <input type="text" class="form-control" value="{{old('first_name')}}" id="first_name" placeholder="Enter first name" name="first_name">
                            </div>

                            <div class="form-group mt-2">
                                <label for="last_name">Last Name:</label>
                                <input type="text" class="form-control" id="last_name" value="{{old('last_name')}}" placeholder="Enter last name" name="last_name">
                            </div>

                            <div class="form-group mt-2" id="gender">
                                <label for="">Gender:</label><br>
                                <input type="radio" id="male" value="{{old('male')}} male" name="gender"> <label for="male">Male</label>
                                <input type="radio" id="female" value="{{old('female')}} female" name="gender"> <label for="female">Female</label>
                            </div>

                            <div class="form-group mt-2">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" value="{{old('email')}}" placeholder="Enter email" name="email">
                                <button type="button" id="sendOtpBtn" class="btn btn-sm btn-primary mt-2" disabled>Send OTP</button>
                            </div>

                            <div class="form-group mt-2">
                                <label for="otp">OTP:</label>
                                <input type="number" class="form-control" id="otp" placeholder="Enter OTP" name="otp">
                            </div>

                            <div class="form-group mt-2">
                                <label for="password">Password:</label>
                                <input type="password" class="form-control" id="password" value="{{old('password')}}" placeholder="Enter password" name="password">
                            </div>

                            <div class="form-group mt-3 d-grid">
                                <button type="submit" class="btn bg_theme text-white">Sign Up</button>
                            </div>

                            <div class="form-group mt-3">
                                <p>Already have an account? <a href="{{route('login')}}" class="text_theme">Login</a></p>
                            </div>
                        </form>

                        <div class="text-center mt-4">
                            <a href="{{route('index')}}">Go Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>
    <script>
        const nameRegex = /^[A-Za-z]{2,}(?:\s[A-Za-z]{2,})*$/;
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        const passwordRegex = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).{6,}$/;

        $("#email").on("keyup blur", function() {
            $("#sendOtpBtn").prop("disabled", !emailRegex.test($(this).val()));
        });

        $("#sendOtpBtn").click(function() {
            let email = $("#email").val();

            //Button disable + text change
            let btn = $(this);
            btn.prop("disabled", true).text("Resend OTP");

            if ($("#otpTimer").length === 0) {
                btn.after('<span id="otpTimer" class="ms-2 text_theme fw-500"></span>');
            }

            let timeLeft = 30;
            $("#otpTimer").text(`(${timeLeft}s)`);

            let timer = setInterval(function() {
                timeLeft--;
                $("#otpTimer").text(`(${timeLeft}s)`);

                if (timeLeft <= 0) {
                    clearInterval(timer);
                    btn.prop("disabled", false); // enable resend otp
                    $("#otpTimer").remove(); // remove timer
                }
            }, 1000);

            //Ajax call for OTP send
            $.ajax({
                url: "{{ route('send_otp') }}",
                method: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    email: email
                },
                success: function(response) {
                    $(".alert-success").remove();

                    let alertBox = `
                        <div class="alert alert-success alert-dismissible fade show text-center reg_success" role="alert">
                            ${response.success}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    `;

                    $(".container-xl").prepend(alertBox);
                },
                error: function(xhr) {
                    if (xhr.responseJSON?.errors) {
                        alert(Object.values(xhr.responseJSON.errors).join("\n"));
                    } else {
                        alert("Something went wrong!");
                    }
                }
            });
        });

        // Profile validation (on change)

        $("#profile_for").on("change", function() {
            if ($("#profile_for").val() === "") {
                showError($("#profile_for"), "Please select profile for");
                isValid = false;
            } else {
                showError($(this), "");
            }
        });

        $("input").on("blur", function() {
            $(this).val($(this).val().trim());
        });
        $("input").on("focus", function() {
            $(this).next(".text-danger").remove();
        });

        $("form").on("submit", function(e) {
            let isValid = true;
            if (!nameRegex.test($("#first_name").val())) {
                showError($("#first_name"), "Please enter a valid first name (at least 2 letters).");
                isValid = false;
            }
            if (!nameRegex.test($("#last_name").val())) {
                showError($("#last_name"), "Please enter a valid last name (at least 2 letters).");
                isValid = false;
            }
            if (!emailRegex.test($("#email").val())) {
                showError($("#email"), "Please enter a valid email.");
                isValid = false;
            }

            if (!$("input[name='gender']:checked").val()) {
                showError($("#gender"), "Please select your gender");
                isValid = false;
            }

            if (!passwordRegex.test($("#password").val())) {
                showError($("#password"), "Password must be at least 6 characters, include upper, lower, and number.");
                isValid = false;
            }
            if ($("#profile_for").val() === "") {
                showError($("#profile_for"), "Please select profile for");
                isValid = false;
            }
            if ($("#otp").val().trim() === "") {
                showError($("#otp"), "OTP field is required.");
                isValid = false;
            }
            if (!isValid) {
                e.preventDefault();
            }
        });

        // Blur validations only Regex patterns inputs
        $("#first_name").on("blur", function() {
            if ($(this).val() === "" || !nameRegex.test($(this).val())) {
                showError($(this), "Please enter a valid first name (at least 2 letters).");
            }
        });

        $("#last_name").on("blur", function() {
            if ($(this).val() === "" || !nameRegex.test($(this).val())) {
                showError($(this), "Please enter a valid last name (at least 2 letters).");
            }
        });

        $("#email").on("blur", function() {
            if ($(this).val() === "" || !emailRegex.test($(this).val())) {
                showError($(this), "Please enter a valid email.");
                $("#sendOtpBtn").prop("disabled", true);
            } else {
                $("#sendOtpBtn").prop("disabled", false);
            }
        });

        $("#email").on("change", function() {
            if ($(this).val() === "") {} else {}
        });

        $("#email").on("keyup", function() {
            if ($(this).val() === "" || !emailRegex.test($(this).val())) {
                $("#sendOtpBtn").prop("disabled", true);
            } else {
                $("#sendOtpBtn").prop("disabled", false);
            }
        });

        $("#password").on("blur", function() {
            if ($(this).val() === "" || !passwordRegex.test($(this).val())) {
                showError($(this), "Password must be at least 6 characters, including upper case, lower case, and number.");
            }
        });

        $("#profile_for").on("blur", function() {
            if ($(this).val() === "") {
                showError($(this), "Please select profile for");
            } else {
                showError($(this), "");
            }
        });

        $("input[name='gender']").on("blur", function () {
            if ($("input[name='gender']:checked").length === 0) {
                showError($("#gender"), "Please select your gender"); 
            } else {
                showError($("#gender"), "");
            }
        });

        $("input[name='gender']").focus(function(){
            showError($("#gender"), "");
        });

        // Show error function
        function showError(input, message) {
            input.next(".text-danger").remove();
            input.after('<div class="text-danger small">' + message + '</div>');
        }

        function showError(input, message) {
            input.next(".text-danger").remove();
            input.after('<div class="text-danger small">' + message + '</div>');
        }
    </script>
</body>

</html>