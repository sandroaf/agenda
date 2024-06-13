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
                    <h2>{{ __("Contato: ") }}
                        {{$contato->id}} - {{$contato->nome}}</h2>
                    <br>
                    <ul>
                       <li>ID: {{$contato->id}}</li>
                       <li>nome: {{$contato->nome}}</li>
                       <li>email: {{$contato->email}}</li>
                       <li>Telefone: {{$contato->telefone}}</li>
                       <li>Cidade: {{$contato->cidade}}</li>
                       <li>Estado: {{$contato->estado}}</li>
                    </ul>
                    <br>
                    <a href="{{url('contatos/')}}">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

