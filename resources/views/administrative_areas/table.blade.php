<table class="table table-responsive" id="administrativeAreas-table">
    <thead>
        <th>Nombre</th>
        <th colspan="3">Acción</th>
    </thead>
    <tbody>
    @foreach($administrativeAreas as $administrativeArea)
        <tr>
            <td>{!! $administrativeArea->name !!}</td>
            <td>
                {!! Form::open(['route' => ['administrativeAreas.destroy', $administrativeArea->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('administrativeAreas.show', [$administrativeArea->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('administrativeAreas.edit', [$administrativeArea->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>