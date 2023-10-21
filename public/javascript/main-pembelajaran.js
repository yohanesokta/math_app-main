function getOn(arg,args){
    document.getElementById(arg).style.display = args
};

function goto(hideID,selfID){   
    getOn(hideID,'none');
    getOn(selfID,'flex');
};
