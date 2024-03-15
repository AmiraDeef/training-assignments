var str =new String( "Web Development Tutorial");
      var split_str = str.split(" ");
      var result ="";
for (i =0;i<split_str.length;i++){
    if(split_str[i].length>result.length){
             result=split_str[i];

    }
}console.log(result);
alert(result);