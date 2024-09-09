<?php
    unset($_SESSION['cart']);
    redirect("?mod=cart&act=show");
?>