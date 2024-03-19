

requiredField = new Array(); //List of id for required element

function checkMatch(patern, element){ //Check a match between a patern and an element
    if (element.value.match(patern)){
        return true;
    }
    else {
        return false;
    }
}

function checkFilled(element) { //Check if the field is empty
    if (element.value == ""){
        return false;
    }
    else {
        return true;
    }
}

function checkRequired(requiredFields){ //Check if a list of id are empty
    for (let ID of requiredFields){
        if (!checkFilled(document.getElementById(ID))){
            return false;
        }
    }
    return true;
}

