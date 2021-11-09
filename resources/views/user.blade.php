@if ($message = Session::get('success'))
<div class="alert alert-success alert" role="alert">
<button type="button" class="close" data-dismiss="alert">×</button>	
<strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
<button type="button" class="close" data-dismiss="alert">×</button>	
<strong>{{ $message }}</strong>
</div>
@endif
<p>This is user page here you can register</p>
 