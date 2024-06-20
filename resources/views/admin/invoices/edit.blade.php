<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar nota') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{route('admin.stores.update', ['store' => $invoice->id, 'ok' => '1'])}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="w-full mb-6">
                            <label for="name">Titulo da nota</label>
                            <input value="{{$invoice->name}}" name="name" id="name" type="text" class="w-full border border-gray-700 rounded">
                        </div>
                        <div class="w-full mb-6">
                            <label for="description">Descrição da nota</label>
                            <input value="{{$invoice->description}}" name="description" id="description" type="text" class="w-full border border-gray-700 rounded">
                        </div>
                        <div class="w-full mb-6">
                            <label for="description">Valor da nota</label>
                            <input value="{{$invoice->price}}" name="description" id="description" type="text" class="w-full border border-gray-700 rounded">
                        </div>

                        <button  class="px-14 py-2 border border-green-900 bg-green-700
                        hover:bg-green-900 transition duration-500 ease-in-out rounded">Atualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
