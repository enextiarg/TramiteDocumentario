<li class="{{ Request::is('app') ? 'active' : '' }}">
    <a href="{!! route('app.home') !!}"><i class="fa fa-search"></i><span>Búsqueda</span></a>
</li>

<li class="{{ Request::is('app/user/files*') ? 'active' : '' }}">
    <a href="{!! route('customer.files.index') !!}"><i class="fa fa-file"></i><span>Trámites</span></a>
</li>

@if (Auth::user()->hasRole('admin'))
<li class="treeview {{ Request::is('settings*') ? 'active' : '' }}">
    <a href="#"><i class="fa fa-cog"></i><span>Configuración</span></a>

    <ul class="treeview-menu">
        <li class="{{ Request::is('roles*') ? 'active' : '' }}">
            <a href="{!! route('roles.index') !!}"><span>Áreas Administrativas</span></a>
        </li>

        <li class="{{ Request::is('statuses*') ? 'active' : '' }}">
            <a href="{!! route('statuses.index') !!}"><span>Estados</span></a>
        </li>

        <li class="{{ Request::is('documentTypes*') ? 'active' : '' }}">
            <a href="{!! route('documentTypes.index') !!}"><span>Tipos de Documentos</span></a>
        </li>

        <li class="{{ Request::is('procedures*') ? 'active' : '' }}">
            <a href="{!! route('procedures.index') !!}"><span>Procedimientos</span></a>
        </li>

        <li class="{{ Request::is('reportTypes*') ? 'active' : '' }}">
            <a href="{!! route('reportTypes.index') !!}"><span>Tipos de Reportes</span></a>
        </li>

        <li class="{{ Request::is('customers*') ? 'active' : '' }}">
            <a href="{!! route('customers.index') !!}"><span>Clientes</span></a>
        </li>

        <li class="{{ Request::is('files*') ? 'active' : '' }}">
            <a href="{!! route('files.index') !!}"><span>Expedientes</span></a>
        </li>

        <li class="{{ Request::is('archives*') ? 'active' : '' }}">
            <a href="{!! route('archives.index') !!}"><span>Archivo</span></a>
        </li>

        <li class="{{ Request::is('reports*') ? 'active' : '' }}">
            <a href="{!! route('reports.index') !!}"><span>Reportes</span></a>
        </li>

    </ul>
</li>
@endif
<!--li class="{{ Request::is('permissions*') ? 'active' : '' }}">
    <a href="{!! route('permissions.index') !!}"><span>Permisos</span></a>
</li-->

<!--li class="{{ Request::is('administrativeAreas*') ? 'active' : '' }}">
    <a href="{!! route('administrativeAreas.index') !!}"><span>Áreas Administrativas</span></a>
</li-->

