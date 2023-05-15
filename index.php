<!-- net-pay-calculator.html -->
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Net Pay Calculator</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- A simple net pay calculator form -->
  <main>
    <h1>Net Pay Calculator</h1>
    <form id="net-pay-form">
      <div class="form-group">
        <label for="hours-worked">Hours Worked:</label>
        <input type="number" id="hours-worked" name="hours-worked" required>
      </div>
      <div class="form-group">
        <label for="hourly-pay">Hourly Pay:</label>
        <input type="number" step="0.01" id="hourly-pay" name="hourly-pay" required>
      </div>
      <div class="form-group">
        <label for="tax-rate">Tax Rate (%):</label>
        <input type="number" id="tax-rate" name="tax-rate" value="20">
      </div>
      <div class="form-group">
        <label for="national-insurance-rate">National Insurance (%):</label>
        <input type="number" id="national-insurance-rate" name="national-insurance-rate" value="12">
      </div>
      <div class="form-group">
        <label for="pension-contributions">Pension Contributions (%):</label>
        <input type="number" id="pension-contributions" name="pension-contributions" value="0">
      </div>
      <button type="submit">Calculate Net Pay</button>
    </form>
    <!-- Results will be displayed here -->
    <div id="net-pay-results"></div>
  </main>
  <!-- JavaScript code to calculate net pay -->
  <script>
    const netPayForm = document.getElementById('net-pay-form');
    const netPayResults = document.getElementById('net-pay-results');

    netPayForm.addEventListener('submit', function(event) {
      event.preventDefault();
      const hoursWorked = Number(document.getElementById('hours-worked').value);
      const hourlyPay = Number(document.getElementById('hourly-pay').value);
      const taxRate = Number(document.getElementById('tax-rate').value);
      const nationalInsuranceRate = Number(document.getElementById('national-insurance-rate').value);
      const pensionContributions = Number(document.getElementById('pension-contributions').value);

      const grossTotal = hoursWorked * hourlyPay;
      const tax = grossTotal * (taxRate / 100);
      const nationalInsurance = grossTotal * (nationalInsuranceRate / 100);
      const pension = pensionContributions;
      const netPay = grossTotal - tax - nationalInsurance - pension;

      netPayResults.innerHTML = `
        <p><strong>Gross Total:</strong> £${grossTotal.toFixed(2)}</p>
        <p><strong>Tax:</strong> £${tax.toFixed(2)}</p>
        <p><strong>National Insurance:</strong> £${nationalInsurance.toFixed(2)}</p>
        <p><strong>Pension Contributions:</strong> £${pension.toFixed(2)}</p>
        <p><strong>Net Pay:</strong> £${netPay.toFixed(2)}</p>
      `;
    });
  </script>
</body>
</html>