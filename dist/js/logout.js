// ============================================================== 
// Logout button on topbar
// ==============================================================  
function logout (){
    sessionStorage.clear();
    top.location.href = "login.html";
}
