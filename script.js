let string = "";
let buttons = document.querySelectorAll('.button');
let previousExpressions = [];

function factorial(n) {
  if (n === 0 || n === 1) {
    return 1;

  } else {

    return n * factorial(n - 1);

  }
}

function percentage(n) {
  return n / 100;


}

function prev() {
  if (previousExpressions.length > 0) {
    return previousExpressions[previousExpressions.length - 1];
  }
  else {
    return '';
  }
}

function power(base, exponent) {
  return base ** exponent;
}


Array.from(buttons).forEach((button) => {
  button.addEventListener('click', (e) => {
    if (e.target.innerHTML == '=') {
      //power calculation
      if (!string.includes('^')) {

        string = eval(string);
        document.querySelector('input').value = string;
        previousExpressions.push(string);
      }
      else {

        const index = string.indexOf('^');
        const base = Number(string.slice(0, index));
        const exponent = Number(string.slice(index + 1));
        string = power(base, exponent);
        document.querySelector('input').value = string;

      }
    }
    else if (e.target.innerHTML === 'Clear') {
      string = "";
      document.querySelector('input').value = string;
    }
    //back 
    else if (e.target.innerHTML === 'Back') {
      string = string.slice(0, -1);
      document.querySelector('input').value = string;
    }
    //factorial
    else if (e.target.innerHTML === '!') {
      string = string + e.target.innerHTML;
      document.querySelector('input').value = string;
      number = string.slice(0, -1);
      string = factorial(number);
      document.querySelector('input').value = string;
    }
    //percentage
    else if (e.target.innerHTML === '%') {
      string = string + e.target.innerHTML;
      document.querySelector('input').value = string;
      num = string.slice(0, -1);
      string = percentage(num);
      document.querySelector('input').value = string;
    }
    //power

    else if (e.target.innerHTML === 'Pow') {
      string = string + '^';
      document.querySelector('input').value = string;
    }


    //prev
    else if (e.target.innerHTML === 'Prev') {
      string = prev();
      document.querySelector('input').value = string;
    }
    //down



    else {
      console.log(e.target)
      string = string + e.target.innerHTML;
      document.querySelector('input').value = string;
    }
  })
})
function handleKeyDown(event) {
  const inputField = document.querySelector('input');

  if (event.target === inputField) {
    if (event.key === 'ArrowUp') {
      // Go up through previous expressions
      if (currentIndex < previousExpressions.length - 1) {
        currentIndex++;
        string = previousExpressions[currentIndex];
        inputField.value = string;
      }
    } else if (event.key === 'ArrowDown') {
      // Go down through previous expressions
      if (currentIndex > 0) {
        currentIndex--;
        string = previousExpressions[currentIndex];
        inputField.value = string;
      } else if (currentIndex === 0) {
        currentIndex = -1; // Reset back to -1 when reaching the most recent expression
        string = "";
        inputField.value = string;
      }
    }
  }
}

document.addEventListener('keydown', handleKeyDown);
