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
            @foreach($brands as $brand)
                <tbody id="datos">
                <tr>
                    <td>{!! $brand->id !!}</td>
                    <td>{!! $brand->description !!}</td>
                    <td>{!! $brand->updated_at !!}</td>
                </tr>
                </tbody>
            @endforeach
        </table>
       <div class="widget-content padded text-right">{!! $brands->render() !!}</div>
    </div>