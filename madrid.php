<html>
<head>
    <?php
        header("Location: /404.php");
        require_once "frontend/head.php";
    ?>
    <title>РеалМадрид_Ліверпуль</title>
</head>
<body>
    <?php
        require_once "frontend/header.php";
    ?>
    <div style="margin-top: 75px;" id="allrecords" class="t-records" data-hook="blocks-collection-content-node" data-tilda-project-id="439773" data-tilda-page-id="2178647" data-tilda-page-alias="madrid-liverpool" data-tilda-formskey="d9f3b97cdd9abaf1effcd3c1523c68b6">
        <div id="rec42604019" class="r t-rec t-rec_pb_0" style="padding-bottom:0px; " data-animationappear="off" data-record-type="415">
            <div class="t-cover" id="recorddiv42604019" bgimgfield="img" style="height: 611px; background-image: url(/pics/madrid/Champions-League-Fin.jpg);">
                <div class="t-cover__carrier loaded" id="coverCarry42604019" data-content-cover-id="42604019" data-content-cover-height="50vh" data-content-cover-parallax="" style="background-image: url(/pics/madrid/Champions-League-Fin.jpg); height: 611px; background-attachment: scroll;" src=""></div>
                <div class="t-cover__filter" style="height: 611px; background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.3));"></div>
                <div class="t415">
                    <div class="t-container">
                        <div class="t-width t-width_12 t415__mainblock">
                            <div class="t-cover__wrapper t-valign_middle" style="height: 611px;">
                                <div class="t415__content" data-hook-content="covercontent">
                                    <div class="t415__textwrapper t-width t-width_12">
                                        <div class="t415__title t-title t-title_md t-animate t-animate_started" data-animate-style="fadeinup" data-animate-group="yes" data-animate-order="3" data-animate-delay="0.2" field="title" style=" color:#38976d;">
                                            <div style="color:#2baa72;" id="event_title" data-customstyle="yes">Реал Мадрід vs Ліверпуль</div>
                                        </div>
                                        <div class="t415__descr t-descr t-descr_md t-animate t-animate_started" data-animate-style="fadeinup" data-animate-group="yes" data-animate-order="4" data-animate-delay="0.2" field="descr" style="color: rgb(255, 255, 255); transition-delay: 0.2s;">
                                            <div style="font-size:18px;" data-customstyle="yes"><br><br>Запрошуємо усіх футбольних вболівальників відвідати фінальний матч Ліги Чемпіонів в фан-зоні та пережити ці неймовірні емоції в дружній компанії <strong></strong><a href="https://www.google.com.ua/search?q=ZechemodanFamely&amp;rlz=1C1NHXL_ruUA780UA780&amp;oq=ZechemodanFamely&amp;aqs=chrome..69i57.16198j0j4&amp;sourceid=chrome&amp;ie=UTF-8" style=""><span style="color: rgb(45, 154, 119);"><span style="font-weight: 500;" data-redactor-style="font-weight: 500;"><span style="color: rgb(43, 170, 114);" data-redactor-tag="span"><strong>#</strong>ZeChemodan</span></span></span></a> та обговорити всі події футбольного світу в автобусі під час поїздки на матч.<br><br><br><br></div>
                                        </div>
                                    </div>
                                    <div id="t415__timer42604019" class="t415__timer t-animate t-animate_started" data-animate-style="fadeinup" data-animate-group="yes" data-animate-order="5" data-animate-delay="0.3" style="transition-delay: 0.5s;">
                                        <div class="t415__col "> <span class="t415__days t-title t-title_lg t415__number">16</span>
                                            <div class="t415__text t-descr t-descr_xxs">Днів</div>
                                        </div>
                                        <div class="t415__col"> <span class="t415__hours t-title t-title_lg t415__number">21</span>
                                            <div class="t415__text t-descr t-descr_xxs">Годин</div>
                                        </div>
                                        <div class="t415__col"> <span class="t415__minutes t-title t-title_lg t415__number">17</span>
                                            <div class="t415__text t-descr t-descr_xxs">Хвилин</div>
                                        </div>
                                        <div class="t415__col"> <span class="t415__seconds t-title t-title_lg t415__number">43</span>
                                            <div class="t415__text t-descr t-descr_xxs">Секунд</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                $(document).ready(function() {
                    function getTimeRemaining(endtime) {
                        var t = Date.parse(endtime) - Date.parse(new Date());
                        if (t < 0) {
                            var seconds = 0;
                            var minutes = 0;
                            var hours = 0;
                            var days = 0;
                        } else {
                            var seconds = Math.floor((t / 1000) % 60);
                            var minutes = Math.floor((t / 1000 / 60) % 60);
                            var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
                            var days = Math.floor(t / (1000 * 60 * 60 * 24));
                        }
                        return {
                            'total': t,
                            'days': days,
                            'hours': hours,
                            'minutes': minutes,
                            'seconds': seconds
                        };
                    }

                    function initializeClock(id, endtime) {
                        var clock = document.getElementById(id);
                        var daysSpan = clock.querySelector('.t415__days');
                        var hoursSpan = clock.querySelector('.t415__hours');
                        var minutesSpan = clock.querySelector('.t415__minutes');
                        var secondsSpan = clock.querySelector('.t415__seconds');

                        function updateClock() {
                            var t = getTimeRemaining(endtime);
                            if (t.days >= 100) {
                                daysSpan.innerHTML = t.days;
                            } else {
                                daysSpan.innerHTML = ('0' + t.days).slice(-2);
                            }
                            hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
                            minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
                            secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);
                            if (t.total <= 0) {
                                clearInterval(timeinterval);
                            }
                        }
                        updateClock();
                        var timeinterval = setInterval(updateClock, 1000);
                    }
                    var deadline = new Date("2018-05-25T20:00+03:00");
                    initializeClock('t415__timer42604019', deadline);
                });
            </script>
        </div>
                <div id="rec42604031" class="r t-rec" style="background-color:#e0e0e0; " data-record-type="581" data-bg-color="#e0e0e0" data-animationappear="off">
            <!-- cover -->
            <div class="t-cover" id="recorddiv42604031" bgimgfield="img" style="height:580px; background-attachment: scroll; background-image:url('/pics/madrid/100425969_England_vs.jpg');">
                <div class="t-cover__carrier loaded" id="coverCarry42604031" data-content-cover-id="42604031" data-content-cover-bg="/pics/madrid/100425969_England_vs.jpg" data-content-cover-height="580px" data-content-cover-parallax="" style="background-image: url(/pics/madrid/100425969_England_vs.jpg;); height: 580px; background-attachment: scroll;" src=""></div>
                <div class="t-cover__filter" style="height:580px;background-image: -moz-linear-gradient(top, rgba(0,0,0,0.90), rgba(0,0,0,0.50));background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.90), rgba(0,0,0,0.50));background-image: -o-linear-gradient(top, rgba(0,0,0,0.90), rgba(0,0,0,0.50));background-image: -ms-linear-gradient(top, rgba(0,0,0,0.90), rgba(0,0,0,0.50));background-image: linear-gradient(top, rgba(0,0,0,0.90), rgba(0,0,0,0.50));filter: progid:DXImageTransform.Microsoft.gradient(startColorStr='#19000000', endColorstr='#7f000000');"></div>
                <div class="t-container">
                    <div class="t-col t-col_10 t-prefix_1 t-align_center">
                        <div class="t-cover__wrapper t-valign_middle" style="height:580px; position: relative;z-index:1;">
                            <div class="t581">
                                <div data-hook-content="covercontent">
                                    <div class="t581__wrapper t-align_center">
                                        <div class="t581__title t-title t-title_sm t-margin_auto t-animate t-animate_started" data-animate-style="fadeinup" data-animate-group="yes" data-animate-order="1" style="color: rgb(56, 151, 109); transition-delay: 0s;" field="title">
                                            <div style="color:#ff0000;" data-customstyle="yes">
                                                <div style="color:#ff0000;" data-customstyle="yes"></div>
                                            </div>
                                        </div>
                                        <div class="t581__descr t-descr t-descr_xl t-margin_auto t-animate t-animate_started" data-animate-style="fadeinup" data-animate-group="yes" data-animate-order="2" data-animate-delay="0.3" style="color: rgb(224, 224, 224); max-width: 600px; transition-delay: 0.3s;" field="descr">
                                            <div style="color:#e0e0e0;" data-customstyle="yes">Відчуй себе частинкою великого футболу!</div>
                                        </div>
                                        <div class="t581__buttons">
                                            <div class="t581__buttons-wrapper t-margin_auto">
                                                <div class="t-animate t-animate_started" data-animate-style="fadein" data-animate-group="yes" data-animate-order="5" data-animate-delay="0.3" style="transition-delay: 1.1s;"> <svg class="t581__arrow-icon_mobile" style="fill:#38976d;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 70"><path d="M31.5 47c-1.1-.9-2.7-.7-3.5.4L20.2 57V5.8c0-1.4-1.1-2.5-2.5-2.5s-2.5 1.1-2.5 2.5V57l-7.8-9.7c-.8-1-2.4-1.2-3.5-.3-1.1.9-1.2 2.4-.4 3.5l12.2 15.2c.5.6 1.2.9 1.9.9s1.5-.3 1.9-.9l12.2-15.2c1-1.1.9-2.6-.2-3.5z"></path></svg> <svg class="t581__arrow-icon " style="fill:#38976d; " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 180"><path d="M54.1 109c-.8 0-1.6-.4-2-1.1-.8-1.1-.5-2.7.6-3.5 1.3-.9 6.8-4 11.6-6.6-15.9-1.3-29.2-8.3-38.5-20.2C8.9 56 8.5 24.1 13.2 3.4c.3-1.3 1.7-2.2 3-1.9 1.3.3 2.2 1.7 1.9 3-4.5 19.6-4.2 49.8 11.6 70 9 11.5 21.5 17.7 37.2 18.4l-1.8-2.3c-1.4-1.7-2.7-3.4-4.1-5.1-.7-.9-1.5-1.9-2.3-2.9-.9-1.1-.7-2.6.4-3.5 1.1-.9 2.6-.7 3.5.4 0 0 0 .1.1.1l6.4 7.9c.5.5.9 1.1 1.4 1.7 1.5 1.8 3.1 3.6 4.4 5.6 0 .1.1.1.1.2.1.3.2.5.3.8v.6c0 .2-.1.4-.2.6-.1.1-.1.3-.2.4-.1.2-.3.4-.5.6-.1.1-.3.2-.5.3-.1 0-.1.1-.2.1-1.2.6-16 8.6-18.1 10-.5.5-1 .6-1.5.6z"></path></svg> </div>
                                                <a href="#bus_form" target="" class="t581__btn t-btn t-animate t-animate_started" data-animate-style="fadeinup" data-animate-group="yes" data-animate-order="3" data-animate-delay="0.5" style="color: rgb(224, 224, 224); background-color: rgb(56, 151, 109); border-radius: 100px;">
                                                    <table style="width:100%; height:100%;">
                                                        <tbody>
                                                            <tr>
                                                                <td style="text-align: center;">Бронювати</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="rec42604021" class="r t-rec t-rec_pt_30 t-rec_pb_30" style="padding-top:30px;padding-bottom:30px;background-color:#e0e0e0; " data-record-type="86" data-bg-color="#e0e0e0" data-animationappear="off">
            <!-- T075 -->
            <div class="t075">
                <div class="t-container">
                    <div class="t-col t-col_4 t-align_center">
                        <center><img src="/pics/icons/calendar.png" data-tu-max-width="400" data-tu-max-height="400" class="t075__img t075__img_circle t-img loaded" imgfield="img"></center>
                        <div class="t075__wrappercenter t075__textclass1">
                            <div class="t075__title t-name" field="title">
                                <div style="color:#38976d;" data-customstyle="yes">26 Травня</div>
                            </div>
                            <div class="t-text" field="descr"><strong>Найближчi дати</strong></div>
                        </div>
                    </div>
                    <div class="t-col t-col_4 t-align_center">
                        <center><img src="/pics/icons/bus.svg" data-tu-max-width="400" data-tu-max-height="400" class="t075__img t075__img_circle t-img loaded" imgfield="img2"></center>
                        <div class="t075__wrappercenter t075__textclass1">
                            <div class="t075__title t-name" field="title2">
                                <div style="color:#38976d;" data-customstyle="yes">47</div>
                            </div>
                            <div class="t-text" field="descr2"><strong>Вільних місць</strong></div>
                        </div>
                    </div>
                    <div class="t-col t-col_4 t-align_center">
                        <center><img src="/pics/icons/money.png" data-tu-max-width="400" data-tu-max-height="400" class="t075__img t075__img_circle t-img loaded" imgfield="img3"></center>
                        <div class="t075__wrappercenter t075__textclass1">
                            <div class="t075__title t-name" field="title3">
                                <div style="color:#38976d;" data-customstyle="yes">349 UAH</div>
                            </div>
                            <div class="t-text" field="descr3"><strong>Ціна</strong></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style type="text/css">
            .t774__col{
                background-color: #fff;
                margin-bottom: 40px;
            }
            .t774__btn td{
                color: white;
            }
            .t774__uptitle{
             color: rgb(255, 133, 98);   
            }
            .t774__textwrapper {
                box-sizing: border-box;
                padding: 27px 30px;
            }
            .t774__btn-wrapper {
                display: flex;
                align-items: center;
                justify-content: center;
                position: absolute;
                bottom: 30px;
            }
            .t774__content{
                display: flex;
                justify-content: center;
            }
        </style>
        <div id="rec42604023" class="r t-rec t-rec_pb_0" style="padding-bottom:0px;background-color:#e0e0e0; " data-animationappear="off" data-record-type="408" data-bg-color="#e0e0e0">
            <!-- t408 -->
            <!-- cover -->
            <div class="t-cover" id="recorddiv42604023" bgimgfield="img" style="height: 558px; background-attachment: scroll; background-image: url(/pics/madrid/C6wqqshc0S8.jpg);">
                <div class="t-cover__carrier loaded" id="coverCarry42604023" data-content-cover-id="42604023" data-content-cover-height="40vh" data-content-cover-parallax="" style="background-image: url(/pics/madrid/C6wqqshc0S8.jpg&quot;); height: 558px; background-attachment: scroll;" src=""></div>
                <div class="t-cover__filter" style="height: 558px; background-color: rgb(0, 0, 0); opacity: 0.6;"></div>
                <div class="t408">
                    <div class="t-container">
                        <div class="t-cover__wrapper t-valign_bottom" style="height: 558px;padding: 50px 0; position: relative; z-index: 2;">
                            <div class="t408__wrapper" data-hook-content="covercontent">
                                <div class="t408__textwrapper t-width t-width_6" style="box-sizing: border-box;margin: 0 auto 70px;padding: 0 20px;">
                                    <div class="t408__title t-section_title t-title t-title_md t-animate t-animate_started" data-animate-style="fadeinup" data-animate-group="yes" field="title" style="transition-delay: 0s;">
                                        <div style="color:#e0e0e0;" data-customstyle="yes">Ми з тобою</div>
                                    </div>
                                </div>
                                <div class="t408__blockswrapper">
                                    <div class="t408__col t-col t-col_4 t-animate t-animate__chain_first-in-row t-animate_started t-animate__chain_showed" data-animate-style="fadeinup" data-animate-chain="yes" data-animate-start-time="1525807965920" style="transition-delay: 0s;">
                                        <div class="t408__wrapper"> <img data-tu-max-width="400" data-tu-max-height="400" class="t408__img t408__img_circle" src="https://static.tildacdn.com/tild6632-3663-4239-b539-316462646365/basic_compass.png" style="width: 100px; height: 100px;" imgfield="img1">
                                            <div class="t408__title t-name t-name_md" field="title1">
                                                <div style="color:#38976d;" data-customstyle="yes">Подолаємо кілометрів<br><br>650+</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="t408__col t-col t-col_4 t-animate t-animate_started" data-animate-style="fadeinup" data-animate-chain="yes" data-animate-start-time="1525807966080" style="transition-delay: 0.16s;">
                                        <div class="t408__wrapper"> <img data-tu-max-width="400" data-tu-max-height="400" class="t408__img t408__img_circle" src="https://static.tildacdn.com/tild3134-3563-4938-b865-666532656136/basic_anticlockwise.png" style="width: 100px; height: 100px;" imgfield="img2">
                                            <div class="t408__title t-name t-name_md" field="title2">
                                                <div style="color:#38976d;" data-customstyle="yes">Годин в подорожі <br><br>12+</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="t408__col t-col t-col_4 t-animate t-animate_started" data-animate-style="fadeinup" data-animate-chain="yes" data-animate-start-time="1525807966240" style="transition-delay: 0.32s;">
                                        <div class="t408__wrapper"> <img data-tu-max-width="400" data-tu-max-height="400" class="t408__img t408__img_circle" src="https://static.tildacdn.com/tild6662-3862-4630-b739-636434656231/noroot.svg" style="width: 100px; height: 100px;" imgfield="img3">
                                            <div class="t408__title t-name t-name_md" field="title3">
                                                <div style="color:#38976d;" data-customstyle="yes">Побуваємо в<br><br>м. Київ <br></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="rec42604026" class="r t-rec t-rec_pt_15 t-rec_pb_30" style="padding-top:15px;padding-bottom:30px;background-color:#e0e0e0; " data-record-type="497" data-bg-color="#e0e0e0" data-animationappear="off">
            <!-- t497 -->
            <div class="t497">
                <div class="t-section__container t-container">
                    <div class="t-col t-col_12">
                        <div class="t-section__topwrapper t-align_center">
                            <div class="t-section__descr t-descr t-descr_xl t-margin_auto t-animate t-animate_started" data-animate-style="fadeinup" data-animate-group="yes" field="bdescr" style="transition-delay: 0s;" data-animate-start-time="1525808531833">
                                <div style="font-size:28px;color:#38976d;" data-customstyle="yes"><span style="font-size: 42px;"><strong>Що включено</strong></span><strong></strong></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="t497__container t-container">
                    <div class="t497__col t-col t-col_5 t-prefix_1 t497__col_first t-item t-animate t-animate__chain_first-in-row t-animate_started t-animate__chain_showed" data-animate-style="fadeinup" data-animate-chain="yes" data-animate-start-time="1525808531834" style="transition-delay: 0.16s;">
                        <div class="t497__item">
                            <div class="t-cell t-valign_top">
                                <div class="t497__imgwrapper"><img src="https://static.tildacdn.com/lib/tildaicon/34386538-3437-4531-b661-633631313538/vaccination.svg" data-original="https://static.tildacdn.com/lib/tildaicon/34386538-3437-4531-b661-633631313538/vaccination.svg" class="t497__img t-img loaded" imgfield="li_img__1476973323713"></div>
                            </div>
                            <div class="t497__textwrapper t-cell t-valign_top">
                                <div class="t497__name t-name t-name_lg" field="li_title__1476973323713" style="line-height:1;padding-top:1px;padding-bottom:7px;">
                                    <div style="font-size:18px;" data-customstyle="yes">Страховий поліс;<br></div>
                                </div>
                                <div class="t497__descr t-descr t-descr_xs" field="li_descr__1476973323713" style="font-size:14px;line-height:1;padding-top:1px;padding-bottom:1px;">
                                    <div style="font-size:14px;" data-customstyle="yes"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="t497__col t-col t-col_5 t-prefix_1 t-item t-animate t-animate_started" data-animate-style="fadeinup" data-animate-chain="yes" data-animate-start-time="1525808531995" style="transition-delay: 0.32s;">
                        <div class="t497__item">
                            <div class="t-cell t-valign_top">
                                <div class="t497__imgwrapper"><img src="https://static.tildacdn.com/lib/tildaicon/63613831-6339-4965-b836-383331396362/kideducate_schoolbus.svg" data-original="https://static.tildacdn.com/lib/tildaicon/63613831-6339-4965-b836-383331396362/kideducate_schoolbus.svg" class="t497__img t-img loaded" imgfield="li_img__1476973352758"></div>
                            </div>
                            <div class="t497__textwrapper t-cell t-valign_top">
                                <div class="t497__name t-name t-name_lg" field="li_title__1476973352758" style="line-height:1;padding-top:1px;padding-bottom:7px;">
                                    <div style="font-size:18px;" data-customstyle="yes">Проїзд комфортабельним мікро\автобусом;<br></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="t-clear t497__separator" style="margin-bottom:10px;"></div>
                    <div class="t497__col t-col t-col_5 t-prefix_1 t-item t-animate t-animate__chain_first-in-row t-animate_started t-animate__chain_showed" data-animate-style="fadeinup" data-animate-chain="yes" data-animate-start-time="1525808531995" style="transition-delay: 0.32s;">
                        <div class="t497__item">
                            <div class="t-cell t-valign_top">
                                <div class="t497__imgwrapper"><img src="https://static.tildacdn.com/lib/tildaicon/31663663-3732-4632-b064-623563633935/Layer_10.svg" data-original="https://static.tildacdn.com/lib/tildaicon/31663663-3732-4632-b064-623563633935/Layer_10.svg" class="t497__img t-img loaded" imgfield="li_img__1476973363863"></div>
                            </div>
                            <div class="t497__textwrapper t-cell t-valign_top">
                                <div class="t497__name t-name t-name_lg" field="li_title__1476973363863" style="line-height:1;padding-top:1px;padding-bottom:7px;">
                                    <div style="font-size:18px;" data-customstyle="yes">Супровід керівником групи. <br></div>
                                </div>
                                <div class="t497__descr t-descr t-descr_xs" field="li_descr__1476973363863" style="font-size:14px;line-height:1;padding-top:1px;padding-bottom:1px;">
                                    <div style="font-size:14px;" data-customstyle="yes"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="t497__col t-col t-col_5 t-prefix_1 t-item t-animate t-animate_started" data-animate-style="fadeinup" data-animate-chain="yes" data-animate-start-time="1525808532156" style="transition-delay: 0.48s;">
                        <div class="t497__item">
                            <div class="t-cell t-valign_top">
                                <div class="t497__imgwrapper"><img src="https://static.tildacdn.com/lib/linea/e830720a-b0ea-a302-4e5b-828f76bfe8a7/basic_photo.svg" data-original="https://static.tildacdn.com/lib/linea/e830720a-b0ea-a302-4e5b-828f76bfe8a7/basic_photo.svg" class="t497__img t-img loaded" imgfield="li_img__1476973375188"></div>
                            </div>
                            <div class="t497__textwrapper t-cell t-valign_top">
                                <div class="t497__name t-name t-name_lg" field="li_title__1476973375188" style="line-height:1;padding-top:1px;padding-bottom:7px;">
                                    <div style="font-size:18px;" data-customstyle="yes">Фотозвіт туру;<br></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="rec42604027" class="r t-rec t-rec_pb_0" style="padding-bottom:0px; " data-animationappear="off" data-record-type="694">
            <!-- t694 -->
            <style>
                #rec42604027 .t694__table {
                    height: 5vw;
                }

                @media screen and (max-width: 768px) {
                    #rec42604027 .t694__table {
                        height: 5vw;
                    }
                }
            </style>
            <div class="t694" data-tile-ratio="0.05">
                <div class="t-container_100">
                    <div class="t694__row">
                        <div class="t694__col t-cell t-cell_100 t-align_center ">
                            <div class="t694__table" style="height: 220px;">
                                <div class="t694__cell t-align_center t-valign_middle">
                                    <div class="t694__bg t694__animation_fast t694__bg_animated t-bgimg loaded" bgimgfield="li_img__1495461413977" data-original="https://static.tildacdn.com/tild3633-3731-4439-a536-626135616531/1TYVVyTwLmU.jpg" style="background-image: url(&quot;https://static.tildacdn.com/tild3633-3731-4439-a536-626135616531/1TYVVyTwLmU.jpg&quot;);" src=""></div>
                                    <div class="t694__overlay t694__animation_fast" style="background-image: -moz-linear-gradient(top, rgba(0,0,0,0.70), rgba(0,0,0,0.60)); background-image: -webkit-linear-gradient(top, rgba(0,0,0,0.70), rgba(0,0,0,0.60)); background-image: -o-linear-gradient(top, rgba(0,0,0,0.70), rgba(0,0,0,0.60)); background-image: -ms-linear-gradient(top, rgba(0,0,0,0.70), rgba(0,0,0,0.60));"></div>
                                    <div class="t694__textwrapper t694__animation_fast t694__textwrapper_animated">
                                        <div class="t694__textwrapper__content">
                                            <div class="t694__inner-wrapper">
                                                <div class="t694__title t-title t-title_xxs" field="li_title__1495461413977" style="font-size:62px;">
                                                    <div style="color:#e0e0e0;" data-customstyle="yes">Програма туру</div>
                                                </div>
                                                <div class="t694__text t-descr t-descr_xs" field="li_text__1495461413977" style="">Організатори залишать за собою право часткових змін програми чи планування розпорядку, з метою покращення якості подорожі!</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="rec42604028" class="r t-rec t-rec_pt_30 t-rec_pb_30" style="padding-top:30px;padding-bottom:30px;background-color:#e0e0e0; " data-animationappear="off" data-record-type="774" data-bg-color="#e0e0e0">
            <!-- T774 -->
            <div class="t774 ">
                <div class="t774__container t-container t774__container_mobile-grid" data-blocks-per-row="3">
                    <div class="t774__col t-col t-col_4 t-align_left t-item t774__col_mobile-grid t-animate t-animate__chain_first-in-row t-animate_started t-animate__chain_showed" data-animate-style="zoomin" data-animate-chain="yes" data-animate-start-time="1525808531677" style="transition-delay: 0s;">
                        <div class="t774__wrapper" style="box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.90);">
                            <div class="t774__imgwrapper" style="padding-bottom:83.333333333333%;">
                                <div class="t774__bgimg t-bgimg loaded" bgimgfield="li_img__1509921307826" style="background-image: url(/pics/madrid/lZ2_JYCN1Zk.jpg);" src=""></div>
                            </div>
                            <div class="t774__content" style="height: 329px;">
                                <div class="t774__textwrapper ">
                                    <div class="t774__uptitle t-uptitle t-uptitle_xs" field="li_subtitle__1509921307826" style="">
                                        <div style="text-align:center;" data-customstyle="yes"><strong>ДЕНЬ ПЕРШИЙ</strong>/субота</div>
                                    </div>
                                    <div class="t774__title t-name t-name_md" field="li_title__1509921307826" style="">
                                        <div style="text-align:center;color:#38976d;" data-customstyle="yes">Виїзд з м. Рівне </div>
                                    </div>
                                    <div class="t774__descr t-descr t-descr_xxs" field="li_descr__1509921307826" style="">
                                        <div style="font-size:18px;font-family:'Arial';" data-customstyle="yes">Зустрічаємось на парковці <br>ТЦ "ЕКО маркета" (ЦУМ вул. Соборна 17)<br></div>
                                    </div>
                                </div>
                                <div class="t774__btn-wrapper ">
                                    <a href="" class="t774__btn t774__btn_second t-btn t-btn_sm" style="color:#ffffff;border:0px solid #ff0000;background-color:#ff0000;border-radius:10px; -moz-border-radius:10px; -webkit-border-radius:10px;">
                                        <table style="width:100%; height:100%;">
                                            <tbody>
                                                <tr>
                                                    <td>13:00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="t774__col t-col t-col_4 t-align_left t-item t774__col_mobile-grid t-animate t-animate_started" data-animate-style="zoomin" data-animate-chain="yes" data-animate-start-time="1525808531837" style="transition-delay: 0.16s;">
                        <div class="t774__wrapper" style="box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.90);">
                            <div class="t774__imgwrapper" style="padding-bottom:83.333333333333%;">
                                <div class="t774__bgimg t-bgimg loaded" bgimgfield="li_img__1509921584149" style="background-image: url(/pics/madrid/2Pyhstipfnk.jpg);" src=""></div>
                            </div>
                            <div class="t774__content" style="height: 329px;">
                                <div class="t774__textwrapper ">
                                    <div class="t774__uptitle t-uptitle t-uptitle_xs" field="li_subtitle__1509921584149" style="">
                                        <div style="text-align:center;" data-customstyle="yes"><strong></strong><strong></strong><strong>ДЕНЬ ПЕРШИЙ</strong>/субота</div>
                                    </div>
                                    <div class="t774__title t-name t-name_md" field="li_title__1509921584149" style="">
                                        <div style="text-align:center;color:#38976d;" data-customstyle="yes">Прибуття в столицю<br></div>
                                    </div>
                                    <div class="t774__descr t-descr t-descr_xxs" field="li_descr__1509921584149" style="">
                                        <div style="font-size:16px;font-family:'Arial';" data-customstyle="yes">В тебе буде час для прогулянки вечірніми Києвом..<br></div>
                                    </div>
                                </div>
                                <div class="t774__btn-wrapper ">
        
                                    <a href="" class="t774__btn t774__btn_second t-btn t-btn_sm" style="color:#ffffff;border:0px solid #ff0000;background-color:#ff0000;border-radius:10px; -moz-border-radius:10px; -webkit-border-radius:10px;">
                                        <table style="width:100%; height:100%;">
                                            <tbody>
                                                <tr>
                                                    <td>18:00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="t774__col t-col t-col_4 t-align_left t-item t774__col_mobile-grid t-animate t-animate_started" data-animate-style="zoomin" data-animate-chain="yes" data-animate-start-time="1525808531998" style="transition-delay: 0.32s;">
                        <div class="t774__wrapper" style="box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.90);">
                            <div class="t774__imgwrapper" style="padding-bottom:83.333333333333%;">
                                <div class="t774__bgimg t-bgimg loaded" bgimgfield="li_img__1516531459905" style="background-image: url(/pics/madrid/DBY2txOWAAAvaEK.jpg);" src=""></div>
                            </div>
                            <div class="t774__content" style="height: 329px;">
                                <div class="t774__textwrapper ">
                                    <div class="t774__uptitle t-uptitle t-uptitle_xs" field="li_subtitle__1516531459905" style="">
                                        <div style="text-align:center;" data-customstyle="yes"><strong></strong><strong>ДЕНЬ ПЕРШИЙ</strong>/субота</div>
                                    </div>
                                    <div class="t774__title t-name t-name_md" field="li_title__1516531459905" style="">
                                        <div style="text-align:center;color:#38976d;" data-customstyle="yes">Пергляд матчу</div>
                                    </div>
                                    <div class="t774__descr t-descr t-descr_xxs" field="li_descr__1516531459905" style="">
                                        <div style="font-size:16px;font-family:'Arial';" data-customstyle="yes">Ми прибули на одну з найкращих арен України, всі хто дістав омріяні квитки проходять турнікети, інші йдуть на перегляд матчу в фан-зону де вирує атмосфера матчу серед десятків тисяч вболівальників.</div>
                                    </div>
                                </div>
                                <div class="t774__btn-wrapper ">
                                    <a href="" class="t774__btn t774__btn_second t-btn t-btn_sm" style="color:#ffffff;border:0px solid #ff0000;background-color:#ff0000;border-radius:10px; -moz-border-radius:10px; -webkit-border-radius:10px;">
                                        <table style="width:100%; height:100%;">
                                            <tbody>
                                                <tr>
                                                    <td>21:45</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="t-clear t774__separator"></div>
                    <div class="t774__col t-col t-col_4 t-align_left t-item t774__col_mobile-grid t-animate t-animate__chain_first-in-row t-animate_started t-animate__chain_showed" data-animate-style="zoomin" data-animate-chain="yes" data-animate-start-time="1525808532165" style="transition-delay: 0.16s;">
                        <div class="t774__wrapper" style="box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.90);">
                            <div class="t774__imgwrapper" style="padding-bottom:83.333333333333%;">
                                <div class="t774__bgimg t-bgimg loaded" bgimgfield="li_img__1510882037019" style="background-image: url(/pics/madrid/87hrztNBRr8.jpg);" src=""></div>
                            </div>
                            <div class="t774__content" style="height: 305px;">
                                <div class="t774__textwrapper ">
                                    <div class="t774__uptitle t-uptitle t-uptitle_xs" field="li_subtitle__1510882037019" style="">
                                        <div style="text-align:center;" data-customstyle="yes"><strong></strong><strong>ДЕНЬ ДРУГИЙ</strong>/неділя</div>
                                    </div>
                                    <div class="t774__title t-name t-name_md" field="li_title__1510882037019" style="">
                                        <div style="text-align:center;color:#38976d;" data-customstyle="yes">Повернення в Рівне</div>
                                    </div>
                                    <div class="t774__descr t-descr t-descr_xxs" field="li_descr__1510882037019" style="">
                                        <div style="font-size:16px;font-family:'Arial';" data-customstyle="yes">Переповнені пережитими емоціями зустрічаємось в автобусі та обмінюємось враженнями матчу.</div>
                                    </div>
                                </div>
                                <div class="t774__btn-wrapper ">
                                    <a href="" class="t774__btn t774__btn_second t-btn t-btn_sm" style="color:#ffffff;border:0px solid #ff0000;background-color:#ff0000;border-radius:10px; -moz-border-radius:10px; -webkit-border-radius:10px;">
                                        <table style="width:100%; height:100%;">
                                            <tbody>
                                                <tr>
                                                    <td>01:00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="t774__col t-col t-col_4 t-align_left t-item t774__col_mobile-grid t-animate t-animate_started" data-animate-style="zoomin" data-animate-chain="yes" data-animate-start-time="1525808532325" style="transition-delay: 0.32s;">
                        <div class="t774__wrapper" style="box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.90);">
                            <div class="t774__imgwrapper" style="padding-bottom:83.333333333333%;">
                                <div class="t774__bgimg t-bgimg loaded" bgimgfield="li_img__1510882079869" style="background-image: url(/pics/madrid/EsTC_zzv5Wg.jpg);" src=""></div>
                            </div>
                            <div class="t774__content" style="height: 305px;">
                                <div class="t774__textwrapper ">
                                    <div class="t774__uptitle t-uptitle t-uptitle_xs" field="li_subtitle__1510882079869" style="">
                                        <div style="text-align:center;" data-customstyle="yes"><strong>ДЕНЬ ДРУГИЙ</strong>/неділя</div>
                                    </div>
                                    <div class="t774__title t-name t-name_md" field="li_title__1510882079869" style="">
                                        <div style="text-align:center;color:#38976d;" data-customstyle="yes">Прибуття в м. Рівне<br></div>
                                    </div>
                                    <div class="t774__descr t-descr t-descr_xxs" field="li_descr__1510882079869" style="">
                                        <div style="font-size:16px;font-family:'Arial';" data-customstyle="yes">Прощаємося до наступної поїздки з ZeChemodan знову, за новими враженнями і новими емоціями та пригодами =)<br><br></div>
                                    </div>
                                </div>
                                <div class="t774__btn-wrapper ">
                                    <a href="" class="t774__btn t774__btn_second t-btn t-btn_sm" style="color:#ffffff;border:0px solid #ff0000;background-color:#ff0000;border-radius:10px; -moz-border-radius:10px; -webkit-border-radius:10px;">
                                        <table style="width:100%; height:100%;">
                                            <tbody>
                                                <tr>
                                                    <td>05:30</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                #rec42604028 .t774__wrapper:hover {
                    box-shadow: 0px 20px 10 0px rgba(0, 0, 0, 0.90) !important;
                }
                .t774__bgimg{
                    height: 300px;
                    width: 360px;
                    background-position: center;
                    background-image: url(/pics/madrid/lZ2_JYCN1Zk.jpg);
                    background-repeat: no-repeat;
                }
                .t774__imgwrapper{
                    padding-bottom: 0!important;
                }
            </style>
        </div>

        <style type="text/css">
            .t415__col{
                display: inline-block;
                padding: 20px 35px;
            }
            .t415__col span, .t415__col div{
                color: white;
            }
        </style>
        <div id="rec42604032" class="r t-rec" style="background-color: rgb(255, 255, 255); opacity: 1;" data-animationappear="off" data-record-type="702" data-bg-color="#ffffff">
            <!-- T702 -->
            <div class="t702">
                <div class="t-popup" data-tooltip-hook="#popup:myform" data-track-popup="/tilda/popup/rec42604032/opened">
                    <div class="t-popup__close">
                        <div class="t-popup__close-wrapper"> <svg class="t-popup__close-icon" width="23px" height="23px" viewBox="0 0 23 23" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"> <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd"> <rect transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect> <rect transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) " x="10.3137085" y="-3.6862915" width="2" height="30"></rect> </g> </svg> </div>
                    </div>
                    <div class="t-popup__container t-width t-width_6" style="background-color: #e0e0e0;"> <img class="t702__img t-img" src="/pics/madrid/5cf91902a4-img.jpg" imgfield="img">
                        <div class="t702__wrapper">
                            <div class="t702__text-wrapper t-align_center">
                                <div class="t702__title t-title t-title_xxs" style="color:#ffffff;">
                                    <div style="color:#38976d;" data-customstyle="yes">Реєстрація:</div>
                                </div>
                                <div class="t702__descr t-descr t-descr_xs" style="">У<strong> "FAN-BUS"</strong> із <strong><span data-redactor-tag="span" style="color: rgb(56, 151, 109);">#ZecChemodan</span></strong> на фінальний матч Ліги Чемпіонів Реал Мадрид vs Ліверпуль</div>
                            </div>
                            <form id="form42604032" name="form42604032" role="form" action="" method="POST" data-formactiontype="2" data-inputbox=".t-input-group" class="t-form js-form-proccess t-form_inputs-total_7 " data-success-callback="t702_onSuccess"> <input type="hidden" name="formservices[]" value="b41331805a0d4bca9dfbc2ec1b849375" class="js-formaction-services"> <input type="hidden" name="formservices[]" value="f4e11b7c9795d9a1c0cab77be2607bb7" class="js-formaction-services">
                                <div class="js-successbox t-form__successbox t-text t-text_md" style="display:none;">
                                    <div style="font-size:26px;text-align:center;color:#ff0000;" data-customstyle="yes"><span style="font-weight: 700;"><a href="#popup:myform1" style="color:#ff0000 !important;border-bottom-color: #ffffff;">ДОДАТИ ДРУГА ✚</a></span></div>
                                </div>
                                <div class="t-form__inputsbox">
                                    <div class="t-input-group t-input-group_ph" data-input-lid="1495810354468">
                                        <div class="t-input-title t-descr t-descr_md" data-redactor-toolbar="no" field="li_title__1495810354468" style="color:#38976d;">Моб. тел: *</div>
                                        <div class="t-input-block" style="position: relative; overflow: hidden;"> <input type="text" name="Телефон" class="t-input js-tilda-rule js-tilda-mask  t-input_pvis" value="" placeholder="" data-tilda-req="1" data-tilda-rule="phone" data-tilda-mask="+38(099)999 99 99" style="color:#000000; border:1px solid #c9c9c9; background-color:#ffffff; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px;">
                                            <div class="t-input__vis-ph">+38 098 577 8228</div>
                                            <div class="t-input-error"></div>
                                        </div>
                                    </div>
                                    <div class="t-input-group t-input-group_nm" data-input-lid="1495810359387">
                                        <div class="t-input-title t-descr t-descr_md" data-redactor-toolbar="no" field="li_title__1495810359387" style="color:#38976d;">ПІБ *</div>
                                        <div class="t-input-block" style="position: relative; overflow: hidden;"> <input type="text" name="ПБ" class="t-input js-tilda-rule  t-input_pvis" value="" placeholder="" data-tilda-req="1" data-tilda-rule="name" style="color:#000000; border:1px solid #c9c9c9; background-color:#ffffff; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px;">
                                            <div class="t-input__vis-ph">Іванов Іван Іванович</div>
                                            <div class="t-input-error"></div>
                                        </div>
                                    </div>
                                    <div class="t-input-group t-input-group_da" data-input-lid="1510363405452">
                                        <div class="t-input-title t-descr t-descr_md" data-redactor-toolbar="no" field="li_title__1510363405452" style="color:#38976d;">Дата народження *</div>
                                        <div class="t-input-block">
                                            <div class="t-datepicker__wrapper" style="position: relative; overflow: hidden;"> <input type="text" name="Дата народження " class="t-input t-datepicker js-tilda-rule js-tilda-mask  t-input_pvis" value="" data-tilda-req="1" data-tilda-rule="date" data-tilda-dateformat="DD-MM-YYYY" data-tilda-datediv="dot" data-tilda-mask="99.99.9999" style="color:#000000; border:1px solid #c9c9c9; background-color:#ffffff; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px;" placeholder=""> <svg class="t-datepicker__icon " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 69.5 76.2" style="width:25px;fill:#ff0000;"> <path d="M9.6 42.9H21V31.6H9.6v11.3zm3-8.3H18v5.3h-5.3v-5.3zm16.5 8.3h11.3V31.6H29.1v11.3zm3-8.3h5.3v5.3h-5.3v-5.3zM48 42.9h11.3V31.6H48v11.3zm3-8.3h5.3v5.3H51v-5.3zM9.6 62H21V50.6H9.6V62zm3-8.4H18V59h-5.3v-5.4zM29.1 62h11.3V50.6H29.1V62zm3-8.4h5.3V59h-5.3v-5.4zM48 62h11.3V50.6H48V62zm3-8.4h5.3V59H51v-5.4z"></path> <path d="M59.7 6.8V5.3c0-2.9-2.4-5.3-5.3-5.3s-5.3 2.4-5.3 5.3v1.5H40V5.3C40 2.4 37.6 0 34.7 0s-5.3 2.4-5.3 5.3v1.5h-9.1V5.3C20.3 2.4 18 0 15 0c-2.9 0-5.3 2.4-5.3 5.3v1.5H0v69.5h69.5V6.8h-9.8zm-7.6-1.5c0-1.3 1-2.3 2.3-2.3s2.3 1 2.3 2.3v7.1c0 1.3-1 2.3-2.3 2.3s-2.3-1-2.3-2.3V5.3zm-19.7 0c0-1.3 1-2.3 2.3-2.3S37 4 37 5.3v7.1c0 1.3-1 2.3-2.3 2.3s-2.3-1-2.3-2.3V5.3zm-19.6 0C12.8 4 13.8 3 15 3c1.3 0 2.3 1 2.3 2.3v7.1c0 1.3-1 2.3-2.3 2.3-1.3 0-2.3-1-2.3-2.3V5.3zm53.7 67.9H3V9.8h6.8v2.6c0 2.9 2.4 5.3 5.3 5.3s5.3-2.4 5.3-5.3V9.8h9.1v2.6c0 2.9 2.4 5.3 5.3 5.3s5.3-2.4 5.3-5.3V9.8h9.1v2.6c0 2.9 2.4 5.3 5.3 5.3s5.3-2.4 5.3-5.3V9.8h6.8l-.1 63.4z"></path> </svg> </div>
                                            <link rel="stylesheet" href="//static.tildacdn.com/css/tiny-date-picker-1.5.css">
                                            <script src="//static.tildacdn.com/js/tiny-date-picker-1.2.js"></script>
                                            <script>
                                                $(document).ready(function() {
                                                    try {
                                                        setTimeout(function() {
                                                            t_datepicker_init('42604032', '1510363405452');
                                                        }, 500);
                                                    } catch (err) {}
                                                });
                                            </script>
                                            <div class="t-input-error"></div>
                                        </div>
                                    </div>
                                    <div class="t-input-group t-input-group_in" data-input-lid="1510363491818">
                                        <div class="t-input-title t-descr t-descr_md" data-redactor-toolbar="no" field="li_title__1510363491818" style="color:#38976d;">Серія та номер паспорта *</div>
                                        <div class="t-input-block" style="position: relative; overflow: hidden;"> <input type="text" name="Серя та номер паспорта" class="t-input js-tilda-rule  t-input_pvis" value="" placeholder="" data-tilda-req="1" style="color:#000000; border:1px solid #c9c9c9; background-color:#ffffff; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px;">
                                            <div class="t-input__vis-ph">СР 111111</div>
                                            <div class="t-input-error"></div>
                                        </div>
                                    </div>
                                    <div class="t-input-group t-input-group_ur" data-input-lid="1510363578615">
                                        <div class="t-input-title t-descr t-descr_md" data-redactor-toolbar="no" field="li_title__1510363578615" style="color:#38976d;">Силка на соц. мережу</div>
                                        <div class="t-input-block" style="position: relative; overflow: hidden;"> <input type="text" name="Силка " class="t-input js-tilda-rule  t-input_pvis" value="" placeholder="" data-tilda-rule="url" style="color:#000000; border:1px solid #c9c9c9; background-color:#ffffff; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px;">
                                            <div class="t-input__vis-ph">http:// vk.com, facebook.com, @instagam</div>
                                            <div class="t-input-error"></div>
                                        </div>
                                    </div>
                                    <div class="t-input-group t-input-group_ta" data-input-lid="1510363608756">
                                        <div class="t-input-title t-descr t-descr_md" data-redactor-toolbar="no" field="li_title__1510363608756" style="color:#38976d;"> Коментар</div>
                                        <div class="t-input-block" style="position: relative; overflow: hidden;"> <textarea name="Питання" class="t-input js-tilda-rule  t-input_pvis" placeholder="" style="color:#000000; border:1px solid #c9c9c9; background-color:#ffffff; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px;height:102px" rows="3"></textarea>
                                            <div class="t-input__vis-ph">Питання, пропозиції, побажання</div>
                                            <div class="t-input-error"></div>
                                        </div>
                                    </div>
                                    <div class="t-input-group t-input-group_cb" data-input-lid="1510584994247">
                                        <div class="t-input-block" style="position: relative; overflow: hidden;"> <label class="t-checkbox__control t-text t-text_xs" style="color: #38976d"><input type="checkbox" name="Checkbox" value="yes" class="t-checkbox js-tilda-rule" data-tilda-req="1"><div class="t-checkbox__indicator" style="border-color:#ff0000"></div>Я ознайомився(лась) з програмою та правилами Тур-Клубу Зелений Чемодан</label>
                                            <style>
                                                #rec42604032 .t-checkbox__indicator:after {
                                                    border-color: #ff0000;
                                                }
                                            </style>
                                            <div class="t-input-error"></div>
                                        </div>
                                    </div>
                                    <!--[if IE 8]><style>.t-checkbox__control .t-checkbox, .t-radio__control .t-radio { left: 0px; z-index: 1; opacity: 1;	}	.t-checkbox__indicator, .t-radio__indicator { display: none;	}</style><![endif]-->
                                    <div class="t-form__errorbox-middle">
                                        <div class="js-errorbox-all t-form__errorbox-wrapper" style="display:none;">
                                            <div class="t-form__errorbox-text t-text t-text_md">
                                                <p class="t-form__errorbox-item js-rule-error js-rule-error-all"></p>
                                                <p class="t-form__errorbox-item js-rule-error js-rule-error-req"></p>
                                                <p class="t-form__errorbox-item js-rule-error js-rule-error-email"></p>
                                                <p class="t-form__errorbox-item js-rule-error js-rule-error-name"></p>
                                                <p class="t-form__errorbox-item js-rule-error js-rule-error-phone"></p>
                                                <p class="t-form__errorbox-item js-rule-error js-rule-error-string"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="t-form__submit"> <button type="submit" class="t-submit" style="color:#ffffff;background-color:#38976d;border-radius:5px; -moz-border-radius:5px; -webkit-border-radius:5px;">Бронювати</button> </div>
                                </div>
                                <div class="t-form__errorbox-bottom">
                                    <div class="js-errorbox-all t-form__errorbox-wrapper" style="display:none;">
                                        <div class="t-form__errorbox-text t-text t-text_md">
                                            <p class="t-form__errorbox-item js-rule-error js-rule-error-all"></p>
                                            <p class="t-form__errorbox-item js-rule-error js-rule-error-req"></p>
                                            <p class="t-form__errorbox-item js-rule-error js-rule-error-email"></p>
                                            <p class="t-form__errorbox-item js-rule-error js-rule-error-name"></p>
                                            <p class="t-form__errorbox-item js-rule-error js-rule-error-phone"></p>
                                            <p class="t-form__errorbox-item js-rule-error js-rule-error-string"></p>
                                        </div>
                                    </div>
                                </div>
                                <div style="position: absolute; left: -5000px; bottom:0;"><input type="text" name="form-spec-comments" value="Its good" class="js-form-spec-comments" tabindex="-1"></div>
                            </form>
                            <style>
                                #rec42604032 input::-webkit-input-placeholder {
                                    color: #000000;
                                    opacity: 0.5;
                                }

                                #rec42604032 input::-moz-placeholder {
                                    color: #000000;
                                    opacity: 0.5;
                                }

                                #rec42604032 input:-moz-placeholder {
                                    color: #000000;
                                    opacity: 0.5;
                                }

                                #rec42604032 input:-ms-input-placeholder {
                                    color: #000000;
                                    opacity: 0.5;
                                }

                                #rec42604032 textarea::-webkit-input-placeholder {
                                    color: #000000;
                                    opacity: 0.5;
                                }

                                #rec42604032 textarea::-moz-placeholder {
                                    color: #000000;
                                    opacity: 0.5;
                                }

                                #rec42604032 textarea:-moz-placeholder {
                                    color: #000000;
                                    opacity: 0.5;
                                }

                                #rec42604032 textarea:-ms-input-placeholder {
                                    color: #000000;
                                    opacity: 0.5;
                                }
                            </style>
                            <div class="t702__form-bottom-text t-text t-text_xs t-align_center">Шляхом заповнення цієї анкети надаю згоду на збір, обробку та використання персональних даних про мене з метою ведення документації, для забезпечення роботи інформаційних баз даних, надаю згоду третім особам для забезпечення, вирішення організаційних питань, а також в інших випадках, передбачених законодавством України.</div>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                $(document).ready(function() {
                    setTimeout(function() {
                        t702_initPopup('42604032');
                    }, 500);
                });
            </script>
            <style>
                #rec42604032 .t-input__vis-ph {
                    color: #000000;
                }
            </style>

        </div>
         <?php
            require_once 'frontend/bus_form.php';
        ?>
    </div>
    <?php
        require_once 'frontend/footer.php';
    ?>
</body>

</html>