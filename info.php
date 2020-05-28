<section id="info">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row">
                    <div class="col-12">
                        <h1>Велосипед 28" Pride RoCX TOUR (2020)</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <img src="images/img_item.jpg">
                        <div class="d-flex flex-row flex-wrap justify-content-center justify-content-lg-start sm-images">
                            <img src="images/sm-img1.jpg">
                            <img src="images/sm-img2.jpg">
                            <img src="images/sm-img3.jpg">
                            <img src="images/sm-img4.jpg">
                        </div>
                    </div>
                    <div class="col-lg-5 d-flex flex-column">
                        <div class="d-flex flex-row justify-content-center justify-content-lg-start">
                            <p class="mr-3">Бренд: Pride</p>
                            <p>  Код товару: SKD-15-16</p>
                        </div>
                        <div class="d-flex flex-row justify-content-center justify-content-lg-start">
                            <p class="mb-3">Виберіть розмір:</p>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-10 col-sm-6 col-8 p_border">
                                <p>Рама S (зріст 160 - 170 см) </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-11 pr-lg-0 d-flex flex-row justify-content-between align-items-baseline">
                                <p class="price">Ціна: 9850 грн</p>
                                <a href="#">Купити </a>
                            </div>
                        </div>
                        <p>Гарантія: 2 роки</p>
                        <div class="d-flex flex-row flex-wrap justify-content-between align-items-center mt-3">
                            <div class="d-flex flex-row payment">
                                <img src="images/payment1.png">
                                <div class="d-flex flex-column">
                                    <p>Оплата частинами</p>
                                    <p class="grey">до 7 платежів - 3360 грн/міс</p>
                                </div>
                            </div>
                            <div class="d-flex flex-ro payment">
                                <img src="images/payment2.png">
                                <div class="d-flex flex-column">
                                    <p>Оплата частинами</p>
                                    <p class="grey">до 10 платежів - 2355 грн/міс</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">

            <div class="col-md-10">
                <div class="row">
                    
                    <style>
                        .comment {
                            font-family: "MyriadPro-Regular";
                            margin-top: 80px;
                            margin-bottom: 50px;
                            padding-left: 15px;
                        }
                        .comment_name {
                            font-size: 20px;
                            border: 2px solid #666;
                            border-radius: 4px 4px 0 0;
                            padding: 8px;
                            font-weight: bold;
                        }
                        .comment_text {
                            font-size: 20px;
                            padding: 15px;
                            margin-bottom: 20px;
                            border: 2px solid #666;
                            border-top: none;
                        }
                        .stitle {
                            font-size: 30px;
                            border-bottom: 1px solid #a67c52;
                            margin-bottom: 15px;
                            padding-bottom: 5px;
                        }
                        .comment input[type="text"], .comment textarea {
                            font-size: 20px;
                            margin-bottom: 5px;
                            padding: 5px;
                            border: none;
                            border-bottom: 2px solid #F7931E;
                            background-color: rgba(255,255,255,.825);
                        }
                        .comment input[type="submit"]{
                            font-size: 20px;
                            padding: 10px 50px;
                            background-color: #F7931E;
                            border: 1px solid #000;
                        }
                        .comment input[type="submit"]:hover{
                            background-color: #fff;
                            border: 1px solid #F7931E;
                            color: #F7931E;
                        }
                    </style>


                    <div class="col comment">
                        <div class="stitle">Коментарі</div>

                        <?php

                            $name = POST("name");
                            $text = POST("text");

                            if ( $name !== NULL && $text !== NULL)
                                echo "<div class=\"comment_name\">
                                    $name
                                </div>
                                <div class=\"comment_text\">
                                    $text
                                </div>";

                        ?>
                        

                        <form action="#" method="post" class="comment_form">
                            <input required type="text" name="name" placeholder="Ім'я"><br/>
                            <textarea required placeholder="Повідомлення" name="text" class="col-8"></textarea><br/>
                            <input type="submit" value="Відправити">
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
