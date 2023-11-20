//header pop up
const header = document.querySelector("header");

window.addEventListener("scroll", function(){
    header.classList.toggle("sticky", window.scrollY > 0 );
});


//bagian swipe, baris 2-9
var counter = 1;
setInterval(function() {
    document.getElementById('radio' + counter).checked = true;
    counter++;
    if (counter > 3) {
        counter = 1;
    }
}, 5000);

//bagian filter destinasi
const filterButtons = document.querySelectorAll(".filter_buttons button");
const filterableCards = document.querySelectorAll(".destination-content .col-content");


//Define the filterCards function
const filterCards = e => {
    document.querySelector(".active").classList.remove("active");
    e.target.classList.add("active");

    //iterate over each filterable card
    filterableCards.forEach(card =>{
        //Add "hide" class to hide the card initially
        card.classList.add("hide");
        //Check if the card matches the selected filter or "all" is selected
        if (card.dataset.name === e.target.dataset.name || e.target.dataset.name === "all"){
            card.classList.remove("hide");
        }
    })
} 

//Add click event listener to each filter button
filterButtons.forEach(button => button.addEventListener("click",filterCards))
