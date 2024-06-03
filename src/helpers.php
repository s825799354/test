<?php
if(!function_exists('pinyin')) {
    function pinyin()
    {
       echo 'testpinyin';
    }
} else {
    Log::warning('There exist multiple function "pinyin".');
}