<section class="site-container">

    <div class="map-content">
        <nav class="nav-map">
            <div class="container">
                <div class="title">
                    GRAPHIC MAP
                    <span class="solid">
                        <img src="{$template}/assets/img/icon/brand-solid.svg" alt="">
                    </span>
                </div>
                <ul class="nav-list">
                    <li>
                        <a href="javascript:void(0);" onclick="window.print()" class="link btn btn-primary">
                            Print
                        </a>
                    </li>
                    <li>
                        <a href="#" class="link btn btn-primary">
                            Download
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="map-graphic">
            {* <a class="link" href="{$template}/assets/img/upload/map.jpg" data-fancybox="image" data-type="image"> *}
            <a class="link" href="{$settingpage.md_sit_addresspic|fileinclude:'real':"site":'link'}" data-fancybox="image" data-type="image">
                <figure class="cover">
                    {* <img src="{$template}/assets/img/upload/map.jpg" alt=""> *}
                    <img src="{$settingpage.md_sit_addresspic|fileinclude:'real':"site":'link'}" alt="">
                </figure>
            </a>
        </div>
    </div>

</section>
