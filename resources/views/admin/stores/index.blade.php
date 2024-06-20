<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lojas') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="w-full ">
                        <thead>
                            <tr class="border-b border-gray-300 text-center justify-center items-center">
                                <th class="font-bold text-center">#</th>
                                <th class="font-bold text-center">Loja</th>
                                <th class="font-bold text-center">Criado em</th>
                                <th class="font-bold text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($stores as $store)
                                <tr>
                                    <td class="font-normal text-center">
                                        {{ $store->id }}
                                    </td>
                                    <td class="font-normal text-center">
                                        {{ $store->name }}
                                    </td>
                                    <td class="font-normal text-center">
                                        {{ $store->created_at->diffForHumans() }}
                                    </td>
                                    <td class="font-normal text-center">
                                        <div class="flex flex-around items-center justify-center gap-2">
                                            <a href="{{ route('admin.stores.edit', ['store' => $store->id]) }}" class="px-4 py-2  bg-blue-400 rounded-md">
                                                Editar
                                            </a>
                                            <form action="{{ route('admin.stores.destroy', ['store' => $store->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="px-4 py-2 bg-red-400 rounded-md">
                                                    Apagar
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">
                                        <h3>Nenhum item encontrado!</h3>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="flex flex-around items-center justify-center">
                    <a href="{{ route('admin.stores.create', ['store' => $store->id]) }}" class="px-4 py-2 border border-green-300 bg-green-300 mb-2 rounded-md">
                        Criar loja
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
