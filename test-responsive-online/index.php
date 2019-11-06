<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Responsive Online</title>
    <style>
        body {
            text-align: center;
            margin: 0;
        }

        iframe {
            border: 3px solid green;
        }
    </style>
    <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="../js/jquery.lazy.min.js"></script>
    <script type="text/javascript" src="../js/jquery.lazy.plugins.min.js"></script>
    <script>
        $(function () {
            $('.lazy').Lazy();
        });
    </script>
</head>

<body>
    <h1>Test Responsive Online</h1>
    <form action="" method="get">
        <label for="url">URL: </label>
        <input type="text" name="url" id="url" placeholder="https://drkhoe.vn/">
        <input type="submit" id="check" value="CHECK">
    </form>
    <h2>Galaxy S5 360 x 640</h2>
    <iframe class="lazy" data-src="<?php echo $_GET['url']; ?>" frameborder="0" style="width:360px;height:640px;"></iframe>
    <h2>Pixel 2 411 x 731</h2>
    <iframe class="lazy" data-src="<?php echo $_GET['url']; ?>" frameborder="0" style="width:411px;height:731px;"></iframe>
    <h2>Pixel 2 XL 411 x 823</h2>
    <iframe class="lazy" data-src="<?php echo $_GET['url']; ?>" frameborder="0" style="width:411px;height:823px;"></iframe>
    <h2>iPhone 5/SE 320 x 568</h2>
    <iframe class="lazy" data-src="<?php echo $_GET['url']; ?>" frameborder="0" style="width:320px;height:568px;"></iframe>
    <h2>iPhone 6/7/8 375 x 667</h2>
    <iframe class="lazy" data-src="<?php echo $_GET['url']; ?>" frameborder="0" style="width:375px;height:667px;"></iframe>
    <h2>iPhone 6/7/8 Plus 414 x 736</h2>
    <iframe class="lazy" data-src="<?php echo $_GET['url']; ?>" frameborder="0" style="width:414px;height:736px;"></iframe>
    <h2>iPhone X 375 x 812</h2>
    <iframe class="lazy" data-src="<?php echo $_GET['url']; ?>" frameborder="0" style="width:375px;height:812px;"></iframe>
    <h2>iPad 768 x 1024</h2>
    <iframe class="lazy" data-src="<?php echo $_GET['url']; ?>" frameborder="0" style="width:768px;height:1024px;"></iframe>
    <h2>iPad Pro 1024 x 1366</h2>
    <iframe class="lazy" data-src="<?php echo $_GET['url']; ?>" frameborder="0" style="width:1024px;height:1366px;"></iframe>
    <h2>PC</h2>
    <iframe class="lazy" data-src="<?php echo $_GET['url']; ?>" frameborder="0" style="width:100%;height:100vh;"></iframe>
</body>

</html>