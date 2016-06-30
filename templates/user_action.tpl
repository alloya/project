<!DOCTYPE html>
<html>
{include file="head.tpl"}
<body class="bg-block">
    <div class="centered-content-block">
        {include file="header.tpl"}
        <div class="clear"></div>
        <div class="main-block-content-container">
            <span class="subtitle">{$newPage}</span>
            <div class="form text-about">
                {$message}
            </div>
            <a class="start-button" href="{$link}">{$nextPage}</a>
        </div>
    </div>
</body>
</html>