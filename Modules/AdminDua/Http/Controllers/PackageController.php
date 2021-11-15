<?php

namespace Modules\AdminDua\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Entities\Bussiness;
use Modules\AdminDua\Entities\Package;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $data_package = Package::with('bussiness')->get();
        return view('admindua::package.index')->with('data_package', $data_package);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $data_bussiness = Bussiness::all();
        return view('admindua::package.create', compact('data_bussiness'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $request->validate([
            'bisnis_id' => 'required',
            'nama_paket' => 'required',
            'harga' => 'required'
        ]);
        Package::create($request->all());
        return redirect()->route('package.index')
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
    public function edit(Package $package)
    {
        return view('admindua::package.edit', compact('package'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'bisnis_id' => 'required',
            'nama_paket' => 'required',
            'harga' => 'required'
        ]);
        $package->update($request->all());
        return redirect()->route('package.index')
            ->with('success', 'Data Successfully Edited');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $package = Package::find($id);
        $package->delete();
        return redirect()->route('package.index')
            ->with('success', 'Data Successfully Deleted');
    }
}
