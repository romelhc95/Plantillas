@extends('admin.layouts.header')

@section('title', 'LISTAR MARCAS')

@include('admin.layouts.alerts.success')
@include('admin.layouts.alerts.update')
@include('admin.layouts.alerts.danger')
@section('content')
<div class="heading">
    <i class="icon-table"></i>@yield('title')
    <div class="pull-right"><a href="#btn-create" class="btn btn-primary" data-toggle="modal"><i class="icon-archive"> Agregar Modelo</i></a></div>
</div>
    <div class="brand">
        <div class="widget-content padded clearfix">
            <div class="pull-left">Hay N° registros de modelos</div>
            <div class="pull-right"><input class="form-control" type="text" placeholder="Buscar"></div>
            <br><br>
            <table class="table table-bordered table-striped">
                <thead>
                <th> # </th>
                <th> NOMBRE </th>
                <th> CREACION </th>
                <th> OPERACIONES </th>
                </thead>
                <tbody id="datos">
                </tbody>
            </table>
            <div class="widget-content padded text-right"></div>
        </div>
    </div>

@endsection
@include('admin.warehouse.brand.create')
@include('admin.warehouse.brand.edit')
@section('scripts')
    {!! Html::script('javascripts/warehouse/brand/index.js') !!}
    {!! Html::script('javascripts/warehouse/brand/create.js') !!}
    {!! Html::script('javascripts/warehouse/brand/paginate.js') !!}
@endsection


