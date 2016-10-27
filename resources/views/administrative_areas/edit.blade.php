@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Administrative Area
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($administrativeArea, ['route' => ['administrativeAreas.update', $administrativeArea->id], 'method' => 'patch']) !!}

                        @include('administrative_areas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection