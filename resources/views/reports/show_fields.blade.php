<!-- Report Type Id Field -->
<div class="form-group">
    {!! Form::label('report_type_id', 'Tipo de Reporte:') !!}
    <p>{!! $report->report_type_id !!}</p>
</div>

<!-- Report Date Field -->
<div class="form-group">
    {!! Form::label('report_date', 'Fecha de Reporte:') !!}
    <p>{!! $report->report_date !!}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'Usuario:') !!}
    <p>{!! $report->user_id !!}</p>
</div>

<!-- File Id Field -->
<div class="form-group">
    {!! Form::label('file_id', 'Expediente:') !!}
    <p>{!! $report->file_id !!}</p>
</div>
