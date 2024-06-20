<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Invoices') }}
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
                                <th class="font-bold text-center">Titulo</th>
                                <th class="font-bold text-center">Valor</th>
                                <th class="font-bold text-center">Criado em</th>
                                <th class="font-bold text-center">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($invoiceData as $invoice)
                                <tr>
                                    <td class="font-normal text-center">
                                        {{ $invoice['id'] }}
                                    </td>
                                    <td class="font-normal text-center">
                                        {{ $invoice['title'] }}
                                    </td>
                                    <td class="font-normal text-center">
                                        {{ number_format($invoice['price'], 2, ',', '.') }}
                                    </td>
                                    <td class="font-normal text-center">
                                        {{ $invoice['created_at']->diffForHumans() }}
                                    </td>
                                    <td class="font-normal text-center">
                                            <form action="{{ route('admin.invoices.cancel', ['invoice' => $invoice->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="px-4 py-2 bg-red-400 rounded-md">
                                                    Cancelar nota
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
                    <a href="{{ route('admin.invoices.create', ['invoice' => $invoice->id]) }}" class="px-4 py-2 border border-green-300 bg-green-300 mb-2 rounded-md">
                        Criar nota fiscal
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
