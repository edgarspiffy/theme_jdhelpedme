<div id='calc'>
<div class="container">
  <div class="row">
    <div class="col-12 col-md-3">
      <form action="#" >
        <div class="form-row">
          <div class="col mb-3">

            <label for="principle">Morgage Amount ($)</label> <br>
            <input id='principle' type="number" placeholder='100,000' required><br>

            <label for="interest">Monthly Interest (%)</label><br>
            <input id='interest' step="0.01" type="number" placeholder='3.9' required><br>

            <label for="repayment">Morgage Period (Months)</label><br>
            <input id='repayment' type="number" placeholder='72' required><br>

            <input class='btn btn-calc' type="submit" value='Calculate'>
          </div>
        </div>
      </form>
    </div>
    <div class="col-12 col-md-6">
      <label for="payments" >Total Montly Payments</label><br>
      <input id='payments' type="number" placeholder='' disabled>
    </div>
  </div>
</div>
</div>
