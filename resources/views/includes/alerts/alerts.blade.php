@if ($errors->any())
<div class="alert alert-danger">
    <strong>Ups!</strong> Ocorreram alguns problemas com sua entrada.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
