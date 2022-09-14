<?php
  require_once "../../../../library.php";
  $table = $prefixTable.'categories_news';
  $max = $h->getMax($table, 'sortOrder', 'maxSortOrder');
  if ($max == 0)
    $sortOrder = 1;
  else
    $sortOrder = $max;
?>
<div class="col-md-12">
  <div class="form-group">
    <label class="col-form-label" for="name"><?php echo $lang['titleForm'].$lngDefaultText ?></label>
    <input type="text" class="form-control" name="data[titleCate<?php echo $lngDefault ?>]" id="titleCate<?php echo $lngDefault ?>" />
  </div>
</div>
<div class="col-md-6">
  <div class="form-group">
    <label class="col-form-label" for="imageCate"><?php echo $lang['imageForm'] ?></label>
    <div class="input-group">
      <div class="custom-file">
        <input type="file" class="custom-file-input" id="imageCate" name="imageCate">
        <label class="custom-file-label" for="imageCate"></label>
      </div>
    </div>
    <small class="text-danger"><i><?php echo $lang['sizeImageForm'] ?></i></small>
    <div id="display-image"></div>
  </div>
</div>
<div class="col-md-6">
  <div class="form-group">
    <label class="col-form-label" for="imageShareFb"><?php echo $lang['imageShareFb'] ?></label>
    <div class="input-group">
      <div class="custom-file">
        <input type="file" class="custom-file-input" id="imageShareFb" name="imageShareFb">
        <label class="custom-file-label" for="imageShareFb"></label>
      </div>
    </div>
    <small class="text-danger"><i><?php echo $lang['sizeImageShareFb'] ?></i></small>
    <div id="display-image-sharefb"></div>
  </div>
</div>
<div class="col-md-4">
  <div class="form-group">
    <label class="col-form-label" for="sortOrder"><?php echo $lang['sortForm'] ?></label>
    <input type="number" class="form-control" min="1" name="data[sortOrder]" id="sortOrder" value="<?php echo $sortOrder ?>" />
  </div>
</div>
<div class="col-md-4">
  <div class="form-group">
    <label class="col-form-label" for="active"><?php echo $lang['activeForm'] ?></label><br />
    <input type="checkbox" name="active" id="active" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">
  </div>
</div>
<div class="col-md-4">
  <div class="form-group">
    <label class="col-form-label" for="showHide"><?php echo $lang['showHideForm'] ?></label><br />
    <input type="checkbox" name="showHide" id="showHide" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">
  </div>
</div>
<div class="col-md-12 card card-success">
  <div class="card-header">
    <div class="card-title"><?php echo $lang['infoForSeo'] ?></div>
  </div>
</div>
<div class="col-md-12">
  <div class="form-group">
    <label class="col-form-label" for="name"><?php echo $lang['titleWebsite'].$lngDefaultText ?></label>
    <input type="text" class="form-control" name="data[titleSeo<?php echo $lngDefault ?>]" id="titleSeo<?php echo $lngDefault ?>" />
  </div>
</div>
<div class="col-md-12">
  <div class="form-group">
    <label class="col-form-label" for="name"><?php echo $lang['descriptionSeo'].$lngDefaultText ?></label>
    <textarea class="form-control" name="data[descriptionSeo<?php echo $lngDefault ?>]" id="descriptionSeo<?php echo $lngDefault ?>" rows="3"></textarea>
  </div>
</div>
<div class="col-md-12">
  <div class="form-group">
    <label class="col-form-label" for="name"><?php echo $lang['keywordSeo'].$lngDefaultText ?></label>
    <textarea class="form-control" name="data[keywordSeo<?php echo $lngDefault ?>]" id="keywordSeo<?php echo $lngDefault ?>" rows="3"></textarea>
  </div>
</div>
<style type="text/css">
  #display-image, #display-image-sharefb {display: none;margin-top: 5px}
</style>
<script src="<?php echo $def['themePlugins']; ?>bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script src="<?php echo $def['themeJs'].'show_image_before_upload.js' ?>"></script>
<!-- Bootstrap Switch -->
<script src="<?php echo $def['themePlugins']; ?>bootstrap-switch/js/bootstrap-switch.min.js"></script>
<script type="text/javascript">
  $(document).ready(function () {
    bsCustomFileInput.init();
  });
  // show image before upload
  showImageBeforeUpload('#imageCate', '#display-image', 90); 
  showImageBeforeUpload('#imageShareFb', '#display-image-sharefb', 90); 
  $("input[data-bootstrap-switch]").each(function() {
    $(this).bootstrapSwitch('state', $(this).prop('checked'));
  }); 
</script>


<!--
<script type="text/javascript" src="<?php echo _tinymce ?>tinymce.min.js"></script>
<script type="text/javascript">
  tinymce.init({
    selector: "textarea#content<?php echo $lngDefault ?>, textarea#content<?php echo $lngDefault ?>_e",
    theme: "modern",
    width: 750,
    height: 300,
    plugins: [
      "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
      "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
      "save table contextmenu directionality emoticons template paste textcolor responsivefilemanager"
    ],
    image_advtab: true,
    //content_css: "css/content.css",
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons responsivefilemanager",
    external_filemanager_path: "<?php echo _filemanager ?>",
    filemanager_title: "Responsive Filemanager",
    external_plugins: {
      "filemanager": "<?php echo _filemanager ?>plugin.min.js"
    },
    style_formats: [{title: 'Bold text', inline: 'b'}, {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}}, {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}}, {title: 'Example 1', inline: 'span', classes: 'example1'}, {title: 'Example 2', inline: 'span', classes: 'example2'}, {title: 'Table styles'}, {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
    ]
  });
</script>
-->
