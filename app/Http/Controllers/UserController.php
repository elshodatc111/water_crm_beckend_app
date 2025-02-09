<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;
use App\Http\Requests\UserStoreRequest;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService){
        $this->middleware('auth');
        $this->userService = $userService;
    }

    public function index(){
        $guard = $this->userService->getGuards();
        $currer = $this->userService->getCouriers();
        $Balance = $this->userService->getBalance();
        return view('user.index', compact('guard', 'currer', 'Balance'));
    }

    public function create(UserStoreRequest $request){
        $this->userService->createUser($request->validated());
        return redirect()->back()->with('success', 'Foydalanuvchi muvaffaqiyatli qo‘shildi!');
    }

    


}
