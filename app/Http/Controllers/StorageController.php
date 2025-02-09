<?php

namespace App\Http\Controllers;

use App\Models\Storage;
use App\Http\Requests\StoreStorageRequest;
use App\Http\Requests\UpdateStorageRequest;

class StorageController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
        $Storage = Storage::get();
        return view('storage.index',compact('Storage'));
    }

    public function store(StoreStorageRequest $request){
        $validated = $request->validated();
        Storage::create([
            'name' => $validated['name'],
            'dishes_count' => 0,
            'dishes_defective' => 0,
            'cash_paymart' => 0,
            'status' => true,
        ]);
        return redirect()->route('stotage')->with('success', 'Ombor muvaffaqiyatli qo‘shildi!');
    }

    public function show(Storage $id){
        return view('storage.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Storage $storage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStorageRequest $request, Storage $storage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Storage $storage)
    {
        //
    }
}
