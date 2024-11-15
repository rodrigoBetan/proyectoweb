
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Subtotal') }}</label>
    <div>
        {{ Form::text('Subtotal', $pedido->Subtotal, ['class' => 'form-control' .
        ($errors->has('Subtotal') ? ' is-invalid' : ''), 'placeholder' => 'Subtotal']) }}
        {!! $errors->first('Subtotal', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">pedido <b>Subtotal</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Impuesto') }}</label>
    <div>
        {{ Form::text('Impuesto', $pedido->Impuesto, ['class' => 'form-control' .
        ($errors->has('Impuesto') ? ' is-invalid' : ''), 'placeholder' => 'Impuesto']) }}
        {!! $errors->first('Impuesto', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">pedido <b>Impuesto</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Total') }}</label>
    <div>
        {{ Form::text('Total', $pedido->Total, ['class' => 'form-control' .
        ($errors->has('Total') ? ' is-invalid' : ''), 'placeholder' => 'Total']) }}
        {!! $errors->first('Total', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">pedido <b>Total</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Entrega') }}</label>
    <div>
        {{ Form::text('Entrega', $pedido->Entrega, ['class' => 'form-control' .
        ($errors->has('Entrega') ? ' is-invalid' : ''), 'placeholder' => 'Entrega']) }}
        {!! $errors->first('Entrega', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">pedido <b>Entrega</b> instruction.</small>
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
