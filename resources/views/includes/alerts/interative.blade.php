@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
@if ($message = Session::get('update'))
    <div class="alert alert-primary">
        <p>{{ $message }}</p>
    </div>
@endif
@if ($message = Session::get('delete'))
    <div class="alert alert-danger">
        <p>{{ $message }}</p>
    </div>
@endif



