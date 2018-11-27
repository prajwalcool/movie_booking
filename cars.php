
<?php
/**
 * Created by PhpStorm.
 * User: Prajwal
 * Date: 11/19/2018
 * Time: 2:18 PM.
 */
//include 'head.php';
include 'includes/queryvalues.php';
$heading = '<!--Heading-->
        <div class="pt-4 pb-2 text-center">
            <h3>'.$language['0'].'</h3>
        </div>
        <hr>
    <!--Heading-->';
$controls = '<!--Controls-->
        <div class="controls-top">
            <a class="btn-floating card-prev " href="#'.$language['0'].'" data-slide="prev"><i class="fa fa-chevron-left "></i></a>
            <a class="btn-floating card-next " href="#'.$language['0'].'" data-slide="next"><i class="fa fa-chevron-right "></i></a>
        </div>
        <!--/.Controls-->';
$indicators = '<!--Indicators-->
        <ol class="carousel-indicators">
        <li data-target="#'.$language['0'].'" data-slide-to="0" class="active"></li>
            <li data-target="#'.$language['0'].'" data-slide-to="1"></li>
            <li data-target="#'.$language['0'].'" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->';

$card = '<!--/.Cards-->
                <div class="col-md-4 clearfix float-left">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="img/mv/'.getSanitizeName($movieNamesByLang[$language[0]][0]).'.jpg">
                        </div>
                        <div class="card-body">
                            <div class="card-left">
                                <div class="card-title">
                                    <h4>'.$movieNamesByLang[$language[0]][0].'</h4>
                                </div>
                                <p class="card-subtitle text-black-50">'.$cert[$movieNamesByLang[$language[0]][0]].' | '.$language[0].'</p>
                            </div>
                            <div class=\"card-right\">

                            </div>
                        </div>
                    </div>
                </div>
                <!--/.Cards-->';
$first_slide = '<!--First slide-->
            <div class="carousel-item active">
            '.$card.'
            </div>
            <!--/.First slide-->';
$slide = '<!--Second slide-->
            <div class="carousel-item">
            '.$card.'             
            </div>
            <!--/.Second slide-->';
$slides = '<!--Slides-->
        <div class="carousel-inner" role="listbox">
        '.$first_slide.'
        '.$slide.'
        '.$slide.'
        </div>
        <!--/.Slides-->';
$carousel = '<!--/.Carousel Wrapper-->
<div class="mv-slides container-fluid">
    '.$heading.'
    <div id="'.$language['0'].'" class="carousel slide carousel-multi-item mb-3" data-ride="carousel">
       '.$controls.'
       '.$indicators.'
       '.$slides.'
    </div>

</div>
<!--/.Carousel Wrapper-->';
function getCard($language, $i)
{
    global $movieNamesByLang;
    global $cert;
    $card = '<!--/.Cards-->
                <div class="col-md-4 clearfix float-left">
                    <div class="card">
                        <div class="card-img-top">
                            <img src="img/mv/'.getSanitizeName($movieNamesByLang[$language][$i]).'.jpg">
                        </div>
                        <div class="card-body">
                            <div class="card-left">
                                <div class="card-title">
                                    <h4>'.$movieNamesByLang[$language][$i].'</h4>
                                </div>
                                <p class="card-subtitle text-black-50">'.$cert[$movieNamesByLang[$language][$i]].' | '.$language.'</p>
                            </div>
                            <div class="card-right">
                            <a href="show-timings.php?movie='.getMovieId()[$movieNamesByLang[$language][$i]].'" class="btn py-2 round-btn">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.Cards-->';

    return $card;
}
function getSlides($lang,$total)
{
    $slides = '';
    if ($total < 3) {
        $slides .= '<!--First slide-->
            <div class="carousel-item active">';
        for (; $total >= 0; $total--) {
            $slides .= getCard($lang, $total);
        }
        $slides .= '</div>
            <!--/.First slide-->';
    } else {
        $slides .= '<!--First slide-->
            <div class="carousel-item active">';
        for ($val=$total; $val > $total-3; $val--) {
            $slides .= getCard($lang, $val);
        }
        $slides .= '</div>
            <!--/.First slide-->';
        $total -= 3;
        while ($total > 2) {
            $slides .= '<!--Second slide-->
            <div class="carousel-item">';
            for ($val=$total;$val > $total-3;$val--){
                $slides .= getCard($lang, $val);
            }
            $slides .= '</div>
            <!--/.Second slide-->';
            $total -= 3;
        }
        $slides .= '<!--Second slide-->
            <div class="carousel-item">';
        for (; $total >= 0; --$total) {
            $slides .= getCard($lang, $total);
        }
        $slides .= '</div>
            <!--/.Second slide-->';
    }

    return $slides;
}
function getCarousel($language)
{
    global $movieNamesByLang;
    $num = count($movieNamesByLang[$language]);
    $num--;
    $heading = '<!--Heading-->
        <div class="pt-4 pb-2 text-center">
            <h3>'.$language.'</h3>
        </div>
        <hr>
    <!--Heading-->';
    if ((int)($num/3)===0){
        $controls='';
    }else{
        $controls = '<!--Controls-->
        <div class="controls-top">
            <a class="btn-floating card-prev " href="#'.$language.'" data-slide="prev"><i class="fa fa-chevron-left "></i></a>
            <a class="btn-floating card-next " href="#'.$language.'" data-slide="next"><i class="fa fa-chevron-right "></i></a>
        </div>
        <!--/.Controls-->';
    }


    $indicators = '<!--Indicators-->
        <ol class="carousel-indicators">
        <li data-target="#'.$language.'" data-slide-to="0" class="active"></li>';
        for ($i=1;$i<($num+1)/3;$i++){
        $indicators.='<li data-target="#'.$language.'" data-slide-to="'.$i.'"></li>';
        }
    $indicators.='</ol>
        <!--/.Indicators-->';
    $carousel = '<!--/.Carousel Wrapper-->
<div class="mv-slides container container-fluid">
    '.$heading.'
    <div id="'.$language.'" class="carousel slide carousel-multi-item mb-3" data-ride="carousel">
       '.$controls.'
       '.$indicators.'
       <!--Slides-->
        <div class="carousel-inner" role="listbox">
       '.getSlides($language,$num).'
       </div>
    </div>
</div>
<!--/.Carousel Wrapper-->';

    return $carousel;
}
foreach ($language as $value) {
    echo getCarousel($value);
}
//include 'scripts.php';



