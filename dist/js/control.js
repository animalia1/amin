var d = new Date();
var todaysDate= d.getMonth()+1 +" / "+ d.getDate()+" / "+ d.getFullYear();

document.getElementById('date').value = todaysDate;
document.getElementById('dateEdit').value = todaysDate;
function controlFirstName(champ){

    var span = document.getElementById("span-firstName");
    span.style.display ="block";

    if(champ.value == ""){
            document.getElementById("form-group-name").className = " has-error has-feedback";
            span.className = "glyphicon glyphicon-remove form-control-feedback";
        return false;

    }else{
        document.getElementById("form-group-name").className = "has-success has-feedback";
        span.className="glyphicon glyphicon-ok form-control-feedback";
        return true;
    }
}


function verifMail(champ)
{
    var span = document.getElementById("span-email");
    span.style.display ="block";
    var regex = /^[a-zA-Z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/;

   if(champ.value == "")
   {          
        document.getElementById("form-group-email").className = " has-error has-feedback";
        span.className = "glyphicon glyphicon-remove form-control-feedback";
        return false   
   }
   else if(!regex.test(champ.value))
   { 
        document.getElementById("form-group-email").className = " has-warning has-feedback";
        span.className = "glyphicon glyphicon-warning-sign form-control-feedback";
        return false
   }
   else{
        span.className="glyphicon glyphicon-ok form-control-feedback";
        document.getElementById("form-group-email").className = "has-success has-feedback";
        return true;
   }

}


function controleTelephone(champ){
    var span = document.getElementById("span-phone");
    var form = document.getElementById("form-group-phone");
    span.style.display ="block";
    var regex =  /^[0-9]*$/;

        if(champ.value == ""){
            form.className = " has-error has-feedback";
            span.className = "glyphicon glyphicon-remove form-control-feedback";
            return false 
        }
        else if(!regex.test(champ.value) || champ.value.length != 8){
            form.className = " has-warning has-feedback";
            span.className = "glyphicon glyphicon-warning-sign form-control-feedback";
            return false;
        }else{
            span.className="glyphicon glyphicon-ok form-control-feedback";
            form.className = "has-success has-feedback";
            return true;
        }
}

function controleSalary(champ){
    var form = document.getElementById("form-group-salary");
    var regex =  /^[0-9]*$/;

        if(champ.value == ""){
            form.className = " has-error has-feedback";
            return false 
        }
        else if(!regex.test(champ.value)){
            form.className = " has-warning has-feedback";
            return false;
        }else{
            form.className = "has-success has-feedback";
            return true;
        }
}

function controleCodePostale(champ){
    var span = document.getElementById("span-code");
    var form = document.getElementById("form-group-code");
    span.style.display ="block";
    var regex =  /^[0-9]*$/;

        if(champ.value == ""){
            form.className = " has-error has-feedback";
            span.className = "glyphicon glyphicon-remove form-control-feedback";
            return false 
        }
        else if(!regex.test(champ.value) || champ.value.length < 3){
            form.className = " has-warning has-feedback";
            span.className = "glyphicon glyphicon-warning-sign form-control-feedback";
            return false;
        }else{
            span.className="glyphicon glyphicon-ok form-control-feedback";
            form.className = "has-success has-feedback";
            return true;
        }
}


function controleAdresse(champ){
    var span = document.getElementById("span-adresse");
    var form = document.getElementById("form-group-adresse");
    span.style.display ="block";

        if(champ.value == ""){
            form.className = " has-error has-feedback";
            span.className = "glyphicon glyphicon-remove form-control-feedback";
            return false 
        }else{
            span.className="glyphicon glyphicon-ok form-control-feedback";
            form.className = "has-success has-feedback";
            return true;
        }
}







function submitt(){
    var nom = controlFirstName(document.getElementsById("name"));
    gete
    var salary = controleSalary(document.getElementsByTagName("salary"));
    var code = controleCodePostale(document.getElementsByTagName("code"));
    var adresse = controleAdresse(document.getElementsByTagName("adresse"));
    var telephone = controleTelephone(document.getElementsByTagName("phoneNumber"));
    var email = verifMail(document.getElementsByTagName("emailAddress"));
    if(nom && salary && adresse && code && telephone && email){
        
        document.getElementById("submitButton").disabled = false;
    }
    else{
        document.getElementById("submitButton").disabled = true;
    }
}