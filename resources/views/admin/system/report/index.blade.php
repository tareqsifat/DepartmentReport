@extends('admin.layout.admin')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid">
            @include('admin.includes.brade_cumb',['title'=>'All Brands'])
            @if (session()->has('alert-success'))
                <div class="text-theme-9 mt-2">
                    {{ session('alert-success') }}
                </div>
            @endif

            @if (session()->has('alert-danger'))
                <div class="text-theme-6 mt-2">
                    {{ session()->get('alert-danger') }}
                </div>
            @endif
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h5 class="card-title">report</h5>
                            <a href="{{ route('report.create') }}" class="btn btn-warning"><i class="fa fa-plus"></i> ADD</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Id</th>
                                            <th scope="col">Name</th>
                                            <th class="text-center" scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($report as $key=>$item)
                                            <tr>
                                                <td scope="row">{{ $key+1 }}</td>
                                                <td scope="row">{{ $item->id }}</td>
                                                <td scope="row">{{ $item->month }}</td>
                                                <td scope="row">{{ $item->year }}</td>
                                                <td scope="row"></td>
                                                <td scope="row">
                                                    <div class="text-right">
                                                        <a type="button" href="{{ route('report.show', $item->id)}}" 
                                                            class="btn btn-light waves-effect waves-light m-1">
                                                            <i class="fa fa-eye"></i> 
                                                            <span>view</span>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--start overlay-->
            <div class="overlay"></div>
            <!--end overlay-->
        </div>
        <!-- End container-fluid-->
    </div>
    <!--End content-wrapper-->

@endsection



