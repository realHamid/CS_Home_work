<link href="assets/plugins/toastr/toastr.css" rel="stylesheet" type="text/css"/>
<!-- START THEME LAYOUT STYLE -->
<script src="assets/plugins/toastr/toastr.min.js" type="text/javascript"></script>
<!-- START THEME LABEL SCRIPT -->
<script type="text/javascript">
    // Toastr options
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "800",
        "hideDuration": "1000",
        "timeOut": "10000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut",
        "toastClass": "animated fadeInDown"

    };

    var query_alert = $("#alert_query").val();

    if(query_alert != ''){

        if(query_alert == "saved"){
            toastr.success('توجه ٬ اطلاعات موفقانه ذخیره شد.');
        }

        if(query_alert == "error"){
            toastr.error('توجه، کدام مشکلی پیش آمده است لطفا بعدا کوشش نماید.');
        }

        if(query_alert == "delete"){
            toastr.info('اطلاعات موفقانه حذف شد.');
        }

        if(query_alert == "edit"){
            toastr.warning('توجه،‌اطلاعات موفقانه ویرایش شد.');
        }

    }
</script>