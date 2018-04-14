$(document).ready(function(){
    var detect_lock = setInterval(function(){
        $.get('ajax/detect_lock.php', function(data){
            var json = $.parseJSON(data);
            if(json.type == 'success'){
                window.location.href='locked.php';
            }
        })
    }, 100);
});
