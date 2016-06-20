<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;

class CopyController extends Controller
{
    public function common(Request $request)
    {
        $uri = $request->getRequestUri();
        $bladename = str_replace('/', '_',$uri);
        if (empty($bladename)) $bladename = 'index';
        if ($bladename[0] == '_') $bladename = substr($bladename,1);
        if (empty($bladename)) $bladename = 'index';

        $content = View::make('copy.' . $bladename)->render();

        return response($content);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->common('/');
    }

}
