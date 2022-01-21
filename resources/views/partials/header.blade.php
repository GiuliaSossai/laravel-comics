<header>
    <div class="container clearfix">
        <div class="header-left">
            <a href="#"><img src="{{ asset('img/dc-logo.png')}}" alt="dc logo"></a> 
        </div>
        <div class="header-right">
            <ul>
                @foreach (config('header-nav') as $item)
               <li><a href="">{{$item}}</a></li>
               @endforeach
            </ul>
        </div>
    </div>
</header>