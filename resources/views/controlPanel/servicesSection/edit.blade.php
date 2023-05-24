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
    <div class="container">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Edit Service</h5>
                <small class="text-muted float-end">Default Label</small>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('services.update', $service) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="title">Title (English) </label>
                        <div class="col-sm-10">
                            <textarea id="title" name="title" class="form-control">{{ old('title', $service->title) }}</textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="description">Description (English)</label>
                        <div class="col-sm-10">
                            <textarea id="description" name="description" class="form-control">{{ old('description', $service->description) }}</textarea>
                        </div>
                    </div>

                    <!-- Add more fields as needed -->

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="image">Image 1</label>
                        <div class="col-sm-10">
                            <input type="file" id="image" name="image" accept="image/*" class="form-control">
                        </div>
                    </div>

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
