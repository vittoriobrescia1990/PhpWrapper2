<div id="embedmovie_14429795" class='overlaybox small embedmoviebox'>
    <a href="javascript:;" class="close_button" onclick="jQuery.unblockUI();"><span>Close</span></a>
    <div class='title'>Embed this Video on a Webpage or Blog</div>
    <div class='inputRow' style="padding-bottom:25px;">
        <div class='inputTitle'>Copy this Embed Code</div>
        <div class='inputData'><textarea  title="Click to highlight" id="movie_embed" onclick="this.focus(); this.select();">&lt;iframe scrolling=&quot;no&quot; allowTransparency=&quot;true&quot; allowfullscreen frameborder=&quot;0&quot; width=&quot;640&quot; height=&quot;360&quot; src=&quot;https://phpwrapper.herokuapp.com/videos/embed.php?video=<?php if (isset($_GET["video"])) { echo $_GET["video"]; } else { echo "null"; } ?>&quot; &gt;&lt;/iframe&gt;
</textarea></div>
    </div>
    <hr>
    <div id="altembedmovie_14429795" class='inputRow' style="padding-top:25px;">
        <div class='inputTitle'>Alternate Embed Code <span style="font-size:12px">(use in case above code does not work)</span></div>
        <div class='inputData'><textarea title="Click to highlight" id="movie_embed_old" onclick="this.focus(); this.select();">&lt;object width=&quot;400&quot; height=&quot;258&quot;&gt;&lt;param name=&quot;movie&quot; value=&quot;https://josephcrosmanplays532.github.io/animation/477/player.swf?movieId=<?php if (isset($_GET["video"])) { echo $_GET["video"]; } else { echo "null"; } ?>&autostart=0&quot;&gt;&lt;/param&gt;&lt;param name=&quot;bgcolor&quot; value=&quot;#000000&quot;&gt;&lt;param name=&quot;allowFullScreen&quot; value=&quot;true&quot;&gt;&lt;/param&gt;&lt;param name=&quot;allowscriptaccess&quot; value=&quot;always&quot;&gt;&lt;/param&gt;&lt;embed src=&quot;https://josephcrosmanplays532.github.io/animation/477/player.swf?movieId=<?php if (isset($_GET["video"])) { echo $_GET["video"]; } else { echo "null"; } ?>&autostart=0&quot; type=&quot;application/x-shockwave-flash&quot; width=&quot;400&quot; height=&quot;258&quot; bgcolor=&quot;#000000&quot; allowscriptaccess=&quot;always&quot; allowfullscreen=&quot;true&quot;&gt;&lt;/embed&gt;&lt;/object&gt;</textarea></div>
    </div>
</div>
<script type="text/javascript">
    dataLayer.push({
        'event': 'ga-pageview-t1',
        'path': '/pageTracker/movieEmbedOverlay'
    });
</script>
