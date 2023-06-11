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
            <h5 class="mb-0">Edit Client {{$client->name}}</h5>
            <small class="text-muted float-end">Default Label</small>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('client.update',$client->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                {{-- <input type="hidden" name="json_key" value="slider"> <!-- Add this line to include the json_key -->
                --}}

                {{-- Start title --}}
                {{-- <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="title">Title</label>
                    <div class="col-sm-10">
                        <textarea id="title" name="title" class="form-control">{{ $blog->title }}</textarea>
                        @error('title')
                        <div class="invalid-feedback">{{ $errors->first('title') }}</div>
                        @enderror
                    </div>
                </div> --}}
                {{-- End title --}}

                {{-- Start short_description --}}
                {{-- <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="short_description">Short description</label>
                    <div class="col-sm-10">
                        <textarea id="short_description" name="short_description"
                            class="form-control">{{ $blog->short_description }}</textarea>
                        @error('short_description')
                        <div class="invalid-feedback">{{ $errors->first('short_description') }}</div>
                        @enderror
                    </div>
                </div> --}}
                {{-- End short_description --}}

                {{-- Start description --}}
                {{-- <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="description">description</label>
                    <div class="col-sm-10">
                        <textarea id="description" name="description"
                            class="form-control">{{ $blog->description }}</textarea>
                        @error('description')
                        <div class="invalid-feedback">{{ $errors->first('description') }}</div>
                        @enderror
                    </div>
                </div> --}}
                {{-- End description --}}

                {{-- Start name --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="description">Name</label>
                    <div class="col-sm-10">
                        <input type="text" id="name" name="name" class="form-control" {{ old('name') }}
                            value="{{$client->name}}">
                        @error('name')
                        <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                        @enderror
                    </div>
                </div>
                {{-- End name --}}

                {{-- Start title ar --}}
                {{-- <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="title_ar">Title Arabic</label>
                    <div class="col-sm-10">
                        <textarea id="title_ar" name="title_ar"
                            class="form-control">{{ old('title_ar', $sliderData[1] ?? '') }}</textarea>
                        @error('title_ar')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div> --}}
                {{-- End title ar --}}

                {{-- Start sub title --}}
                {{-- <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="description">Sub Title</label>
                    <div class="col-sm-10">
                        <textarea id="description" name="description"
                            class="form-control">{{ old('description', $sliderData[2] ?? '') }}</textarea>
                        @error('sub_title_en')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div> --}}
                {{-- End sub title --}}

                {{-- Start sub title ar --}}
                {{-- <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="sub_title_ar">Sub Title Arabic</label>
                    <div class="col-sm-10">
                        <textarea id="sub_title_ar" name="sub_title_ar"
                            class="form-control">{{ old('sub_title_ar', $sliderData[3] ?? '') }}</textarea>
                        @error('sub_title_ar')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div> --}}
                {{-- End sub title ar --}}

                {{-- Image 1 field --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="image">Image 1</label>
                    <div class="col-sm-10">
                        <input type="file" id="image" name="image" accept="image/*" class="form-control">
                        @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- End Image 1 field --}}
                <div class="row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection