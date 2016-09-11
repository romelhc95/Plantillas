<!--EDITAR CATEGORIA-->
<!--Modal-->
<div class="modal fade" id="btn-edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;</button>
                <h4 class="modal-title">
                    EDITAR CATEGORIA
                    <span id="load" class="pull-right"><img src="{{ asset('images/select2-spinner.gif') }}"> Cargando...</span>
                </h4>
            </div>
            <div class="modal-body">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
                <input type="hidden" id="id">
                <h4><span>{!! Form::label('name', 'Nombre:', ['class'=>'control-label']) !!}</span></h4>
                {!! Form::text('description', null, ['id'=>'description', 'class'=>'form-control']) !!}
            </div>
            <div class="modal-footer">
                {!! Html::decode(link_to(URL::previous(), '<i class="icon-save"></i>Actualizar Categoria', ['id'=>'update', 'class'=>'btn btn-primary'], $secure = null)) !!}
                <button class="btn btn-danger" data-dismiss="modal" type="button"><i class="icon-remove"></i>Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!--End Modal-->