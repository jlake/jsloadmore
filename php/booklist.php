<?php
$listCount = 10;
$items = array();
$image = 'img/world-book.gif';
$text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat laboris nisi ut aliquip.';
$itemSize = filesize(dirname(__FILE__) . '/../' . $image) + strlen($text);

for($i = 0; $i < $listCount; $i++) {
    $items[] = array(
        'image' => $image,
        'text' => $text,
        'size' => $itemSize
    );
}

header("Content-Type: text/plain; charset=utf-8");
echo json_encode($items);
