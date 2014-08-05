<?PHP

// Frontend
View::composer(Template::name('frontend.%s._layout.header'), 'Bond\Composers\MenuComposer');
View::composer(Template::name('frontend.%s._layout.layout'), 'Bond\Composers\SettingComposer');
View::composer(Template::getTemplatesWithPath(), 'Bond\Composers\RegistrationComposer');

// Backend
View::composer('backend/_layout/menu', 'Bond\Composers\Admin\MenuComposer');