<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Services\User\UserService;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function createUser(CreateUserRequest $request)
    {
        try {
            $userData = $request->validated();

            $user = $this->userService->createUser($userData);

            return response()->json(['user' => $user], 201);
        } catch (QueryException $e) {
            return response()->json(['error' => 'Erro ao criar o usuário.'], 500);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Erro interno do servidor.'], 500);
        }
    }
}

