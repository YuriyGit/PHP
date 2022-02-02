<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>
        Подготовительные задания к курсу
    </title>
    <meta name="description" content="Chartist.html">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
    <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
    <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
    <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
    <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
    <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
    <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
</head>
<body class="mod-bg-1 mod-nav-link ">
<main id="js-page-content" role="main" class="page-content">
    <div class="col-md-6">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>
                    Задание
                </h2>
                <div class="panel-toolbar">
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-collapse"
                            data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                    <button class="btn btn-panel waves-effect waves-themed" data-action="panel-fullscreen"
                            data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                </div>
            </div>
            <?php
            $profeles = [
                [
                    'avatar' => 'img/demo/authors/sunny.png',
                    'avatar_alt' => 'Sunny A.',
                    'name' => 'Sunny A. (UI/UX Expert)',
                    'position_held' => 'Lead Author',
                    'link_twitter' => 'https://twitter.com/@myplaneticket',
                    'link_twitter_text' => '@myplaneticket',
                    'link_email' => 'https://wrapbootstrap.com/user/myorange',
                    'link_email_title' => 'Contact Sunny'
                ],
                [
                    'avatar' => 'img/demo/authors/josh.png',
                    'avatar_alt' => 'Jos K.',
                    'name' => 'Jos K. (ASP.NET Developer)',
                    'position_held' => 'Partner &amp; Contributor',
                    'link_twitter' => 'https://twitter.com/@atlantez',
                    'link_twitter_text' => '@atlantez',
                    'link_email' => 'https://wrapbootstrap.com/user/Walapa',
                    'link_email_title' => 'Contact Jos'
                ],
                [
                    'avatar' => 'img/demo/authors/jovanni.png',
                    'avatar_alt' => 'Jovanni Lo',
                    'name' => 'Jovanni L. (PHP Developer)',
                    'position_held' => ' Partner &amp; Contributor',
                    'link_twitter' => 'https://twitter.com/@lodev09',
                    'link_twitter_text' => '@lodev09',
                    'link_email' => 'https://wrapbootstrap.com/user/lodev09',
                    'link_email_title' => 'Contact Jovanni'
                ],
                [
                    'avatar' => 'img/demo/authors/roberto.png',
                    'avatar_alt' => 'Jovanni Lo',
                    'name' => 'Roberto R. (Rails Developer)',
                    'position_held' => 'Partner &amp; Contributor',
                    'link_twitter' => 'https://twitter.com/@sildur',
                    'link_twitter_text' => '@sildur',
                    'link_email' => 'https://wrapbootstrap.com/user/sildur',
                    'link_email_title' => 'Contact Roberto'
                ],
            ]
            ?>

            <div class="panel-container show">
                <div class="panel-content">
                    <div class="d-flex flex-wrap demo demo-h-spacing mt-3 mb-3">

                        <?php foreach ($profeles as $profele): ?>
                            <div class="rounded-pill bg-white shadow-sm p-2 border-faded mr-3 d-flex flex-row align-items-center justify-content-center flex-shrink-0">

                                <img src="<?php echo $profele['avatar']; ?>" alt="<?php echo $profele['avatar_alt']; ?>"
                                     class="img-thumbnail img-responsive rounded-circle"
                                     style="width:5rem; height: 5rem;">
                                <div class="ml-2 mr-3">
                                    <h5 class="m-0">
                                        <?php echo $profele['name']; ?>
                                        <small class="m-0 fw-300">
                                            <?php echo $profele['position_held']; ?>
                                        </small>
                                    </h5>
                                    <a href="<?php echo $profele['link_twitter']; ?>" class="text-info fs-sm"
                                       target="_blank"><?php echo $profele['link_twitter_text']; ?></a>
                                    -
                                    <a href="<?php echo $profele['link_email']; ?>" class="text-info fs-sm"
                                       target="_blank"
                                       title="<?php echo $profele['link_email_title']; ?>"><i
                                                class="fal fa-envelope"></i></a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
</main>


<script src="js/vendors.bundle.js"></script>
<script src="js/app.bundle.js"></script>
<script>
    // default list filter
    initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
    // custom response message
    initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
</script>
</body>
</html>
