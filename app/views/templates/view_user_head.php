<?php

use App\Helpers;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $this->e($title); ?></title>
    <meta name="description" content="Chartist.html">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">

    <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="<?= Helpers::const('url.path') . $this->asset('css/vendors.bundle.css') ?>">
    <link id="appbundle" rel="stylesheet" media="screen, print" href="<?= Helpers::const('url.path') . $this->asset('css/app.bundle.css') ?>">
    <link id="myskin" rel="stylesheet" media="screen, print" href="<?= Helpers::const('url.path') . $this->asset('css/skins/skin-master.css') ?>">
    <link rel="stylesheet" media="screen, print" href="<?= Helpers::const('url.path') . $this->asset('css/fa-solid.css') ?>">
    <link rel="stylesheet" media="screen, print" href="<?= Helpers::const('url.path') . $this->asset('css/fa-brands.css') ?>">
    <link rel="stylesheet" media="screen, print" href="<?= Helpers::const('url.path') . $this->asset('css/fa-regular.css') ?>">
</head>

<body class="mod-bg-1 mod-nav-link">
    <?= $this->insert('view_user_nav') ?>
    <?= $this->section('content') ?>
    <?= $this->insert('view_user_footer') ?>
</body>

<script src="<?= Helpers::const('url.path') ?>js/vendors.bundle.js"></script>
<script src="<?= Helpers::const('url.path') ?>js/app.bundle.js"></script>
<script>

    $(document).ready(function()
    {

        $('input[type=radio][name=contactview]').change(function()
        {
            if (this.value == 'grid')
            {
                $('#js-contacts .card').removeClassPrefix('mb-').addClass('mb-g');
                $('#js-contacts .col-xl-12').removeClassPrefix('col-xl-').addClass('col-xl-4');
                $('#js-contacts .js-expand-btn').addClass('d-none');
                $('#js-contacts .card-body + .card-body').addClass('show');

            }
            else if (this.value == 'table')
            {
                $('#js-contacts .card').removeClassPrefix('mb-').addClass('mb-1');
                $('#js-contacts .col-xl-4').removeClassPrefix('col-xl-').addClass('col-xl-12');
                $('#js-contacts .js-expand-btn').removeClass('d-none');
                $('#js-contacts .card-body + .card-body').removeClass('show');
            }

        });

        //initialize filter
        initApp.listFilter($('#js-contacts'), $('#js-filter-contacts'));
    });

</script>
</html>