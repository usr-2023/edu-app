<?php

namespace App\DataTables;

use App\Models\Building\Building;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Illuminate\Support\Facades\Auth;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class BuildingDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
           // ->addColumn('action', 'building.action')
           
           if (Auth::user()->is_admin) {
            return   (new EloquentDataTable($query)) ->addColumn('action','building.action')
            ->rawColumns(['action'])
            ->setRowId('id');
            
        } else {
            return   (new EloquentDataTable($query))  ->addColumn('action','building.actionnotadmin')
            ->rawColumns(['action'])
            ->setRowId('id');
        }
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Building\Building $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Building $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('building-table')
                    ->language([
                        'sUrl' =>  url('/').'/../lang/'.__( LaravelLocalization::getCurrentLocale() ).'/datatable.json'
                    ])
                    ->columns(  [
                        'action' => ['title' => __('word.action'), 'printable' => false,'class'=> 'text-center'],
                        'Building_reference' => ['title' => __('word.Building_reference'),'class'=> 'text-center'],
                        'city' => ['title' => __('word.city'),'class'=> 'text-center'],
                        'district' => ['title' => __('word.district'),'class'=> 'text-center'],
                        'quarter' => ['title' => __('word.quarter'),'class'=> 'text-center'],
                        'latitude'=> ['title' => __('word.latitude'),'class'=> 'text-center'],
                        'longitude' => ['title' => __('word.longitude'),'class'=> 'text-center'],
                        'Class_count'=> ['title' => __('word.Class_count'),'class'=> 'text-center'],
                        'Hall_count'=> ['title' => __('word.Hall_count'),'class'=> 'text-center'],
                        'Floor_count'=> ['title' => __('word.Floor_count'),'class'=> 'text-center'],
                        ])
                    ->minifiedAjax()
                    ->orderBy(1)
                  /*   ->parameters([
                        'dom' => 'B<"clear">lfrtip',
                        'scrollX' => false,
                        'buttons' => [
                            [
                                'extend'  => 'print',
                                'className'    => 'btn btn-outline-dark'
                           ],
                           [
                                'extend'  => 'reset',
                                'className'    => 'btn btn-outline-dark'
                           ],
                           [
                                'extend'  => 'reload',
                                'className'    => 'btn btn-outline-dark'
                           ],
                            [
                                 'extend'  => 'export',
                                 'className'    => 'btn btn-outline-dark',
                                 'buttons' => [
                                                   'csv',
                                                   'excel',
                                                   'pdf',
                                              ],
                            ],
                            'colvis'
                        ]
                    ]) */
                    ->selectStyleSingle();
    }



    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'Building_' . date('YmdHis');
    }
}
