@extends('admin.layout.master.master')
@section('main-content')
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">@lang('admin.choose')</h4>
                <div class="form-group">
                    @foreach($getCouretse as $get)
                        <a href="{{ route('chart.show',$get->id) }}" class="border rounded border-success btn btn-outline-success">{{$get->name}}
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
