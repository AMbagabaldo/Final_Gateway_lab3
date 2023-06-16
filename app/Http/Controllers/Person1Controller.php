<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use App\Services\Person1Service;
use Illuminate\Http\Request; // <-- handling http request in lumen
use App\Traits\ApiResponser; // <-- use to standardized our code for api response



class Person1Controller extends Controller {
    use ApiResponser;
    public $person1service;
    public function __construct(Person1Service $person1Service) {
        $this->person1service = $person1Service;
        }
    

// GET (ID)
public function show($id)
{ 
    return $this->successResponse($this->person1service->obtainUser1($id));
}

// ADD
public function add(Request $request)
{
    return $this->successResponse($this->person1service->createUser1($request->all()));
}

// UPDATE
public function up(Request $request, $id)
{
    return $this->successResponse($this->person1service->editUser1($request->all(), $id));
}

// DELETE

public function del($id)
{
    return $this->successResponse($this->person1service->deleteUser1($id));
}

    // Index

public function index()
    {
        return $this->successResponse($this->person1service->obtainUsers1());
    }
}