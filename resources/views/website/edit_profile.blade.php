<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hasthmelap | User | Edit</title>
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

            <h1 class="text_theme text-center mb-4">EDIT PROFILE</h1>

            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <div class="shadow p-4 rounded bg-white">
                        <form method="post" action="{{ route('update_user', ['id' => $user->id]) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="profile_for">Create Profile For:</label>
                                <select name="profile_for" id="profile_for" class="form-control">
                                    <option value="">Select Profile For</option>
                                    <option value="self" {{$user->profile_for == 'self'  ? 'selected' : ''}}>Self</option>
                                    <option value="son" {{$user->profile_for == 'son'  ? 'selected' : ''}}>Son</option>
                                    <option value="daughter" {{$user->profile_for == 'daughter'  ? 'selected' : ''}}>Daughter</option>
                                    <option value="brother" {{$user->profile_for == 'brother'  ? 'selected' : ''}}>Brother</option>
                                    <option value="sister" {{$user->profile_for == 'sister'  ? 'selected' : ''}}>Sister</option>
                                    <option value="relative" {{$user->profile_for == 'relative'  ? 'selected' : ''}}>Relative</option>
                                </select>
                            </div>

                            <div class="form-group mt-2">
                                <label for="first_name">First Name:</label>
                                <input type="text" class="form-control" value="{{$user->first_name}}" id="first_name" placeholder="Enter first name" name="first_name">
                            </div>

                            <div class="form-group mt-2">
                                <label for="last_name">Last Name:</label>
                                <input type="text" class="form-control" id="last_name" value="{{$user->last_name}}" placeholder="Enter last name" name="last_name">
                            </div>

                            <div class="form-group mt-2">
                                <label for="">Gender:</label><br>

                                <input type="radio" id="male" name="gender" value="male"
                                    {{ $user->gender == 'male' ? 'checked' : '' }}>
                                <label for="male">Male</label>

                                <input type="radio" id="female" name="gender" value="female"
                                    {{ $user->gender == 'female' ? 'checked' : '' }}>
                                <label for="female">Female</label>
                                
                            </div>

                            <div class="form-group mt-2">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" value="{{$user->email}}" placeholder="Enter email" name="email">
                                <button type="button" id="sendOtpBtn" class="btn btn-sm btn-primary mt-2" disabled>Send OTP</button>
                            </div>

                            <div class="form-group mt-2 OTP">
                                <label for="otp">OTP:</label>
                                <input type="number" class="form-control" id="otp" placeholder="Enter OTP" name="otp">
                            </div>

                            <div class="form-group mt-2">
                                <label for="mobile">Mobile number:</label>
                                <input type="text" class="form-control" id="mobile" value="{{$user->mobile}}" placeholder="Enter mobile" name="mobile">
                            </div>

                            <div class="form-group mt-2">
                                <label for="age">Age:</label>
                                <input type="number" class="form-control" id="age" value="{{$user->age}}" placeholder="Enter age" name="age">
                            </div>

                            <div class="form-group mt-2">
                                <label for="caste">Caste:</label>
                                <input type="text" class="form-control" id="caste" value="{{$user->caste}}" placeholder="Enter caste" name="caste">
                            </div>

                            <div class="form-group mt-2">
                                <label for="religion">Religion:</label>
                                <input type="text" class="form-control" id="religion" value="{{$user->religion}}" placeholder="Enter religion" name="religion">
                            </div>

                            <div class="form-group mt-2">
                                <label for="height">Height:</label>
                                <input type="text" class="form-control" id="height" value="{{$user->height}}" placeholder="Enter height" name="height">
                            </div>

                            <div class="form-group mt-2">
                                <label for="weight">Weight:</label>
                                <input type="number" class="form-control" id="weight" value="{{$user->weight}}" placeholder="Enter weight" name="weight">
                            </div>

                            <div class="form-group mt-2">
                                <label for="city">City:</label>
                                <input type="text" class="form-control" id="city" value="{{$user->city}}" placeholder="Enter city" name="city">
                            </div>

                            <div class="form-group mt-2">
                                <label for="marital_status">Marital Status:</label>
                                <input type="text" class="form-control" id="marital_status" value="{{$user->marital_status}}" placeholder="Enter marital status" name="marital_status">
                            </div>

                            <div class="form-group mt-2">
                                <label for="profession">Profession:</label>
                                <input type="text" class="form-control" id="profession" value="{{$user->profession}}" placeholder="Enter profession" name="profession">
                            </div>

                            <div class="form-group mt-2">
                                <label for="qualification">Qualification:</label>
                                <input type="text" class="form-control" id="qualification" value="{{$user->qualification}}" placeholder="Enter qualification" name="qualification">
                            </div>

                            <div class="form-group mt-2">
                                <label for="college">College Name:</label>
                                <input type="text" class="form-control" id="college" value="{{$user->college_name}}" placeholder="Enter college" name="college_name">
                            </div>

                            <div class="form-group mt-2">
                                <label for="hobbies">Hobbies:</label>
                                <input type="text" class="form-control" id="hobbies" value="{{$user->hobbies}}" placeholder="Enter hobbies" name="hobbies">
                            </div>

                            <div class="form-group mt-2">
                                <label for="about">About:</label>
                                <textarea name="about" id="about" class="form-control" value="{{$user->about}}" placeholder="Enter description about you">{{$user->about}}</textarea>
                            </div>

                            <div class="form-group mt-2">
                                <label for="image">Image:</label>
                                <input type="file" class="form-control" id="image" name="image">
                            </div>

                            <div class="form-group mt-3 d-grid">
                                <button type="submit" class="btn bg_theme text-white">Save</button>
                            </div>
                        </form>

                        <div class="text-center mt-4">
                            <a href="{{route('profile')}}">Go Back</a>
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
        const LoginProfileEmail = "{{ $user->email }}";


        // Trim function on blur
        $("input").on("blur", function() {
            let value = $(this).val().trim();
            $(this).val(value);
        });

        // Focus remove error
        $("input").on("focus", function() {
            $(this).next(".text-danger").remove();
        });

        // profile_for blur
        $("#profile_for").on("blur", function() {
            if ($(this).val() === "") {
                showError($(this), "Please select profile for");
            } else {
                showError($(this), "");
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

        function showError(input, message) {
            input.next(".text-danger").remove();
            input.after('<div class="text-danger small">' + message + '</div>');
        }

        $("#email").on("blur", function() {
            if ($(this).val() === "" || !emailRegex.test($(this).val())) {
                showError($(this), "Please enter a valid email.");
                $("#sendOtpBtn").prop("disabled", true);
            } else {
                $("#sendOtpBtn").prop("disabled", false);
            }
        });

        $("#sendOtpBtn").hide();
        $(".OTP").hide();

        $("#email").on("keyup", function() {

            if ($(this).val() == LoginProfileEmail) {
                $("#sendOtpBtn").hide();
                $(".OTP").hide();
            } else {
                $("#sendOtpBtn").show();
                $(".OTP").show();
            }

            if ($(this).val() === "" || !emailRegex.test($(this).val())) {
                $("#sendOtpBtn").prop("disabled", true);
            } else {
                $("#sendOtpBtn").prop("disabled", false);
            }
        });

        // send otp and resend otp
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

        $("form").on("submit", function(e) {
            let isValid = true;
            let isvalidotp = true;
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

            if ($("#profile_for").val() === "") {
                showError($("#profile_for"), "Please select profile for.");
                isValid = false;
            }


            if ($("#email").val() == LoginProfileEmail) {
                isvalidotp = true;
            } else {
                if ($("#otp").val().trim() === "") {
                    showError($("#otp"), "OTP field is required.");
                    isvalidotp = false;
                }
            }

            if (!isValid) {
                e.preventDefault();
            }

            if (!isvalidotp) {
                e.preventDefault();
            }
        });
    </script>

</body>

</html>