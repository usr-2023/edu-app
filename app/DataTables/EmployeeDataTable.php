<?php

namespace App\DataTables;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

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
           
            if (Auth::user()->is_admin) {
                return   (new EloquentDataTable($query)) ->addColumn('action','employee.action')
                ->rawColumns(['action'])
                ->setRowId('id');
            } else {
                return   (new EloquentDataTable($query))  ->addColumn('action','employee.actionnotadmin')
                ->rawColumns(['action'])
                ->setRowId('id');
            }
            


           
          
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
                    ->setTableId('my-table')
                    ->columns([
                        'action' => ['title' => 'الوظائف'],
                        'job_number' => ['title' => 'الرقم الوظيفي'],
                        'name' => ['title' => 'الاسم'],
                        'father_name' => ['title' => 'اسم الاب'],
                        'grandfather_name' => ['title' => 'اسم الجد'],
                        'date_of_birth'=> ['title' => 'تاريخ الميلاد'],
                        'mother_name' => ['title' => 'اسم الام'],
                        'appointment_date'=> ['title' => 'تاريخ التعيين'],
                        ])
                    
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
     */
    public function getColumns(): array
    {
        return [
            Column::computed('action')
                  ->exportable(true)
                  ->printable(true)
                  ->width(60)
                  ->addClass('text-center'),
            
            Column::make('job_number'),
            Column::make('name'),
            Column::make('father_name'),
            Column::make('grandfather_name'),
            Column::make('date_of_birth'),
            Column::make('mother_name'),
            Column::make('date_of_appointment'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Employee_' . date('YmdHis');
    }
}
