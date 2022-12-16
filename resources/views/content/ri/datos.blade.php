@extends('layouts/contentLayoutMaster')

@section('title', 'Administrar datos del simat')

@section('vendor-style')
  <!-- vendor css files -->
  <link rel="stylesheet" href="{{ asset(mix('vendors/css/file-uploaders/dropzone.min.css')) }}">
@endsection
@section('page-style')
  <!-- Page css files -->
  <link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-file-uploader.css')) }}">
@endsection

@section('content')
<!-- Dropzone section start -->
<section id="dropzone-examples">
  <!-- warnings and primary alerts starts -->
  <div class="row">
    <div class="col-12">
      <div class="alert alert-primary" role="alert">
        <div class="alert-body">
          <strong>Info:</strong> Porfavor revise si tiene datos debe vaciar primero la tabla
        </div>
      </div>
    </div>
  </div>
  <!-- warnings and primary alerts ends -->

  <!-- single file upload starts -->
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Importar archivo del RI en Excel</h4>
        </div>
        <div class="card-body">
          <p class="card-text">
            Porfavor convertir el archivo en formato excel antes de cargarlo
            
          </p>
          <form action="{{ route('ri-importar') }}"   method="post" enctype="multipart/form-data">
            @method("POST")
            @csrf
            <div class="mb-1">
              <label for="customFile1" class="form-label">Archivo excel del RI</label>
              <input class="form-control" type="file" id="customFile1" required="require" name="excelri">
              <button type="submit" class="btn btn-primary waves-effect waves-float waves-light">Cargar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- single file upload ends -->
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Vaciar tabla SIMAT</h4>
        </div>
        <div class="card-body">
          <p class="card-text">
            Porfavor asegúrese que esta acción es la que necesita, pues eliminara completamente la tabla RI, si necesita ver información deberá volver a importarla en el paso anterior
            
          </p>
          <form action="{{ route('ri-vaciar') }}"   method="get" >
            @method("GET")
            @csrf
            <div class="mb-1">
          
             
              <button type="submit" class="btn btn-danger waves-effect waves-float waves-light">Vaciar tabla</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</section>
<!-- Dropzone section end -->
@endsection

@section('vendor-script')
  <!-- vendor files -->
  <script src="{{ asset(mix('vendors/js/file-uploaders/dropzone.min.js')) }}"></script>
@endsection
@section('page-script')
  <!-- Page js files -->
  <script src="{{ asset(mix('js/scripts/forms/form-file-uploader.js')) }}"></script>
@endsection
