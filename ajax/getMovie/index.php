0{}<meta name="medium" content="video" />
<div style="position:relative">
    <div id="playerdiv_preview" align="center" style="width:550px;height:384px;">
        You can't use PHPWrapper because Flash might be disabled. <a href="https://josephcrosmanplays532.github.io/go/getflash/">Enable Flash</a>.
    </div>
    </div>
<script type="text/javascript">
var playerApiReady = false;
function playerLoaded() {
    playerApiReady = true;
    jQuery(document).trigger('playerApiReady');
};
jQuery('#playerdiv_preview').flash({
    id: "Player",
    swf: "https://phpwrapper.herokuapp.com/goapi/asset/animation/player.swf",
    height: 384,
    width: 550,
    bgcolor: "#000000",
    scale: "exactfit",
    allowScriptAccess: "always",
    allowFullScreen: "true",
    wmode: "opaque",

    hasVersion: "10.3",

    flashvars: {"movieOwner":"eMessages","movieOwnerId":"05zjsrX_eOAs","movieId":"<?php if (isset($_GET["video"])) { echo $_GET["video"]; } else { echo "null"; } ?>","movieLid":"0","movieTitle":"Test","movieDesc":"This+video+is+ment+for+testing+out+this+video+player","userId":"0nCf5R75Tgj8","username":"holawo5342","uemail":"holawo5342@flmcat.com","ut":30,"numContact":"0","apiserver":"\/","duration":"29","playcount":1,"thumbnailURL":"https:\/\/s3.amazonaws.com\/fs.goanimate.com\/files\/thumbnails\/movie\/1237\/394237\/704149L.jpg","copyable":"0","isPublished":"0","ctc":"go","tlang":"en_US","is_private_shared":"1","autostart":"1","appCode":"go","is_slideshow":"0","originalId":"0dHCdO8oyyts","is_emessage":"0","storePath":"https:\/\/phpwrapper.herokuapp.com\/goapi\/asset\/themes\/<store>","clientThemePath":"https:\/\/phpwrapper.herokuapp.com\/goapi\/asset\/static\/<client_theme>","animationPath":"https:\/\/phpwrapper.herokuapp.com\/goapi\/asset\/animation\/","isEmbed":"0","refuser":<?php if (isset($_GET["refuser"])) { echo $_GET["refuser"]; } else { echo null; } ?>,"utm_source":null,"uid":<?php if (isset($_GET["utm_source"])) { echo $_GET["utm_source"]; } else { echo null; } ?>,"isTemplate":"1","showButtons":"1","chain_mids":"","averageRating":"0","ratingCount":"0","fb_app_url":"\/","ad":0,"endStyle":0,"isWide":0,"pwm":1,"s3base":"https:\/\/s3.amazonaws.com\/fs.goanimate.com\/,https:\/\/assets.vyond.com\/","initcb":"playerLoaded"}});

jQuery('#player-overlay-dismiss').click(function() {
    jQuery('#player-overlay').hide();
});
</script>
