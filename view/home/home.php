<script type="text/javascript">
  document.title = 'Bảng điều khiển';
</script> 

<div class="main_notification">
<div class="row">
  <div class="col-md-3">
    <div class="card card-stats card-warning">
      <div class="card-body ">
        <div class="row">
          <div class="col-5">
            <div class="icon-big text-center">
              <i class="fa fa-users"></i>
            </div>
          </div>
          <div class="col-7 d-flex align-items-center">
            <div class="numbers">
              <p class="card-category">Customer</p>
              <?php
                  $customers = Customer::GetAllCustomers();
                  $count = 0;
                  foreach($customers as $customer) { 
                    $count++;
                  }
                  echo '<h4 class="card-title"> ' . $count .' </h4>';
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card card-stats card-success">
      <div class="card-body ">
        <div class="row">
          <div class="col-5">
            <div class="icon-big text-center">
            <i class="fas fa-chart-bar"></i>
            </div>
          </div>
          <div class="col-7 d-flex align-items-center">
            <div class="numbers">
              <p class="card-category">Credit Card</p>
              <?php
                  $creditcards = CreditCard::GetAllCreditCards();
                  $count = 0;
                  foreach($creditcards as $creditcard) {
                    $count ++;
                  }
                  echo '<h4 class="card-title"> ' . $count . ' </h4>';
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card card-stats card-danger">
      <div class="card-body">
        <div class="row">
          <div class="col-5">
            <div class="icon-big text-center">
              <i class="far fa-newspaper"></i>
            </div>
          </div>
          <div class="col-7 d-flex align-items-center">
            <div class="numbers">
              <p class="card-category">Cart Payment</p>
                  <?php
                    $cartpayments = CardPayment::GetAllCardPayments();
                    $count = 0;
                    foreach($cartpayments as $cartpayment) {
                      $count ++;
                    }
                    echo '<h4 class="card-title"> ' . $count .' </h4>';
                  ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card card-stats card-primary">
      <div class="card-body ">
        <div class="row">
          <div class="col-5">
            <div class="icon-big text-center">
              <i class="far fa-check-circle"></i>
            </div>
          </div>
          <div class="col-7 d-flex align-items-center">
            <div class="numbers">
              <p class="card-category">Payment</p>
                <?php
                      $payments = Payment::GetAllPayments();
                      $count = 0;
                      foreach($payments as $payment) {
                        $count ++;
                      }
                      echo '<h4 class="card-title"> ' . $count .' </h4>';
                ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<?php
  for($i=0; $i<20;$i++) {
    echo '<br>';
  }
?>

<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <header class="panel-heading">
      </header>
      <div class="panel-body">
        <p class="col-lg-12 text-center">
          Copyright (C) <?=date('Y')?> - <a href="http://kevinrodriguez.io/">kevinrodriguez.io</a> 
        </p>
      </div>
    </section>
  </div>
</div>