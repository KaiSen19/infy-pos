import { setLoading } from "./loadingAction";
import { apiBaseURL, saleQtyReportActionType } from "../../constants";
import apiConfig from "../../config/apiConfig";
import { setTotalRecord } from "./totalRecordAction";
import requestParam from "../../shared/requestParam";

// export const saleQtyReportAction =
//     (warehouse_id, filter = {}, isLoading = true) =>
//     async (dispatch) => {
//         if (isLoading) {
//             dispatch(setLoading(true));
//         }
//         const stockReport = true;
//         let url = apiBaseURL.STOCK_QTY_REPORT + "?warehouse_id=" + warehouse_id;
//         if (
//             !_.isEmpty(filter) &&
//             (filter.page ||
//                 filter.pageSize ||
//                 filter.search ||
//                 filter.order_By ||
//                 filter.created_at)
//         ) {
//             url += requestParam(filter, false, stockReport, null, url);
//         }
//         await apiConfig
//             .get(url)
//             .then((response) => {
//                 dispatch({
//                     type: saleQtyReportActionType.SALE_QTY_REPORT,
//                     payload: response.data.data,
//                 });
//                 dispatch(
//                     setTotalRecord(
//                         response.data.meta.total !== undefined &&
//                             response.data.meta.total >= 0
//                             ? response.data.meta.total
//                             : response.data.data.total
//                     )
//                 );
//                 if (isLoading) {
//                     dispatch(setLoading(false));
//                 }
//             })
//             .catch(({ response }) => {
//                 // dispatch(addToast(
//                 //     {text: response.data.message, type: toastType.ERROR}));
//             });
//     };


    export const saleQtyReportAction =
    (warehouse_id,filter = {}, isLoading = true) =>
    async (dispatch) => {
        if (isLoading) {
            dispatch(setLoading(true));
        }
        let url = apiBaseURL.STOCK_QTY_REPORT + "?warehouse_id=" + warehouse_id;
        if (
            !_.isEmpty(filter) &&
            (filter.page ||
                filter.pageSize ||
                filter.search ||
                filter.order_By ||
                filter.created_at)
        ) {
            url += requestParam(filter, null, null, null, url);
        }
        await apiConfig
            .get(url)
            .then((response) => {
                dispatch({
                    type: saleQtyReportActionType.SALE_QTY_REPORT,
                    payload: response.data.data,
                });
                dispatch(
                    setTotalRecord(
                        response.data.total
                    )
                );
            })
            .catch(({ response }) => {
                dispatch(
                    addToast({
                        text: response.data.message,
                        type: toastType.ERROR,
                    })
                );
            })
            .finally(() => {
                if (isLoading) {
                    dispatch(setLoading(false));
                }
            });
    };
