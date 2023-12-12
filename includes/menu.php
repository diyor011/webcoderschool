<img src="images/eght.png" alt="" class="eght">
<img src="images/nine.png" alt="" class="nine">
<nav class="nav">
    <ul class="nav__list">
        <? foreach($arrayPages as $link => $data): ?>
        <li class="nav__links"><a href="/?route=<?=$link ?>" class="nav_link"><img src="images/<?=$data['page_img'] ?>" alt=""></a></li>
        <!-- <li class="nav__links"><a href="#" class="nav_link"><img src="images/info.png" alt=""></a></li>
        <li class="nav__links"><a href="#" class="nav_link"><img src="images/course.png" alt=""></a></li>
        <li class="nav__links"><a href="#" class="nav_link"><img src="images/comand.png" alt=""></a></li>
        <li class="nav__links"><a href="#" class="nav_link"><img src="images/location.png" alt=""></a></li> -->
        <? endforeach; ?>
    </ul>
</nav>