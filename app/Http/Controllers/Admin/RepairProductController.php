<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Device;
use App\Models\Repair;
use App\Models\Manufacture;
use App\Models\RepairProduct;
use DataTables;
use App\Http\Requests\Admin\Product\ProductRequest;
class RepairProductController extends Controller
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
            $query = RepairProduct::orderby('id','DESC');
            if(isset($request->id) && !empty($request->id)) {
                if($request->id == 1){
                    $query->where('status','repair');

                }else{
                    $query->where('status','new');

                }
               
            }
            $data= $query->get();
            return Datatables::of($data)
                            ->addIndexColumn()
                            ->addColumn('action', function ($row)
                            {
                             
                                $action = '<span class="action-buttons">
                              
                        <a  href="' . route("product.edit", $row) . '" class="btn btn-sm btn-info btn-b"><i class="las la-pen"></i>
                        </a>

                        <a href="' . route("product.destroy", $row) . '"
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
        return view('admin.repair-product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $manufacture= Manufacture::all();
        // $device= Device::all();
        // $repair= Repair::all();

        return view('admin.repair-product.addEdit',compact('manufacture'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
    
      $input=  $request->only(
        'sale_price',
        'real_price',
        'repair_id',
        'manufacture_id',
        'device_id',
        'title',
        'description',
        'quantity',
        'seo_title','meta_description',
        'status'
        );
        $input['user_id'] = auth()->user()->id;
        if($request->hasFile('image')){
            $attachment_filename = preg_replace('/\s+/', '', $request->image->getClientOriginalName());
            $request->image->move(public_path('/repair-product'), $attachment_filename);
            $input['image'] = $attachment_filename;
        }
        RepairProduct::create($input);
    
        return back()->with('success', 'Product addded successfully!');
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
    public function edit($id)
    {
        $product = RepairProduct::find($id);
        $manufacture= Manufacture::all();
        $device= Device::where('manufacture_id', $product->manufacture_id)->get();
        $repair= Repair::where('device_id',  $product->device_id)->get();
        return view('admin.repair-product.addEdit', compact( 'product','manufacture','device','repair'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $input=  $request->only(
            'sale_price',
            'real_price',
            'repair_id',
            'manufacture_id',
            'device_id',
            'title',
            'description',
            'quantity',
            'seo_title','meta_description',
            'status'
            );
            $input['user_id'] = auth()->user()->id;
            if($request->hasFile('image')){
                $attachment_filename = preg_replace('/\s+/', '', $request->image->getClientOriginalName());
                $request->image->move(public_path('/repair-product'), $attachment_filename);
                $input['image'] = $attachment_filename;
            }
            RepairProduct::find($id)->update($input);
        return back()->with('success', 'Product updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        RepairProduct::find($id)->delete();
        return back()->with('success', 'Product deleted successfully!');
    }
    public function getRepair(Request $request){
        
        $product= Repair::where('device_id',$request->id)->get();
        $output1="<option value=''>Select </option>";
        foreach ($product as $val1) {
            $output1 .= '<option value="' . $val1->id . '">' . $val1->name . '</option>';
        }
        echo $output1;
    }
    public function getDevice(Request $request){
        $product= Device::where('manufacture_id',$request->id)->get();
        $output1="<option value=''>Select </option>";
        foreach ($product as $val1) {
            $output1 .= '<option value="' . $val1->id . '">' . $val1->name . '</option>';
        }
        echo $output1;
    }
}
