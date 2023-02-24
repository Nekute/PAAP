<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="house.css">
    <title>Page d'accueil</title>
</head>


<body>
<header>
    <nav>
        <svg id="burger" viewBox="0 0 100 100" width="80"
             onclick="this.classList.toggle('active'); document.querySelector('.navigation').classList.toggle('click');">
            <path class="line top"
                  d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"/>
            <path class="line middle" d="m 30,50 h 40"/>
            <path class="line bottom"
                  d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"/>
        </svg>
        <div class="logo" alt="logo">logo</div>
        <ul class="liste navigation">
            <li><a href="particulier.php" target="_blank" class="cta">Particulier</a></li>
            <li><a href="professionel.php" target="_blank" class="cta">Professionel</a></li>
        </ul>
    </nav>
</header>
<div id="house" draggable="true" ondragstart="return dragStart(event)" >
        <div class="roof">
            <div class="chimney"></div>
            <div class="roof-top"></div>
            <div class="roof-base"></div>
        </div>
        <div class="rooms">
            <div class="windows">
                <div class="window window-last"></div>
                <div class="window window-first"></div>
            </div>
            <div class="windows">
                <div class="window window-last"></div>
                <div class="window window-first"></div>
            </div>
        </div>
        <div class="entrance-roof hidden">
            <div class="shadow"></div>
        </div>
        <div class="entrance">
            <div class="entrance-window"></div>
            <div class="entrance-door"></div>
            <div class="entrance-stairs">
                <div class="stair stair-3"></div>
                <div class="stair stair-2"></div>
                <div class="stair stair-1"></div>
            </div>
        </div>
        <div class="entrance-roof">
        </div>
    </div></div>
<div id="house" draggable="true" ondragstart="return dragStart(event)" >
        <div class="roof">
            <div class="chimney"></div>
            <div class="roof-top"></div>
            <div class="roof-base"></div>
        </div>
        <div class="rooms">
            <div class="windows">
                <div class="window window-last"></div>
                <div class="window window-first"></div>
            </div>
            <div class="windows">
                <div class="window window-last"></div>
                <div class="window window-first"></div>
            </div>
        </div>
        <div class="entrance-roof hidden">
            <div class="shadow"></div>
        </div>
        <div class="entrance">
            <div class="entrance-window"></div>
            <div class="entrance-door"></div>
            <div class="entrance-stairs">
                <div class="stair stair-3"></div>
                <div class="stair stair-2"></div>
                <div class="stair stair-1"></div>
            </div>
        </div>
        <div class="entrance-roof">
        </div>
    </div></div>
<div class="hint">
    <svg width="10" height="20" viewBox="0 0 420 503">
        <path d="M219.5 352.844C207.887 169.969 155.867 96.0442 0 3.84404C0 3.84404 152.5 -28.656 245.5 95.344C338.5 219.344 332.5 352.844 332.5 352.844H419.5L274.5 502.344L129.5 352.844H219.5Z"
              fill="#abff62"/>
    </svg>
    resize
</div>
<div class="housedrop" id="holder" ondragenter="return dragEnter(event)" ondrop="return dragDrop(event)" ondragover="return dragOver(event)"></div>
<div class="ground"></div>
<div class="sun">
    <svg width="100" height="100" viewBox="0 0 800 800">
        <path d="M716.712 400L794.561 300.166C799.882 293.344 801.406 284.482 798.652 276.393C795.897 268.304 789.206 261.991 780.698 259.454L656.225 222.353L657.712 97.9201C657.815 89.4149 653.589 81.3907 646.379 76.3912C639.168 71.3916 629.864 70.0359 621.421 72.7578L497.868 112.56L422.428 11.0592C417.272 4.1214 408.912 0 400 0C391.087 0 382.728 4.1214 377.571 11.0592L302.129 112.562L178.574 72.7596C170.129 70.0394 160.826 71.3933 153.616 76.3929C146.406 81.3925 142.181 89.4166 142.283 97.9218L143.772 222.355L19.2988 259.456C10.7911 261.992 4.10011 268.306 1.34671 276.395C-1.40852 284.484 0.116665 293.344 5.43832 300.168L83.287 400.002L5.43832 499.836C0.116665 506.658 -1.40669 515.52 1.34671 523.609C4.10011 531.698 10.793 538.011 19.2988 540.548L143.772 577.647L142.283 702.08C142.181 710.585 146.406 718.609 153.616 723.609C160.828 728.607 170.127 729.962 178.574 727.242L302.129 687.44L377.571 788.943C382.728 795.88 391.087 800.002 400 800.002C408.912 800.002 417.272 795.88 422.428 788.943L497.87 687.44L621.423 727.242C629.866 729.962 639.17 728.608 646.381 723.609C653.591 718.609 657.816 710.585 657.714 702.082L656.227 577.647L780.7 540.548C789.208 538.011 795.899 531.698 798.654 523.609C801.408 515.52 799.884 506.66 794.563 499.836L716.712 400ZM400 655.343C252.454 655.343 132.417 540.796 132.417 399.998C132.417 259.201 252.454 144.655 400 144.655C547.545 144.655 667.582 259.201 667.582 399.998C667.582 540.796 547.545 655.343 400 655.343Z"/>
    </svg>
</div>
<div class="cloud"></div>
<div class="cloud cloud-small"></div>
<div class="cloud cloud-bottom"></div>
<div class="stars">
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
    <div class="star"></div>
</div>
<!--<script src="scipt.js"></script>-->
</body>

</html>