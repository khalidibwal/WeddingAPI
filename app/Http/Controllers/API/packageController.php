<?php

namespace App\Http\Controllers\api;
use App\Models\packages;
use App\Helpers\WeddingAPI;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class packageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = packages::all();
        if($data){
            return WeddingAPI::createWeddingApi(200, 'Success', $data);
        }else{
            return WeddingAPI::createWeddingApi(400, 'Failed');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $request->validate([
                'pkg_name' => 'required',
                'price' => 'required'
            ]);
            $packages= packages::create([
                'pkg_name' =>$request->pkg_name,
                'price' =>$request->price
            ]);
            $data = packages::where('id', '=', $packages->id)->get();
            if($data){
                return WeddingAPI::createWeddingApi(200, 'Success', $data);
            }else{
                return WeddingAPI::createWeddingApi(400, 'Failed');
            }
        }
        catch(\Throwable $th){
            //throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
