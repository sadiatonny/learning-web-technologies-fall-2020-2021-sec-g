function formvalidation()
{
    let name = checkName();
    let email = checkEmail();
    let gender = checkGender();
    let dob = checkDob();
    let blood = checkBlood();
    let degree = checkDegree();

    if(name == true && email == true && gender == true && dob == true && blood == true && degree == true)
    {
        let add = addAB();

        alert('ok');
        return true;
    }
    else
    {
        alert('Retry');
        return false;
    }

}
function checkName()
{
    let obj = document.getElementById('name').value;
    if(obj != '')
    {
        return true;
    }
    else{
        return false;
    }
}
as
function checkEmail()
{
    let email = document.getElementById("email").value;

    if (email == "")
    {
        document.getElementById("emailDiv").innerHTML = "*required";
        return false;
    }

    var at = email.indexOf("@");
    var dot = email.lastIndexOf("\.");
    if (!(email.length > 0 && at > 0 && email[at + 1] !== "." && dot > at + 1 && dot < email.length && email.indexOf(" ") === -1 && email.indexOf("..") === -1))
    {
        document.getElementById("emailDiv").innerHTML = "*invalid";
        return false;
    }
    else
    {
        document.getElementById("emailDiv").innerHTML = "*Valid";
        return true; 
    }

}


function checkGender()
{
    let obj1 = document.getElementById('gendera').value;
    let obj2 = document.getElementById('genderb').value;
    let obj3 = document.getElementById('genderc').value;
    let gen;

    if (obj1 !='')
    {
        gen =obj1;
    }

    if (obj2 !='')
    {
        gen =obj2;
    }

    if (obj3 !='')
    {
        gen =obj3;
    }


    if(gen != '')
    {
        return true;
    }
    else{
        return false;
    }
}

function checkDob()
{
    let obj = document.getElementById('dob').value;
    if(obj != '')
    {
        return true;
    }
    else{
        return false;
    }
}

function checkBlood()
{
    let obj = document.getElementById('blood').value;
    if(obj != '')
    {
        return true;
    }
    else{
        return false;
    }
}

function checkDegree()
{
    let obj1 = document.getElementById('dega').value;
    let obj2 = document.getElementById('degb').value;
    let obj3 = document.getElementById('degc').value;
    let deg;

    if (obj1 !='')
    {
        deg += obj1;
    }

    if (obj2 !='')
    {
        deg +=obj2;
    }

    if (obj3 !='')
    {
        deg +=obj3;
    }

    if(deg != '')
    {
        return true;
    }
    else{
        return false;
    }
}

function addAB()
{
    
    var sName = document.getElementById('name').value;
    var sEmail = document.getElementById('email').value;
    var sGender = document.getElementById('gender').value;
    var sDob = document.getElementById('dob').value;
    varsBlood = document.getElementById('blood').value;
    var sDeg = document.getElementById('deg').value;
    var sxhttp = new XMLHttpRequest();
    sxhttp.open('POST', 'addcc.php', true);
    sxhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    sxhttp.send(pName&pEmail&pGender&pDob&pBlood&pDeg);

}