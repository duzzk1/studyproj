<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Criar Loja') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{route('admin.stores.store')}}" method="POST">
                        @csrf
                        <div class="w-full mb-6">
                            <label for="name">Nome loja</label>
                            <input name="name" id="name" type="text" class="w-full border border-gray-700 rounded">
                        </div>
                        <div class="w-full mb-6">
                            <label for="description">Descrição</label>
                            <input name="description" id="description" type="text" class="w-full border border-gray-700 rounded">
                        </div>
                        <div class="w-full mb-6">
                            <label for="about">Sobre a loja</label>
                            <textarea name="about" id="about" rows="4" class="w-full border border-gray-700 rounded"></textarea>
                        </div>
                        <div class="w-full mb-6">
                            <label for="phone">Telefone:</label>
                            <input name="phone" id="phone" type="text" class="w-full border border-gray-700 rounded">
                        </div>
                        <div class="w-full mb-6">
                            <label for="whatsapp">Whatsapp</label>
                            <input name="whatsapp" id="whatsapp" type="text" class="w-full border border-gray-700 rounded">
                        </div>
                        <button  class="px-14 py-2 border border-green-900 bg-green-700
                        hover:bg-green-900 transition duration-500 ease-in-out rounded">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
