@if (!isset($type))
    {{$type=''}}
@endif

<nav>
    <ul>
        <li class="{{ $menu == 'dashboard'?'active': '' }}" >
            <a href="/{{ Config::get('bondcms.admin_prefix') }}" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Dashboard</span></a>
        </li>
        @yield('nev_menu_after_dashboard')
        <li class="{{ in_array($menu, array('article', 'article/create', 'article/edit'))? 'active':'' }}">
            <a href="#"><i class="fa fa-lg fa-fw fa-desktop"></i> <span class="menu-item-parent">Article</span></a>
            <ul>
                <li class="{{ $menu == 'article'?'active': '' }}">
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/article">Article</a>
                </li>
                @if($menu == 'article/edit')
                <li class="{{ $menu == 'article/edit'?'active': '' }}" >
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/article/edit">Edit</a>
                </li>

                @else
                <li class="{{ $menu == 'article/create'?'active': '' }}" >
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/article/create">Add New</a>
                </li>
                @endif
            </ul>
        </li>
        @yield('nev_menu_after_article')
        <li class="{{ in_array($menu, array('category', 'category/create', 'category/edit'))? 'active':'' }}">
            <a href="#"><i class="fa fa-lg fa-fw fa-desktop"></i> <span class="menu-item-parent">Category</span></a>
            <ul>
                <li class="{{ $menu == 'category'?'active': '' }}">
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/category">Category</a>
                </li>
                @if($menu == 'category/edit')
                <li class="{{ $menu == 'category/edit'?'active': '' }}" >
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/category/edit">Edit</a>
                </li>

                @else
                <li class="{{ $menu == 'category/create'?'active': '' }}" >
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/category/create">Add New</a>
                </li>
                @endif
            </ul>
        </li>
        @yield('nev_menu_after_category')
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
        <li class="{{ in_array($menu, array('news', 'news/new', 'news/edit'))? 'active':'' }}">
            <a href="#"><i class="fa fa-lg fa-fw fa-desktop"></i> <span class="menu-item-parent">News</span></a>
            <ul>
                <li class="{{ $menu == 'news'?'active': '' }}">
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/news">News</a>
                </li>
                @if($menu == 'news/edit')
                <li class="{{ $menu == 'news/edit'?'active': '' }}" >
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/news/edit">Edit</a>
                </li>

                @else
                <li class="{{ $menu == 'news/new'?'active': '' }}" >
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/news/create">Add New</a>
                </li>
                @endif
            </ul>
        </li>
        <li class="{{ in_array($menu, array('faq', 'faq/new', 'faq/edit'))? 'active':'' }}">
            <a href="#"><i class="fa fa-lg fa-fw fa-desktop"></i> <span class="menu-item-parent">Faq</span></a>
            <ul>
                <li class="{{ $menu == 'faq'?'active': '' }}">
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/faq">Faq</a>
                </li>
                @if($menu == 'faq/edit')
                <li class="{{ $menu == 'faq/edit'?'active': '' }}" >
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/faq/edit">Edit</a>
                </li>

                @else
                <li class="{{ $menu == 'faq/new'?'active': '' }}" >
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/faq/create">Add New</a>
                </li>
                @endif
            </ul>
        </li>
        @yield('nev_menu_after_news')
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
        <li class="{{ in_array($menu, array('appearance', 'menu', 'appearance/themes', 'appearance/header'))? 'active':'' }}">
            <a href="#"><i class="fa fa-lg fa-fw fa-desktop"></i> <span class="menu-item-parent">Appearance</span></a>
            <ul>
                <li class="{{ $menu == 'menu'?'active': '' }}">
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/menu">Menu</a>
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
        <li class="{{ in_array($menu, array('gallery', 'gallery/new', 'gallery/edit'))? 'active':'' }}">
            <a href="#"><i class="fa fa-lg fa-fw fa-desktop"></i> <span class="menu-item-parent">Gallery</span></a>
            <ul>
                <li class="{{ $menu == 'gallery'?'active': '' }}">
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/photo_gallery">Gallery</a>
                </li>


                @if($menu == 'gallery/edit')
                <li class="{{ $menu == 'gallery/edit'?'active': '' }}" >
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/photo_gallery/edit">Edit</a>
                </li>

                @else
                <li class="{{ $menu == 'gallery/new'?'active': '' }}" >
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/photo_gallery/create">Add New</a>
                </li>
                @endif

            </ul>
        </li>
        @yield('nev_menu_after_gallery')

        <li class="{{ $type != 'block' && in_array($menu, array('slider', 'slider/new', 'slider/edit'))? 'active':'' }}">
            <a href="#"><i class="fa fa-lg fa-fw fa-desktop"></i> <span class="menu-item-parent">Slider</span></a>
            <ul>
                <li class="{{ $type != 'block' && $menu == 'slider'?'active': '' }}">
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/slider">Slider</a>
                </li>


                @if($menu == 'gallery/edit')
                <li class="{{ $type != 'block' &&$menu == 'slider/edit'?'active': '' }}" >
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/slider/edit">Edit</a>
                </li>

                @else
                <li class="{{ $type != 'block' &&$menu == 'slider/new'?'active': '' }}" >
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/slider/create">Add New</a>
                </li>
                @endif

            </ul>
        </li>

        <li class="{{ $type == 'block' && in_array($menu, array('slider', 'slider/new', 'slider/edit'))? 'active':'' }}">
            <a href="#"><i class="fa fa-lg fa-fw fa-desktop"></i> <span class="menu-item-parent">BlockPress</span></a>
            <ul>
                <li class="{{ $type == 'block' && $menu == 'slider'?'active': '' }}">
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/slider?type=block">Block</a>
                </li>


                @if($menu == 'gallery/edit')
                <li class="{{ $type == 'block' && $menu == 'slider/edit'?'active': '' }}" >
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/slider/edit?type=block">Edit Block</a>
                </li>

                @else
                <li class="{{ $type == 'block' && $menu == 'slider/new'?'active': '' }}" >
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/slider/create?type=block">New Block</a>
                </li>
                @endif

            </ul>
        </li>
        @yield('nev_menu_after_slider')
        <li class="{{ in_array($menu, array('filemanager'))? 'active':'' }}">
            <a href="#"><i class="fa fa-lg fa-fw fa-desktop"></i> <span class="menu-item-parent">File Manager</span></a>
            <ul>
                <li class="{{ $menu == 'filemanager'?'active': '' }}">
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/filemanager/show-admin">Show</a>
                </li>
            </ul>
        </li>
        @yield('nev_menu_after_filemanager')
        <li class="{{ in_array($menu, array('users', 'users/new', 'users/edit'))? 'active':'' }}">
            <a href="#"><i class="fa fa-lg fa-fw fa-desktop"></i> <span class="menu-item-parent">Users</span></a>
            <ul>
                <li class="{{ $menu == 'users'?'active': '' }}">
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/user">Users</a>
                </li>
                @if($menu != 'users/edit')
                <li class="{{ $menu == 'users/new'?'active': '' }}">
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/user/create">New User</a>
                </li>
                @else
                <li class="{{ $menu == 'users/edit'?'active': '' }}" >
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/#">Edit User</a>
                </li>
                @endif
            </ul>
        </li>
        @yield('nev_menu_after_user')
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