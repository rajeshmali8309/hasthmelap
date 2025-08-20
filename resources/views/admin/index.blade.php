@include('admin.layout.header')
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show text-center reg_success" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif
    <div class="page-header">
      <h3 class="page-title">Dashboard</h3>
    </div>
    <div class="row">
      <h2>Dashboard Coming Soon !</h2>
    </div>
  </div>
  @include('admin.layout.footer')