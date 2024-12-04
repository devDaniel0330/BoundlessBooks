<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $_title ?? 'Untitled' ?></title>
    <link rel="shortcut icon" href="/images/favicon.png">
    <link rel="stylesheet" href="/css/main.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="/js/main.js"></script>
</head>

<body>
    <header>
        <h1><a href="/">BOUNDLESSBOOKS</a></h1>
    </header>

    <nav>
        <a href="/">Index</a>
        <a href="/productCatalog/productCatalog.php">PRODUCT CATALOG</a>
        <a href="#">PAGE 2</a>
        <a href="#">PAGE 3</a>
        <a href="#">PAGE 4</a>
        <a href="#">PAGE 5</a>
        <a href="#">PAGE 6</a>
    </nav>
    <main>
        <h1><?= $_title ?? 'Untitled' ?></h1>