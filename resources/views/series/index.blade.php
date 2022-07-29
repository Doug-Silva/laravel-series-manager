{{--estrutura html customizada do Blade--}}
<x-layout title="Séries">
    <ul>
        {{--código php simplificado utilizando Blade--}}
        @foreach ($series as $serie)
        <li>{{ $serie }}</li>
        @endforeach
    </ul>
</x-layout>
