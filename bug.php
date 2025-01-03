function foo(a, b) {
  if (a === b) {
    return true;
  } else {
    return false; 
  }
}

//This function will return true if the input is 0, even if the input is not the same.
var result = foo(0, '0');
console.log(result); // Output: true