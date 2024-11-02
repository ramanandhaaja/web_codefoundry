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
        /*
        Pdf::view('invoice')
            ->paperSize(57, 200, 'mm')
            ->save('./assets/uploads/certificates/user/invoice.pdf');

        */

        /*
        $invoice = 'nandha';
        $payment = 'cash';

        Pdf::view('invoice', compact('invoice', 'payment'))
            ->paperSize(57, 100, 'mm')
            ->save('./assets/uploads/certificates/user/invoice.pdf');

        $directory = "./assets/uploads/certificates/user/";
        $directoryJson = asset('assets/uploads/certificates/user/');

        $imagePath = $directoryJson ."/". "invoice.pdf";

        return $imagePath;
        */

        //return asset('assets/uploads/certificates/user/invoice.pdf');
        return '[{"imagePath":"nandha.jpg"}]';

        /*
        return pdf()
            ->view('invoice', compact('invoice', 'payment'))
            ->paperSize(57, 100, 'mm')
            ->name('invoice-2023-04-10.pdf');*/
    }
}
