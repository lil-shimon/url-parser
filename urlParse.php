<?php
    echo "調べたいurlを入力してください \n";
    $url = fgets(STDIN);
    echo "parseURL:";
    echo parse_url($url, PHP_URL_HOST)
?>
