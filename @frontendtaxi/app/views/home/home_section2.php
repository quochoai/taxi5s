<!-- order -->
<div class="container">
  <div class="form-title"><h2 class="padding40"><?php _e($lang['home_whereOrder']) ?></h2><span>&nbsp;</span></div>
  <div class="hot-place2 ">
    <div class="grid22">
      <?php
        $tableCateOrder = $prefixTable.$def['tableCategoriesOrders'];
        $checkCateOrder = $h->checkExist($tableCateOrder, "deleted_at is null and active = 1");
        if ($checkCateOrder) {
          $cates = $h->getAllSelect("id, titleCate, imageCate", $tableCateOrder, "deleted_at is null and active = 1", "created_at desc, id desc", "limit 0, 4");
          $numCate = 0;
          $msgCate = "";
          foreach ($cates as $kcate => $cate) {
            if (file_exists(_ImgUploadRealPath.'cateOrders/'.$cate['imageCate']) && $cate['imageCate'] != '') 
              $imgCate = _imgUpload.'cateOrders/'.$cate['imageCate'];
            else
              $imgCate = _noImage;
            $titleCate = $cate['titleCate'];
            $linkCateOrder = $def['actionOrder'].'/'.chuoilink($cate['titleCate']);
            $numCate = $kcate + 1;
            $msgCate .= '<figure class="item effect-apollo-- effect-apollo4-- col-left col-md-3 col-xs-12" style="">';
            $msgCate .= ' <div class="inner">';
            $msgCate .= '   <a href="'.$linkCateOrder.'" title="'.$titleCate.'"><img style="width: 100%;" src="'.$imgCate.'" alt="'.$titleCate.'"></a>';
            $msgCate .= '   <figcaption><a href="'.$linkCateOrder.'">'.$titleCate.'</a></figcaption>';
            $msgCate .= ' </div>';
            $msgCate .= '</figure>';
          }
          _e($msgCate);
        }
      ?>
      
    </div>
  </div>
  <section id="banner-index"></section>
</div>