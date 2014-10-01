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
            <a href="#"><i class="fa fa-lg fa-fw fa fa-align-left"></i> <span class="menu-item-parent">Article</span></a>
            <ul>
                <li class="{{ $menu == 'article'?'active': '' }}">
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/article">View Articles</a>
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
            <a href="#"><i class="fa fa-lg fa-fw fa-tag"></i> <span class="menu-item-parent">Category</span></a>
            <ul>
                <li class="{{ $menu == 'category'?'active': '' }}">
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/category">View Categories</a>
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
            <a href="#"><i class="fa fa-lg fa-fw fa-pencil"></i> <span class="menu-item-parent">Pages</span></a>
            <ul>
                <li class="{{ $menu == 'pages'?'active': '' }}">
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/pages">View Pages</a>
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
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/news">View News</a>
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
            <a href="#"><i class="fa fa-lg fa-fw fa-question"></i> <span class="menu-item-parent">Faq</span></a>
            <ul>
                <li class="{{ $menu == 'faq'?'active': '' }}">
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/faq"> View Faq</a>
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
            <a href="#"><i class="fa fa-lg fa-fw fa-picture-o"></i> <span class="menu-item-parent">Media</span></a>
            <ul>
                <li class="{{ $menu == 'media'?'active': '' }}">
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/media">View Media</a>
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
            <a href="#"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">Gallery</span></a>
            <ul>
                <li class="{{ $menu == 'gallery'?'active': '' }}">
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/photo_gallery">View Gallery</a>
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
            <a href="#"><i class="fa fa-lg fa-fw fa-th-large"></i> <span class="menu-item-parent">Slider</span></a>
            <ul>
                <li class="{{ $type != 'block' && $menu == 'slider'?'active': '' }}">
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/slider">View Slider</a>
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
            <a href="#"><i class="fa fa-lg fa-fw fa-cubes"></i> <span class="menu-item-parent">BlockPress</span></a>
            <ul>
                <li class="{{ $type == 'block' && $menu == 'slider'?'active': '' }}">
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/slider?type=block">View Blocks</a>
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
            <a href="#"><i class="fa fa-lg fa-fw fa-files-o"></i> <span class="menu-item-parent">File Manager</span></a>
            <ul>
                <li class="{{ $menu == 'filemanager'?'active': '' }}">
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/filemanager/show-admin">Show</a>
                </li>
            </ul>
        </li>
        @yield('nev_menu_after_filemanager')
        <li class="{{ in_array($menu, array('users', 'users/new', 'users/edit'))? 'active':'' }}">
            <a href="#"><i class="fa fa-lg fa-fw fa-user"></i> <span class="menu-item-parent">Users</span></a>
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
            <a href="#"><i class="fa fa-lg fa-fw fa-cog"></i> <span class="menu-item-parent">Settings</span></a>
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


        <li class="{{ in_array($menu, array('events', 'events/new', 'events/edit'))? 'active':'' }}">
            <a href="#"><i class="fa fa-lg fa-fw fa-shield"></i> <span class="menu-item-parent">Events</span></a>
            <ul>
                <li class="{{ $menu == 'events'?'active': '' }}">
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/events">View Events</a>
                </li>
                @if($menu == 'events/edit')
                <li class="{{ $menu == 'events/edit'?'active': '' }}" >
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/events/edit">Edit</a>
                </li>

                @else
                <li class="{{ $menu == 'events/new'?'active': '' }}" >
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/events/create">Add New</a>
                </li>
                @endif
            </ul>
        </li>

        <li class="{{ in_array($menu, array('country', 'country/new', 'country/edit'))? 'active':'' }}">
            <a href="#"><i class="fa fa-lg fa-fw fa-flag"></i> <span class="menu-item-parent">Country</span></a>
            <ul>
                <li class="{{ $menu == 'country'?'active': '' }}">
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/footballticket?action_type=country">View Countries</a>
                </li>
                @if($menu == 'country/edit')
                <li class="{{ $menu == 'country/edit'?'active': '' }}" >
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/footballticket/edit/?action_type=country">Edit</a>
                </li>

                @else
                <li class="{{ $menu == 'country/new'?'active': '' }}" >
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/footballticket/create/?action_type=country">Add New</a>
                </li>
                @endif
            </ul>
        </li>

        <li class="{{ in_array($menu, array('club', 'club/new', 'club/edit'))? 'active':'' }}">
            <a href="#"><i class="fa fa-lg fa-fw fa-life-ring"></i> <span class="menu-item-parent">Club</span></a>
            <ul>
                <li class="{{ $menu == 'club'?'active': '' }}">
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/footballticket?action_type=club">View Clubs</a>
                </li>
                @if($menu == 'club/edit')
                <li class="{{ $menu == 'club/edit'?'active': '' }}" >
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/footballticket/edit?action_type=club">Edit</a>
                </li>

                @else
                <li class="{{ $menu == 'club/new'?'active': '' }}" >
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/footballticket/create?action_type=club">Add New</a>
                </li>
                @endif
            </ul>
        </li>

        <li class="{{ in_array($menu, array('league', 'league/new', 'league/edit'))? 'active':'' }}">
            <a href="#"><i class="fa fa-lg fa-fw fa-align-justify"></i> <span class="menu-item-parent">League</span></a>
            <ul>
                <li class="{{ $menu == 'league'?'active': '' }}">
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/footballticket?action_type=league">View Leagues</a>
                </li>
                @if($menu == 'league/edit')
                <li class="{{ $menu == 'league/edit'?'active': '' }}" >
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/footballticket/edit/?action_type=league">Edit</a>
                </li>

                @else
                <li class="{{ $menu == 'league/new'?'active': '' }}" >
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/footballticket/create/?action_type=league">Add New</a>
                </li>
                @endif
            </ul>
        </li>

        <li class="{{ in_array($menu, array('season', 'season/new', 'season/edit'))? 'active':'' }}">
            <a href="#"><i class="fa fa-lg fa-fw fa-list-ul"></i> <span class="menu-item-parent">Season</span></a>
            <ul>
                <li class="{{ $menu == 'season'?'active': '' }}">
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/footballticket?action_type=season">View Seasons</a>
                </li>
                @if($menu == 'league/edit')
                <li class="{{ $menu == 'season/edit'?'active': '' }}" >
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/footballticket/edit?action_type=season>Edit</a>
                </li>

                @else
                <li class="{{ $menu == 'season/new'?'active': '' }}" >
                    <a href="/{{ Config::get('bondcms.admin_prefix') }}/footballticket/create?action_type=season">Add New</a>
                </li>
                @endif
            </ul>
        </li>

    </ul>
</nav>