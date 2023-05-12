<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SEIKO eCommerce HTML 5 Template</title>
    <meta name="author" content="BigSteps">
    <meta name="viewport" content="width=device-width, minimum-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Vendor -->
    <link href="<?php echo base_url() ?>assets/template_front/js/vendor/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/template_front/js/vendor/slick/slick.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/template_front/js/vendor/magnificpopup/dist/magnific-popup.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/template_front/js/vendor/darktooltip/dist/darktooltip.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/template_front/css/animate.css" rel="stylesheet">

    <!-- Custom -->
    <link href="<?php echo base_url() ?>assets/template_front/css/style.css" rel="stylesheet">

    <!-- Icon Font -->
    <link href="<?php echo base_url() ?>assets/template_front/fonts/icomoon-reg/style.css" rel="stylesheet">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

</head>

<body class="quickview">
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-5">
            <!-- Product Gallery -->
            <div class="main-image">
                <img src="<?php echo base_url() ?>assets/template_front/images/products/large/product-gallery-1.jpg" class="zoom" alt="" data-zoom-image="<?php echo base_url() ?>assets/template_front/images/products/large/product-gallery-1.jpg" />
                <div class="dblclick-text"><span>Double click for enlarge</span></div>
            </div>
            <div class="product-previews-wrapper">
                <div class="product-previews-carousel" id="previewsGallery">
                    <a href="#" data-image="images/products/large/product-gallery-1.jpg"><img src="<?php echo base_url() ?>assets/template_front/images/products/product-gallery-1.jpg" alt="" /></a>
                    <a href="#" data-image="images/products/large/product-gallery-2.jpg"><img src="<?php echo base_url() ?>assets/template_front/images/products/product-gallery-2.jpg" alt="" /></a>
                    <a href="#" data-image="images/products/large/product-gallery-3.jpg"><img src="<?php echo base_url() ?>assets/template_front/images/products/product-gallery-3.jpg" alt="" /></a>
                </div>
            </div>
            <!-- /Product Gallery -->
        </div>
        <div class="col-sm-7">
            <div class="product-info-block classic">
                <div class="product-info-top">
                    <div class="product-sku">SKU: <span>Stock Keeping Unit</span></div>
                    <div class="rating">
                        <i class="icon icon-star fill"></i><i class="icon icon-star fill"></i><i class="icon icon-star fill"></i><i class="icon icon-star fill"></i><i class="icon icon-star"></i><span class="count">248 reviews</span>
                    </div>
                </div>
                <div class="product-name-wrapper">
                    <h1 class="product-name">Cover up tunic</h1>
                    <div class="product-labels">
                        <span class="product-label sale">SALE</span>
                        <span class="product-label new">NEW</span>
                    </div>
                </div>
                <div class="product-availability">Availability: <span>In stock</span></div>
                <div class="product-description">
                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia nonkdni numquam eius modi tempora incidunt ut labore </p>
                </div>
                <div class="product-options">
                    <div class="product-size swatches">
                        <span class="option-label">Size:</span>
                        <div class="select-wrapper-sm">
                            <select class="form-control input-sm size-variants">
                                <option value="36">36 - $114.00 USD</option>
                                <option value="38" selected>38 - $114.00 USD</option>
                                <option value="40">40 - $114.00 USD</option>
                                <option value="42">42 - $114.00 USD</option>
                            </select>
                        </div>
                        <ul class="size-list">
                            <li class="absent-option"><a href="#" data-value='36'><span class="value">36</span></a></li>
                            <li><a href="#" data-value='38'><span class="value">38</span></a></li>
                            <li><a href="#" data-value='40'><span class="value">40</span></a></li>
                            <li><a href="#" data-value='42'><span class="value">42</span></a></li>
                        </ul>
                    </div>
                    <div class="product-color swatches">
                        <span class="option-label">Color:</span>
                        <div class="select-wrapper-sm">
                            <select class="form-control input-sm">
                                <option value="Red">Red</option>
                                <option value="Green">Green</option>
                                <option value="Blue" selected>Blue</option>
                                <option value="Yellow">Yellow</option>
                                <option value="Grey">Grey</option>
                                <option value="Violet">Violet</option>
                            </select>
                        </div>
                        <ul class="color-list">
                            <li class="absent-option"><a href="#" data-toggle="tooltip" data-placement="top" title="Red" data-value="Red" data-image="images/products/product-color-red.jpg"><span class="value"><img src="images/colorswatch/color-red.png" alt=""></span></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Pink" data-value="Green" data-image="images/products/product-color-green.jpg"><span class="value"><img src="images/colorswatch/color-green.png" alt=""></span></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Marine" data-value="Blue" data-image="images/products/product-color-blue.jpg"><span class="value"><img src="images/colorswatch/color-blue.png" alt=""></span></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Orange" data-value="yellow" data-image="images/products/product-color-yellow.jpg"><span class="value"><img src="images/colorswatch/color-yellow.png" alt=""></span></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Orange" data-value="grey" data-image="images/products/product-color-grey.jpg"><span class="value"><img src="images/colorswatch/color-grey.png" alt=""></span></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Orange" data-value="grey" data-image="images/products/product-color-violet.jpg"><span class="value"><img src="images/colorswatch/color-violet.png" alt=""></span></a></li>
                        </ul>
                    </div>
                    <div class="product-qty">
                        <span class="option-label">Qty:</span>
                        <div class="qty qty-changer">
                            <fieldset>
                                <input type="button" value="&#8210;" class="decrease">
                                <input type="text" class="qty-input" value="2" data-min="0">
                                <input type="button" value="+" class="increase">
                            </fieldset>
                        </div>
                    </div>
                </div>
                <div class="product-actions">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="product-meta">
                                <span><a href="#"><i class="icon icon-heart"></i> Add to wishlist</a></span>
                                <span><a href="#"><i class="icon icon-balance"></i> Add to Compare</a></span>
                            </div>
                            <div class="social">
                                <div class="share-button toLeft">
                                    <span class="toggle">Share</span>
                                    <ul class="social-list">
                                        <li>
                                            <a href="#" class="icon icon-google google"></a>
                                        </li>
                                        <li>
                                            <a href="#" class="icon icon-fancy fancy"></a>
                                        </li>
                                        <li>
                                            <a href="#" class="icon icon-pinterest pinterest"></a>
                                        </li>
                                        <li>
                                            <a href="#" class="icon icon-twitter-logo twitter"></a>
                                        </li>
                                        <li>
                                            <a href="#" class="icon icon-facebook-logo facebook"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="price">
                                <span class="old-price"><span>$140.00</span></span>
                                <span class="special-price"><span>$114.00</span></span>
                            </div>
                            <div class="actions">
                                <button data-loading-text='<i class="icon icon-spinner spin"></i><span>Add to cart</span>' class="btn btn-lg btn-loading"><i class="icon icon-cart"></i><span>Add to cart</span></button>
                                <a href="#" class="btn btn-lg product-details"><i class="icon icon-external-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script src="<?php echo base_url() ?>assets/template_front/js/vendor/jquery/jquery.js"></script>
<script src="<?php echo base_url() ?>assets/template_front/js/vendor/bootstrap/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/template_front/js/vendor/slick/slick.min.js"></script>
<script src="<?php echo base_url() ?>assets/template_front/js/vendor/magnificpopup/dist/jquery.magnific-popup.js"></script>
<script src="<?php echo base_url() ?>assets/template_front/js/vendor/countdown/jquery.countdown.min.js"></script>
<script src="<?php echo base_url() ?>assets/template_front/js/vendor/ez-plus/jquery.ez-plus.js"></script>
<script src="<?php echo base_url() ?>assets/template_front/js/vendor/tocca/tocca.min.js"></script>
<script src="<?php echo base_url() ?>assets/template_front/js/vendor/darktooltip/dist/jquery.darktooltip.js"></script>
<script src="<?php echo base_url() ?>assets/template_front/js/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo base_url() ?>assets/template_front/js/app.js"></script>
</body>

</html>