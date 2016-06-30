$(document).ready(function()
{  
    show_question(1);  
    show_answers(1); 
}); 

function show_question(questionID)
{
    $.ajax({  
        type: "GET", 
        dataType: 'json',
        contentType: 'application/json; charset=utf-8', 
        url: "../include/get_question.php?questionID="+questionID,  
        data: questionID,  
        success: function(response)
        {   
            $("#question").html(response);
        }  
    });
}

function lableClick(nextQ, nextB)
{
    if (nextB == null)
    {
        show_question(nextQ);  
        show_answers(nextQ);
    }
    else window.location.href = "book.php"+"?bookID="+nextB;
}

function showBook(nextB)
{
    $.ajax(
    {  
        type: "GET", 
        dataType: 'json',
        contentType: 'application/json; charset=utf-8', 
        url: "get_book.php?bookID="+nextB,  
        success: function(response)
        {   
            window.location.href = "book.php"+"?bookID="+nextB;
        }  
    });
}

function show_answers(questionID)
{
    $.ajax(
    {
        type: "GET",
        dataType: 'json',
        contentType: 'application/json; charset=utf-8',
        url: "../include/get_answer.php?questionID="+questionID, 
        data: questionID,
        cache: false,
        success: function(response)
        {
            $('#answers').empty();
            $.each(response, function (key, item) 
            {
                console.log(item.a_text, item.next_q, item.next_b);
                var template = $('#item-template').clone().removeAttr('id');
                $('.answer-text', template).text(item.a_text);
                $('input[name=q_answer]',template).attr('data-next-q',item.next_q).attr('data-next-b',item.next_b);
                $('#answers').append(template);
                
            });

            $('label.btn').on('click',function () 
            {
                var nextQ = $(this).find('input:radio').attr('data-next-q');
                var nextB = $(this).find('input:radio').attr('data-next-b');
                lableClick(nextQ, nextB);
            }); 
        }
    });
}