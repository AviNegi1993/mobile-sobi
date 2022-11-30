@extends('admin.layouts.app')
@section('content')

<div class="container-fluid">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Product</h4><span class="text-muted mt-1 tx-13 ms-2 mb-0">/ {{isset($product) ? $product->id : 'Add New' }}</span>
            </div>
        </div>
        <a class="btn btn-main-primary ml_auto" style="margin-left: 740px;" href="{{ route('product.index') }}">View Product</a>
      

    </div>
    <!-- breadcrumb -->
    <!--Row-->
    <!-- row -->
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        {{isset($product) ? 'Update': 'Add New' }}
                    </div>


                    <!--  start  -->
                    <form  id="product-add-edit" action="{{isset($product) ? route('product.update',$product->id) : route('product.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{ isset($product) ? method_field('PUT'):'' }}
                        <div class="pd-sm-40 bg-gray-200">
                        <div class="col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4>Product Details</h4>
                                        <div class="row row-xs align-items-center mg-b-20">
                                            <div class="col-md-4">
                                                <label class="form-label mg-b-0">Title</label>
                                            </div>
                                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                                <input class="form-control" name="title" placeholder="Enter product name" type="text" value="{{isset($product) ? $product->title : '' }}">
                                            </div>
                                        </div>
                                        <div class="row row-xs align-items-center mg-b-20">
                                            <div class="col-md-4">
                                                <label class="form-label mg-b-0">Description</label>
                                            </div>
                                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                            <textarea name="description" class="form-control"  id="hiddenDescription">{{isset($product) ? $product->description : '' }}</textarea>
                                            </div>
                                        </div>
                                        <div class="row row-xs align-items-center mg-b-20">
                                            <div class="col-md-4">
                                                <label class="form-label mg-b-0">Feature Image</label>
                                            </div>
                                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                                @if(!empty($product->image))
                                                <input type="file" class="dropify" data-default-file="{{URL::asset('repair-product')}}/{{$product->image}}"   name="image"  id="image">
                                                @else
                                                <input type="file" class="dropify"  name="image"   id="image">
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row row-xs align-items-center mg-b-20">
                                            <div class="col-md-4">
                                                <label class="form-label mg-b-0">Product Type</label>
                                            </div>
                                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                            <select name="status" class="form-control product-type" >
                                                <option value="">Select Below</option>
                                                <option value="new" {{ (isset($product) && $product->status  == 'new') ? 'selected' : '' }}>New Product</option>
                                                <option value="repair" {{ (isset($product) && $product->status  == 'repair') ? 'selected' : '' }}>Repair Product</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="repair-section">
                                            <div class="row row-xs align-items-center mg-b-20">
                                                <div class="col-md-4">
                                                    <label class="form-label mg-b-0">Manufacture</label>
                                                </div>
                                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                                    <select name="manufacture_id"  class="form-control manufacture">
                                                        <option value="">Select Below</option>
                                                        @foreach($manufacture as $manufactur)
                                                        <option {{ (isset($product) && $product->manufacture_id  == $manufactur->id) ? 'selected' : '' }}  value="{{$manufactur->id}}">  {{$manufactur->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row row-xs align-items-center mg-b-20">
                                                <div class="col-md-4">
                                                    <label class="form-label mg-b-0">Device</label>
                                                </div>
                                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                                    <select name="device_id"  class="form-control device" >
                                                    <option value="">Select Below</option>
                                                    @if(isset($device))
                                                        @foreach($device as $dev)
                                                        <option {{ (isset($product) && $product->device_id  == $dev->id) ? 'selected' : '' }}  value="{{$dev->id}}">  {{$dev->name}}</option>
                                                        @endforeach
                                                    @endif
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row row-xs align-items-center mg-b-20">
                                                <div class="col-md-4">
                                                    <label class="form-label mg-b-0">Repair</label>
                                                </div>
                                                <div class="col-md-8 mg-t-5 mg-md-t-0">
                                                    <select name="repair_id"  class="form-control repair">
                                                    <option value="">Select Below</option>
                                                    @if(isset($repair))
                                                        @foreach($repair as $rep)
                                                        <option {{ (isset($product) && $product->repair_id  == $rep->id) ? 'selected' : '' }}  value="{{$rep->id}}">  {{$rep->name}}</option>
                                                        @endforeach
                                                    @endif
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             </div>
                             <div class="col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4>Pricing</h4>
                                        <div class="row row-xs align-items-center mg-b-20" >
                                            <div class="col-md-4">
                                                <label class="form-label mg-b-0">Regular price ($)</label>
                                            </div>
                                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                                <input class="form-control" name="real_price" value="{{isset($product) ? $product->real_price : '' }}" type="number" >
                                            </div>
                                        </div>
                                        <div class="row row-xs align-items-center mg-b-20" >
                                            <div class="col-md-4">
                                                <label class="form-label mg-b-0">Sale Price ($)</label>
                                            </div>
                                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                                <input class="form-control" name="sale_price" value="{{isset($product) ? $product->sale_price : '' }}" type="number" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4>Inventory</h4>
                                    
                                        <div class="row row-xs align-items-center mg-b-20" >
                                            <div class="col-md-4">
                                                <label class="form-label mg-b-0">Stock quantity</label>
                                            </div>
                                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                                <input class="form-control" name="quantity" value="{{isset($product) ? $product->quantity : '' }}" type="number" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4>SEO</h4>
                                        <div class="row row-xs align-items-center mg-b-20" >
                                            <div class="col-md-4">
                                                <label class="form-label mg-b-0">SEO TITLE</label>
                                            </div>
                                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                                <input class="form-control" name="seo_title" value="{{isset($product) ? $product->seo_title : '' }}" type="text" placeholder="Enter your seo title">
                                            </div>
                                        </div>
                                        <div class="row row-xs align-items-center mg-b-20" >
                                            <div class="col-md-4">
                                                <label class="form-label mg-b-0">Meta Description</label>
                                            </div>
                                            <div class="col-md-8 mg-t-5 mg-md-t-0">

                                                <input class="form-control" name="meta_description" value="{{isset($product) ? $product->meta_description : '' }}" type="text" placeholder="Enter your meta description" >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-main-primary pd-x-30 mg-r-5 mg-t-5" type="submit">{{isset($product) ? 'Update' : 'Save' }}</button>
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

{!! JsValidator::formRequest('App\Http\Requests\Admin\Product\ProductRequest','#product-add-edit') !!}
<!-- summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script>
    $(document).ready(function(){
        let status = "{{isset($product) ? $product->status : ''}}";
       
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.repair-section').hide();
    $('.manufacture').change(function() {
        if ($(this).val() != '') {
            
            var id = $(this).val();
            $.ajax({
                url: "{{ route('getDevice') }}",
                method: "post",
                data: {
                    id: id,
                },
                success: function(result) {
                    $('.device').html(result);
                }

            });
        }
    });
    $('.device').change(function() {
        if ($(this).val() != '') {
            
            var id = $(this).val();
            $.ajax({
                url: "{{ route('getRepair') }}",
                method: "post",
                data: {
                    id: id,
                },
                success: function(result) {
                    $('.repair').html(result);
                }
            });
        }
    });
    $('.product-type').change(function() {
        if ($(this).val() == 'repair') {
          $('.repair-section').show();
        }else{
            $('.repair-section').hide();
        }
    });
    $('textarea').summernote({
    
             height: 400
             });
             if(status == 'repair'){
                $('.repair-section').show();
             }
});
</script>
@endsection


