{{--estrutura html customizada do Blade--}}
<x-layout title="Editar Série '{{ $serie->nome }}'">
    <x-series.form :action="route('series.update', $serie->id)" :nome="$serie->nome" />
</x-layout>
