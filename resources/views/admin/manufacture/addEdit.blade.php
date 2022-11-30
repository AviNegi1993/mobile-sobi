@extends('admin.layouts.app')
@section('content')

<div class="container-fluid">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Manufacture</h4><span class="text-muted mt-1 tx-13 ms-2 mb-0">/ {{isset($manufacture) ? $manufacture->email : 'Add New' }}</span>
            </div>
        </div>
        <a class="btn btn-main-primary ml_auto" style="margin-left: 740px;" href="{{ route('manufacture.index',['id'=> 0]) }}">View Manufacture</a>
      

    </div>
    <!-- breadcrumb -->
    <!--Row-->
    <!-- row -->
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        {{isset($manufacture) ? 'Update': 'Add New' }}
                    </div>


                    <!--  start  -->
                    <form  id="manufacture-add-edit" action="{{isset($manufacture) ? route('manufacture.update',$manufacture->id) : route('manufacture.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{ isset($manufacture) ? method_field('PUT'):'' }}
                        <div class="pd-sm-40 bg-gray-200">
                        <div class="col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4>Manufacture Details</h4>
                                        <div class="row row-xs align-items-center mg-b-20">
                                            <div class="col-md-4">
                                                <label class="form-label mg-b-0">Manufacture Name</label>
                                            </div>
                                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                                <input class="form-control" name="name" placeholder="Enter manufacture name" type="text" value="{{isset($manufacture) ? $manufacture->name : '' }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             </div>
                        <div class="col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4>Device Details</h4>
                                        <div class="row row-xs align-items-center mg-b-20">
                                            <div class="col-md-4">
                                                <label class="form-label mg-b-0">Device Name</label>
                                            </div>
                                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                                <button  type="button" class="btn btn-info  add-multiple-device">Add Multiple Device </button>
                                            </div>
                                        </div>
                                        <div class="multiple-device">
                                        @if(isset($manufacture) &&  $manufacture->devices->count())
                                            @foreach($manufacture->devices as $device)
                                            <div class="row row-xs align-items-center mg-b-20 removed-device">
                                                            <div class="col-md-4">
                                                            </div>
                                                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                                                <input type="text" name="device[]" class="form-control" placeholder="Enter device name" value="{{isset($device) ? $device->name : '' }}">
                                                                <i class="las la-trash remove-device"></i>
                                                            </div>
                                                        </div>
                                            @endforeach
                                        @endif
                                        </div>
                                    </div>
                                </div>
                             </div>
                        </div>
                  
                            <button class="btn btn-main-primary pd-x-30 mg-r-5 mg-t-5" type="submit">{{isset($manufacture) ? 'Update' : 'Save' }}</button>
                        </div>
                </div>
                </form>
                <!-- form end  -->
            </div>
        </div>
    </div>
    <!-- /row -->
</div>


@endsection


@section('scripts')

{!! JsValidator::formRequest('App\Http\Requests\Admin\Manufacture\ManufactureRequest','#manufacture-add-edit') !!}

<script>
    $(document).ready(function(){
        $(".add-multiple-device").click(function(){
            var html=`
            <div class="row row-xs align-items-center mg-b-20">
                <div class="col-md-4">
                </div>
                <div class="col-md-8 mg-t-5 mg-md-t-0">
                    <input type="text" name="device[]" class="form-control" placeholder="Enter device name">
                </div>
            </div>
            `;
            $('.multiple-device').append(html);
        });
        $(".remove-device").click(function(){
            if (confirm("Are you sure?")) {
                $(this).parents('.removed-device').remove()
            }
            return false;
         
        });
});
</script>
@endsection


