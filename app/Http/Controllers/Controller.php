<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function list(Request $request, $id = null) {

        if ($id == null) {
            $data = Genre::all();
        } else {
            $data = Genre::whereId($id)->get();
        }

        return view('movie_list', ['data' => $data, 'search' => $request->search]);
    }

    public function detail($id) {
        $data = Movie::find($id);

        return view('movie_detail', ['data' => $data]);
    }
}
