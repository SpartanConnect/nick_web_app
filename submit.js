function check78 () {
  checkBoxes([true,true,false,false,false,false])
}

function check912 () {
  checkBoxes([false,false,true,true,true,true])
}

function checkAll () {
  checkBoxes([true,true,true,true,true,true])
}

function checkBoxes (boxes) {
  document.getElementById("grade7").checked=boxes[0];
  document.getElementById("grade8").checked=boxes[1];
  document.getElementById("grade9").checked=boxes[2];
  document.getElementById("grade10").checked=boxes[3];
  document.getElementById("grade11").checked=boxes[4];
  document.getElementById("grade12").checked=boxes[5];
}
