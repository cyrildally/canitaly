<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagineController extends Controller {
    public function chiSiamo() {
        return view('chiSiamo');
        }

    public function privacy() {
        return view('privacy');
        }
    }
