
const sidebar = document.getElementById('sidebar');
const closeBtn = document.getElementById('closeSidebar');
const openBtn = document.getElementById('openSidebar');

// Close sidebar
closeBtn.addEventListener('click', function () {
    sidebar.classList.add('hidden');       // collapse sidebar
    openBtn.classList.add('show');         // animate hamburger in
});

// Open sidebar
openBtn.addEventListener('click', function () {
    sidebar.classList.remove('hidden');    // expand sidebar
    openBtn.classList.remove('show');      // animate hamburger out
});

// property dynamic details 

document.getElementById('propertySelect').addEventListener('change', function () {
    const id = this.value;
    fetch(`/property/${id}/details`)
        .then(response => response.json())
        // .then(data => {
        //     console.log(data)
        // })
        .then(data => {
            document.getElementById('address').value = data.address;
            document.getElementById('city').value = data.city;
            document.getElementById('area').value = data.area;
            document.getElementById('size').value = data.size;
            document.getElementById('price').value = data.price;
            document.getElementById('measurement').value = data.measurement ;
            document.getElementById('measurement_id').value = data.measurement_id ;
        })
        .catch(error => console.log(error));
});



// dynamic pricing

    const sellingPriceInput = document.getElementById('price');
    const paidPriceInput = document.getElementById('paid_price');
    const remainingPriceInput = document.getElementById('remaining_price');

    // Function to calculate remaining price
    function updateRemainingPrice() {
        const selling = parseFloat(sellingPriceInput.value) || 0;
        const paid = parseFloat(paidPriceInput.value) || 0;
        const remaining = selling - paid;

        remainingPriceInput.value = remaining >= 0 ? remaining : 0; // Prevent negative
    }

    // Update when user types or changes either field
    sellingPriceInput.addEventListener('input', updateRemainingPrice);
    paidPriceInput.addEventListener('input', updateRemainingPrice);