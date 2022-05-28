@extends('layouts.master')

@section('content')
    <section class="welcome-intro">
        <article></article>

        <div class="containerCustom">
            <div class="rectangle">
                <h1>Z nápadu k<br>REALIZÁCII</h1>
                <h2>Realizácia stavebných projektov,<br>dopravy a búracích prác</h2>
                <a class="contact-us-btn shadow" href="{{ url('/contact') }}">Kontaktovať</a>
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
                    <a href="{{ url('services/'.$service->slug) }}" class="welcome-card shadow">
                        @foreach ($service->images as $image)
                            @if ($loop->index == 1)
                                <div class="welcome-card-img" style="background-image: url('{{ $image->filePath }}');"></div>
                            @endif
                        @endforeach
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