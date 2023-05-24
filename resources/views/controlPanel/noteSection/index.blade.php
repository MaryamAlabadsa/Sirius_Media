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
                <form method="POST" action="{{ route('note.update') }}" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <input type="hidden" name="json_key" value="note"> <!-- Add this line to include the json_key -->

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

