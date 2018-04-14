$(document).ready(function(){

    setInterval(function(){
        $.get('ajax/start_timer.php');
    }, 1000);

    var notify = $('#notification')
    var alerte = $('#alert_notify');

    $('#login-form').submit(function(e){
        e.preventDefault();
        $.ajax({
            url: 'ajax/login.php',
            type: 'POST',
            data: $(this).serialize(),
        })
        .done(function(data){
            var json = $.parseJSON(data);
            if(json.type == 'success'){
                $('#alert_notify').show();
                $('#alert_notify').addClass('alert-success alert');
                $('#alert_notify').html(json.error);
                setTimeout(function(){
                    $('#alert').fadeOut(300);
                    $('#alert').removeClass('alert-success alert');
                    window.location.href='index.php';
                }, 3500);
            }
            if(json.type == 'danger'){
                $('#alert_notify').show();
                $('#alert_notify').addClass('alert-danger alert');
                $('#alert_notify').html(json.error);
                setTimeout(function(){
                    $('#alert_notify').fadeOut(500);
                    $('#alert_notify').removeClass('alert-danger alert');
                }, 2500);
            }
            if(json.type == 'maintenance'){
                $('#alert_notify').show();
                $('#alert_notify').addClass('alert-danger alert');
                $('#alert_notify').html(json.error);
                $('input').val('');
            }
        })
    });

    $('#unlock').submit(function(e){
        e.preventDefault();
        $.ajax({
            url: 'ajax/unlock.php',
            type: 'POST',
            data: $(this).serialize(),
        })
        .done(function(data) {
            var json = $.parseJSON(data);
            if(json.error == 'danger'){
                $('#container__lock').removeClass('animated bounceIn');
                $('#container__lock').addClass('animated wobble');
                setTimeout(function(){
                    $('#container__lock').removeClass('animated wobble');
                }, 1000);
            }else{
                $('#container__lock').addClass('animated bounceOut');
                setTimeout(function(){
                    window.location.href=json.page;
                }, 600);
            }
        })
    });

    $('#btn__lock').click(function(){
        $.get('ajax/lock.php');
    });

    $(document).keyup(function(touche){
        var appui = touche.which || touche.keyCode;
        if(appui == 45){
            $.get('ajax/lock.php');
        }
    });

    $('#user-register').submit(function(e){
        e.preventDefault();
        $.ajax({
            url: 'ajax/add_user.php',
            type: 'POST',
            data: $(this).serialize(),
        })
        .done(function(data){
            console.log(data);
            var json = $.parseJSON(data);
            if(json.type == 'danger'){
                $('#alert_notify').fadeIn(500);
                $('#alert_notify').addClass('alert-danger');
                $('#alert_notify').html('<strong>Attention : </strong>' + json.error);
                setTimeout(function(){
                    $('#alert_notify').fadeOut(500);
                    $('#alert_notify').removeClass('alert-danger');
                }, 3000);
            }
            if(json.type == 'success'){
                $('#alert_notify').fadeIn(500);
                $('#alert_notify').addClass('alert-success');
                $('#alert_notify').html('<strong>Success : </strong>' + json.error);
                $('input').val('');
                setTimeout(function(){
                    $('#alert_notify').fadeOut(500);
                    $('#alert_notify').removeClass('alert-success');
                }, 3000);

                $('#list_user').append(
                    "<tr>" +
                        '<td class="text-center">' + json.id + '</td>' +
                        '<td>' + json.nom + ' ' + json.prenom + '</td>' +
                        '<td>' + json.email + '</td>' +
                        '<td><b>' + json.company + '</b></td>' +
                        '<td class="hidden-xs">' +
                            '<span class="label label-primary">' + json.role + '</span>' +
                        '</td>' +
                        '<td class="text-center">' +
                            '<div class="btn-group">' +
                                '<button onclick="window.location.href=\'?edit=<?= $data__user[\'id_membre\'] ?>\'" class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Modifier"><i class="fa fa-pencil"></i></button>' +
                                '<button class="btn btn-xs btn-default" type="button" data-toggle="tooltip"data-original-title="Supprimer"><i class="fa fa-times"></i></button>\n'                                          + '</div>' +
                            '</td>' +
                        '</tr>' +
                    "</tr>"
                );
            }
        })
    });

    $('#clear__input').click(function(){
        $('input').val('');
    });

    setInterval(function(){
        $.get('ajax/detect_disabled.php', function(data){
            var json = $.parseJSON(data);
            if(json.type == "success"){
                window.location.href='login.php';
            }
        });
    }, 100);

    $('#disabled_maintenance').click(function(){
        $.get('ajax/disabled_maintenance.php');
        $('#alert_notify').fadeIn();
        $('#alert_notify').addClass('alert-info');
        $('#alert_notify').html('La maintenance a été desactiver.');
        $('#disabled_maintenance').hide();
        $('#maintenance_on').fadeOut(400);
        $('#disabled_maintenance').hide();
        $('#activate_maintenance').show();
    });

    $('#activate_maintenance').click(function(){
        $.get('ajax/activate_maintenance.php', function(data){
            var json = $.parseJSON(data);
            if(json.type == 'danger'){
                alerte.show();
                alerte.addClass('alert-danger');
                alerte.html(json.error);
                setTimeout(function(){
                    alerte.fadeOut(500);
                    alerte.removeClass('alert-danger');
                }, 3000);
            } else {
                alerte.show();
                alerte.addClass('alert-info');
                alerte.html('La maintenance a été activer, et tous les utilisateurs vont être deconnecter.<br><br>Durée : <b>'+ json.estimation +'</b><br>Raison : <b>'+ json.reason +'</b>');
                $('#disabled_maintenance').show();
                $('#activate_maintenance').hide();
            }
        });
    });

    $('#update_information_maintenance').submit(function(e){
         e.preventDefault();
         $.ajax({
             url: 'ajax/update_information_maintenance.php',
             type: 'POST',
             data: $(this).serialize(),
         })
         .done(function(data){
             var json = $.parseJSON(data);
             $('#alert_notify').show();
             $('#alert_notify').addClass('alert-'+json.type);
             $('#alert_notify').html(json.error);
         });
    });

    $('#purge_information_maintenance').click(function(){
        $.ajax('ajax/purge_information_maintenance.php');
        $('input[name=maintenance_estimation]').val('');
        $('input[name=maintenance_reason]').val('');
    });

    $('#add_task').submit(function(e){
        e.preventDefault();
        $.ajax({
            url: 'ajax/add_tasks.php',
            type: 'POST',
            data: $(this).serialize(),
        })
        .done(function(data){
            var json = $.parseJSON(data);
            if(json.type == 'success'){
                $('input[name=tasks]').val('');
                $('#list_tasks').append('<tr>' +
                        '<td class="js-task-content font-w600">' + json.content + '</td>' +
                        '<td style="width: 100px;">' +
                            '<button onclick="window.location.href="view_project.php?view='+ json.slug +'&submit='+ json.id +'" class="js-task-remove btn btn-link text-danger" type="button">' +
                            '<i class="fa fa-check"></i>' +
                        '</button>' +
                        '</td>' +
                 '</tr>');
            }
        })
    })

    $('#delete_tasks').click(function(){
        // var id = $(this).attr('data_id');
        // console.log(id);
        console.log('click');
    });

    $('#description_project').submit(function(e){
        e.preventDefault();
        $.ajax({
            url: 'ajax/update_description.php',
            type: 'POST',
            data: $(this).serialize(),
        })
        .done(function(data){
            var json = $.parseJSON(data);
            $('#update_new_description').html('');
            $('#update_new_description').html(json.content);
        });
    });

    var check_notification = showNotificate(notify)
});

// Function

function showNotificate(notify) {
    return setInterval(function () {
        $.get('ajax/check_notification.php', function (data) {
            var json = $.parseJSON(data);
            if (json.type == 'success') {
                notify.show();
                notify.addClass('success animated bounceInUp');
                notify.html(json.content);
                setTimeout(function () {
                    notify.fadeOut(400);
                    $.get('ajax/delete_notification.php');
                    // clearInterval(check_notification);
                }, 4000);
            }
        });
        console.log('check');
    }, 2000);
}


