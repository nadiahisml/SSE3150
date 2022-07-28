function showChangePassword(){  
    $.ajax({
        url:"./changePassword.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function showSuspendUsers(){  
    $.ajax({
        url:"./suspendUsers.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}


function showAddAdmin(){  
    $.ajax({
        url:"./addAdmin.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function showActivityLogs(){  
    $.ajax({
        url:"./activityLogs.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function showRegNewSeminar(){
    $.ajax({
        url:"./regNewSeminar.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function showRegParticipants(){
    $.ajax({
        url:"./regParticipants.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

//delete admin
function adminDelete(id){
    $.ajax({
        url:"./controller/deleteAdmin.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Successfully deleted');
            $('form').trigger('reset');
            showAddAdmin();
        }
    });
}

//suspend user
function userSuspend(id){
    $.ajax({
        url:"./controller/suspendUser.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Successfully suspended');
            $('form').trigger('reset');
            showSuspendUsers();
        }
    });
}
