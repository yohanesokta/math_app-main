let Score = 0;

function Answer(SelfSoalID,selfID,nextID,score){
    if (score == 1){
        document.getElementById(selfID).classList.add('sel-green');
    }else{
        document.getElementById(selfID).classList.add('sel-red');
    }
    setTimeout(()=>{
        if (score == 1){
            Score += 50;
        }
        document.getElementById(SelfSoalID).classList.add('hidden');
        document.getElementById(nextID).classList.remove('hidden');
        document.getElementById('scoreNum').innerHTML = Score;
    },1000)
}
