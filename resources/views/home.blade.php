@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <form action="{!! route('customer.files.index') !!}" method="get">
                <div class="col-md-8">
                    <div class="box box-primary">
                        <div class="box-body">
                            <div class="input-group">
                                <input type="text" name="folio" class="form-control" placeholder="Busqueda por Folio...">
                                <span class="input-group-btn">
                                    <button class="btn btn-success" type="submit">
                                        <span class="fa fa-search"></span>
                                        Buscar
                                    </button>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
