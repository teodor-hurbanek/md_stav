@extends('layouts.master')

@section('content')
<section class="contact-intro">
    <div class="containerCustom">
        <div class="contact-wrapper">
            <div class="contact-rectangle">
                <h1>Kontakt</h1>
                <h2>Realizácia stavebných projektov,<br>dopravy a búracích prác</h2>
                <a class="contact-us-btn shadow" href="{{ url('/services') }}">Služby</a>
            </div>
            
            <div class="contact-wrapper-small">
                <div class="contact-details">
                    <div>
                        <div class="contact-icons">
                            <div><img class="menu-icons filter-grey" src="/img/svg/phone-call.svg" alt="Residence icon"></div>
                            <h3>Kontakt</h3>
                        </div>
                        <a href="tel:0948431191">0948 431 191</a>
                        <a href="tel:0940116398">0940 116 398</a>
                        <a href="mailto:martin158159@gmail.com">martin158159@gmail.com</a>
                    </div>
                    <div>
                        <div class="contact-icons">
                            <div><img class="menu-icons filter-grey" src="/img/svg/document.svg" alt="Residence icon"></div>
                            <h3>Fakturačné údaje</h3>
                        </div>
                        <p><span>IČO: </span>50800612</p>
                        <p><span>IČ DPH: </span>SK1122772629</p>
                    </div>
                </div>
    
                <div class="residence">
                    <div class="contact-icons">
                        <div><img class="menu-icons filter-grey" src="/img/svg/building.svg" alt="Residence icon"></div>
                        <h3>Sídlo</h3>
                    </div>
                    <p>Na rybníčkoch 1731/13A</p>
                    <p>908 77 Borský Mikuláš</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection