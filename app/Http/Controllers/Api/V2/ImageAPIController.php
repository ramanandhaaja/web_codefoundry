<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageAPIController extends Controller
{
    //
    function index(){
        return '[{"imagePath":"something.jpg"}]';
    }


    function store(Request $request){
        /*
        $post = new Blog();
        $post->title = $request->title;
        $post->description = $request->description;
        $post->image = $request->image;
        $post->author_id = $request->author_id;
        $post->save();
        return response()->json($post, 201);*/

        $request_Invoice_No = $request->ID;
        $request_Invoice_Date = $request->invoice_date;
        $request_Name = $request->name;
        $request_Address = $request->address;

        $img = imagecreatefromjpeg('./assets/invoice_format.jpg');
        $color = imagecolorallocate($img, 0, 0, 0);

        $font = "./assets/GOTHAM-MEDIUM.TTF";

        $invoice_number = $request_Invoice_No;
        $invoice_date = $request_Invoice_Date;

        //$name = $customer->first_name;
        $name= $request_Name;
        $address = $request_Address;

        $new_name = $request_Invoice_No.".jpeg";

        $product_name = " Minyak Kita 1L";
        $product_qty = " 1";
        $product_price = " 18.000";
        $product_total = " 18.000";

        $sub_total = "36.000";
        $tax = "0";
        $grand_total = "36.000";

        //Invoice NUMBER
        imagettftext($img, 20, 0, 1020, 380, $color, $font, $invoice_number);
        imagettftext($img, 20, 0, 1020, 422, $color, $font, $invoice_date);

        //Customer Detail
        imagettftext($img, 20, 0, 142, 422, $color, $font, $name);
        imagettftext($img, 20, 0, 142, 455, $color, $font, $address);

        //Content
        imagettftext($img, 24, 0, 132, 1000, $color, $font, $product_name);
        imagettftext($img, 24, 0, 740, 1000, $color, $font, $product_qty);
        imagettftext($img, 24, 0, 890, 1000, $color, $font, $product_price);
        imagettftext($img, 24, 0, 1100, 1000, $color, $font, $product_total);

        imagettftext($img, 24, 0, 132, 1050, $color, $font, $product_name);
        imagettftext($img, 24, 0, 740, 1050, $color, $font, $product_qty);
        imagettftext($img, 24, 0, 890, 1050, $color, $font, $product_price);
        imagettftext($img, 24, 0, 1100, 1050, $color, $font, $product_total);

        //Total
        imagettftext($img, 24, 0, 1100, 1429, $color, $font, $sub_total);
        imagettftext($img, 24, 0, 1100, 1490, $color, $font, $tax);
        imagettftext($img, 24, 0, 1100, 1545, $color, $font, $grand_total);


        /* OUTPUT IMAGE */
        header('Content-type: image/jpeg');

        /* create directory */
        $directory = "./assets/uploads/certificates/user/";
        $directoryJson = asset('assets/uploads/certificates/user/');


        /* image save */
        imagejpeg($img, $directory . $new_name);
        $imagePath = $directoryJson ."/". $new_name;

        //return redirect(asset($imagePath));
        return view('image',compact('imagePath'));

        //return '{"imagePath":"something post.jpg"}';
    }
}
