

loadEventListeners();

function loadEventListeners() {
  document.querySelector('#calc').addEventListener('submit', calculageMorgage);
}



function calculageMorgage(e) {
  let P = document.querySelector('#principle').value;
  let r = document.querySelector('#interest').value;
  let N = document.querySelector('#repayment').value;
  let i = document.querySelector('#insurance').value;
  let t = document.querySelector('#taxes').value;
  r = (r / 100) / 12;
  N = N * 12;

  let top = (P * r) * Math.pow((1 + r), N);
  let bottom = Math.pow((1 + r), N) - 1;

  let c = top / bottom;
  c = c.toFixed(2);

  displayMorgage(c, i, t);
  e.preventDefault();
}

function displayMorgage(results, i = 0, t = 0) {

  i = i / 12;
  i = i.toFixed(2);
  t = t / 12;
  t = t.toFixed(2);
  let total = Number(results) + Number(i) + Number(t);
  total = total.toFixed(2);

  let p = document.querySelector('.results');
  p.innerHTML = `
  <table>
    <tbody>
      <tr class='table-result'>
        <td>Your Total Montly Payments</td>
        <td>$${total}</td>
      </tr>
      <tr class='table-result'>
        <td>Your Monthly Principal + Interest</td>
        <td>$${results}</td>
      </tr>
      <tr class='table-result'> 
        <td>Your Monthly Taxes</td>
        <td>$${t}</td>
      </tr>
      <tr class='table-result'>
        <td>Your Monthly Insurance</td>
        <td>$${i}</td>
      </tr>
    </tbody>
  </table>
  `;
}





