<?php

use Bond\Repositories\PhotoGallery\PhotoGalleryRepository as PhotoGallery;

class PhotoGalleryController extends BaseController {

    protected $photoGallery;

    public function __construct(PhotoGallery $photoGallery) {

        $this->photoGallery = $photoGallery;
    }

    /**
     * Display photo gallery
     * @param $id
     * @return \Illuminate\View\View
     */
    public function show($id) {

        $photo_gallery = $this->photoGallery->find($id);
        return View::make(Template::name('frontend.%s.photo_gallery.show'), compact('photo_gallery'));
    }
}
