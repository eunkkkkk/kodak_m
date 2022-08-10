$(document).ready(function(){
    $('#keyword .list li').click(function(){
        $('#keyword .list').addClass('act');
        $(this).addClass('on').siblings().removeClass('on')
    })
    // var count = 0;
    // setInterval(function(){        
    //     count %= $('#keyword .list li').length;
    //     $('#keyword .list li').eq(count).click(); 
    //     count++;
    // }, 2000)
    
    $(window).scroll(function(){
        if( $(window).scrollTop() > 0 ){
         $('body').addClass('scroll')
        }else{
         $('body').removeClass('scroll')
        }
    })
})
