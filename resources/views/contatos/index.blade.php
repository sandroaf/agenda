<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contatos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2>{{ __("Listagem de Contatos") }}</h2>
                    <br>
                    <a href="{{url('contatos/create')}}">Criar</a>
                    @foreach ($contatos as $contato)
                        <p>Contato <a class="bg-sky-700" href="{{url('contatos').'/'.$contato->id}}">{{ $contato->id }} - {{ $contato->nome }}</a></p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

