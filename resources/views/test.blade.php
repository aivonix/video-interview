<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Basic carousel - jCarousel Examples</title>

        <!-- Shared assets -->
        <link rel="stylesheet" type="text/css" href="../_shared/css/style.css">

        <!-- Example assets -->
        <link rel="stylesheet" type="text/css" href="jcarousel.basic.css">

        <script
      src="https://code.jquery.com/jquery-3.1.1.min.js"
      integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
      crossorigin="anonymous"></script> 
        <script type="text/javascript" src="../../dist/jquery.jcarousel.min.js"></script>

        <script type="text/javascript" src="jcarousel.basic.js"></script>

    </head>
    <body>

        <div class="wrapper">
            <h1>Basic carousel</h1>

            <p>This example shows how to setup a basic carousel with prev/next controls and pagination.</p>

            <div class="jcarousel-wrapper">
                <div class="jcarousel">
                    <ul>
                        <li><img src="../_shared/img/img1.jpg" width="600" height="400" alt=""></li>
                        <li><img src="../_shared/img/img2.jpg" width="600" height="400" alt=""></li>
                        <li><img src="../_shared/img/img3.jpg" width="600" height="400" alt=""></li>
                        <li><img src="../_shared/img/img4.jpg" width="600" height="400" alt=""></li>
                        <li><img src="../_shared/img/img5.jpg" width="600" height="400" alt=""></li>
                        <li><img src="../_shared/img/img6.jpg" width="600" height="400" alt=""></li>
                    </ul>
                </div>

                <p class="photo-credits">
                    Photos by <a href="http://www.mw-fotografie.de">Marc Wiegelmann</a>
                </p>

                <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                <a href="#" class="jcarousel-control-next">&rsaquo;</a>
                
                <p class="jcarousel-pagination">
                    
                </p>
            </div>
        </div>

    </body>
</html>