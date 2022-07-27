      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="{{ url('home')}}">TAHUBLOG</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ url('home')}}">TB</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
              <li class=active><a class="nav-link" href="{{ url('home')}}"><i class="fas fa-home"></i> <span> Dashboard</span></a>
            </li>
            <li class="menu-header">Berita</li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-newspaper"></i> <span>Posts</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('post.index')}}" href="">All Posts</a></li>
                <li><a class="nav-link" href="{{ route('post.tampil_hapus')}}">Trash Post</a></li>
              </ul>
            </li>

             <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-folder-open"></i> <span>Category</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('category.index')}}">List Category</a></li>
                <li><a class="nav-link" href="{{ route('category.create')}}">Add Category</a></li>
              </ul>
            </li>

             <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-tags"></i> <span>Tags</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{ route('tag.index')}}">List Tag</a></li>
                <li><a class="nav-link" href="{{ route('tag.create')}}">Add Tag</a></li>
              </ul>
            </li>

             <li class="dropdown">
              <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-user-astronaut"></i> <span>Users</span></a>
              <ul class="dropdown-menu">
                 <li><a class="nav-link" href="{{ route('user.index')}}">List User</a></li>
                <li><a class="nav-link" href="{{ route('user.create')}}">Add User</a></li>
              </ul>
            </li>

            <li><a class="nav-link" href="#"><i class="fas fa-id-card"></i> <span> Manage Profile</span></a>
            <li><a class="nav-link" href="#"><i class="fas fa-cog"></i> <span> Site Setting</span></a>  
        </aside>
      </div>