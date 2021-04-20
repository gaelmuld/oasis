<?php
function asset_js($target){
    return base_url('public/assets/js/'.$target);
}
function asset_css($target){
    return base_url('public/assets/css/'.$target);
}
function asset_img($target){
    return base_url('public/assets/img/'.$target);
}