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
    document.querySelectorAll(".jsswipe")[index].style.display = "none";

    index++;
    document.querySelectorAll(".jsswipe")[index].style.display = "block";
});