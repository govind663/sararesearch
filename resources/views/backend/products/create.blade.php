@extends('backend.layouts.master')

@section('title')
SARA Research & Development Center Pvt. Ltd. | Add Product
@endsection

@push('styles')
<style>
    .custom-checkbox {
        width: 18px;
        height: 18px;
    }
    .checkbox-container {
        display: flex;
        align-items: center;
        gap: 5px; /* Adjust spacing */
    }
</style>
@endpush

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h4>Add Product</h4>
                    </div>
                    <div class="col-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('admin.dashboard') }}">
                                    <svg class="stroke-icon">
                                        <use href="{{ asset('backend/assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                                    </svg>
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('product.index') }}">Products</a>
                            </li>
                            <li class="breadcrumb-item active">Add Product</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body add-post">
                            <form method="POST" action="{{ route('product.store') }}" class="form-horizontal" enctype="multipart/form-data">
                                @csrf

                                <div class="pd-20 card-box mb-30">

                                    <div class="form-group row mt-3">
                                        <label class="col-sm-2"><b>Product Name : <span class="text-danger">*</span></b></label>
                                        <div class="col-sm-4 col-md-4">
                                            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="Enter Product Name.">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <label class="col-sm-2"><b>Product Slug : <span class="text-danger">*</span></b></label>
                                        <div class="col-sm-4 col-md-4">
                                            <input type="text" name="slug" id="slug" readonly class="form-control @error('slug') is-invalid @enderror" value="{{ old('slug') }}" placeholder="Enter Product Slug.">
                                            @error('slug')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>                                    

                                    <h4 class="mt-3">Industry Permissions</h4>
                                    <div class="form-group row mt-3">
                                        <div class="col-md-12 d-flex flex-wrap align-items-center gap-3">
                                            @foreach($industries as $industry)
                                                <div class="d-flex align-items-center me-4">
                                                    <label class="me-2"><b>{{ $industry->name }}</b></label>
                                                    <input type="checkbox" class="custom-checkbox" name="permissions[{{ $industry->id }}][view]" value="1">
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>                                    

                                    <div class="form-group row mt-4">
                                        <label class="col-md-3"></label>
                                        <div class="col-md-9" style="display: flex; justify-content: flex-end;">
                                            <a href="{{ route('product.index') }}" class="btn btn-danger"><b>Cancel</b></a>&nbsp;&nbsp;
                                            <button type="submit" class="btn btn-success"><b>Submit</b></button>
                                        </div>
                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
@endsection

@push('scripts')
{{-- Slug Generation --}}
<script>
    document.getElementById('name').addEventListener('input', function () {
        const name = this.value;
        const slug = name
            .toLowerCase()
            .replace(/[^a-z0-9\s-]/g, '') // Remove invalid characters
            .trim()                       // Remove whitespace from both sides
            .replace(/\s+/g, '-');        // Replace spaces with dashes
        document.getElementById('slug').value = slug;
    });
</script>
@endpush
