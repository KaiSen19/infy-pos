import React, { useEffect, useState } from "react";
import MasterLayout from "../../MasterLayout";
import TabTitle from "../../../shared/tab-title/TabTitle";
import { Tokens } from "../../../constants";
import {
    currencySymbolHandling,
    getFormattedMessage,
    placeholderText,
} from "../../../shared/sharedMethod";
import ReactDataTable from "../../../shared/table/ReactDataTable";
import { connect } from "react-redux";
import ReactSelect from "../../../shared/select/reactSelect";
import { fetchAllWarehouses } from "../../../store/action/warehouseAction";
import { fetchFrontSetting } from "../../../store/action/frontSettingAction";
import { saleQtyReportAction } from "../../../store/action/saleQtyReportAction";
import { totalSaleQtyReportExcel } from "../../../store/action/totalSaleQtyReportExcel";
import TopProgressBar from "../../../shared/components/loaders/TopProgressBar";

const SaleQtyReport = (props) => {
    const {
        isLoading,
        totalRecord,
        fetchFrontSetting,
        saleQtyReports = [],
        fetchAllWarehouses,
        totalSaleQtyReportExcel,
        frontSetting,
        warehouses,
        dates,
        saleQtyReportAction,
        allConfigData,
    } = props;
    const [warehouseValue, setWarehouseValue] = useState({
        label: "All",
        value: frontSetting?.value?.default_warehouse,
    });
    const [isWarehouseValue, setIsWarehouseValue] = useState(false);
    const currencySymbol =
        frontSetting &&
        frontSetting.value &&
        frontSetting.value.currency_symbol;
    const array = warehouses && warehouses;
    const selectWarehouseArray =
        frontSetting &&
        array.filter(
            (item) => item.id === Number(frontSetting?.value?.default_warehouse)
        );

    useEffect(() => {
        saleQtyReportAction(
            warehouseValue.value
                ? warehouseValue.value
                : frontSetting?.value?.default_warehouse
        );
    }, [frontSetting, warehouseValue]);

    useEffect(() => {
        fetchAllWarehouses();
    }, []);

    useEffect(() => {
        fetchFrontSetting();
    }, []);

    useEffect(() => {
        if (isWarehouseValue === true) {
            totalSaleQtyReportExcel(dates,
                warehouseValue.value
                    ? warehouseValue.value
                    : frontSetting?.value?.default_warehouse,
                setIsWarehouseValue
            );
            setIsWarehouseValue(false);
        }
    }, [isWarehouseValue]);

    const itemsValue =
        currencySymbol &&
        saleQtyReports.length >= 0 &&
        saleQtyReports.map((saleQtyReport) => ({
            warehouse_id:saleQtyReport.warehouse_id,
            warehouse_name : saleQtyReport.warehouse_name,
            product_id: saleQtyReport.product_id,
            product_name: saleQtyReport.product_name,
            quantity: saleQtyReport.quantity,
            currenct_stock:saleQtyReport.currenct_stock,
        }));

    const onChange = (filter) => {
        saleQtyReportAction(
            warehouseValue.value
                ? warehouseValue.value
                : frontSetting?.value?.default_warehouse,
            filter,
            dates
        );
    };


    const onWarehouseChange = (obj) => {
        setWarehouseValue(obj);
    };

    const onExcelClick = () => {
        setIsWarehouseValue(true);
    };

    const columns = [
        {
            name: getFormattedMessage("warehouse.reports.title"),
            sortField: "warehouse_name",
            sortable: false,
            cell: (row) => {
                return (
                    <span className="badge bg-light-success">
                        <span>{row.warehouse_name}</span>
                    </span>
                );
            },
        },
        {
            name: getFormattedMessage("supplier.table.name.column.title"),
            selector: (row) => row.product_name,
            sortField: "product_name",
            sortable: false,
        },
        {
            name: getFormattedMessage("product.table.quantity.column.label"),
            selector: (row) => row.quantity,
            sortField: "quantity",
            sortable: false,
        },
        {
            name: getFormattedMessage("current.stock.label"),
            selector: (row) => row.currenct_stock,
            sortField: "currenct_stock",
            sortable: false,
        },
    ];

    return (
        <MasterLayout>
            <TopProgressBar />
            <TabTitle title={placeholderText("stock.reports.title")} />
            <div className="mx-auto mb-md-5 col-12 col-md-4">
                {selectWarehouseArray[0] ? (
                    <ReactSelect
                        data={array}
                        onChange={onWarehouseChange}
                        defaultValue={
                            selectWarehouseArray[0]
                                ? {
                                      label: selectWarehouseArray[0].attributes
                                          .name,
                                      value: selectWarehouseArray[0].id,
                                  }
                                : ""
                        }
                        title={getFormattedMessage("warehouse.title")}
                        errors={""}
                        isRequired
                        placeholder={placeholderText(
                            "purchase.select.warehouse.placeholder.label"
                        )}
                    />
                ) : null}
            </div>
            <div className="pt-md-7">
                <ReactDataTable
                    columns={columns}
                    items={itemsValue}
                    isShowDateRangeField
                    onChange={onChange}
                    isShowSearch
                    isLoading={isLoading}
                    totalRows={totalRecord}
                    isEXCEL
                    onExcelClick={onExcelClick}
                />
            </div>
        </MasterLayout>
    );
};
const mapStateToProps = (state) => {
    const {
        isLoading,
        totalRecord,
        warehouses,
        frontSetting,
        saleQtyReports,
        allConfigData,
        dates,
    } = state;
    return {
        isLoading,
        totalRecord,
        warehouses,
        frontSetting,
        saleQtyReports,
        allConfigData,
        dates,
    };
};

export default connect(mapStateToProps, {
    fetchAllWarehouses,
    totalSaleQtyReportExcel,
    fetchFrontSetting,
    saleQtyReportAction,
})(SaleQtyReport);
