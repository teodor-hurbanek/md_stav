@extends('layouts.master')

@section('content')
    @include('partials/intro')

    @include('partials/description')
    
    <section class="welcome-services">
        <div class="containerCustom">
            <div class="welcome-row">
                @foreach ($services as $service)
                    <a href="{{ url('services/'.$service->slug) }}" class="welcome-card shadow">
                        @foreach ($service->images as $image)
                            @if ($loop->index == 1)
                                <div class="welcome-card-img" style="background-image: url('{{ $image->filePath . $image->fileName }}');"></div>
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