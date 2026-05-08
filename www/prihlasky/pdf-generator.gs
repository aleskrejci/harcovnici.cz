// Harcovníci: generátor přihlášek a ZDD
// =====================================
// Source: https://www.andrewroberts.net/2017/05/create-pdf-rows-google-sheet/

//
// NUTNO DOPLNIT: V adrese šablony nebo cílové složky musíš najít ID (ta alfanumerická změť) a zkopírovat ho mezi uvozovky níže. To je celý.
//

var APPLICATION_TEMPLATE_ID = '1s4iltExG1iB818FkGmHkNw4V-Fqq8YK_U7_lyOYmjic'; // Šablona Google Dokumentu používaného pro vygenerování PDF přihlášky
var RECEIPT_TEMPLATE_ID = '1NojjyFCNuJjW9jgmKQH0RY82d8YE4a0HP7lqOt1n-Ks'; // Šablona Google Dokumentu používaného pro vygenerování konceptu ZDD
var APPLICATIONS_FOLDER_ID = '1Dl2vffqKQdKkBZ3-9CsP72q6DfT3w6Y7'; // Složka pro uložení přihlášek
var RECEIPTS_FOLDER_ID = '1LsBz0VM4Y7i1CUmPR0v4ZGancFsNqSjY'; // Složka pro uložení ZDD

//
// DÁL UŽ NIC NEŠUDLAT
//

var FILE_NAME_COLUMN_NAME = 'Příjmení a jméno harcovníka';
var DATE_FORMAT = 'dd.MM.yyyy';

function onOpen() {
  SpreadsheetApp.getUi()
    .createMenu('Generovat pro každou řádku…')
    .addItem('Přihláška (PDF)', 'createApplications')
    .addItem('Zjednodušený daňový doklad (koncept)', 'createReceipts')
    .addToUi();
}

function createApplications() {
  var ui = SpreadsheetApp.getUi();

  if (APPLICATION_TEMPLATE_ID === '') {
    ui.alert('Musíš ve skriptu definovat APPLICATION_TEMPLATE_ID!');
    return;
  }

  var templateFile = DriveApp.getFileById(APPLICATION_TEMPLATE_ID);
  var activeSheet = SpreadsheetApp.getActiveSheet();
  var allRows = activeSheet.getDataRange().getValues();
  var headerRow = allRows.shift();

  allRows.forEach(function (row) {
    createApplication(templateFile, headerRow, row);

    function createApplication(templateFile, headerRow, activeRow) {
      var headerValue;
      var activeCell;
      var ID = null;
      var copyFile;
      var numberOfColumns = headerRow.length;
      var copyFile = templateFile.makeCopy();
      var copyId = copyFile.getId();
      var copyDoc = DocumentApp.openById(copyId);
      var copyBody = copyDoc.getActiveSection();

      for (var columnIndex = 0; columnIndex < numberOfColumns; columnIndex++) {
        headerValue = headerRow[columnIndex];
        activeCell = activeRow[columnIndex];
        activeCell = formatCell(activeCell);

        copyBody.replaceText('{{' + headerValue + '}}', activeCell);

        if (headerValue === FILE_NAME_COLUMN_NAME) {
          ID = activeCell;
        }
      }

      copyDoc.saveAndClose();
      var newFile = DriveApp.createFile(copyFile.getAs('application/pdf'));
      copyFile.setTrashed(true);
      newFile.setName(ID + ' - přihláška');

      if (APPLICATIONS_FOLDER_ID !== '') {
        DriveApp.getFolderById(APPLICATIONS_FOLDER_ID).addFile(newFile);
        DriveApp.removeFile(newFile);
      }
    }
  });

  ui.alert('Přihlášky byly uloženy na Google Disk');
}

function createReceipts() {
  var ui = SpreadsheetApp.getUi();

  if (RECEIPT_TEMPLATE_ID === '') {
    ui.alert('Musíš ve skriptu definovat RECEIPT_TEMPLATE_ID!');
    return;
  }

  var templateFile = DriveApp.getFileById(RECEIPT_TEMPLATE_ID);
  var activeSheet = SpreadsheetApp.getActiveSheet();
  var allRows = activeSheet.getDataRange().getValues();
  var headerRow = allRows.shift();

  allRows.forEach(function (row) {
    createReceipt(templateFile, headerRow, row);

    function createReceipt(templateFile, headerRow, activeRow) {
      var headerValue;
      var activeCell;
      var ID = null;
      var numberOfColumns = headerRow.length;
      var copyFile = templateFile.makeCopy();
      var copyId = copyFile.getId();
      var copyDoc = DocumentApp.openById(copyId);
      var copyBody = copyDoc.getActiveSection();

      for (var columnIndex = 0; columnIndex < numberOfColumns; columnIndex++) {
        headerValue = headerRow[columnIndex];
        activeCell = activeRow[columnIndex];
        activeCell = formatCell(activeCell);

        copyBody.replaceText('{{' + headerValue + '}}', activeCell);

        if (headerValue === FILE_NAME_COLUMN_NAME) {
          ID = activeCell;
        }
      }

      copyDoc.saveAndClose();
      copyFile.setName(ID + ' - ZDD');

      if (RECEIPTS_FOLDER_ID !== '') {
        DriveApp.getFolderById(RECEIPTS_FOLDER_ID).addFile(copyFile);
        DriveApp.removeFile(copyFile);
      }
    }
  });

  ui.alert('Koncepty ZDD byly uloženy na Google Disk');
}

function formatCell(value) {
  var newValue = value;

  if (newValue instanceof Date) {
    newValue = Utilities.formatDate(
      value,
      Session.getScriptTimeZone(),
      DATE_FORMAT,
    );
  } else if (typeof value === 'number') {
    newValue = Math.round(value * 100) / 100;
  }

  return newValue;
}
