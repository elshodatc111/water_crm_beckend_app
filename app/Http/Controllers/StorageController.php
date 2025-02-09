<?php

namespace App\Http\Controllers;

use App\Models\Storage;
use Illuminate\Http\Request;
use App\Services\StorageService;
use App\Http\Requests\StorageStoreRequest;

class StorageController extends Controller{
    protected $storageService;

    public function __construct(StorageService $storageService){
        $this->middleware('auth');
        $this->storageService = $storageService;
    }

    public function index(){
        $Storage = $this->storageService->getStorage();
        return view('storage.index',compact('Storage'));
    }

    public function create(){
        //
    }

    public function store(StorageStoreRequest $request){
        $this->storageService->createStorage($request->validated());
        return redirect()->back()->with('success', 'Yangi omborxona qo\'shildi!');
    }

    public function show(Storage $storage){
        //
    }

    public function edit(Storage $storage){
        //
    }

    public function update(Request $request, Storage $storage){
        //
    }

    public function destroy(Storage $storage){
        //
    }
}
