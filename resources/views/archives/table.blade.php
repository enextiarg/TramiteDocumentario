<table class="table table-responsive" id="archives-table">
    <thead>
        <th>Name</th>
        <th>File Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($archives as $archive)
        <tr>
            <td>{!! $archive->name !!}</td>
            <td>{!! $archive->file_id !!}</td>
            <td>
                {!! Form::open(['route' => ['archives.destroy', $archive->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('archives.show', [$archive->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('archives.edit', [$archive->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>