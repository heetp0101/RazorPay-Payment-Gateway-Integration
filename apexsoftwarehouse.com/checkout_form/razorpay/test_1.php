<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>



<html>
    <body>
        
        <div class="spinner-container">
            <div class="spinner-text"><h3>Please wait while we process your request ..</h3></div>  
            <img class = "spinner" src="spinner.gif" alt="">
        </div>
        </body>
</html>

<style>
    .spinner-container{
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(255, 255, 255, 0.5);
}
.spinner-text{
    margin-left: 36.6%;
}
.spinner {
  position: absolute;
  height: auto;
  width: 50px;
  top: 50%;
  left: 50%;
  margin-top: -18%;
  margin-left: -3%;
  transform: translate(-50%, -50%);
}

</style>









<!-- <html>
        <div class="spinner-container">
            <div class="spinner-text"><h3>Loading ...</h3></div>   
            <img class = "spinner" src="spinner.gif" alt="">
        </div>
</html>

<style>
    .spinner-container {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(255, 255, 255, 0.5);
}

.spinner {
  position: absolute;
  height: auto;
  width: 50px;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

</style> -->




<!-- <style>
    .spinner {
    border: 16px solid #f3f3f3;
    border-top: 16px solid #3498db;
    border-radius: 50%;
    width: 120px;
    height: 120px;
    animation: spin 2s linear infinite;
    margin: auto;
    display: none;
    }

    @keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
} -->


<script>

    function init() {

                var amount = <?php echo $_POST['amount']*100; ?>; // Convert amount to paisa
                var currency = "INR";
                var name = "Apex Software House";
                var description = "Test Payment";
                var image = "apex.webp";
                var receipt = "order_rcptid_11";
                var key = "rzp_test_JAMMbmJuROZ0fz"; // Your Razorpay Key ID
                var prefill = {
                    name: "Apex Software House",
                    email: $("#email").val(),
                    // contact: $("#phone").val()
                };
                var notes = {
                    shipping_address: $("#shipping_address").val(),
                    // order_id: $("#order_id").val()
                };
                var options = {
                    key: key,
                    amount: amount,
                    currency: currency,
                    name: name,
                    description: description,
                    image: image,
                    receipt: receipt,
                    prefill: prefill,
                    notes: notes,
                    handler: function(response) {
                        // Handle success
                        // alert('Payment successful. Transaction ID: ' + response.razorpay_payment_id);
                        $pay_id=response.razorpay_payment_id;

                        const uname = "<?php echo $_POST['name'] ?>";
                        const email = "<?php echo $_POST['email']; ?>";
                        const phoneno = "<?php echo $_POST['phoneno'];?>";
                        const plan = "<?php echo $_POST['plan'];?>";

                
                        $.ajax({
                            type: "post",
                            url: "db.php",
                            data: {name: uname, email: email, phoneno: phoneno, amount: amount, plan:plan, payment_id:$pay_id},
                            success: function () {

                               $.ajax({
                                type: "post",
                                url: "send_mail.php",
                                data: {name: uname, email: email, phoneno: phoneno, amount: amount, plan:plan, payment_id:$pay_id},  
                                beforeSend: function(){
                                    $(".spinner-container").show();
                                },                
                                success: function (response) {
                                    $('.spinner-container').hide();                         
                                    window.location.href="thank_you.php";
                                }           
                               });
                            },
                            error: function()
                            {
                                alert("there is error");
                            }
                        });
                    },
                    prefill: {
                        'name': prefill.name,
                        'email': prefill.email,
                        // 'contact': prefill.contact
                    }
                };
                var rzp1 = new Razorpay(options);
                rzp1.on('payment.failed', function (response){
                        // alert(response.error.code);
                        // alert(response.error.description);
                        // alert(response.error.source);
                        // alert(response.error.step);
                        // alert(response.error.reason);
                        // alert(response.error.metadata.order_id);
                        alert("Your Transaction is Failed.  Please Try again ");

                        const uname = "<?php echo $_POST['name'] ?>";
                        const email = "<?php echo $_POST['email']; ?>";
                        const phoneno = "<?php echo $_POST['phoneno'];?>";
                        const plan = "<?php echo $_POST['plan'];?>";
                        $pay_fail = response.error.metadata.payment_id;

                        $.ajax({
                            type: "post",
                            url: "db.php",
                            data: {name: uname, email: email, phoneno: phoneno, plan: plan, amount: amount, payment_failure: $pay_fail},
                            dataType: "json",
                            success: function (response) {
                                alert("Payment Failure");
                            }
                        });
      

                });
                rzp1.open();
    
    }
// add an event listener to the window's onload event
    window.onload = init;

</script>

