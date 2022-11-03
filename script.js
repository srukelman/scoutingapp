let teamNumber = 0;
let matchNumber = 0;
let taxied = false;
let points = [0,0,0,0,0,0];
let score = 0;


function crement(id){
    let result = id.substring(12, 14);
    let key = id.substring(0,12);
    let elem = document.getElementById(key);
    let sco = id.substring(9,12);
    let auto = id.substring(0,4);
    let upper = id.substring(4,9);
    let a = elem.innerText;
    let b = parseInt(a);
    if(sco == "Sco"){
        if(auto == "auto"){
            if(upper == "Upper"){
                if(result == "do"){
                    points[1] -=1;
                    if(points[1] < 0){
                        points[1] = 0;
                    }
                }else{
                    points[1] +=1;
                }
            }else{
                if(result == "do"){
                    points[2] -=1;
                    if(points[2] < 0){
                        points[2] = 0;
                    }
                }else{
                    points[2] +=1;
                }
            }
        }else{
            if(upper == "Upper"){
                if(result == "do"){
                    points[3] -=1;
                    if(points[3] < 0){
                        points[3] = 0;
                    }
                }else{
                    points[3] +=1;
                }
            }else{
                if(result == "do"){
                    points[4] -=1;
                    if(points[4] < 0){
                        points[4] = 0;
                    }
                }else{
                    points[4] +=1;
                }
            } 
        }
    }
    if(result == "do"){
        b -= 1;
        if(b<0){
            b= 0;
        }
    }else{
        b+= 1;
    }
    elem.innerText = b;
    console.log(b);
    updateScore();   
}
function climb(){
    let a = document.getElementById("climb").value;
    if(a=="none"){
        points[5] = 0;
    }else if(a=="low"){
        points[5] = 4;
    }else if(a=="mid"){
        points[5] = 6;
    }else if(a=="high"){
        points[5] = 10;
    }else if(a=="traversal"){
        points[5] = 16;
    }
    updateScore();
}
function taxi(id){
    if(id.substring(4,5)=="y"){
        points[0] = 2;
    }else{
        points[0] = 0;
    }
    updateScore();
}
function updateScore(){
    score = 0;
    score += points[0];
    score += (points[1] * 4);
    score += (points[2] * 2);
    score += (points[3] * 2);
    score += (points[4]);
    score += (points[5]);
    document.getElementById("score").innerText = score;
}

function submit(){
    teamNumber = parseInt(document.getElementById("teamnum"))
}