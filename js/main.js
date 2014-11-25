$(document).ready(function(){
    // dynamically load content from content.inc to .main section
    // $('.dynamic').load('content/content.inc');
    
    // add event handler to "more" link
    $('.more').click(function(eventobject){
        eventobject.preventDefault(); //prevents the default result (here the href)
        $('.dynamic').load('content/content.html');
    });
    // remove link once clicked
    $(this).remove();
});