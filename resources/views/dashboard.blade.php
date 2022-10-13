
@can('user')
<!-- ************************** USUARIO NORMAL ********************** -->
  @component('componentes.user')

  @endcomponent

  @elsecan('admin')  
<!-- ************************** FIM DO ADMINISTRADOR ********************** -->
  @component('componentes.admin')

  @endcomponent
<!-- **************************  FIM DO FIM DO SDMINISTRADOR ********************** -->
@endcan 

  
               