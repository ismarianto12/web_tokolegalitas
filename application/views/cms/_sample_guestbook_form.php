<h3> Sample Form Guestbook</h3>    
<div class="col-md-6">
    <form class="form-horizontal" role="form" id="guestbook-form">
        <div id="loading"></div>
        <div class="form-group">
            <label for="name-input">Name</label>
            <input type="text" class="form-control" id="name-input" name="name-input" placeholder="Name"/>
        </div>
        <div class="form-group">
            <label for="email-input">Email</label>
            <input type="email" class="form-control" id="email-input" name="email-input" placeholder="Email"/>
        </div>
        <div class="form-group">
            <label for="phone-input">Phone</label>
            <input type="text" class="form-control" id="phone-input" name="phone-input" placeholder="Phone"/>
        </div>
         <div class="form-group">
            <label for="id_rumahsakit-input" class="control-label">Nama Kantor</label>
            <select class="form-control"  name="id_rumahsakit-input" id="id_rumahsakit-input">
                <?php
                $cat = $this->model->getList(array('table' => 'rumah_sakit', 'where' => array('is_active' => 1),  'sort' => 'nama_rumahsakit ASC'));
                if ($cat) {
                    foreach ($cat as $row) {
                        echo '<option value="'. $row->id_rumahsakit .'">'. $row->nama_rumahsakit .'</option>';
                    }
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="title-input">Title</label>
            <input type="text" class="form-control" id="title-input" name="title-input" placeholder="Title"/>
        </div>
        <div class="form-group">
            <label for="content-input">Content</label>
            <textarea class="form-control" id="content-input" name="content-input"></textarea>
        </div>
        <div class="form-group">
            <input type="hidden" id="key-input" name="key-input" value="guestbook_id" >
            <input type="hidden" id="value-input" name="value-input" value="0" >
            <button type="button" id="btn-save" class="btn btn-success"  onclick="saving(); return false;"><i class="fa fa-save"></i> Kirim Pesan</button>
        </div>
    </form>
</div>
<script>
	$(document).ready(function () {
		CKEDITOR.replace('content-input',{
            removeButtons : 'Source,Save,NewPage,Preview,Print,Templates,Cut,Undo,Copy,Redo,Paste,PasteText,PasteFromWord,Find,Replace,SelectAll,Scayt,Form,HiddenField,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,NumberedList,BulletedList,CreateDiv,BidiLtr,BidiRtl,Language,Link,Unlink,Anchor,Image,Flash,Table,HorizontalRule,Smiley,SpecialChar,PageBreak,Iframe,Styles,Format,Font,FontSize,TextColor,BGColor,Maximize,ShowBlocks,About,Indent,Outdent,Blockquote,Strike'
        });
	})

    function saving() {
        CKupdate();
        loading('loading',true);
        setTimeout(function() {
            $.ajax({
                url: base_url + 'send_guestbook',
                data: $("#guestbook-form").serialize(),
                dataType: 'json',
                type: 'POST',
                cache: false,
                success: function(json) {
                    loading('loading',false);
                    if (json.data.code === 0) {
                        if (json.data.message == '') {
                            $("#name-input, #email-input,#title-input, #content-input").val("");
                            alert('Pesan gagal dikirim!');
                        } else {
                            alert(json.data.message);
                            loadContent(base_url + 'view/_guestbook_form');
                        }
                    } else {
                        var page ='_guestbook_form/';
                        page += json.data.last_id;
                        $.ajax({url: base_url + 'proses_email/guestbook/' + json.data.last_id});
                        alert('Pesan telah berhasil dikirim');
                    }
                }, error: function () {
                    loading('loading',false);
                    alert('Terjadi kesalahan!');
                }
            });
        }, 100);
    }

    function CKupdate(){
        for ( instance in CKEDITOR.instances )
            CKEDITOR.instances[instance].updateElement();
    }
</script>