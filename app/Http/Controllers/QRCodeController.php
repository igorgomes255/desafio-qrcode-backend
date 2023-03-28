<?php

namespace App\Http\Controllers;

use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;

class QRCodeController extends Controller
{
    public function generateQR()
    {
        $link = "www.linkedin.com";
        return QrCode::size(250)->generate($link);

    }
}