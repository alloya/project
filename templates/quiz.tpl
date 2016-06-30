<!DOCTYPE html>
<html>
{include file="head.tpl"}
<body class="bg-block">
    <div class="centered-content-block">
        {include file="header.tpl"}
        <div class="clear"></div>
        <div class="main-block-content-container">
            <span class="subtitle">You almost there...</span>
            <div class="container-fluid bg-info">
                <div class="modal-dialog" id="quiz-body">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3><div id="question"></div></h3>
                    </div>
                    <div class="modal-body" id="answers"></div>
                </div>
                </div>
            </div>   
        </div>
        <label id="item-template" class="element-animation3 btn btn-lg btn-primary btn-block" name="answer-row">
            <span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span>
            <input type="radio" name="q_answer">
            <span class='answer-text'></span>
        </label>
    </div>
    <script src="../js/jquery-2.2.4.js"></script>
    <script language="JavaScript" type="text/javascript" src="../js/quiz.js"></script>
</body>
</html>