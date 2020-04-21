<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <form method="post" action="/">
                    <button class="btn btn-success" type="submit">На главную</button>
                </form>
            </li>
            <li class="nav-item active">
                &emsp;
            </li>
            <li class="nav-item active">
                <form action="/wether/wether" method="post">
                    <button class="btn btn-success" type="submit">Погода</button>
                </form>
            </li>
            <li class="nav-item active">
                &emsp;
            </li>
            <li class="nav-item active">
                <form action="/support/send" method="post">
                    <button class="btn btn-success" type="submit">Поддержка</button>
                </form>
            </li>
            <li class="nav-item active">
                &emsp;
            </li>
            <li class="nav-item active">
                <form action="/account/login" method="post">
                    <input type="hidden" name="logout" value="1">
                    <button class="btn btn-danger" type="submit">ВЫХОД</button>
                </form>
            </li>
            <li class="nav-item active">
                &emsp;
            </li>
        </ul>
</nav>
