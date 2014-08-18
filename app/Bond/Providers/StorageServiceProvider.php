<?php namespace Bond\Providers;

use Illuminate\Support\ServiceProvider;

class StorageServiceProvider extends ServiceProvider {

    public function register() {

        $this->app->bind(
            'Bond\Repositories\BaseRepositoryInterface',
            'Bond\Repositories\Article\ArticleRepository',
            'Bond\Repositories\Category\CategoryRepository',
            'Bond\Repositories\News\NewsRepository',
            'Bond\Repositories\Page\PageRepository',
            'Bond\Repositories\PhotoGallery\PhotoGalleryRepository',
            'Bond\Repositories\Tag\TagRepository'
        );
    }
}
