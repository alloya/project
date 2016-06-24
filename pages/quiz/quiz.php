<?php
session_start();
header("Content-type: text/html; charset=utf8");

?>
<html>
    <script src="../../js/jquery-2.2.4.js"></script>
<script>

function show_question(questionID)
    {
        $.ajax({  
                type: "GET", 
                dataType: 'json',
                contentType: 'application/json; charset=utf-8', 
                url: "getQuestion.php?questionID="+questionID,  
                data: questionID,  
                success: function(msg){  
                    //console.log(msg);  
                     $("#question").html(msg);
               }  
            });
    }
    $(document).ready(function(){  
  
        
        show_question(1);  
        show_answers(1);  
        var loading = $('#loadbar').hide();
         $(document)
        .ajaxStart(function () {
            loading.show();
            }).ajaxStop(function () {
            loading.hide();
            });
    
    }); 

    function lableClick(nextQ, nextB){
        console.log(nextQ);
        $('#loadbar').show();
        $('#quiz').fadeOut();
        setTimeout(function(){   
            $('#quiz').show();
            $('#loadbar').fadeOut();
            if (nextB==null)
            {
                show_question(nextQ);  
                show_answers(nextQ);
            }
          //else showBook(nextB);
          else window.location.href = "../book/book.php"+"?bookID="+nextB;
        }, 1000);
    }
    
    function showBook(nextB)
    {
        $.ajax({  
                type: "GET", 
                dataType: 'json',
                contentType: 'application/json; charset=utf-8', 
                url: "getBook.php?bookID="+nextB,  
                success: function(msg){  
                    console.log(msg);  
                    window.location.href = "../book/book.php"+"?bookID="+nextB;
               }  
            });
    }
    
    function show_answers(questionID)
    {
        $.ajax({
            type: "GET",
            dataType: 'json',
            contentType: 'application/json; charset=utf-8',
            url: "getAnswers.php?questionID="+questionID, 
            data: questionID,
            cache: false,
            success: function(msg){
                console.log(msg);  
                console.log(JSON.stringify(msg));
                var answerArray = [];
                //console.log(response[0]['a_text']);
                $("#answers").empty();
                for(var i=0; i<(msg.length); i++)
                {
                    answerArray =  answerArray + "<label class=\"element-animation3 btn btn-lg btn-primary btn-block\" onclick=\"lableClick("+msg[i]['next_q']+","+msg[i]['next_b']+");\"><span class=\"btn-label\"><i class=\"glyphicon glyphicon-chevron-right\"></i></span> <input type=\"radio\" name=\"q_answer\" data-next-q="+msg[i]['next_q']+">"+msg[i]['a_text']+"</label>";
                    //console.log(answerArray);
                }

                $("#answers").append(answerArray);
            }
        });
    }
   </script>  
<?php
require_once "quiz_logged.html";
?>
