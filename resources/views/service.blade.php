@extends('layouts.master')

@section('content')
    <section class="service-intro">
        <article></article>

        <div class="containerCustom">
            <div class="service-rectangle">
                <h1>Z nápadu k<br>REALIZÁCII</h1>
                <h2>Realizácia stavebných projektov,<br>dopravy a búracích prác</h2>
                <a class="contact-us-btn shadow" href="{{ url('/contact') }}">Kontaktovať</a>
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
                @foreach ($service->images as $image)    
                    <div data-id="{{ $image->id }}" data-value="{{ $image->filePath }}" onclick="openGallery(event, {{ $image->id }})" class="service-col shadow" style="background-image: url('{{ $image->filePath }}');">
                        <div class="yellow-overlay"></div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="gallery" class="gallery">
        <!--<h3 class="image-date">datum</h3>-->
        <article onclick="closeModal()" class="gallery-wrapper">
            <div onclick="prevImage(event)" class="gallery-btns">
                <img class="arrow-icons filter-white" src="/img/svg/angle-left.svg" alt="Left icon">
            </div>
            <div onclick="event.stopPropagation();" class="one-image">
                <img id="oneImage" src="" alt="Service image">
            </div>
            <div onclick="nextImage(event)" class="gallery-btns">
                <img class="arrow-icons filter-white" src="/img/svg/angle-right.svg" alt="Right icon">
            </div>
        </article>
    </section>
@endsection

<script>
    const serviceImages = {!! json_encode($service->images) !!}
    console.log(serviceImages);

    window.prevImage = event => {
        event.stopPropagation()
    }

    window.nextImage = event => {
        event.stopPropagation()
    }
</script>