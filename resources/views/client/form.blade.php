
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Cedula') }}</label>
    <div>
        {{ Form::text('Cedula', $client->Cedula, ['class' => 'form-control' .
        ($errors->has('Cedula') ? ' is-invalid' : ''), 'placeholder' => 'Cedula']) }}
        {!! $errors->first('Cedula', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">client <b>Cedula</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Nombre') }}</label>
    <div>
        {{ Form::text('Nombre', $client->Nombre, ['class' => 'form-control' .
        ($errors->has('Nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
        {!! $errors->first('Nombre', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">client <b>Nombre</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Apellido') }}</label>
    <div>
        {{ Form::text('Apellido', $client->Apellido, ['class' => 'form-control' .
        ($errors->has('Apellido') ? ' is-invalid' : ''), 'placeholder' => 'Apellido']) }}
        {!! $errors->first('Apellido', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">client <b>Apellido</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Telefono') }}</label>
    <div>
        {{ Form::text('Telefono', $client->Telefono, ['class' => 'form-control' .
        ($errors->has('Telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
        {!! $errors->first('Telefono', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">client <b>Telefono</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Correo') }}</label>
    <div>
        {{ Form::text('Correo', $client->Correo, ['class' => 'form-control' .
        ($errors->has('Correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
        {!! $errors->first('Correo', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">client <b>Correo</b> instruction.</small>
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
