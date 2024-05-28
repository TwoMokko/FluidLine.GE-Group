<?php  return array (
  'resourceClass' => 'MODX\\Revolution\\modDocument',
  'resource' => 
  array (
    'id' => 1,
    'type' => 'document',
    'pagetitle' => 'Главная',
    'longtitle' => 'Поздравляем!',
    'description' => '',
    'alias' => 'index',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '[[!$main_page]]',
    'richtext' => 1,
    'template' => 1,
    'menuindex' => 0,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1716470974,
    'editedby' => 1,
    'editedon' => 1716531363,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 0,
    'publishedby' => 0,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'MODX\\Revolution\\modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'index.html',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    'alias_visible' => 1,
    '_content' => '<!DOCTYPE html>
<html lang="ru">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/resources/img/favicon.png">
    <script src="/assets/resources/js/main.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="/assets/resources/css/main.css">

    <title>Ge-Group Ltd</title>
</head>
    <body>

        [[!$header]]

<!--        -->

        <main>
            [[!$main_page]]
        </main>

<!--        [[!$carousel]]-->
        [[!$footer]]

<!--        [[$scripts]]-->
    </body>
</html>',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '.html',
    'icon' => '',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[$head]]' => '<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/resources/img/favicon.png">
    <script src="/assets/resources/js/main.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="/assets/resources/css/main.css">

    <title>Ge-Group Ltd</title>
</head>',
    '[[*id:ne=`1`:then=`[[$aside]]`]]' => '',
    '[[$prod_card]]' => '<a href="/product" class="main-prod-card">
    <div class="main-prod-card-img">
        <img src="/assets/resources/img/prod/prod-1.png" alt="prod">
    </div>
    <div class="main-prod-card-text">
        <div>
            Фитинги для труб
        </div>
        <div>
            Фитингами называют соединительные элементы трубопроводов, уголки, тройники, разветвители, переходы на резьбу, штуцеры, футорки, бобышки и прочие переходники и адапторы позволяющие присоединять друг к другу разные части газовых и гидравлических систем.
        </div>
    </div>
</a>',
  ),
  'sourceCache' => 
  array (
    'MODX\\Revolution\\modChunk' => 
    array (
      'head' => 
      array (
        'fields' => 
        array (
          'id' => 1,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'head',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/resources/img/favicon.png">
<!--    <script src="/assets/resources/js/main.js"></script>-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="/assets/resources/css/main.css">

    <title>Ge-Group Ltd</title>
</head>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => true,
          'static_file' => 'assets/base/chunks/layout/head.html',
          'content' => '<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/resources/img/favicon.png">
<!--    <script src="/assets/resources/js/main.js"></script>-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="/assets/resources/css/main.css">

    <title>Ge-Group Ltd</title>
</head>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'MODX\\Revolution\\Sources\\modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'header' => 
      array (
        'fields' => 
        array (
          'id' => 2,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'header',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<header class="container">
    <div class="header">
        <a href="/" class="header-logo logo">
            <img src="/assets/resources/img/logo.svg" alt="logo">
        </a>
        <div class="header-menu">
            <a href="/">Главная</a>
            <a href="/products">Продукция</a>
            <a href="/contacts">Контакты</a>
        </div>
        <div class="header-contacts">
            <a href="mailto:mail@ge-group.ru">mail@ge-group.ru</a>
            <a href="tel:+70000000000">+7 000 000 00 00</a>
        </div>

        <div class="header-burger">
            <img src="/assets/resources/img/burger.svg" alt="menu">
        </div>
    </div>
    <div class="header-burger-menu">
        <div class="header-burger-menu-links">
            <a href="/">Главная</a>
            <a href="/products">Продукция</a>
            <a href="/contacts">Контакты</a>
        </div>
        <div class="header-burger-contacts">
            <a href="mailto:mail@ge-group.ru">mail@ge-group.ru</a>
            <a href="tel:+70000000000">+7 000 000 00 00</a>
        </div>
    </div>
</header>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => true,
          'static_file' => 'assets/base/chunks/layout/header.html',
          'content' => '<header class="container">
    <div class="header">
        <a href="/" class="header-logo logo">
            <img src="/assets/resources/img/logo.svg" alt="logo">
        </a>
        <div class="header-menu">
            <a href="/">Главная</a>
            <a href="/products">Продукция</a>
            <a href="/contacts">Контакты</a>
        </div>
        <div class="header-contacts">
            <a href="mailto:mail@ge-group.ru">mail@ge-group.ru</a>
            <a href="tel:+70000000000">+7 000 000 00 00</a>
        </div>

        <div class="header-burger">
            <img src="/assets/resources/img/burger.svg" alt="menu">
        </div>
    </div>
    <div class="header-burger-menu">
        <div class="header-burger-menu-links">
            <a href="/">Главная</a>
            <a href="/products">Продукция</a>
            <a href="/contacts">Контакты</a>
        </div>
        <div class="header-burger-contacts">
            <a href="mailto:mail@ge-group.ru">mail@ge-group.ru</a>
            <a href="tel:+70000000000">+7 000 000 00 00</a>
        </div>
    </div>
</header>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'MODX\\Revolution\\Sources\\modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'main_page' => 
      array (
        'fields' => 
        array (
          'id' => 4,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'main_page',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<div class="main-banner">
    <div class="main-banner-text">
        <div>Производство трубопроводной фрматуры</div>
        <div>Собственное производство</div>
    </div>
<!--    <img alt="banner" src="/assets/resources/img/main-banner.png">-->
</div>
<div class="container main-prod">
    <div class="main-prod-head">Продукция</div>
    <div class="main-prod-cards">
        [[$prod_card]]
        [[$prod_card]]
        [[$prod_card]]
    </div>
</div>
<div class="main-about">
    <div class="main-about-info">
<!--        <div class="main-about-info-head"></div>-->
        <div class="main-about-info-text">
            С каждым годом мы повышаем качество изделий, внедряем в производство инновационные решения и выстраиваем доверительные отношениям с партнерами. Мы выполняем заказы любой сложности и отправляем готовые изделия в любую точку стран СНГ.
        </div>
    </div>
    <div class="main-about-img with-number">
        <div class="about-with-numbers">
            <div>
                2000 м2
            </div>
            <div>
                склад
            </div>
        </div>
        <div class="about-with-numbers">
            <div>
                20 000
            </div>
            <div>
                наименований
            </div>
        </div>
        <div class="about-with-numbers">
            <div>
                с 2009 года
            </div>
            <div>
                поставляем
            </div>
        </div>
<!--        <img src="/assets/resources/img/about/about1.jpg" alt="img">-->
    </div>
</div>
<div class="main-about">
    <div class="main-about-info">
        <div class="main-about-info-head">Производство</div>
        <div class="main-about-info-text">
            С каждым годом мы повышаем качество изделий, внедряем в производство инновационные решения и выстраиваем доверительные отношениям с партнерами. Мы выполняем заказы любой сложности и отправляем готовые изделия в любую точку стран СНГ.
        </div>
    </div>
    <div class="main-about-img about-text">
            <div class="about-text">
                <div>
                    Отлаженный производственный цикл, позволяющий отгружать даже сложные позиции в сжатые сроки
                </div>
            </div>
            <div class="about-text">
                <div>
                    Высококвалифицированный конструкторский отдел
                </div>
            </div>
            <div class="about-text">
                <div>
                    Собственная сервисная служба
                </div>
            </div>
<!--        <img src="/assets/resources/img/about/about2.jpg" alt="img">-->
    </div>
</div>
<div class="container main-partners">
    <div class="main-partners-head">
        Партнеры
    </div>
    <div class="main-partners-img">
        <img src="/assets/resources/img/partners/partners-1.png" alt="img">
        <img src="/assets/resources/img/partners/partners-2.png" alt="img">
        <img src="/assets/resources/img/partners/partners-3.png" alt="img">
    </div>
</div>
<div class="container main-certificate">
    <div class="main-certificate-head">
        Документация и сертификаты
    </div>
    <div class="main-certificate-img">
        <img src="/assets/resources/img/certificate/certificate-1.png" alt="img">
        <img src="/assets/resources/img/certificate/certificate-1.png" alt="img">
        <img src="/assets/resources/img/certificate/certificate-1.png" alt="img">
        <img src="/assets/resources/img/certificate/certificate-1.png" alt="img">
        <img src="/assets/resources/img/certificate/certificate-1.png" alt="img">
        <img src="/assets/resources/img/certificate/certificate-1.png" alt="img">
    </div>
</div>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => true,
          'static_file' => 'assets/base/chunks/pages/main.html',
          'content' => '<div class="main-banner">
    <div class="main-banner-text">
        <div>Производство трубопроводной фрматуры</div>
        <div>Собственное производство</div>
    </div>
<!--    <img alt="banner" src="/assets/resources/img/main-banner.png">-->
</div>
<div class="container main-prod">
    <div class="main-prod-head">Продукция</div>
    <div class="main-prod-cards">
        [[$prod_card]]
        [[$prod_card]]
        [[$prod_card]]
    </div>
</div>
<div class="main-about">
    <div class="main-about-info">
<!--        <div class="main-about-info-head"></div>-->
        <div class="main-about-info-text">
            С каждым годом мы повышаем качество изделий, внедряем в производство инновационные решения и выстраиваем доверительные отношениям с партнерами. Мы выполняем заказы любой сложности и отправляем готовые изделия в любую точку стран СНГ.
        </div>
    </div>
    <div class="main-about-img with-number">
        <div class="about-with-numbers">
            <div>
                2000 м2
            </div>
            <div>
                склад
            </div>
        </div>
        <div class="about-with-numbers">
            <div>
                20 000
            </div>
            <div>
                наименований
            </div>
        </div>
        <div class="about-with-numbers">
            <div>
                с 2009 года
            </div>
            <div>
                поставляем
            </div>
        </div>
<!--        <img src="/assets/resources/img/about/about1.jpg" alt="img">-->
    </div>
</div>
<div class="main-about">
    <div class="main-about-info">
        <div class="main-about-info-head">Производство</div>
        <div class="main-about-info-text">
            С каждым годом мы повышаем качество изделий, внедряем в производство инновационные решения и выстраиваем доверительные отношениям с партнерами. Мы выполняем заказы любой сложности и отправляем готовые изделия в любую точку стран СНГ.
        </div>
    </div>
    <div class="main-about-img about-text">
            <div class="about-text">
                <div>
                    Отлаженный производственный цикл, позволяющий отгружать даже сложные позиции в сжатые сроки
                </div>
            </div>
            <div class="about-text">
                <div>
                    Высококвалифицированный конструкторский отдел
                </div>
            </div>
            <div class="about-text">
                <div>
                    Собственная сервисная служба
                </div>
            </div>
<!--        <img src="/assets/resources/img/about/about2.jpg" alt="img">-->
    </div>
</div>
<div class="container main-partners">
    <div class="main-partners-head">
        Партнеры
    </div>
    <div class="main-partners-img">
        <img src="/assets/resources/img/partners/partners-1.png" alt="img">
        <img src="/assets/resources/img/partners/partners-2.png" alt="img">
        <img src="/assets/resources/img/partners/partners-3.png" alt="img">
    </div>
</div>
<div class="container main-certificate">
    <div class="main-certificate-head">
        Документация и сертификаты
    </div>
    <div class="main-certificate-img">
        <img src="/assets/resources/img/certificate/certificate-1.png" alt="img">
        <img src="/assets/resources/img/certificate/certificate-1.png" alt="img">
        <img src="/assets/resources/img/certificate/certificate-1.png" alt="img">
        <img src="/assets/resources/img/certificate/certificate-1.png" alt="img">
        <img src="/assets/resources/img/certificate/certificate-1.png" alt="img">
        <img src="/assets/resources/img/certificate/certificate-1.png" alt="img">
    </div>
</div>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'MODX\\Revolution\\Sources\\modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'prod_card' => 
      array (
        'fields' => 
        array (
          'id' => 8,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'prod_card',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<a href="/product" class="main-prod-card">
    <div class="main-prod-card-img">
        <img src="/assets/resources/img/prod/prod-1.png" alt="prod">
    </div>
    <div class="main-prod-card-text">
        <div>
            Фитинги для труб
        </div>
        <div>
            Фитингами называют соединительные элементы трубопроводов, уголки, тройники, разветвители, переходы на резьбу, штуцеры, футорки, бобышки и прочие переходники и адапторы позволяющие присоединять друг к другу разные части газовых и гидравлических систем.
        </div>
    </div>
</a>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => true,
          'static_file' => 'assets/base/chunks/elem/prod_card.html',
          'content' => '<a href="/product" class="main-prod-card">
    <div class="main-prod-card-img">
        <img src="/assets/resources/img/prod/prod-1.png" alt="prod">
    </div>
    <div class="main-prod-card-text">
        <div>
            Фитинги для труб
        </div>
        <div>
            Фитингами называют соединительные элементы трубопроводов, уголки, тройники, разветвители, переходы на резьбу, штуцеры, футорки, бобышки и прочие переходники и адапторы позволяющие присоединять друг к другу разные части газовых и гидравлических систем.
        </div>
    </div>
</a>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'MODX\\Revolution\\Sources\\modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
      'footer' => 
      array (
        'fields' => 
        array (
          'id' => 3,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'footer',
          'description' => '',
          'editor_type' => 0,
          'category' => 0,
          'cache_type' => 0,
          'snippet' => '<footer class="container footer">
    <a href="/" class="footer-logo logo">
        <img src="/assets/resources/img/logo.svg" alt="logo">
    </a>
    <div class="footer-contacts">
        <a href="mailto:mail@ge-group.ru">mail@ge-group.ru</a>
        <a href="tel:+70000000000">+7 000 000 00 00</a>
    </div>
</footer>',
          'locked' => false,
          'properties' => 
          array (
          ),
          'static' => true,
          'static_file' => 'assets/base/chunks/layout/footer.html',
          'content' => '<footer class="container footer">
    <a href="/" class="footer-logo logo">
        <img src="/assets/resources/img/logo.svg" alt="logo">
    </a>
    <div class="footer-contacts">
        <a href="mailto:mail@ge-group.ru">mail@ge-group.ru</a>
        <a href="tel:+70000000000">+7 000 000 00 00</a>
    </div>
</footer>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'MODX\\Revolution\\Sources\\modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'MODX\\Revolution\\modSnippet' => 
    array (
    ),
    'MODX\\Revolution\\modTemplateVar' => 
    array (
    ),
  ),
);