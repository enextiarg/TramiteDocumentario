<!-- Procedure Id Field -->
<div class="form-group">
    {!! Form::label('procedure_id', 'Proceso:') !!}
    <p>{!! $file->procedure_id !!}</p>
</div>

<!-- File Number Field -->
<div class="form-group">
    {!! Form::label('file_number', 'Número de expediente:') !!}
    <p>{!! $file->file_number !!}</p>
</div>

<!-- Document Number Field -->
<div class="form-group">
    {!! Form::label('document_number', 'Número de Documento:') !!}
    <p>{!! $file->document_number !!}</p>
</div>

<!-- Subject Field -->
<div class="form-group">
    {!! Form::label('subject', 'Asunto:') !!}
    <p>{!! $file->subject !!}</p>
</div>

<!-- Received Date Field -->
<div class="form-group">
    {!! Form::label('received_date', 'Fecha de Recepción:') !!}
    <p>{!! $file->received_date !!}</p>
</div>

<!-- Folio Field -->
<div class="form-group">
    {!! Form::label('folio', 'Folio:') !!}
    <p>{!! $file->folio !!}</p>
</div>

<!-- Customer Id Field -->
<div class="form-group">
    {!! Form::label('customer_id', 'Cliente:') !!}
    <p>{!! $file->customer_id !!}</p>
</div>

<!-- File Status Field -->
<div class="form-group">
    {!! Form::label('file_status', 'Estado del Expediente:') !!}
    <p>{!! $file->file_status !!}</p>
</div>

<!-- Document Type Id Field -->
<div class="form-group">
    {!! Form::label('document_type_id', 'Tipo de Documento:') !!}
    <p>{!! $file->document_type_id !!}</p>
</div>
