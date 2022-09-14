jQuery(document).ready(function($) {
  fill_datatable();
  function fill_datatable(search_value)
  {
      if (typeof search_value === 'undefined'){
          search_value = null;
      }
      
      $(table_id).DataTable({
          "aoColumnDefs": [ {"bSortable" : false, "aTargets" : [2,3,4,5] } ],
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
              "data":{search_value: search_value},
              error: function (xhr, error, code)
              {
                  //alert('error'+parse(xhr));
                  //location.reload();
              }
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
              { data: 'active', name: 'active', className: "text-center text-nowrap small_text" },
              { data: 'sortOrder', name: 'sortOrder',className: "text-center text-nowrap small_text" },
              { data: 'showHide', name: 'showHide', className: "text-center text-nowrap small_text" },
              { data: 'actions', name: 'actions', className: "text-center text-nowrap" }
          ]
          /*,
          dom: 'Blfrtip',
          buttons: [
              {
                  text: '<img src="app/views/icon_excel.png" />',
                  extend: 'excelHtml5',
                  autoFilter: true,
                  sheetName: 'Danh sach nhân viên',                
              },
              {
                  text: '<img src="app/views/icon_pdf.png" />',
                  extend: 'pdfHtml5',
                  title: 'Danh sách nhân viên',
                  orientation: 'landscape',
                  pageSize: 'LEGAL'
              }
          ]
          */
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
      window.location.reload();
  });
  $(document).on('click', '.add', function(){
    $.post(addLink, function(dataResponse){
      $('#cateNewsAdd').html(dataResponse);
      $('#modal-add').modal('show');
    });
    
  });
});

