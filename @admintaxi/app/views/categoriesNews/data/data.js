jQuery(document).ready(function($) {
  fill_datatable();
  function fill_datatable(search_value) {
		if (typeof search_value === 'undefined'){
			search_value = null;
		}
		$(table_id).DataTable({
			"aoColumnDefs": [ {"bSortable" : false, "bAutoWidth": true, "aTargets" : [2,3,4,5] } ],
			"paging": true,
			"lengthChange": true,
			"ordering": false,
			"info": true,
			"autoWidth": true,
			stateSave: true,
			
			//"responsive": true,
			"lengthMenu": [[20, 25, 30, 50, 100, -1], [20, 25, 30, 50, 100, all_page]],
			//scrollY: sy,
			scrollX:        true,
			scrollCollapse: true,
			fixedColumns:   {
				leftColumns: 0,
				rightColumns: 0
			},
			"language": {
				"url": lang_url
			},
			//pageLength: 2,
			"searching": false,
			processing: true,
			serverSide: true,
			ajax: {
				"url": backend_cate_news_list,
				"dataType": "json",
				"type": "GET",
				"data":{search_value: search_value}
			},
			"footerCallback": function ( row, data, start, end, display ) {
				var api = this.api(), data;
			},
			"fnRowCallback": function( nRow, aData, iDisplayIndex, iDisplayIndexFull) {
				$(nRow).attr("data-id",aData[1]);
				return nRow;
			},
			columns: [
				{ data: 'no', name: 'no',className: "text-center text-nowrap small_text" },
				{ data: 'titleCate', name: 'titleCate', className: "text-left text-nowrap small_text" },
				{ data: 'imageCate', name: 'imageCate',className: "text-center text-nowrap small_text" },
				{ data: 'sortOrder', name: 'sortOrder',className: "text-center text-nowrap small_text" },
				{ data: 'active', name: 'active', className: "text-center text-nowrap small_text" },
				/*{ data: 'showHide', name: 'showHide', className: "text-center text-nowrap" },*/
				{ data: 'actions', name: 'actions', className: "text-center text-nowrap" }
			]
		});
  }
  $(document).on('click', '#ok', function(){
		var search_value = $.trim($('#search_value').val());
		if (search_value != '') {
			$(table_id).DataTable().destroy();
			fill_datatable(search_value);
		}
  });
  $('input:not([type="submit"])').keypress(function (e) {
		if (e.which == 13) {
			var search_value = $.trim($('#search_value').val());
			if (search_value != '') {
				$(table_id).DataTable().destroy();
				fill_datatable(search_value);
			}
		}
  });
  $('#btnReset').click(function(){
		$(table_id).DataTable().state.clear();
		$(table_id).DataTable().destroy();
		fill_datatable('');
  });
	let multi_id = [];
	$('#categories tbody').on('click', 'tr', function() {
		let id = this.id;
		let index = $.inArray(id, multi_id);
		if (index === -1)
			multi_id.push(id);
		else
			multi_id.splice(index, 1);
		$(this).toggleClass('bg-gradient-warning');
	});
	// delete
	$(document).on('click', '#delete_multi', function() {
		let id = multi_id;
		if (multi_id.length < 1)
			alert(notChooseAny);
		else {
			let conf = "";
			if (multi_id.length == 1)
				conf = deleteConfirmText + cateNewsText + ' ' + thisText + ' ?';
			else
				conf = deleteMultiConfirmText + cateNewsText + ' ' + thisText + ' ?';
			if (confirm(conf)) {
				$('#delete_multi').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>');
				$.post(processDelete, {id: id}, function(data) {
					$('#delete_multi').html('<i class="fas fa-trash-alt"></i> ' + deleteMultiText);
					$(table_id).DataTable().destroy();
					fill_datatable('');
				});
			}
		}
	});
	$(document).on('click', '.delete', function() {
		let id = $(this).attr('data-id');
		let conf = deleteConfirmText + cateNewsText + ' ' + thisText + ' ?';
		if (confirm(conf)) {
			$(this).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>');
			$.post(processDelete, {id: id}, function(data) {
				$(this).html('<i class="fas fa-trash-alt"></i>');
				$(table_id).DataTable().destroy();
				fill_datatable('');
			});
		}
	});
	// active
	$(document).on('click', '.active', function() {
		let id = $(this).attr('rel');
		let act = $(this).attr('data-active');
		let conf = "";
		if (act == 1)
			conf = activeConfirmText + cateNewsText + ' ' + thisText + ' ? ' + effectTo + activeForm + ' ' + multiple + ' ' + newsText + ' ' + theSameCate;
		else 
			conf = deactiveConfirmText + cateNewsText + ' ' + thisText + ' ? ' + effectTo + deactiveForm + ' ' + multiple + ' ' + newsText + ' ' + theSameCate;
		if (confirm(conf)) {
			$(this).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>');
			$.post(processActive, {id: id, active: act}, function(data) {
				$(table_id).DataTable().destroy();
				fill_datatable('');
			});
		}
	});
	// show / hide
	$(document).on('click', '.showHideUpdate', function() {
		let id = $(this).attr('rel');
		let hs = $(this).attr('data-hs');
		let conf = "";
		if (hs == 1)
			conf = showConfirmText + cateNewsText + ' ' + thisText + ' ? ' + effectTo + showText + ' ' + multiple + ' ' + newsText + ' ' + theSameCate;
		else 
			conf = hideConfirmText + cateNewsText + ' ' + thisText + ' ? ' + effectTo + hideText + ' ' + multiple + ' ' + newsText + ' ' + theSameCate;
		if (confirm(conf)) {
			$(this).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>');
			$.post(processShowHide, {id: id, showHide: hs}, function(data) {
				$(table_id).DataTable().destroy();
				fill_datatable('');
			});
		}
	});
	// sort
	$(document).on('change', '.sortUpdate', function() {
		let id = $(this).attr('id');
		let sortOrder = $(this).val();
		$(this).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>');
		$.post(processSort, {id: id, sortOrder: sortOrder}, function(data) {
			$(table_id).DataTable().destroy();
			fill_datatable('');
		});
	}).change();
	// add
	let modalAdd = $('#modal-add');
  $(document).on('click', '.add', function(){
    $.post(addLink, function(dataResponse){
      modalAdd.html(dataResponse);
      modalAdd.modal('show');
    });    
  });
	let addCate = '#addCateNews';
	let btnAddCate = $(addCate);
	$(document).on('click', addCate, function() {
		let titleCateElement = $('#titleCate'+lngDefault);		
		let titleCate = $.trim(titleCateElement.val());
		if (titleCate == '') {
			toastr.error(notFill + 'tiêu đề ' + cateNewsText);
			titleCateElement.addClass('is-invalid');
			titleCateElement.focus();
			return false;
		} else {
			titleCateElement.removeClass('is-invalid');
			titleCateElement.addClass('is-valid');
		}
		let formAdd = $('#form_add');
		formAdd.ajaxForm({
			beforeSend: function() {
				btnAddCate.attr("disabled",true);
				btnAddCate.html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> ' + processing); 
			},
			uploadProgress: function(event, position, total, percentComplete) {
													
			},
			success: function() {
					
			},
			complete: function(xhr) {
			 	btnAddCate.html(saveText + ' <i class="fas fa-save">');
				btnAddCate.removeAttr('disabled');
				var text = xhr.responseText;
				var n = text.split(";");
				if(n[0] == '1'){
					toastr.success(addSuccessText);
					modalAdd.modal('hide');
					$(table_id).DataTable().state.clear();
					let search_value = '';
					$(table_id).DataTable().destroy();
					fill_datatable(search_value);
				} else {   
					if (n[0] == '5') {
						toastr.error(sessionTimeout);
						setTimeout(function() {
							window.location.reload();
						}, 1000);
					} else {
						toastr.error(system_error);
						return false;
					}	
				}
 			}
		});
	});
	// update
	let modalUpdate = $('#modal-update');
	$(document).on('click', '.update', function(){
		let id = $(this).attr('data-id');
    $.post(updateLink, {id: id}, function(dataResponse){
      modalUpdate.html(dataResponse);
      modalUpdate.modal('show');
    });    
  });
	let updateCate = '#updateCateNews';
	let btnUpdateCate = $(updateCate);
	$(document).on('click', updateCate, function() {
		let titleCateElement_e = $('#titleCate'+lngDefault+'_e');		
		let titleCate_e = $.trim(titleCateElement_e.val());
		if (titleCate_e == '') {
			toastr.error(notFill + 'tiêu đề ' + cateNewsText);
			titleCateElement_e.addClass('is-invalid');
			titleCateElement_e.focus();
			return false;
		} else {
			titleCateElement_e.removeClass('is-invalid');
			titleCateElement_e.addClass('is-valid');
		}
		let formUpdate = $('#form_update');
		formUpdate.ajaxForm({
			beforeSend: function() {
				btnUpdateCate.attr("disabled",true);
				btnUpdateCate.html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> ' + processing); 
			},
			uploadProgress: function(event, position, total, percentComplete) {
													
			},
			success: function() {
					
			},
			complete: function(xhr) {
			 	btnUpdateCate.html(updateText + ' <i class="fas fa-edit">');
				btnUpdateCate.removeAttr('disabled');
				var text = xhr.responseText;
				var n = text.split(";");
				if(n[0] == '1'){
					toastr.success(updateSuccessText);
					modalUpdate.modal('hide');
					let search_value = '';
					$(table_id).DataTable().destroy();
					fill_datatable(search_value);
				} else {   
					if (n[0] == '5') {
						toastr.error(sessionTimeout);
						setTimeout(function() {
							window.location.reload();
						}, 1000);
					} else {
						toastr.error(system_error);
						return false;
					}	
				}
 			}
		});
	});

});

