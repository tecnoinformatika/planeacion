@extends('layouts/contentLayoutMaster')

@section('title', 'User List')

@section('vendor-style')
  {{-- Page Css files --}}
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/dataTables.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/responsive.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/buttons.bootstrap5.min.css')) }}">
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/tables/datatable/rowGroup.bootstrap5.min.css')) }}">
@endsection

@section('page-style')
  {{-- Page Css files --}}
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
@endsection

@section('content')
<!-- users list start -->
<section class="app-user-list">
  
  <!-- list and filter start -->
  <div class="card">
    <div class="card-body border-bottom">
      <h4 class="card-title">Busqueda y filtrado</h4>
      <div class="row">
        <div class="col-md-4 user_role"></div>
        <div class="col-md-4 user_plan"></div>
        <div class="col-md-4 user_status"></div>
      </div>
    </div>
  
    <div class="card-datatable table-responsive pt-0">
      <table id="tablausuarios" class="user-list-table table">
        <thead class="table-light">
          <tr>
            <th>Firma</th>
            <th>Nombre</th>
            <th>Documento</th>
            <th>Cargo</th>
            <th>Contrato</th>
            <th>Correo</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $datos)
            <tr>
              <td><img src="{{$datos->firma->url_path}}" width="150px" alt=""></td>
              <td>{{$datos->name}}</td>
              <td>{{$datos->documento}}</td>
              <td>{{$datos->cargo}}</td>
              <td>{{$datos->contrato}}</td>
              <td>{{$datos->email}}</td>
              <td>
                <div class="btn-group">
                  
                    <a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modals-slide-in2" id="edit-customer1" data-id="{{ $datos->id }}">Editar</a>
                    <a href="javascript:;" class="dropdown-item delete-record">Eliminar</a>
                 
                </div>
              
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- Modal to add new user starts-->
    <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in">
      <div class="modal-dialog">
        <form class="add-new-user modal-content pt-0" method="POST" action="{{ route('crearUsuario') }}" role="form" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
          <div class="modal-header mb-1">
            <h5 class="modal-title" id="exampleModalLabel">Agregar usuario</h5>
          </div>
          <div class="modal-body flex-grow-1">
            <div class="mb-1">
              <label class="form-label" for="name">Nombre completo</label>
              <input
                type="text"
                class="form-control dt-full-name"
                id="name"
                placeholder="Nombre completo"
                name="name"
              />
            </div>
            <div class="mb-1">
              <label class="form-label" for="documento">Documento</label>
              <input
                type="text"
                class="form-control dt-full-name"
                id="documento"
                placeholder="Documento"
                name="documento"
              />
            </div>
            <div class="mb-1">
              <label class="form-label" for="contrato">Contrato</label>
              <input
                type="text"
                class="form-control dt-full-name"
                id="contrato"
                placeholder="contrato"
                name="contrato"
              />
            </div>
            
            <div class="mb-1">
              <label class="form-label" for="cargo">Cargo</label>
              <select id="cargo" name="cargo" class="select2 form-select">
                <option value="asesor">Asesor</option>
                <option value="administrador">Administrador</option>
              </select>
            </div>
            <div class="mb-1">
              <label class="form-label" for="email">Correo electrónico</label>
              <input
                type="text"
                id="email"
                class="form-control dt-email"
                placeholder="correo"
                name="email"
              />
            </div>
            <div class="mb-1">
              <label for="password" class="form-label">Contraseña</label>
              <div class="input-group input-group-merge form-password-toggle @error('password') is-invalid @enderror">
                <input type="password" class="form-control form-control-merge @error('password') is-invalid @enderror"
                  id="password" name="password"
                  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                  aria-describedby="password" tabindex="3" />
                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
              </div>
            </div>
            <div class="mb-1">
              <label for="customFile1" class="form-label">Firma digital</label>
              <input class="form-control" type="file" id="firma" required="require" name="firma">
            </div>
            
            <button type="submit" class="btn btn-primary me-1 data-submit">Submit</button>
            <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
          </div>
        </form>
      </div>
    </div>
    <!-- Modal to add new user Ends-->
     <!-- Modal to add new user starts-->
     <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in2">
      <div class="modal-dialog">
        <form class="add-new-user modal-content pt-0" method="POST" action="{{ route('editarUsuario') }}" role="form" enctype="multipart/form-data">
         @csrf
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
          <div class="modal-header mb-1">
            <h5 class="modal-title" id="exampleModalLabel">Agregar usuario</h5>
          </div>
          <div class="modal-body flex-grow-1">
            <input type="hidden" id="id1" name="id1">
            <div class="mb-1">
              <label class="form-label" for="name">Nombre completo</label>
              <input
                type="text"
                class="form-control dt-full-name"
                id="name1"
                placeholder="Nombre completo"
                name="name1"
              />
            </div>
            <div class="mb-1">
              <label class="form-label" for="documento">Documento</label>
              <input
                type="text"
                class="form-control dt-full-name"
                id="documento1"
                placeholder="Documento"
                name="documento1"
              />
            </div>
            <div class="mb-1">
              <label class="form-label" for="contrato">Contrato</label>
              <input
                type="text"
                class="form-control dt-full-name"
                id="contrato1"
                placeholder="contrato"
                name="contrato1"
              />
            </div>
            
            <div class="mb-1">
              <label class="form-label" for="cargo">Cargo</label>
              <select id="cargo1" name="cargo1" class="select2 form-select">
                <option value="asesor">Asesor</option>
                <option value="administrador">Administrador</option>
              </select>
            </div>
            <div class="mb-1">
              <label class="form-label" for="email">Correo electrónico</label>
              <input
                type="text"
                id="email1"
                class="form-control dt-email"
                placeholder="correo"
                name="email1"
              />
            </div>
            <div class="mb-1">
              <label for="password" class="form-label">Contraseña</label>
              <div class="input-group input-group-merge form-password-toggle @error('password') is-invalid @enderror">
                <input type="password" class="form-control form-control-merge @error('password') is-invalid @enderror"
                  id="password1" name="password1"
                  placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                  aria-describedby="password" tabindex="3" />
                <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
              </div>
            </div>
            <img  id="firma2" width="150px" style="background-color: #fff" alt="">
            <div class="mb-1">
              <label for="customFile1" class="form-label">Firma digital</label>
              <input class="form-control" type="file" id="firma1" required="require" name="firma">
            </div>
            
            <button type="submit" class="btn btn-primary me-1 data-submit">Submit</button>
            <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
          </div>
        </form>
      </div>
    </div>
    <!-- Modal to add new user Ends-->
  </div>
  <!-- list and filter end -->
</section>
<!-- users list ends -->
@endsection

@section('vendor-script')
  {{-- Vendor js files --}}
  <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/jquery.dataTables.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.bootstrap5.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.responsive.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/responsive.bootstrap5.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/datatables.buttons.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/jszip.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/pdfmake.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/vfs_fonts.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.html5.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/buttons.print.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/tables/datatable/dataTables.rowGroup.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/cleave/cleave.min.js')) }}"></script>
  <script src="{{ asset(mix('vendors/js/forms/cleave/addons/cleave-phone.us.js')) }}"></script>
@endsection

@section('page-script')
  {{-- Page js files --}}
  <script>
    $(document).ready(function(){
     
       
        $('#tablausuarios').DataTable( {
            dom: 'Bfrtip',
            buttons: [
              {
                extend: 'collection',
                className: 'btn btn-outline-secondary dropdown-toggle me-2',
                text: feather.icons['external-link'].toSvg({ class: 'font-small-4 me-50' }) + 'Export',
                buttons: [
                  {
                    extend: 'print',
                    text: feather.icons['printer'].toSvg({ class: 'font-small-4 me-50' }) + 'Print',
                    className: 'dropdown-item',
                    exportOptions: { columns: [1, 2, 3, 4, 5] }
                  },
                  {
                    extend: 'csv',
                    text: feather.icons['file-text'].toSvg({ class: 'font-small-4 me-50' }) + 'Csv',
                    className: 'dropdown-item',
                    exportOptions: { columns: [1, 2, 3, 4, 5] }
                  },
                  {
                    extend: 'excel',
                    text: feather.icons['file'].toSvg({ class: 'font-small-4 me-50' }) + 'Excel',
                    className: 'dropdown-item',
                    exportOptions: { columns: [1, 2, 3, 4, 5] }
                  },
                  {
                    extend: 'pdf',
                    text: feather.icons['clipboard'].toSvg({ class: 'font-small-4 me-50' }) + 'Pdf',
                    className: 'dropdown-item',
                    exportOptions: { columns: [1, 2, 3, 4, 5] }
                  },
                  {
                    extend: 'copy',
                    text: feather.icons['copy'].toSvg({ class: 'font-small-4 me-50' }) + 'Copy',
                    className: 'dropdown-item',
                    exportOptions: { columns: [1, 2, 3, 4, 5] }
                  }
                ],
                init: function (api, node, config) {
                  $(node).removeClass('btn-secondary');
                  $(node).parent().removeClass('btn-group');
                  setTimeout(function () {
                    $(node).closest('.dt-buttons').removeClass('btn-group').addClass('d-inline-flex mt-50');
                  }, 50);
                }
              },
              {
                text: 'Add New User',
                className: 'add-new btn btn-primary',
                attr: {
                  'data-bs-toggle': 'modal',
                  'data-bs-target': '#modals-slide-in'
                },
                init: function (api, node, config) {
                  $(node).removeClass('btn-secondary');
                }
              }
            ]
        } );     
    });/* Edit customer */

    $('body').on('click', '#edit-customer1', function () {
      var customer_id = $(this).data('id');
      
      $.get('/usuarios/usuario/'+customer_id, function (data) {
       
      $('#btn-update').val("Update");
      $('#modals-slide-in1').modal('show');
      $('#id1').val(data.id);
      $('#name1').val(data.name);
      $('#documento1').val(data.documento);
      $('#contrato1').val(data.contrato);
      
      $('#firma2').attr("src","/storage/"+ data.nombre);;
      $('#email1').val(data.email);
      });

    });
  </script>
@endsection
