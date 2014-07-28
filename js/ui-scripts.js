var $j = jQuery.noConflict();

$j(function(){

    $j("#sidebar li a").hover(function(){
        $j(this).stop().animate({
            paddingLeft: "20px&"
        }, 400);
    }, function() {
        $j(this).stop().animate({
            paddingLeft: 0
        }, 400);
    });

    $j(".sub-title span").click(function(){
        
        if($j(".category-bar").css("max-height") == "0px"){
            $j(".category-bar").stop().animate({
                "max-height": "500px"

            }, 500);
            
        }

        else{
            $j(".category-bar").stop().animate({
                "max-height": "0px"

            }, 500);
            
        }
    });  
 
});