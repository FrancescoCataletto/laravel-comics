<header>
    <!-- container principale header -->
    <div id="header-box" class="container">
        <!-- div del logo -->
        <div>
            <img src="../img/dc-logo.png" alt="Logo piccolo">
        </div>
        <!-- div del menu -->
        <div>
            <ul>
            @foreach($link as $link)
                <li>
                    <a href="">{{$link['link']}}</a>
                </li>
            @endforeach
            </ul>
        </div>
    </div>
</header>