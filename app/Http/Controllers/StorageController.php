<?php

namespace App\Http\Controllers;

use App\Models\Storage;
use Illuminate\Http\Request;
use App\Services\StorageService;

class StorageController extends Controller{
    protected $storageService;

    public function __construct(StorageService $storageService){
        $this->middleware('auth');
        $this->storageService = $storageService;
    }

    public function index(){
        $storage = $this->storageService->getStorage();
        dd($storage);
    }

    public function create(){
        //
    }

    public function store(Request $request){
        //
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
