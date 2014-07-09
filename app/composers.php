<?PHP

// Frontend
View::composer(Template::name('frontend.%s._layout.menu'), 'Bond\Composers\MenuComposer');
View::composer(Template::name('frontend.%s._layout.layout'), 'Bond\Composers\SettingComposer');

// Backend
View::composer('backend/_layout/menu', 'Bond\Composers\Admin\MenuComposer');