<script>
    $("#nav-Behandelingen").click(function() {
        $('html, body').animate({
            scrollTop: $("#behandelingen").offset().top - 120
        }, 500);
    });
    $("#label").click(function(){
        $("#test").hide();
    });
    $("#show").click(function(){
        $("#test").show();
    });
    
    
    $('.slidedown').click(function(){
        var id = '#' + this.id + '-collapse';
        var collapse = $(id).css('display');
        if(collapse == 'block'){
            $(id).slideUp();
        } else {
            $(id).slideDown();
        }
    });
    
});
</script>