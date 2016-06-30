<!DOCTYPE html>
<html>
{include file="head.tpl"}
<body class="bg_block">
    <div class="centered_content_block">
        {include file="header.tpl"}
        <div class="clear"></div>
        <div class="main_block_content_container">
            <span class="subtitle">{$newPage}</span>
            <div class="form text_about">
                {$message}
            </div>
            <a class="start_button" href="{$link}">{$nextPage}</a>
        </div>
    </div>
</body>
</html>