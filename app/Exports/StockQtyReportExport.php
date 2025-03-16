<?php

namespace App\Exports;

use App\Models\Product;
use App\Models\Sale;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\FromView;

class StockQtyReportExport implements FromView
{
    public function view(): \Illuminate\Contracts\View\View
    {
        $warehouseId = request()->get('warehouse_id');
        $startDate = Carbon::parse(request()->get('start_date'))->startOfDay()->toDateTimeString();
        $endDate = Carbon::parse(request()->get('end_date'))->endOfDay()->toDateTimeString();

        // if (request()->get('start_date') && request()->get('start_date') != 'null') {
            $saleQty =   Sale::leftjoin('sale_items', 'sales.id', '=', 'sale_items.sale_id')
            ->leftjoin('manage_stocks', 'sale_items.product_id', '=', 'manage_stocks.product_id')
            ->leftjoin('products', 'sale_items.product_id', '=', 'products.id')
            ->leftjoin('warehouses', 'sales.warehouse_id', '=', 'warehouses.id')
            ->where('sales.date', '>=', $startDate)
            ->where('sales.date', '<=', $endDate)
            ->where('sales.warehouse_id', '=',  $warehouseId )
            ->where('manage_stocks.warehouse_id', '=',  $warehouseId )
            ->select('warehouses.id AS warehouse_id','warehouses.name AS warehouse_name' ,'products.name AS product_name', )
            ->selectRaw('sale_items.*, COALESCE(sum(sale_items.quantity),0) quantity , manage_stocks.quantity  currenct_stock')
            ->groupBy('sale_items.product_id')
            ->orderBy('sale_items.product_id', 'asc')
            ->get();
        // } else {
        //     $saleQty =  Sale::leftjoin('sale_items', 'sales.id', '=', 'sale_items.sale_id')
        //     ->leftjoin('manage_stocks', 'sale_items.product_id', '=', 'manage_stocks.product_id')
        //     ->leftjoin('products', 'sale_items.product_id', '=', 'products.id')
        //     ->leftjoin('warehouses', 'sales.warehouse_id', '=', 'warehouses.id')
        //     ->where('sales.warehouse_id', '=',  $warehouseId )
        //     ->where('manage_stocks.warehouse_id', '=',  $warehouseId )
        //     ->select('warehouses.id AS warehouse_id','warehouses.name AS warehouse_name' ,'products.name AS product_name', )
        //     ->selectRaw('sale_items.*, COALESCE(sum(sale_items.quantity),0) quantity , manage_stocks.quantity  currenct_stock')
        //     ->groupBy('sale_items.product_id')
        //     ->orderBy('sale_items.product_id', 'asc')
        //     ->get();
        // }

        $arrSaleQty = [];
        foreach ($saleQty as $item) {
            $arrSaleQty[] = $item->prepareSalesQtyReport();
        }


        return view('excel.stock-qty-report-excel', ['stockQtys' => $arrSaleQty]);
    }
}
