function password(){
    var a=document.getElementById("pwd").value;
    var b=document.getElementById("cnpwd").value;
        if(a!=b){
        alert("passsword mismatch");
        return false;
        }
        if(a.length<8 || a.length>20){
        alert("password must contain only 8-20 characters");
        return false;
        }
        return true;
    }
    
    function enableButton(){
    if (document.getElementById("agreex").checked==true)
    {
        document.getElementById("subbut").disabled=false;
        } 
    else{
        document.getElementById("subbut").disabled=true;
        }
    }