<nav>
    <ul>
        <li class="{{ $menu == 'dashboard'?'active': '' }}" >
            <a href="/{{ Config::get('bondcms.admin_prefix') }}" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Dashboard</span></a>
        </li>
        @yield('nev_menu_after_dashboard')
        <li class="{{ in_array($menu, array('pages', 'pages/new', 'pages/edit'))? 'active':'' }}">
            <a href="#"><i class="fa fa-lg fa-fw fa-desktop"></i> <span class="menu-item-parent">Pages</span></a>
            <ul>
                <li class="{{ $menu == 'pages'?'active': '' }}">
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/pages">Pages</a>
                </li>
                @if($menu == 'pages/edit')
                    <li class="{{ $menu == 'pages/edit'?'active': '' }}" >
                        <a href="/{{ Config::get('bondcms.admin_prefix') }}/pages/edit">Edit</a>
                    </li>

                @else
                    <li class="{{ $menu == 'pages/new'?'active': '' }}" >
                        <a href="/{{ Config::get('bondcms.admin_prefix') }}/pages/new">Add New</a>
                    </li>
                @endif
            </ul>
        </li>
        @yield('nev_menu_after_pages')
        <li class="{{ in_array($menu, array('media', 'media/new'))? 'active':'' }}">
            <a href="#"><i class="fa fa-lg fa-fw fa-desktop"></i> <span class="menu-item-parent">Media</span></a>
            <ul>
                <li class="{{ $menu == 'media'?'active': '' }}">
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/media">Media</a>
                </li>

                <li class="{{ $menu == 'media/list'?'active': '' }}" >
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/media/list">List</a>
                </li>
                @if($menu == 'media/edit')
                <li class="{{ $menu == 'media/edit'?'active': '' }}" >
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/media/edit">Edit</a>
                </li>
                @endif
            </ul>
        </li>
        @yield('nev_menu_after_media')
        <li class="{{ in_array($menu, array('appearance', 'appearance/menu', 'appearance/themes', 'appearance/header'))? 'active':'' }}">
            <a href="#"><i class="fa fa-lg fa-fw fa-desktop"></i> <span class="menu-item-parent">Appearance</span></a>
            <ul>
                <li class="{{ $menu == 'appearance/menu'?'active': '' }}">
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/appearance/menu">Menu</a>
                </li>

                <li class="{{ $menu == 'appearance/themes'?'active': '' }}" >
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/appearance/themes">Themes</a>
                </li>

                <li class="{{ $menu == 'appearance/header'?'active': '' }}" >
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/appearance/header">Header</a>
                </li>
            </ul>
        </li>
        @yield('nev_menu_after_appearance')
        <li class="{{ in_array($menu, array('users', 'users/new', 'users/group', 'users/permission'))? 'active':'' }}">
            <a href="#"><i class="fa fa-lg fa-fw fa-desktop"></i> <span class="menu-item-parent">Users</span></a>
            <ul>
                <li class="{{ $menu == 'users'?'active': '' }}">
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/users">Users</a>
                </li>

                <li class="{{ $menu == 'users/new'?'active': '' }}" >
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/users/new">Add New</a>
                </li>

                <li class="{{ $menu == 'users/group'?'active': '' }}" >
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/users/group">Group</a>
                </li>

                <li class="{{ $menu == 'users/permission'?'active': '' }}">
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/users/permission">Permission</a>
                </li>
            </ul>
        </li>
        @yield('nev_menu_after_users')
        <li class="{{ in_array($menu, array('settings', 'settings/general', 'settings/website'))? 'active':'' }}">
            <a href="#"><i class="fa fa-lg fa-fw fa-desktop"></i> <span class="menu-item-parent">Settings</span></a>
            <ul>
                <li class="{{ $menu == 'settings/general'?'active': '' }}">
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/settings/general">General</a>
                </li>

                <li class="{{ $menu == 'settings/website'?'active': '' }}" >
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/settings/website">Website</a>
                </li>
            </ul>
        </li>
        @yield('nev_menu_end')
    </ul>
</nav>