<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;
use App\Services\BalanceService;
use App\Http\Requests\UserStoreRequest;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService, BalanceService $balanceService){
        $this->middleware('auth');
        $this->userService = $userService;
        $this->balanceService = $balanceService;
    }

    public function index(){
        $guard = $this->userService->getGuards();
        $currer = $this->userService->getCouriers();
        $admin = $this->userService->getAdmins();
        $Balance = $this->balanceService->getBalance();
        return view('user.index', compact('guard', 'currer', 'admin', 'Balance'));
    }

    public function create(UserStoreRequest $request){
        $this->userService->createUser($request->validated());
        return redirect()->back()->with('success', 'Foydalanuvchi muvaffaqiyatli qo‘shildi!');
    }

    public function user_show_currer($id){
        $currer = $this->userService->getUserById($id);
        dd($currer);
    }

    public function user_show_guard($id){
        $guard = $this->userService->getUserById($id);
        dd($guard);
    }


}
