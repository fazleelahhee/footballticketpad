@extends(Template::name('frontend.%s._layout.layout'))
@section('style')
{{ HTML::style('ckeditor/contents.css') }}
@stop
@section('content')

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><small>{{ e($node->title) }}</small></h1>
            @yield('partial/breadcrumbs', Breadcrumbs::render('page.show', $node))
        </div>
    </div>
    <h2>Two Column Page Template </h2>
    <div class="row">
        <div class="col-lg-12">
            <p>{{ $node->content }}</p>
        </div>
    </div>
</div>

@include(Template::name('frontend.%s.sidebars.side1'))
@stop
