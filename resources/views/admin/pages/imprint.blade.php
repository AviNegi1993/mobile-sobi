@extends('admin.layouts.app')
@section('content')

<div class="container-fluid">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">Imprint</h4><span class="text-muted mt-1 tx-13 ms-2 mb-0">/ {{isset($manufacture) ? $manufacture->email : 'Add New' }}</span>
            </div>
        </div>
       

    </div>
    <!-- breadcrumb -->
    <!--Row-->
    <!-- row -->
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="main-content-label mg-b-5">
                        {{isset($page) ? 'Update': 'Add New' }}
                    </div>


                    <!--  start  -->
                    <form  id="page-add-edit" action="{{isset($page) ? route('storeTerm',$page->id) : route('storeTerm')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{ isset($page) ? method_field('PUT'):'' }}
                        <div class="pd-sm-40 bg-gray-200">
                        <div class="col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4> Details</h4>
                                        <div class="row row-xs align-items-center mg-b-20">
                                            <div class="col-md-4">
                                                <label class="form-label mg-b-0">Title</label>
                                            </div>
                                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                                <input class="form-control" name="title" placeholder="Enter page title" type="text" value="{{isset($page) ? $page->title : '' }}">
                                                <input type="hidden" name="id" value="{{isset($page) ? $page->id : '' }}">
                                                <input type="hidden" name="type" value="imprint">
                                            </div>
                                        </div>
                                        <div class="row row-xs align-items-center mg-b-20">
                                            <div class="col-md-4">
                                                <label class="form-label mg-b-0">Description</label>
                                            </div>
                                            <div class="col-md-8 mg-t-5 mg-md-t-0">
                                                <textarea name="description" id="" cols="30" rows="10">{{isset($page) ? $page->description : '' }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             </div>
                       
                  
                            <button class="btn btn-main-primary pd-x-30 mg-r-5 mg-t-5" type="submit">{{isset($page) ? 'Update' : 'Save' }}</button>
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

{!! JsValidator::formRequest('App\Http\Requests\Admin\Page\PageRequest','#page-add-edit') !!}
<!-- summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script>
        $('textarea').summernote({
    
    height: 400
    });
</script>
@endsection


