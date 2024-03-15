var arr =new Array();
arr=[3,1,2,4,3,5,1];
var new_arr=[];
//delete duplicated value
for(i of arr){
  if(!new_arr.includes(i)){
    new_arr.push(i);
  }
}
console.log(new_arr);

//sorting ascending
arr.sort(function (a,b){
    return a-b
})
console.log(arr);

//filtering larger than 50 using filter()
var flitered_arr=arr.filter(function (i){
   return i>50;
});
console.log(flitered_arr);

//filtering larger than 50 def fn
def_arr=[];
for(i of arr){
    if (i>50){
        def_arr.push(i)
    }
}
console.log(def_arr);

//min and max of arr using def fn
//by using sorting above
console .log( "min : " + arr[0] +" max : "+ arr[arr.length-1]);

//min and max of arr using es6
var max = Math.max(...arr);
var min = Math.min(...arr);

console.log('min: '+min+'  max: '+max );


