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
                    <form action="/images" method="POST" class="mb-5" style="border: .15rem solid rgba(0,0,0,.125); padding: 1rem .5rem; border-radius: 0.25rem;">
                        @csrf

                        <div class="row mb-3">
                            <label for="filePath" class="col-md-4 col-form-label text-md-end">Autodoprava</label>
    
                            <div class="col-md-6">
                                <input id="" type="file" accept="image/png, image/jpeg, image/jpg" class="form-control" name="filePath">
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button class="btn btn-primary">
                                    Pridať obrázok
                                </button>
                            </div>
                        </div>

                        <input type="hidden" name="service_id" value="1">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection