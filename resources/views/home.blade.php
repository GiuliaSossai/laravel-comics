@extends('layouts.mainlayout')

@section('content')
    
    <main>
      <div class="jumbotron"></div>

      <div class="container">
         <button class="big-btn">current series</button>
         <div class="main-cards">
            <div class="card-box">
                <!-- <img :src="card.thumb" :alt="card.series">
                
                <h5></h5> -->
            </div>
         </div>  
      </div>

      <button class="btn">load more</button>
   </main>
@endsection

@section('bluebar')
    <section>
        <div class="container">
            <div class="item">
                <div class="little-img">
                    <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="DC">
                </div>
            <div class="img-text">digital comics</div>
        </div>

        <div class="item">
          <div class="little-img">
             <img src="{{ asset('img/buy-comics-merchandise.png')}}" alt="merchandise">
          </div>
          <div class="img-text">dc merchandise</div>
        </div>

        <div class="item">
          <div class="little-img">
             <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="subscription">
          </div>
          <div class="img-text">subscription</div>
        </div>

        <div class="item">
          <div class="little-img">
             <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="shop locator">
          </div>
          <div class="img-text">comic shop locator</div>
        </div>

        <div class="item">
          <div class="little-img">
             <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="power visa">
          </div>
          <div class="img-text">dc power visa</div>
        </div>
      </div>
   </section>

@endsection