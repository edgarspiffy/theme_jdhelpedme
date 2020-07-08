document.querySelector('#calc').addEventListener('submit', calc);




function calc(e) {



  const P = document.querySelector('#principle').value;

  let r = document.querySelector('#interest').value;
  r = (r / 100) / 12;

  const N = document.querySelector('#repayment').value;

  const payments = document.querySelector('#payments');


  let top = (P * r) * Math.pow((1 + r), N);
  let bottom = Math.pow((1 + r), N) - 1;

  // const c = (((P * r) * Math.pow((1 + r), N)) / Math.pow((1 + r), N) - 1);
  let c = top / bottom;





  payments.value = c.toFixed(2);




  e.preventDefault();
}



