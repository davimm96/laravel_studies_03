@extends('layouts.main_layout')

@section('content')

{{--<div class="text-center">
    @foreach($pessoas_linguas as $pessoa => $linguas)
        <x-card-pessoa :$pessoa :$linguas />
    @endforeach
</div>--}}

{{-- componentes e slots --}}
<div>
    <h4 class="text-info">Como funciona um Slot?</h4>
    <x-other-card>
        <h1 class="text-danger">Este é o Slot!</h1>
    </x-other-card>
</div>

<br><hr><br>

<x-multi-slot>
    <x-slot:title>Este é o título</x-slot>
    <x-slot:content>
        Este é o conteúdo
        <ul>
            <li>Item 1</li>
            <li>Item 2</li>
            <li>Item 3</li>
        </ul>
    </x-slot>
    <x-slot:footer>Esse é o footer</x-slot>
</x-multi-slot>
@endsection
