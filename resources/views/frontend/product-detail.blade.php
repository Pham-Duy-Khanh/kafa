@extends('frontend.main')
@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 ftco-animate">
                    <a href="images/menu-2.jpg" class="image-popup"><img src="{{url('upload')}}/{{$product->image}}" class="img-fluid" alt="Colorlib Template"></a>
                </div>
                <div class="col-lg-6 product-details pl-md-5 ftco-animate">

                    <h3>{{$product->name}}</h3>
                    <p>  @if ($product->discount > 0)
                        <div class="pro-price">
                            <del> <span class="old-price">{{ number_format($product->price) }}đ</span></del>
                            <span class="new-price" style="color:white">{{ number_format($product->price - ($product->price * $product->discount) / 100) }}đ</span>

                        </div>
                    @else
                        <div class="pro-price">
                            <span class="new-price" style="color: white">{{ number_format($product->price) }}đ</span>
                        </div>
                        @endif</p>
                    <p>{{$product->desscaption}}</p>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="form-group d-flex">
                                <div class="select-wrap">
                                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                    <select name="" id="" class="form-control">
                                        <option value="">Small</option>
                                        <option value="">Medium</option>
                                        <option value="">Large</option>
                                        <option value="">Extra Large</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="input-group col-md-6 d-flex mb-3">
	             	<span class="input-group-btn mr-2">
	                	<button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
	                   <i class="icon-minus"></i>
	                	</button>
	            		</span>

                            <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
                            <span class="input-group-btn ml-2">
	                	<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
	                     <i class="icon-plus"></i>
	                 </button>
	             	</span>
                        </div>
                    </div>
                    <p><a href="{{route('show-cart')}}" class="btn btn-primary py-3 px-5">Add to Cart</a></p>
                </div>
            </div>
        </div>
    </section>
    @stop()
