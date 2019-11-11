for (let i = 1; i < 102; i++) {
  if (i % 3 === 0 && i % 5 === 0) {
    console.log("FizzBuzz");
  } else if (i % 5 === 0) {
    console.log("Buzz");
  } else if (i % 3 === 0) {
    console.log("Fizz");
  } else if (i > 100) {
    console.log("After this point you should stop drinking!");
  } else {
    console.log(i);
  }
}