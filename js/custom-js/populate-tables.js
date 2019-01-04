/**
 * Created by derri on 4/16/2018.
 */

/**
 * Array variables containing the IDs of each cell
 *
 * @type {string[]} posRowIDs - the IDs for each cell in the POS tables
 * @type {string[]} imsRowIDs - the IDs for each cell in the IMS tables
 */
var posRowIDs = ['sku_', 'upc_', 'description_', 'qty_', 'price_'];
var imsRowIDs = ['sku_', 'upc_', 'cost_', 'markup_', 'price_', 'category_',
    'color1_', 'color_2', 'description_', 'qty_'];

/**
 * This function runs after an item has been found to add to the transaction, no matter
 * what means the item was found by. This function will update an existing row, or create
 * a new row if the table is already full. This functions is designed specifically for the
 * needs of the point of sale.
 *
 * @param {int} iNumRows - The number of blank rows to create
 * @param {String[]} aRowIDs - An array including the ID for each cell of the blank table.
 */
function GenerateEmptyRows(iNumRows, aRowIDs) {
    for (var i = 0; i < iNumRows; i++) {
    document.write("<tr id='row_'" + i + ">");
        for (var j = 0; j < aRowIDs.length(); i++) {
            document.write("<td id='" + aRowIDs[j] + i + "'>");
        }
    document.write("</tr>");
    }
}

/**
 * This function runs after an item has been found to add to the transaction, no matter
 * what means the item was found by. This function will update an existing row, or create
 * a new row if the table is already full. This functions is designed specifically for the
 * needs of the point of sale.
 *
 * @param {int} iRowNum - The number of the row to be modified
 * @param {String[]} aRowIDs - An array including the ID for each cell of the blank table.
 * @param {String[]} aRowData - An array of all the data to be added to the row, presented in
 *                  the same order as rowIDs.
 */
function UpdateRows(iRowNum, aRowIDs, aRowData) {

    var row;
    if ((row = document.getElementById('row'+iRowNum)) != null) {
        for (var i = 0; i < aRowIDs; i++) {
            document.getElementById(aRowIDs[i] + iRowNum).innerHTML = aRowData[i]
        }
    } else {
        document.write("<tr>");
        for (var j = 0; i < aRowIDs; i++) {
            document.write("<td>" + aRowData[i] + "</td>");
        }
        document.write("</tr>");
    }
}