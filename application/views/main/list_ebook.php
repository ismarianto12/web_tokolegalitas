		<section style="margin-top: 20px;margin-bottom: 10px;">
			<?php 
			if ($ebooks) {
				foreach ($ebooks as $row) {
					?>
					
					<div class="col-md-6" style="margin-bottom: 20px;">
					<div class="col-md-3" style="width: 130px; height: 170px;">
						<img src="<?php echo base_url('assets/image/ebook/thumb/' . $row->img);?>" style="width: 130px; height: 170px;" alt="NO IMAGE">
						</div>
						<div class="col-md-6">
					<h4><u><?php echo ($row->title);?></u></a></h4>					
					<button onclick="pilihEbook('<?php echo $row->ebook_id;?>');" class="btn btn-success" style="width:auto;">Download</button>
					<hr>
					</div>	

					</div>	
				
					<?php 
				}
			}
			?>
		</section>
		<div id="id01" class="modal">  
			<div class="container">
				<form id="form-ebook" class="modal-content" >
					<div class="col-lg-12 white">
						<h5>Silahkan isi data berikut, link download akan di kirim ke E-mail anda....</h5>
						<input type="text" required="required" placeholder="Name" name="name-input" id="name-input" />
						<input type="hidden" name="id-ebook-input" id="id-ebook-input" value="">
						<input type="text" required="required" placeholder="Email address" name="email-input" id="email-input" />
						<div>
							<textarea class="textarea" name="content-input" id="content-input" required="required" rows="4" placeholder="Message"></textarea>
						</div>
						<button type="submit" class="btn btn-success btn-lg" onclick="proccess(); return false;">Send</button>
						<button onclick="document.getElementById('id01').style.display='none'" class="btn btn-danger btn-lg" >Cancel</button>
						<input type="hidden" id="key-input" name="key-input" value="ebook_id" >
						<input type="hidden" id="value-input" name="value-input" value="0" >
						<input type="hidden" id="type-input" name="type-input" value="ebook" >
					</div>

				</form>
			</div>
		</div>
		<script src="<?php echo base_url();?>assets/cms/js/function.js"></script>
		<script src="<?php echo base_url();?>assets/cms/js/jquery.blockUI.js"></script>
		<script src="<?php echo base_url();?>assets/cms/ckeditor_full/ckeditor.js"></script>
		<script type="text/javascript">
			var base_url = '<?php echo base_url();?>';
		</script>
		<script type="text/javascript">
			$(document).ready(function () {
				CKEDITOR.replace('content-input',{
					removeButtons : 'Source,Save,NewPage,Preview,Print,Templates,Cut,Undo,Copy,Redo,Paste,PasteText,PasteFromWord,Find,Replace,SelectAll,Scayt,Form,HiddenField,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,NumberedList,BulletedList,CreateDiv,BidiLtr,BidiRtl,Language,Link,Unlink,Anchor,Image,Flash,Table,HorizontalRule,Smiley,SpecialChar,PageBreak,Iframe,Styles,Format,Font,FontSize,TextColor,BGColor,Maximize,ShowBlocks,About,Indent,Outdent,Blockquote,Strike'
				});
			});

		// Get the modal
		var modal = document.getElementById('id01');

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}

		function pilihEbook(x) {
			//document.getElementById('id01').style.display='block'
			$("#id-ebook-input").val(x);
			$("#id01").show();
		}

	function proccess() {
		CKupdate();
		loading('loading',true);
		setTimeout(function() {
			$.ajax({
				url: base_url + 'send_ebook',
				data: $("#form-ebook").serialize() + '&title-input=Ebook',
				dataType: 'json',
				type: 'POST',
				cache: false,
				success: function(json) {
					loading('loading',false);
					if (json.data.code === 0) {
						if (json.data.message == '') {
							$("#name-input, #email-input, #content-input, #id-ebook-input").val("");
							alert('Pesan gagal dikirim!');
						} else {
							alert(json.data.message);
						}
					} else {
						var page ='_ebook_form/';
						page += json.data.last_id;
						//tidak dipakai krn sudah pakai PHP
						/*$.ajax({url: base_url + 'proses_email/ebook/' + json.data.last_id});*/
						alert('Link download telah berhasil dikirim, silahkan periksa email anda...');
						$("#name-input, #email-input,#content-input,#id-ebook-input").val("");
						$("#id01").hide();
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

