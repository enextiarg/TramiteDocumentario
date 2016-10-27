<table class="table table-responsive" id="reports-table">
    <thead>
        <th>Report Type Id</th>
        <th>Report Date</th>
        <th>User Id</th>
        <th>File Id</th>
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($reports as $report)
        <tr>
            <td>{!! $report->report_type_id !!}</td>
            <td>{!! $report->report_date !!}</td>
            <td>{!! $report->user_id !!}</td>
            <td>{!! $report->file_id !!}</td>
            <td>
                {!! Form::open(['route' => ['reports.destroy', $report->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('reports.show', [$report->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('reports.edit', [$report->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>