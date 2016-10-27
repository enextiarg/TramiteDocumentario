<table class="table table-responsive" id="documentTypes-table">
    <thead>
        <th>Name</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($documentTypes as $documentType)
        <tr>
            <td>{!! $documentType->name !!}</td>
            <td>
                {!! Form::open(['route' => ['documentTypes.destroy', $documentType->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('documentTypes.show', [$documentType->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('documentTypes.edit', [$documentType->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>