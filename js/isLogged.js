if(sessionStorage.getItem('logged') == null || sessionStorage.getItem('logged').localeCompare('true') != 0){
    window.location.replace("auth/logIn.html");
}
