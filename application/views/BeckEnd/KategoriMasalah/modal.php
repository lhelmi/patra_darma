<script type="text/javascript">
	$(function(){

	const flashdata = $('.flash-data').data('flash');
	if (flashdata) {
		swal({
			title: 'Data ' + '<?= $title ?>',
			text:  flashdata,
			type: 'success',
			timer: 1500,
		});
	}

	$('#responsive-modal').on('hidden.bs.modal', function (e) {
    	$('#IdKategori').val('');
		$('#NamaKategori').val('');
		$('#JenisPerkara').val('');

		$('.form-group').find('.text-danger').remove();
		$('.form-group').removeClass('has-success has-feedback').find('.text-danger').remove();
		$('.form-group').removeClass('has-error has-feedback').find('.text-danger').remove();
	});

	$('#modaltambah').on('click', function(){
		$('.modal-content form').attr('action', "<?= base_url('KategoriMasalah/add') ?>");
		$('.modal-title').html('Tambah Data <?= $title; ?>');
		$('.modal-footer button[type=submit] ').html('Simpan')
		
		$('.form-group').find('.text-danger').remove();
		$('.form-control').removeClass('has-error has-feedback').find('.text-danger').remove();
	});

	$('#myTable').on('click', '#modalubah', function(){
		$('.modal-content form').attr('action', "<?= base_url('KategoriMasalah/edit') ?>");
		$('.modal-title').html('Ubah Data <?= $title; ?>');
		$('.modal-footer button[type=submit] ').html('Ubah')
		const id = $(this).data('id');
		
		$.ajax({
			url:'<?= base_url('KategoriMasalah/getubah'); ?>',
			data:{id : id},
			method: 'post',
			dataType:'json',
			success: function(data){
				$('#IdKategori').val(data.IdKategori);
				$('#NamaKategori').val(data.NamaKategori);
				$('#JenisPerkara').val(data.JenisPerkara);
			}
		});
	});

	$('#frmid').on('submit', function(event){
		event.preventDefault();
		var me = $(this);

		$.ajax({
			url: me.attr('action'),
			type: 'post',
			data:new FormData(this),
			processData:false,
			contentType:false,
			cache:false,
			async:false,
                     
			dataType:'json',
			success: function(response){
				if (response.success == true) {
					window.location.href =  '';
				}else{
					$.each(response.messages, function(key, value){
						
						var element = $('#' + key);
						$(element).closest('.form-group')
						.removeClass('has-error has-feedback')
						.addClass(value.length > 0 ? 'has-error has-feedback' : 'has-success has-feedback')
						.find('.text-danger')
						.remove();

						$(element).closest('.form-group').find('.text-danger').remove();
						$(element).after(value);
					});
				}
			},
			error : function(response){
				alert('error');
			}
		});


	});

	$('#myTable').on('click', '#btndelete', function(){
		const id = $(this).data('id');
		swal({
			title: 'Apakah anda yakin?',
			text: "Anda tidak akan dapat mengembalikan data ini!",
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			cancelButtonText : 'Batal',
			confirmButtonText: 'Ya, Hapus!'
		}, function(isConfirm){
			if (isConfirm) {
				$.ajax({
					url:'<?= base_url('KategoriMasalah/delete'); ?>',
					data:{id : id},
					method: 'post',
					dataType:'json',
					success: function(data){
						window.location.href =  '';
					},
					error:function(data){
						alert('error')
					}
				});
			}
		});
	});

});
</script>