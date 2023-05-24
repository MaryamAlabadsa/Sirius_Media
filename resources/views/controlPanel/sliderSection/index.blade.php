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
                <h5 class="mb-0">Slider Section</h5>
                <small class="text-muted float-end">Default Label</small>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('slider.update') }}" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <input type="hidden" name="json_key" value="slider"> <!-- Add this line to include the json_key -->

                    {{-- Start title --}}
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="title_en">Title</label>
                        <div class="col-sm-10">
                        <textarea id="title_en" name="title_en"
                                  class="form-control">{{ old('title_en', $sliderData[0] ?? '') }}</textarea>
                            @error('title_en')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    {{-- End title --}}
                    {{-- Start title ar --}}
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="title_ar">Title Arabic</label>
                        <div class="col-sm-10">
                        <textarea id="title_ar" name="title_ar"
                                  class="form-control">{{ old('title_ar', $sliderData[1] ?? '') }}</textarea>
                            @error('title_ar')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    {{-- End title ar --}}

                    {{-- Start sub title --}}
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="sub_title_en">Sub Title</label>
                        <div class="col-sm-10">
                        <textarea id="sub_title_en" name="sub_title_en"
                                  class="form-control">{{ old('sub_title_en', $sliderData[2] ?? '') }}</textarea>
                            @error('sub_title_en')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    {{-- End sub title --}}

                    {{-- Start sub title ar --}}
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="sub_title_ar">Sub Title Arabic</label>
                        <div class="col-sm-10">
                        <textarea id="sub_title_ar" name="sub_title_ar"
                                  class="form-control">{{ old('sub_title_ar', $sliderData[3] ?? '') }}</textarea>
                            @error('sub_title_ar')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    {{-- End sub title ar --}}

                    {{-- Video upload field --}}
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="video_upload">Video</label>
                        <div class="col-sm-10">
                            <input type="file" id="video_upload" name="video_upload" accept="video/*"
                                   class="form-control">
                            @error('video_upload')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    {{-- End video upload field --}}
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


