//Write Custom Callback Function Here...
//sample
function myFunct() {
	alert("Hai world");
}

function getConversion(productId, UomFromId, UomToId, clbk, errCallback) {
	getRecord('m_uom_conversion','product_id__uom_id__uom_to', productId +'__'+ UomFromId +'__'+ UomToId, function(d){
		clbk(d);
	}, function () {
        if (typeof errCallback == 'function') {
            errCallback();
        }
    });
}

//
function getDataColumn(colId, callback) {
	$.ajax({
        url: base_url + 'object',
        data: 'model-input=s_table_column&key-input=column_id&value-input=' + colId,
        dataType: "json",
        type: "POST",
        cache: false,
        success: function(json){
            if(json != ''){
                if (typeof callback == 'function') {
                    callback(json);
                }
            }
        },
        error: function () {
            genericAlert("Tidak dapat menampilkan data! Request tidak valid.", "error", "");
        }
    });
}

function doCopyWindow(winID, callback) {
    $.ajax({
        url: base_url + 'process_copy_window/' + winID,
        data: 'id=1',
        dataType: "html",
        type: "POST",
        cache: false,
        success: function(msg){
            if(msg != ''){
                genericAlert(msg, "success", "");
                if (typeof callback == 'function') {
                    callback();
                }
            }
        },
        error: function () {
            genericAlert("Could Not Copy Window.", "error", "");
        }
    });
}

function doCopyTable(tableID, callback) {
    $.ajax({
        url: base_url + 'process_copy_table/' + tableID,
        data: 'id=1',
        dataType: "html",
        type: "POST",
        cache: false,
        success: function(msg){
            if(msg != ''){
                genericAlert(msg, "success", "");
                if (typeof callback == 'function') {
                    callback();
                }
            }
        },
        error: function () {
            genericAlert("Could Not Copy Table.", "error", "");
        }
    });
}

function do_process(process_id, record_id, callback) {
    window.open(base_url + 'process/' + process_id + '/' + record_id,'_blank' );
    if (typeof callback == 'function') {
        callback();
    }
}

function getPrice(pricelist_id, product_id, uom_id, callback, errCallback) {
    $.ajax({
        url: base_url + 'get_price/' + pricelist_id + '/' + product_id + '/' + uom_id,
        data: 'id=1',
        dataType: "html",
        type: "POST",
        cache: false,
        success: function(html){
            if (typeof callback == 'function') {
                callback(html);
            }
        },
        error: function () {
            //genericAlert("Pricelist tidak valid!", "error", "error");
            if (typeof errCallback == 'function') {
                errCallback();
            }
        }
    });
}

function validQty(q1, q2, callback) {
    if (parseFloat(q1) > parseFloat(q2)) {
        alert("Nilai yang di input tidak boleh lebih dari " + q2);
        if (typeof callback == 'function') {
            callback();
        }
        return 0;
    } else {
        return q1;
    }
}