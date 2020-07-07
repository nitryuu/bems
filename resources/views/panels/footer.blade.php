<!-- BEGIN: Footer-->
@if($configData["mainLayoutType"] == 'horizontal')
    <footer class="footer {{ $configData['footerType'] }} footer-light navbar-shadow">
@else
    <footer class="footer {{ $configData['footerType'] }} footer-light">
@endif
    <p class="footer-text">
      Copyright: Internet of Things (IoT) Laboratory, Faculty of Engineering, Universitas Sebelas Maret 2020
      <br />
      Contact Us : iotlab@ft.uns.ac.id
    </p>
</footer>
<!-- END: Footer-->
