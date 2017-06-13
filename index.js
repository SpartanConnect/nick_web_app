var modalWrapper, modalContent, modalClass;
modalWrapper = "signInModal";
modalContent ="signInModalContent";
modalClass = "signInModal";

function signInModalOpen () {
  document.getElementById(modalWrapper).style.display="block";
}
function signInModalClose () {
  document.getElementById(modalWrapper).style.display="none";
}
function onSignIn(googleUser) {
    var profile=googleUser.getBasicProfile ();
}
function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
}