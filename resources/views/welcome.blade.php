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
                <a href="#" class="welcome-card shadow">
                    <div class="welcome-card-img"><img src="/img/zemne_vykopove_prace/97ded3ee-f412-47a9-9954-3998bf256cf9.JPG" alt="Service image"></div>
                    <div class="welcome-card-btn">
                        <p>Realizacie bazenov na kluc</p>
                        <div class="welcome-card-icon"><img src="/img/svg/angle-right.svg" class="filter-white" alt="Right angle icon"></div>
                    </div>
                    <div class="yellow-overlay"></div>
                </a>

                <a href="#" class="welcome-card shadow">
                    <div class="welcome-card-img"><img src="/img/zemne_vykopove_prace/97ded3ee-f412-47a9-9954-3998bf256cf9.JPG" alt="Service image"></div>
                    <div class="welcome-card-btn">
                        <p>Realizacie bazenov na kluc</p>
                        <div class="welcome-card-icon"><img src="/img/svg/angle-right.svg" class="filter-white" alt="Right angle icon"></div>
                    </div>
                    <div class="yellow-overlay"></div>
                </a>

                <a href="#" class="welcome-card shadow">
                    <div class="welcome-card-img"><img src="/img/zemne_vykopove_prace/97ded3ee-f412-47a9-9954-3998bf256cf9.JPG" alt="Service image"></div>
                    <div class="welcome-card-btn">
                        <p>Realizacie bazenov na kluc</p>
                        <div class="welcome-card-icon"><img src="/img/svg/angle-right.svg" class="filter-white" alt="Right angle icon"></div>
                    </div>
                    <div class="yellow-overlay"></div>
                </a>

                <a href="#" class="welcome-card shadow">
                    <div class="welcome-card-img"><img src="/img/zemne_vykopove_prace/97ded3ee-f412-47a9-9954-3998bf256cf9.JPG" alt="Service image"></div>
                    <div class="welcome-card-btn">
                        <p>Realizacie bazenov na kluc</p>
                        <div class="welcome-card-icon"><img src="/img/svg/angle-right.svg" class="filter-white" alt="Right angle icon"></div>
                    </div>
                    <div class="yellow-overlay"></div>
                </a>
            </div>
        </div>
    </section>
@endsection