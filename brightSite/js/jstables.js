
$(document).ready(function() {
	inverseTable();
})


function inverseTable(){
	
var table     = document.getElementById("table_kurse");
var myTblDiv   = document.getElementById("table_inverse");


var newTbl     = document.createElement("table");
var newTblBody = document.createElement("tbody");

for (var i = 0, col; col = table.col[i]; i++) {
   //iterate through rows
   //rows would be accessed using the "row" variable assigned in the for loop
   var newRow = document.createElement("tr");
      
   for (var j = 0, row; row = col.rows[j]; j++) {
     //iterate through columns
     //columns would be accessed using the "col" variable assigned in the for loop
     var newCell     = document.createElement("td");
     var newCellText = document.createTextNode("cell in row "+i+", column "+j);
     
     newCell.appendChild(newCellText);
     newRow.appendChild(newCell);
   
   }
   
   newTblBody.appendChild(newRow);  
   
}

  alert(newTblBody);

  newTbl.appendChild(newTblBody);
  myTblDiv.appendChild(newTbl);
  
}