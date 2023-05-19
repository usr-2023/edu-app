<?php

namespace App\DataTables;

use App\Models\Basic\Facility\Facility;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class FacilityDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', 'basic.facility.action')
            ->setRowId('id');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Basic\Facility\Facility $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Facility $model): QueryBuilder
    {
        return $model->newQuery()->with(['get_department','get_facility_type','get_facility_group','get_facility_link']);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('facility-table')
                    ->language([
                        'sUrl' =>  url('/').'/../lang/'.__( LaravelLocalization::getCurrentLocale() ).'/datatable.json'
                    ])
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     *
     * @return array
     */
    public function getColumns(): array
    {
        return [
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(60)
                  ->title(__('word.action'))
                  ->addClass('text-center'),
            Column::make('name')->title(__('word.facility_name'))->class('text-center'),
            Column::make('work_address')->title(__('word.facility_work_address'))->class('text-center'),
            Column::make('get_facility_type')->title(__('word.facility_type_id'))->data('get_facility_type.facility_type')->name('get_facility_type.facility_type')->class('text-center'),
            Column::make('get_department')->title(__('word.department_id'))->data('get_department.department')->name('get_department.department')->class('text-center'),
            Column::make('get_facility_group')->title(__('word.facility_group_id'))->data('get_facility_group.facility_group')->name('get_facility_group.facility_group')->class('text-center'),
            Column::make('get_facility_link')->title(__('word.facility_link_id'))->data('get_facility_link.counting_number')->name('get_facility_link.counting_number')->class('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'Facility_' . date('YmdHis');
    }
}
