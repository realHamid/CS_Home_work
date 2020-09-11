

<script src="assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
<script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/metisMenu/metisMenu.min.js" type="text/javascript"></script>
<script src="assets/plugins/lobipanel/lobipanel.min.js" type="text/javascript"></script>
<script src="assets/plugins/animsition/js/animsition.min.js" type="text/javascript"></script>
<script src="assets/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
<script src="assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<!-- START PAGE LABEL PLUGINS -->
<!-- START THEME LABEL SCRIPT -->
<script src="assets/dist/js/app.min.js" type="text/javascript"></script>
<script src="assets/dist/js/jQuery.style.switcher.js" type="text/javascript"></script>

<link href="assets/font/font-sans.css" rel="stylesheet" type="text/css" >
<link href="assets/bfont/bfont.css" rel="stylesheet" type="text/css" >

<script src="assets/plugins/jquery.sumoselect/jquery.sumoselect.min.js" type="text/javascript"></script>
<script src="assets/plugins/select2/select2.min.js" type="text/javascript"></script>

<script type="text/javascript" src="assets/datePicker/js/pwt-date.js"></script>
<script type="text/javascript" src="assets/datePicker/js/pwt-datepicker.js"></script>

<!-- lib for load one img -->
<script src="assets/LoadImg/assets/js/loadimg.js"></script> 
<script type="text/javascript">
    $('#upload').loadImg({
            "text"                  : "Click to upload Picture with extension png,jpg,gif.",
            "fileExt"               : ['jpg','png','gif','JPG','PNG','GIF'],
            "fileSize_min"  : 0,
            "fileSize_max"  : 5
    });
</script>
<!-- end load one img  -->


<!-- alert  -->
<script type="text/javascript" src="assets/jquery-confirm/jquery-confirm.min.js"></script>
<script type="text/javascript" >
    $(".deleted").click(function(e){
        e.preventDefault();
        const c_url =  $(this).attr('href');

        $.confirm({
            title: '<span class="bfont text-danger" > هشدار!   </span> ',
            content: '<span class="cfont text-warning" style="font-size: 20px" >  ریکارد مورد نظر حذف خواهد شد ؟  </span> ',
            buttons: {
                تایید:  {
                    btnClass: 'btn-blue',
                    action : function(){
                        window.location = c_url;
                    }
                },
                لغو:  {
                    btnClass: 'btn-red',
                    action : function () {
                    }
                }
            }
        });
    });
</script>



<script>

    $(document).ready(function(){
        $(".basic-single").select2();
        $(".form-control").attr("autocomplete","off");  
    });


    // For Date
    var dp;
    $(document).ready(function() {
        var options = {
            format : "YYYY-MM-DD",
            formatter : function(unix) {
                var pdate = new persianDate(unix);
                pdate.formatPersian = false;
                return pdate.format("YYYY-MM-DD");
                //return new persinDate(unix).format("YYYY/MM/DD");
            },
            daysTitleFormat : "YYYY MMMM",
            observer : true,
            sendOption : "p",
            //position : [2, 2],
            autoclose : true,
            toolbox : true,
            altField : "#alternateField",
            altFormat : "u",
            altFieldFormatter : function(unix) {
                var pdate = new persianDate(unix);
                pdate.formatPersian
                pdate.formatPersian = false;
                return pdate.format("YYYY-MM-DD");
            },
            onShow : function() {
                //console.log("user config onShow event ")
            },
            onHide : function() {
                //console.log("user config onHide event ")
            },
            onSelect : function(unix) {
                this.hide();
            }
        };
        $(".date").persianDatepicker(options);
        dp = $(".date").data("datepicker");
    });

</script>


<script>

$(document).ready(function (){
    $("input").attr("autocomplete" , "off");
})

</script>

<?php require_once ('_alert.php'); ?>