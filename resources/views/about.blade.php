
@extends('layouts.app')

@section('content')
          <div class="content-middle">
            <div class="content-head__container">
              <div class="content-head__title-wrap">
                <div class="content-head__title-wrap__title bcg-title">О магазине</div>
              </div>
              <div class="content-head__search-block">
                <div class="search-container">
                  <form class="search-container__form">
                    <input type="text" class="search-container__form__input">
                    <button class="search-container__form__btn">search</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="content-main__container">
              <div class="news-block content-text"><img src="img/cover/game-3.jpg" alt="Image" class="alignleft img-news">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                  ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                  ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                </p>
                <p>
                  non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                  ad minim veniam, quis nostrud
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                  ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                  exercitation ullamco laboris nisi ut aliquip
                </p>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                  ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                  ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                  non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                </p>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                  eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim
                  ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                  ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                  non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                </p>
              </div>
            </div>
          </div>
          <div class="content-bottom">
            <div class="line"></div>
            <div class="content-head__container">
              <div class="content-head__title-wrap">
                <div class="content-head__title-wrap__title bcg-title">Посмотрите наши товары</div>
              </div>
            </div>
            <div class="content-main__container">
              <div class="products-columns">
                @foreach($products as $product)
                <div class="products-columns__item">
                <div class="products-columns__item__title-product"><a href="{{ route('home.product', $product->id) }}" class="products-columns__item__title-product__link">{{$product->name}}</a></div>
                <div class="products-columns__item__thumbnail"><a href="{{ route('home.product', $product->id) }}" class="products-columns__item__thumbnail__link"><img src="img/cover/{{$product->image}}" alt="Preview-image" class="products-columns__item__thumbnail__img"></a></div>
                <div class="products-columns__item__description"><span class="products-price">{{$product->price}} руб</span><a href="{{ route('home.product', $product->id) }}" class="btn btn-blue">Купить</a></div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
      @endsection
