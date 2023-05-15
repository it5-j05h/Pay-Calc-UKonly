function calculateNetPay() {
	const hours = document.getElementById("hours").value;
	const rate = document.getElementById("rate").value;
	const taxRate = document.getElementById("tax").value / 100;
	const niRate = document.getElementById("national-insurance").value / 100;
	const pensionRate = document.getElementById("pension").value / 100;

	const grossPay = hours * rate;
	const tax = grossPay * taxRate;
	const ni = grossPay * niRate;
	const pension = grossPay * pensionRate;
	const deductions = tax + ni + pension;
	const netPay = grossPay - deductions;

	document.getElementById("gross-pay").innerHTML = `Gross Pay: £${grossPay.toFixed(2)}`;
	document.getElementById("deductions").innerHTML = `Deductions: £${deductions.toFixed(2)} (Tax: £${tax.toFixed(2)}, National Insurance: £${ni.toFixed(2)}, Pension Contributions: £${pension.toFixed(2)})`;
	document.getElementById("net-pay").innerHTML = `Net Pay: £${netPay.toFixed(2)}`;
}
