var stringVariable = window.location.href;
domainName = stringVariable.substring(0, stringVariable.lastIndexOf('/'));
var commonOptions = {};
commonOptions.apiKey = "";
commonOptions.appName = "";
commonOptions.hashTemplate = true;
commonOptions.sott = "<SOTT>";
commonOptions.formValidationMessage = true;
commonOptions.verificationUrl = domainName+"";
commonOptions.resetPasswordUrl =domainName+"";
var LRObject = new LoginRadiusV2(commonOptions);