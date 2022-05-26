@extends('layouts.master')

@section('content')
    <section class="welcome-intro">
        <article></article>

        <div class="containerCustom">
            <div class="rectangle">
                <h1>Z nápadu k<br>REALIZÁCII</h1>
                <h2>Realizácia stavebných projektov,<br>dopravy a búracích prác</h2>
                <a class="contact-us-btn shadow" href="{{ url('/kontakt') }}">Kontaktovať</a>
            </div>
        </div>
    </section>

    <section class="welcome-description">
        <div class="containerCustom">
            <p>
                Stavebná firma <span>M&D STAV</span> Vám ponúka široké spektrum stavebných služieb na profesionálnej úrovni.
                Komplexné poradenstvo pri realizácií stavebných služieb, búracích prác a dopravy.
                Pretvárame Vaše predstavy do reality našou odpbornou prácou.
            </p> 
        </div>
    </section>
    
    <section class="welcome-services">
        <div class="containerCustom">
            <div class="welcome-row">
                @foreach ($services as $service)
                    <a href="/sluzby/{{ $service->slug }}" class="welcome-card shadow">
                        <div class="welcome-card-img"><img src="{{ $service->images[0]->filePath }}" alt="{{ $service->title }} image"></div>
                        <div class="welcome-card-btn">
                            <p>{{ $service->title }}</p>
                            <div class="welcome-card-icon"><img src="/img/svg/angle-right.svg" class="filter-white" alt="Right angle icon"></div>
                        </div>
                        <div class="yellow-overlay"></div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection