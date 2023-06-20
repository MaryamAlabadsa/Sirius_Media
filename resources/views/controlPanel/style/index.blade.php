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
            <form method="POST" action="{{ route('privacy.update') }}" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <input type="hidden" name="json_key" value="privacy"> <!-- Add this line to include the json_key -->

                {{-- Start privacy_policy_en --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">English privacy policy</label>

                    <div class="col-sm-10">
                        <textarea id="privacy_policy_en" name="privacy_policy_en" class="form-control"></textarea>
                        @error('privacy_policy_en')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- End privacy_policy_en --}}

                {{-- Start privacy_policy_ar --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Arabic privacy policy</label>

                    <div class="col-sm-10">
                        <textarea id="privacy_policy_ar" name="privacy_policy_ar" class="form-control"></textarea>
                        @error('privacy_policy_ar')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- End privacy_policy_ar --}}

                {{-- Start term_condition_en --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">English Terms and Conditions</label>

                    <div class="col-sm-10">
                        <textarea id="term_condition_en" name="term_condition_en" class="form-control"></textarea>
                        @error('term_condition_en')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- End term_condition_en --}}

                {{-- Start term_condition_ar --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Arabic Terms and Conditions</label>

                    <div class="col-sm-10">
                        <textarea id="term_condition_ar" name="term_condition_ar" class="form-control"></textarea>
                        @error('term_condition_ar')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- End term_condition_ar --}}

                <div class="row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $('#privacy_policy_en').summernote({
        // placeholder: 'project details',
        tabsize: 2,
        height: 100
    });
    $('#privacy_policy_ar').summernote({
    // placeholder: 'project details',
    tabsize: 2,
    height: 100
    });
    $('#term_condition_en').summernote({
    // placeholder: 'project details',
    tabsize: 2,
    height: 100
    });
    $('#term_condition_ar').summernote({
    // placeholder: 'project details',
    tabsize: 2,
    height: 100
    });
</script>
@endsection