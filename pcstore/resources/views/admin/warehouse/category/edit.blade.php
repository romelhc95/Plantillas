<!--EDITAR CATEGORIA-->
<!--Modal-->
<div class="modal fade" id="editcategory">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" class="close" data-dismiss="modal" type="button">&times;</button>
                <h4 class="modal-title">
                    EDITAR CATEGORIA
                </h4>
            </div>
            {!! Form::open(['route'=>'category.store', 'method'=>'POST', 'class'=>'form-group']) !!}
            <div class="modal-body">
                <h4><span>{!! Form::label('name', 'Nombre:', ['class'=>'control-label']) !!}</span></h4>
                {!! Form::text('description', null, ['class'=>'form-control']) !!}
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="submit"><i class="icon-save"></i>Actualizar Categoria</button>
                <button class="btn btn-danger" data-dismiss="modal" type="button"><i class="icon-remove"></i>Cerrar</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<!--End Modal-->