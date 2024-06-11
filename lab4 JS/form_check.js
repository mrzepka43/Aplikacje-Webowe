

function isWhiteSpaceOrEmpty(str) {
    return /^[\s\t\r\n]*$/.test(str);
    }

function isFieldValid(obj, msg) {
    let str = obj.value;
    let errorFieldName = "e_" + obj.name.substr(2, obj.name.length);
    if (isWhiteSpaceOrEmpty(str)) {
        document.getElementById(errorFieldName).innerHTML = msg;
        obj.focus();
        return false;
    }
    else {
        document.getElementById(errorFieldName).innerHTML = ""
        return true;
    }
}
    
function isEmailValid(obj, msg) {
    let str = obj.value;
    let errorFieldName = "e_" + obj.name.substr(2, obj.name.length);
    let email = /^[a-zA-Z_0-9\.]+@[a-zA-Z_0-9\.]+\.[a-zA-Z][a-zA-Z]+$/;
    if (email.test(str)){
        document.getElementById(errorFieldName).innerHTML = "";
        return true;}
    else {
        document.getElementById(errorFieldName).innerHTML = msg;
        obj.focus();
        return false;
    }
}
    
function checkStringAndFocus(obj, msg, func) {
    return(func(obj, msg))
}

function validate(form){
    if (
        checkStringAndFocus(form.elements["f_imie"], "Podaj imie!", isFieldValid) &&
        checkStringAndFocus(form.elements["f_nazwisko"], "Podaj nazwisko!", isFieldValid) &&
        checkEmailAndFocus(form.elements["f_email"], "Wpisz właściwi e-mail!", isEmailValid) &&
        checkStringAndFocus(form.elements["f_kod"], "Podaj kod pocztowy!", isFieldValid) &&
        checkStringAndFocus(form.elements["f_ulica"], "Podaj ulice!", isFieldValid) &&
        checkStringAndFocus(form.elements["f_miasto"], "Podaj miasto!", isFieldValid)) {

            return true
        } else {
        return false}
}

function showElement(e) {
    document.getElementById(e).style.visibility = 'visible';
    }

function hideElement(e) {
    document.getElementById(e).style.visibility = 'hidden';
}

function alterRows(i, e) {
    if (e) {
    if (i % 2 == 1) {
    e.setAttribute("style", "background-color: Aqua;");
    }
    e = e.nextSibling;
    while (e && e.nodeType != 1) {
    e = e.nextSibling;
    }
    alterRows(++i, e);
    }
    }

window.onload = function() {
    alterRows(1, document.getElementsByTagName("tr")[0]);
};


function nextNode(e) {
    while (e && e.nodeType != 1) {
    e = e.nextSibling;
    }
    return e;
    }
    function prevNode(e) {
    while (e && e.nodeType != 1) {
    e = e.previousSibling;
    }
    return e;
    }
function swapRows(b) {
    let tab = prevNode(b.previousSibling);
    let tBody = nextNode(tab.firstChild);
    let lastNode = prevNode(tBody.lastChild);
    tBody.removeChild(lastNode);
    let firstNode = nextNode(tBody.firstChild);
    tBody.insertBefore(lastNode, firstNode);
    }
function cnt(form, msg, maxSize) {
    if (form.value.length > maxSize)
    form.value = form.value.substring(0, maxSize);
    else
    msg.innerHTML = maxSize - form.value.length;
}