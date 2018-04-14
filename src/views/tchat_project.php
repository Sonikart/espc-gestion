<div class="js-chat-container" data-chat-mode="popup" data-chat-height="360">
    <!-- Chat Window -->
    <div class="block block-bordered remove-margin-b" id="chat-block">
        <div class="block-header bg-gray-lighter">
            <ul class="block-options">
                <li>
                    <button type="button" onclick="App.blocks('#chat-block', 'content_toggle');">
                        <i class="fa fa-arrows-v"></i>
                    </button>
                </li>
            </ul>
            <h3 class="block-title">
                <span class="push-5-l">Administration</span>
            </h3>
        </div>
        <div id="message" class="js-chat-talk overflow-y-auto block-content block-content-full">
            <!-- Messages -->
<!--            <div class="block block-rounded block-transparent push-15 push-50-l">-->
<!--                <div style="background-color: #74b9ff;" class="block-content block-content-full block-content-mini bg-gray-lighter">Hi there!</div>-->
<!--            </div>-->
            <div id_msg="" class="block block-rounded block-transparent push-15 push-50-r">
                <li style="background-color: #dfe6e9; width:80%; float: left;" class="block-content block-content-full block-content-mini bg-gray-light">hii</li>
                <li style="background-color: #74b9ff; width:80%; float: right;" class="block-content block-content-full block-content-mini bg-gray-lighter">hii</li>
            </div>
            <!-- END Messages -->
        </div>
        <div class="js-chat-form block-content block-content-full block-content-mini border-t">
            <form id="new_message_tchat">
                <input name="content-message" class="js-chat-input form-control" type="text" placeholder="Indiquez quelque chose...">
                <input name="slug_project" class="js-chat-input form-control" type="hidden" value="<?= $_GET['view']; ?>" placeholder="Indiquez quelque chose...">
            </form>
        </div>
    </div>
    <!-- END Chat Window -->
</div>
