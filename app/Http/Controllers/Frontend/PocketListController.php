<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Pocket;
use App\Models\PocketContent;
use Illuminate\Http\Request;

class PocketListController extends Controller
{
    public function index() {
        $pockets = Pocket::all();
        return view('pockets', compact('pockets'));
    }

    public function contents($id) {
        $pocket_contents = PocketContent::where('pocket_id', $id)->get();
        return view('contents', compact('pocket_contents'));
    }
}
