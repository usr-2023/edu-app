<?php

namespace App\DataTables;

use App\Models\School\School;
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

class schoolDataTable extends DataTable
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

            return   (new EloquentDataTable($query)) ->addColumn('action','school.action')
            ->rawColumns(['action'])
            ->setRowId('id');
  
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\School\school $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(School $model): QueryBuilder
    {
        return $model->newQuery()->with(['get_school_invironment_id','get_school_stage_id','get_school_gender_id','get_school_time_id']);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('school-table')
                    ->language([
                        'sUrl' =>  url('/').'/../lang/'.__( LaravelLocalization::getCurrentLocale() ).'/datatable.json'
                    ])
                    ->columns($this->getColumns())
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


    
    public function getColumns(): array
    {
        return [
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(60)
                  ->title(__('word.action'))
                  ->addClass('text-center'),
            Column::make('counting_number')->title(__('word.Counting_number'))->class('text-center'),
            Column::make('current_name')->title(__('word.School_name'))->class('text-center'),
            Column::make('get_school_invironment_id')->title(__('word.School_invironment'))->data('get_school_invironment_id.school_invironments')->name('get_school_invironment_id.school_invironments')->class('text-center'),
            Column::make('get_school_gender_id')->title(__('word.School_gender'))->data('get_school_gender_id.school_genders')->name('get_school_gender_id.school_genders')->class('text-center'),
            Column::make('get_school_gender_id')->title(__('word.School_stage'))->data('get_school_stage_id.school_stages')->name('get_school_stage_id.school_stages')->class('text-center'),
            Column::make('get_school_time_id')->title(__('word.School_time'))->data('get_school_time_id.school_times')->name('get_school_time_id.school_times')->class('text-center'),
            Column::make('established_year')->title(__('word.established_year'))->class('text-center'),
        ];
    }


    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'school_' . date('YmdHis');
    }
}
