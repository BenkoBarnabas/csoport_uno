let inputAccount = document.getElementById("username")
let inputPassword = document.getElementById("password")

let accScreen = document.getElementById("accountscreen")
let logScreen = document.getElementById("loginscreen")
let signScreen = document.getElementById("signupscreen")
let startScreen = document.getElementById("startgamescreen")

let allAccounts = []
let playerAccount = ""

function startGameScreen(){
    accScreen.style.display = "block"
    logScreen.style.display = "none"
    signScreen.style.display = "none"
    startScreen.style.display = "block"
}
function logInScreen(){
    accScreen.style.display = "block"
    logScreen.style.display = "block"
    signScreen.style.display = "none"
    startScreen.style.display = "none"
}
function signUpScreen(){
    accScreen.style.display = "block"
    logScreen.style.display = "none"
    signScreen.style.display = "block"
    startScreen.style.display = "none"
}
function Game(){
    let accountInput = inputAccount.value
    let passwordInput = inputPassword.value

    $(() => {
        data = {x: Math.round(Math.random()*10+1)}
        $.post("/rpg/login.php", data, (res) => {
            adat = JSON.parse(res)
            for(let i = 0; i < adat.length; i++){
                if(accountInput == adat[i][0] && passwordInput == adat[i][1]){
                    playerAccount = accountInput
                    $("#l").html("Welcome, " + playerAccount)
                    $("#loggedinname").html(playerAccount)
                    $("#loggedinname2").html(playerAccount)
                    break
                }
            }
            if(playerAccount == ""){
                logInScreen()
                inputAccount.value = ""
                inputPassword.value = ""
                console.log("back to login")
            }

        })
    })
    
    startGameScreen()
}
function startGame(){
    window.open("game/map.html");
}

logInScreen()