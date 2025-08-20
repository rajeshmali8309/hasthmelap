@include('admin.layout.header')
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">Manage Contacts</h3>
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
            <h4 class="card-title">Manage Contacts</h4>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th> Sr. No. </th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile Number</th>
                    <th>Message</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($contacts as $key => $contact)
                  <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->mobile }}</td>
                    <td>{{ $contact->message }}</td>
                    <td>
                      <a href="{{route('delete_contacts', base64_encode($contact->id))}}" class="badge badge-gradient-danger" onclick="return confirm('Do you really want to delete?')"> Delete</a>
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