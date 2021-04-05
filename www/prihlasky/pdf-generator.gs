// Harcovníci: generátor PDF přihlášek
// ===================================
// Source: https://www.andrewroberts.net/2017/05/create-pdf-rows-google-sheet/

// Config
var TEMPLATE_ID = '1uyuw-qDRtbHZlYQxVC4jvtHi8CE4oMfaAWJSYLKTO34';
var RESULTS_FOLDER_ID = '1uDIdfoXchDCvxH15LUC3MCsqRz4bInvR';
var FILE_NAME_COLUMN_NAME = 'Celé jméno harcovníka';
var DATE_FORMAT = 'dd.MM.yyyy';

// Eventhandler for spreadsheet opening - add a menu.
function onOpen() {
  SpreadsheetApp.getUi()
    .createMenu('Generovat PDF')
    .addItem('Generovat PDF pro každou řádku', 'createPdfs')
    .addToUi();
}

function createPdfs() {
  var ui = SpreadsheetApp.getUi();

  if (TEMPLATE_ID === '') {
    ui.alert('Musíš ve skriptu definovat TEMPLATE_ID!');
    return;
  }

  // Set up the docs and the spreadsheet access
  var templateFile = DriveApp.getFileById(TEMPLATE_ID);
  var activeSheet = SpreadsheetApp.getActiveSheet();
  var allRows = activeSheet.getDataRange().getValues();
  var headerRow = allRows.shift();

  // Create a PDF for each row
  allRows.forEach(function (row) {
    createPdf(templateFile, headerRow, row);

    // Private Function
    function createPdf(templateFile, headerRow, activeRow) {
      var headerValue;
      var activeCell;
      var ID = null;
      var copyFile;
      var numberOfColumns = headerRow.length;
      var copyFile = templateFile.makeCopy();
      var copyId = copyFile.getId();
      var copyDoc = DocumentApp.openById(copyId);
      var copyBody = copyDoc.getActiveSection();

      // Replace the keys with the spreadsheet values and look for a couple of specific values
      for (var columnIndex = 0; columnIndex < numberOfColumns; columnIndex++) {
        headerValue = headerRow[columnIndex];
        activeCell = activeRow[columnIndex];
        activeCell = formatCell(activeCell);

        copyBody.replaceText('{{' + headerValue + '}}', activeCell);

        if (headerValue === FILE_NAME_COLUMN_NAME) {
          ID = activeCell;
        }
      }

      // Create the PDF file
      copyDoc.saveAndClose();
      var newFile = DriveApp.createFile(copyFile.getAs('application/pdf'));
      copyFile.setTrashed(true);
      newFile.setName(ID);

      // Put the new PDF file into the results folder
      if (RESULTS_FOLDER_ID !== '') {
        DriveApp.getFolderById(RESULTS_FOLDER_ID).addFile(newFile);
        DriveApp.removeFile(newFile);
      }
    }
  });

  ui.alert('Přihlášky byly uloženy na Google Disk');

  return;

  // Private Functions
  function formatCell(value) {
    var newValue = value;

    if (newValue instanceof Date) {
      newValue = Utilities.formatDate(
        value,
        Session.getScriptTimeZone(),
        DATE_FORMAT
      );
    } else if (typeof value === 'number') {
      newValue = Math.round(value * 100) / 100;
    }

    return newValue;
  }
}
