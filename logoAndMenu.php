        <div id="logo">
        <a href="index.php">Jedwabiem i kaszmirem</a>
       </div>
       <div class="sideMenu">
            <div class="sideMenuItem" id="loginIcon"><a href="#loginFormDiv" id="loginLink" onclick="annimateLogin()"><i class="icon-user"></i> Zaloguj się</a></div>
            <div class="sideMenuItem"><a href="favourite.php"><i class="icon-star"></i>Ulubione</a></div>
            <div class="bracketLink"><a href="bracket1.php"><i class="icon-shopping-bag"></i> Koszyk</a></div>
            <?php
                require "bracket.php";
            ?>
        </div>
        <br>
       <ul class="menu">
            <li class="menuItem">
                <a href="about.php">O sklepie</a>
            </li>
            <li class="menuItem">
                <a href="latest.php"> Najnowsze</a>
            </li>
            <li class="menuItem">
                <a href="sale.php">Wyprzedaż</a>
            </li>
            <li class="menuItem">
                <a href="her.php">Ona</a>
            </li>
            <li class="menuItem">
                <a href="him.php">On</a>
            </li>
            <li class="menuItem">
                <a href="contact.php">Kontakt</a>
            </li>
       </ul>
       <br>
       <form class="searchForm" action="search.php" method="get">
            <button class="searchBtn"><i class="icon-search-1"></i></button>
            <input type="text" name="searchInput" class="searchInput" placeholder="Szukaj ubrań" required>
       </form>
       