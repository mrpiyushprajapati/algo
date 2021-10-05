$(".switch").click(function(){
    if($('.inner').attr('id')=='off'){
        $('.inner').attr('id','on');
        $("body").css({
            'background-color':'black',
            'color':'white'
        });
    }

    else if($('.inner').attr('id')=='on'){
        $('.inner').attr('id','off');
        $("body").css({
            'background-color':'white',
            'color':'black'
        });
    }
})