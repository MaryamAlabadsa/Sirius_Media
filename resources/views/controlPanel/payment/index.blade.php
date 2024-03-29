@extends('controlPanel.index')
@section('content')
<!-- Hoverable Table rows -->
<div class="card" style="margin: 25px">
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

    {{-- <h5 class="card-header">
        Hoverable rows
        <a href=" {{route('blog.create')}} " class="btn btn-primary float-end">Create New Blog</a>
    </h5> --}}
    <div class="table-responsive text-nowrap">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>name</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>amount</th>
                    <th>service</th>
                    <th>created_at</th>
                    {{-- <th>sub title (Arabic)</th> --}}

                    {{-- <th>Actions</th> --}}
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach($payments as $payment)
                <tr>

                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$payment->name}}</strong></td>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$payment->email}}</strong>
                    </td>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$payment->phone}}</strong>
                    </td>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$payment->amount}}</strong>
                    </td>
                    <td>

                        @foreach (json_decode($payment->service) as $item)
                        @foreach ($pricing as $price)
                        @if ($item == $price->id)
                        {{$price->name_en}}
                        @endif
                        @endforeach
                        @endforeach

                    </td>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{date('Y-m-d',
                            strtotime($payment->created_at))}}</strong>
                    </td>

                </tr>
                @endforeach
                {{-- <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong></td>
                    <td>Albert Cook</td>
                    <td>
                        <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                <img src="{{asset('assets/img/avatars/5.png')}}" alt="Avatar" class="rounded-circle" />
                            </li>
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
                                <img src="{{asset('assets/img/avatars/6.png')}}" alt="Avatar" class="rounded-circle" />
                            </li>
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                class="avatar avatar-xs pull-up" title="Christina Parker">
                                <img src="{{asset('assets/img/avatars/7.png')}}" alt="Avatar" class="rounded-circle" />
                            </li>
                        </ul>
                    </td>
                    <td><span class="badge bg-label-primary me-1">Active</span></td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i>
                                    Edit</a>
                                <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i>
                                    Delete</a>
                            </div>
                        </div>
                    </td>
                </tr> --}}

            </tbody>
        </table>
    </div>
</div>
<!--/ Hoverable Table rows -->
@endsection