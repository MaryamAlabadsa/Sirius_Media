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

                {{-- Start name --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="description">Name</label>
                    <div class="col-sm-10">
                        <input type="text" id="name" name="name" class="form-control"
                            value="{{old('name', $client->name)}}">
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                {{-- End name --}}

                {{-- Image 1 field --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="image">Image 1</label>
                    <div class="col-sm-10">
                        <input type="file" id="image" name="image" accept="image/*" class="form-control">
                        @error('image')
                        <div class="alert alert-danger">{{ $message }}</div>
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