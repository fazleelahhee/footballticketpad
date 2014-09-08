<section class="banner-home">
    <div class="row">
        <h1 class="page-header">{{ e($node->title) }}</h1>
    </div>
    <img class="inner-banner" src="{{ Assets::Path('images/account.jpg') }}" alt="test" />
    <span class="ftp-line">
    	<span class="greenline"></span>
        <span class="yellowline"></span>
        <span class="pinkline"></span>
        <span class="blueline"></span>
    </span>
    <div class="second-navs">
        <div class="row">
            <ul>
                <li class="{{$tabs=='listing'?'active':''}}"> <a href="{{url('account/listing')}}">Listing</a>  </li>
                <li class="{{$tabs=='purchases'?'active':''}}"> <a href="{{url('account/purchases')}}">Purchases</a> </li>
                <li class="{{$tabs=='sales'?'active':''}}"> <a href="{{url('account/sales')}}">Sales</a>  </li>
                <li class="{{$tabs=='account-information'?'active':''}}"> <a href="{{url('account/account-information')}}">Account Information</a>  </li>
                <li class="{{$tabs=='addresses'?'active':''}}"> <a href="{{url('account/addresses')}}">Addresses</a>  </li>
            </ul>
        </div>
    </div>
 </section>