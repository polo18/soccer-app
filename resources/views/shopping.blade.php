@extends('layouts.app')

@section('content')

<div class="hero overlay" style="background-image: url('images/bg_3.jpg');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 mx-auto text-center">
            <h1 class="text-white">Boutique</h1>
            <p>{{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta,
                 molestias repudiandae pariatur.--}}</p>
          </div>
        </div>
      </div>
    </div>

    
    
    <div class="container site-section">
      <div class="row">
        <div class="col-6 title-section">
          <h2 class="heading">Boutique</h2>
        </div>
      </div>
      <div id="shoppnig" class="row">
        <div class="col-md-4">
            <div class="card mt-3">
                <div class="product-1 align-items-center p-2 text-center"> 
                    <img src="images/received_762623031137022.jpeg" class="rounded" height="160px" width="160">
                    <h5>GARNIER</h5>
                    <div class="mt-3 info"> <span class="text1 d-block">Garnier Pure Active Miceller</span> <span class="text1">cleansing water. 125 ml </span> </div>
                    <div class=" cost mt-3 text-dark"> <span>$60</span>
                        <div class=" star mt-3 align-items-center"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                    </div>
                </div>
                <div class="p-3 bg-danger text-center text-white mt-3 cursor"> 
                    <span class="text-uppercase">Acheter</span> 
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mt-3">
                <div class="product-1 align-items-center p-2 text-center"> 
                    <img src="images/received_764034387766099.jpeg" class="rounded" height="160px" width="160">
                    <h5>GARNIER</h5>
                    <div class="mt-3 info"> <span class="text1 d-block">Garnier Pure Active Miceller</span> <span class="text1">cleansing water. 125 ml </span> </div>
                    <div class=" watchcost mt-3 text-dark"> <span>$60</span>
                        <div class=" star mt-3 align-items-center"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                    </div>
                </div>
                <div class="watch p-3 text-center text-white mt-3 cursor"> 
                    <span class="text-uppercase ">Acheter</span> 
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mt-3">
                <div class="product-1 align-items-center p-2 text-center">
                     <img src="images/received_268333960857021.jpeg" class="rounded" height="160px" width="160">
                    <h5>GARNIER</h5>
                    <div class="mt-3 info"> <span class="text1 d-block">Garnier Pure Active Miceller</span> <span class="text1">cleansing water. 125 ml </span> </div>
                    <div class=" tshirtcost mt-3 text-dark"> <span>$60</span>
                        <div class=" star mt-3 align-items-center"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                    </div>
                </div>
                <div class=" tshirt p-3 text-center text-white mt-3 cursor"> <span class="text-uppercase">Acheter</span> </div>
            </div>
        </div>
    
        <div class="col-md-4">
            <div class="card mt-3">
                <div class="product-1 align-items-center p-2 text-center"> 
                    <img src="images/received_353551899168091.jpeg" class="rounded" height="160px" width="160">
                    <h5>GARNIER</h5>
                    <div class="mt-3 info"> <span class="text1 d-block">Garnier Pure Active Miceller</span> <span class="text1">cleansing water. 125 ml </span> </div>
                    <div class=" cost mt-3 text-dark"> <span>$60</span>
                        <div class=" star mt-3 align-items-center"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                    </div>
                </div>
                <div class="p-3 bg-danger text-center text-white mt-3 cursor"> <span class="text-uppercase">Acheter</span> </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mt-3">
                <div class="product-1 align-items-center p-2 text-center"> 
                    <img src="images/received_828788837660167.jpeg" class="rounded" height="160px" width="160">
                    <h5>GARNIER</h5>
                    <div class="mt-3 info"> <span class="text1 d-block">Garnier Pure Active Miceller</span> <span class="text1">cleansing water. 125 ml </span> </div>
                    <div class=" watchcost mt-3 text-dark"> <span>$60</span>
                        <div class=" star mt-3 align-items-center"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                    </div>
                </div>
                <div class="watch p-3 text-center text-white mt-3 cursor"> <span class="text-uppercase ">Acheter</span> </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mt-3">
                <div class="product-1 align-items-center p-2 text-center"> 
                    <img src="images/received_5036392049720225.jpeg" class="rounded" height="160px" width="160">
                    <h5>GARNIER</h5>
                    <div class="mt-3 info"> <span class="text1 d-block">Garnier Pure Active Miceller</span> <span class="text1">cleansing water. 125 ml </span> </div>
                    <div class=" tshirtcost mt-3 text-dark"> <span>$60</span>
                        <div class=" star mt-3 align-items-center"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                    </div>
                </div>
                <div class=" tshirt p-3 text-center text-white mt-3 cursor"> <span class="text-uppercase">Acheter</span> </div>
            </div>
        </div>
      </div>

      <div class="row justify-content-center mt-4">
        <div class="col-lg-7 text-center">
          <div class="custom-pagination">
            <a href="#">1</a>
            <span>2</span>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
          </div>
        </div>
      </div>
    </div>

@endsection