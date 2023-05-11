function switchMode() {
  var body = document.getElementsByTagName("body")[0];
  var formContainers = document.getElementsByClassName("form-container");
  var labels = document.getElementsByTagName("label");
  var inputs = document.getElementsByTagName("input");
  var errors = document.getElementsByClassName("error");
  var buttons = document.getElementsByTagName("input");

  body.classList.toggle("dark-mode");

  for (var i = 0; i < formContainers.length; i++) {
    formContainers[i].classList.toggle("dark-mode");
  }

  for (var i = 0; i < labels.length; i++) {
    labels[i].classList.toggle("dark-mode");
  }

  for (var i = 0; i < inputs.length; i++) {
    inputs[i].classList.toggle("dark-mode");
  }

  for (var i = 0; i < errors.length; i++) {
    errors[i].classList.toggle("dark-mode");
  }

  for (var i = 0; i < buttons.length; i++) {
    if (buttons[i].type === "submit") {
      buttons[i].classList.toggle("dark-mode");
    }
  }

  var switchModeButton = document.getElementsByClassName("switch-mode")[0];
  switchModeButton.innerHTML = body.classList.contains("") ? "Mode clair" : "Mode sombre";
}

var switchModeButton = document.getElementsByClassName("switch-mode")[1];
switchModeButton.innerHTML = "Mode sombre";

switchMode();