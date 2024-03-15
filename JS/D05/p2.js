var arr=new Array();
arr=[3,1,4,5,2];
//with arg
function sumAll(arr1=[]){
    var sum= eval(arr1.join('+'));
     var product=eval(arr1.join('*'));
 
  console.log("sum: "+sum+ " product: "+product);
}
sumAll(arr)


////without arg
// function sumAll() {
//     var arr2 = Array.from(arguments);
//     var sum = eval(arr2.join('+'));
//     var product = eval(arr2.join('*'));

//     console.log("Sum: " + sum + ", Product: " + product);
// }

// sumAll(3, 1, 4, 5, 2);


