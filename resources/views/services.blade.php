@extends('layouts.master')

@section('content')

@include('partials/intro')

@include('partials/description')

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
                        @if ($loop->index == 1)
                            <div class="services-card-img" style="background-image: url('{{ $image->filePath . $image->fileName }}')"></div>
                        @endif
                    @endforeach
                    <div class="yellow-overlay"></div>
                </a>
            @endforeach
        </div>
    </div>
</section>
@endsection