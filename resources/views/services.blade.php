@extends('layouts.master')

@section('content')
<section class="services-intro">
    <article></article>

    <div class="containerCustom">
        <div class="services-rectangle">
            <h1>Z nápadu k<br>REALIZÁCII</h1>
            <h2>Realizácia stavebných projektov,<br>dopravy a búracích prác</h2>
            <a class="contact-us-btn shadow" href="{{ url('/contact') }}">Kontaktovať</a>
        </div>
    </div>
</section>

<section class="services-description">
    <div class="containerCustom">
        <p>
            Stavebná firma <span>M&D STAV</span> Vám ponúka široké spektrum stavebných služieb na profesionálnej úrovni.
            Komplexné poradenstvo pri realizácií stavebných služieb, búracích prác a dopravy.
            Pretvárame Vaše predstavy do reality našou odpbornou prácou.
        </p> 
    </div>
</section>

<section class="services">
    <div class="containerCustom">
        <div class="services-wrapper">
            @foreach ($services as $service)    
                <a href="{{ url('services/'.$service->slug) }}" class="services-card shadow">
                    <div class="description">
                        <h3>{{ $service->title }}</h3>
                        <p>{{ $service->description }}</p>
                    </div>
                    @foreach ($service->images as $image)
                            @if ($service->slug != 'stavebne-prace')
                                @if ($loop->index == 1)
                                    <div class="services-card-img"><img src="{{ $image->filePath }}" alt="{{ $service->title }} image"></div>
                                    @break
                                @endif
                            @else
                                @if ($loop->index == 2)
                                    <div class="services-card-img"><img src="{{ $image->filePath }}" alt="{{ $service->title }} image"></div>
                                    @break
                                @endif
                            @endif
                        @endforeach
                    <div class="yellow-overlay"></div>
                </a>
            @endforeach
        </div>
    </div>
</section>
@endsection