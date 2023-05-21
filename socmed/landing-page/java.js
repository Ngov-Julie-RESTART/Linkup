SuppContainer = document.querySelectorAll(".supp")
PostContainer = document.querySelectorAll(".make-post")

//Form Supprimer
SuppContainer.forEach(() => {
    document.getElementById('remove').style.display = 'none';
     })

function openPopup() {
    document.getElementById('remove').style.display = 'block';
}

function closePopup() {
    document.getElementById('remove').style.display = 'none';
}

//Form ajouter poste
PostContainer.forEach(() => {
    document.getElementById('make-post').style.display = 'none';
     })

function openPost() {
    document.getElementById('make-post').style.display = 'block';
}
    
function closePost() {
    document.getElementById('make-post').style.display = 'none';
}

//NAVBAR
function NavMenu() {
    let x = document.getElementById("side-bar-mobile");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }