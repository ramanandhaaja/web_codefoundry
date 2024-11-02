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

        /*Pdf::view('invoice')
            ->paperSize(57, 200, 'mm')
            ->save('./assets/uploads/certificates/user/invoice.pdf');
*/
        return pdf()
            ->view('invoice')
            ->paperSize(57, 200, 'mm')
            ->name('invoice-2023-04-10.pdf');

    }
}
