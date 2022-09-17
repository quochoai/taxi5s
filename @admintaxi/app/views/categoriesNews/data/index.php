<?php
	require_once "../../../../library.php";
	
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
		if ($search_value != '')
			$whh .= " and titleCate like '%$search_value%'";
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
			if ($cateNews['active'] == 1) {
				$textActive = $lang['deactiveForm'].' '.$lang['cateNewsText'].' '.$lang['this'];
				$activeIcon = '<i class="fas fa-check-circle"></i>';
				$classActive = ' text-success';
				$act = 0;
			} else {
				$textActive = $lang['activeForm'].' '.$lang['cateNewsText'].' '.$lang['this'];
				$activeIcon = '<i class="far fa-circle"></i>';
				$classActive = ' text-danger';
				$act = 1;
			}
			$active = '<a class="text-center'.$classActive.' active cursorPointer" rel="'.$cateNews['id'].'" title="'.$textActive.'" data-active="'.$act.'"><h4>'.$activeIcon.'</h4></a>';
			$titleCate = $cateNews['titleCate'];
			$imgCate = $cateNews['imageCate'];
			if (!is_null($imgCate) && $imgCate != '' && file_exists($def['imgUploadCateNewsRealPath'].$imgCate))
				$img = '<img src="'.$def['imgUploadCateNews'].$imgCate.'" width="80" alt="'.$titleCate.'" />';
			else
				$img = '';			
			
			$sortOrder = '<input type="number" class="sortUpdate text-center" id="'.$cateNews['id'].'" value="'.$cateNews['sortOrder'].'" style="width: 75px" />';
			if ($cateNews['showHide'] == 0) {
				$textShowHide = $lang['showText'].' '.$lang['cateNewsText'].' '.$lang['this'];
				$showHideIcon = '<i class="far fa-circle"></i>';
				$classSH = ' text-danger';
				$hs = 1;
			} else {
				$textShowHide = $lang['hideText'].' '.$lang['cateNewsText'].' '.$lang['this'];
				$showHideIcon = '<i class="fas fa-check-circle"></i>';
				$classSH = ' text-success';
				$hs = 0;
			}

			$showHide = '<a class="text-center'.$classSH.' showHideUpdate cursorPointer" rel="'.$cateNews['id'].'" title="'.$textShowHide.'" data-hs="'.$hs.'"><h4>'.$showHideIcon.'</h4></a>';
			$actions = '<a class="btn btn-success btn-sm update cursorPointer" data-id="'.$cateNews['id'].'"  title="'.$lang['updateText'].' '.$lang['cateNewsText'].' '.$lang['this'].'"><i class="fas fa-edit"></i></a> | <a class="btn btn-danger btn-sm delete cursorPointer" data-id="'.$cateNews['id'].'" title="'.$lang['deleteText'].' '.$lang['cateNewsText'].' '.$lang['this'].'"><i class="fas fa-trash-alt"></i></a></a>';
			$a[] = array(
				"DT_RowId" => $cateNews['id'],
				"DT_RowClass" => "choose_this",
				"no" => $no,
				"titleCate" => $titleCate,  
				"imageCate" => $img, 
				"active" => $active, 
				"sortOrder" => $sortOrder, 
				//"showHide" => $showHide,
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
