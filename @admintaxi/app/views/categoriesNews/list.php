<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header container-fluid">
            <div class="row">
                <h3 class="col-md-12 card-title">
                    <?php echo $lang['manageCategoryNews'] ?>
										<a class="float-right btn btn-success cursorPointer add"><?php echo $lang['addText'] ?></a>
                </h3>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="col-md-12 form-inline mb-2" role="form">
							<div class="form-group">
								<label><?php echo $lang['search'] ?>: </label>
								<input name="search_value" id="search_value" class="form-control w100 ml-2" type="text" placeholder="" />
							</div>
							<button id="ok" type="button" class="btn btn-success ml-1 mr-1"><?php echo $lang['search'] ?></button>
							<button id="btnReset" type="button" class="btn btn-success ml-1 mr-1"><?php echo $lang['all'] ?></button>
						</div>
            <div id="passreset" class="text-center"></div>
            <table id="categories" class="table table-bordered table-hover table-striped">
              <thead>
              <tr>
                <th width="7%" align="center"><?php echo $lang['no.'] ?></th>
                <th width="15%" align="center"><?php echo $lang['titleForm'] ?></th>
                <th align="center"><?php echo $lang['imageForm'] ?></th>                
                <th align="center"><?php echo $lang['activeForm'] ?></th>
                <th align="center"><?php echo $lang['sortForm'] ?></th>
                <th align="center"><?php echo $lang['showHideForm'] ?></th>
                <th width="15%" align="center"><?php echo $lang['actions'] ?></th>
              </tr>
              </thead>
              <tfoot>
								<tr>
									<th width="7%" align="center"><?php echo $lang['no.'] ?></th>
									<th width="15%" align="center"><?php echo $lang['titleForm'] ?></th>
									<th align="center"><?php echo $lang['imageForm'] ?></th>                
									<th align="center"><?php echo $lang['activeForm'] ?></th>
									<th align="center"><?php echo $lang['sortForm'] ?></th>
									<th align="center"><?php echo $lang['showHideForm'] ?></th>
									<th width="15%" align="center"><?php echo $lang['actions'] ?></th>
								</tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- add -->
<div class="modal fade" id="modal-add">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title text-uppercase"><?php echo $lang['addCateNewsText'] ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <!--  -->
            <form method="post" action="<?php echo $def['cateNewsAddProcess'] ?>" id="form_add" enctype="multipart/form-data">
                <div class="modal-body container-fluid">
                    <div class="row" id="cateNewsAdd"></div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="reset" class="btn btn-default"><?php echo $lang['reset'] ?> <i class="fas fa-undo"></i></button>
                    <button type="submit" id="addCateNews" class="btn btn-success"><?php echo $lang['save'] ?> <i class="fas fa-save"></i></button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- /.content -->
<script type="text/javascript">
    var backend_cate_news_list = "<?php echo $def['listDataCateNews'] ?>";
    var table_id = "#categories";    
		var addLink = "<?php echo $def['cateNewsAdd'] ?>";
		var processAdd = "<?php echo $def['cateNewsAddProcess'] ?>";
		var updateLink = "<?php echo $def['cateNewsUpdate'] ?>";
		var processUpdate = "<?php echo $def['cateNewsUpdateProcess'] ?>";
		var processDelete = "<?php echo $def['cateNewsDeleteProcess'] ?>";
    var cateNewsText = "<?php echo $lang['cateNewsText'] ?>";
</script>
<script src="<?php echo $def['listDataCateNewsJs'] ?>"></script>
<script type="text/javascript">
    $(document).ready(function(){
      $(document).on('click', '.delete', function(){
        if (confirm("<?php echo $lang['confirm_delete'] ?>")) {
          var id = $(this).data('id');
          $(this).html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>');
          $(this).parent().parent().hide();
          $.post("<?php echo $link_delete ?>", { id: id }, function(data){
              
          });
        }
      });        
    });
</script>