import {saleQtyReportActionType} from '../../constants';

export default (state = [], action) => {
    switch (action.type) {
        case saleQtyReportActionType.SALE_QTY_REPORT:
            return action.payload;
        default:
            return state;
    }
};
