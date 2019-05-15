<!-- BEGIN CORE PLUGINS -->
{{ Html::script('admin/js/jquery.min.js')}}
{{ Html::script('admin/js/bootstrap.min.js')}}
{{ Html::script('admin/js/js.cookie.min.js')}}
{{ Html::script('admin/js/jquery.slimscroll.min.js')}}
{{ Html::script('admin/js/jquery.blockui.min.js')}}
{{ Html::script('admin/js/bootstrap-switch.min.js')}}
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
{{ Html::script('admin/js/moment.min.js')}}
{{ Html::script('admin/js/daterangepicker.min.js')}}
{{ Html::script('admin/js/morris.min.js')}}
{{ Html::script('admin/js/raphael-min.js')}}

{{ Html::script('admin/js/jquery.waypoints.min.js')}}
{{ Html::script('admin/js/jquery.counterup.min.js')}}
{{ Html::script('admin/js/datatable.js')}}
{{ Html::script('admin/js/datatables.min.js')}}
{{ Html::script('admin/js/datatables.bootstrap.js')}}

{{ Html::script('admin/js/select2.full.min.js')}}
{{ Html::script('admin/js/jquery.validate.min.js')}}
{{ Html::script('admin/js/additional-methods.min.js')}}
{{ Html::script('admin/js/bootstrap-datepicker.min.js')}}
{{ Html::script('admin/js/ckeditor/ckeditor.js')}}
{{ Html::script('admin/js/bootstrap-multiselect.js')}}
{{ Html::script('admin/js/bootstrap-fileinput.js')}}


<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
{{ Html::script('admin/js/app.min.js')}}
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
{{ Html::script('admin/js/dashboard.min.js')}}
{{ Html::script('admin/js/table-datatables-editable.min.js')}}
{{ Html::script('admin/js/form-validation.min.js')}}
{{ Html::script('admin/js/components-bootstrap-multiselect.min.js')}}

<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
{{ Html::script('admin/js/layout.min.js')}}
{{ Html::script('admin/js/demo.min.js')}}
{{ Html::script('admin/js/quick-sidebar.min.js')}}
{{ Html::script('admin/js/quick-nav.min.js')}}
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