<!-- Procedure Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('procedure_id', 'Procedimiento:') !!}
    {!! Form::select('procedure_id', $procedures, null, ['class' => 'form-control']) !!}
</div>

<!-- File Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('file_number', 'Número de Expediente:') !!}
    {!! Form::text('file_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Document Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('document_number', 'Número de Documento:') !!}
    {!! Form::text('document_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Subject Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subject', 'Asunto:') !!}
    {!! Form::text('subject', null, ['class' => 'form-control']) !!}
</div>

<!-- Received Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('received_date', 'Fecha de Recepción:') !!}
    {!! Form::text('received_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Folio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('folio', 'Folio:') !!}
    {!! Form::text('folio', null, ['class' => 'form-control']) !!}
</div>

<!-- Customer Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customer_id', 'Cliente:') !!}
    {!! Form::text('customer_id', $customers, null, ['class' => 'form-control']) !!}
</div>

<!-- File Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('file_status', 'Estado del Expediente:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('file_status', false) !!}
        {!! Form::checkbox('file_status', '1', null) !!} 1
    </label>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('files.index') !!}" class="btn btn-default">Cancelar</a>
</div>
