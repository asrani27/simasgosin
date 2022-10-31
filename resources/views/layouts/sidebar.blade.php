
<section class="sidebar">
    <div class="user-panel text-center">
    <div class=" image">
        <img src="/logo/Logo-PU.jpeg" class="img-circl" alt="User Image">
    </div>
    {{-- <div class="pull-left info">
        <!-- Status -->
    </div> --}}
    </div>

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    <!-- Optionally, you can add icons to the links -->
    <li class="{{ (request()->is('pemohon')) ? 'active' : '' }}"><a href="/pemohon"><i class="fa fa-home"></i> <span>Dashboard</span></a></li>
    <li class="{{ (request()->is('pemohon/daftar-layanan*')) ? 'active' : '' }}"><a href="/pemohon/daftar-layanan"><i class="fa fa-list"></i> <span>Daftar Layanan</span></a></li>
    </ul>
    <!-- /.sidebar-menu -->
</section>