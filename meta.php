<?php
$meta=Model::getMetaTga();
?>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="Keywords" content="<?= $meta['keyword']; ?>" />
<meta name="Description" content="<?= $meta['description']; ?>" />
<title><?= $meta['title']; ?></title>
