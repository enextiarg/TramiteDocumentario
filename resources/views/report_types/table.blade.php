<table class="table table-responsive" id="reportTypes-table">
    <thead>
        <th>Nombre</th>
        <th colspan="3">Acción</th>
    </thead>
    <tbody>
    @foreach($reportTypes as $reportType)
        <tr>
            <td>{!! $reportType->name !!}</td>
            <td>
                {!! Form::open(['route' => ['reportTypes.destroy', $reportType->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('reportTypes.show', [$reportType->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('reportTypes.edit', [$reportType->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>