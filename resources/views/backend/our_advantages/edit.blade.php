@extends('backend.layouts.master')

@section('title')
SARA Research & Development Center Pvt. Ltd. | Edit Our Advantage
@endsection

@push('styles')
@endpush

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-6">
                        <h4>Edit Our Advantage</h4>
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
                                <a href="{{ route('our-advantages.index') }}">Our Advantage</a>
                            </li>
                            <li class="breadcrumb-item active">Edit Our Advantage</li>
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
                            <form method="POST" action="{{ route('our-advantages.update', $advantages->id) }}" class="form-horizontal" enctype="multipart/form-data">
                                @csrf
                                @method('PATCH')

                                <input type="text" id="id" name="id" hidden  value="{{ $advantages->id }}">

                                <div class="pd-20 card-box mb-30">
                                    <div class="form-group row mt-3">
                                        <label class="col-sm-2"><b>Title : <span class="text-danger">*</span></b></label>
                                        <div class="col-sm-10 col-md-10">
                                            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $advantages->title) }}" placeholder="Enter Title.">
                                            @error('title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mt-3">
                                        <label class="col-sm-2"><b>Description : <span class="text-danger">*</span></b></label>
                                        <div class="col-sm-10 col-md-10">
                                            <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" placeholder="Enter Description" value="{{ old('description', $advantages->description) }}">{{ old('description', $advantages->description) }}</textarea>
                                            @error('description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row mt-3 p-3">
                                        <table class="table table-bordered p-3" id="dynamicAmenitiesTable">
                                            <thead>
                                                <tr>
                                                    <th><b>Advantages Title: <span class="text-danger">*</span></b></th>
                                                    <th><b>Advantages Description: <span class="text-danger">*</span></b></th>
                                                    <th><b>Action</b></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(!empty($advantages->advantages_title))
                                                    @foreach($advantages->advantages_title as $index => $title)
                                                        <tr>
                                                            <td>
                                                                <input type="text" id="advantages_title_{{ $index }}" name="advantages_title[]" class="form-control @error("advantages_title.$index") is-invalid @enderror" value="{{ $title }}">
                                                                @error("advantages_title.$index")
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </td>
                                                            <td>
                                                                <textarea id="advantages_description_{{ $index }}" name="advantages_description[]" class="form-control @error("advantages_description.$index") is-invalid @enderror">{{ $advantages->advantages_description[$index] ?? '' }}</textarea>
                                                                @error("advantages_description.$index")
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-danger removeRow"><b>Remove</b></button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <td>
                                                            <input type="text" id="advantages_title_0" name="advantages_title[]" class="form-control @error('advantages_title.0') is-invalid @enderror" value="{{ old('advantages_title.0') }}">
                                                            @error("advantages_title.0")
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </td>
                                                        <td>
                                                            <textarea id="advantages_description_0" name="advantages_description[]" class="form-control @error('advantages_description.0') is-invalid @enderror">{{ old('advantages_description.0') }}</textarea>
                                                            @error("advantages_description.0")
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                            @enderror
                                                        </td>
                                                        <td>
                                                            <button type="button" class="btn btn-primary" id="addRow"><b>Add More</b></button>
                                                        </td>
                                                    </tr>
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="form-group row mt-4">
                                        <label class="col-md-3"></label>
                                        <div class="col-md-9" style="display: flex; justify-content: flex-end;">
                                            <a href="{{ route('our-advantages.index') }}" class="btn btn-danger"><b>Cancel</b></a>&nbsp;&nbsp;
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
{{-- Summernote Editor --}}
<script>
    $(document).ready(function() {
        $('#description').summernote({
            placeholder: 'Enter Description',
            tabsize: 2,
            height: 100,
        });
    });
</script>

{{-- Dynamic Amenities Table --}}
<script>
    $(document).ready(function () {
        let rowId = $('table#dynamicAmenitiesTable tbody tr').length;

        // Add new row
        $('#addRow').click(function () {
            rowId++;
            const newRow = `
                <tr>
                    <td>
                        <input type="text" id="advantages_title_${rowId}" name="advantages_title[]" class="form-control">
                    </td>
                    <td>
                        <textarea id="advantages_description_${rowId}" name="advantages_description[]" class="form-control"></textarea>
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger removeRow">Remove</button>
                    </td>
                </tr>`;
            $('#dynamicAmenitiesTable tbody').append(newRow);
        });

        // Remove row
        $(document).on('click', '.removeRow', function () {
            $(this).closest('tr').remove();
        });
    });
</script>
@endpush
