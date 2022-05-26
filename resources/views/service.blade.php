@extends('layouts.master')

@section('content')
    <section class="service-intro">
        <article></article>

        <div class="containerCustom">
            <div class="service-rectangle">
                <h1>Z nápadu k<br>REALIZÁCII</h1>
                <h2>Realizácia stavebných projektov,<br>dopravy a búracích prác</h2>
                <a class="contact-us-btn shadow" href="{{ url('/kontakt') }}">Kontaktovať</a>
            </div>
        </div>
    </section>

    <section class="service-description">
        <div class="containerCustom">
            <p>
                Stavebná firma <span>M&D STAV</span> Vám ponúka široké spektrum stavebných služieb na profesionálnej úrovni.
                Komplexné poradenstvo pri realizácií stavebných služieb, búracích prác a dopravy.
                Pretvárame Vaše predstavy do reality našou odpbornou prácou.
            </p> 
        </div>
    </section>

    <section class="service-gallery">
        <div class="containerCustom">
            <div class="service-row">
                <div class="service-col shadow">
                    <img src="/img/zemne_vykopove_prace/97ded3ee-f412-47a9-9954-3998bf256cf9.JPG" alt="Service image">
                    <div class="yellow-overlay"></div>
                </div>
                <div class="service-col shadow">
                    <img src="/img/zemne_vykopove_prace/97ded3ee-f412-47a9-9954-3998bf256cf9.JPG" alt="Service image">
                    <div class="yellow-overlay"></div>
                </div>
                <div class="service-col shadow">
                    <img src="/img/zemne_vykopove_prace/97ded3ee-f412-47a9-9954-3998bf256cf9.JPG" alt="Service image">
                    <div class="yellow-overlay"></div>
                </div>
                <div class="service-col shadow">
                    <img src="/img/zemne_vykopove_prace/97ded3ee-f412-47a9-9954-3998bf256cf9.JPG" alt="Service image">
                    <div class="yellow-overlay"></div>
                </div>
            </div>
        </div>
    </section>
@endsection