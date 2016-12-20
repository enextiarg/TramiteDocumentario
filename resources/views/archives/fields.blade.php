<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- File Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('file_id', 'Expediente:') !!}
    {!! Form::text('file_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('archives.index') !!}" class="btn btn-default">Cancelar</a>
</div>
