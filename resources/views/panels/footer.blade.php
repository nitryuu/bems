<!-- BEGIN: Footer-->
@if($configData["mainLayoutType"] == 'horizontal')
    <footer class="footer {{ $configData['footerType'] }} footer-light navbar-shadow">
@else
    <footer class="footer {{ $configData['footerType'] }} footer-light">
@endif
    <p class="footer-text">
      COPYRIGHT : Laboratorium Internet of Things (IoT) Universitas Sebelas Maret
      <br />
      Contact Us : iotlab@ft.uns.ac.id
    </p>
</footer>
<!-- END: Footer-->
