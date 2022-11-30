<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Manufacture;
use App\Models\Device;
use DataTables;
use App\Http\Requests\Admin\Manufacture\ManufactureRequest;
class ManufactureController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
       
        if ($request->ajax())
        {
            $data = Manufacture::orderby('id','DESC');

            return Datatables::of($data)
                            ->addIndexColumn()
                            ->addColumn('action', function ($row)
                            {
                             
                                $action = '<span class="action-buttons">
                              
                        <a  href="' . route("manufacture.edit", $row) . '" class="btn btn-sm btn-info btn-b"><i class="las la-pen"></i>
                        </a>

                        <a href="' . route("manufacture.destroy", $row) . '"
                                class="btn btn-sm btn-danger remove_us"
                                title="Delete User"
                                data-toggle="tooltip"
                                data-placement="top"
                                data-method="DELETE"
                                data-confirm-title="Please Confirm"
                                data-confirm-text="Are you sure that you want to delete this?"
                                data-confirm-delete="Yes, delete it!">
                                <i class="las la-trash"></i>
                            </a>
                    ';
                                return $action;
                            })
                            ->rawColumns(['action'])
                            ->make(true);
        }
        return view('admin.manufacture.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.manufacture.addEdit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ManufactureRequest $request)
    {
        $manufacture = Manufacture::create([
            'name'=>$request->name,
            'user_id'=>auth()->user()->id,
        ]);
        if($request->has ('device')){
            foreach ($request->device as $key => $device) {
                Device::create([
                    'name'=>$device,
                    'user_id'=>auth()->user()->id,
                    'manufacture_id'=>  $manufacture->id
                ]);
            }
        }
        return back()->with('success', 'Manufacture addded successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Manufacture $manufacture)
    {

        
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Manufacture $manufacture)
    {
        return view('admin.manufacture.addEdit', compact( 'manufacture'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ManufactureRequest $request, Manufacture $manufacture)
    {

        $manufacture->update([
            'name'=>$request->name,
        ]);
        if($request->has ('device')){
            foreach ($request->device as $key => $device) {
                Device::updateOrCreate([
                    'name'=>$device,
                    'user_id'=>auth()->user()->id,
                    'manufacture_id'=>  $manufacture->id
                ]);
            }
        }
 
        return back()->with('success', 'Manufacture updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manufacture $manufacture)
    {
        Device::where('manufacture_id', $manufacture->id)->delete();
        $manufacture->delete();
        return back()->with('success', 'Manufacture deleted successfully!');
    }
}
