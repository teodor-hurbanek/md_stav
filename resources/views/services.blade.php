@extends('layouts.master')

@section('content')
<section class="services-intro">
    <article></article>

    <div class="containerCustom">
        <div class="services-rectangle">
            <h1>Z nápadu k<br>REALIZÁCII</h1>
            <h2>Realizácia stavebných projektov,<br>dopravy a búracích prác</h2>
            <a class="contact-us-btn shadow" href="{{ url('/kontakt') }}">Kontaktovať</a>
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
                <a href="/sluzby/{{ $service->slug }}" class="services-card shadow">
                    <div class="description">
                        <h3>{{ $service->title }}</h3>
                        <p>{{ $service->description }}</p>
                    </div>
                    <div class="services-card-img"><img src="{{ $service->images[0]->filePath }}" alt="{{ $service->title }} image"></div>
                    <div class="yellow-overlay"></div>
                </a>
            @endforeach
        </div>
    </div>
</section>
@endsection