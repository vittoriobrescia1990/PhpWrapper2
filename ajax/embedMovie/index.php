<div class="modal-dialog" id="export_overlay">
    <div class="modal-content">
        <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3 class="modal-title">Embed code</h3>
        </div>
        <div class="modal-body">
            <textarea id="embed-code-textbox" class="form-control" rows="5" onclick="this.select()" readonly><iframe scrolling="no" allowTransparency="true" allowfullscreen frameborder="0" width="640" height="360" src="https://phpwrapper.herokuapp.com/videos/embedvideo.php?video=<?php if (isset($_GET["video"])) { echo $_GET["video"]; } else { echo "null"; } ?>"></iframe></textarea>
        </div>
        <div class="modal-footer">
            <button class="btn btn-default text-uppercase text-center" type="button" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
