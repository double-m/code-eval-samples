var fs  = require("fs")
  , fileToProcess = process.argv[2];

if (!fileToProcess || fileToProcess.charAt(0)==='-') {
  fileToProcess = './input/void-file.txt';
}

fs.readFileSync(fileToProcess).toString().split('\n').forEach(function (line) {
  if (line !== "") {
    console.log(processLine(line));  
  }
});

function processLine(line) {
  return line;
}

exports.processLine = processLine;
