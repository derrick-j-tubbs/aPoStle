function unitToSales(){
    var unitPrice = document.getElementById("inputCost");
    var percentMarkup = document.getElementById("inputMarkup");
    var salesPrice = document.getElementById("inputPrice");
    if(isNaN(unitPrice)){
        alert("Please enter a valid number");
        unitPrice.value = '';
        return false;
     }else if(unitPrice.value != "" && percentMarkup.value != "" ){
         salesPrice = unitPrice * (1+percentMarkup);
     }
}

function salesToUnit(){
    var unitPrice = document.getElementById("inputCost");
    var percentMarkup = document.getElementById("inputMarkup");
    var salesPrice = document.getElementById("inputPrice");
    if(isNaN(salesPrice)){
        alert("Please enter a valid number");
        salesPrice.value = '';
        return false;
     }else if(salesPrice.value != "" && percentMarkup.value != "" ){
         unitPrice = salesPrice/(1 + percentMarkup);
     }
}

function markupNumCheck(){
     var percentMarkup = document.getElementById("inputMarkup");
     if(isNaN(percentMarkup)){
        alert("Please enter a valid number");
        document.getElementById('inputMarkup').value = '';
     }
}