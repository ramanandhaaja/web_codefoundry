<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\LaravelPdf\Facades\Pdf;
use function Spatie\LaravelPdf\Support\pdf;

class InvoiceController extends Controller
{
    //
    function index(){

        $invoice = 'nandha';
        $payment = 'cash';

        Pdf::view('invoice.invoice', compact('invoice', 'payment'))
            ->paperSize(57, 100, 'mm')
            ->save('./assets/uploads/certificates/user/invoice.pdf');

        $directory = "./assets/uploads/certificates/user/";
        $directoryJson = asset('assets/uploads/certificates/user/');

        $imagePath = $directoryJson ."/". "invoice.pdf";

        return view('invoice.invoiceview',compact('imagePath'));

        /*
        return pdf()
            ->view('invoice', compact('invoice', 'payment'))
            ->paperSize(57, 100, 'mm')
            ->name('invoice-2023-04-10.pdf');*/
    }

    function store(Request $request){

        $validated = $request->validate([
            'store_name' => 'required|string',
            'address' => 'required|string',
        ]);

        $invoice = [
           "store_name"=> $request->store_name,
           "address" => $request->address,
        ];

        $jsonInvoice = json_encode($invoice);
        //json(['invoice' => $jsonInvoice])

       //Do whatever you want with the data here (e.g save in database or send mail).
       return view('invoice.invoicepost', compact('jsonInvoice'));    //Display invoice detail
    }
}
