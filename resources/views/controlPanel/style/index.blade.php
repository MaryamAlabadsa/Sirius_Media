@extends('controlPanel.index')
@section('content')

<div class="col-xxl" style="margin: 25px">
    <!-- Example of displaying validation errors in a Blade template -->
    {{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif --}}

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
            <h5 class="mb-0">Section Section</h5>
            <small class="text-muted float-end">Default Label</small>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('style.update') }}" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <input type="hidden" name="json_key" value="style"> <!-- Add this line to include the json_key -->

                {{-- Start First Color --}}
                {{-- <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="first_color">First Color</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="first_color" name="first_color"
                            value="{{old('first_color', $sliderData[0] ?? '') }}" required>
                        @error('first_color')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div> --}}
                {{-- End First Color --}}

                {{-- Start second_color --}}
                {{-- <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="second_color">First Color</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="second_color" name="second_color"
                            value="{{old('second_color', $sliderData[0] ?? '') }}" required>
                        @error('second_color')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div> --}}
                {{-- End second_color --}}

                {{-- Start logo --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="logo">logo</label>
                    <div class="col-sm-10">
                        <input type="file" id="logo" name="logo" accept="image/*" class="form-control" required>
                        @error('logo')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- End logo --}}

                {{-- Start comment_image --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="comment_image">Comment Image</label>
                    <div class="col-sm-10">
                        <input type="file" id="comment_image" name="comment_image" accept="image/*" class="form-control"
                            required>
                        @error('comment_image')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- End comment_image --}}

                {{-- Start contact_image --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="contact_image">Contact Us Image</label>
                    <div class="col-sm-10">
                        <input type="file" id="contact_image" name="contact_image" accept="image/*" class="form-control"
                            required>
                        @error('contact_image')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- End contact_image --}}

                <div class="row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection