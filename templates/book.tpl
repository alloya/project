<!DOCTYPE html>
<html>
{include file="head.tpl"}
<body class="bg_block">
    <div class="centered_content_block">
        {include file="header.tpl"}
        <div class="clear"></div>
            <div class="book-content">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">{$title}
                        <small>{$author}</small>
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img class="img-responsive" id="book-image" src="{$image}" alt="{$title}">
                </div>
                <div class="col-md-6">
                    <h3>Аннотация</h3>
                    <p class="annotation">{$descr}
                    <h3>Дополнительно</h3>
                    <ul>
                        <li>Жанр: {$genre}</li>
                        <li><a href="{$link}"</a>Fantlab.ru</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>