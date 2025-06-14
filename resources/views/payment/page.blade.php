<!DOCTYPE html>
<html>
<head>
    <title>Pembayaran</title>
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>
</head>
<body>
    <h1>Bayar Sekarang</h1>
    <button id="pay-button">Bayar</button>

    <script type="text/javascript">
      var payButton = document.getElementById('pay-button');
      payButton.addEventListener('click', function () {
        window.snap.pay('{{ $snapToken }}', {
          onSuccess: function(result) {
            alert("Pembayaran berhasil!");
            console.log(result);
          },
          onPending: function(result) {
            alert("Menunggu pembayaran...");
            console.log(result);
          },
          onError: function(result) {
            alert("Pembayaran gagal!");
            console.log(result);
          },
          onClose: function() {
            alert('Kamu menutup popup pembayaran!');
          }
        });
      });
    </script>
</body>
</html>