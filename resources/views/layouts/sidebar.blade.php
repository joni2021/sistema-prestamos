<nav class="pcoded-navbar">
    <div class="pcoded-inner-navbar main-menu">

        <div class="pcoded-navigatio-lavel">Gestión</div>
        <ul class="pcoded-item pcoded-left-item">
            <li class="pcoded-hasmenu ">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-list"></i></span>
                    <span class="pcoded-mtext">Clientes</span>
                </a>
                <ul class="pcoded-submenu">
                    <li>
                        <a href="{{ route('clients.create') }}">
                            <span class="pcoded-mtext">Nuevo cliente</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('clients.index') }}">
                            <span class="pcoded-mtext">Ver clientes</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="pcoded-hasmenu ">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="feather icon-list"></i></span>
                    <span class="pcoded-mtext">Préstamos</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="">
                        <a href="{{ route('forms.create') }}">
                            <span class="pcoded-mtext">Nuevo préstamo</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ route('forms.index') }}">
                            <span class="pcoded-mtext">Préstamos otorgados</span>
                        </a>
                    </li>
                </ul>
            </li>


            <li class="pcoded-hasmenu ">
                <a href="javascript:void(0)">
                    <span class="pcoded-micon"><i class="icofont icofont-wheel"></i></span>
                    <span class="pcoded-mtext"> Configuraciones</span>
                </a>
                <ul class="pcoded-submenu">
                    <li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style1">
                        <a href="javascript:void(0)">
                            <span class="pcoded-mtext">Financiaciones</span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class="">
                                <a href="{{ route('financings.index') }}">
                                    <span class="pcoded-mtext">Listado</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{ route('financings.create') }}">
                                    <span class="pcoded-mtext">Nuevo</span>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="pcoded-hasmenu" dropdown-icon="style1" subitem-icon="style1">
                        <a href="javascript:void(0)">
                            <span class="pcoded-mtext">Tipos de archivos</span>
                        </a>
                        <ul class="pcoded-submenu">
                            <li class="">
                                <a href="{{ route('archiveTypes.index') }}">
                                    <span class="pcoded-mtext">Listado</span>
                                </a>
                            </li>
                            <li class="">
                                <a href="{{ route('archiveTypes.create') }}">
                                    <span class="pcoded-mtext">Nuevo</span>
                                </a>
                            </li>

                        </ul>
                    </li>

                </ul>
            </li>

        </ul>

    </div>
</nav>