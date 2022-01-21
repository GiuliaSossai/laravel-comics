@extends('layouts.mainlayout')

@section('content')
    <main>
        <div class="jumbotron"></div>

        <div class="container">
            <button class="big-btn">current series</button>
            <div class="main-cards">
                @foreach (config('comics') as $comic)
                <div class="card-box">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                    
                    <h5>{{$comic['series']}}</h5>
                </div>
                @endforeach
            </div>  
        </div>

        <button>load more</button>
        <!-- <button class="btn">load more</button> -->
   </main>
@endsection

<!-- @section('bluebar')
    <section>
        <div class="container">
            @foreach (config('bluebar') as $item)
            <div class="item">
                <div class="little-img">
                    <img src="{{$item['img']}}" alt="{{ $item['alt']}}">
                </div>
                <div class="img-text">{{ $item['text']}}</div>
            </div>
            @endforeach
        </div>
   </section>

@endsection -->