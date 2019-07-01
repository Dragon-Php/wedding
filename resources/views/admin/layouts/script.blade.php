<!-- BEGIN CORE PLUGINS -->
{{ Html::script('assets/js/jquery.min.js')}}
{{ Html::script('assets/js/bootstrap.min.js')}}
{{ Html::script('assets/js/js.cookie.min.js')}}
{{ Html::script('assets/js/jquery.slimscroll.min.js')}}
{{ Html::script('assets/js/jquery.blockui.min.js')}}
{{ Html::script('assets/js/bootstrap-switch.min.js')}}
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
{{ Html::script('assets/js/moment.min.js')}}
{{ Html::script('assets/js/daterangepicker.min.js')}}
{{ Html::script('assets/js/morris.min.js')}}
{{ Html::script('assets/js/raphael-min.js')}}

{{ Html::script('assets/js/jquery.waypoints.min.js')}}
{{ Html::script('assets/js/jquery.counterup.min.js')}}
{{ Html::script('assets/js/datatable.js')}}
{{ Html::script('assets/js/datatables.min.js')}}
{{ Html::script('assets/js/datatables.bootstrap.js')}}

{{ Html::script('assets/js/select2.full.min.js')}}
{{ Html::script('assets/js/jquery.backstretch.min.js')}}
{{ Html::script('assets/js/jquery.validate.min.js')}}
{{ Html::script('assets/js/additional-methods.min.js')}}
{{ Html::script('assets/js/bootstrap-datepicker.min.js')}}
{{ Html::script('assets/js/ckeditor/ckeditor.js')}}
{{ Html::script('assets/js/bootstrap-multiselect.js')}}
{{ Html::script('assets/js/bootstrap-fileinput.js')}}


<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
{{ Html::script('assets/js/app.min.js')}}
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
@if(\Request::segment('1') == 'Admin')
{{ Html::script('assets/js/login.min.js')}}
@endif
{{ Html::script('assets/js/dashboard.min.js')}}
{{ Html::script('assets/js/table-datatables-editable.min.js')}}
{{ Html::script('assets/js/form-validation.min.js')}}
{{ Html::script('assets/js/components-bootstrap-multiselect.min.js')}}

<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
{{ Html::script('assets/js/layout.min.js')}}
{{ Html::script('assets/js/demo.min.js')}}
{{ Html::script('assets/js/quick-sidebar.min.js')}}
{{ Html::script('assets/js/quick-nav.min.js')}}
<!-- END THEME LAYOUT SCRIPTS -->
<script>
    $(document).ready(function()
    {
        $('#clickmewow').click(function()
        {
            $('#radio1003').attr('checked', 'checked');
        });
    })
</script>
<!-- Google Code for Universal Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-37564768-1', 'auto');
  ga('send', 'pageview');
</script>
<!-- End -->

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-W276BJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W276BJ');</script>
<!-- End -->

<script type="text/javascript">
  function getState(country_id){
    var state = '<option value="">Select State</option>';
    if(country_id != ''){
      $.ajax({
        url : '{{url("api/states/")}}/'+country_id,
        success : function(result){
          $('.states').html(result);
        }
      });
    } else {
      $('.states').html(state);
    } 


  }
</script>