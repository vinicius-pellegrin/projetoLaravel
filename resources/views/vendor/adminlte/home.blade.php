@extends('adminlte::layouts.app')

@section('htmlheader_title')
    @yield('contentheader_title')
@endsection

@section('main-content')
    <div class="container-fluid spark-screen">
        <div class="row">
            <div class="col-md-12">

                <!-- Default box -->
                <div class="box box-primary">
                    <div class="box-body">
                        @yield('content')
<!--colocando icones para testar mais tarde -->
<div class='row' >

<div class='col-md-3 col-sm-6 col-xs-12'>
        <div class="info-box">
        <!-- Apply any bg-* class to to the icon to color it -->
        <span class="info-box-icon bg-blue"><i class="fa fa-bookmarks"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Likes</span>
                <span class="info-box-number">93,139</span>
            </div><!-- /.info-box-content -->
        </div><!-- /.info-box -->
        </div>


        <div class='col-md-3 col-sm-6 col-xs-12'>
        
        
        <!-- Apply any bg-* class to to the info-box to color it -->
<div class="info-box bg-red">
        <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Likes</span>
          <span class="info-box-number">41,410</span>
          <!-- The progress section is optional -->
          <div class="progress">
            <div class="progress-bar" style="width: 70%"></div>
          </div>
          <span class="progress-description">
            70% Increase in 30 Days
          </span>
        </div><!-- /.info-box-content -->
        </div>
        
</div>

</div><!-- /.info-box -->

      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Labels</h3>
          <div class="box-tools pull-right">
            <span class="label label-default">8 New Messages</span>
          </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
          The body of the box
        </div><!-- /.box-body -->
      </div><!-- /.box -->

<!---    ------------------------             -->




    <div class="box box-solid box-default">
        <div class="overlay">
        
         <i class="fa fa-refresh fa-spin"></i>
            </div>
      

                    caregando...


             </div>
                    <!-- /.box-body -->


                    
                </div>
                <!-- /.box -->

            </div>
        </div>
    </div>
    </div>






    <script>
          $("#box-widget").activateBox();
      </script>

@endsection
