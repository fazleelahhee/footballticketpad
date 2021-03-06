@extends(Template::name('frontend.%s._layout.layout'))

@section('style')
{{ HTML::style('ckeditor/contents.css') }}
{{ HTML::style('assets/css/style.css') }}
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg12">
            <h1 class="page-header">
                <small>{{ $news->title }}</small>
            </h1>
            @yield('partial/breadcrumbs', Breadcrumbs::render('news.show', $news))
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <p><i class="icon-time"></i> Posted on {{ $news->created_at }} by <a href="www.bondmedia.co.uk">Bond Media</a>
            </p>
            {{ $news->content }}
        </div>
    </div>
</div>
@stop