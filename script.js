let teamNumber = 0;
let matchNumber = 0;
let taxied = false;
let points = [0,0,0,0,0,0,0,0,0,0,0,0];
let score = 0;
let ratings = [0,0,0];

function foul(id){
    let a = document.getElementById("fouls").innerText;
    let b = parseInt(a);
    if(id=="foulsdo"){
        points[6] -= 1;
        b -=1;
        if(points[6]<0){
            points[6]=0;
            b = 0;
        }   
    }else if(id=="foulsup"){
        points[6] +=1;
        b+=1;
    }
    document.getElementById("fouls").innerText = b;
    updateScore();
}
function teamNum(){
    teamNumber = document.getElementById("teamnum").value;
    console.log(teamNumber);
}
function matchNum(){
    matchNumber = document.getElementById("matchnum").value;
}
function strat(){
    ratings[0] = document.getElementById("strat").value;
}
function rating(){
    ratings[1] = document.getElementById("rating").value;
}
function speed(){
    ratings[2] = document.getElementById("speed").value;
}
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
    }else{
        if(auto == "auto"){
            if(upper == "Upper"){
                if(result == "do"){
                    points[1+6] -=1;
                    if(points[1+6] < 0){
                        points[1+6] = 0;
                    }
                }else{
                    points[1+6] +=1;
                }
            }else{
                if(result == "do"){
                    points[2+6] -=1;
                    if(points[2+6] < 0){
                        points[2+6] = 0;
                    }
                }else{
                    points[2+6] +=1;
                }
            }
        }else{
            if(upper == "Upper"){
                if(result == "do"){
                    points[3+6] -=1;
                    if(points[3+6] < 0){
                        points[3+6] = 0;
                    }
                }else{
                    points[3+6] +=1;
                }
            }else{
                if(result == "do"){
                    points[4+6] -=1;
                    if(points[4+6] < 0){
                        points[4+6] = 0;
                    }
                }else{
                    points[4+6] +=1;
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
function climbA(){
    let a = document.getElementById("climb").value;
    if(a=="none"){
        points[11] = 0;
    }else if(a=="low"){
        points[11] = 4;
    }else if(a=="mid"){
        points[11] = 6;
    }else if(a=="high"){
        points[11] = 10;
    }else if(a=="traversal"){
        points[11] = 16;
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
    score -= (points[6]*4);
    document.getElementById("score").innerText = score;
}

function sendData(){
    let data = "";
    data += ""+teamNumber+"a";
    data += ""+matchNumber+"a";
    for(let i = 0; i < points.length; i++){
        data+= ""+ points[i] +"a";
    }
    for(let j = 0; j<ratings.length; j++){
        data+= "" + ratings[j] +"a";
    }
    data+=""+score;
    $.post("collection.php",
    {
      scout: data,
    },function(status){
        alert("Status: " + status);
    });
}
$(document).ready(function(){
    $("#sub").click(function(){
        let data = "";
        data += ""+teamNumber+"a";
        data += ""+matchNumber+"a";
        for(let i = 0; i < points.length; i++){
            data+= ""+ points[i] +"a";
        }
        for(let j = 0; j<ratings.length; j++){
            data+= "" + ratings[j] +"a";
        }
        data+=""+score;
        $.post("collection.php",
        {
        scout: data,
        },
        function(data,status){
            alert("Status: " + status);
        });
    });
});