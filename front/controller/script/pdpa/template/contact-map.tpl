<section class="site-container">

    <div class="map-content">
        <nav class="nav-map">
            <div class="container">
                <div class="title">
                    GOOGLE MAP
                    {* {$contactinfo.contact|print_pre} *}
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
                        <a href="https://www.google.com/maps?ll=13.834385,100.602746&z=16&t=m&hl=th&gl=TH&mapclient=embed&cid=14962876964381116249" class="link btn btn-primary">
                            Get Direction
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="iframe-container">
            <iframe src="https://maps.google.com/maps?q={$contactinfo.contact.glati},{$contactinfo.contact.glongti}&hl=es;z=20&amp;output=embed"" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>

</section>