// https://www.w3schools.com/howto/howto_js_filter_table.asp
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("org_search");
  filter = input.value.toUpperCase();
  table = document.getElementById("socData");
  tr = table.getElementsByClassName("container-long-orange");

      // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    if (input.value=="") {
      tr[i].style.display = "none";
      continue;
    }
    td = tr[i].getElementsByClassName("org_name")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
