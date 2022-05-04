@extends('plantilla')
@section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>
<div class="card uper">
    <div class="card-header">
        Agregar Casillas
    </div>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br>
        @endif
        <form method="post" action="{{route('casilla.store')}}" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                @csrf
                <label for="ubicacion">Ubicacion:</label>
                <input type="text" class="form-control" name="ubicacion">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
    <div class="form-group">
        <label for="perfil">Perfil:</label>
        <input type="file" id="perfil" accept="application/pdf" class="form-control" name="perfil" onchange="previewPDF(event, 'previewPDF');">
    </div>
    <iframe id="previewPDF" style="display:none;" title="preview"></iframe>
    <button type="submit" class="btn btn-primary">Guardar</button>
</div>
@endsection