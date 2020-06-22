<footer class="main-footer">
    <strong> &copy;
  <?php 
    $startYear = 2019; 
    $currentYear = date('Y');
    echo $startYear . (($startYear != $currentYear) ? ' - ' . $currentYear : '');
  ?> </strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Made with <i class="icon fa fa-heart"></i> @ nHub Nigeria.
    </div>
  </footer>