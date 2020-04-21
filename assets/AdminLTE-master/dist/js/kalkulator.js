var exp = "";

function getdata(data) {
  exp = exp + data;
  document.getElementById('inputangka').value = exp;
}

function inputvalidation() {

  var expression = document.getElementById('inputangka').value;
  try {
    document.getElementById("hasil").value = eval(expression);
  } catch (e) {
    document.getElementById("hasil").value = "Invalid Operasi";
  }

}

function clearAll() {
  exp = "";
  document.getElementById('inputangka').value = "";
  document.getElementById("hasil").value = "";
}
