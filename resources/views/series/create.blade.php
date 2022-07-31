{{--estrutura html customizada do Blade--}}
<x-layout title="Nova Série">
    <x-series.form :action="route('series.store')" />
</x-layout>
