<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DocController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($doc,$chapter)
    {
//        var_dump($doc);
        // var_dump($chapter);

//        var_dump(compact($doc,$chapter));
        $nav = "<h1>nav list1</h1>";
        $content = "<p>content</p>";

        return view('layout.doc',compact('doc','chapter','nav','content'));
    }

    //显示首页
    public function showdoc($doc)
    {
        return $this->show($doc,NULL);
    }

}
