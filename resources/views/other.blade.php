@extends('layouts.other_layout')

@section('page_title', 'Other Page')

@section('top_bar')
    @parent
    <div>Conteúdo adicional da barra do topo</div>
@endsection

@section('content')
    <p>Conteúdo da minha View</p>
@endsection

@section('bottom_bar')
    <p>Conteúdo da barra de rodapé</p>
@endsection
