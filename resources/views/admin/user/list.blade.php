@include('admin.layout.header')
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Manage User</h3>
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
            <h4 class="card-title">Manage User</h4>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th> Sr. No. </th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Caste</th>
                    <th>Hobbies</th>
                    <th>Age</th>
                    <th>Religion</th>
                    <th>City</th>
                    <th>Height</th>
                    <th>Weight</th>
                    <th>Profesion</th>
                    <th>Marital Status</th>
                    <th>Father's Name</th>
                    <th>Mother's Name</th>
                    <th>Family Location</th>
                    <th>Family Profession</th>
                    <th>Family Status</th>
                    <th>Annual Income</th>
                    <th>Qualification</th>
                    <th>College Name</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($users as $key => $user)
                  <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>{{ $user->mobile }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->caste }}</td>
                    <td>{{ $user->hobbies }}</td>
                    <td>{{ $user->age }}</td>
                    <td>{{ $user->religion }}</td>
                    <td>{{ $user->city }}</td>
                    <td>{{ $user->height }}</td>
                    <td>{{ $user->weight }}</td>
                    <td>{{ $user->profession }}</td>
                    <td>{{ $user->marital_status }}</td>
                    <td>{{ $user->family->father_name }}</td>
                    <td>{{ $user->family->mother_name }}</td>
                    <td>{{ $user->family->family_location }}</td>
                    <td>{{ $user->family->profession }}</td>
                    <td>{{ $user->family->family_status }}</td>
                    <td>{{ $user->family->annual_income }}</td>
                    <td>{{ $user->qualification }}</td>
                    <td>{{ $user->college_name }}</td>
                    <td>
                      @if(!empty($user->image))
                      <img src="{{ asset('uploads/profile/'.$user->image) }}" class="me-2" alt="image">
                      @else
                      -
                      @endif
                    </td>
                    <td>
                      @if($user->status == 'pending')
                      <label class="badge badge-gradient-danger">Pending</label>
                      @else
                      <label class="badge badge-gradient-success">Done</label>
                      @endif
                    </td>
                    <td>
                      <a href="{{route('admin_edit_user', base64_encode($user->id))}}" class="badge badge-gradient-success"> Edit</a>
                      <a href="{{route('admin_delete_user', base64_encode($user->id))}}" class="badge badge-gradient-danger" onclick="return confirm('Do you really want to delete?')"> Delete</a>
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