<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Entities\Bussiness;

class BussinessController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $bussiness = Bussiness::get();
        return view('admin::bussiness.index', compact('bussiness'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('admin::bussiness.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_bisnis' => 'required',
            'alamat' => 'required'
        ]);
        Bussiness::create($request->all());
        return redirect()->route('bussiness.index')
            ->with('success', 'Data Successfully Added');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit(Bussiness $bussiness)
    {
        return view('admin::bussiness.edit', compact('bussiness'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, Bussiness $bussiness)
    {
        // $row = Bussiness::where('id', $id)->firstOrFail();

        $request->validate([
            'nama_bisnis' => 'required',
            'alamat' => 'required'
        ]);
        $bussiness->update($request->all());
        return redirect()->route('bussiness.index')
            ->with('success', 'Data Successfully Edited');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $bussiness = Bussiness::find($id);
        $bussiness->delete();
        return redirect()->route('bussiness.index')
            ->with('success', 'Data Successfully Deleted');
    }
}
