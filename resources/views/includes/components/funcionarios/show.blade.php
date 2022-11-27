<section style="background-color: #eee;">
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                    <ol class="breadcrumb mb-0">
                        <h3 class="text-center">{{$user->name.' - '.$perfil->num_funcionario ?? ''}}</h3>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="{{url("storage/users/$perfil->foto")}}"
                            alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                        <h5 class="my-3">{{$user->name}}</h5>
                        <p class="text-muted mb-1">{{$perfil->nome ?? 'nenhum'}}</p>
                        <p class="text-muted mb-4">{{$perfil->endereco ?? 'nenhum'}}</p>
                        <div class="d-flex justify-content-center mb-2">
                            <a href="{{route('perfils.edit', Auth()->user()->id)}}"><button type="button" class="btn btn-primary">Editar</button></a>
                            <button type="button" class="btn btn-outline-primary ms-1">Message</button>
                        </div>
                    </div>
                </div>
               {{-- <div class="card mb-4 mb-lg-0">
                    <div class="card-body p-0">
                        <ul class="list-group list-group-flush rounded-3">
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fas fa-globe fa-lg text-warning"></i>
                                <p class="mb-0">https://mdbootstrap.com</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                                <p class="mb-0">mdbootstrap</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                                <p class="mb-0">@mdbootstrap</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                                <p class="mb-0">mdbootstrap</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                                <p class="mb-0">mdbootstrap</p>
                            </li>
                        </ul>
                    </div>
                </div>--}}
            </div>
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Funcionario Nº</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$perfil->num_funcionario}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Nome Completo</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$user->name}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Email</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$user->email ?? ''}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Telemóvel 1</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">(00244) {{$perfil->telemovel ?? 'nenhum'}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Telemóvel 2</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">(00244) {{$perfil->telefone ?? 'nenhum'}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Endereço</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$perfil->endereco ?? 'nenhum'}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Província</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$perfil->provincia ?? 'nenhum'}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Nacionalidade</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$perfil->nacionalidade ?? 'nenhum'}}</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
