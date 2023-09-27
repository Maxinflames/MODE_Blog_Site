<!-- Initializes the main part of the site, with most repeating parts of the site being set here, and pulling in other information -->
<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>

    <script src="/docs/5.3/assets/js/color-modes.js"></script>

    <!-- Title and metadata descriptions -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Website layout file made by Maximus Vanhaarlem using Laravel, PHP Artisan and Bootstrap">
    <meta name="author" content="Maximus Vanhaarlem">
    <meta name="generator" content="Hugo 0.118.2">
    <title>Max's Website</title>

    <!-- Link to the css stylesheet -->
    <link rel="stylesheet" href="css/album">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">


    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">
</head>

<body>
    <!-- Header section with dark theme -->
    <header data-bs-theme="dark">
        <!-- Includes the navigation partials -->
        @include ('partials.head_nav')
    </header>

    <main>
        <table>
            <tr>
                <td class="align-top" style="width:15%">
                    @include('partials.side_nav')
                </td>
                <td style="width:70%">
                    <!-- Creates a div class and content container to place information into from each page -->
                    <div class="container" style="min-height: 400px">
                        @yield('content')
                    </div>
                </td>   
                <td style="width:15%">
                </td>
            </tr>
        </table>
    </main>
    
    <!-- Submits the footer portion of the partials layouts -->

</body>
@include ('partials.footer')
</html>