// Swiper & Animations
document.addEventListener("DOMContentLoaded", () => {
	// Slider Hero
	const slider = document.getElementById("slider");
	const slides = document.querySelectorAll(".slide");
	const total = slides.length;
	let index = 0;
	let slideWidth = slides[0].offsetWidth;

	const nextSlide = () => {
		index++;
		slider.style.transition = "transform 0.7s ease-in-out";
		slider.style.transform = `translateX(-${slideWidth * index}px)`;

		// Loop seamlessly
		if (index === total - 1) {
			setTimeout(() => {
				slider.style.transition = "none";
				index = 0;
				slider.style.transform = `translateX(0px)`;
			}, 700); // match transition duration
		}
	};
	setInterval(nextSlide, 4000);
});

	
	const menuButton = document.querySelector("button.md\\:hidden");
	const mobileMenu = document.getElementById("mobile-menu");
	const menuItems = document.querySelectorAll(".mobile-menu-item");

	let menuOpen = false;

	menuButton.addEventListener("click", () => {
		menuOpen = !menuOpen;

		if (menuOpen) {
			// Show menu container
			mobileMenu.classList.remove("scale-y-0");
			mobileMenu.classList.add("scale-y-100");

			// Animate items one by one
			menuItems.forEach((item, index) => {
				setTimeout(() => {
					item.classList.remove("opacity-0", "translate-y-4");
					item.classList.add("opacity-100", "translate-y-0");
				}, index * 100); // 100ms delay between items
			});
		} else {
			// Hide items first
			menuItems.forEach((item, index) => {
				setTimeout(() => {
					item.classList.add("opacity-0", "translate-y-4");
					item.classList.remove("opacity-100", "translate-y-0");
				}, index * 50);
			});

			// Collapse menu container after items hide
			setTimeout(() => {
				mobileMenu.classList.add("scale-y-0");
				mobileMenu.classList.remove("scale-y-100");
			}, 300);
		}
	});

	// Close any open dropdowns when clicking outside
	document.addEventListener("click", (e) => {
		document.querySelectorAll(".desktop-submenu").forEach((menu) => {
			if (!menu.parentElement.contains(e.target)) {
				menu.classList.add("opacity-0", "invisible");
				menu.previousElementSibling
					.querySelector("svg")
					.classList.remove("rotate-180");
			}
		});
	});

	// Toggle desktop dropdown on click
	document.querySelectorAll(".desktop-dropdown").forEach((btn) => {
		btn.addEventListener("click", (e) => {
			e.preventDefault();
			const submenu = btn.nextElementSibling;
			const isVisible = !submenu.classList.contains("invisible");

			// Close all other dropdowns
			document.querySelectorAll(".desktop-submenu").forEach((menu) => {
				menu.classList.add("opacity-0", "invisible");
				menu.previousElementSibling
					.querySelector("svg")
					.classList.remove("rotate-180");
			});

			if (!isVisible) {
				submenu.classList.remove("opacity-0", "invisible");
				btn.querySelector("svg").classList.add("rotate-180");
			} else {
				submenu.classList.add("opacity-0", "invisible");
				btn.querySelector("svg").classList.remove("rotate-180");
			}
		});
	});

	// Mobile dropdown toggle
	const dropdownToggles = document.querySelectorAll(".dropdown-toggle");

	dropdownToggles.forEach((toggle) => {
		toggle.addEventListener("click", () => {
			const submenu = toggle.nextElementSibling;
			const arrow = toggle.querySelector("svg");
			if (submenu.classList.contains("hidden")) {
				submenu.classList.remove("hidden");
				arrow.classList.add("rotate-180");
			} else {
				submenu.classList.add("hidden");
				arrow.classList.remove("rotate-180");
			}
		});
	});

	// Sticky Header
	const headerContainer = document.getElementById("header-container");
	const stickyOffset = headerContainer.offsetTop;

	window.addEventListener("scroll", () => {
		if (window.scrollY > stickyOffset) {
			headerContainer.classList.add("sticky-active");
		} else {
			headerContainer.classList.remove("sticky-active");
		}
	});

	// Auto year
	document.getElementById("year").textContent = new Date().getFullYear();

	// energy saving calculaator
	window.calculateSavings = function () {
		let bill = parseFloat(document.getElementById("bill").value) || 0;
		let usage = parseFloat(document.getElementById("usage").value) || 0;
		let cost = parseFloat(document.getElementById("cost").value) || 0;

		if (bill <= 0 || usage <= 0 || cost <= 0) {
			document.getElementById("calcResult").innerHTML =
				'<p style="color:#f87171;">⚠ Please enter valid values to calculate.</p>';
			return;
		}

		// Simple estimation formula
		let yearlyBill = bill * 12;
		let solarSavings = yearlyBill * 0.6; // Assume 60% savings with solar
		let paybackYears = (yearlyBill / solarSavings).toFixed(1);

		document.getElementById("calcResult").innerHTML = `
    <div>
      <h3 class="text-2xl font-bold mb-4" style="color: var(--color-primary);">Your Results</h3>
      <p class="mb-2" style="color: var(--color-text-secondary);">Estimated Yearly Bill: <span class="font-semibold text-text-secondary">₦${yearlyBill.toLocaleString()}</span></p>
      <p class="mb-2" style="color: var(--color-text-secondary);">Estimated Yearly Savings: <span class="font-semibold text-text-secondary">₦${solarSavings.toLocaleString()}</span></p>
      <p style="color: var(--color-text-secondary);">Estimated Payback Period: <span class="font-semibold text-text-secondary">${paybackYears} years</span></p>
    </div>
  `;
	};
