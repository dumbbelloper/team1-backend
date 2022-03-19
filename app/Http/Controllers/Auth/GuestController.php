<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Services\AuthService;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\SigninRequest;
use App\Http\Requests\Auth\RegisterRequest;

class GuestController extends Controller
{
    public function __construct(private AuthService $service)
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\UserSigninRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(RegisterRequest $request): JsonResponse
    {
        return $this->service->store($request->validated());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\UserSigninRequest  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(SigninRequest $request): JsonResponse
    {
        return $this->service->login($request->validated());
    }

    public function reset_password_link()
    {
        // return $this->service->reset_password_link();
    }
}
