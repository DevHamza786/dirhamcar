<!-- Add this button to your checkout form in checkout.blade.php -->
<button id="checkout-button">Proceed to Payment</button>

<!-- Include this script at the bottom of your checkout.blade.php file -->
<script>
    const stripe = Stripe('sk_test_51OJbyaKdfzNVfHJyFJ4CjeK1mdUFBjXn2KcrPirBUXG46S8f08qce0SoTsQz5tmq2gYql6TRdCG21IxMMc390IEf00SOLMz6EW');
    const checkoutButton = document.getElementById('checkout-button');

    checkoutButton.addEventListener('click', () => {
        // Make an API request to your server to create a checkout session
        // Redirect to the returned session URL
        fetch('/create-checkout-session', {
            method: 'POST',
        })
        .then(response => response.json())
        .then(session => {
            return stripe.redirectToCheckout({ sessionId: session.id });
        })
        .then(result => {
            if (result.error) {
                alert(result.error.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
</script>
