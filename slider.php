<div id="photoSlider">
    <p class="smallerHeader">Ostatnio dodane</p>
    <?php 
        $photos=array("bluzkaSzaraLady","greenDressLady","kamizelkaLady","katanaLady","koszulaDlugaLady","marynarkaCzerwonaLady","bluzkaSzara","greenDress","kamizelka","katana","koszulaDluga","marynarkaCzerwona");
        $limit=count($photos);
        $pages=ceil($limit/3);
        for($i=0;$i<$limit;$i++){
    ?>
        <a href="cloths.php?id=<?=$i?>"><img class="sliderImg" src="img/<?=$photos[$i]?>.jpg" alt=""></a>
    <?php }?>
        <br>
        <?php for($i=0;$i<$pages;$i++){ ?>
        <button class="footerdot" onclick="activeSlide(<?=$i?>)"></button>
        <?php }?>
</div>