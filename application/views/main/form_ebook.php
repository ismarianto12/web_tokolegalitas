	<section>
		<div class="text-center">
				<div class="col-md-12 wow animated slideInLeft" data-wow-delay=".5s">
					<h3>Silahkan isi data diri, link download akan di kirim ke E-mail anda.</h3>
					<hr>
					<form id="form-ebook">
						<div class="form-group">
							<input type="text" class="form-control" required="required" placeholder="Name" name="name-input" id="name-input" />
						</div>
						<div class="form-group">
							<input type="text" class="form-control" required="required" placeholder="Email address" name="email-input" id="email-input" />
						</div>
						<div class="form-group">
							<textarea name="content-input" id="content-input" required="required" class="form-control" rows="4" placeholder="Message"></textarea>
						</div>
						<div class="form-group">
							<input type="hidden" id="key-input" name="key-input" value="ebook_id" >
							<input type="hidden" id="value-input" name="value-input" value="0" >
							<input type="hidden" id="type-input" name="type-input" value="ebook" >
							<button type="submit" class="btn btn-primary" onclick="proccess(); return false;">Send</button>
						</div>
					</form>
				</div>
		</div>					
	</section>
	<!-- Conatct Section End-->
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
												$("#name-input, #email-input, #content-input").val("");
												alert('Pesan gagal dikirim!');
											} else {
												alert(json.data.message);
											}
										} else {
											var page ='_ebook_form/';
											page += json.data.last_id;
											$.ajax({url: base_url + 'proses_email/ebook/' + json.data.last_id});
											alert('Pesan telah berhasil dikirim');
											$("#name-input, #email-input,#content-input").val("")
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