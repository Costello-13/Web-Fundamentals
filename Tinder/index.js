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
var likebutton = document.querySelector("#like");
var dislikebutton = document.querySelector("#dislike");

var index = 0;
var likeindex = 0;
var dislikeindex = 0;

// var arrpeople = [];
var arrlikes = [];
var arrdislikes = [];
// document.querySelector("#swipebuttons").
likebutton.addEventListener("click", function() {
    var peoplelength = document.querySelectorAll(".jsfirstname").length;
    var names = document.getElementsByClassName("jsfirstname")[index];
    arrlikes[likeindex] = names.innerHTML;
    console.log(arrlikes[likeindex]);
    likeindex++;

    

    document.querySelectorAll(".jsfirstname")[index].style.display = "none";
    document.querySelectorAll(".jsage")[index].style.display = "none";
    document.querySelectorAll(".jsgender")[index].style.display = "none";
    document.querySelectorAll(".jsprefgender")[index].style.display = "none";

    index++;
    // Stop if no more available users
    if (index >= peoplelength) {
    // window.location.href="./Finished.php";
        if (arrlikes.length == 0) {
        document.write("<h2> YOU LIKED:</h2>")
        document.write("<p>You didn't like anyone :(</p>");
        }
        else {
        document.write("<h2>YOU LIKED:</h2>");
            for (i=0;i<arrlikes.length;i++){
        document.write("<p>" + arrlikes[i] + "</p>");
    };};
    if (arrdislikes.length == 0) {
        document.write("<h2>YOU DISLIKED:</h2>")
        document.write("<p>You disliked no one!</p>");
    }
    else {
    document.write("<h2>YOU DISLIKED:</h2>");
        for(i=0;i<arrdislikes.length;i++){
        document.write("<p>" + arrdislikes[i] + "</p>");
        };
    };
    };

    document.querySelectorAll(".jsfirstname")[index].style.display = "block";
    document.querySelectorAll(".jsage")[index].style.display = "block";
    document.querySelectorAll(".jsgender")[index].style.display = "block";
    document.querySelectorAll(".jsprefgender")[index].style.display = "block";


});

dislikebutton.addEventListener("click", function() {
    var peoplelength = document.querySelectorAll(".jsfirstname").length;
    var names = document.getElementsByClassName("jsfirstname")[index];
    arrdislikes[dislikeindex] = names.innerHTML;
    console.log(arrdislikes[dislikeindex]);
    dislikeindex++;

    
    document.querySelectorAll(".jsfirstname")[index].style.display = "none";
    document.querySelectorAll(".jsage")[index].style.display = "none";
    document.querySelectorAll(".jsgender")[index].style.display = "none";
    document.querySelectorAll(".jsprefgender")[index].style.display = "none";

    index++;
    // Stop if no more available users
    if (index >= peoplelength) {
    //    window.location.href="./Finished.php";
        if (arrlikes.length == 0) {
            document.write("<h2>YOU LIKED:</h2>")
            document.write("<p>You didn't like anyone :(</p>");
        }
        else {
        document.write("<h2>YOU LIKED:</h2>");
            for (i=0;i<arrlikes.length;i++){
            document.write("<p>" + arrlikes[i] + "</p>");};
        }
        if (arrdislikes.length == 0){
            document.write("<h2>YOU DISLIKED:</h2>")
            document.write("<p>You liked everyone!</p>");
        }
        else {
            document.write("<h2>YOU DISLIKED:</h2>");
            for(i=0;i<arrdislikes.length;i++){
            document.write("<p>" + arrdislikes[i] + "</p>");};
            }
    };

    document.querySelectorAll(".jsfirstname")[index].style.display = "block";
    document.querySelectorAll(".jsage")[index].style.display = "block";
    document.querySelectorAll(".jsgender")[index].style.display = "block";
    document.querySelectorAll(".jsprefgender")[index].style.display = "block";

   
});


















