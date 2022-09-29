<!-- news -->
<div class="container">
  <div class="share-content2" >
    <div class="form-title"><h2 class="padding40"><?php _e($lang['home_newsest']) ?></h2><span>&nbsp;</span></div>
    <div class="itemList slider">
      <!-- Primary items -->
      <div id="itemListPrimary">
        <?php
          $tableNews = $prefixTable.$def['tableNews'];
          $tableCateNews = $prefixTable.$def['tableCategoriesNews'];
          $tableAdmin = $prefixTable.$def['tableAdmin'];
          $checkNews = $h->checkExist($tableNews, "deleted_at is null and active = 1");
          if ($checkNews){
            $msgNews = "";
            $allNews = $h->getAllSelect("n.id, cateID, titleNews, imageNews, postDate, n.created_at as createdNews, n.created_by as createdBy, titleCate", "$tableNews as n, $tableCateNews as c", "n.deleted_at is null and c.deleted_at is null and n.active = 1 and c.active = 1 and n.cateID = c.id", "n.created_at desc, n.id desc", "limit 0, 12");
            foreach ($allNews as $kNews => $news) {
              if (file_exists(_ImgUploadRealPath.'news/'.$news['imageNews']) && $news['imageNews'] != '') 
                $imgNews = _imgUpload.'news/'.$news['imageNews'];
              else
                $imgCate = _noImage;
              $pd = $news['postDate'];
              if (!is_null($pd) && $pd != '')
                $postDate = date("d/m/Y", strtotime($pd));
              else
                $postDate = date("d/m/Y", strtotime($news['createdNews']));
              $postBy = $h->getById($tableAdmin, $news['createdBy']);
              $author = $postBy['fullname'];
              $titleNews = $news['titleNews'];
              $linkNews = $def['actionNews'].'/'.chuoilink($news['titleCate']).'/'.chuoilink($titleNews).'.html';
              $msgNews .= '<div class="itemContainer itemContainerLast" style="width:100.0%;">';
              $msgNews .= ' <div class="catItemView listing groupPrimary">';
              $msgNews .= '   <div class="catItemImageBlock"><a href="'.$linkNews.'" title="'.$titleNews.'" ><img class="thumbnail" src="'.$imgNews.'" alt="'.$titleNews.'"></a></div>';
              $msgNews .= '   <div class="main-item">';
              $msgNews .= '     <div class="catItemHeader"><h3 class="catItemTitle"><a href="'.$linkNews.'">'.$titleNews.'</a></h3></div>';
              $msgNews .= '     <div class="catItemInfo"><div class="catDate"><i class="fa fa-calendar"></i>'.$postDate.'</div><div class="catUser"><i class="fa fa-user-o"></i>'.$author.'</div></div>';
              $msgNews .= '   </div>';
              $msgNews .= ' </div>';
              $msgNews .= '</div>';
            }
            _e($msgNews);
          }
        ?>        
      </div>
    </div>
  </div>
</div>