<table class="table table-responsive" id="procedures-table">
    <thead>
        <th>Name</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($procedures as $procedure)
        <tr>
            <td>{!! $procedure->name !!}</td>
            <td>
                {!! Form::open(['route' => ['procedures.destroy', $procedure->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('procedures.show', [$procedure->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('procedures.edit', [$procedure->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>