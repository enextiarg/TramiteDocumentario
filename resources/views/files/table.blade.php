<table class="table table-responsive" id="files-table">
    <thead>
        <th>Proceso</th>
        <th>Número de Expdiente</th>
        <th>Número de Documento</th>
        <th>Asunto</th>
        <th>Fecha de Recepción</th>
        <th>Folio</th>
        <th>Cliente</th>
        <th>Estado</th>
        <th>Tipo de Documento</th>
        <th colspan="3">Acción</th>
    </thead>
    <tbody>
    @foreach($files as $file)
        <tr>
            <td>{!! $file->procedure->name !!}</td>
            <td>{!! $file->file_number !!}</td>
            <td>{!! $file->document_number !!}</td>
            <td>{!! $file->subject !!}</td>
            <td>{!! $file->received_date !!}</td>
            <td>{!! $file->folio !!}</td>
            <td>{!! $file->customer->firstname !!} {!! $file->customer->lastname !!}</td>
            <td>{!! ($file->file_status)?'Activo':'Terminado' !!}</td>
            <td>{!! $file->documentType->name !!}</td>
            <td>
                {!! Form::open(['route' => ['files.destroy', $file->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('files.show', [$file->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('files.edit', [$file->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>