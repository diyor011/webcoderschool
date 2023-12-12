<?php

include_once './includes/function.php';

include_once './includes/header.php';
include_once './includes/animation.php';

include_once "./page/$route.php";

include_once './includes/menu.php';
include_once './includes/footer.php';

?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>webcoder</title>
    <link rel="stylesheet" href="style/main.css">
</head>
<body>
    <div class="wrapper"> 
        <div class="forma">
            <form action="" method="post" class="form">
                <img src="images/iks.png" alt="" class="course__alert_info_exit">
                <input type="text" placeholder="Ismingiz">
                <input type="tel" placeholder="Telefon (99 999 99 99)">
                <select name="" id="">
                    <option value="">Kursni Tanlang:</option>
                    <option value="">Front-end</option>
                    <option value="">Back-end</option>
                    <option value="">Kompyuter savodxonligi</option>
                    <option value="">Kiberxavfsizlik</option>
                    <option value="">Bot yasash</option>
                </select>

                <div class="button">
                    <button type="submit">Yuborish</button>
                </div>
    
    
    
            </form>

        </div>
        <div class="wrapper__item">
            <img src="images/bg.png" alt="" class="wrapper__pic">
            <img src="images/one.png" alt="" class="one">
            <img src="images/two.png" alt="" class="two">
            <img src="images/three.png" alt="" class="three">
            <img src="images/forur.png" alt="" class="four">
            <img src="images/five.png" alt="" class="five"> -->

            <!-- home -->
            <!-- <div class="home active">
                <img src="images/six.png" alt="" class="six">
                <img src="images/seven.png" alt="" class="seven">
                <h1 class="title">WEBCODER</h1>
            </div> -->

            <!-- about -->
            <!-- <div class="home">
                <img src="images/about.png" alt="" class="about__pic">
                <h1 class="title">BIZ HAQIMIZDA</h1>
                <div class="about__info">
                    <img src="images/line.png" alt="" class="about__line">
                    <div class="about__text">
                        <p class="about__desc">
                            2021, fevral
                            <span>“Webcoder” jamoasi tashkil topdi</span>
                        </p>
                        <p class="about__desc">
                            2021, sentyabr
                            <span>“Webcoder school” o’quv markazi ish boshladi</span>
                        </p>
                        <p class="about__desc">
                            2022, iyun
                            <span>Onlayn kurslar yo‘lga qo‘yildi</span>
                        </p>

                    </div>
                </div>
            </div> -->

            <!-- course -->
            <!-- <div class="home">
                <div class="course">
                    <div class="course__link">
                        <div class="course__alert course__front">

                            <div class="course__alert_box">
                                <img src="images/frontend.png" alt="">
                                <h3>FRONT-END</h3>
                                <p>Lorem ipsum dolor sit amet. Ab corrupti maiores eos dolorem molestiae nam quae architecto non galisum rerum non maiores facilis qui veritatis asperiores rem quidem velit. Aut obcaecati voluptatum et facere quod eum placeat aliquam eum nihil adipisci.</p>
                            </div>

                            <div class="course__alert_info">
                                <img src="images/iks.png" alt="" class="course__alert_info_exit">
                                <div class="course__alert_info__extra">
                                    <div class="course__alert_info_box">
                                        <img src="images/calendar.png" alt="">
                                        <p>Muddati</p>
                                        <h5>9 oy</h5>
                                    </div>
                                    <div class="course__alert_info_box">
                                        <img src="images/soat.png" alt="">
                                        <p>Haftada</p>
                                        <h5>4 soat</h5>
                                    </div>
                                    <div class="course__alert_info_box">
                                        <img src="images/tolov.png" alt="">
                                        <p>Oylik to’lov</p>
                                        <h5>1 mln</h5>
                                    </div>
                                    <div class="course__alert_info_box">
                                        <img src="images/part.png" alt="">
                                        <p>Portfolio</p>
                                        <h5>6 ta</h5>
                                    </div>
                                </div>
                                <h2 class="course__alert_info__extra_title">Nimalar o’rgatiladi?</h2>

                                <p class="course__alert_info__extra_desc">Lorem ipsum dolor sit amet. Ab corrupti maiores eos dolorem molestiae nam quae architecto non galisum rerum non maiores facilis qui veritatis asperiores rem quidem velit. Aut obcaecati voluptatum et facere quod eum placeat aliquam eum nihil adipisci.</p>

                                <p class="course__alert_info__extra_desc">Lorem ipsum dolor sit amet. Ab corrupti maiores eos dolorem molestiae nam quae architecto non galisum rerum non maiores facilis qui veritatis asperiores rem quidem velit. Aut obcaecati voluptatum et facere quod eum placeat aliquam eum nihil adipisci.</p>

                                <div class="course__alert_btns">
                                    <a href="#" class="course__alert_btn">KURSGA YOZILISH</a>

                                </div>

                            </div>

                        </div>
                        <div class="course__alert course__jugut">

                            <div class="course__alert_box">
                                <img src="images/back.png" alt="">
                                <h3>BACK-END</h3>
                                <p>Lorem ipsum dolor sit amet. Ab corrupti maiores eos dolorem molestiae nam quae architecto non galisum rerum non maiores facilis qui veritatis asperiores rem quidem velit. Aut obcaecati voluptatum et facere quod eum placeat aliquam eum nihil adipisci.</p>
                            </div>

                            <div class="course__alert_info">
                                <img src="images/iks.png" alt="" class="course__alert_info_exit">
                                <div class="course__alert_info__extra">
                                    <div class="course__alert_info_box">
                                        <img src="images/calendar.png" alt="">
                                        <p>Muddati</p>
                                        <h5>9 oy</h5>
                                    </div>
                                    <div class="course__alert_info_box">
                                        <img src="images/soat.png" alt="">
                                        <p>Haftada</p>
                                        <h5>4 soat</h5>
                                    </div>
                                    <div class="course__alert_info_box">
                                        <img src="images/tolov.png" alt="">
                                        <p>Oylik to’lov</p>
                                        <h5>1 mln</h5>
                                    </div>
                                    <div class="course__alert_info_box">
                                        <img src="images/part.png" alt="">
                                        <p>Portfolio</p>
                                        <h5>6 ta</h5>
                                    </div>
                                </div>
                                <h2 class="course__alert_info__extra_title">Nimalar o’rgatiladi?</h2>

                                <p class="course__alert_info__extra_desc">Lorem ipsum dolor sit amet. Ab corrupti maiores eos dolorem molestiae nam quae architecto non galisum rerum non maiores facilis qui veritatis asperiores rem quidem velit. Aut obcaecati voluptatum et facere quod eum placeat aliquam eum nihil adipisci.</p>

                                <p class="course__alert_info__extra_desc">Lorem ipsum dolor sit amet. Ab corrupti maiores eos dolorem molestiae nam quae architecto non galisum rerum non maiores facilis qui veritatis asperiores rem quidem velit. Aut obcaecati voluptatum et facere quod eum placeat aliquam eum nihil adipisci.</p>

                                <div class="course__alert_btns">
                                    <a href="#" class="course__alert_btn">KURSGA YOZILISH</a>

                                </div>

                            </div>

                        </div>
                        <div class="course__alert course__jugut">

                            <div class="course__alert_box">
                                <img src="images/kompyuter.png" alt="">
                                <h3>KOMPYUTER SAVODXONLIGI</h3>
                                <p>Lorem ipsum dolor sit amet. Ab corrupti maiores eos dolorem molestiae nam quae architecto non galisum rerum non maiores facilis qui veritatis asperiores rem quidem velit. Aut obcaecati voluptatum et facere quod eum placeat aliquam eum nihil adipisci.</p>
                            </div>

                            <div class="course__alert_info">
                                <img src="images/iks.png" alt="" class="course__alert_info_exit">
                                <div class="course__alert_info__extra">
                                    <div class="course__alert_info_box">
                                        <img src="images/calendar.png" alt="">
                                        <p>Muddati</p>
                                        <h5>1 oy</h5>
                                    </div>
                                    <div class="course__alert_info_box">
                                        <img src="images/soat.png" alt="">
                                        <p>Haftada</p>
                                        <h5>4 soat</h5>
                                    </div>
                                    <div class="course__alert_info_box">
                                        <img src="images/tolov.png" alt="">
                                        <p>Oylik to’lov</p>
                                        <h5>700 000</h5>
                                    </div>
                                    <div class="course__alert_info_box">
                                        <img src="images/part.png" alt="">
                                        <p>Kurs oxirida</p>
                                        <h5>Diplom</h5>
                                    </div>
                                </div>
                                <h2 class="course__alert_info__extra_title">Nimalar o’rgatiladi?</h2>

                                <p class="course__alert_info__extra_desc">Lorem ipsum dolor sit amet. Ab corrupti maiores eos dolorem molestiae nam quae architecto non galisum rerum non maiores facilis qui veritatis asperiores rem quidem velit. Aut obcaecati voluptatum et facere quod eum placeat aliquam eum nihil adipisci.</p>

                                <p class="course__alert_info__extra_desc">Lorem ipsum dolor sit amet. Ab corrupti maiores eos dolorem molestiae nam quae architecto non galisum rerum non maiores facilis qui veritatis asperiores rem quidem velit. Aut obcaecati voluptatum et facere quod eum placeat aliquam eum nihil adipisci.</p>

                                <div class="course__alert_btns">
                                    <a href="#" class="course__alert_btn">KURSGA YOZILISH</a>

                                </div>

                            </div>

                        </div>
                        <div class="course__alert course__jugut">

                            <div class="course__alert_box">
                                <img src="images/kibershik.png" alt="">
                                <h3>KIBER-XAVFSIZLIK</h3>
                                <p>Lorem ipsum dolor sit amet. Ab corrupti maiores eos dolorem molestiae nam quae architecto non galisum rerum non maiores facilis qui veritatis asperiores rem quidem velit. Aut obcaecati voluptatum et facere quod eum placeat aliquam eum nihil adipisci.</p>
                            </div>

                            <div class="course__alert_info">
                                <img src="images/iks.png" alt="" class="course__alert_info_exit">
                                <div class="course__alert_info__extra">
                                    <div class="course__alert_info_box">
                                        <img src="images/calendar.png" alt="">
                                        <p>Muddati</p>
                                        <h5>1 yil</h5>
                                    </div>
                                    <div class="course__alert_info_box">
                                        <img src="images/soat.png" alt="">
                                        <p>Haftada</p>
                                        <h5>6 soat</h5>
                                    </div>
                                    <div class="course__alert_info_box">
                                        <img src="images/tolov.png" alt="">
                                        <p>Oylik to’lov</p>
                                        <h5>2 mln</h5>
                                    </div>
                                    <div class="course__alert_info_box">
                                        <img src="images/part.png" alt="">
                                        <p>Kurs oxirida</p>
                                        <h5>Diplom</h5>
                                    </div>
                                </div>
                                <h2 class="course__alert_info__extra_title">Nimalar o’rgatiladi?</h2>

                                <p class="course__alert_info__extra_desc">Lorem ipsum dolor sit amet. Ab corrupti maiores eos dolorem molestiae nam quae architecto non galisum rerum non maiores facilis qui veritatis asperiores rem quidem velit. Aut obcaecati voluptatum et facere quod eum placeat aliquam eum nihil adipisci.</p>

                                <p class="course__alert_info__extra_desc">Lorem ipsum dolor sit amet. Ab corrupti maiores eos dolorem molestiae nam quae architecto non galisum rerum non maiores facilis qui veritatis asperiores rem quidem velit. Aut obcaecati voluptatum et facere quod eum placeat aliquam eum nihil adipisci.</p>

                                <div class="course__alert_btns">
                                    <a href="#" class="course__alert_btn">KURSGA YOZILISH</a>

                                </div>

                            </div>

                        </div>
                        <div class="course__alert course__jugut">

                            <div class="course__alert_box">
                                <img src="images/botchik.png" alt="">
                                <h3>BOT YASASH</h3>
                                <p>Lorem ipsum dolor sit amet. Ab corrupti maiores eos dolorem molestiae nam quae architecto non galisum rerum non maiores facilis qui veritatis asperiores rem quidem velit. Aut obcaecati voluptatum et facere quod eum placeat aliquam eum nihil adipisci.</p>
                            </div>

                            <div class="course__alert_info">
                                <img src="images/iks.png" alt="" class="course__alert_info_exit">
                                <div class="course__alert_info__extra">
                                    <div class="course__alert_info_box">
                                        <img src="images/calendar.png" alt="">
                                        <p>Muddati</p>
                                        <h5>1 oy</h5>
                                    </div>
                                    <div class="course__alert_info_box">
                                        <img src="images/soat.png" alt="">
                                        <p>Haftada</p>
                                        <h5>4 soat</h5>
                                    </div>
                                    <div class="course__alert_info_box">
                                        <img src="images/tolov.png" alt="">
                                        <p>Oylik to’lov</p>
                                        <h5>1 mln</h5>
                                    </div>
                                    <div class="course__alert_info_box">
                                        <img src="images/part.png" alt="">
                                        <p>Kurs oxirida</p>
                                        <h5>Diplom</h5>
                                    </div>
                                </div>
                                <h2 class="course__alert_info__extra_title">Nimalar o’rgatiladi?</h2>

                                <p class="course__alert_info__extra_desc">Lorem ipsum dolor sit amet. Ab corrupti maiores eos dolorem molestiae nam quae architecto non galisum rerum non maiores facilis qui veritatis asperiores rem quidem velit. Aut obcaecati voluptatum et facere quod eum placeat aliquam eum nihil adipisci.</p>

                                <p class="course__alert_info__extra_desc">Lorem ipsum dolor sit amet. Ab corrupti maiores eos dolorem molestiae nam quae architecto non galisum rerum non maiores facilis qui veritatis asperiores rem quidem velit. Aut obcaecati voluptatum et facere quod eum placeat aliquam eum nihil adipisci.</p>

                                <div class="course__alert_btns">
                                    <a href="#" class="course__alert_btn">KURSGA YOZILISH</a>

                                </div>

                            </div>

                        </div>


                        <div class="course__one course__alohida">
                            <div class="course__box">
                                <img src="images/front.png" alt="" class="course__pic">
                                <h2 class="course__title">FRONT-END</h2>
                                <p class="course__desc">Lorem ipsum dolor sit amet. Ab corrupti maiores eos dolorem molestiae nam quae architecto non galisum rerum non maiores facilis qui veritatis asperiores rem quidem velit. Aut obcaecati voluptatum et facere quod eum placeat aliquam eum nihil adipisci.</p>
        
                            </div>
                        </div>
                        <div class="course__extra">
                            <div class="course__inner course__js">
                                <div class="course__box">
                                    <img src="images/bock.png" alt="" class="course__pic">
                                    <h2 class="course__title">BACK-END</h2>
            
                                </div>
                            </div>
                            <div class="course__inner course__js">
                                <div class="course__box">
                                    <img src="images/komp.png" alt="" class="course__pic">
                                    <h2 class="course__title">KOMPYUTER
                                        SAVODXONLIGI</h2>
            
                                </div>
                            </div>
                            <div class="course__inner course__js">
                                <div class="course__box">
                                    <img src="images/kiber.png" alt="" class="course__pic">
                                    <h2 class="course__title">KIBER-
                                        XAVFSIZLIK</h2>
            
                                </div>
                            </div>
                            <div class="course__inner course__js">
                                <div class="course__box">
                                    <img src="images/bot.png" alt="" class="course__pic">
                                    <h2 class="course__title">TELEGRAM
                                        BOT YASASH</h2>
            
                                </div>
                            </div>
    
                        </div>
    
                    </div>

                </div>
            </div> -->

            <!-- comanda -->
            <!-- <div class="home">
                <div class="comand">
                    
                    <div class="comand__puple">
                        <div class="comand__puple_extra">
                            <img src="images/iks.png" alt="" class="course__alert_info_exit comand__puple_extra_iks ">
                            <img src="images/course_person.png" alt="" class="course__puple_img">
                            <div class="comand__puple_info">
                                <h3 class="comand__puple_title">Jahongir</h3>
                                <div class="comand__puple_box">
                                    <p class="comand__puple_desc">Lorem ipsum dolor sit amet. Ab corrupti maiores eos dolorem molestiae nam quae architecto non galisum rerum non maiores facilis qui veritatis asperiores rem quidem velit. Aut obcaecati voluptatum et facere quod eum placeat aliquam eum nihil adipisci.</p>
                                    <p class="comand__puple_desc">Lorem ipsum dolor sit amet. Ab corrupti maiores eos dolorem molestiae nam quae architecto non galisum rerum non maiores facilis qui veritatis asperiores rem quidem velit. Aut obcaecati voluptatum et facere quod eum placeat aliquam eum nihil adipisci.</p>
                                    <p class="comand__puple_desc">Lorem ipsum dolor sit amet. Ab corrupti maiores eos dolorem molestiae nam quae architecto non galisum rerum non maiores facilis qui veritatis asperiores rem quidem velit. Aut obcaecati voluptatum et facere quod eum placeat aliquam eum nihil adipisci.</p>
                                </div>
                                <div class="comand__puple_links">
                                    <a href="" class=""><img src="images/Instagram.png" alt="" class="comand__puple_link"></a>
                                    <a href="" class=""> <img src="images/Telegram.png" alt="" class="comand__puple_link"></a>
                                    
                                   
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="comand__puple">
                        <div class="comand__puple_extra">
                            <img src="images/iks.png" alt="" class="course__alert_info_exit comand__puple_extra_iks ">
                            <img src="images/course_person.png" alt="" class="course__puple_img">
                            <div class="comand__puple_info">
                                <h3 class="comand__puple_title">Diyor</h3>
                                <div class="comand__puple_box">
                                    <p class="comand__puple_desc">Lorem ipsum dolor sit amet. Ab corrupti maiores eos dolorem molestiae nam quae architecto non galisum rerum non maiores facilis qui veritatis asperiores rem quidem velit. Aut obcaecati voluptatum et facere quod eum placeat aliquam eum nihil adipisci.</p>
                                    <p class="comand__puple_desc">Lorem ipsum dolor sit amet. Ab corrupti maiores eos dolorem molestiae nam quae architecto non galisum rerum non maiores facilis qui veritatis asperiores rem quidem velit. Aut obcaecati voluptatum et facere quod eum placeat aliquam eum nihil adipisci.</p>
                                    <p class="comand__puple_desc">Lorem ipsum dolor sit amet. Ab corrupti maiores eos dolorem molestiae nam quae architecto non galisum rerum non maiores facilis qui veritatis asperiores rem quidem velit. Aut obcaecati voluptatum et facere quod eum placeat aliquam eum nihil adipisci.</p>
                                </div>
                                <div class="comand__puple_links">
                                    <a href="" class=""><img src="images/Instagram.png" alt="" class="comand__puple_link"></a>
                                    <a href="" class=""> <img src="images/Telegram.png" alt="" class="comand__puple_link"></a>
                                    
                                   
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="comand__puple">
                        <div class="comand__puple_extra">
                            <img src="images/iks.png" alt="" class="course__alert_info_exit comand__puple_extra_iks ">
                            <img src="images/course_person.png" alt="" class="course__puple_img">
                            <div class="comand__puple_info">
                                <h3 class="comand__puple_title">Odil</h3>
                                <div class="comand__puple_box">
                                    <p class="comand__puple_desc">Lorem ipsum dolor sit amet. Ab corrupti maiores eos dolorem molestiae nam quae architecto non galisum rerum non maiores facilis qui veritatis asperiores rem quidem velit. Aut obcaecati voluptatum et facere quod eum placeat aliquam eum nihil adipisci.</p>
                                    <p class="comand__puple_desc">Lorem ipsum dolor sit amet. Ab corrupti maiores eos dolorem molestiae nam quae architecto non galisum rerum non maiores facilis qui veritatis asperiores rem quidem velit. Aut obcaecati voluptatum et facere quod eum placeat aliquam eum nihil adipisci.</p>
                                    <p class="comand__puple_desc">Lorem ipsum dolor sit amet. Ab corrupti maiores eos dolorem molestiae nam quae architecto non galisum rerum non maiores facilis qui veritatis asperiores rem quidem velit. Aut obcaecati voluptatum et facere quod eum placeat aliquam eum nihil adipisci.</p>
                                </div>
                                <div class="comand__puple_links">
                                    <a href="" class=""><img src="images/Instagram.png" alt="" class="comand__puple_link"></a>
                                    <a href="" class=""> <img src="images/Telegram.png" alt="" class="comand__puple_link"></a>
                                    
                                   
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="comand__puple">
                        <div class="comand__puple_extra">
                            <img src="images/iks.png" alt="" class="course__alert_info_exit comand__puple_extra_iks ">
                            <img src="images/course_person.png" alt="" class="course__puple_img">
                            <div class="comand__puple_info">
                                <h3 class="comand__puple_title">Jaloliddin</h3>
                                <div class="comand__puple_box">
                                    <p class="comand__puple_desc">Lorem ipsum dolor sit amet. Ab corrupti maiores eos dolorem molestiae nam quae architecto non galisum rerum non maiores facilis qui veritatis asperiores rem quidem velit. Aut obcaecati voluptatum et facere quod eum placeat aliquam eum nihil adipisci.</p>
                                    <p class="comand__puple_desc">Lorem ipsum dolor sit amet. Ab corrupti maiores eos dolorem molestiae nam quae architecto non galisum rerum non maiores facilis qui veritatis asperiores rem quidem velit. Aut obcaecati voluptatum et facere quod eum placeat aliquam eum nihil adipisci.</p>
                                    <p class="comand__puple_desc">Lorem ipsum dolor sit amet. Ab corrupti maiores eos dolorem molestiae nam quae architecto non galisum rerum non maiores facilis qui veritatis asperiores rem quidem velit. Aut obcaecati voluptatum et facere quod eum placeat aliquam eum nihil adipisci.</p>
                                </div>
                                <div class="comand__puple_links">
                                    <a href="" class=""><img src="images/Instagram.png" alt="" class="comand__puple_link"></a>
                                    <a href="" class=""> <img src="images/Telegram.png" alt="" class="comand__puple_link"></a>
                                    
                                   
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="comand__puple">
                        <div class="comand__puple_extra">
                            <img src="images/iks.png" alt="" class="course__alert_info_exit comand__puple_extra_iks ">
                            <img src="images/course_person.png" alt="" class="course__puple_img">
                            <div class="comand__puple_info">
                                <h3 class="comand__puple_title">Javohir</h3>
                                <div class="comand__puple_box">
                                    <p class="comand__puple_desc">Lorem ipsum dolor sit amet. Ab corrupti maiores eos dolorem molestiae nam quae architecto non galisum rerum non maiores facilis qui veritatis asperiores rem quidem velit. Aut obcaecati voluptatum et facere quod eum placeat aliquam eum nihil adipisci.</p>
                                    <p class="comand__puple_desc">Lorem ipsum dolor sit amet. Ab corrupti maiores eos dolorem molestiae nam quae architecto non galisum rerum non maiores facilis qui veritatis asperiores rem quidem velit. Aut obcaecati voluptatum et facere quod eum placeat aliquam eum nihil adipisci.</p>
                                    <p class="comand__puple_desc">Lorem ipsum dolor sit amet. Ab corrupti maiores eos dolorem molestiae nam quae architecto non galisum rerum non maiores facilis qui veritatis asperiores rem quidem velit. Aut obcaecati voluptatum et facere quod eum placeat aliquam eum nihil adipisci.</p>
                                </div>
                                <div class="comand__puple_links">
                                    <a href="" class=""><img src="images/Instagram.png" alt="" class="comand__puple_link"></a>
                                    <a href="" class=""> <img src="images/Telegram.png" alt="" class="comand__puple_link"></a>
                                    
                                   
                                </div>
                            </div>

                        </div>
                    </div>

                    <h2 class="comand__title">BIZNING JAMOA</h2>
                    <div class="comand__images">
                        <img src="images/styu1.png" alt="" class="comand__pic">
                        <img src="images/styu2.png" alt="" class="comand__pic">
                        <img src="images/styu3.png" alt="" class="comand__pic">
                        <img src="images/styu4.png" alt="" class="comand__pic">
                        <img src="images/styu5.png" alt="" class="comand__pic">
                    </div>

                </div>



            </div> -->

            <!-- location -->
            <!-- <div class="home">

                <div class="location">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11983.960682611149!2d69.2629528!3d41.3308271!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8b90c73f099d%3A0x266f1ef02c0e597b!2sWebcoder%20school!5e0!3m2!1sru!2s!4v1700997898388!5m2!1sru!2s" width="775" height="571" style="border-radius: 6px;
                    border: 7px solid #C906F9;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    <div class="location__info">
                        <p class="location__desc">Toshkent shahri, Shayxontohur tumani, Labzak ko‘chasi, 95.
                            Mo‘ljal: sobiq MTC chorrahasi.</p>
                        <p class="location__tel">
                            Telfon:
                            <a href="tel:990023252" class="tel">+998(99) 002-32-52</a>
                        </p>
                        <p class="location__logos">
                            <a href="https://t.me/webcoder_school" class="location__icon"><img src="images/Telegram.png" alt=""></a>
                            <a href="https://www.facebook.com/webcoder.school/" class="location__icon"><img src="images/Facebook.png" alt=""></a>
                            <a href="https://www.youtube.com/@webcoderschool" class="location__icon"><img src="images/YouTube.png" alt=""></a>
                            <a href="https://instagram.com/webcoder.school/" class="location__icon"><img src="images/Instagram.png" alt=""></a>
                        </p>
                    </div>
                </div>

            </div> -->

            <!-- <img src="images/eght.png" alt="" class="eght">
            <img src="images/nine.png" alt="" class="nine">
            <nav class="nav">
                <ul class="nav__list">
                    <li class="nav__links"><a href="#" class="nav_link"><img src="images/info.png" alt=""></a></li>
                    <li class="nav__links"><a href="#" class="nav_link"><img src="images/course.png" alt=""></a></li>
                    <li class="nav__links"><a href="#" class="nav_link"><img src="images/comand.png" alt=""></a></li>
                    <li class="nav__links"><a href="#" class="nav_link"><img src="images/location.png" alt=""></a></li>
                </ul>
            </nav> -->
        <!-- </div>



    </div>


    <script src="js/main.js"></script>
</body>
</html> -->