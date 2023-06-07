<!doctype html>
<html lang="zxx">
@include('landing_page.style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/css/multi-select-tag.css">
<script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag/dist/js/multi-select-tag.js"></script>
<style>
    /**
    * The CSS shown here will not be introduced in the Quickstart guide, but shows
    * how you can use CSS to style your Element's container.
    */
    .StripeElement {
        box-sizing: border-box;
        height: 40px;
        padding: 10px 12px;
        border: 1px solid transparent;
        border-radius: 4px;
        background-color: white;
        box-shadow: 0 1px 3px 0 #e6ebf1;
        -webkit-transition: box-shadow 150ms ease;
        transition: box-shadow 150ms ease;
    }

    .StripeElement--focus {
        box-shadow: 0 1px 3px 0 #cfd7df;
    }

    .StripeElement--invalid {
        border-color: #fa755a;
    }

    .StripeElement--webkit-autofill {
        background-color: #fefde5 !important;
    }

    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
</style>

<body>
    <div id="main-wrapper" class="wrapper-hidden z-index-100">

        @include('landing_page.Navigation-Menu')

        <section class="white-section blog-section single-post-section">
            <div class="container-fluid gray-section">
                <div class="container">
                    <div class="row">
                        <div class="col comments-col">
                            <div class="post-comments-wrapper gray-section">
                                <h6 class="comments-title">Payment</h6>
                                <form action="{{route('stripe.order')}}" method="post" id="payment-form"
                                    class="comment-form">
                                    @csrf
                                    <div class="input-row d-flex">
                                        <input type="text" name="text" placeholder="Name" required>
                                        <input type="email" name="email" placeholder="E-mail" required>
                                        <input type="text" name="phone" placeholder="Phone Numbrt" required>
                                    </div>
                                    <select name="pricing[]" id="countries" multiple>
                                        <option value="1">Starter</option>
                                        <option value="2">Silver</option>
                                        <option value="3">Gold</option>
                                        <option value="4">Platium</option>
                                    </select>
                                    <div class="form-row2">
                                        <label for="card-element">
                                            Credit or debit card
                                        </label>

                                        <div id="card-element">
                                            <!-- A Stripe Element will be inserted here. -->
                                        </div>
                                        <!-- Used to display form errors. -->
                                        <div id="card-errors" role="alert"></div>
                                    </div>
                                    <br>
                                    <button type="submit" class="btn btn-primary">Submit Payment</button>
                                    {{--
                                </form> --}}
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @include('landing_page.scripts')
    <script type="text/javascript">
        new MultiSelectTag('countries', {
        rounded: true, // default true
        shadow: true // default false
        })
        // Create a Stripe client.
            var stripe = Stripe('pk_test_51NFbr7E0grVaVRvA2o1T8Q9pE87UQQvM93zpHeZkc7Ho1SjgN2o8D3EjRDHVJeoPJLwoC0SIkZLEDJFC05ksnxjK00nHbBhm6B');
            // Create an instance of Elements.
            var elements = stripe.elements();
            // Custom styling can be passed to options when creating an Element.
            // (Note that this demo uses a wider set of styles than the guide below.)
            var style = {
              base: {
                color: '#32325d',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                  color: '#aab7c4'
                }
              },
              invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
              }
            };
            // Create an instance of the card Element.
            var card = elements.create('card', {style: style});
            // Add an instance of the card Element into the `card-element` <div>.
            card.mount('#card-element');
            // Handle real-time validation errors from the card Element.
            card.on('change', function(event) {
              var displayError = document.getElementById('card-errors');
              if (event.error) {
                displayError.textContent = event.error.message;
              } else {
                displayError.textContent = '';
              }
            });
            // Handle form submission.
            var form = document.getElementById('payment-form');
            form.addEventListener('submit', function(event) {
              event.preventDefault();
              stripe.createToken(card).then(function(result) {
                if (result.error) {
                  // Inform the user if there was an error.
                  var errorElement = document.getElementById('card-errors');
                  errorElement.textContent = result.error.message;
                } else {
                  // Send the token to your server.
                  stripeTokenHandler(result.token);
                }
              });
            });
            // Submit the form with the token ID.
            function stripeTokenHandler(token) {
              // Insert the token ID into the form so it gets submitted to the server
              var form = document.getElementById('payment-form');
              var hiddenInput = document.createElement('input');
              hiddenInput.setAttribute('type', 'hidden');
              hiddenInput.setAttribute('name', 'stripeToken');
              hiddenInput.setAttribute('value', token.id);
              form.appendChild(hiddenInput);
              // Submit the form
              form.submit();
            }
    </script>
</body>

</html>