<?php

namespace App\Http\Controllers;

use App\Http\Requests\DecRequest;

class IndexController extends Controller
{
    public function getIndex() {
        return view("welcome", [
            'post' => false,
        ]);
    }

    public function postIndex(DecRequest $request) {
        $dec = $request->input('dec');
        $hex = dechex($dec);
        $bin = decbin($dec);
        $oct = decoct($dec);
        return view("welcome", [
            'dec' => $dec,
            'hex' => $hex,
            'bin' => $bin,
            'oct' => $oct,
            'post' => true,
        ]);
    }
}
