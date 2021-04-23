function data(id) {
    const userData = id.parentElement.parentElement.getElementsByTagName("td");
    const userProperties = {
        userName: userData[0].innerHTML,
    };
    return userProperties;
}

function deleteUser(id) {
    user = data(id);
    if (confirm("!! Deleting from the database a user is irreversible. Are you sure you want to delete " + user.userName.trim() + " from the store?")) {
       
        alert("User deleted from database");
        location.reload();
    }
    
}