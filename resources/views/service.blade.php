@extends('layouts.master')

@section('content')

    @include('partials/intro')

    @include('partials/description')

    <section class="service-gallery">
        <div class="containerCustom">
            <div class="service-row">
                @foreach ($service->images as $key => $image)    
                    <div onclick="openGallery({{ $key }})" class="service-col shadow" style="background-image: url('{{ $image->filePath }}');">
                        <div class="yellow-overlay"></div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="gallery" class="gallery">
        <!--<h3 class="image-date">datum</h3>-->
        <article onclick="closeModal()" class="gallery-wrapper">
            <div onclick="prevImage(event);event.stopPropagation();" class="gallery-btns">
                <img class="arrow-icons filter-white" src="/img/svg/angle-left.svg" alt="Left icon">
            </div>
            @foreach ($service->images as $image)    
                <div onclick="event.stopPropagation();" class="one-image">
                    <img src="{{ $image->filePath }}" alt="Service image">
                </div>
            @endforeach
            <div onclick="nextImage(event);event.stopPropagation();" class="gallery-btns">
                <img class="arrow-icons filter-white" src="/img/svg/angle-right.svg" alt="Right icon">
            </div>
        </article>
    </section>
@endsection