<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{!! route('roles.index') !!}"><i class="fa fa-edit"></i><span>Roles</span></a>
</li>

<li class="{{ Request::is('permissions*') ? 'active' : '' }}">
    <a href="{!! route('permissions.index') !!}"><i class="fa fa-edit"></i><span>Permisos</span></a>
</li>

<li class="{{ Request::is('statuses*') ? 'active' : '' }}">
    <a href="{!! route('statuses.index') !!}"><i class="fa fa-edit"></i><span>Estados</span></a>
</li>

<li class="{{ Request::is('documentTypes*') ? 'active' : '' }}">
    <a href="{!! route('documentTypes.index') !!}"><i class="fa fa-edit"></i><span>Tipos de Documentos</span></a>
</li>

<li class="{{ Request::is('procedures*') ? 'active' : '' }}">
    <a href="{!! route('procedures.index') !!}"><i class="fa fa-edit"></i><span>Procedimientos</span></a>
</li>

<li class="{{ Request::is('reportTypes*') ? 'active' : '' }}">
    <a href="{!! route('reportTypes.index') !!}"><i class="fa fa-edit"></i><span>Tipos de Reportes</span></a>
</li>

<li class="{{ Request::is('customers*') ? 'active' : '' }}">
    <a href="{!! route('customers.index') !!}"><i class="fa fa-edit"></i><span>Clientes</span></a>
</li>

<li class="{{ Request::is('files*') ? 'active' : '' }}">
    <a href="{!! route('files.index') !!}"><i class="fa fa-edit"></i><span>Expedientes</span></a>
</li>

<li class="{{ Request::is('archives*') ? 'active' : '' }}">
    <a href="{!! route('archives.index') !!}"><i class="fa fa-edit"></i><span>Archivo</span></a>
</li>

<li class="{{ Request::is('reports*') ? 'active' : '' }}">
    <a href="{!! route('reports.index') !!}"><i class="fa fa-edit"></i><span>Reportes</span></a>
</li>

<li class="{{ Request::is('administrativeAreas*') ? 'active' : '' }}">
    <a href="{!! route('administrativeAreas.index') !!}"><i class="fa fa-edit"></i><span>Áreas Administrativas</span></a>
</li>

