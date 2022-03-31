<?php

namespace App\Http\Controllers;

use App\Models\BiElement;
use Illuminate\Http\Request;

class BiElementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bi_elements = BiElement::latest()->paginate(5);;

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

        BiElement::create($input);

        return redirect()->route('bi_elements.index')
            ->with('success','Dashboard criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BiElement  $biElement
     * @return \Illuminate\Http\Response
     */
    public function show(BiElement $biElement)
    {
        return view('bi_elements.show',compact('biElement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BiElement  $biElement
     * @return \Illuminate\Http\Response
     */
    public function edit(BiElement $biElement)
    {
        return view('bi_elements.edit',compact('biElement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BiElement  $biElement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BiElement $biElement)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required'
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

        $biElement->update($input);

        return redirect()->route('bi_elements.index')
            ->with('success','Dashboard atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BiElement  $biElement
     * @return \Illuminate\Http\Response
     */
    public function destroy(BiElement $biElement)
    {
        $biElement->delete();

        return redirect()->route('bi_elements.index')
            ->with('success','Dashboard eliminado com sucesso!');
    }
}
