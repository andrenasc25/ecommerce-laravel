@extends('layouts.userLayout')
@section('content')
    @include('includes.header')
    <section class="main-menu-ctn">
        <div class="main-menu">
            <div class="main-menu-top">
                <div class="main-menu-categories">
                    <span>Categorias</span>
                </div>
                <div class="main-menu-options">
                    <div class="main-menu-options-links">
                        <a href="{{asset('search?filterByCategory[]=smartphone')}}">Smartphones</a>
                        <a href="{{asset('search?filterByCategory[]=tv')}}">Tv's</a>
                        <a href="{{asset('search?filterByCategory[]=notebook')}}">Notebooks</a>
                        <a href="{{asset('search?filterByCategory[]=tablet')}}">Tablets</a>
                        <a href="{{asset('search?filterByCategory[]=roteador')}}">Roteadores</a>
                        <a href="{{asset('search?filterByCategory[]=hd')}}">HD's</a>
                    </div>
                    <div class="main-menu-options-contact">
                        <span>Telefone:</span>
                        <span>(91) 9999-8888</span>
                    </div>
                </div>
            </div>
            <div class="main-menu-wrapper">
                <div class="main-menu-btn">
                    <a href="{{asset('search?filterByCategory[]=smartphone')}}"></a>
                    <i class="fas fa-mobile-alt"></i>
                    <span>Smartphones</span>
                </div>
                <div class="main-menu-btn">
                    <a href="{{asset('search?filterByCategory[]=tv')}}"></a>
                    <i class="fas fa-tv"></i>
                    <span>Tv's</span>
                </div>
                <div class="main-menu-btn">
                    <a href="{{asset('search?filterByCategory[]=notebook')}}"></a>
                    <i class="fas fa-laptop"></i>
                    <span>Notebooks</span>
                </div>
                <div class="main-menu-btn">
                    <a href="{{asset('search?filterByCategory[]=tablet')}}"></a>
                    <i class="fas fa-tablet-alt"></i>
                    <span>Tablets</span>
                </div>
                <div class="main-menu-btn">
                    <a href="{{asset('search?filterByCategory[]=roteador')}}"></a>
                    <i class="fas fa-wifi"></i>
                    <span>Roteadores</span>
                </div>
                <div class="main-menu-btn">
                    <a href="{{asset('search?filterByCategory[]=hd')}}"></a>
                    <i class="far fa-hdd"></i>
                    <span>HD's</span>
                </div>
                <div class="main-menu-btn">
                    <a href="{{asset('search?filterByCategory[]=processador')}}"></a>
                    <i class="fas fa-microchip"></i>
                    <span>Processadores</span>
                </div>
                <div class="main-menu-btn">
                    <a href="{{asset('search?filterByCategory[]=papelaria')}}"></a>
                    <i class="fas fa-paperclip"></i>
                    <span>Papelaria</span>
                </div>
                <div class="main-menu-btn">
                    <a href="{{asset('search?filterByCategory[]=sonorizacao')}}"></a>
                    <i class="fas fa-headphones-alt"></i>
                    <span>Sonorização</span>
                </div>
            </div>
            <div class="main-menu-carousel">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner" style="height:490px;">
                        {{$n = 0}}
                        @foreach($gallery as $image)
                            @if($n == 0)
                                <div class="carousel-item active main-carousel-item">
                            @else
                                <div class="carousel-item main-carousel-item">
                            @endif
                                <div class="main-carousel-info">
                                    <span>{{$image->carousel_image_bg_text}}</span>
                                    <span>{{$image->carousel_image_sm_text}}</span>
                                    <button>{{$image->carousel_image_btn_text}}</button>
                                </div>
                                <div class="main-carousel-shadow"></div>
                                <img src="{{asset($image->carousel_image_url)}}" class="d-block w-100" alt="...">
                            </div>
                            {{$n++}}
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section class="main-banner-ctn">
        <div class="main-banner">
            <img src="{{asset($banners->banner_image_url)}}" style="position:absolute;width:100%;height:100%;">
            <div class="main-banner-info">
                @if($banners->banner_is_promotion == 1)
                    <span>Oferta Especial!</span>
                @else
                    <span style="display:none;"></span>
                @endif
                <span>{{$banners->banner_bg_text}}</span>
                <span>{{$banners->banner_sm_text}}</span>
            </div>
        </div>
    </section>
    <section class="main-categories-ctn">
        <div class="main-categories">
            <div class="main-categories-header">
                <span>Categorias</span>
            </div>
            <div class="main-categories-body">
                <div class="main-category">
                    <a href="{{asset('search?filterByCategory[]=tv')}}"></a>
                    <i class="fas fa-tv"></i>
                    <span>Tv's</span>
                </div>
                <div class="main-category">
                    <a href="{{asset('search?filterByCategory[]=smartphone')}}"></a>
                    <i class="fas fa-mobile-alt"></i>
                    <span>Smartphones</span>
                </div>
                <div class="main-category">
                    <a href="{{asset('search?filterByCategory[]=notebook')}}"></a>
                    <i class="fas fa-laptop"></i>
                    <span>Notebooks</span>
                </div>
                <div class="main-category">
                    <a href="{{asset('search?filterByCategory[]=tablet')}}"></a>
                    <i class="fas fa-tablet-alt"></i>
                    <span>Tablets</span>
                </div>
                <div class="main-category">
                    <a href="{{asset('search?filterByCategory[]=roteador')}}"></a>
                    <i class="fas fa-wifi"></i>
                    <span>Roteadores</span>
                </div>
                <div class="main-category">
                    <a href="{{asset('search?filterByCategory[]=hd')}}"></a>
                    <i class="far fa-hdd"></i>
                    <span>HD's</span>
                </div>
                <div class="main-category">
                    <a href="{{asset('search?filterByCategory[]=processador')}}"></a>
                    <i class="fas fa-microchip"></i>
                    <span>Processadores</span>
                </div>
                <div class="main-category">
                    <a href="{{asset('search?filterByCategory[]=papelaria')}}"></a>
                    <i class="fas fa-paperclip"></i>
                    <span>Papelaria</span>
                </div>
                <div class="main-category">
                    <a href="{{asset('search?filterByCategory[]=sonorizacao')}}"></a>
                    <i class="fas fa-headphones-alt"></i>
                    <span>Sonorização</span>
                </div>
                <div class="main-category">
                    <a href="{{asset('search?filterByCategory[]=teclado')}}"></a>
                    <i class="far fa-keyboard"></i>
                    <span>Teclados</span>
                </div>
            </div>
        </div>
    </section>
    @include('includes.offers')
    <script>
        //Set the names of the offer products to a shorter version
        var productName = document.getElementsByClassName('product-name');
        var size = productName.length;
        for(var i=0; i<size; i++){
            var substring = productName[i].textContent.substring(0, 40);
            productName[i].innerHTML = substring + '...';
        }

        //Splide
        new Splide( '.splide', {
            type   : 'loop',
            perPage: 5,
            perMove: 1,
        } ).mount();

    </script>
    @include('includes.facilities')
    @include('includes.footer')
    @include('includes.copyright')
@endsection