<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="/index.html">
                <svg
                    class="brand-icon"
                    xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="xMidYMid"
                    width="30"
                    height="33"
                    viewBox="0 0 30 33"
                >
                    <g fill="none" fill-rule="evenodd">
                        <path
                            class="logo-fill-blue"
                            fill="#7DBCFF"
                            d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
                        />
                        <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                    </g>
                </svg>
                <span class="brand-name">Tvrtka Panel</span>
            </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-scrollbar">

            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">
                <li  class="has-sub active expand" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                       aria-expanded="false" aria-controls="dashboard">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span class="nav-text">Dvorana</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse show"  id="dashboard"
                         data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li  class="active" >
                                <a class="sidenav-item-link" href="{{ route('dvorane.index') }}">
                                    <span class="nav-text">Lista dvorana</span>

                                </a>
                            </li>
                            <li >
                                <a class="sidenav-item-link" href="{{ route('dvorane.create') }}">
                                    <span class="nav-text">Nova dvorana</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>
                <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ui-elements"
                       aria-expanded="false" aria-controls="ui-elements">
                        <i class="mdi mdi-folder-multiple-outline"></i>
                        <span class="nav-text">Termini</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="ui-elements"
                         data-parent="#sidebar-menu">
                        <div class="sub-menu">
                            <li  class="has-sub" >
                                <a class="sidenav-item-link" href="{{ route('termini.create') }}">
                                    <span class="nav-text">Novi termin</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </li>
            </ul>
        </div>

    </div>
</aside>
