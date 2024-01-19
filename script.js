document.getElementById('signupButton').onclick = function(){
    window.location.href = 'signup.html';
}
function toggleGateCode() {
    var checkBox = document.getElementById("hasGateCode");
    var gateCode = document.getElementById("gateCode");
    if (checkBox.checked == true){
        gateCode.style.display = "block";
    } else {
        gateCode.style.display = "none";
    }
}
function validateForm() {
    var name = document.forms["signupForm"]["name"].value;
    var email = document.forms["signupForm"]["email"].value;
    var phone = document.forms["signupForm"]["phone"].value;
    var address = document.forms["signupForm"]["address"].value;
    var gatecode = document.forms["signupForm"]["gateCode"].value;
    var hasGateCode = document.getElementById("hasGateCode");
    if (name == "" || email == "" || phone == "" || address == "" || gatecode == "" && hasGateCode.checked) {
        alert("All fields must be filled out");
        return false;
    }

    window.location.href = 'thankyou.html';
    return false; // Prevent actual form submission
}

