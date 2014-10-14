
<div class="panel">
    <span class="smallfooter-text">
        Latest News
    </span>

    <ul class="latestnews">

        @foreach($latestNews as $news)
        <li>
         <span class="date">
            <span class="day">{{ date('d', strtotime($news->created_at) )}}</span>
            <span class="month">{{ date('M', strtotime($news->created_at) )}}</span>
        </span>

            <a href="{{ URL::route('dashboard.news.show', array('slug'=>$news->slug)) }}"><h4>{{$news->title}}</h4></a>
        </li>
        @endforeach
    </ul>

</div>