@if(session('success'))
<div class="alert alert-success" id="alert-custom">
  {{ session('success') }}
</div>
@endif
@if(session('info'))
<div class="alert alert-info" id="alert-custom">
  {{ session('info') }}
</div>
@endif
@if(session('danger'))
<div class="alert alert-danger" id="alert-custom">
  {{ session('danger') }}
</div>
@endif