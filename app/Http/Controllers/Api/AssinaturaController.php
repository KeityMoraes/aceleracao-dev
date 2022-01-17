<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Assinatura;
use App\Models\user;
use Illuminate\http\Request;
use Illuminate\Support\Facades\Auth;

class DocumentController extends Controller
{
    protected $assinatura;

    public function __construct()
    {
        $this->assinatura = new Assinatura();
    }

    public function index(){
        
        
        $ass = Assinatura::paginate(10);
        return response()->json($ass);

    }

    
    
}
