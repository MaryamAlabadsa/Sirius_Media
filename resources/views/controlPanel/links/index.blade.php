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
            <h5 class="mb-0">Link Section</h5>
            <small class="text-muted float-end">Default Label</small>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('link.update') }}" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <input type="hidden" name="json_key" value="link"> <!-- Add this line to include the json_key -->

                {{-- Start facebook --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="facebook_link">Facebook Link</label>
                    <div class="col-sm-10">
                        <textarea id="facebook_link" name="facebook_link"
                            class="form-control">{{ old('facebook_link', $sliderData[0] ?? '') }}</textarea>
                        @error('facebook_link')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- End facebook --}}

                {{-- Start twitter_link --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="twitter_link">Twitter Link</label>
                    <div class="col-sm-10">
                        <textarea id="twitter_link" name="twitter_link"
                            class="form-control">{{ old('twitter_link', $sliderData[0] ?? '') }}</textarea>
                        @error('twitter_link')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- End facebook --}}

                {{-- Start behance_link --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="behance_link">Behance Link</label>
                    <div class="col-sm-10">
                        <textarea id="behance_link" name="behance_link"
                            class="form-control">{{ old('behance_link', $sliderData[0] ?? '') }}</textarea>
                        @error('behance_link')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- End behance_link --}}

                {{-- Start whatsapp_link --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="whatsapp_link">Whatsapp Link</label>
                    <div class="col-sm-10">
                        <textarea id="whatsapp_link" name="whatsapp_link"
                            class="form-control">{{ old('whatsapp_link', $sliderData[0] ?? '') }}</textarea>
                        @error('whatsapp_link')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- End whatsapp_link --}}

                {{-- Start dribbble_link --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="dribbble_link">Dribbble Link</label>
                    <div class="col-sm-10">
                        <textarea id="dribbble_link" name="dribbble_link"
                            class="form-control">{{ old('dribbble_link', $sliderData[0] ?? '') }}</textarea>
                        @error('dribbble_link')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- End dribbble_link --}}

                {{-- Start instegram_link --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="instegram_link">Instegram Link</label>
                    <div class="col-sm-10">
                        <textarea id="instegram_link" name="instegram_link"
                            class="form-control">{{ old('instegram_link', $sliderData[0] ?? '') }}</textarea>
                        @error('instegram_link')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- End instegram_link --}}

                {{-- Start linkedin_link --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="linkedin_link">Linkedin Link</label>
                    <div class="col-sm-10">
                        <textarea id="linkedin_link" name="linkedin_link"
                            class="form-control">{{ old('facebook_link', $sliderData[0] ?? '') }}</textarea>
                        @error('linkedin_link')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- End linkedin_link --}}


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