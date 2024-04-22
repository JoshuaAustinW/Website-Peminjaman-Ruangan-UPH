

function ShowMenu() {
    let popUpElement = document.getElementById('MenuBox');
            if (popUpElement.style.display === 'none' || popUpElement.style.display === '') {
                popUpElement.style.display = 'block';
            } else {
                popUpElement.style.display = 'none';
            }
}

let GantiIcon = function(a) {
    a.classList.remove("fa-solid");
    // Add the new icon class
    a.classList.add("fa-regular");
}

let GantiIcon2 = function(a) {
    a.classList.remove("fa-regular");
    // Add the new icon class
    a.classList.add("fa-solid");
}

function removeFromDB(id){
    fetch('removeFromDB.php?id=' + id, {
        method: 'DELETE'
      })
      .then(response => {
        if (!response.ok) {
          throw new Error('Failed to delete data');
        }
        console.log('Data removed successfully');
      })
      .catch(error => {
        console.error('Error:', error);
      });
}