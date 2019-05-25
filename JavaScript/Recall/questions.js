var selectElementsStartingWithA = function (array) {
    let arr = [];
    for (i = 0; i < array.length; i++) {
        if (array[i][0] === "a") {
            arr.push(array[i])
        }
    }
    return arr;
}

var selectElementsStartingWithVowel = function (array) {
    let arr = [];
    for (i = 0; i < array.length; i++) {
        if (array[i][0] === "a") {
            arr.push(array[i])
        }
        else if (array[i][0] === "e") {
            arr.push(array[i])
        }
        else if (array[i][0] === "i") {
            arr.push(array[i])
        }
        else if (array[i][0] === "o") {
            arr.push(array[i])
        }
        else if (array[i][0] === "u") {
            arr.push(array[i])
        }
        else if (array[i][0] === "y") {
            arr.push(array[i])
        }
    }
    return arr;
}

var removeNullElements = function (array) {
    let arr = array;
    for (let i = 0; i < arr.length - 1; i++) {
        if (arr[i] === null) {
            arr.splice(i, 2)
        }
    }
    return arr;
}

var removeNullAndFalseElements = function (array) {
    let arr = array;
    for (let i = 0; i < arr.length - 1; i++) {
        if (arr[i] === null || arr[i] === false) {
            arr.splice(i, 3)
        }
    }
    return arr;
}

var reverseWordsInArray = function (array) {
    for (let i = 0; i < array.length; i++) {
        array[i] = array[i].split("");
        array[i] = array[i].reverse();
        array[i] = array[i].join("")
    }
    return array;
}

var everyPossiblePair = function (array) {
    let arrayTwo = [];
    let count = 0;
    for (let i = 0; i < array.length; i++) {
        count = i + 1;
        if (count > array.length - 1) {
            count = 0;
        }
        arrayTwo.push([array[i], array[count]]);
        arrayTwo[i].sort();
    }
    return arrayTwo.sort();
}

var allElementsExceptFirstThree = function (array) {
    return array.slice(3);
}

var addElementToBeginning = function (array, element) {
    array.unshift(element);
    return array
}

var sortByLastLetter = function (array) {
    return array.sort((a, b) => a.charCodeAt(a.length - 1) - b.charCodeAt(b.length - 1));;
}

var getFirstHalf = function (string) {
    return string.slice(0, 3, string.length / 2);
}

var makeNegative = function (number) {
    return -Math.abs(number);
}

var numberOfPalindromes = function (array) {
    let count = 0;
    for (let i = 0; i < array.length; i++) {
        array[i] = array[i].split("")
        if (array[i].join("") === array[i].reverse().join("")) {
            count++;
        }
    }
    return count
}
var shortestWord = function (array) {
    return array.filter(e => typeof e === 'string').sort((a, b) => a.length - b.length)[0];;
}

var longestWord = function (array) {
    return array.sort(function (a, b) { return b.length - a.length })[0];
}

var sumNumbers = function (array) {
    let num = array;
    let sum = 0;
    for (var i = 0; i < array.length; i++) {
        sum += num[i]
    }
    return sum;
}

var repeatElements = function (array) {
    return array.concat(array);
}

var stringToNumber = function (string) {
    return parseInt(string);
}

var calculateAverage = function (array) {
    let values = array;
    let count = values.length;
    values = values.reduce((previous, current) => current += previous);
    values /= count;
    return values;
}

var getElementsUntilGreaterThanFive = function (array) {
    let arr = [];
    for (let i = 0; i < array.length; i++) {
        if (array[i] >= 6) { break; }
        arr.push(array[i]);
    }
    return arr;
}

var convertArrayToObject = function (array) {
    let obj = {};
    for (let i = 0; i < array.length; i = i + 2) {
        obj[array[i]] = array[i + 1];
    }
    return obj;
}

var getAllLetters = function (array) {
    let arr = [];
    array.forEach(function (string) {
        if (arr.includes(string) === false){
        arr.push(string);
        }
    });

    let arr2 = [];
    arr.forEach(function (string) {
        arr2.push(string.split(''));
    });
    return arr2.join().split(',').sort();
};

var swapKeysAndValues = function (object) {
    let new_object = {};
    for (let prop in object) {
        if (object.hasOwnProperty(prop)) {
            let value = object[prop];
            new_object[value] = prop;
        }
    }
    return new_object;
}

var sumKeysAndValues = function (object) {
    let total = 0;
    for (let prop in object) {
        total += object[prop]
        total += parseInt(prop)
    }
    return total;
}

var removeCapitals = function (string) {
    let lowcase = string.toLowerCase().split('');
    let splitstr = string.split('');
    let res = [];
    for (let i = 0; i < splitstr.length; i++) {
        if (splitstr[i] === lowcase[i]) {
            res.push(splitstr[i]);
        }
    }
    return res.join('')
}

var roundUp = function (number) {
    return Math.ceil(number)
}

var formatDateNicely = function (date) {
    let a = new Date(date),
        month = (a.getMonth() + 1),
        day = a.getDate(),
        year = a.getFullYear();
    if (month.length = 2) month = '0' + month;
    if (day.length = 2) day = '0' + day;
    return [day, month, year].join('/');
}

var getDomainName = function (string) {
    let dom = string.split('@')[1];
    return dom.replace('.com', '');
}

var titleize = function (string) {

let titleCase = function(string) {
  var ary = [];
  string.split(' ').forEach(function(txt){
    txt.length > 3 ? ary.push(capitalizeString(txt)) : ary.push(txt);
  });
  return ary.join(' ');
};

let capAfterFullStops = function(string){
   var result = string.split('. ').map(function(subString) {
     return (capitalizeString(subString));
   });
   return result.join('. ');
 };

let capitalizeString = function(string) {
  return string[0].toUpperCase()+string.slice(1);
};

return capAfterFullStops(titleCase(string));
};


var checkForSpecialCharacters = function (string) {
    let result = string.match(/\W/g) !== null;
    return result;

}

var squareRoot = function (number) {
    return Math.sqrt(number)
}

var factorial = function (number) {
    let result = 1;
    for (let i = 2; i <= number; i++) {
        result = result * i;
    }
    return result;
}

var findAnagrams = function (string) {
    let a = string.split('');
    let result = [];
    a.forEach(function (letter) {
        remainder = a.filter(function (element) {
            return element != letter;
        });
        result.push(letter + remainder.join(''), letter + (remainder.reverse()).join(''));
    });
    return result.sort();
}

var convertToCelsius = function (number) {
    return Math.round((number - 32) * (5 / 9))
}

var letterPosition = function (array) {
    let arr = [];
    for (let i = 0; i < array.length; i++) {
        arr[i] = (array[i].charCodeAt()) - 64
        if (arr[i] > 26) {
            arr[i] -= 32;
        }
    }
    return arr;
}
