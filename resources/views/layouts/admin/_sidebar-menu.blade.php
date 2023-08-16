<li class="nav-item ">
    <a href="{{ url('/dashboard') }}" class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}">
        <i class="nav-icon fa-fw nav-icon fa fa-bars"></i>
        <p>Dashboard</p>
    </a>
</li>
<li class="nav-item ">
    <a href="#" class="nav-link {{ Request::is('users') ? 'active' : '' }}">
        <i class="nav-icon fa-fw nav-icon fa fa-user"></i>
        <p>Donor</p>
    </a>
</li>
<li class="nav-item ">
    <a href="#" class="nav-link {{ Request::is('blood-group') ? 'active' : '' }}">
        <i class="nav-icon fa-fw nav-icon fa fa-tint"></i>
        <p>Blood Group</p>
    </a>
</li>




{{-- @can('department_list')
    <li class="nav-item ">
        <a href="{{ url('/admin/departments') }}"
            class="nav-link {{ Request::is('admin/departments*') ? 'active' : '' }}">
            <i class="nav-icon fa-fw nav-icon fa fa-building"></i>
            <p>Departments</p>
        </a>
    </li>
@endcan --}}

