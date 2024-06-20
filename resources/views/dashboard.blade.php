<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 dark:text-gray-100 bg-indigo-950 text-white">
                    <div class="flex justify-between w-full h-16 items-center">
                        <div>
                            <h2 class="relative bottom-3 font-bold text-2xl text-white">Bem vindo, {{Auth::user()->name}}</h2>
                            <p class="relative text-sm tracking-widest text-white">Bora emitir suas notas carai</p>
                        </div>
                        <img src="https://cdn-icons-png.freepik.com/256/869/869636.png?semt=ais_hybrid" alt="store icon" class="w-10 h-10">
                    </div>
                </div>
            </div>
            <div class="w-full h-[1px] bg-gray-400 my-6"></div>
        </div>
        <div class="flex max-w-7xl mx-auto sm:px-6 lg:px-8 justify-between text-center gap-6">
            <div class="flex dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg w-full ">
                <div class="flex flex-col border rounded-xl p-3 bg-gray-300 items-center w-full h-36 justify-center flex-wrap">
                    <div>
                        <h2 class="text-nowrap w-30">Notas do dia:</h2>
                        <p class="text-green-600 after:content-[]">{{$countInvoicesDay}}</p>
                        <p class="text-green-600 after:content-[]">R${{$priceDayInvoices}}</p>
                    </div>
                </div>
            </div>
            <div class="flex dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg w-full gap-6">
                <div class="flex flex-col border rounded-xl p-3 bg-gray-300 items-center w-full h-36 justify-center flex-wrap">
                    <div>
                        <h2 class="text-nowrap w-30">Notas do mes:</h2>
                        <p class="text-green-600 after:content-[]">{{$countInvoicesMonth}}</p>
                        <p class="text-green-600 after:content-[]">R${{$priceMonthInvoices}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center sm:px-6 lg:px-8 ">
            <a class="border rounded-md p-2 mt-2 bg-indigo-950 hover:bg-indigo-900 transition-all duration-500 text-white" href="/admin/invoices">Ver todas as notas</a>
        </div>
        <div class="h-[1px] bg-gray-400 my-6 max-w-7xl mx-6 sm:px-6 lg:px-8"></div>

    </div>
</x-app-layout>
