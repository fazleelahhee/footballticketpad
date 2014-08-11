@extends(Template::name('frontend.%s._layout.layout'))
@section('style')
{{ HTML::style('ckeditor/contents.css') }}
@stop
@section('content')

<!-- ######################## Header ######################## -->
<header>
    <div class="row">
        <article>
            <div class="twelve columns">
                <h1>{{ e($node->title) }}</h1>
                @yield('partial/breadcrumbs', Breadcrumbs::render('page.show', $node))
            </div>
        </article>
    </div>
</header>
<!-- ######################## Section ######################## -->
<section class="section_light">
    <div class="row">
        {{ Template::doShortCode($node->content) }}
    </div>
</section>
@stop
