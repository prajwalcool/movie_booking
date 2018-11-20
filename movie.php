<!--Carousel Wrapper-->
<div class="mv-slides container-fluid">
    <div class="pt-4 pb-2 text-center">
        <h3><?=$language['0']?></h3>
    </div>
    <hr>
    <div id="<?= $language['0']?>" class="carousel slide carousel-multi-item mb-3" data-ride="carousel">

        <!--Controls-->
        <div class="controls-top">
            <a class="btn-floating card-prev " href="#<?= $language['0']?>" data-slide="prev"><i class="fa fa-chevron-left "></i></a>
            <a class="btn-floating card-next " href="#<?= $language['0']?>" data-slide="next"><i class="fa fa-chevron-right "></i></a>
        </div>
        <!--/.Controls-->

        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#<?= $language['0']?>" data-slide-to="0" class="active"></li>
            <li data-target="#<?= $language['0']?>" data-slide-to="1"></li>
            <li data-target="#<?= $language['0']?>" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

            <!--First slide-->
            <div class="carousel-item active">

                <div class="col-md-4 clearfix float-left">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="img/mv/<?= getSanitizeName($movieNamesByLang[$language[0]][0]) ?>.jpg">
                        </div>
                        <div class="card-body">
                            <div class="card-left">
                                <div class="card-title">
                                    <h4><?=$movieNamesByLang[$language[0]][0]?></h4>
                                </div>
                                <p class="card-subtitle text-black-50"><?=$cert[$movieNamesByLang[$language[0]][0]]?> | <?= $language[0]?></p>
                            </div>
                            <div class="card-right">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 clearfix float-left">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="img/mv/<?= getSanitizeName($movieNamesByLang[$language[0]][1]) ?>.jpg">
                        </div>
                        <div class="card-body">
                            <div class="card-left">
                                <div class="card-title">
                                    <h4><?=$movieNamesByLang[$language[0]][1]?></h4>
                                </div>
                                <p class="card-subtitle text-black-50"><?=$cert[$movieNamesByLang[$language[0]][1]]?> | <?= $language[0]?></p>
                            </div>
                            <div class="card-right">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 clearfix float-left">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="img/mv/<?= getSanitizeName($movieNamesByLang[$language[0]][2]) ?>.jpg">
                        </div>
                        <div class="card-body">
                            <div class="card-left">
                                <div class="card-title">
                                    <h4><?=$movieNamesByLang[$language[0]][2]?></h4>
                                </div>
                                <p class="card-subtitle text-black-50"><?=$cert[$movieNamesByLang[$language[0]][2]]?> | <?= $language[0]?></p>
                            </div>
                            <div class="card-right">

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--/.First slide-->

            <!--Second slide-->
            <div class="carousel-item">

                <div class="col-md-4 clearfix float-left">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="img/mv/<?= getSanitizeName($movieNamesByLang[$language[0]][3]) ?>.jpg">
                        </div>
                        <div class="card-body">
                            <div class="card-left">
                                <div class="card-title">
                                    <h4><?=$movieNamesByLang[$language[0]][3]?></h4>
                                </div>
                                <p class="card-subtitle text-black-50"><?=$cert[$movieNamesByLang[$language[0]][3]]?> | <?= $language[0]?></p>
                            </div>
                            <div class="card-right">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 float-left clearfix d-none d-md-block">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="img/mv/<?= getSanitizeName($movieNamesByLang[$language[0]][4]) ?>.jpg">
                        </div>
                        <div class="card-body">
                            <div class="card-left">
                                <div class="card-title">
                                    <h4><?=$movieNamesByLang[$language[0]][4]?></h4>
                                </div>
                                <p class="card-subtitle text-black-50"><?=$cert[$movieNamesByLang[$language[0]][4]]?> | <?= $language[0]?></p>
                            </div>
                            <div class="card-right">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 float-left clearfix d-none d-md-block">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="img/mv/<?= getSanitizeName($movieNamesByLang[$language[0]][5]) ?>.jpg">
                        </div>
                        <div class="card-body">
                            <div class="card-left">
                                <div class="card-title">
                                    <h4><?=$movieNamesByLang[$language[0]][5]?></h4>
                                </div>
                                <p class="card-subtitle text-black-50"><?=$cert[$movieNamesByLang[$language[0]][5]]?> | <?= $language[0]?></p>
                            </div>
                            <div class="card-right">

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--/.Second slide-->



        </div>
        <!--/.Slides-->

    </div>
</div>
<!--/.Carousel Wrapper-->



<!--Carousel Wrapper-->
<div id="now" class="mv-slides container-fluid">
    <div class="pt-4 pb-2 text-center">
        <h3>Kannada</h3>
    </div>
    <hr>
    <div id="kan" class="carousel slide carousel-multi-item mb-3" data-ride="carousel">

        <!--Controls-->
        <div class="controls-top">
            <a class="btn-floating card-prev " href="#kan" data-slide="prev"><i class="fa fa-chevron-left "></i></a>
            <a class="btn-floating card-next " href="#kan" data-slide="next"><i class="fa fa-chevron-right "></i></a>
        </div>
        <!--/.Controls-->

        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#kan" data-slide-to="0" class="active"></li>
            <li data-target="#kan" data-slide-to="1"></li>
            <li data-target="#kan" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

            <!--First slide-->
            <div class="carousel-item active">

                <div class="col-md-4 float-left">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="img/mv/sarkar.jpg">
                        </div>
                        <div class="card-body">
                            <div class="card-left">
                                <div class="card-title">
                                    <h4>Sarkar</h4>
                                </div>
                                <p class="card-subtitle text-black-50">U/A | Tamil</p>
                            </div>
                            <div class="card-right">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 float-left clearfix d-none d-md-block">
                    <div class="card ">
                        <div class="card-img-top">
                            <img src="img/mv/96.jpg">
                        </div>
                        <div class="card-body">
                            <div class="card-left">
                                <div class="card-title">
                                    <h4>96</h4>
                                </div>
                                <p class="card-subtitle text-black-50">U/A | Tamil</p>
                            </div>
                            <div class="card-right">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 float-left clearfix d-none d-md-block">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="img/mv/ayogya.jpg">
                        </div>
                        <div class="card-body">
                            <div class="card-left">
                                <div class="card-title">
                                    <h4>Ayogya</h4>
                                </div>
                                <p class="card-subtitle text-black-50">U/A | Kannada</p>
                            </div>
                            <div class="card-right">

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--/.First slide-->

            <!--Second slide-->
            <div class="carousel-item">

                <div class="col-md-4 float-left">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="img/mv/ayogya.jpg">
                        </div>
                        <div class="card-body">
                            <div class="card-left">
                                <div class="card-title">
                                    <h4>Ayogya</h4>
                                </div>
                                <p class="card-subtitle text-black-50">U/A | Kannada</p>
                            </div>
                            <div class="card-right">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 float-left clearfix d-none d-md-block">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="img/mv/ayogya.jpg">
                        </div>
                        <div class="card-body">
                            <div class="card-left">
                                <div class="card-title">
                                    <h4>Ayogya</h4>
                                </div>
                                <p class="card-subtitle text-black-50">U/A | Kannada</p>
                            </div>
                            <div class="card-right">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 float-left clearfix d-none d-md-block">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="img/mv/ayogya.jpg">
                        </div>
                        <div class="card-body">
                            <div class="card-left">
                                <div class="card-title">
                                    <h4>Ayogya</h4>
                                </div>
                                <p class="card-subtitle text-black-50">U/A | Kannada</p>
                            </div>
                            <div class="card-right">

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--/.Second slide-->

            <!--Third slide-->
            <div class="carousel-item">

                <div class="col-md-4 float-left">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="img/mv/ayogya.jpg">
                        </div>
                        <div class="card-body">
                            <div class="card-left">
                                <div class="card-title">
                                    <h4>Ayogya</h4>
                                </div>
                                <p class="card-subtitle text-black-50">U/A | Kannada</p>
                            </div>
                            <div class="card-right">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 float-left clearfix d-none d-md-block">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="img/mv/ayogya.jpg">
                        </div>
                        <div class="card-body">
                            <div class="card-left">
                                <div class="card-title">
                                    <h4>Ayogya</h4>
                                </div>
                                <p class="card-subtitle text-black-50">U/A | Kannada</p>
                            </div>
                            <div class="card-right">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 float-left clearfix d-none d-md-block">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="img/mv/ayogya.jpg">
                        </div>
                        <div class="card-body">
                            <div class="card-left">
                                <div class="card-title">
                                    <h4>Ayogya</h4>
                                </div>
                                <p class="card-subtitle text-black-50">U/A | Kannada</p>
                            </div>
                            <div class="card-right">

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--/.Third slide-->

        </div>
        <!--/.Slides-->

    </div>

</div>
<!--/.Carousel Wrapper-->


<!--Carousel Wrapper-->
<div id="now" class="mv-slides container-fluid">
    <div class="pt-4 pb-2 text-center">
        <h3>Hindi</h3>
    </div>
    <hr>
    <div id="hin" class="carousel slide carousel-multi-item mb-3" data-ride="carousel">

        <!--Controls-->
        <div class="controls-top">
            <a class="btn-floating card-prev " href="#hin" data-slide="prev"><i class="fa fa-chevron-left "></i></a>
            <a class="btn-floating card-next " href="#hin" data-slide="next"><i class="fa fa-chevron-right "></i></a>
        </div>
        <!--/.Controls-->

        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#kan" data-slide-to="0" class="active"></li>
            <li data-target="#kan" data-slide-to="1"></li>
            <li data-target="#kan" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

            <!--First slide-->
            <div class="carousel-item active">

                <div class="col-md-4 float-left">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="img/mv/sarkar.jpg">
                        </div>
                        <div class="card-body">
                            <div class="card-left">
                                <div class="card-title">
                                    <h4>Sarkar</h4>
                                </div>
                                <p class="card-subtitle text-black-50">U/A | Tamil</p>
                            </div>
                            <div class="card-right">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 float-left clearfix d-none d-md-block">
                    <div class="card ">
                        <div class="card-img-top">
                            <img src="img/mv/96.jpg">
                        </div>
                        <div class="card-body">
                            <div class="card-left">
                                <div class="card-title">
                                    <h4>96</h4>
                                </div>
                                <p class="card-subtitle text-black-50">U/A | Tamil</p>
                            </div>
                            <div class="card-right">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 float-left clearfix d-none d-md-block">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="img/mv/ayogya.jpg">
                        </div>
                        <div class="card-body">
                            <div class="card-left">
                                <div class="card-title">
                                    <h4>Ayogya</h4>
                                </div>
                                <p class="card-subtitle text-black-50">U/A | Kannada</p>
                            </div>
                            <div class="card-right">

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--/.First slide-->

            <!--Second slide-->
            <div class="carousel-item">

                <div class="col-md-4 float-left">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="img/mv/ayogya.jpg">
                        </div>
                        <div class="card-body">
                            <div class="card-left">
                                <div class="card-title">
                                    <h4>Ayogya</h4>
                                </div>
                                <p class="card-subtitle text-black-50">U/A | Kannada</p>
                            </div>
                            <div class="card-right">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 float-left clearfix d-none d-md-block">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="img/mv/ayogya.jpg">
                        </div>
                        <div class="card-body">
                            <div class="card-left">
                                <div class="card-title">
                                    <h4>Ayogya</h4>
                                </div>
                                <p class="card-subtitle text-black-50">U/A | Kannada</p>
                            </div>
                            <div class="card-right">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 float-left clearfix d-none d-md-block">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="img/mv/ayogya.jpg">
                        </div>
                        <div class="card-body">
                            <div class="card-left">
                                <div class="card-title">
                                    <h4>Ayogya</h4>
                                </div>
                                <p class="card-subtitle text-black-50">U/A | Kannada</p>
                            </div>
                            <div class="card-right">

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--/.Second slide-->

            <!--Third slide-->
            <div class="carousel-item">

                <div class="col-md-4 float-left">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="img/mv/ayogya.jpg">
                        </div>
                        <div class="card-body">
                            <div class="card-left">
                                <div class="card-title">
                                    <h4>Ayogya</h4>
                                </div>
                                <p class="card-subtitle text-black-50">U/A | Kannada</p>
                            </div>
                            <div class="card-right">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 float-left clearfix d-none d-md-block">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="img/mv/ayogya.jpg">
                        </div>
                        <div class="card-body">
                            <div class="card-left">
                                <div class="card-title">
                                    <h4>Ayogya</h4>
                                </div>
                                <p class="card-subtitle text-black-50">U/A | Kannada</p>
                            </div>
                            <div class="card-right">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 float-left clearfix d-none d-md-block">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="img/mv/ayogya.jpg">
                        </div>
                        <div class="card-body">
                            <div class="card-left">
                                <div class="card-title">
                                    <h4>Ayogya</h4>
                                </div>
                                <p class="card-subtitle text-black-50">U/A | Kannada</p>
                            </div>
                            <div class="card-right">

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--/.Third slide-->

        </div>
        <!--/.Slides-->

    </div>

</div>
<!--/.Carousel Wrapper-->

<!--Carousel Wrapper-->
<div id="now" class="mv-slides container-fluid">
    <div class="pt-4 pb-2 text-center">
        <h3>Telugu</h3>
    </div>
    <hr>
    <div id="tel" class="carousel slide carousel-multi-item mb-3" data-ride="carousel">

        <!--Controls-->
        <div class="controls-top">
            <a class="btn-floating card-prev " href="#tel" data-slide="prev"><i class="fa fa-chevron-left "></i></a>
            <a class="btn-floating card-next " href="#tel" data-slide="next"><i class="fa fa-chevron-right "></i></a>
        </div>
        <!--/.Controls-->

        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#kan" data-slide-to="0" class="active"></li>
            <li data-target="#kan" data-slide-to="1"></li>
            <li data-target="#kan" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

            <!--First slide-->
            <div class="carousel-item active">

                <div class="col-md-4 float-left">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="img/mv/sarkar.jpg">
                        </div>
                        <div class="card-body">
                            <div class="card-left">
                                <div class="card-title">
                                    <h4>Sarkar</h4>
                                </div>
                                <p class="card-subtitle text-black-50">U/A | Tamil</p>
                            </div>
                            <div class="card-right">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 float-left clearfix d-none d-md-block">
                    <div class="card ">
                        <div class="card-img-top">
                            <img src="img/mv/96.jpg">
                        </div>
                        <div class="card-body">
                            <div class="card-left">
                                <div class="card-title">
                                    <h4>96</h4>
                                </div>
                                <p class="card-subtitle text-black-50">U/A | Tamil</p>
                            </div>
                            <div class="card-right">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 float-left clearfix d-none d-md-block">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="img/mv/ayogya.jpg">
                        </div>
                        <div class="card-body">
                            <div class="card-left">
                                <div class="card-title">
                                    <h4>Ayogya</h4>
                                </div>
                                <p class="card-subtitle text-black-50">U/A | Kannada</p>
                            </div>
                            <div class="card-right">

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--/.First slide-->

            <!--Second slide-->
            <div class="carousel-item">

                <div class="col-md-4 float-left">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="img/mv/ayogya.jpg">
                        </div>
                        <div class="card-body">
                            <div class="card-left">
                                <div class="card-title">
                                    <h4>Ayogya</h4>
                                </div>
                                <p class="card-subtitle text-black-50">U/A | Kannada</p>
                            </div>
                            <div class="card-right">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 float-left clearfix d-none d-md-block">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="img/mv/ayogya.jpg">
                        </div>
                        <div class="card-body">
                            <div class="card-left">
                                <div class="card-title">
                                    <h4>Ayogya</h4>
                                </div>
                                <p class="card-subtitle text-black-50">U/A | Kannada</p>
                            </div>
                            <div class="card-right">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 float-left clearfix d-none d-md-block">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="img/mv/ayogya.jpg">
                        </div>
                        <div class="card-body">
                            <div class="card-left">
                                <div class="card-title">
                                    <h4>Ayogya</h4>
                                </div>
                                <p class="card-subtitle text-black-50">U/A | Kannada</p>
                            </div>
                            <div class="card-right">

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--/.Second slide-->

            <!--Third slide-->
            <div class="carousel-item">

                <div class="col-md-4 float-left">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="img/mv/ayogya.jpg">
                        </div>
                        <div class="card-body">
                            <div class="card-left">
                                <div class="card-title">
                                    <h4>Ayogya</h4>
                                </div>
                                <p class="card-subtitle text-black-50">U/A | Kannada</p>
                            </div>
                            <div class="card-right">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 float-left clearfix d-none d-md-block">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="img/mv/ayogya.jpg">
                        </div>
                        <div class="card-body">
                            <div class="card-left">
                                <div class="card-title">
                                    <h4>Ayogya</h4>
                                </div>
                                <p class="card-subtitle text-black-50">U/A | Kannada</p>
                            </div>
                            <div class="card-right">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 float-left clearfix d-none d-md-block">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="img/mv/ayogya.jpg">
                        </div>
                        <div class="card-body">
                            <div class="card-left">
                                <div class="card-title">
                                    <h4>Ayogya</h4>
                                </div>
                                <p class="card-subtitle text-black-50">U/A | Kannada</p>
                            </div>
                            <div class="card-right">

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--/.Third slide-->

        </div>
        <!--/.Slides-->

    </div>

</div>
<!--/.Carousel Wrapper-->

<!--Carousel Wrapper-->
<div id="now" class="mv-slides container-fluid">
    <div class="pt-4 pb-2 text-center">
        <h3>Tamil</h3>
    </div>
    <hr>
    <div id="tam" class="carousel slide carousel-multi-item mb-3" data-ride="carousel">

        <!--Controls-->
        <div class="controls-top">
            <a class="btn-floating card-prev " href="#tam" data-slide="prev"><i class="fa fa-chevron-left "></i></a>
            <a class="btn-floating card-next " href="#tam" data-slide="next"><i class="fa fa-chevron-right "></i></a>
        </div>
        <!--/.Controls-->

        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#kan" data-slide-to="0" class="active"></li>
            <li data-target="#kan" data-slide-to="1"></li>
            <li data-target="#kan" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

            <!--First slide-->
            <div class="carousel-item active">

                <div class="col-md-4 float-left">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="img/mv/sarkar.jpg">
                        </div>
                        <div class="card-body">
                            <div class="card-left">
                                <div class="card-title">
                                    <h4>Sarkar</h4>
                                </div>
                                <p class="card-subtitle text-black-50">U/A | Tamil</p>
                            </div>
                            <div class="card-right">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 float-left clearfix d-none d-md-block">
                    <div class="card ">
                        <div class="card-img-top">
                            <img src="img/mv/96.jpg">
                        </div>
                        <div class="card-body">
                            <div class="card-left">
                                <div class="card-title">
                                    <h4>96</h4>
                                </div>
                                <p class="card-subtitle text-black-50">U/A | Tamil</p>
                            </div>
                            <div class="card-right">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 float-left clearfix d-none d-md-block">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="img/mv/ayogya.jpg">
                        </div>
                        <div class="card-body">
                            <div class="card-left">
                                <div class="card-title">
                                    <h4>Ayogya</h4>
                                </div>
                                <p class="card-subtitle text-black-50">U/A | Kannada</p>
                            </div>
                            <div class="card-right">

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--/.First slide-->

            <!--Second slide-->
            <div class="carousel-item">

                <div class="col-md-4 float-left">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="img/mv/ayogya.jpg">
                        </div>
                        <div class="card-body">
                            <div class="card-left">
                                <div class="card-title">
                                    <h4>Ayogya</h4>
                                </div>
                                <p class="card-subtitle text-black-50">U/A | Kannada</p>
                            </div>
                            <div class="card-right">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 float-left clearfix d-none d-md-block">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="img/mv/ayogya.jpg">
                        </div>
                        <div class="card-body">
                            <div class="card-left">
                                <div class="card-title">
                                    <h4>Ayogya</h4>
                                </div>
                                <p class="card-subtitle text-black-50">U/A | Kannada</p>
                            </div>
                            <div class="card-right">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 float-left clearfix d-none d-md-block">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="img/mv/ayogya.jpg">
                        </div>
                        <div class="card-body">
                            <div class="card-left">
                                <div class="card-title">
                                    <h4>Ayogya</h4>
                                </div>
                                <p class="card-subtitle text-black-50">U/A | Kannada</p>
                            </div>
                            <div class="card-right">

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--/.Second slide-->

            <!--Third slide-->
            <div class="carousel-item">

                <div class="col-md-4 float-left">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="img/mv/ayogya.jpg">
                        </div>
                        <div class="card-body">
                            <div class="card-left">
                                <div class="card-title">
                                    <h4>Ayogya</h4>
                                </div>
                                <p class="card-subtitle text-black-50">U/A | Kannada</p>
                            </div>
                            <div class="card-right">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 float-left clearfix d-none d-md-block">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="img/mv/ayogya.jpg">
                        </div>
                        <div class="card-body">
                            <div class="card-left">
                                <div class="card-title">
                                    <h4>Ayogya</h4>
                                </div>
                                <p class="card-subtitle text-black-50">U/A | Kannada</p>
                            </div>
                            <div class="card-right">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 float-left clearfix d-none d-md-block">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="img/mv/ayogya.jpg">
                        </div>
                        <div class="card-body">
                            <div class="card-left">
                                <div class="card-title">
                                    <h4>Ayogya</h4>
                                </div>
                                <p class="card-subtitle text-black-50">U/A | Kannada</p>
                            </div>
                            <div class="card-right">

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--/.Third slide-->

        </div>
        <!--/.Slides-->

    </div>

</div>
<!--/.Carousel Wrapper-->


<section id="popular" >
    <div class="row mb-5">
        <div id="popular-head" class="col-12 text-center">
            <h1>NOW SHOWING</h1>
        </div>
    </div>
    <div id="t-pad" class="row">
        <div class="col-md">
            <div class="trailer-item">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/VkkyaodksT4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="t-item">
                    <h5><a href="#">Sarkar</a> </h5>
                    <p>
                        Tamil
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="trailer-item">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/U3dqoAHqagk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="t-item">
                    <h5><a href="#">Grrtha Govindam</a> </h5>
                    <p>
                        Telugu
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="trailer-item ">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/unAljCZMQYw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="t-item">
                    <h5><a href="#">Badhaai Ho!</a> </h5>
                    <p>
                        Hindi
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md">
            <div class="trailer-item">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/zI-Pux4uaqM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="t-item">
                    <h5><a href="#">Thugs Of Hindostan</a> </h5>
                    <p>
                        Hindi
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


