<?php

?>
<header class="av-header">
    <nav class="navbar fixed-top navbar-expand-lg bg-dark">
        <div class="container-fluid" style='max-width: 1140px'>
            <div class="navbar-translate"><a class="navbar-brand" href="#">
                    <noscript><img class="img-responsive" height=40 width=40
                                   src="images/sajid.jpg"/>
                    </noscript>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false"
                        aria-label="Toggle navigation"><span class="sr-only">Toggle navigation</span> <span
                            class="navbar-toggler-icon"></span> <span class="navbar-toggler-icon"></span> <span
                            class="navbar-toggler-icon"></span></button>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item mob-av">
                        <center><a class="navbar-brand" href="#">
                                <noscript><img height=40 width=40
                                               src="images/sajid.jpg"/></noscript>
                                <img class="lazyload" height=40 width=40
                                     src='images/sajid.jpg'
                                     data-src="assets/sajid.jpg"/></a></center>
                                     data-src="assets/sajid.jpg"/></a></center>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-home"
                                                                                  aria-hidden="true"></i>Home</a></li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                                                     id="navbarDropdownMenuLink" data-toggle="dropdown"
                                                     aria-haspopup="true" aria-expanded="false"><i
                                    class="fa fa-list-ul fa-sm" aria-hidden="true"></i> Browse </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"><a class="dropdown-item"
                                                                                               href="#">Anime
                                Filter</a> <a class="dropdown-item" href="#">Recently Updated</a>
                            <a
                                    class="dropdown-item" href="#?random=1">Surprise me! (Random)</a></div>
                    </li>
                    <li class="nav-item mob-av toggle-search"><a target=_blank style="cursor: pointer;"
                                                                 data-toggle="modal" data-target="#mobile-search"
                                                                 class="nav-link"><i class="fa fa-search"
                                                                                     aria-hidden="true"></i> Search
                            Anime</a></li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                                                     id="navbarDropdownMenuLink" data-toggle="dropdown"
                                                     aria-haspopup="true" aria-expanded="false"><i
                                    class="fa fa-question-circle fa-sm" aria-hidden="true"></i> Info </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"><a class="dropdown-item"
                                                                                               href="https://www.reddit.com/r/anime/wiki/faq"
                                                                                               target="_blank">FAQ</a>
                             <a class="dropdown-item" href="https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=&cad=rja&uact=8&ved=2ahUKEwjRmKL2weHsAhUxjuYKHZa8DKsQFjAAegQIGxAC&url=https%3A%2F%2Fwww.google.com%2Fgmail%2F&usg=AOvVaw3mZ_qbD_gQyp_sqkjrwStn" target="_blank">Report
                                Broken Episode</a> <a class="dropdown-item" href="https://discord.com/">Discord</a> <a
                                    class="dropdown-item" href="dmca/#">DMCA</a> <a class="dropdown-item"
                                                                                             href="#">Comment
                                Policy</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#"
                                                     id="navbarDropdownMenuLink" data-toggle="dropdown"
                                                     aria-haspopup="true" aria-expanded="false"><i
                                    class="fa fa-external-link-square fa-sm" aria-hidden="true"></i> Extensions </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"><a class="dropdown-item"
                                                                                               href="https://lite.animevibe.tv/">AnimeVibe
                                Lite</a> </div>
                    </li>
                    <li class="nav-item toggle-search"><a href="index.php" class="nav-link"><i
                                    class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
                </ul>
                <form class="form-inline ml-auto has-white" role="search" method="get" id="searchform"
                      action="https://animevibe.wtf/">
                    <div class="form-group no-border"><input type="text" value="" name="s" id="s" class="form-control"
                                                             placeholder="Search Anime"></div>&nbsp;
                    <button type="submit" class="btn btn-dark btn-just-icon btn-round" id="searchsubmit" value="Search">
                        <i class="material-icons icon-search">search</i></button>
                </form>
            </div>
        </div>
    </nav>
</header>

