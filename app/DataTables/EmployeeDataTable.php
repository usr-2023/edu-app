<?php

namespace App\DataTables;

use App\Models\Employee\Employee;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Services\DataTable;

use function Pest\Laravel\json;

class EmployeeDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
       
           // ->addColumn('action', 'employee.action')
           
            
                return   (new EloquentDataTable($query)) ->addColumn('action','employee.action')
                ->rawColumns(['action'])
                ->setRowId('id');
            

          
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Employee $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('employee-table')
                    ->language([
                        'sUrl' =>  url('/').'/../lang/'.__( LaravelLocalization::getCurrentLocale() ).'/datatable.json'
                    ])
                    ->columns(  [
                        'action' => ['title' => __('word.action'), 'printable' => false,'class'=> 'text-center'],
                        'job_number' => ['title' => __('word.job_number'),'class'=> 'text-center'],
                        'full_name' => ['title' => __('word.full_name'),'class'=> 'text-center'],
                        'mother_full_name' => ['title' => __('word.mother_full_name'),'class'=> 'text-center'],
                        'date_of_birth'=> ['title' => __('word.date_of_birth'),'class'=> 'text-center'],
                        'appointment_date'=> ['title' => __('word.appointment_date'),'class'=> 'text-center'],
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
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Employee_' . date('YmdHis');
    }
}
