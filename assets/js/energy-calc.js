/** @format */

let appliances = [];

function addAppliance() {
	const name = document.getElementById("appliance-name").value;
	const watts = parseFloat(document.getElementById("appliance-watts").value);
	const hours = parseFloat(document.getElementById("appliance-hours").value);

	if (!name || isNaN(watts) || isNaN(hours))
		return alert("Fill all fields correctly!");

	appliances.push({ name, watts, hours });
	renderAppliances();

	// clear inputs after adding
	document.getElementById("appliance-name").value = "";
	document.getElementById("appliance-watts").value = "";
	document.getElementById("appliance-hours").value = "";
}

function deleteAppliance(index) {
	appliances.splice(index, 1);
	renderAppliances();
}

function renderAppliances() {
	const list = document.getElementById("appliance-list");
	list.innerHTML = "";
	appliances.forEach((a, i) => {
		list.innerHTML += `
        <div style="display:flex; justify-content:space-between; align-items:center; padding:8px; background:#f1f5f9; border-radius:5px; margin-bottom:8px;">
          <span>🔌 <b>${a.name}</b> - ${a.watts}W × ${a.hours} hrs/day</span>
          <span style="color:red; cursor:pointer;" onclick="deleteAppliance(${i})">🗑</span>
        </div>
      `;
	});
}

function calculateSystem() {
	if (appliances.length === 0)
		return alert("Please add at least one appliance!");

	let totalLoad = 0;
	let totalEnergy = 0;

	appliances.forEach((a) => {
		totalLoad += a.watts;
		totalEnergy += a.watts * a.hours;
	});

	let inverterSize = (totalLoad / 800).toFixed(1); // assume PF 0.8
	let batteryCapacity = (totalEnergy / 12).toFixed(0); // 12V battery system

	document.getElementById("total-load").innerText = totalLoad;
	document.getElementById("total-energy").innerText = totalEnergy.toFixed(2);
	document.getElementById("inverter-size").innerText = inverterSize;
	document.getElementById("battery-capacity").innerText = batteryCapacity;

	document.getElementById("results").style.display = "block";
}
