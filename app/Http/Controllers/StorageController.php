<?php

namespace App\Http\Controllers;

use App\Models\Storage;
use Illuminate\Http\Request;
use App\Services\StorageService;
use App\Http\Requests\StorageStoreRequest;
use App\Http\Requests\StorageUpdateRequest;
use App\Http\Requests\StorageUpdateInsertRequest;
use App\Http\Requests\StorageUpdateOutputRequest;

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

    public function show($id){
        $Storage = $this->storageService->getShow($id);
        return view('storage.show',compact('Storage'));
    }

    public function edit(Storage $storage){
        //
    }

    public function update(StorageUpdateRequest $request, $id){
        $Storage = $this->storageService->updateStorage($request, $id);
        return redirect()->back()->with('success', 'Ombor malumotlari yangilandi.');
    }

    public function update_input(StorageUpdateInsertRequest $request, $id){
        $Storage = $this->storageService->updateStorageInput($request, $id);
        return redirect()->back()->with('success', 'Omborga yangi idishlar qo\'shildi.');
    }

    public function update_output(StorageUpdateOutputRequest $request, $id){
        $Storage = $this->storageService->updateStorageOutput($request, $id);
        return redirect()->back()->with('success', 'Omborga idishlar chiqim qilindi.');
    }

    public function destroy(Storage $storage){
        //
    }
}
