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

            <h1 class="text_theme text-center mb-4">EDIT FAMILY</h1>

            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <div class="shadow p-4 rounded bg-white">
                        <form method="post" action="{{ route('update_family', ['id' => $family->id]) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mt-2">
                                <label for="father_name">Father's Name:</label>
                                <input type="text" class="form-control" value="{{$family->father_name}}" id="father_name" placeholder="Enter father name" name="father_name">
                            </div>
                            <div class="form-group mt-2">
                                <label for="mother_name">Mother's Name:</label>
                                <input type="text" class="form-control" value="{{$family->mother_name}}" id="mother_name" placeholder="Enter mother name" name="mother_name">
                            </div>
                            <div class="form-group mt-2">
                                <label for="profession">Profession:</label>
                                <input type="text" class="form-control" value="{{$family->profession}}" id="profession" placeholder="Enter profession" name="profession">
                            </div>
                            <div class="form-group mt-2">
                                <label for="family_status">Family Status:</label>
                                <input type="text" class="form-control" value="{{$family->family_status}}" id="family_status" placeholder="Enter family status" name="family_status">
                            </div>
                            <div class="form-group mt-2">
                                <label for="family_location">Family Location:</label>
                                <input type="text" class="form-control" value="{{$family->family_location}}" id="family_location" placeholder="Enter family location" name="family_location">
                            </div>
                             <div class="form-group mt-2">
                                <label for="total_siblings">Total Siblings:</label>
                                <input type="text" class="form-control" value="{{$family->total_siblings}}" id="total_siblings" placeholder="Enter total siblings" name="total_siblings">
                            </div>
                             <div class="form-group mt-2">
                                <label for="annual_income">Annual Income:</label>
                                <input type="text" class="form-control" value="{{$family->annual_income}}" id="annual_income" placeholder="Enter annual income" name="annual_income">
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

    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ url('js/bootstrap.bundle.min.js') }}"></script> -->
</body>

</html>