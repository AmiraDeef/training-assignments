var str =new String("thequickbrownfoxjumpsoverthelazydog");
var result = "";
for(i=0 ;i<str.length;i++){
    if(result.indexOf(str[i]) === -1){
        result+=str[i];
    }
}
console.log(result);
alert(result);
