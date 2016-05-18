@extends('layouts.app')
@section('content')

    <div  class="container grids-section" >
        <h2>校园</h2>
        <div class="row text-center">
            <div class="col-xs-12 col-md-4">
                <a href="" class="grid-item">
                    <img src="{{ asset('img/photo1.jpg') }}" alt="" />
                    <!-- <div class="text-wrap">
                        <h3>标题</h3>
                        <p>小标题</p>
                    </div> -->
                </a>
            </div>
            <div class="col-xs-12 col-md-4">
                <a href="" class="grid-item">
                    <img src="{{ asset('img/photo1.jpg') }}" alt="" />
                    <!-- <div class="text-wrap">
                        <h3>标题</h3>
                        <p>小标题</p>
                    </div> -->
                </a>
            </div>
            <div class="col-xs-12 col-md-4">
                <a href="" class="grid-item">
                    <img src="{{ asset('img/photo1.jpg') }}" alt="" />
                    <!-- <div class="text-wrap">
                        <h3>标题</h3>
                        <p>小标题</p>
                    </div> -->
                </a>
            </div>
        </div>
    </div>


    <div  class="container grids-section" >
        <h2>样板房</h2>
        <div class="row text-center">
            @foreach($krpano_photos as $krpano_photo)

                <div class="col-xs-12 col-md-4">
                    <a href="{{ url('krpano',$krpano_photo->id) }}" target="__blank" class="grid-item">
                        <img src="{{ asset($krpano_photo->img_path) }}" alt="" />
                    </a>
                </div>

            @endforeach
        </div>
    </div>


    <div  class="container grids-section" >
        <h2>城市风光</h2>
        <div class="row text-center">
            <div class="col-xs-12 col-md-4">
                <a href="" class="grid-item">
                    <img src="{{ asset('img/city1.png') }}" alt="" />
                    <!-- <div class="text-wrap">
                        <h3>标题</h3>
                        <p>小标题</p>
                    </div> -->
                </a>
            </div>
            <div class="col-xs-12 col-md-4">
                <a href="" class="grid-item">
                    <img src="{{ asset('img/city1.png') }}" alt="" />
                    <!-- <div class="text-wrap">
                        <h3>标题</h3>
                        <p>小标题</p>
                    </div> -->
                </a>
            </div>
            <div class="col-xs-12 col-md-4">
                <a href="" class="grid-item">
                    <img src="{{ asset('img/city1.png') }}" alt="" />
                    <!-- <div class="text-wrap">
                        <h3>标题</h3>
                        <p>小标题</p>
                    </div> -->
                </a>
            </div>
        </div>
    </div>
@stop