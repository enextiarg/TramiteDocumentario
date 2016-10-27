<!-- Report Type Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('report_type_id', 'Report Type Id:') !!}
    {!! Form::text('report_type_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Report Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('report_date', 'Report Date:') !!}
    {!! Form::text('report_date', null, ['class' => 'form-control']) !!}
</div>

<!-- File Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('file_id', 'File Id:') !!}
    {!! Form::text('file_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('reports.index') !!}" class="btn btn-default">Cancel</a>
</div>
