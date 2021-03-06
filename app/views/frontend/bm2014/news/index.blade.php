@extends(Template::name('frontend.%s._layout.layout'))
@section('content')


<!---------sidebar------------>
<section class="main">

    <div class="row">
        @include(Template::name('frontend.%s.sidebars.side1'))
    </div>
</section>
<!---------sidebar------------>


<section class="banner-home">


    <h1 class="page-header">News
    </h1>

    <img class="inner-banner" src="{{ Assets::Path('images/bannersize.jpg') }}" alt="test" />

    <span class="ftp-line">
    	<span class="greenline"></span>
        <span class="yellowline"></span>
        <span class="pinkline"></span>
        <span class="blueline"></span>
    </span>


</section>




<div class="row">




<div class="container site-content">


        <div class="row">
            @foreach( $news as $v )


            <div class="columns twelve">
                <div class="columns twelve nopadding featuredimg-news">
                    <span datetime="{{ $v->created_at }}" class="label label-default label-arrow label-arrow-left time">Bond</span>
                    <a href="{{ URL::route('dashboard.news.show', array('id'=>$v->id, 'slug'=>$v->slug)) }}"><img class="img-square center-block radius" src="{{ Assets::Path('images/vangaal.jpg') }}" alt="{{ $v->title }}" /></a>
                </div>
                <div class="columns twelve nopadding">

                    <a href="{{ URL::route('dashboard.news.show', array('id'=>$v->id, 'slug'=>$v->slug)) }}">
                        <h4 class="blogtitle">{{ $v->title }}</h4>

                    </a>

                    <p>{{{ mb_substr(strip_tags($v->content),0,2000) }}}</p>
                </div>
                <div style="clear: both"></div>
                    <p>
                        <a href="{{ URL::route('dashboard.news.show', array('id'=>$v->id, 'slug'=>$v->slug)) }}" class="btn pinkbtn pull-right smallbtn">Read More</a>
                    </p>

                <br/><br/><br/>

              <span class="ftp-line">
                    <span class="greenline"></span>
                    <span class="yellowline"></span>
                    <span class="pinkline"></span>
                    <span class="blueline"></span>
                </span>

            </div>

             @endforeach
        </div>



    <div class="pull-left">
        <ul class="pagination">
            {{ $news->links() }}
        </ul>
    </div>


</div>




</div>





@stop

@section('script')
{{ HTML::script('assets/js/moment-with-langs.min.js') }}
<script type="text/javascript">
    moment().format();
    moment.lang('en');

    jQuery(document).ready(function ($) {
        var now = moment();
        $('.time').each(function (i, e) {
            var time = moment($(e).attr('datetime'));
            $(e).text(time.from(now));

        });
    });
</script>
@stop



