<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-55HLH3M');</script>
        <!-- End Google Tag Manager -->

        <title>{{ $page->title }}</title>

        <meta property="og:title" content="{{ $page->title }}" />
        <meta property="og:locale" content="{{ $page->locale }}" />
        <meta name="description" content="{{ $page->description }}" />
        <meta property="og:description" content="{{ $page->ogDescription ?? $page->description }}" />
        <link rel="canonical" href="{{ $page->cannonical ?? rtrim($page->getUrl()) . '/' }}" />
        <meta property="og:url" content="{{ $page->cannonical ?? rtrim($page->getUrl()) . '/' }}" />
        <!-- <meta property="og:image" content="{{ $page->ogImage ?? rtrim($page->baseUrl) . '/assets/images/social-share.jpg' }}" /> -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:site" content="@akventuresou" />

        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700&display=swap" rel="stylesheet">
    </head>
    <body class="font-serif">
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-55HLH3M"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <div id="app">
            @yield('body')
        </div>
        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </body>
</html>
