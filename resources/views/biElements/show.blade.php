@extends('bi_elements.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Ver Dashboard</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('bi_elements.index') }}">Voltar</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                {{ $bi_element->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descrição:</strong>
                {{ $bi_element->description }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Dashboard:</strong>
                <img src="/image/{{ $bi_element->preview }}" width="500px">
            </div>
        </div>
    </div>
@endsection
