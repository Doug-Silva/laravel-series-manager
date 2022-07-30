{{--estrutura html customizada do Blade--}}
<x-layout title="Séries">

    <a href="/series/criar" class="btn btn-dark mb-2">Adicionar</a>

    <ul class="list-group">
        {{--código php simplificado utilizando Blade--}}
        @foreach ($series as $serie)
        <li class="list-group-item">{{ $serie }}</li>
        @endforeach
    </ul>
</x-layout>
