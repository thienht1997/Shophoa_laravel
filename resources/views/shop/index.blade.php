@extends('layouts.shop_master')

@section('title')
Home
@endsection
@section('content')

<div class="clearfix"></div>
<div class="hom-slider">
   <div class="container">
      <div id="sequence">
         <div class="sequence-prev"><i class="fa fa-angle-left"></i></div>
         <div class="sequence-next"><i class="fa fa-angle-right"></i></div>
         <ul class="sequence-canvas">
            <li class="animate-in">
               <div class="flat-caption caption1 formLeft delay300 text-center"><span class="suphead">Flower shop</span>
               </div>
               <div class="flat-caption caption2 formLeft delay400 text-center">
                  <h1>Buy your flower</h1>
               </div>
               <div class="flat-caption caption3 formLeft delay500 text-center">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br>Lorem Ipsum is simply
                     dummy text of the printing and typesetting</p>
               </div>
            <div class="flat-button caption4 formLeft delay600 text-center"><a class="more" href="{{route('shop.index', 'all')}}">More Details</a>
               </div>
               <div class="flat-image formBottom delay200" data-duration="5" data-bottom="true"><img
                     src="images/slider-image-01.png" alt=""></div>
            </li>
            <li>
               <div class="flat-caption caption2 formLeft delay400">
                  <h1>Flower shop</h1>
               </div>
               <div class="flat-caption caption3 formLeft delay500">
                  <h2>Etiam velit purus, luctus vitae velit sedauctor<br>egestas diam, Etiam velit purus.</h2>
               </div>
               <div class="flat-button caption5 formLeft delay600"><a class="more" href="{{route('shop.index', 'all')}}">More Details</a></div>
               <div class="flat-image formBottom delay200" data-bottom="true"><img src="images/slider-image-02.png"
                     alt=""></div>
            </li>
            <li>
               <div class="flat-caption caption2 formLeft delay400 text-center">
                  <h1>Flower shop</h1>
               </div>
               <div class="flat-caption caption3 formLeft delay500 text-center">
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br>Lorem Ipsum is
                     simply dummy text of the printing and typesetting</p>
               </div>
               <div class="flat-button caption4 formLeft delay600 text-center"><a class="more" href="{{route('shop.index', 'all')}}">More Details</a>
               </div>
               <div class="flat-image formBottom delay200" data-bottom="true"><img src="images/slider-image-03.png"
                     alt=""></div>
            </li>
         </ul>
      </div>
   </div>
   <div class="promotion-banner">
      <div class="container">
         <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-4">
            <a href="{{route('shop.index', 3)}}"><div class="promo-box"><img src="images/promotion-01.png" alt=""></div></a>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4">
            <a href="{{route('shop.index', 2)}}"><div class="promo-box"><img src="images/promotion-02.png" alt=""></div></a>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-4">
            <a href="{{route('shop.index','all')}}"><div class="promo-box"><img src="images/promotion-03.png" style="height: 112.5px" alt=""></div></a>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="clearfix"></div>
<div class="container_fullwidth">
   <div class="container">
      <div class="hot-products">
         <h3 class="title"><strong>Sản phẩm |</strong> {{$category_name}}</h3>
         <div class="control"><a id="prev_hot" class="prev" href="#">&lt;</a><a id="next_hot" class="next"
               href="#">&gt;</a></div>
         <ul id="hot">
            <li>
               <div class="row">
                  @foreach($products as $key => $product)
                  <div class="col-md-3 col-sm-6">
                     <div class="products">
                        <div class="offer">- %20</div>
                        <div class="thumbnail"><a href="{{route('shop.details',  $product->id)}}"><img width="183"
                                 height="80" src="{{ asset('layouts/img/'.$product->image) }}" alt="Product Name"></a>
                        </div>
                        <div class="productname">{{$product->name}}</div>
                        <h4 class="price">{{number_format($product->price,0 ,',','.')}}đ</h4>
                        <div class="button_group"><a href="{{route('cart.add', $product->id)}}">
                             
                                   
                                 
                           <button class="button add-cart" type="button"> <span class="glyphicon glyphicon-shopping-cart"></span></button></a>
                           <button class="button compare" type="button"><i class="fa fa-exchange"></i></button>
                           <button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                     </div>
                  </div>
                  @endforeach
               </div>
            </li>
            <li>
               <div class="row">
                  @foreach($products_1 as $key => $product)
                  <div class="col-md-3 col-sm-6">
                     <div class="products">
                        <div class="offer">- %20</div>
                        <div class="thumbnail"><a href="{{route('shop.details',  $product->id)}}"><img width="183"
                                 height="80" src="{{ asset('layouts/img/'.$product->image) }}" alt="Product Name"></a>
                        </div>
                        <div class="productname">{{$product->name}}</div>
                        <h4 class="price">{{number_format($product->price,0 ,',','.')}}đ</h4>
                        <div class="button_group"> <a href="{{route('cart.add', $product->id)}}">
                           <button class="button add-cart" type="button"><span class="glyphicon glyphicon-shopping-cart"></span></button></a>
                           <button class="button compare" type="button"><i class="fa fa-exchange"></i></button>
                           <button class="button wishlist" type="button"><i class="fa fa-heart-o"></i></button></div>
                              
                     </div>
                  </div>
                  @endforeach
            </li>
         </ul>
      </div>
      <div class="clearfix"></div>
      <div class="clearfix"></div>
   </div>
</div>
<div class="clearfix"></div>

@endsection