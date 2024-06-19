<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __construct(private Store $store)
    {

    }
    public function index() {
        $stores = $this->store->paginate(10);
        return view('admin.stores.index', compact('stores'));
    }

    public function create(){
        return view('admin.stores.create');
    }


    public function store(Request $request) {
        $this->store->create($request->all());

        return redirect()->route('admin.stores.index');


    }
    public function edit(string $store) {

        $store = $this->store->findOrFail($store);
        return view('admin.stores.edit', compact('store'));
    }

    public function update(string $store, Request $request){
        $store = $this->store->findOrFail($store);

        $store->update($request->all());

        return redirect()->route('admin.stores.index');
    }

    public function destroy(string $store) {
            $store = Store::find($store);
            $store->delete();

            return redirect()->route('admin.stores.index');

    }

}
