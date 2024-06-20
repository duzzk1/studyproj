<?php

namespace App\Http\Controllers\Admin;

use App\Models\Invoice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use function Laravel\Prompts\alert;

class InvoiceController extends Controller
{

    public function __construct(private Invoice $invoice)
    {

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $invoiceData = $this->invoice->all();
        return view('admin.invoices.index')->with(['invoiceData' => $invoiceData]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('admin.invoices.create');
    }
    /**
     * Store a newly created resource in storage.
     */

    public function newInvoice(Request $request) {
        $this->invoice->create($request->all());

        return redirect()->route('admin.invoices.index');

    }
    public function cancel(string $invoice){
        $invoice = Invoice::find($invoice);
        $invoice->delete();

        return redirect()->route('admin.invoices.index');
    }
    public function getInvoices() {
        $data = ['countInvoicesDay' => $this->getCountDay(), 'countInvoicesMonth' =>  $this->getCountMonth(), 'priceDayInvoices' => number_format($this->getPriceDay(), 2, ',', '.'),'priceMonthInvoices' => number_format($this->getPriceMount(), 2, ',', '.') ];
        return view('dashboard')->with($data);
    }

    private function getCountDay()
    {
        return $this->invoice->whereDate('created_at', today())->count();
    }
    private function getPriceDay()
    {
        return $this->invoice->whereDate('created_at', today())->sum('price');
    }

    private function getCountMonth()
    {
        return $this->invoice->whereMonth('created_at', today()->month)->count();
    }
    private function getPriceMount()
    {
        return $this->invoice->whereMonth('created_at', today())->sum('price');
    }



}
