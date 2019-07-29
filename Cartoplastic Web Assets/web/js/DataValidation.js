function hasValidChars(str, chars, caseSensitive) {
	if (!str.length) {
		return false;
	}
	if (!chars.length) {
		return false;
	}
	if (!caseSensitive) {
		str = str.toLowerCase();
		chars = chars.toLowerCase();
	}
	var cArr = str.split("");
	var len = cArr.length;
	var valid;
	for (var i = 0; i<len; i++) {
		if (chars.indexOf(cArr[i]) == -1) {
			return false;
		}
	}
	return true;
}
function isURL(str) {
	str = str.toLowerCase();
	// ignore anything after the query or anchor
	var querySpl = str.split("?");
	str = querySpl[0];
	var anchorSpl = str.split("#");
	str = anchorSpl[0];
	if (!hasValidChars(str, "0123456789abcdefghijklmnopqrstuvwxyz-.:%/@_")) {
		return false;
	}
	var protocolSpl = str.split("://");
	switch (protocolSpl[0]) {
	case "http" :
	case "https" :
	case "ftp" :
		str = protocolSpl[1];
		break;
	default :
		if (str.substr(0, 4) != "www.") {
			return false;
		}
	}
	var userPassSpl = str.split("@");
	if (userPassSpl.length>2) {
		return false;
	}
	if (userPassSpl == 2) {
		var passSpl = userPassSpl[0].split(":");
		if (passSpl.length>2) {
			return false;
		}
		str = userPassSpl[1];
	}
	if (!isLetterOrDigit(str.charAt(0))) {
		return false;
	}
	var firstSlashInd = str.indexOf("/");
	var percentInd = str.indexOf("%");
	var uScroreInd = str.indexOf("_");
	if ((percentInd>-1 && percentInd<firstSlashInd) || (uScroreInd>-1 && uScroreInd<firstSlashInd)) {
		return false;
	}
	var domain;
	var domainParts;
	if (firstSlashInd == -1) {
		domain = str;
	} else {
		domain = str.substr(0, firstSlashInd);
	}
	trace(domain);
	if (isIP(domain)) {
		return true;
	}
	domainParts = domain.split(".");
	var n = domainParts.length;
	if (domainParts[--n].length<2) {
		return false;
	}
	while (n--) {
		if (domainParts[n].length<1) {
			return false;
		}
	}
	return true;
}
function isEmail(str) {
	str = str.toLowerCase();
	if (!hasValidChars(str, "0123456789abcdefghijklmnopqrstuvwxyz-_.@")) {
		return false;
	}
	var parts = str.split("@");
	if (parts.length != 2) {
		return false;
	}
	if (parts[0].length<1) {
		return false;
	}
	var domain = parts[1].split(".");
	if (domain.length<2) {
		return false;
	}
	var ext = String(domain.pop());
	if (ext.length<2) {
		return false;
	}
	var i = domain.length;
	while (i--) {
		if (String(domain[i]).length<1) {
			return false;
		}
	}
	return true;
}
function isDigit(n) {
	return !isNaN(Number(n)) && String(n).length == 1;
}
function isLetter(n) {
	if (n.length != 1) {
		return false;
	}
	return "abcdefghijklmnopqrstuvwxyz".indexOf(n.toLowerCase()) != -1;
}
function isNotEmpty(str, allowWhite) {
	if (!allowWhite) {
		// faster than stipping out all white chars
		return parseInt(str+"1") != 1 || parseInt(str) == 1;
	}
	return (str.length>0);
}
function isNotDefault(str) {
	if (str == "0") {
		return false;
	} else {
		return true;
	}
}
function isDate(str, dayFirst) {
	if (!hasValidChars(str, "0123456789-/.")) {
		return false;
	}
	var dash = (str.indexOf("-") != -1);
	var slash = (str.indexOf("/") != -1);
	var period = (str.indexOf(".") != -1);
	var parts;
	if (dash && !slash && !period) {
		parts = str.split("-");
	} else if (slash && !dash && !period) {
		parts = str.split("/");
	} else if (period && !dash && !slash) {
		parts = str.split(".");
	} else {
		return false;
	}
	if (parts.length != 3) {
		return false;
	}
	if (parts[0].length>2 || parts[1].length>2) {
		return false;
	}
	var month, day;
	if (dayFirst == true) {
		day = Number(parts[0]);
		month = Number(parts[1]);
	} else {
		month = Number(parts[0]);
		day = Number(parts[1]);
	}
	var year = Number(parts[2]);
	var yearLen = String(parts[2]).length;
	if (yearLen == 2) {
		year = 2000+year;
	} else if (yearLen != 4) {
		return false;
	}
	if (!isIntegerInRange(month, 1, 12)) {
		return false;
	}
	var dt = new Date(year, month-1, day);
	if (dt.getMonth() != month-1) {
		return false;
	}
	return true;
}