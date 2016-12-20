<!-- Report Type Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('report_type_id', 'Tipo de Reporte:') !!}
    {!! Form::text('report_type_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Report Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('report_date', 'Fecha de Reporte:') !!}
    {!! Form::text('report_date', null, ['class' => 'form-control']) !!}
</div>

<!-- File Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('file_id', 'Expediente:') !!}
    {!! Form::text('file_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('reports.index') !!}" class="btn btn-default">Cancelar</a>
</div>
