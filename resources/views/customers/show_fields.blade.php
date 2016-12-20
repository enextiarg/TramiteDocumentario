<!-- Firstname Field -->
<div class="form-group">
    {!! Form::label('firstname', 'Nombres:') !!}
    <p>{!! $customer->firstname !!}</p>
</div>

<!-- Lastname Field -->
<div class="form-group">
    {!! Form::label('lastname', 'Apellidos:') !!}
    <p>{!! $customer->lastname !!}</p>
</div>

<!-- Document Field -->
<div class="form-group">
    {!! Form::label('document', 'DNI:') !!}
    <p>{!! $customer->document !!}</p>
</div>
