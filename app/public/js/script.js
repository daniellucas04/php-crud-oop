const statusFilter = document.getElementById("status");
const filterButton = document.getElementById("filterButton"); 

function searchFilter(){
  window.location = "index.php?search="+ statusFilter.value;
}

filterButton.addEventListener("click", searchFilter);