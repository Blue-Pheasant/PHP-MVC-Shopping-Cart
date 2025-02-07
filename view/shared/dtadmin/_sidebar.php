<div id="sidebar-wrapper" class="harmonic">
  <ul class="sidebar-nav">
    <li class="sidebar-brand">
      <a href="#">
        Hello, <?=(Security::GetLoggedUser() != null ? Security::GetLoggedUser()->getName() : 'Invitado')?>!
      </a>
    </li>
      <li>
        <a href="?c=home" class="<?=(($PAGE == 'Home') ? 'active' : '')?>">
          <i class="fa fa-dashboard" aria-hidden="true"></i> &nbsp; Bắt đầu
        </a>
      </li>
      <li>
        <a href="?c=customers" class="<?=(($PAGE == 'Customers') ? 'active' : '')?>">
          <i class="fas fa-users" aria-hidden="true"></i> &nbsp;Customers
        </a>
      </li>
      <li>
        <a href="?c=creditcards" class="<?=(($PAGE == 'CreditCards') ? 'active' : '')?>">
          <i class="far fa-credit-card" aria-hidden="true"></i>&nbsp; Credit card
        </a>
      </li>
      <li>
        <a href="?c=cardpayments" class="<?=(($PAGE == 'CardPayments') ? 'active' : '')?>">
          <i class="fas fa-money-check-alt" aria-hidden="true"></i>&nbsp; Card payment
        </a>
      </li>
      <li>
        <a href="?c=payments" class="<?=(($PAGE == 'Payments') ? 'active' : '')?>">
          <i class="far fa-money-bill-alt" aria-hidden="true"></i>&nbsp; Payment
        </a>
      </li>
  </ul>
</div>