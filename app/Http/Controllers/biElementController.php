<?php

namespace App\Http\Controllers;

use App\bi_element;
use Illuminate\Http\Request;

class biElementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bi_elements = bi_element::latest()->paginate(5);;
        return view('bi_elements.index',compact('bi_elements'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bi_elements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'engine' => 'required',
            'type' => 'required',
            'embed_code' => 'required',
            'preview' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();

        if ($image = $request->file('preview')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['preview'] = "$profileImage";
        }

        bi_element::create($input);

        return redirect()->route('bi_elements.index')
            ->with('success','Dashboard criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\bi_element  $bi_element
     * @return \Illuminate\Http\Response
     */
    public function show(bi_element $bi_element)
    {
        return view('bi_elements.show',compact('bi_element'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\bi_element  $bi_element
     * @return \Illuminate\Http\Response
     */
    public function edit(bi_element $bi_element)
    {
        return view('bi_elements.edit',compact('bi_element'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\bi_element  $bi_element
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bi_element $bi_element)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('preview')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['preview'] = "$profileImage";
        }else{
            unset($input['preview']);
        }

        $bi_element->update($input);

        return redirect()->route('bi_elements.index')
            ->with('success','Dashboard atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\bi_element  $bi_element
     * @return \Illuminate\Http\Response
     */
    public function destroy(bi_element $bi_element)
    {
        $bi_element->delete();

        return redirect()->route('bi_elements.index')
            ->with('success','Dashboard eliminado com sucesso!');
    }

}
