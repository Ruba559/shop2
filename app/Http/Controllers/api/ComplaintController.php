<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Complaint;
use App\Http\Resources\ComplaintResource;

class ComplaintController extends Controller
{

    public function getComplaintByUserId($id)
    {
        return ComplaintResource::collection(Complaint::ComplaintByUserId($id));
    }

    
    public function getComplaintByProductId($id)
    {
        return ComplaintResource::collection(Complaint::ComplaintByProductId($id));
    }


    public function index()
    {
        return ComplaintResource::collection(Complaint::paginate(3));
    }

    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

   
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
