<?php
$user = null;
if ($param != null) {
    $user = $this->model->getRecord(array(
        'table' => 'm_user', 'where' => array('user_id' => $param)
    ));
}
?>
<div class="nav-tabs-custom">
    <ul class="nav nav-tabs pull-right">
        <li class="active">
            <a data-toggle="tab" href="#user-table-tab" title="Table View">
                <i class="fa fa-table"></i>
            </a>
        </li>
        <li class="">
            <a data-toggle="tab" href="#user-form-tab" title="Form View">
                <i class="fa fa-edit"></i>
            </a>
        </li>
        <li class="pull-left header"><i class="fa fa-users"></i> User Management</li>
        <div id="loading"></div>
    </ul>
    <div class="tab-content">
        <div id="user-table-tab" class="tab-pane fade active in">
            <table id="table-user" class="table table-bordered table-striped table-hover table-condensed">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Level</th>
                        <th>Status</th>
                        <th>Nama Kantor</th>
                        <th><a href="#" class="btn btn-xs btn-success" onclick="newForm()" id="btn-add"> <i class="fa fa-plus"></i> Add Data</a></th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
        <div id="user-form-tab" class="tab-pane fade">
            <form class="form-horizontal" role="form" id="user-form">
                <div class="form-group">
                    <label for="username-input" class="col-md-3 control-label">Username</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="username-input" name="username-input" placeholder="Username" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="name-input" class="col-md-3 control-label">Name</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="name-input" name="name-input" placeholder="Name" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="email-input" class="col-md-3 control-label">Email</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="email-input" name="email-input" placeholder="Email" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="password-input" class="col-md-3 control-label">Password</label>
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-addon"><span class="fa fa-lock"></span></span>
                            <input type="password" class="form-control" id="password-input" name="password-input" placeholder="Password Default 123" />
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="phone-input" class="col-md-3 control-label">Phone</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="phone-input" name="phone-input" placeholder="phone." />
                    </div>
                </div>

                <div class="form-group">
                    <label for="status-input" class="col-md-3 control-label">Nama Kantor</label>
                    <div class="col-md-6">
                        <select class="form-control" name="rumahsakit_id" id="rumahsakit_id">
                            <?php foreach ($this->db->get('rumah_sakit')->result_array() as $rs) : ?>
                                <option value="<?= $rs['id_rumahsakit'] ?>"><?= $rs['nama_rumahsakit'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="level-input" class="col-md-3 control-label">Level</label>
                    <div class="col-md-6">
                        <select class="form-control" name="level-input" id="level-input">
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="status-input" class="col-md-3 control-label">Status</label>
                    <div class="col-md-6">
                        <select class="form-control" name="status-input" id="status-input">
                            <option value="1">Aktif</option>
                            <option value="0">Non Aktif</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-4">
                        <input type="hidden" id="model-input" name="model-input" value="user">
                        <input type="hidden" id="action-input" name="action-input" value="1">
                        <input type="hidden" id="key-input" name="key-input" value="user_id">
                        <input type="hidden" id="value-input" name="value-input" value="0">
                        <button type="button" id="btn-save" class="btn btn-success" onclick="saving(); return false;"><i class="fa fa-save"></i> Save</button>
                        <button type="reset" class="btn btn-default" onclick="setActiveTab('user-table-tab');"><i class="fa fa-undo"></i> Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        getUser();
        <?php
        if ($user != null) {
            echo 'getData("' . $param . '");';
            echo 'setActiveTab("user-form-tab");';
        }
        ?>
    });

    function newForm() {
        loadContent(base_url + "view/_user_form", function() {
            setActiveTab("user-form-tab");
        });
    }

    function getUser() {
        if ($.fn.dataTable.isDataTable('#table-user')) {
            tableUser = $('#table-user').DataTable();
        } else {
            tableUser = $('#table-user').DataTable({
                "ajax": base_url + 'objects/user',
                "columns": [{
                        "data": "username"
                    },
                    {
                        "data": "name"
                    },
                    /*{"data": "position"},*/
                    {
                        "data": "email"
                    },
                    {
                        "data": "phone"
                    },
                    {
                        "data": "level"
                    },
                    {
                        "data": "is_active"
                    },
                    {
                        "data": "nama_rs"
                    },
                    {
                        "data": "aksi",
                        "width": "15%"
                    }
                ],
                "ordering": true,
                "deferRender": true,
                "order": [
                    [0, "asc"]
                ],
                "fnDrawCallback": function(oSettings) {
                    utilUser();
                }
            });
        }
    }

    function utilUser() {
        <?php
        if ($this->session->userdata('_LEVEL') == 'user') {
            echo '$("#table-user .editBtn, #table-user .removeBtn, #btn-add, #btn-save").hide();';
        }
        ?>
        $("#table-user .editBtn").on("click", function() {
            loadContent(base_url + 'view/_user_form/' + $(this).attr('href').substring(1));
        });

        $("#table-user .removeBtn").on("click", function() {
            konfirmDelete($(this).attr('href').substring(1));
        });
    }

    function saving() {
        loading('loading', true);
        setTimeout(function() {
            $.ajax({
                url: base_url + 'manage',
                data: $("#user-form").serialize(),
                dataType: 'json',
                type: 'POST',
                cache: false,
                success: function(json) {
                    loading('loading', false);
                    if (json.data.code === 0) {
                        if (json.data.message == '') {
                            genericAlert('Penyimpanan data gagal!', 'error', 'Error');
                        } else {
                            genericAlert(json.data.message, 'warning', 'Peringatan');
                        }
                    } else {
                        var page = '_user_form/';
                        page += json.data.last_id;
                        genericAlert('Penyimpanan data berhasil', 'success', 'Sukses');
                        loadContent(base_url + 'view/' + page);
                    }
                }
            });
        }, 100);
    }

    function getData(idx) {
        $.ajax({
            url: base_url + 'object',
            data: 'model-input=user&key-input=user_id&value-input=' + idx,
            dataType: 'json',
            type: 'POST',
            cache: false,
            success: function(json) {
                if (json.data.code === 0) {
                    loginAlert('Akses tidak sah');
                } else {
                    $("#username-input").val(json.data.object.username).attr('readonly', '');
                    $("#name-input").val(json.data.object.name);
                    $("#position-input").val(json.data.object.position);
                    $("#email-input").val(json.data.object.email);
                    $("#phone-input").val(json.data.object.phone);
                    $("#level-input").val(json.data.object.level);
                    $("#status-input").val(json.data.object.is_active);
                    $("#password-input").attr("placeholder", "Kosongkan jika ingin mengubah password");
                    $("#action-input").val('2');
                    $("#value-input").val(json.data.object.user_id);
                }
            }
        });
    }

    function konfirmDelete(n) {
        swal({
                title: "Konfirmasi Hapus",
                text: "Apakah anda yakin akan menghapus data ini?",
                type: "warning",
                showCancelButton: true,
                confirmButtonClass: "btn-danger",
                confirmButtonText: " Ya",
                closeOnConfirm: false
            },
            function() {
                loading('loading', true);
                setTimeout(function() {
                    $.ajax({
                        url: base_url + 'manage',
                        data: 'model-input=user&action-input=3&key-input=user_id&value-input=' + n,
                        dataType: 'json',
                        type: 'POST',
                        cache: false,
                        success: function(json) {
                            loading('loading', false);
                            if (json.data.code === 1) {
                                genericAlert('Hapus data berhasil', 'success', 'Sukses');
                                refreshTable();
                            } else if (json.data.code === 2) {
                                genericAlert('Hapus data gagal!', 'error', 'Error');
                            } else {
                                genericAlert(json.data.message, 'warning', 'Perhatian');
                            }
                        },
                        error: function() {
                            loading('loading', false);
                            genericAlert('Tidak dapat hapus data!', 'error', 'Error');
                        }
                    });
                }, 100);
            });
    }

    function refreshTable() {
        tableUser.ajax.url(base_url + '/objects/user').load();
    }
</script>