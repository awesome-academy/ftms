@extends('admin.layout.master.master')
@section('main-content')
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body">
                {!! link_to(URL::previous(), trans('profile.btnCancel'), ['class' => 'border rounded border-danger btn btn-outline-danger']) !!}
                <div class="single-table">
                    <div class="table-responsive" id="temps_div">
                        <?= Lava::render('LineChart', 'Population', 'temps_div') ?>
                        @linechart('Population', 'temps_div')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
