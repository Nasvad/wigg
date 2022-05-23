let _name = document.getElementById("name")
let _password = document.getElementById("password")
let _email = document.getElementById("email")

register_button.addEventListener("click", e => {
    e.preventDefault()
    if(_name.value == "" || _password.value == "") {
        alert("Preencha todos os campos!")
    }else {
        alert("Login Efetuado!")		
        window.location.href = "index.html"
    }
})