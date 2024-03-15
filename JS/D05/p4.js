function randomNumberedArray(){
    var arr=[];
    //  arr.length=8;
    for(i=0 ;i<8;i++){
        var j = Math.floor(Math.random() * 10) + 1;
        if(! arr.includes(j) || arr.length <8 ){
            arr.push(j)
        }
    }
    console.log(arr);
}
randomNumberedArray();