<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-primary" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="{{route('home')}}" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="{{route('penulis.index')}}"><i class="fa fa-table fa-fw"></i> Penulis</a>
            </li>
            <li>
                <a href="{{route('buku.index')}}"><i class="fa fa-table fa-fw"></i> Buku</a>
            </li>
        </ul>
    </div>
</div>