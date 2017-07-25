<!DOCTYPE html>
<html>
<?php include("meta.php"); ?>
<body>

<section id="container">
<?php include("header.php"); ?> 
<?php include("sidebar.php"); ?> 
<section id="main-content">
    <section class="wrapper">
		<?php 
        if($_GET['page']==''){
            include("home.php");
        }else if($_GET['page']=='dashboard'){ 
            include("home.php");
        }else if($_GET['page']=='daftar-sales'){ 
            include("daftar-sales.php");
        }else if($_GET['page']=='sales-bonus'){ 
            include("sales-bonus.php");
        }else if($_GET['page']=='sales-target'){ 
            include("sales-target.php");
        }else if($_GET['page']=='sales-detail'){ 
            include("sales-detail.php");
        }else if($_GET['page']=='customer'){ 
            include("customer.php");
        }else if($_GET['page']=='order-history'){ 
            include("order-history.php");
        }else if($_GET['page']=='order-detail'){ 
            include("order-detail.php");
        }else if($_GET['page']=='product'){ 
            include("product.php");
        }else if($_GET['page']=='edit-product'){ 
            include("edit-product.php");
        }else if($_GET['page']=='product-category'){ 
            include("product-category.php");
        }else if($_GET['page']=='add-new-product'){ 
            include("add-new-product.php");
        }else if($_GET['page']=='page'){ 
            include("page.php");
        }else if($_GET['page']=='add-new-page'){ 
            include("add-new-page.php");
        }else if($_GET['page']=='edit-page'){ 
            include("edit-page.php");
        }else if($_GET['page']=='user-management'){ 
            include("user-management.php");
        }else if($_GET['page']=='add-user'){ 
            include("add-user.php");
        }else if($_GET['page']=='user-detail'){ 
            include("user-detail.php");
        }else if($_GET['page']=='area-tracking'){ 
            include("area-tracking.php");
        }else if($_GET['page']=='inbox'){ 
            include("inbox.php");
        }else if($_GET['page']=='inbox-detail'){ 
            include("inbox-detail.php");
        }else if($_GET['page']=='direct-message'){ 
            include("direct-message.php");
        }else if($_GET['page']=='broadcast-message'){ 
            include("broadcast-message.php");
        }else{ 
            include("home.php");
        }?>
    </section>
</section>
</section>
<!-- Placed js at the end of the document so the pages load faster -->

<!--dynamic table-->
<script type="text/javascript" language="javascript" src="js/advanced-datatable/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="js/data-tables/DT_bootstrap.js"></script>
<script src="js/iCheck/jquery.icheck.js"></script>
<script type="text/javascript" src="js/ckeditor/ckeditor.js"></script>

<script src="js/bootstrap-switch.js"></script>

<script type="text/javascript" src="js/fuelux/js/spinner.min.js"></script>
<script type="text/javascript" src="js/bootstrap-fileupload/bootstrap-fileupload.js"></script>
<script type="text/javascript" src="js/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="js/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<script type="text/javascript" src="js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="js/bootstrap-daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="js/bootstrap-daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="js/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="js/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script type="text/javascript" src="js/jquery-multi-select/js/jquery.multi-select.js"></script>
<script type="text/javascript" src="js/jquery-multi-select/js/jquery.quicksearch.js"></script>

<script type="text/javascript" src="js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>

<script src="js/jquery-tags-input/jquery.tagsinput.js"></script>

<script src="js/select2/select2.js"></script>
<script src="js/select-init.js"></script>

<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script src="js/scripts.js"></script>
<script src="js/validation-init.js"></script>

<script src="js/toggle-init.js"></script>

<script src="js/advanced-form.js"></script>
<script src="js/dynamic_table_init.js"></script>
<script src="js/table-edit-cat.js"></script>

<!-- END JAVASCRIPTS -->
<script>
    jQuery(document).ready(function() {
        EditableTable.init();
    });
</script>
</body>
</html>