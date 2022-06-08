@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Administrácia') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Ste prihlasený!') }}
                </div>
                <div class="card-body">
                    {{-- Autodoprava --}}
                    <form action="/images" method="POST" class="mb-5" style="border: .15rem solid rgba(0,0,0,.125); padding: 1rem .5rem; border-radius: 0.25rem;" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="filePath" class="col-md-4 col-form-label text-md-end">Autodoprava</label>
    
                            <div class="col-md-6">
                                <input type="file" accept="image/png, image/jpeg, image/jpg" class="form-control" name="file" required>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button class="btn btn-primary">
                                    Pridať obrázok
                                </button>
                            </div>
                        </div>

                        <input type="hidden" name="filePath" value="/img/autodoprava/">
                        <input type="hidden" name="service_id" value="1">
                    </form>

                    {{-- Stavby na kľúč --}}
                    <form action="/images" method="POST" class="mb-5" style="border: .15rem solid rgba(0,0,0,.125); padding: 1rem .5rem; border-radius: 0.25rem;" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="filePath" class="col-md-4 col-form-label text-md-end">Stavby na kľúč</label>
    
                            <div class="col-md-6">
                                <input type="file" accept="image/png, image/jpeg, image/jpg" class="form-control" name="file" required>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button class="btn btn-primary">
                                    Pridať obrázok
                                </button>
                            </div>
                        </div>

                        <input type="hidden" name="filePath" value="/img/stavby_na_kluc/">
                        <input type="hidden" name="service_id" value="2">
                    </form>

                    {{-- Búracie práce --}}
                    <form action="/images" method="POST" class="mb-5" style="border: .15rem solid rgba(0,0,0,.125); padding: 1rem .5rem; border-radius: 0.25rem;" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="filePath" class="col-md-4 col-form-label text-md-end">Búracie práce</label>
    
                            <div class="col-md-6">
                                <input type="file" accept="image/png, image/jpeg, image/jpg" class="form-control" name="file" required>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button class="btn btn-primary">
                                    Pridať obrázok
                                </button>
                            </div>
                        </div>

                        <input type="hidden" name="filePath" value="/img/buracie_prace/">
                        <input type="hidden" name="service_id" value="3">
                    </form>

                    {{-- Rekonštrukcia bytov a domov --}}
                    <form action="/images" method="POST" class="mb-5" style="border: .15rem solid rgba(0,0,0,.125); padding: 1rem .5rem; border-radius: 0.25rem;" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="filePath" class="col-md-4 col-form-label text-md-end">Rekonštrukcia bytov a domov</label>
    
                            <div class="col-md-6">
                                <input type="file" accept="image/png, image/jpeg, image/jpg" class="form-control" name="file" required>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button class="btn btn-primary">
                                    Pridať obrázok
                                </button>
                            </div>
                        </div>

                        <input type="hidden" name="filePath" value="/img/rekonstrukcie_bytov/">
                        <input type="hidden" name="service_id" value="4">
                    </form>

                    {{-- Zemné a výkopové práce --}}
                    <form action="/images" method="POST" class="mb-5" style="border: .15rem solid rgba(0,0,0,.125); padding: 1rem .5rem; border-radius: 0.25rem;" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="filePath" class="col-md-4 col-form-label text-md-end">Zemné a výkopové práce</label>
    
                            <div class="col-md-6">
                                <input type="file" accept="image/png, image/jpeg, image/jpg" class="form-control" name="file" required>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button class="btn btn-primary">
                                    Pridať obrázok
                                </button>
                            </div>
                        </div>

                        <input type="hidden" name="filePath" value="/img/zemne_vykopove_prace/">
                        <input type="hidden" name="service_id" value="5">
                    </form>

                    {{-- Bazény na klúč --}}
                    <form action="/images" method="POST" class="mb-5" style="border: .15rem solid rgba(0,0,0,.125); padding: 1rem .5rem; border-radius: 0.25rem;" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="filePath" class="col-md-4 col-form-label text-md-end">Bazény na klúč</label>
    
                            <div class="col-md-6">
                                <input type="file" accept="image/png, image/jpeg, image/jpg" class="form-control" name="file" required>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button class="btn btn-primary">
                                    Pridať obrázok
                                </button>
                            </div>
                        </div>

                        <input type="hidden" name="filePath" value="/img/bazeny_na_kluc/">
                        <input type="hidden" name="service_id" value="6">
                    </form>

                    {{-- Prenájom lešenia --}}
                    <form action="/images" method="POST" class="mb-5" style="border: .15rem solid rgba(0,0,0,.125); padding: 1rem .5rem; border-radius: 0.25rem;" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="filePath" class="col-md-4 col-form-label text-md-end">Prenájom lešenia</label>
    
                            <div class="col-md-6">
                                <input type="file" accept="image/png, image/jpeg, image/jpg" class="form-control" name="file" required>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button class="btn btn-primary">
                                    Pridať obrázok
                                </button>
                            </div>
                        </div>

                        <input type="hidden" name="filePath" value="/img/prenajom_lesenia/">
                        <input type="hidden" name="service_id" value="7">
                    </form>

                    {{-- Prenájom prívesných vozíkov --}}
                    <form action="/images" method="POST" class="mb-5" style="border: .15rem solid rgba(0,0,0,.125); padding: 1rem .5rem; border-radius: 0.25rem;" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="filePath" class="col-md-4 col-form-label text-md-end">Prenájom prívesných vozíkov</label>
    
                            <div class="col-md-6">
                                <input type="file" accept="image/png, image/jpeg, image/jpg" class="form-control" name="file" required>
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button class="btn btn-primary">
                                    Pridať obrázok
                                </button>
                            </div>
                        </div>

                        <input type="hidden" name="filePath" value="/img/prenajom_vozikov/">
                        <input type="hidden" name="service_id" value="8">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection