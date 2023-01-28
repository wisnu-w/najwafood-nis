function buttonkeyboard(a) {
    var x = document.getElementById("inputAngka1").value;
    if(x == null){
        document.getElementById("inputAngka1").value = a;
    }
    else{
        let result = x.concat(a);
        document.getElementById("inputAngka1").value = result;
    }
    
    console.log(x);
}
function buttonkeyboarddel() {
    var x = document.getElementById("inputAngka1").value;
    let result = x.slice(0,-1);
    document.getElementById("inputAngka1").value = result;
    console.log(x);
}

function totalkembalian(){
    var x = document.getElementById("totalb").value;
    var y = document.getElementById("inputAngka1").value;
    console.log(x);
    console.log(y);
}