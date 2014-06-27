<?PHP

// Frontend
View::composer('frontend/_layout/menu', 'Bond\Composers\MenuComposer');
View::composer('frontend/_layout/layout', 'Bond\Composers\SettingComposer');

// Backend
View::composer('backend/_layout/menu', 'Bond\Composers\Admin\MenuComposer');