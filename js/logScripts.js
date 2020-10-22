


// Javascript to toggle password visibilty 
function toggle_vis() {
    var x = document.getElementById("pw_Vis");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
}

// Reset form  
function reset() {
    // admin_login.php
    document.getElementById("login-form").reset();
    // login_change.php
    document.getElementById("frmChange").reset();
} 

/* 
    Javascript for password validation on credential change form
*/
function validatePassword() {
    var currentPassword,newPassword,confirmPassword,output = true, msg="";
    
    newPassword = document.frmChange.newPassword;
    confirmPassword = document.frmChange.confirmPassword;

        if(newPassword.value != confirmPassword.value) {
            newPassword.value="";
            confirmPassword.value="";
            newPassword.focus();
            msg = "Passwords don't match";
            output = false;
        } 
        else {
            msg = "Passwords match";
        }
        return output;
    }