<!--NUEVA MODELO-->
<!--Modal -->
<div class="modal fade" id="btn-create">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;</button>
                <h4 class="modal-title">
                    NUEVA MARCA
                </h4>
            </div>
            <div id="msj-error" class="alert alert-danger alert-dismissible" role="alert" style="display:none">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong id="msj"></strong>
            </div>
         {!! Form::open() !!}
            <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
            <div class="modal-body">
                <h4><span>{!! Form::label('description', 'Nombre:', ['class'=>'control-label']) !!}</span></h4>
                {!! Form::text('description', null, ['id'=>'brand', 'class'=>'form-control', 'placeholder'=>'Ingrese Nueva Marca']) !!}
                </div>
                <div class="modal-footer">
                    {!! Html::decode(link_to('#', '<i class="icon-save"></i>Guardar Marca', ['id'=>'create', 'class'=>'btn btn-primary'], $secure = null)) !!}
                <button class="btn btn-danger" data-dismiss="modal" type="button"><i class="icon-remove"></i>Cerrar</button>
            </div>
        {!! Form::close() !!}
        </div>
    </div>
</div>
<!--End Modal-->

