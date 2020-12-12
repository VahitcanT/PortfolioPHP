const valLogin = (error, name, pwd) => {
  var name = document.getElementById(name).value;
  var pwd = document.getElementById(pwd).value;
  if (!name || !pwd) {
    document.getElementById(error).innerHTML = "Please fill in all the information";
    return false;
  }
  return true;

}
const valRegister = (error, name, pwd, email) => {

  var name = document.getElementById(name).value;
  var pwd = document.getElementById(pwd).value;
  var email = document.getElementById(email).value;

  if (!name || !pwd || !email) {
    document.getElementById(error).innerHTML = "Please fill in all the information";
    return false;
  }
  return true;

}

const valMessage = (error, name, email, message) => {
  var name = document.getElementById(name).value;
  var email = document.getElementById(email).value;
  var message = document.getElementById(message).value;
  if (!name || !email || !message) {
    document.getElementById(error).innerHTML = "Please fill in all the information";
    return false;
  }
  return true;
}