<?PHP

// Frontend
View::composer(Template::name('frontend.%s._layout.header'), 'Bond\Composers\MenuComposer');
View::composer(Template::name('frontend.%s._layout.layout'), 'Bond\Composers\SettingComposer');
View::composer(Template::name('frontend.%s.sidebars.side1'), 'Bond\Composers\SidebarComposer');
View::composer(Template::getTemplatesWithPath(), 'Bond\Composers\SettingComposer');
View::composer(Template::getTemplatesWithPath(), 'Bond\Composers\PageComposer');
// Backend
View::composer('backend/_layout/menu', 'Bond\Composers\Admin\MenuComposer');

//footballticket
View::composer('footballticket::admin.footballticket.partials.club', 'Bondmedia\Footballticket\Composers\Admin\ClubComposer');
//footballticket
View::composer('footballticket::admin.footballticket.partials.league', 'Bondmedia\Footballticket\Composers\Admin\LeagueComposer');
