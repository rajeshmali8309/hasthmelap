@include('admin.layout.header')
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Manage Team</h3>
    </div>
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show text-center reg_success" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif

    <div class="row">
      <div class="col-12 grid-margin">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Team List</h4>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th> Sr. No. </th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Qualification</th>
                    <th>Experience</th>
                    <th>LinkedIn</th>
                    <th>Twitter</th>
                    <th>Image</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($teams as $key => $team)
                  <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $team->name }}</td>
                    <td>{{ $team->position }}</td>
                    <td>{{ $team->qualification }}</td>
                    <td>{{ $team->experience }}</td>
                    <td>
                      @if($team->linkedin)
                        <a href="{{ $team->linkedin }}" target="_blank">View</a>
                      @else
                        -
                      @endif
                    </td>
                    <td>
                      @if($team->twitter)
                        <a href="{{ $team->twitter }}" target="_blank">View</a>
                      @else
                        -
                      @endif
                    </td>
                    <td>
                      @if(!empty($team->image))
                        <img src="{{ asset('uploads/team/'.$team->image) }}" width="60" class="rounded">
                      @else
                        -
                      @endif
                    </td>
                    <td>
                      <a href="{{route('admin_edit_team', base64_encode($team->id))}}" class="badge badge-gradient-success">Edit</a>
                      <a href="{{route('admin_delete_team', base64_encode($team->id))}}" class="badge badge-gradient-danger" onclick="return confirm('Do you really want to delete?')">Delete</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@include('admin.layout.footer')
