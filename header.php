<nav id="menu">
    <ul>
        <li><img id="icone"src="/_img/gift.png" alt="index.php"></li>
        <li><a href="index.php">Home</a></li>
        <li><a href="listas.php">Minhas listas</a></li>
        <li><a href="#">Listas compartilhadas</a></li>
        <li><a href="#">Eventos</a></li>
        <li><a href="#">Favoritos</a></li>
        <li><a href="#">Contatos</a></li>
        <li id="menu-right"><a href="#">Entrar</a></li>
    </ul>
</nav>

<!--Scripts-->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

<script>
    //Função navbar fixo
    $(function () {
        var nav = $('#menu');
        $(window).scroll(function () {
            if ($(this).scrollTop() > 150) {
                nav.addClass("menu-fixo");
                $('body').css('padding-top', 70);
            } else {
                nav.removeClass("menu-fixo");
                $('body').css('padding-top', 0);
            }
        });
    });
</script>
