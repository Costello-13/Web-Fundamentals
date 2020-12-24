// Only show first element from database
var first_name = document.querySelectorAll(".jsfirstname")[0];

first_name.classList.add("jsvisible");

var person_age = document.querySelectorAll(".jsage")[0];

person_age.classList.add("jsvisible");

var person_gender = document.querySelectorAll(".jsgender")[0];

person_gender.classList.add("jsvisible");

var person_preferred_gender = document.querySelectorAll(".jsprefgender")[0];

person_preferred_gender.classList.add("jsvisible");

// Switch to next person 
var index = 0;


document.querySelector("#swipebuttons").addEventListener("click", function() {
    var peoplelength = document.querySelectorAll(".jsfirstname").length;

    document.querySelectorAll(".jsfirstname")[index].style.display = "none";
    document.querySelectorAll(".jsage")[index].style.display = "none";
    document.querySelectorAll(".jsgender")[index].style.display = "none";
    document.querySelectorAll(".jsprefgender")[index].style.display = "none";

    index++;

    if (index >= peoplelength) {
       window.location.href="./Finished.php";
    }
    document.querySelectorAll(".jsfirstname")[index].style.display = "block";
    document.querySelectorAll(".jsage")[index].style.display = "block";
    document.querySelectorAll(".jsgender")[index].style.display = "block";
    document.querySelectorAll(".jsprefgender")[index].style.display = "block";
});

var user_exist = "<?php echo $checkuser ;?>";

console.log(user_exist);




