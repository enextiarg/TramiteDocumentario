@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Report Type
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($reportType, ['route' => ['reportTypes.update', $reportType->id], 'method' => 'patch']) !!}

                        @include('report_types.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection