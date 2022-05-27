let _name = document.getElementById("name")
let _password = document.getElementById("password")
let _email = document.getElementById("email")

register_button.addEventListener("click", e => {
    let xhr = new XMLHttpRequest()
    xhr.setRequestHeader("Content-Type", "application/x-www-urlencoded")
    xhr.send();
})