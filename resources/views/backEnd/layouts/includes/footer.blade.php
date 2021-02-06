
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong> Developerd By<a target="_blank" href="https://www.gatewayit.net/"> Gateway IT</a>.</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark right-sidebar" style="background: url({{asset('backEnd/images/sidebar.jpg')}});background-size: cover;background-position: center;background-repeat: no-repeat;padding: 20px 0">
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview">
            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="nav-link">
             
              <img src="{{asset('backEnd/')}}/images/sign-out.png">
              <p>Logout</p>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
             </form>
            </a>
          </li>
          <!-- nav item end -->
          <li class="nav-item has-treeview">
            <a href="{{url('password/change')}}" class="nav-link">
              <img src="{{asset('backEnd/')}}/images/key.png">
              <p>Change Password</p>
            </a>
          </li>
          <!-- nav item end -->
      </ul>
    </nav>
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery UI 1.11.4 -->

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->


<script src="{{asset('backEnd')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Morris.js charts -->
<script src="{{asset('backEnd')}}/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="{{asset('backEnd')}}/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="{{asset('backEnd')}}/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{asset('backEnd')}}/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('backEnd')}}/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="{{asset('backEnd')}}/../../../../cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="{{asset('backEnd')}}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="{{asset('backEnd')}}/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('backEnd')}}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="{{asset('backEnd')}}/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->

<!-- select -->
<script src="{{asset('backEnd')}}/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('backEnd')}}/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('backEnd')}}/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- toastr js -->
<script src="{{asset('backEnd')}}/js/toastr.min.js"></script>
{!! Toastr::message() !!}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="{{asset('backEnd')}}/plugins/datatables/jquery.dataTables.js"></script>
<script src="{{asset('backEnd')}}/plugins/datatables/dataTables.bootstrap4.js"></script>
  <script>
  $(function () {
    $('#example1').DataTable({
      "oLanguage": {
      "sSearch": "<span>Find</span> _INPUT_" //search
      }
    });
  });
</script>
  <script src="{{asset('backEnd/')}}/plugins/summernote/summernote-lite.js"></script>
<!--camera js-->
<script>
      $('.summernote').summernote({
        height:250,
        callbacks: {
        // Clear all formatting of the pasted text
        onPaste: function (e) {
          var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');
          e.preventDefault();
          setTimeout( function(){
            document.execCommand( 'insertText', false, bufferText );
          }, 300 );

        }
    }
      });
  </script>
<script src="{{asset('backEnd')}}/plugins/select2/select2.full.min.js"></script>
<script>
  $(function () {
   $('.select2').select2()
       });
</script>
<script type="text/javascript">
        $('#proCategory').change(function(){
        var ajaxId = $(this).val();    
        if(ajaxId){
            $.ajax({
               type:"GET",
               url:"{{url('ajax-product-subcategory')}}?category_id="+ajaxId,
               success:function(res){               
                if(res){
                    $("#proSubcategory").empty();
                    $("#proSubcategory").append('<option>=====select your subcategory======</option>');
                    $.each(res,function(key,value){
                        $("#proSubcategory").append('<option value="'+key+'">'+value+'</option>');
                    });
               
                }else{
                   $("#proSubcategory").empty();
                }
               }
            });
        }else{
            $("#proSubcategory").empty();
            $("#proSubcategory").empty();
        }      
       });
        $('#proSubcategory').on('change',function(){
        var ajaxId = $(this).val();    
        if(ajaxId){
            $.ajax({
               type:"GET",
               url:"{{url('ajax-product-childsubcategory')}}?category_id="+ajaxId,
               success:function(res){               
                if(res){
                    $("#proChildcategory").empty();
                     $("#proChildcategory").append('<option value="0">=====select your childcategory======</option>');
                    $.each(res,function(key,value){
                        $("#proChildcategory").append('<option value="'+key+'">'+value+'</option>');
                    });
               
                }else{
                   $("#proChildcategory").empty();
                }
               }
            });
        }else{
            $("#proChildcategory").empty();
        }
            
       });
    </script>


<script type="text/javascript">

    $(document).ready(function() {

      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });

    });

</script>

</body>
</html>
