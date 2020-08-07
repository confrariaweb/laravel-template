<?php

namespace ConfrariaWeb\Template\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TemplateController extends Controller
{

    protected $data;

    public function __construct()
    {
        $this->data = [];
    }



    public function index()
    {
        $data['templates'] = resolve('TemplateService')->all();
        return view(viewTemplate('index', 'template'), $data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
