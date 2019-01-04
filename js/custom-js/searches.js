/**
 * Created by derri on 4/16/2018.
 */

/**
 * This would be called after a query has been done on the SKU of an items. This function to populate and unhide
 * a form for deletion and updates of items
 *
 * @param {Object[]} aItemInfo - An array filled with all the values associated with the query for an item.
 */

function PopulateItemForm(aItemInfo) {
    document.getElementById('item-form').style.display="block";

    document.getElementById('ioSKU').value = aItemInfo[0];
    document.getElementById('ioUPC').value = aItemInfo[1];
    document.getElementById('ioDescription').value = aItemInfo[2];
    document.getElementById('ioCost').value = aItemInfo[3];
    document.getElementById('ioMarkup').value = aItemInfo[4];
    document.getElementById('ioPrice').value = aItemInfo[5];
    document.getElementById('ioQuantity').value = aItemInfo[6];
    document.getElementById('ioCategory').value = aItemInfo[7];
    document.getElementById('ioColor1').value = aItemInfo[8];
    document.getElementById('ioColor2').value = aItemInfo[9];
}

