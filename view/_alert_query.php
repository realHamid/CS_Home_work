<?php

    if(isset($_GET['saved'])){
        echo '<input type="hidden" id="alert_query" value="saved"  />';
    }else if(isset($_GET['error'])){
        echo '<input type="hidden" id="alert_query" value="error"  />';
    }else if(isset($_GET['delete'])){
        echo '<input type="hidden" id="alert_query" value="delete"  />';
    }else if(isset($_GET['edit'])){
        echo '<input type="hidden" id="alert_query" value="edit"  />';
    }

?>