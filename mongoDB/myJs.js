flagg = 0;
x1 = 100;
x2 = -500;
y1 = 100;
y2 = -500;

function tgglView() {
    var ele1 = document.getElementById('dv1');
    var ele2 = document.getElementById('dv2');

    if (ele2.style.visibility == "hidden") {
        ele1.style.visibility = "hidden";
        ele2.style.visibility = "visible";    
    } else {
        ele1.style.visibility = "visible";
        ele2.style.visibility = "hidden";
    }
}

function validate() {
    var ky = document.getElementById('ky1').value;
    
    if (ky == '') {
        alert('Username or Key Pin is empty');
        return false;
    }
    
    return true;
}


function getOutputAddMe() {
    var s1 = document.getElementById("inp1a").value;
    var s2 = document.getElementById("inp1b").value;
    var s3 = document.getElementById("inp1c").value;
    
    if (s1 == "" || s2 == "" || s3 == "") {
        alert('Any one field is empty');
        return false;
    }
    
    getRequest(
        'myAjaxAddMe.php?q=' + s1 + '&r=' + s2 + '&s=' + s3, // URL for the PHP file
        drawOutput,  // handle successful request
        drawError    // handle error
        );
    return false;
}

function getOutput() {
    var s1 = document.getElementById("inp2a").value;
    getRequest(
        'myAjax.php?q=' + s1, // URL for the PHP file
        drawOutput,  // handle successful request
        drawError    // handle error
        );
    return false;
}  
// handles drawing an error message
function drawError() {
    var container = document.getElementById('output');
    container.innerHTML = 'Bummer: there was an error!';
}
// handles the response, adds the html
function drawOutput(responseText) {
    var container = document.getElementById('output');
    container.innerHTML = responseText;
}
// helper function for cross-browser request object
function getRequest(url, success, error) {
    var req = false;
    try{
        // most browsers
        req = new XMLHttpRequest();
    } catch (e){
        // IE
        try{
            req = new ActiveXObject("Msxml2.XMLHTTP");
        } catch(e) {
            // try an older version
            try{
                req = new ActiveXObject("Microsoft.XMLHTTP");
            } catch(e) {
                return false;
            }
        }
    }
    if (!req) return false;
    if (typeof success != 'function') success = function () {};
    if (typeof error!= 'function') error = function () {};
    req.onreadystatechange = function(){
        if(req.readyState == 4) {
            return req.status === 200 ? 
                success(req.responseText) : error(req.status);
        }
    }
    req.open("GET", url, true);
    req.send(null);
    return req;
}
