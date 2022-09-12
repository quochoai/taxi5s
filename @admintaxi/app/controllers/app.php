<?php
header("Access-Control-Allow-Origin: *");
include("../../library.php");
if (isset($_SESSION['is_logined'])) {
    $profile = $_SESSION['is_logined'];
    $profileId = $profile['id'];
    $profileGet = $h->getById($prefixTable."admins", $profileId);
    $role = $profileGet['role'];
} else {
    $islogin = explode("kiecook", $_COOKIE['islogined']);
    $muser = explode("cookie", $islogin[0]);
    $profileId = $muser[1];        
    $profile = $h->getById($prefixTable."admins", $profileId);
    $role = $profile['role'];
}
function isMobileDevice() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i"
, $_SERVER["HTTP_USER_AGENT"]);
}
if (!isset($_REQUEST['action'])) {
    $key_title_site = 'title_website';
    $ogtype = 'website';
} else {
    $key_title_site = $_REQUEST['action'];
    $pqh = explode("/", trim($_REQUEST['action']));
    if ($pqh[0] == $def['logout']) {
        unset($_SESSION['is_logined']);
        setcookie("islogined", null, -1, "/");
        setcookie("islogined", null, -1, "/", "taxi3s.com/@admintaxi");
        header("location: " . _urladmin);
    }
    $ogtype = 'article';
}
$sidebar = $def['sidebar'];

?>
<!DOCTYPE html>
<html>

<head>
    <base href="<?php echo _urladmin; ?>" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php include("title.php"); ?></title>
    <link rel="canonical" href="<?php echo _urladmin; ?>"/>
    <meta name="description" content="Tra cic mi?n phí, Tính lãi su?t vay, Qu?n lý khách hàng, pass h? so vay..." />
    <meta name="keywords" content="Tra cic mi?n phí, Tính lãi su?t vay, Qu?n lý khách hàng, pass h? so vay..." />
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $lang['web_title']; ?>" />
    <meta property="og:description" content="Tra cic mi?n phí, Tính lãi su?t vay, Qu?n lý khách hàng, pass h? so vay..." />
    <meta property="og:image" content="" />
    <meta property="og:url" content="http://crm.saletaichinh.com/" />
    <meta name="twitter:title" content="<?php echo $lang['web_title']; ?>" />
    <meta name="twitter:description" content="Tra cic mi?n phí, Tính lãi su?t vay, Qu?n lý khách hàng, pass h? so vay..." />
    <meta name="twitter:url" content="http://crm.saletaichinh.com/" />
    <meta name="twitter:card" content="summary">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo $def['theme']; ?>plugins/fontawesome-free/css/all.min.css" />
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="<?php echo $def['theme']; ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" />
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo $def['theme']; ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo $def['theme']; ?>plugins/jqvmap/jqvmap.min.css" />
    <link rel="stylesheet" href="<?php echo $def['theme']; ?>plugins/bootstrap-table/bootstrap-table.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo $def['theme']; ?>dist/css/adminlte.min.css" />
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo $def['theme']; ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css" />
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo $def['theme']; ?>plugins/daterangepicker/daterangepicker.css" />
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo $def['theme']; ?>plugins/summernote/summernote-bs4.css" />
    <!-- select2 -->
    <link rel="stylesheet" href="<?php echo $def['theme']; ?>plugins/select2/css/select2.min.css" />
    <link rel="stylesheet" href="<?php echo $def['theme']; ?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css" />
    <style type="text/css">
        label:not(.form-check-label):not(.custom-file-label) {
            font-weight: 400;
        }
        @media screen and (max-width: 1024px) {
            .text_guide img.responsiveimg {width: 90%; height: auto; margin: 10px 5%}
        }
    </style>
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo $def['theme']; ?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" href="<?php echo $def['theme']; ?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css" />
    <link rel="stylesheet" href="<?php echo $def['theme']; ?>plugins/datatables-fixedcolumns/css/fixedColumns.bootstrap4.min.css" />
    <link rel="stylesheet" href="<?php echo $def['theme']; ?>plugins/datatables-fixedheader/css/fixedHeader.bootstrap4.min.css" />
    <link rel="stylesheet" href="<?php echo $def['theme']; ?>plugins/datatables-buttons/css/buttons.dataTables.min.css" />
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet" />
    <!-- jQuery -->
    <script src="<?php echo $def['theme']; ?>plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo $def['theme']; ?>plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo $def['theme']; ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?php echo $def['theme']; ?>plugins/moment/moment.min.js"></script>
    <script src="<?php echo $def['theme']; ?>plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
    <script src="<?php echo $def['theme']; ?>plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php echo $def['theme']; ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?php echo $def['theme']; ?>plugins/summernote/summernote-bs4.min.js"></script>
    <!-- Select2 -->
    <script src="<?php echo $def['theme']; ?>plugins/select2/js/select2.full.min.js"></script>
    <!-- Bootstrap Switch -->
    <script src="<?php echo $def['theme']; ?>plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?php echo $def['theme']; ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- DataTables -->
    <script src="<?php echo $def['theme']; ?>plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo $def['theme']; ?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo $def['theme']; ?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo $def['theme']; ?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

    <script src="<?php echo $def['theme']; ?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    
    <script src="<?php echo $def['theme']; ?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>


    <script type="text/javascript" src="https://cdn.datatables.net/fixedcolumns/3.3.1/js/dataTables.fixedColumns.min.js"></script>
    <script src="<?php echo $def['theme']; ?>plugins/datatables-fixedcolumns/js/fixedColumns.bootstrap4.min.js"></script>
    <script src="<?php echo $def['theme']; ?>plugins/datatables-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo $def['theme']; ?>plugins/datatables-fixedheader/js/fixedHeader.bootstrap4.min.js"></script>

    <link rel="stylesheet" href="<?php echo $def['theme']; ?>plugins/toastr/toastr.min.css" />
    <script src="<?php echo $def['theme']; ?>plugins/toastr/toastr.min.js"></script>
    <script src="<?php echo $def['theme']; ?>plugins/jquery.form/jquery.form.js"></script>
    <!-- bootstrap table -->
    <script src="<?php echo $def['theme']; ?>plugins/bootstrap-table/bootstrap-table.min.js"></script>
    <script src="<?php echo $def['theme']; ?>plugins/bootstrap-table/extensions/i18n-enhance/bootstrap-table-i18n-enhance.js"></script>
    <script src="<?php echo $def['theme']; ?>plugins/bootstrap-table/bootstrap-table-locale-all.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo $def['theme']; ?>dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo $def['theme']; ?>dist/js/demo.js"></script>
    <script type="text/javascript" src="tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
        tinymce.init({
            selector: "textarea#content, textarea#content_e",
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
            external_filemanager_path: "<?php echo URL ?>filemanager/",
            filemanager_title: "Responsive Filemanager",
            external_plugins: {
                "filemanager": "<?php echo URL ?>filemanager/plugin.min.js"
            },
            style_formats: [{
                    title: 'Bold text',
                    inline: 'b'
                },
                {
                    title: 'Red text',
                    inline: 'span',
                    styles: {
                        color: '#ff0000'
                    }
                },
                {
                    title: 'Red header',
                    block: 'h1',
                    styles: {
                        color: '#ff0000'
                    }
                },
                {
                    title: 'Example 1',
                    inline: 'span',
                    classes: 'example1'
                },
                {
                    title: 'Example 2',
                    inline: 'span',
                    classes: 'example2'
                },
                {
                    title: 'Table styles'
                },
                {
                    title: 'Table row 1',
                    selector: 'tr',
                    classes: 'tablerow1'
                }
            ]
        });

        function formatNumber(num) {
            num = num.toString().replace(/\$|\,/g, '');
            if (isNaN(num)) num = "0";
            sign = (num == (num = Math.abs(num)));
            num = Math.floor(num * 100 + 0.50000000001);
            num = Math.floor(num / 100).toString();
            for (var i = 0; i < Math.floor((num.length - (1 + i)) / 3); i++)
                num = num.substring(0, num.length - (4 * i + 3)) + ',' + num.substring(num.length - (4 * i + 3));
            return (((sign) ? '' : '-') + num);
        }
    </script>
    <?php
    $today = date("Y-m-d");
    $date_end = date("Y-m-d", strtotime($date_end_session));
    if (trim($date_end_session) != '' && $role != 1) {
        if ($date_end < $today && $pqh[0] != $def['link_transaction']) {
    ?>
            <script type="text/javascript">
                window.location.href = "<?php echo URL . $def['link_transaction'] ?>"
            </script>
    <?php }
    } ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-3GYS2Q9BXK"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-3GYS2Q9BXK');
    </script>
</head>

<body class="hold-transition sidebar-mini layout-fixed accent-success">
    <div class="wrapper">
        <?php
        include("navbar.php");
        include($sidebar);
        ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <?php
            //echo $folder_views."customer/list.php";
            //include("breadcrumb.php"); 
            if ($point_current['fullname'] != '' && $point_current['email'] != '' && $point_current['phone'] != '' && !is_null($point_current['company']) && $point_current['company'] > 0 && !is_null($point_current['address']) && $point_current['address'] > 0) {
                include("content.php");
            } else
                include($def['views'] . "update_info.php");
            ?>
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <script type="text/javascript">
        function isNumber(n) {
            return /^-?[\d.]+(?:e-?\d+)?$/.test(n);
        }
        $(function() {
            //Datemask dd/mm/yyyy
            $('#birthday, #ngaykiemtra, #ngaytuchoihs, #ngaylenlaihs, #ngaydauhs, #ngaylenmoihs, #birthday_s, #ngaykiemtra_s, #ngaytuchoihs_s, #ngaylenlaihs_s, #ngaydauhs_s, #ngaylenmoihs_s, #birthday_e, #ngaykiemtra_e, #ngaytuchoihs_e, #ngaylenlaihs_e, #ngaydauhs_e, #ngaylenmoihs_e, #ngaycap_cmnd_e, #tgketthuc_duno1_e, #tgketthuc_duno2_e, #duno_tctd_end1, #duno_tctd_end2, #duno_tctd_end3, #duno_tctd_end4, #duno_tctd_end5, #duno_tctd_end6, #duno_tctd_end7, #duno_tctd_end8, #duno_tctd_end9, #duno_tctd_end10, #fromdate, #todate, #filter_ngaylamlai, #ngay_hieu_luc').inputmask('dd/mm/yyyy', {
                'placeholder': 'dd/mm/yyyy'
            });
            //$('#time_finish').inputmask('h:i:s', {'placeholder': 'h:i:s'});
            $('.select2').select2();
            $("input[data-bootstrap-switch]").each(function() {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            });
            $('[data-toggle="tooltip"]').tooltip();
            $('#reservationdate, #datecheck, #datereject, #dateup, #datepos, #datefresh, #reservationdate_s, #datecheck_s, #datereject_s, #dateup_s, #datepos_s, #datefresh_s, #reservationdate_e, #datecheck_e, #datereject_e, #dateup_e, #datepos_e, #datefresh_e, #date_cmnd_e, #date_end_1, #date_end_2, #date_end_tctd1, #date_end_tctd2, #date_end_tctd3, #date_end_tctd4, #date_end_tctd5, #date_end_tctd6, #date_end_tctd7, #date_end_tctd8, #date_end_tctd9, #date_end_tctd10, #from_date, #to_date, #filterngaylamlai, #ngay_hieu_luc').datetimepicker({
                timePicker: false,
                format: 'DD/MM/YYYY'
            });
        });
        $(document).ready(function() {
            $(document).on('click', 'a.not_permission', function() {
                alert("TÃ i khoáº£n chÆ°a Ä‘Æ°á»£c cáº¥p quyá»n sá»­ dá»¥ng chá»©c nÄƒng nÃ y. Báº¡n vui lÃ²ng liÃªn há»‡ Admin Ä‘á»ƒ Ä‘Æ°á»£c cáº¥p quyá»n sá»­ dá»¥ng");
            });
        });
    </script>
    <script src="<?php echo $def['theme']; ?>plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <div id="not_zalo">
        <?php
        //if ($pqh[0] != $def['check-cic'])
        include("zalo.php");
        ?>
    </div>
</body>

</html>