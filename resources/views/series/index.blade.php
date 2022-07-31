{{--estrutura html customizada do Blade--}}
<x-layout title="Séries">

    <a href="{{ route('series.create') }}" class="btn btn-dark mb-2">Adicionar</a>

    <ul class="list-group">
        {{--código php simplificado utilizando Blade--}}
        @foreach ($series as $serie)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $serie->nome }}

            <form action="{{ route('series.destroy', $serie->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">
                    X
                </button>
            </form>
        </li>
        @endforeach
    </ul>
</x-layout>
