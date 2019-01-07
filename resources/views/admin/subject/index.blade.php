@extends('admin.layout.master.master')
@section('main-content')
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">@lang('admin.subject')
                    @if(auth()->user()->role == config('setting.admin'))
                        <a class="btn btn-success text-light">
                            <i class="fa fa-plus-circle"></i> @lang('admin.add')
                        </a>
                    @endif
                </h4>
                <div class="single-table">
                    <div class="table-responsive">
                        <table class="table table-hover progress-table text-center">
                            <thead class="text-uppercase">
                            <tr>
                                <th scope="col">@lang('admin.subject_name')</th>
                                <th scope="col">@lang('admin.start_subject')</th>
                                <th scope="col">@lang('admin.end_subject')</th>
                                <th scope="col">@lang('admin.subject_status')</th>
                                <th scope="col">@lang('admin.action')</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($getSubject as $value)
                                <tr>
                                    <th scope="row">{{ $value->name }}</th>
                                    <td>{{ $value->custom_start_subject }}</td>
                                    <td>{{ $value->custom_end_subject }}</td>
                                    <td>
                                        <span class="status-p bg-success">
                                            {{ $value->status }}
                                        </span>
                                    </td>
                                    <td>
                                        <ul class="d-flex justify-content-center">
                                            <li class="mr-3"><a href="#" class="text-secondary"><i class="fa fa-edit"></i></a></li>
                                            <li><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <div>
                            {{ $getSubject->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
