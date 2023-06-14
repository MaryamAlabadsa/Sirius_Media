@extends('controlPanel.index')

@section('content')

<div class="col-xxl" style="margin: 25px">
    <!-- Example of displaying validation errors in a Blade template -->
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif


    <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">EDIT PRICING </h5>
            <small class="text-muted float-end">Default Label</small>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('pricing.update',$pricing->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="json_key" value="slider"> <!-- Add this line to include the json_key -->

                {{-- Start name_en --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="name_en">English Name</label>
                    <div class="col-sm-10">
                        <textarea id="name_en" name="name_en" class="form-control">{{$pricing->name_en}}</textarea>
                        @error('name_en')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- End name_en --}}

                {{-- Start name_ar --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="name_ar">Arabic Name</label>
                    <div class="col-sm-10">
                        <textarea id="name_ar" name="name_ar" class="form-control">{{$pricing->name_ar}}</textarea>
                        @error('name_ar')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- End name_ar --}}

                {{-- Start description_en --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="description_en">English Description</label>

                    <div class="col-sm-10">
                        <textarea name="description_en" class="form-control">{{$pricing->description_en}}</textarea>
                    </div>
                </div>
                {{-- End description_en --}}

                {{-- Start description_ar --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="description_ar">Arabic Description</label>

                    <div class="col-sm-10">
                        <textarea name="description_ar" class="form-control">{{$pricing->description_ar}}</textarea>

                    </div>
                </div>
                {{-- End description_ar --}}

                {{-- Start price --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="price">Price</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="price" name="price" value="{{$pricing->price}}"
                            required>

                    </div>
                </div>
                {{-- End price --}}

                <div class="row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">EDIT</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $('#summernote').summernote({
        placeholder: 'project details',
        tabsize: 2,
        height: 100
    });
</script>

@endsection