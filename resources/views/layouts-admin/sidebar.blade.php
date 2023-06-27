 <!-- Sidebar -->
 <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
    <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
            <ul class="list-group-item list-group-item-action py-2 ripple p-0 m-0" style="list-style-type: none; border: none !important">
                @if (Route::is('admin-dashboard'))
                    <li class="list-group-item list-group-item-action py-2 ripple">
                        <a onclick="window.location='{{ route('ringkasan') }}'" style="cursor: pointer;">
                            <i class="fas fa-chart-area fa-fw me-3"></i><span>Ringkasan</span>
                        </a>
                    </li>
                    <li class="list-group-item list-group-item-action py-2 ripple">
                        <a onclick="window.location='{{ route('pengguna') }}'" style="cursor: pointer;">
                            <i class="fas fa-users fa-fw me-3"></i><span>Pengguna</span>
                        </a>
                    </li>
                    <li class="list-group-item list-group-item-action py-2 ripple active">
                        <a onclick="window.location='{{ route('admin-dashboard') }}'" style="cursor: pointer;"><i class="fas fa-folder fa-fw me-3">
                            </i><span>Konten</span>
                        </a>
                    </li>
                @elseif (Route::is('ringkasan'))
                    <li class="list-group-item list-group-item-action py-2 ripple active">
                        <a onclick="window.location='{{ route('ringkasan') }}'" style="cursor: pointer;">
                            <i class="fas fa-chart-area fa-fw me-3"></i><span>Ringkasan</span>
                        </a>
                    </li>
                    <li class="list-group-item list-group-item-action py-2 ripple">
                        <a onclick="window.location='{{ route('pengguna') }}'" style="cursor: pointer;">
                            <i class="fas fa-users fa-fw me-3"></i><span>Pengguna</span>
                        </a>
                    </li>
                    <li class="list-group-item list-group-item-action py-2 ripple">
                        <a onclick="window.location='{{ route('admin-dashboard') }}'" style="cursor: pointer;"><i class="fas fa-folder fa-fw me-3">
                            </i><span>Konten</span>
                        </a>
                    </li>
                @elseif (Route::is('pengguna'))
                    <li class="list-group-item list-group-item-action py-2 ripple">
                        <a onclick="window.location='{{ route('ringkasan') }}'" style="cursor: pointer;">
                            <i class="fas fa-chart-area fa-fw me-3"></i><span>Ringkasan</span>
                        </a>
                    </li>
                    <li class="list-group-item list-group-item-action py-2 ripple active">
                        <a onclick="window.location='{{ route('pengguna') }}'" style="cursor: pointer;">
                            <i class="fas fa-users fa-fw me-3"></i><span>Pengguna</span>
                        </a>
                    </li>
                    <li class="list-group-item list-group-item-action py-2 ripple">
                        <a onclick="window.location='{{ route('admin-dashboard') }}'" style="cursor: pointer;"><i class="fas fa-folder fa-fw me-3">
                            </i><span>Konten</span>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
<!-- Sidebar -->
