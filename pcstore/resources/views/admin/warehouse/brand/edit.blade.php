<!--EDITAR MODELO-->
<!--Modal -->
<div class="modal fade" id="btn-edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;</button>
                <h4 class="modal-title">
                    EDITAR MARCA
                </h4>
            </div>
                <div class="modal-body form-group">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
                    <input type="hidden" id="id">
                    <h4><span>{!! Form::label('description', 'Nombre:', ['class'=>'control-label']) !!}</span></h4>
                    {!! Form::text('description', null, ['id'=>'description', 'class'=>'form-control']) !!}
                </div>
                <div class="modal-footer">
                    {!! Html::decode(link_to('#', '<i class="icon-save"></i>Actualizar Marca', ['id'=>'update', 'class'=>'btn btn-primary'], $secure = null)) !!}
                    <button class="btn btn-danger" data-dismiss="modal" type="button"><i class="icon-remove"></i>Cerrar</button>
                </div>
        </div>
    </div>
</div>
<!--End Modal-->