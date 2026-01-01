<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container page-container">
    <div class="row">
        <div class="col-md-9 page-content">
            <h1><?php echo $title; ?>
                <div class="pull-right">
<!--                    <a class="btn btn-social-icon btn-facebook btn-sm" title="Megosztás a Facebookon"><span class="fa fa-facebook"></span></a>
                    <a class="btn btn-social-icon btn-danger btn-sm" title="Megosztás a Google+ -on" ><span class="fa fa-google-plus"></span></a>
                    <a class="btn btn-social-icon btn-twitter btn-sm" title="Megosztás a Twitteren"><span class="fa fa-twitter"></span></a>-->

<!--                    <a class="btn btn-social-icon btn-facebook btn-xs"><span class="fa fa-facebook"></span></a>
                    <a class="btn btn-social-icon btn-danger btn-xs" ><span class="fa fa-google-plus"></span></a>
                    <a class="btn btn-social-icon btn-twitter btn-xs"><span class="fa fa-twitter"></span></a>-->
<!--                    <a class="btn btn-social-icon btn-google"><span class="fa fa-google-plus"></span></a>
                    <a class="btn btn-social-icon btn-soundcloud"><span class="fa fa-soundcloud"></span></a>
                    <a class="btn btn-social-icon btn-vimeo"><span class="fa fa-vimeo"></span></a>-->
                </div>
            </h1>
            <?php echo $content; ?>
            <div class="shareing-panel">
                <div class="pull-left">
                    <h6>MEGOSZTÁS: </h6>
                </div>
                <div class="btn-group" role="group" aria-label="Megosztás">
                    <?php $share_title = $title . ' - FolkFiók'; ?>

                    <!--href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2Fafolkfiok&amp;src=sdkpreparse"-->  

                    <a class="btn btn-social btn-facebook btn-sm" title="Megosztás a Facebookon"  
                       href="<?php printf("https://www.facebook.com/sharer/sharer.php?u=%s&title=%s&amp;src=sdkpreparse", current_url(), $share_title); ?>"                  
                       onclick="javascript:window.open(this.href, 'mywindowtitle', 'left=50,top=50,width=600,height=350,toolbar=0');return false;"              
                       >
                        <span class="fa fa-facebook"></span>Facebook
                    </a>

                    <a class="btn btn-social btn-google btn-sm" title="Megosztás a Google+ -on" 
                       href="<?php printf("https://plus.google.com/share?url=%s", current_url()); ?>"
                       onclick="javascript:window.open(this.href, 'mywindowtitle', 'left=50,top=50,width=600,height=350,toolbar=0');return false;"                                   
                       ><span class="fa fa-google-plus"></span>Google+</a>
                    <a class="btn btn-social btn-twitter btn-sm" title="Megosztás a Twitteren"
                       href="<?php printf("http://twitter.com/home?status=%s+%s", $share_title, current_url()); ?>"
                       onclick="javascript:window.open(this.href, 'mywindowtitle', 'left=50,top=50,width=600,height=350,toolbar=0');return false;"                                    
                       ><span class="fa fa-twitter"></span>Twitter</a>


                </div>
                <div class="fb-like  pull-right" data-href="https://www.facebook.com/Folkfiók-802035689899848" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
                <!--<div class="fb-like  pull-right" data-href="https://www.facebook.com/afolkfiok" data-layout="standard" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>-->
                <!--<div class="fb-like pull-right" data-href="<?php echo current_url() ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>-->
            </div>
        </div>

        <div class="col-md-3 page-right-navigation">

            <div class="link-group right-nav-box" >
                <h2><span>Kapcsolódó oldalak</span></h2>


                <ul class="ul-bullet theme-color-light">

                    <?php
                    foreach ($related_pages as $url => $text) {
                        echo '<li><a href="' . $url . '">' . $text . '</a></li>';
                    }
                    ?>

                </ul>            
            </div>

            <!--             <div class="link-group right-nav-box" >
                            <h2><span>Megosztás</span></h2>
                                   <ul class="media-list contact-list">
                                <li class="media">
                                    <div class="media-left" style="padding-right: 3px;">
                                        <i class="fa fa-facebook media-object" aria-hidden="true"></i>
                                    </div>
                                    <div class="media-body">
                                        +36-30-941-21-02                        
                                    </div>
                                </li>
                                
                                <li class="media">
                                    <div class="media-left">
                                        <a class="btn btn-social-icon btn-facebook btn-xs"><span class="fa fa-facebook" style="color: white; font-size: 13px;"></span></a>
                                        <i class="fa fa-google-plus media-object" aria-hidden="true"></i>
                                    </div>
                                    <div class="media-body">
                                        <a href="http://www.facebook.com/folkfiok">facebook.com/folkfiok</a>                     
                                    </div>
                                </li>
                                
                               <li class="media">
                                    <div class="media-left">
                                        <a class="btn btn-social-icon btn-facebook btn-xs"><span class="fa fa-facebook" style="color: white; font-size: 13px;"></span></a>
                                        <i class="fa fa-twitter media-object" aria-hidden="true"></i>
                                    </div>
                                    <div class="media-body">
                                        <a href="http://www.facebook.com/folkfiok">facebook.com/folkfiok</a>                     
                                    </div>
                                </li>
            
                            </ul>     
                        </div>-->

            <div class="right-nav-box link-group  citation-of-the-week">

                <h2><span>A hét idézete</span></h2>
                <p>&#8222;A jó pap a gondolatokból kifogyhat, de a szavakból sosem.&#8221;</p>
                <div class="theme-text-light text-center">
                    Csatlós Melinda: Istenkeresés <br>
                    (kötet: <a href="<?php echo "konyvek/tortenetek-a-falubol"; ?>" class="normal-link">Történetek a faluból</a>)
                </div>

            </div>

            <!--Facebook page-->
            <div style="margin-bottom: 30px; padding-right: 10px;" >
                <div class="fb-page" data-href="https://www.facebook.com/Folkfi&#xf3;k-802035689899848" data-tabs="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Folkfi&#xf3;k-802035689899848" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Folkfi&#xf3;k-802035689899848">Folkfiók</a></blockquote></div>
            </div>
            <!--            <div class="shareing-panel">
                            Megosztás: 
                            <a class="btn btn-social-icon btn-facebook btn-sm"><span class="fa fa-facebook"></span></a>
                            <a class="btn btn-social-icon btn-danger btn-sm" ><span class="fa fa-google-plus"></span></a>
                            <a class="btn btn-social-icon btn-twitter btn-sm"><span class="fa fa-twitter"></span></a>
            
                        </div>-->

            <nav class="link-group right-nav-box" >
                <h2><span>Kapcsolat</span></h2>
<?php $this->load->view('components/contact-list'); ?> 

            </nav>
        </div>
    </div>
</div>
