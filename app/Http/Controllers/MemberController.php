<?php

namespace App\Http\Controllers;

use App\Models\ShareCertificate;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class MemberController extends Controller
{
    public function list(Request $request) : Response 
    {
        $shareCertificates = ShareCertificate::where([ 'status' => '1' ])->get();
        return Inertia::render('Member/MemberList', [
            'lists' => $shareCertificates
        ]);
    }
}
