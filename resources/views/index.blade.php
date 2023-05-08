<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Accept a payment</title>
    <meta name="description" content="A demo of a payment on Stripe" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="/css/checkout.css" />
    <link rel="stylesheet" href="/css/inputFileUser.css">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="/js/campClinc/pagarWorshopStripe.js"></script>
    <script src="/js/checkout.js" defer></script>
  </head>
  <body style="position: relative">

  <div class="modalWalletCreada" id="modalWalletCreada">
      <header class="headerModalWalletCreada">
          <img class="imgModalWalletCreada" src="/img/iconsuccess.png" alt="">
      </header>
      <div class="tituloModalWalletCreada" style="color: grey;margin-top:20px;margin-bottom:20px">
        Successful payment!
      </div>
      {{-- <div class="mensajeModalWalletCreada">
          account created successfully
      </div> --}}
  </div>

    <!-- Display a payment form -->
    <form id="payment-form">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <input type="text" id="email" placeholder="Enter email address" />
      <div id="payment-element">
        <!--Stripe.js injects the Payment Element-->
      </div>
      <button id="submit">
        <div class="spinner hidden" id="spinner"></div>
        <span id="button-text">Pay now</span>
      </button>
      <div id="payment-message" class="hidden"></div>
    </form>
  </body>
</html>