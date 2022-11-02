function makeTable() {
  let x = document.getElementById("col").value,
    y = document.getElementById("row").value;
  let result = "";
  if (x <= 0 || y <= 0) {
    result += "<h1>oops</h1>";
  } else
    for (let i = 0; i <= x; i++) {
      for (let j = 0; j <= y; j++) {
        if (i == 0) {
          result += "<th class='text-center table-dark'>" + j + "</th>";
        } else if (j == 0) {
          result += "<th class='text-center table-dark'>" + i + "</th>";
        } else if ((i * j) % 2 == 0)
          result += "<td class='text-center table-danger'>" + i * j + "</td>";
        else
          result += "<td class='text-center table-success'>" + i * j + "</td>";
      }
      result += "</tr>";
    }
  document.getElementById("table").innerHTML = result;
}

function clear() {
  let result = "0";
  result = 0;
  document.getElementById("table").innerHTML = result;
}
