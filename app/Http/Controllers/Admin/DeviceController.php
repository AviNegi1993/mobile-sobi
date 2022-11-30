<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Device;
use App\Models\Repair;
use DataTables;
use App\Http\Requests\Admin\Manufacture\ManufactureRequest;
class DeviceController extends Controller
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
            $data = Device::orderby('id','DESC');

            return Datatables::of($data)
                            ->addIndexColumn()
                            ->addColumn('action', function ($row)
                            {
                             
                                $action = '<span class="action-buttons">
                              
                        <a  href="' . route("device.edit", $row) . '" class="btn btn-sm btn-info btn-b"><i class="las la-pen"></i>
                        </a>

                        <a href="' . route("device.destroy", $row) . '"
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
                            ->addColumn('manufactures', function ($row)
                            {
                                return isset($row->manufactures->name)?  $row->manufactures->name : '';
                            })
                            ->rawColumns(['action'])
                            ->make(true);
        }
        return view('admin.device.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.device.addEdit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ManufactureRequest $request)
    {
        $manufacture = Device::create([
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
    public function edit(Device $device)
    {
        // echo "<PRE>"; print_r($device);die;
        return view('admin.device.addEdit', compact( 'device'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ManufactureRequest $request, Device $device)
    {
        $device->update([
            'name'=>$request->name,
        ]);
        if($request->has ('repair')){
          
            foreach ($request->repair as $key => $repair) {
             
                Repair::updateOrCreate([
                    'name'=>$repair,
                    'user_id'=>auth()->user()->id,
                    'device_id'=>  $device->id
                ]);
            }
        }
 
        return back()->with('success', 'Device updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Device $device)
    {
        Repair::where('device_id', $device->id)->delete();
        $device->delete();
        return back()->with('success', 'Device deleted successfully!');
    }
}
