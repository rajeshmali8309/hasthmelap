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

            <h1 class="text_theme text-center mb-4">EDIT User</h1>

            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <div class="shadow p-4 rounded bg-white">
                        <form method="post" action="{{ route('admin_update_user', ['id' => $user->id]) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="pending" {{$user->status == 'pending'  ? 'selected' : ''}}>Pending</option>
                                    <option value="done" {{$user->status == 'done'  ? 'selected' : ''}}>Done</option>
                                </select>
                            </div>
                            <div class="form-group mt-3 d-grid">
                                <button type="submit" class="btn bg_theme text-white">Save</button>
                            </div>
                        </form>

                        <div class="text-center mt-4">
                            <a href="{{route('list_user')}}">Go Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>