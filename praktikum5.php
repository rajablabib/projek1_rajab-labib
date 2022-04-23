<?php
    include_once "header.php";
    include_once "sidebar.php";
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div>
          <div class="col-sm-6">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"></h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
               <h1>Admin LTE</h1>
              </br> 
              <?php
class Dispenser {
    protected $volume;
    protected $hargasegelas;
    private $volumegelas;
    public $namaminuman;

    public function isi($vol){
        $this->volume = $vol;
        return $vol;
    }
    public function harga($har){
        $this->hargasegelas = $har;
        return $har;
    }
    public function volgel($vg){
        $this->volumegelas = $vg;
        return $vg;
    }
    function nama($nm){
        $this->namaminuman = $nm;
        return $nm;
    }
}

$gelas1 = new Dispenser();
echo '<br/>' .$gelas1 -> isi('100 L');
echo '<br/>' .$gelas1 -> harga('Rp 5000,-');
echo '<br/>' .$gelas1 -> volgel('5 L');
echo '<br/>' .$gelas1 -> nama('Le Minerale');
?>
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>

<?php
    include_once "footer.php";
?>