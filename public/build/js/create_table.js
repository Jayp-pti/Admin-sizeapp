let clickedCell = null;

document.addEventListener('contextmenu', function(event) {
    var target = event.target;
    if (target.tagName === 'TH' || target.tagName === 'TD') {
        event.preventDefault();
        clickedCell = target;
        var contextMenu = document.getElementById('context-menu');
        contextMenu.style.display = 'block';
        contextMenu.style.left = '400px';
        contextMenu.style.top = '500px';
    }
});

document.addEventListener('click', function() {
    document.getElementById('context-menu').style.display = 'none';
});

function insertRowAbove() {
    var table = document.getElementById('size-chart');
    var rowIndex = clickedCell.parentNode.rowIndex;
    var newRow = table.insertRow(rowIndex);
    addCellsToNewRow(newRow);
}

function insertRowBelow() {
    var table = document.getElementById('size-chart');
    var rowIndex = clickedCell.parentNode.rowIndex;
    var newRow = table.insertRow(rowIndex + 1);
    addCellsToNewRow(newRow);
}

function insertColumnRight() {
    var table = document.getElementById('size-chart');
    var columnIndex = clickedCell.cellIndex;
    var headerRow = table.rows[0];
    
    // Insert new header cell
    var newHeaderCell = document.createElement('th');
    newHeaderCell.contentEditable = true;
    newHeaderCell.textContent = 'New Column'; // Default header text for new column
    headerRow.insertBefore(newHeaderCell, headerRow.cells[columnIndex + 1]); // Insert new column header cell

    // Insert new cells into each row
    for (var i = 1; i < table.rows.length; i++) {
        var newCell = table.rows[i].insertCell(columnIndex + 1); // Insert new cell
        newCell.contentEditable = true;
        newCell.textContent = '';
    }
}

function insertColumnLeft() {
    var table = document.getElementById('size-chart');
    var columnIndex = clickedCell.cellIndex;
    var headerRow = table.rows[0];

    // Insert new header cell
    var newHeaderCell = document.createElement('th');
    newHeaderCell.contentEditable = true;
    newHeaderCell.textContent = 'New Column'; // Default header text for new column
    headerRow.insertBefore(newHeaderCell, headerRow.cells[columnIndex]); // Insert new column header cell

    // Insert new cells into each row
    for (var i = 1; i < table.rows.length; i++) {
        var newCell = table.rows[i].insertCell(columnIndex); // Insert new cell
        newCell.contentEditable = true;
        newCell.textContent = '';
    }
}

function deleteRow() {
    var table = document.getElementById('size-chart');
    var rowIndex = clickedCell.parentNode.rowIndex;
    table.deleteRow(rowIndex);
}

function deleteColumn() {
    var table = document.getElementById('size-chart');
    var columnIndex = clickedCell.cellIndex;
    var headerRow = table.rows[0];
    
    // Remove the header cell
    headerRow.deleteCell(columnIndex);

    // Remove the cells in each row
    for (var i = 1; i < table.rows.length; i++) {
        table.rows[i].deleteCell(columnIndex);
    }
}

function addColumn() {
    var table = document.getElementById('size-chart');
    var headerRow = table.rows[0];
    var newHeaderCell = document.createElement('th');
    newHeaderCell.contentEditable = true;
    newHeaderCell.textContent = 'New Column'; // Default header text for new column
    headerRow.appendChild(newHeaderCell); // Append new header cell to the end of the header row

    // Append new cells to each row
    for (var i = 1; i < table.rows.length; i++) {
        var newCell = table.rows[i].insertCell(-1); // Insert new cell at the end
        newCell.contentEditable = true;
        newCell.textContent = '';
    }
}

function addRow() {
    var table = document.getElementById('size-chart');
    var newRow = table.insertRow(-1);
    addCellsToNewRow(newRow);
}


function addCellsToNewRow(newRow) {
    var table = document.getElementById("size-chart");
    var columnCount = table.rows[0].cells.length; // Total number of columns in the header

    // Add a new header cell (th) as the first cell in the new row
    var newHeaderCell = document.createElement('th');
    newHeaderCell.contentEditable = true;
    newHeaderCell.textContent = '';
    newRow.appendChild(newHeaderCell);

    // Add new cells (td) to the rest of the row
    for (var i = 1; i < columnCount; i++) {
        var newCell = document.createElement('td');
        newCell.contentEditable = true;
        newCell.textContent = '';
        newRow.appendChild(newCell);
    }
}

document.getElementById('size-chart-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent default form submission

    var table = document.getElementById('size-chart');
    var data = [];

    // Iterate through rows and cells to extract data
    for (var i = 1; i < table.rows.length; i++) { // Start from index 1 to skip header row
        var row = table.rows[i];
        var rowData = {};

        var isEmptyRow = true;

        for (var j = 0; j < row.cells.length; j++) { // Include all cells
            var cell = row.cells[j];
            var cellText = cell.textContent.trim();
            
            // Check if cell is empty or contains only whitespace
            if (cellText !== '') {
                isEmptyRow = false;
            }

            rowData[table.rows[0].cells[j].textContent.trim()] = cellText;
        }

        // Add row data to array only if it's not empty
        if (!isEmptyRow) {
            data.push(rowData);
        }
    }

    // Set JSON data in hidden input field
    document.getElementById('size-chart-data').value = JSON.stringify(data);
    console.log(data);
    console.log(JSON.stringify(data));
    this.submit(); // Uncomment this line to submit the form
});