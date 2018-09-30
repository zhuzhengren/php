<?php
$rs = mail("zhuzr@yilan.tv", "My subject", "ceshi content", "From: zhuzhengren" );
if ($rs) {
    echo "success";
} else {
    echo "error";
}
