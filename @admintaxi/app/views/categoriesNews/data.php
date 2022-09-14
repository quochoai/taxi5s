<?php
    require_once "../../../library.php";
    
    $options = [
        'draw' => $_REQUEST['draw'],
        'search_value' => trim($_REQUEST['search_value']),
        'limit' => $_REQUEST['length'],
        'offset' => $_REQUEST['start'],
        'order' => 0,
        'dir' => $_REQUEST['order.0.dir'],
    ];
    
    $search_value = $options['search_value'];    
   
    if ($search_value == '') {
        $wh = "deleted_at is null";
        if ($options['limit'] != '-1')
            $lim = " limit ".$options['offset'].", ".$options['limit'];
        else
            $lim = "";
    } else {
        $whh = "";
        if ($search_value != '') {
            $whh .= " and titleCate like '%$search_value%'";
        }
        $wh = "deleted_at is null".$whh;
        if ($options['limit'] != '-1')
            $lim = " limit ".$options['offset'].", ".$options['limit'];
        else
            $lim = "";
    }
    
    $table = $prefixTable.$def['tableCategoriesNews'];
    $s = $h->query("select * from $table where $wh order by created_at desc, id desc");
    $no = 1;
    $totalData = $h->num_rows($s);
    if ($totalData > 0) {
        $totalFiltered = $totalData;
        $ss = $h->query("select * from $table where $wh order by created_at desc, id desc$lim");
        while ($cateNews = $h->fetch_array($ss)) {
            if ($cateNews['active'] == 1)
                $active = "Yes";
            else
                $active = "No";
                $titleCate = $cateNews['titleCate'];
            $imgCate = $cateNews['imageCate'];
            if (!is_null($imgCate) && $imgCate != '' && file_exists($def['imgUploadCateNewsRealPath'].$imgCate))
              $img = '<img src="'.$def['imgUploadCateNews'].$imgCate.'" width="80" alt="'.$titleCate.'" />';
            else
              $img = '';
            
            
            $sortOrder = '<input type="number" class="sortUpdate text-center" id="'.$cateNews['id'].'" value="'.$cateNews['sortOrder'].'" />';
            if ($cateNews['showHide'] == 0) {
              $textShowHide = $lang['showText'].' '.$lang['cateNewsText'].' '.$lang['this'];
              $showHideIcon = '<i class="fas fas-circle"></i>';
            } else {
              $textShowHide = $lang['hideText'].' '.$lang['cateNewsText'].' '.$lang['this'];
              $showHideIcon = '<i class="fas fas-check"></i>';
            }

            $showHide = '<a class="text-center text-success showHideUpdate" rel="'.$cateNews['id'].'" title="'.$textShowHide.'">'.$showHideIcon.'</a>';
            $actions = '<a class="btn btn-success btn-sm update" data-id="'.$cateNews['id'].'"  title="'.$lang['updateText'].' '.$lang['cateNewsText'].' '.$lang['this'].'"><i class="fas fa-edit"></i></a> | <a class="btn btn-danger btn-sm delete" data-id="'.$cateNews['id'].'" title="'.$lang['delete'].' '.$lang['cateNewsText'].' '.$lang['this'].'"><i class="fas fa-trash-alt"></i></a></a>';
            $a[] = array(
                "DT_RowId" => $cateNews['id'],
                "DT_RowClass" => "choose_this",
                "no" => $no,
                "titleCate" => $titleCate,  
                "imageCate" => $img, 
                "active" => $active, 
                "sortOrder" => $sortOrder, 
                "showHide" => $showHide,
                'actions' => $actions
            );
            $no++;
        }
    } else {
        $totalFiltered = 0;
        $a = array();
    }
    $json_data = array(
        "draw"            => $options['draw'],
        "recordsTotal"    => $totalData,
        "recordsFiltered" => $totalFiltered,
        "data"            => $a
    );
    echo json_encode($json_data);
