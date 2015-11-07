<script>
    $("#formu").click(function() {
        $('html, body').animate({
            scrollTop: $("#behandelingen").offset().top - 120
        }, 500);
    });
    $("#formu").click(function(){
        $("#group").hide();
    });
    $("#show").click(function(){
        $("#group").show();
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