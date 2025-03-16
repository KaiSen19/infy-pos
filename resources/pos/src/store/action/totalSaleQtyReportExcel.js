import apiConfig from '../../config/apiConfig';
import {setLoading} from './loadingAction';

export const totalSaleQtyReportExcel = (dates,warehouse, filter = {}, isLoading = true, setIsWarehouseValue) => async (dispatch) => {
    if (isLoading) {
        dispatch(setLoading(true))
    }
        await apiConfig.get(`stock-qty-report-excel?warehouse_id=${warehouse}&start_date=${dates.start_date ? dates.start_date : null }&end_date=${dates.end_date ? dates.end_date : null}`)
        .then((response) => {
            window.open(response.data.data.stock_qty_report_excel_url, '_blank');
            setIsWarehouseValue(false);
        })
        .catch(({response}) => {
            dispatch(addToast(
                {text: response.data.message, type: toastType.ERROR}));
        });
};
