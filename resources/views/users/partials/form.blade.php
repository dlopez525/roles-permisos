<div class="form-group">
    {{ Form::label('name', 'Nombre del Producto') }}
    {{ Form::text('name', null, ['class' => 'form-control']) }}
</div>
<h3>Lista de Roles</h3>
<div class="form-group">
    <ul class="list-unstyled">
        @foreach($roles as $rol)
            <li>
                <label>
                    {{ Form::checkbox('roles[]', $rol->id, null) }}
                    {{ $rol->name }}
                    <em>({{ $rol->description ?: 'Sin descripcion' }})</em>
                </label>
            </li>
        @endforeach
    </ul>
</div>
<div class="form-group">
    {{ Form::submit('Guardar', null, ['class' => 'btn btn-primary']) }}
</div>

