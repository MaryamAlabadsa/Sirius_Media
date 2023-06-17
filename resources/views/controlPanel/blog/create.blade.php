@extends('controlPanel.index')

@section('content')

<div class="col-xxl" style="margin: 25px">
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
            <h5 class="mb-0">CREATE Blog</h5>
            <small class="text-muted float-end">Default Label</small>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('blog.store') }}" enctype="multipart/form-data">
                @csrf
                {{-- @method('POST') --}}
                <input type="hidden" name="json_key" value="slider"> <!-- Add this line to include the json_key -->

                {{-- Start title --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="title">Title</label>
                    <div class="col-sm-10">
                        <textarea id="title" name="title" class="form-control">{{ old('title') }}</textarea>
                        @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- End title --}}

                {{-- Start short_description --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="short_description">Short description</label>
                    <div class="col-sm-10">
                        <textarea id="short_description" name="short_description"
                            class="form-control">{{ old('short_description') }}</textarea>
                        @error('short_description')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- End short_description --}}

                {{-- Start description --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="description">description</label>
                    <div class="col-sm-10">
                        <textarea id="description" name="description"
                            class="form-control">{{ old('description') }}</textarea>
                        @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- End description --}}

                {{-- Start completed_time --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="description">completed time</label>
                    <div class="col-sm-10">
                        <input type="date" id="completed_time" name="completed_time" class="form-control" {{
                            old('completed_time') }}>
                        @error('completed_time')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- End completed_time --}}

                {{-- Image 1 field --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="image">Image 1</label>
                    <div class="col-sm-10">
                        <input type="file" id="image" name="image" accept="image/*" class="form-control" required>
                        @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- End Image 1 field --}}
                <div class="row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">CREATE</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection