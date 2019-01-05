@extends('admin.layout.master.master')
@section('main-content')
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">@lang('admin.course')
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
                                <th scope="col">@lang('admin.course_name')</th>
                                <th scope="col">@lang('admin.course_description')</th>
                                <th scope="col">@lang('admin.course_status')</th>
                                <th scope="col">@lang('admin.started_at')</th>
                                <th scope="col">@lang('admin.finished_at')</th>
                                <th scope="col">@lang('admin.action')</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($getCourse as $value)
                                    <tr>
                                        <th scope="row">{{ $value->name }}</th>
                                        <td>{{ $value->description }}</td>
                                        <td>
                                            <span class="status-p bg-info">{{ $value->custom_status }}</span>
                                        </td>
                                        <td>
                                            {{ $value->custom_started_at }}
                                        </td>
                                        <td>
                                            {{ $value->custom_finished_at }}
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

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
