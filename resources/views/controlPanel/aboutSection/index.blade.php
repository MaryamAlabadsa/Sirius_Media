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


        <div class="card-body">
            <form method="POST" action="{{ route('about.update') }}" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <input type="hidden" name="json_key" value="about">

                {{-- Start title1 --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="title1_en">Title 1 (English)</label>
                    <div class="col-sm-10">
                        <textarea id="title1_en" name="title1_en"
                                  class="form-control">{{ old('title1_en', $aboutData[0] ?? '') }}</textarea>
                    </div>
                </div>
                {{-- End title1 --}}

                {{-- Start sub title1 --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="sub_title1_en">Sub Title 1 (English)</label>
                    <div class="col-sm-10">
                        <textarea id="sub_title1_en" name="sub_title1_en"
                                  class="form-control">{{ old('sub_title1_en', $aboutData[1] ?? '') }}</textarea>
                    </div>
                </div>
                {{-- End sub title1 --}}

                {{-- Start title1_ar1 --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="title1_ar1">Title 1 (Arabic)</label>
                    <div class="col-sm-10">
                        <textarea id="title1_ar1" name="title1_ar1"
                                  class="form-control">{{ old('title1_ar1', $aboutData[2] ?? '') }}</textarea>
                    </div>
                </div>
                {{-- End title1_ar1 --}}

                {{-- Start sub title1_ar1 --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="sub_title1_ar1">Sub Title 1 (Arabic)</label>
                    <div class="col-sm-10">
                        <textarea id="sub_title1_ar1" name="sub_title1_ar1"
                                  class="form-control">{{ old('sub_title1_ar1', $aboutData[3] ?? '') }}</textarea>
                    </div>
                </div>
                {{-- End sub title1_ar1 --}}

                {{-- Start title2 --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="title2_en">Title 2 (English)</label>
                    <div class="col-sm-10">
                        <textarea id="title2_en" name="title2_en"
                                  class="form-control">{{ old('title2_en', $aboutData[4] ?? '') }}</textarea>
                    </div>
                </div>
                {{-- End title2 --}}

                {{-- Start sub title2 --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="sub_title2_en">Sub Title 2 (English)</label>
                    <div class="col-sm-10">
                        <textarea id="sub_title2_en" name="sub_title2_en"
                                  class="form-control">{{ old('sub_title2_en', $aboutData[5] ?? '') }}</textarea>
                    </div>
                </div>
                {{-- End sub title2 --}}

                {{-- Start title2_ar1 --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="title2_ar1">Title 2 (Arabic)</label>
                    <div class="col-sm-10">
                        <textarea id="title2_ar1" name="title2_ar1"
                                  class="form-control">{{ old('title2_ar1', $aboutData[6] ?? '') }}</textarea>
                    </div>
                </div>
                {{-- End title2_ar1 --}}

                {{-- Start sub title2_ar1 --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="sub_title2_ar1">Sub Title 2 (Arabic)</label>
                    <div class="col-sm-10">
                        <textarea id="sub_title2_ar1" name="sub_title2_ar1"
                                  class="form-control">{{ old('sub_title2_ar1', $aboutData[7] ?? '') }}</textarea>
                    </div>
                </div>
                {{-- End sub title2_ar1 --}}

                {{-- Start title3 --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="title3_en">Title 3 (English)</label>
                    <div class="col-sm-10">
                        <textarea id="title3_en" name="title3_en"
                                  class="form-control">{{ old('title3_en', $aboutData[8] ?? '') }}</textarea>
                    </div>
                </div>
                {{-- End title3 --}}

                {{-- Start sub title3 --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="sub_title3_en">Sub Title 3 (English)</label>
                    <div class="col-sm-10">
                        <textarea id="sub_title3_en" name="sub_title3_en"
                                  class="form-control">{{ old('sub_title3_en', $aboutData[9] ?? '') }}</textarea>
                    </div>
                </div>
                {{-- End sub title3 --}}

                {{-- Start title3_ar1 --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="title3_ar1">Title 3 (Arabic)</label>
                    <div class="col-sm-10">
                        <textarea id="title3_ar1" name="title3_ar1"
                                  class="form-control">{{ old('title3_ar1', $aboutData[10] ?? '') }}</textarea>
                    </div>
                </div>
                {{-- End title3_ar1 --}}

                {{-- Start sub title3_ar1 --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="sub_title3_ar1">Sub Title 3 (Arabic)</label>
                    <div class="col-sm-10">
                        <textarea id="sub_title3_ar1" name="sub_title3_ar1"
                                  class="form-control">{{ old('sub_title3_ar1', $aboutData[11] ?? '') }}</textarea>
                    </div>
                </div>
                {{-- End sub title3_ar1 --}}

                {{-- Image 1 field --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="image1">Image 1</label>
                    <div class="col-sm-10">
                        <input type="file" id="image1" name="image1" accept="image/*" class="form-control">
                        @error('image1')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- End Image 1 field --}}

                {{-- Image 2 field --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="image2">Image 2</label>
                    <div class="col-sm-10">
                        <input type="file" id="image2" name="image2" accept="image/*" class="form-control">
                        @error('image2')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- End Image 2 field --}}

                {{-- Section title field --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="section_title_en">Section Title (English)</label>
                    <div class="col-sm-10">
                        <textarea id="section_title_en" name="section_title_en"
                                  class="form-control">{{ old('section_title_en', $aboutData[14] ?? '') }}</textarea>
                    </div>
                </div>
                {{-- End Section title field --}}

                {{-- Section title_ar1 field --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="section_title_ar1">Section Title (Arabic)</label>
                    <div class="col-sm-10">
                        <textarea id="section_title_ar1" name="section_title_ar1"
                                  class="form-control">{{ old('section_title_ar1', $aboutData[15] ?? '') }}</textarea>
                    </div>
                </div>
                {{-- End Section title_ar1 field --}}

                <div class="row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>


    </div>
@endsection

