
@if(!empty($faqs))
<div id="accordion">
    @foreach($faqs as $faq)
    <h4 class="accordion-toggle">
        {{ $faq->title }}
        <span class="toggle-arrow"></span>
    </h4>
    <div class="accordion-content">
        {{ $faq->content }}
    </div>
    @endforeach
</div>
@endif