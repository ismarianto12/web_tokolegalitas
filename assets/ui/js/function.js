//loading...
function loading(div_container, is_show ){
    $("#"+div_container).css({
        'display':'none',
        'float':'right',
        'margin-right':'20px',
        'z-index':'5'
    });
    if(is_show == true)
        $("#"+div_container).html('<img src="'+base_url+'asset/ui/img/icons/loading1.gif" />').fadeIn();
    if(is_show == false)
        $("#"+div_container).html('<img src="'+base_url+'asset/ui/img/icons/loading1.gif" />').fadeOut();
}

function blockPage(message) {
    $.blockUI({
        message: '<h4><img src="'+base_url+'asset/ui/img/icons/loading-02.gif" /><i class="icon-info-sign"></i> ' + message + '</h4>', 
        css: { 
            border: 'none', 
            padding: '15px', 
            backgroundColor: '#000', 
            '-webkit-border-radius': '10px', 
            '-moz-border-radius': '10px', 
            opacity: .5, 
            color: '#fff'
        }
    });
}

function loadingPage() {
    $.blockUI({
        message: '<img src="'+base_url+'asset/ui/img/icons/loading-02.gif" />', 
        css: { 
            border: 'none', 
            padding: '15px', 
            backgroundColor: 'rgb(94, 96, 98)', 
            '-webkit-border-radius': '10px', 
            '-moz-border-radius': '10px', 
            opacity: .4, 
            color: '#fff'
        }
    });
}

function loadContent(dURL, callback){
    blockPage('Mohon tunggu...');
    setTimeout(function(){
        $.ajax({
            url: dURL,
            data: 0,
            dataType: "html",
            type: "POST",
            cache: false,
            success: function(html){
                $.unblockUI();
                if(html != ''){
                    $("#dinamic-content").html(html);
                    if (typeof callback == 'function') {
                        callback();
                    }
                } else {
                    $(location).attr('href', base_url);
                }
            },
            error: function () {
                $.unblockUI();
                genericAlert("Tidak dapat menampilkan data! Request tidak valid.", "error", "");
            }
        });
    },10);
}

function loadContentOnPage(dURL, idDiv, callback){
    //blockPage('Mohon tunggu...');
    setTimeout(function(){
        $.ajax({
            url: dURL,
            data: 0,
            dataType: "html",
            type: "POST",
            cache: false,
            success: function(html){
                //$.unblockUI();
                if(html != ''){
                    $("#" + idDiv).html(html);
                    if (typeof callback == 'function') {
                        callback();
                    }
                } else {
                    $("#" + idDiv).html("Content not available.");
                    //$(location).attr('href', base_url);
                }
            },
            error: function () {
                //$.unblockUI();
                genericAlert("Tidak dapat menampilkan data! Request tidak valid.", "error", "");
            }
        });
    },10);
}

function ClearInput (IDform) {
    $("#"+IDform+" input[type=text]").each(function() {
        this.value ='';
    });
    $("#"+IDform+" textarea").each(function() {
        this.value ='';
    });
    $("#"+IDform+" input[type=email]").each(function() {
        this.value ='';
    });
    $("#"+IDform+" input[type=number]").each(function() {
        this.value ='';
    });
    $("#"+IDform+" input[type=hidden]").each(function() {
        this.value ='';
    });
    return false;
}

function DisableInput (IDform) {
    $("#"+IDform+" input[type=text]").each(function() {
        $(this).attr('disabled', 'disabled');
    });
    $("#"+IDform+" textarea").each(function() {
        $(this).attr('disabled', 'disabled');
    });
    $("#"+IDform+" select").each(function() {
        $(this).attr('disabled', 'disabled');
    });
    $("#"+IDform+" input[type=email]").each(function() {
        $(this).attr('disabled', 'disabled');
    });
    $("#"+IDform+" input[type=number]").each(function() {
        $(this).attr('disabled', 'disabled');
    });
    $("#"+IDform+" input[type=submit]").each(function() {
        $(this).attr('disabled', 'disabled');
    });
    return false;
}

//alert
function confAlert(message, type, url) {
    message = message.replace(/<br>/g, '\n');
    swal({
        title: '',
        text: message,
        type: type, 
        showCancelButton: true,
        confirmButtonClass: "btn-info", 
        confirmButtonText: " Ya ",
        cancelButtonClass: 'btn-default',
        cancelButtonText: ' Batal ',
        closeOnConfirm: false,
        closeOnCancle: true
    }, function() {
        $(location).attr('href', url);
    });
}

function warnAlert(message) {
    message = message.replace(/<br>/g, '\n');
    swal({
        title: '',
        text: message,
        type: 'warning', 
        showCancelButton: false,
        confirmButtonClass: "btn-danger", 
        confirmButtonText: "Tutup",
        closeOnConfirm: true
    });
}

function doneAlert(message, type, url) {
    message = message.replace(/<br>/g, '\n');
    swal({
        title: '',
        text: message,
        type: type, 
        showCancelButton: false,
        confirmButtonClass: "btn-info", 
        confirmButtonText: " Ok ",
        closeOnConfirm: false
    }, function() {
        $(location).attr('href', url);
    });
}

function deniedAlert(message, url) {
    message = message.replace(/<br>/g, '\n');
    swal({
        title: 'Access denied!',
        text: message,
        type: 'error', 
        showCancelButton: false,
        confirmButtonClass: "btn-info", 
        confirmButtonText: " Ok ",
        closeOnConfirm: false
    }, function() {
        $(location).attr('href', url);
    });
}

function genericAlert(message, type, texttitle, callback) {
    message = message.replace(/<br>/g, '\n');
    swal({
        title: texttitle,
        text: message,
        //textClass: textclass,
        type: type, 
        showCancelButton: false,
        confirmButtonClass: "btn-info", 
        confirmButtonText: " Ok ",
        closeOnConfirm: true
    });

    if (typeof callback == 'function') {
        callback();
    }
}

function loginAlert(message) {
    message = message.replace(/<br>/g, '\n');
    swal({
        title: '',
        text: message,
        type: 'error', 
        showCancelButton: false,
        confirmButtonClass: "btn-danger", 
        confirmButtonText: "Tutup",
        closeOnConfirm: true
    }, function() {
        //$('#id-input').val('');
        $('#pin-input').val('');
    });
}

function showAlert(msgAlert, typeAlert, titleAlert) {
    //msgAlert = msgAlert.replace(/<br>/g, '\n');
    $.growl[typeAlert]({
        title: titleAlert,
        message: msgAlert,
        location: 'tc',
        type: typeAlert //error, notice, warning
    });
}

function FDate(datex){
    var vd ='';

    if (datex == null) {
         vd ='';
    } else {
        var dd = datex.substr(8,2);
        var mm = datex.substr(5,2);
        var yyyy = datex.substr(0,4);
        vd = dd+'/'+mm+'/'+yyyy;

        if (vd == '//') {
            vd = '';
        }
    }

    return vd;
}


function encodeStr(str){
    var str1 = "";
    str1 = str.toString();
    str1 = str1.replace(/\s/gi, "_spasi_");
    str1 = str1.replace(/:/gi, "_t2_");
    str1 = str1.replace(/\//gi, "_slash_");
    str1 = str1.replace(/\(/gi, "_b_");
    str1 = str1.replace(/\)/gi, "_e_");
    str1 = str1.replace(/\'/gi, "_k_");
    str1 = str1.replace(/\"/gi, "_kk_");
    return str1;
}

function decodeStr(str){
    var str1 = "";
    str1 = str.toString();
    str1 = str1.replace(/_spasi_/g, " ");
    str1 = str1.replace(/_t2_/g, ":");
    str1 = str1.replace(/_slash_/g, "/");
    str1 = str1.replace(/_b_/g, "(");
    str1 = str1.replace(/_e_/g, ")");
    str1 = str1.replace(/_k_/g, "'");
    str1 = str1.replace(/_kk_/g, '"');
    return str1;
}
  //switch tab
function setActiveTab(tab, callback){
    $('.nav-tabs a[href="#' + tab + '"]').tab('show');
    /*$('.nav-tabs a[href="#' + tab + '"]').on('shown.bs.tab', function () {
        alert('ddd');
        
    });*/
    if (typeof callback == 'function') {
        callback();
    }
}

//for generate sequential number
function generateNumber(sName, Callback) {
    $.ajax({
        url: base_url + "get_number/" + sName,
        data: 'id=1',
        dataType: 'html',
        type: 'POST',
        cache: false,
        success: function(dt) {
            if (typeof Callback == 'function') {
                Callback(dt);
            }
        }
    });
}

//for AJAX
function saveAJAX(idLoading, idForm, urlRedirect, saveCallback) {
    //loading(idLoading,true);
    loadingPage();
    setTimeout(function() {
        $.ajax({
            url: base_url + 'manage',
            data: $("#" + idForm).serialize(),
            dataType: 'json',
            type: 'POST',
            cache: false,
            success: function(json) {
                //loading(idLoading,false);
                $.unblockUI();
                if (json.data.code === 1) {
                    //genericAlert('Simpan data berhasil', 'success','Sukses');
                    showAlert('Operation success', 'notice', 'Success');
                    if (urlRedirect != '') {
                        loadContent(base_url + 'view/' + urlRedirect);
                    }
                    if (typeof saveCallback == 'function') {
                        saveCallback(json);
                    }

                } else {
                    if (json.data.message == '') {
                        //genericAlert('Simpan data gagal!', 'error','Error');
                        showAlert('Operation failed!', 'error', 'Error');
                    } else {
                        //genericAlert(json.data.message, 'warning','Peringatan');
                        showAlert(json.data.message, 'warning', 'Warning');
                    }
                }
            },
            error: function () {
                //loading(idLoading,false);
                $.unblockUI();
                //genericAlert('Simpan data gagal. Terjadi kesalahan!', 'error','Error');
                showAlert('An Error has occured!', 'error', 'Error');
            }
        });
    }, 10);
}

function deleteAJAX(idLoading, modelInput, keyInput, valueInput, callbackRedirect){
    swal({
        title: "Konfirmasi Hapus",
        text: "Apakah anda yakin akan menghapus data ini?",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: " Ya",
        closeOnConfirm: false
    },
    function(){
        //loading(idLoading,true);
        loadingPage();
        setTimeout(function() {
            $.ajax({
                url: base_url + 'manage',
                data: 'model-input='+modelInput+'&action-input=3&key-input='+keyInput+'&value-input='+valueInput,
                dataType: 'json',
                type: 'POST',
                cache: false,
                success: function(json){
                    //loading(idLoading,false);
                    $.unblockUI();
                    if (json.data.code === 1) {
                        genericAlert('Hapus data berhasil','success','Sukses');
                        if (typeof callbackRedirect == 'function') {
                            callbackRedirect();
                        }
                    } else if(json.data.code === 2){
                        genericAlert('Hapus data gagal!','error','Error');
                    } else{
                        genericAlert(json.data.message,'warning','Perhatian');
                    }
                },
                error: function () {
                    //loading(idLoading,false);
                    $.unblockUI();
                    genericAlert('Tidak dapat hapus data!','error', 'Error');
                }
            });
        }, 10);
    });
}

function deleteAJAX1(idLoading, modelInput, tabID, keyInput, valueInput, callbackRedirect){
    swal({
        title: "Konfirmasi Hapus",
        text: "Apakah anda yakin akan menghapus data ini?",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: " Ya",
        closeOnConfirm: false
    },
    function(){
        //loading(idLoading,true);
        loadingPage();
        setTimeout(function() {
            $.ajax({
                url: base_url + 'manage',
                data: 'model-input='+modelInput+'&action-input=3&key-input='+keyInput+'&value-input='+valueInput+'&tab-input='+tabID,
                dataType: 'json',
                type: 'POST',
                cache: false,
                success: function(json){
                    //loading(idLoading,false);
                    $.unblockUI();
                    if (json.data.code === 1) {
                        genericAlert('Hapus data berhasil','success','Sukses');
                        if (typeof callbackRedirect == 'function') {
                            callbackRedirect();
                        }
                    } else if(json.data.code === 2){
                        genericAlert('Hapus data gagal!','error','Error');
                    } else{
                        genericAlert(json.data.message,'warning','Perhatian');
                    }
                },
                error: function () {
                    //loading(idLoading,false);
                    $.unblockUI();
                    genericAlert('Tidak dapat hapus data!','error', 'Error');
                }
            });
        }, 10);
    });
}

function getRecordIDsTable(idTable, callback1) {
    var ids = [];
    $('#'+idTable+' input[name="ids[]"]:checked').each(function() {
        ids.push($(this).val());
    });
    
    if (typeof callback1 == 'function') {
        callback1(ids);
        return true;
    } else {
        return false;
    }
}

//list item
function loadSelectOptions(idSelect, urlVal, optionCallback, errCallback){
    $.ajax({
        url: base_url + 'get_options/' + urlVal,
        data: 'idx=' + '1',
        dataType: 'html',
        type: 'POST',
        cache: false,
        success: function(htmle) {
            $("#" + idSelect).empty().append(htmle).val($("#" + idSelect + "-default").val());
            if (typeof optionCallback == 'function') {
                optionCallback();
            }
        },
        error: function () {
            if (typeof errCallback == 'function') {
                errCallback();
            }
        }
    });
}

//list item for doc action
function loadDocActionOptions(idField, docStatusId, isAllowRev, optionCallback, errCallback){
    $.ajax({
        url: base_url + 'get_options/s_doc_action/current_doc_status_id__is_active__is_allow_revision' + docStatusId + '__1__' + isAllowRev,
        data: 'idx=' + '1',
        dataType: 'html',
        type: 'POST',
        cache: false,
        success: function(htmle) {
            $("#option-doc-action-" + idField).empty().append(htmle).val();
            if (typeof optionCallback == 'function') {
                optionCallback();
            }
        },
        error: function () {
            if (typeof errCallback == 'function') {
                errCallback();
            }
        }
    });
}

//set form state & button control
function setFormState(tabID, setSatate, readOnly) {
    if (setSatate == 1) {   //edit/new state
        $("#btn-undo-" + tabID).removeAttr("disabled");
        $("#btn-save-" + tabID).removeAttr("disabled");
        $("#btn-new-" + tabID).attr("disabled","");
        $("#btn-delete-" + tabID).attr("disabled","");
    } else {
        $("#btn-undo-" + tabID).attr("disabled","");
        $("#btn-save-" + tabID).attr("disabled","");
        $("#btn-new-" + tabID).removeAttr("disabled");
        $("#btn-delete-" + tabID).removeAttr("disabled");
    }

    $("#frm-state-" + tabID).val(setSatate);

    if (readOnly == 1) {
        $("#btn-undo-" + tabID).attr("disabled","");
        $("#btn-save-" + tabID).attr("disabled","");
        $("#btn-new-" + tabID).attr("disabled","");
        $("#btn-delete-" + tabID).attr("disabled","");
    }
}

//menggunakan real db_table_name, not support special str
function getRecord(model, key, val, okCallback, noCallback) {
    $.ajax({
        url: base_url + 'object',
        data: 'model-input='+model+'&key-input='+key+'&value-input=' + val,
        dataType: 'json',
        type: 'POST',
        cache: false,
        success: function(json) {
            if (json.data.code === 0) {
                if (typeof noCallback == 'function') {
                    noCallback();
                }
            } else {
                if (typeof okCallback == 'function') {
                    okCallback(json);
                }
            }
        },
        error: function () {
            if (typeof noCallback == 'function') {
                noCallback();
            }
            console.log("An Error has occured!!!");
        }
    });
}

function getList(queryStr, okCallback, noCallback) {
    $.ajax({
        url: base_url + 'objects/' + queryStr,
        data: 'id=0',
        dataType: 'json',
        type: 'POST',
        cache: false,
        success: function(json) {
            if (json.data.code === 0) {
                if (typeof noCallback == 'function') {
                    noCallback();
                }
            } else {
                if (typeof okCallback == 'function') {
                    okCallback(json);
                }
            }
        }
    });
}

function generateColumns(idTable, callback) {
    $.ajax({
        url: base_url + 'generate_columns/' + idTable,
        data: 'id=1',
        dataType: 'json',
        type: 'POST',
        cache: false,
        success: function(json) {
            alert(json.msg);
            if (typeof callback == 'function') {
                callback(json);
            }
        }
    });
}

function CKupdate(callback){
    for ( instance in CKEDITOR.instances ) {
        CKEDITOR.instances[instance].updateElement();
    }
    if (typeof callback == 'function') {
        callback();
    }
}

function CKreplace(idEditor, callback) {
    if (CKEDITOR.instances[idEditor]) {
        CKEDITOR.instances[idEditor].destroy();
        CKEDITOR.replace(idEditor);
    }

    if (typeof callback == 'function') {
        callback();
    }
}

function CKonchange(idEditor, callback) {
	CKEDITOR.instances[idEditor].on('change', function() { 
		console.log('edited');
	    if (typeof callback == 'function') {
	        callback();
	    }
	});
}

//do send email
function sendEmail(typeAction, idRecord, callback) {
	if (typeAction != '' && idRecord != '') {
		$.ajax({
	        url: base_url + 'send_mail/' + typeAction + '/' + idRecord,
	        data: 'id=0',
	        dataType: 'json',
	        type: 'POST',
	        cache: false,
	        success: function(json) {
	            if (typeof callback == 'function') {
                    callback(json);
                }
	        },
	        error: function () {
	        	console.log('An Error has occured!. Email not send!');
	        }
	    });
	}
}

//get current stock
function getStok(inputId, productId, locatorId, okCallback, noCallback) {
    $.ajax({
        url: base_url + 'object',
        data: 'model-input=v_stock_per_item&key-input=product_id__locator_id&value-input=' + productId + '__' + locatorId,
        dataType: 'json',
        type: 'POST',
        cache: false,
        success: function(json) {
            if (json.data.code === 0) {
                if (typeof noCallback == 'function') {
                    noCallback();
                }
            } else {
                if (json.data.object != null) {
                    $("#" + inputId).val(json.data.object.qty_stock);
                    if (typeof okCallback == 'function') {
                        okCallback(json);
                    }
                } else {
                    $("#" + inputId).val(0);
                }
            }
        }
    });
}

function generateQuotRev(idQuot, callback) {
    $.ajax({
        url: base_url + 'generate_revision_quotation/' + idQuot,
        data: 'id=1',
        dataType: 'json',
        type: 'POST',
        cache: false,
        success: function(json) {
            showAlert(json.msg,'notice','Info');
            if (typeof callback == 'function') {
                callback(json);
            }
        }
    });
}

function getCurrentTime(withSecound) {
    var today = new Date();
    var curr_hour = today.getHours();
    var curr_minute = today.getMinutes();
    var curr_second = today.getSeconds();

    curr_hour = twoDigit(curr_hour);
    curr_minute = twoDigit(curr_minute);
    curr_second = twoDigit(curr_second);
    if (withSecound == true) {
        return curr_hour + ":" + curr_minute + ":" + curr_second;
    } else {
        return curr_hour + ":" + curr_minute;
    }
}
 
function twoDigit(i) {
    if (i < 10) {
        i = "0" + i;
    }
    return i;
}

/*
function manageSelect(idSelect, doAction, Val) {
    var $select = $("#" + idSelect).selectize();
    var control = $("#" + idSelect).selectize;
    if (doAction == 'clear') {
        control.clear();
    } else if(doAction == 'clearOptions') {
        control.clearOptions();
    } else if (doAction == 'setValue') {
        control.setValue([Val]);
    } else if (doAction == 'addOption') {
        control.addOption({
            id: 4,
            title: 'Something New',
            url: 'http://google.com'
        });
    }
}*/