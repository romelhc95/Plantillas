@extends('admin.layouts.header')

@section('title', 'LISTAR CATEGORIAS')

@section('content')
    <div class="heading">
        <i class="icon-table"></i>@yield('title')
        <div class="pull-right"><a href="#newcategory" class="btn btn-primary" data-toggle="modal"><i class="icon-archive"> Agregar Categoria</i></a></div>
    </div>
    <div class="widget-content padded clearfix">
        <div class="pull-left">Hay {{ $categories->total() }} registros de categorias</div>
        <div class="pull-right"><input class="form-control" type="text" placeholder="Buscar"></div>
        <br><br>
        <table class="table table-bordered table-striped">
            <thead>
                <th> # </th>
                <th> NOMBRE </th>
                <th> CREACION </th>
                <th> CATEGORIAS </th>
            </thead>
            @foreach($categories as $category)
            <tbody>
                <tr data-id="{{ $category->id }}">
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->description }}</td>
                    <td>{{ $category->created_at }}</td>
                    <td class="actions">
                        <div class="action-buttons">
                            <a class="table-actions" href="#"><i class="icon-eye-open"></i></a>
                            <a class="table-actions" href="#btn-edit" data-toggle="modal"><i class="icon-pencil"></i></a>
                            <a class="table-actions btn-delete" href="#!"><i class="icon-trash"></i></a>
                        </div>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
        <div class="pull-right">{!! $categories->render() !!}</div>
    </div>

    @include('admin.warehouse.category.create')

    @include('admin.warehouse.category.edit')

    {!! Form::open(['route' => ['category.destroy', ':CATEGORY_ID'], 'method' => 'DELETE', 'id' => 'form-delete']) !!}
    {!! Form::close() !!}

@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $('.btn-delete').click(function(e) {
                e.preventDefault();
                var row = $(this).parents('tr');
                var id = row.data('id');
                var form = $('#form-delete');
                var url = form.attr('action').replace(':CATEGORY_ID', id);
                var data = form.serialize();

                row.fadeOut();

                $.post(url, data, function(result) {
                    alert();
                }).fail(function(){
                    alert('La categoria no fue eliminada Correctamente');
                    row.show();
                });
            });
        });
    </script>
@endsection


