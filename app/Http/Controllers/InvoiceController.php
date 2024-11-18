<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\OrderItems;
use App\Models\Orders;
use Illuminate\Http\Request;
use Spatie\LaravelPdf\Facades\Pdf;
use function Spatie\LaravelPdf\Support\pdf;

class InvoiceController extends Controller
{


    function index(Request $request){

        $invoices = Orders::latest()->paginate(15);

        return view('cms.invoice.invoice', compact('invoices'));
    }

    function create(){
        return view('cms.layout');
    }

    function store(Request $request){

        $validated = $request->validate([
            'store_name' => 'required|string',
            'address' => 'required|string',
            'order_id' => 'required|string',
            'items' => 'array',
        ]);

        //$orderItems = OrderItems::all();
        $orderItems = OrderItems::where('order_id', $request->order_id)->get();
        $arrOrderItems = $orderItems->toArray();

        $invoice = [
           "store_name"=> $request->store_name,
           "address" => $request->address,
           "order_id" => $request->order_id,
           "items" => $arrOrderItems,
           "total_price" => 0,
        ];

        /*
        foreach($request->items as $item) {
            $validated = $request->validate([   //Validate each item.
                'name' => 'required|string',
                'price' => 'required|numeric',
                'quantity'=> 'required|integer',
            ]);

           $invoice["items"][] = $item;   //Add item to invoice items.
           $invoice["total_price"]+= ($item['price'] * $item['quantity']); //Calculate total price.
        }
        */

       return view('invoice.invoicepost', compact('invoice'));    //Display invoice detail
    }
}
