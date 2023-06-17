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
            <h5 class="mb-0">CREATE SERVICE</h5>
            <small class="text-muted float-end">Default Label</small>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('project.update',$project->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="json_key" value="slider"> <!-- Add this line to include the json_key -->

                {{-- Start title --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="title">Title</label>
                    <div class="col-sm-10">
                        <textarea id="title" name="title"
                            class="form-control">{{ old('title', $project->title) }}</textarea>
                        @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- End title --}}


                {{-- Start description --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="title_en">description</label>

                    <div class="col-sm-10">
                        <textarea id="summernote" name="editordata"
                            class="form-control">{{old('editordata', $project->description) }}</textarea>
                        @error('editordata')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- End description --}}

                {{-- Start sub title ar --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="sub_title_ar">Service</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="service_id" id="service_id">
                            <option value="">Select One</option>
                            @foreach ($services as $service)
                            <option value="{{$service->id}}" @if ($project->service_id == $service->id)
                                selected
                                @endif>{{$service->title}}
                            </option>
                            @endforeach
                        </select>
                        @error('service_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- End sub title ar --}}

                {{-- Image 1 field --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="image">Image 1</label>
                    <div class="col-sm-10">
                        <input type="file" id="image" name="image[]" accept="image/*" class="form-control" multiple
                            required>
                        @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- End Image 1 field --}}
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
    $('#summernote').summernote({
        placeholder: 'project details',
        tabsize: 2,
        height: 100
    });
</script>

@endsection