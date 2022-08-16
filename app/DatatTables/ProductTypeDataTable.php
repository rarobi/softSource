<?php

namespace App\DataTables;

use App\Libraries\Encryption;
use App\Modules\IndustryCategory\Models\IndustryCategory;
use App\Modules\ProductType\Models\ProductType;
use Yajra\DataTables\Services\DataTable;


class ProductTypeDataTable extends DataTable
{

    /**
     * Display ajax response.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return datatables()
            ->eloquent($this->query())
            ->addColumn('action', function ($data) {

                $actionBtn = '<a href="/product-types/'.Encryption::encodeId($data->id).'/edit/" class="btn btn-xs btn-info action-edit" title="Edit Product Type"><i class="fa fa-edit"></i> Edit</a> ';
                $actionBtn .= '<a href="/product-types/'.Encryption::encodeId($data->id).'/delete/" class="btn btn-xs btn-danger action-delete" title="Delete Product Type"><i class="fa fa-trash"></i> Delete</a>';

                return $actionBtn;
            })
            ->addColumn('status',function($data){
                if($data->status == 1){
                    return "<label class='badge badge-success'> Active </label>";
                }
                return "<label class='badge badge-danger'> Inactive </label>";
            })

            ->rawColumns(['status','action'])
//            ->removeColumn('id')
            ->make(true);

    }

    /**
     * Get query source of dataTable.
     * @return \Illuminate\Database\Eloquent\Builder
     * @internal param \App\Models\AgentBalanceTransactionHistory $model
     */
    public function query()
    {
        $account = ProductType::getProductTypeList();
        $account->select([
            'product_types.*',
            'product_categories.name as category_name'
        ]);
        return $this->applyScopes($account);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
//            ->addAction(['width' => '160px'])
//            ->minifiedAjax('', null, request()->only(['from', 'to', 'team', 'user', 'category', 'status']))
            ->parameters([
                'dom'         => 'Blfrtip',
                'responsive'  => true,
                'autoWidth'   => false,
                'paging'      => true,
                "pagingType"  => "full_numbers",
                'searching'   => true,
                'info'        => true,
                'searchDelay' => 350,
                "serverSide"  => true,
                'order'       => [[1, 'asc']],
                'buttons'     => ['excel','csv', 'print', 'reset', 'reload'],
                'pageLength'  => 10,
                'lengthMenu'  => [[10, 20, 25, 50, 100, 500, -1], [10, 20, 25, 50, 100, 500, 'All']],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'name'                  => ['data' => 'name', 'name' => 'name', 'orderable' => true, 'searchable' => true],
            'category'              => ['data' => 'category_name', 'name' => 'product_category_id', 'orderable' => true, 'searchable' => true],
            'description'           => ['data' => 'description', 'name' => 'description', 'orderable' => true, 'searchable' => true],
            'status'                => ['data' => 'status', 'name' => 'status', 'orderable' => true, 'searchable' => true],
            'action'                => ['searchable' => false]
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'product_types_list_' . date('Y_m_d_H_i_s');
    }
}
