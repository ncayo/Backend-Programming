const formatName = (name) => name.toLowerCase();

const getName = (name, callFormatName) => console.log(callFormatName(name));

getName("Cahyo", formatName);
