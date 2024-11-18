<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Controller;
use App\Models\OrderItems;
use Illuminate\Http\Request;
use Spatie\LaravelPdf\Facades\Pdf;
use function Spatie\LaravelPdf\Support\pdf;

class InvoiceAPIController extends Controller
{
    //
    function index(Request $request){

        $orderId = $request->query('order_id');

        $orderItems = OrderItems::where('order_id', $request->order_id)->get();
        $arrOrderItems = $orderItems->toArray();

        $totalPrice = 0;
        foreach ($arrOrderItems as $item) {
            $totalPrice += $item['price'] * $item['quantity'];
        }

        $invoice = [
            "store_name"=> "Ayam Geprek Sesko",
            "address" => "Jalan kemang timur raya no 62",
            "payment" => "cash",
            "order_id" => $orderId,
            "items" => $arrOrderItems,
            "total_price" => $totalPrice,
         ];

        Pdf::view('invoice.invoice', compact('invoice'))
            ->paperSize(58, 100, 'mm')
            ->save('./assets/uploads/certificates/user/'.$orderId.'invoice.pdf');

        $directory = "./assets/uploads/certificates/user/";
        $directoryJson = asset('assets/uploads/certificates/user/');

        $imagePath = $directoryJson ."/". $orderId . "invoice.pdf";

        return view('invoice.invoiceview',compact('imagePath', ));

        /*
        return pdf()
            ->view('invoice', compact('invoice', 'payment'))
            ->paperSize(57, 100, 'mm')
            ->name('invoice-2023-04-10.pdf');*/

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
