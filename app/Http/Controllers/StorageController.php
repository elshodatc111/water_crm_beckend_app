<?php

namespace App\Http\Controllers;

use App\Models\Storage;
use Illuminate\Http\Request;
use App\Services\StorageService;
use App\Services\StorageOutputService;
use App\Services\StorageHistoryService;
use App\Http\Requests\StorageStoreRequest;
use App\Http\Requests\StorageUpdateRequest;
use App\Http\Requests\StorageUpdateInsertRequest;
use App\Http\Requests\StorageUpdateOutputRequest;

class StorageController extends Controller{
    protected $storageService;

    public function __construct(StorageService $storageService, StorageOutputService $storageOutputService, StorageHistoryService $storageHistoryService){
        $this->middleware('auth');
        $this->storageService = $storageService;
        $this->storageOutputService = $storageOutputService;
        $this->storageHistoryService = $storageHistoryService;
    }

    public function index(){
        $Storage = $this->storageService->getStorage();
        return view('storage.index',compact('Storage'));
    }

    public function store(StorageStoreRequest $request){
        $this->storageService->createStorage($request->validated());
        return redirect()->back()->with('success', 'Yangi omborxona qo\'shildi!');
    }

    public function show($id){
        $Storage = $this->storageService->getShow($id);
        $storageOutput = $this->storageOutputService->getAll();
        return view('storage.show',compact('Storage','storageOutput'));
    }

    public function update(StorageUpdateRequest $request, $id){
        $Storage = $this->storageService->updateStorage($request, $id);
        return redirect()->back()->with('success', 'Ombor malumotlari yangilandi.');
    }

    public function update_input(StorageUpdateInsertRequest $request, $id){
        $this->storageService->updateStorageInput($request, $id);
        $this->storageHistoryService->dishesCount($request->dishes_count, $id);
        return redirect()->back()->with('success', 'Omborga yangi idishlar qo\'shildi.');
    }

    public function update_output(StorageUpdateOutputRequest $request, $id){
        $this->storageService->updateStorageOutput($request, $id);
        $this->storageHistoryService->dishesOutput($request->status, $request->count, $id);
        return redirect()->back()->with('success', 'Omborga idishlar chiqim qilindi.');
    }
}
