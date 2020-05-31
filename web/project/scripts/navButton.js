function myFunction(x) {
    x.classList.toggle("change");
    if(document.getElementById('topNav').className == "hide"){
        document.getElementById('topNav').className = "show";
        document.getElementById('navBar').className = "show";
    }
    else{
        document.getElementById('topNav').className = "hide";
        document.getElementById('navBar').className = "hide";
    }
  }