<?php

function getImageCdn($url, $width = 0, $height = 0) {
    return "/cdn/$width/$height/$url";
}
