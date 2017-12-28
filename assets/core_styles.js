document.querySelector('body').style.backgroundColor = "#ecf0f1";
document.querySelector('body, p, h1, h2, h3, li, span').style.color = "#373D3F";

var ul = document.querySelector('ul');
ul.style.listStyleType = "none";
ul.style.padding = "0";


var aList = document.querySelectorAll('a');
for(let i = 0; i < aList.length; i++){
    aList[i].style.textDecoration = "none";
    aList[i].style.color = "#2980b9";
    // aList[i].style.color = "#2980b9";
}

var aList = document.querySelectorAll('td > a > h3');
for(let i = 0; i < aList.length; i++){
    aList[i].style.textDecoration = "none";
    aList[i].style.color = "white";
}

var btnList = document.querySelectorAll('button,input, select');
for(let i = 0; i < btnList.length; i++){
    btnList[i].style.padding = "5px";
}

var btnList = document.querySelectorAll('button, select');
for(let i = 0; i < btnList.length; i++){
    btnList[i].style.backgroundColor = "#16a085";
    btnList[i].style.color = "white";
    btnList[i].style.border = "0";
}


var liList = document.querySelectorAll('li a');
for(let i = 0; i < liList.length; i++){
    liList[i].style.textDecoration = "none";
    liList[i].style.padding = "10px";    
    liList[i].style.display = "block";    
    liList[i].style.borderBottom = "1px solid #27ae60";    
}

document.querySelector("body > table > tbody > tr:nth-child(2) > td:nth-child(1) > ul > li:nth-child(1) > a").style.borderTop = "1px solid #27ae60";


//Table
document.querySelector('table').style.backgroundColor = "white";


//other tables
var tablesList= document.querySelectorAll('table');

for(let i = 1; i < tablesList.length; i++){
    tableSec = tablesList[i];

    tableSec.style.borderCollapse = "collapse";
    tableSec.style.width = "70%";
    tableSec.style.textAlign = "center";
    
    tdThList = tableSec.querySelectorAll("td, th");

    for(let i = 0; i < tdThList.length; i++){
        tdThList[i].style.border = "1px solid #ddd";
        tdThList[i].style.padding = "8px";    
    }

    trsEvenList = tableSec.querySelectorAll("tr:nth-child(even)");
    for(let i = 0; i < trsEvenList.length; i++){
        trsEvenList[i].style.backgroundColor= "#f2f2f2";
    }
}
    

document.querySelector('body > table > tbody > tr:nth-child(2) > td:nth-child(1)').style.borderRight = "1px solid #f2f2f2";
document.querySelector('body > table > tbody > tr:nth-child(1)').style.backgroundColor = "#16a085";;
document.querySelector('body > table > tbody > tr:nth-child(1)').style.color = "#ecf0f1";


var elem = document.getElementById('suggest');
if(elem){
    elem.style.backgroundColor ="#27ae60";
    elem.style.color ="white";

}

elem = document.getElementById('yesbtn');
if(elem){
    elem.style.color ="white";
}

elem = document.getElementById('errorMsg');
if(elem){
    elem.style.backgroundColor ="#F2DEDE";
    elem.style.padding ="10px";
}




