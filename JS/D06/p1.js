function welcome(){
    var obj=open("","welcomeopen.html","width=300", "height=300");
    var  txt="welcome to JS";
    var i = 0;

    var intervalId = setInterval(() => {
        if (i < txt.length) {
            obj.document.write(txt.charAt(i));
            i++;
        } else {
            clearInterval(intervalId);
            setTimeout(() => obj.close(), 2000);
        }
    }, 800);
}
welcome();