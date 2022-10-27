<?php

namespace App\Http\Controllers\api;
use App\Models\user_data;
use App\Models\catering;
use App\Helpers\WeddingAPI;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class cateringController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = catering::Join('wo_desc','wo_desc.id','=','catering.wo_desc_id')
        ->Join('users','users.id','=','catering.users_id')
        ->Join('category','category.id','=','catering.ctg_id')
        ->Join('packages','packages.id','=','catering.pkg_id')
        ->select('catering.*','users.name','wo_desc.wo_name')
        ->with(['package_data','category_data'])
        ->get();
        // $data = catering::find(1);
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
                'ctr_name' => 'required',
                'wo_desc_id' => 'required',
                'users_id' => 'required',
                'ctg_id' => 'required',
                'pkg_id' => 'required'
            ]);
            $catering= catering::create([
                'ctr_name' =>$request->ctr_name,
                'wo_desc_id' =>$request->wo_desc_id,
                'users_id' =>$request->users_id,
                'ctg_id' =>$request->ctg_id,
                'pkg_id' =>$request->pkg_id,
            ]);
            $data = catering::where('id', '=', $catering->id)->get();
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
