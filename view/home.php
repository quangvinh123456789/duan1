
    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__items set-bg" data-setbg="img2/banner1.webp">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">

                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__items set-bg" data-setbg="img2/banner2.webp">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Hero Section End -->
    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="filter__controls">
                        <li class="active" data-filter="*">Sản phẩm chính</li>
                    </ul>
                </div>
            </div>

            <div class="row product__filter">
                <?php if (!empty($products)): ?>
                    <?php foreach ($products as $product): ?>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                            <div class="product__item">
                                <div class="product__item__pic set-bg">
                                    <span class="label">New</span>
                                    <br> <br>
                                    <img src="./uploads/img_sp/<?= htmlspecialchars($product['img']) ?>" alt="<?= htmlspecialchars($product['name']) ?> " width="230px" />
                                    <ul class="product__hover">
                                        <li><a href="#"><img src="./uploads/img_sp/heart.png" alt="" width="50px"></a></li>
                                        <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                                        <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><?= htmlspecialchars($product['name']) ?></h6>
                                    <a href="index.php?act=giohang" class="add-cart">+ Add To Cart</a>
                                    <div class="rating">
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <h5>
                                        <div class="price">
                                            <p>
                                                <span class="text-muted" style="text-decoration: line-through; margin-right: 10px;">
                                                    <?= number_format($product['gia']) ?> ₫
                                                </span>
                                                <span class="text-danger font-weight-bold">
                                                    <?= number_format($product['gia_new']) ?> ₫
                                                </span>
                                            </p>
                                        </div>
                                    </h5>
                                    <!-- <div class="product__color__select">
                                        <label for="pc-1">
                                            <input type="radio" id="pc-1">
                                        </label>
                                        <label class="active black" for="pc-2">
                                            <input type="radio" id="pc-2">
                                        </label>
                                        <label class="grey" for="pc-3">
                                            <input type="radio" id="pc-3">
                                        </label>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>Hiện không có sản phẩm nào để hiển thị.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Categories Section Begin -->
    <section class="categories spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="categories__text">
                        <h2> Đồng hồ<br /><span>Bộ siêu tập</span> <br />Phụ kiện</h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories__hot__deal">
                        <img src="./view/img2/sanpham_sale.png" alt="">
                        <div class="hot__deal__sticker">
                            <span>Sale</span>
                            <h5 style="font-size: 15px;">29.990.000đ</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1">
                    <div class="categories__deal__countdown">
                        <span>Discount during the month</span>
                        <h2>Đồng hồ nam Tissot Chemin des Tourelles Powermatic 80</h2>
                        <div class="categories__deal__countdown__timer" id="countdown">
                            <div class="cd-item">
                                <span>29</span>
                                <p>Days</p>
                            </div>
                            <div class="cd-item">
                                <span>1</span>
                                <p>Hours</p>
                            </div>
                            <div class="cd-item">
                                <span>50</span>
                                <p>Minutes</p>
                            </div>
                            <div class="cd-item">
                                <span>18</span>
                                <p>Seconds</p>
                            </div>
                        </div>
                        <a href="#" class="primary-btn">Mua ngay bây giờ</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
