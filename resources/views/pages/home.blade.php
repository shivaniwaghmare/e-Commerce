@extends('layouts.master')
@section('content')

<header class="section-heading">
    <h3 class="section-title">Products List</h3>
</header><!-- sect-heading -->
<div class="row">
@foreach($products as $product)
<div class="col-md-3">
        <div href="#" class="card card-product-grid">
        <a href="#" class="img-wrap"> <img src="assets/images/items/{{ $product->image }}"> </a>
        <figcaption class="info-wrap">
            <a href="#" class="title">{{ $product->name }}</a>
            <div class="rating-wrap">
            <ul class="rating-stars">
                <li style="width:80%" class="stars-active"> 
                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                </li>
                <li>
                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 
                </li>
            </ul>
            </div>
            <div class="price mt-1">{{ $product->price }}</div> <!-- price-wrap.// -->
            <!-- Cart -->
            <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{ $product->id }}" name="id">
                <input type="hidden" value="{{ $product->name }}" name="name">
                <input type="hidden" value="{{ $product->price }}" name="price">
                <input type="hidden" value="{{ $product->image }}"  name="image">
                <input type="hidden" value="1" name="quantity">
                <button class="px-4 py-2 text-white bg-blue-800 rounded">Add To Cart</button>
            </form>
        </figcaption>
        </div>
</div> <!-- col.// -->
@endforeach
</div> <!-- row.// -->

@stop