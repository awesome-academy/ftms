<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\AdminHelper;
use Khill\Lavacharts\Laravel\LavachartsFacade as Lava;

class Chart extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $getCouretse = AdminHelper::getIdCourse();
        return view('admin.reports.report', compact('id', 'getCouretse'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $getTaskOfCourses = AdminHelper::getTaskOfCourse($id);
        $population = Lava::DataTable();
        $population->addStringColumn('Date')
            ->addNumberColumn(trans('admin.number'));
        foreach($getTaskOfCourses as $getTaskOfCourse){
            $population->addRow([(string)$getTaskOfCourse->date, $getTaskOfCourse->total]);
        }
        Lava::LineChart('Population', $population, [
            'title' => trans('admin.statistics'),
            'legend' => [
                'position' => 'in'
            ]
        ]);

        return view('admin.reports.reportDetail', compact('getTaskOfCourses'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
