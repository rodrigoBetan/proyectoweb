
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Cantidad') }}</label>
    <div>
        {{ Form::text('Cantidad', $pedidetalle->Cantidad, ['class' => 'form-control' .
        ($errors->has('Cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
        {!! $errors->first('Cantidad', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">pedidetalle <b>Cantidad</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Precio_Total') }}</label>
    <div>
        {{ Form::text('Precio_Total', $pedidetalle->Precio_Total, ['class' => 'form-control' .
        ($errors->has('Precio_Total') ? ' is-invalid' : ''), 'placeholder' => 'Precio Total']) }}
        {!! $errors->first('Precio_Total', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">pedidetalle <b>Precio_Total</b> instruction.</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="#" class="btn btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Guardar</button>
            </div>
        </div>
    </div>
