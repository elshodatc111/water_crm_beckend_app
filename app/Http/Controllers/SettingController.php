<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;
use App\Services\BalanceService;
use App\Http\Requests\UpdateBalanceRequest;

class SettingController extends Controller{    

    protected $userService;
    protected $balanceService;

    public function __construct(
            UserService $userService, 
            BalanceService $balanceService
        ){
            $this->middleware('auth');
            $this->userService = $userService;
            $this->balanceService = $balanceService;
        }

    public function index(){
        $Balance = $this->userService->getBalance();
        return view('setting.index',compact('Balance'));
    }

    public function update(UpdateBalanceRequest $request){
        $updated = $this->balanceService->updateBalance($request->validated());
        return redirect()->back()->with('success', 'Balans yangilandi!');
    }
    
}
