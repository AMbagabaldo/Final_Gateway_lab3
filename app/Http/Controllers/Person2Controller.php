<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use App\Services\Person2Service;
use Illuminate\Http\Request; // <-- handling http request in lumen
use App\Traits\ApiResponser; // <-- use to standardized our code for api response



class Person2Controller extends Controller {
    use ApiResponser;
    public $person2service;
    public function __construct(Person2Service $person2Service) {
        $this->person2service = $person2Service;
        }
    

// GET (ID)
public function show($id)
{ 
    return $this->successResponse($this->person2service->obtainUser1($id));
}

// ADD
public function add(Request $request)
{
    return $this->successResponse($this->person2service->createUser1($request->all()));
}

// UPDATE
public function up(Request $request, $id)
{
    return $this->successResponse($this->person2service->editUser1($request->all(), $id));
}

// DELETE

public function del($id)
{
    return $this->successResponse($this->person2service->deleteUser1($id));
}

    // Index

public function index()
    {
        return $this->successResponse($this->person2service->obtainUsers1());
    }
}