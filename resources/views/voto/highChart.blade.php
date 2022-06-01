@extends('plantilla')
@section('content')
<style>
    .uper {
        margin-top: 40px;
    }
</style>
    <div class="container">
        <h2 style="text-align: center;">Votos 2022</h2>
        <div class="panel panel-primary">
            <div class="panel-heading">Gráfica</div>
            <div class="panel-body">
                <div id="pie-chart"></div>
            </div>
        </div>
    </div>
@endsection