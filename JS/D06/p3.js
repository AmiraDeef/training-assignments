let count = 0;

setInterval(function(){
    count++;
    document.title = count;
   
    document.getElementById('countDiv').innerHTML += `<div style='border: 2px solid red; display: block; margin: 5px; padding: 5px;'>${count}</div>`;
}, 1000);
