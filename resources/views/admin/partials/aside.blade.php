<aside>
    <ul class="nav d-flex flex-column">

        {{-- <a target="_blank" href="{{ route('home') }}">
            <li class="nav-item">Guest</li>
        </a> --}}


        <li class="nav-item @class(['active' => Route::is('admin.home')])">
            <a href="{{ route('admin.home') }}">
                <i class="fa-solid fa-house-laptop me-3 fs-4"></i>Dashboard</a>
        </li>


        <li class="nav-item @class(['active' => Route::is('admin.projects.index')])">
            <a href="{{ route('admin.projects.index') }}">
                <i class="fa-solid fa-table-list me-3 fs-4"></i>Projects list</a>
        </li>

        <li class="nav-item @class(['active' => Route::is('admin.projects.create')])">
            <a href="{{ route('admin.projects.create') }}">
                <i class="fa-solid fa-square-plus me-3 fs-4"></i>Add project</a>
        </li>

        <li class="nav-item @class(['active' => Route::is('admin.tecnologies.index')])">
            <a href="{{ route('admin.tecnologies.index') }}">
                <i class="fa-solid fa-microchip me-3 fs-4"></i>Tecnologies</a>
        </li>

        <li class="nav-item @class(['active' => Route::is('admin.tecnologies.index')])">
            <a href="{{ route('admin.types-projects') }}">
                <i class="fa-solid fa-microchip me-3 fs-4"></i>Elenco per tipologia</a>
        </li>

    </ul>
</aside>
