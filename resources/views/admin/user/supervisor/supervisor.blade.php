@extends('admin.layout.master.master')
@section('main-content')
<div class="col-12 mt-5">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title">@lang('admin.supervisor')
                @if(auth()->user()->role == config('setting.admin'))
                    <a class="btn btn-success text-light"><i class="fa fa-plus-circle"></i> @lang('admin.add')</a>
                @endif
            </h4>
            <div class="single-table">
                <div class="table-responsive">
                    <table class="table table-hover progress-table text-center">
                        <thead class="text-uppercase">
                        <tr>
                            <th scope="col">@lang('admin.name')</th>
                            <th scope="col">@lang('admin.email')</th>
                            <th scope="col">@lang('admin.role')</th>
                            <th scope="col">@lang('admin.gender')</th>
                            <th scope="col">@lang('admin.birthday')</th>
                            <th scope="col">@lang('admin.address')</th>
                            <th scope="col">@lang('admin.action')</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($getSupervisor as $value)
                        <tr>
                            <th scope="row">{{ $value->name }}</th>
                            <td>{{ $value->email }}</td>
                            <td>
                                <span class="status-p bg-info">{{ $value->custom_role }}</span>
                            </td>
                            <td>
                                <span class="status-p {{ ($value->gender == config('setting.male')) ? 'bg-success' : 'bg-danger' }}">{{ $value->custom_gender }}</span>
                            </td>
                            <td>{{ $value->custom_birthday }}</td>
                            <td>{{ $value->address }}</td>
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
                        {{ $getSupervisor->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
