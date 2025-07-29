<?php

<table id="user-list"></table>
<script>
$(function(){
    $.get('/getUsers.php', function(data){
        var users = JSON.parse(data);
        for (var i = 0; i < users.length; i++) {
            $('#user-list').append('<tr><td>' + users[i].username + '</td></tr>');
        }
    });
});
</script>
