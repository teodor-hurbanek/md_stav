<header class="shadow">
    <nav class="containerCustom">
        <a href="/" class="logo">
            <div>
                <img src="/img/logo/logo.png" alt="M&D STAV Logo">
            </div>
            <span class="header-pc h4 fw-bold">Realizácie stavieb</span>
        </a>
        <ul class="header-pc fs-5 fw-bold">
            <li><a href="{{ url('/') }}">Domov</a></li>
            <li><a href="{{ url('/services') }}">Služby</a></li>
            <li><a href="{{ url('/contact') }}">Kontakt</a></li>
        </ul>

        <a onclick="openPostHeader()" class="header-mobile">
            <img class="menu-icons filter-grey" src="/img/svg/menu-burger.svg" alt="Menu icon">
        </a>
    </nav>
</header>

<div id="postHeader" class="post-header" onclick="event.stopPropagation();">
    <div onclick="closePostHeader()">
        <img class="menu-icons filter-grey" src="/img/svg/cross.svg" alt="Close icon">
    </div>

    <ul class="fs-5 fw-bold">
        <li><a href="{{ url('/') }}">Domov</a></li>
        <li><a href="{{ url('/services') }}">Služby</a></li>
        <li><a href="{{ url('/contact') }}">Kontakt</a></li>
    </ul>
</div>