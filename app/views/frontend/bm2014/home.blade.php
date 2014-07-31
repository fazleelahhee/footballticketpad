@extends(Template::name('frontend.%s._layout.layout'))

@section('content')
<!-- ######################## Header ######################## -->
<header>
    <h1 class="heading_supersize">BASE 2013</h1>
    <h2 class="welcome_text">The future proof starting point for any website!</h2>
</header>

<!-- ######################## Section ######################## -->
<section class="section_light">
    <div class="row">
        <div class="four columns">
            <h3><span class="dropcap_red lsf-icon-dropcap" title="camera"></span> Photo Community</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc viverra, lacus id interdum ultrices, elit metus semper tellus, vel lacinia libero purus vitae risus.</p>
        </div>
        <div class="four columns">
            <h3><span class="dropcap_black lsf-icon-dropcap" title="cloud"></span> Upload Photos</h3>
            <p> Vivamus tortor tellus, rutrum sit amet mollis vel, imperdiet consectetur orci. Mauris pharetra congue enim, et sagittis lectus congue ut. Cum sociis natoque penatibus.</p>
        </div>
        <div class="four columns">
            <h3><span class="dropcap_black lsf-icon-dropcap" title="video"></span> Video Tutorials</h3>
            <p>Sed vitae nisi leo. Nulla tincidunt, turpis non gravida pharetra, diam sapien posuere massa, non luctus leo mauris at sapien. Donec ut fermentum eros.</p>
        </div>
    </div>
</section>

<!-- ######################## Section ######################## -->
<section  class="section_dark">
     <div class="row">
        <h2>Latest Photos by Our Members</h2>
        <div class="two columns">
            <a href="#" class="th"><img src="{{ Assets::Path('images/thumb1.jpg') }}" width="100" height="100" alt="desc" /></a>
        </div>
        <div class="two columns">
            <a href="#" class="th"><img src="{{ Assets::Path('images/thumb2.jpg') }}" width="100" height="100"  alt="desc" /></a>
        </div>
        <div class="two columns">
            <a href="#" class="th"><img src="{{ Assets::Path('images/thumb3.jpg') }}" width="100" height="100"  alt="desc" /></a>
        </div>
        <div class="two columns">
            <a href="#" class="th"><img src="{{ Assets::Path('images/thumb4.jpg') }}" width="100" height="100"  alt="desc" /></a>
        </div>
        <div class="two columns">
            <a href="#" class="th"><img src="{{ Assets::Path('images/thumb5.jpg') }}" width="100" height="100"  alt="desc" /></a>
        </div>
        <div class="two columns">
            <a href="#" class="th"><img src="{{ Assets::Path('images/thumb6.jpg') }}" width="100" height="100"  alt="desc" /></a>
        </div>
    </div>
</section>
@stop