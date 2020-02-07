


<!-- ============================================================== -->
<!-- header -->
<!-- ============================================================== -->
<?php 

$numero = $data[0];
$liste_client = $data[1];

// var_dump($data[1][0]->getNom());
// die();
include_once 'src/view/header.php'?>

<!-- ============================================================== -->
<!-- end header -->
<!-- ============================================================== -->




<!-- ============================================================== -->
<!-- pageheader  -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

        <a href="list_compte" class="btn btn-primary"> <i class="fas fa-arrow-left"></i> </a>

        <div class="page-header">


            <h2 class="pageheader-title " align="center">Création d'un compte</h2>




        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- end pageheader  -->
<!-- ============================================================== -->




<!-- ############################################################################################## -->







<div class="splash-container">
    <div class="card ">
        <div class="card-body">
            <form action="create_compte" method="post" class="needs-validation">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <label for="validationCustomUsername">Numéro de compte</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroupPrepend">#</span>
                            </div>
                            <input type="text" class="form-control" value="<?=$numero?>" name="numero"
                                aria-describedby="inputGroupPrepend" readonly>
                        </div>
                    </div>
                    <br>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                        <div class="form-group">
                            <label for="input-select">Client propriétaire</label>
                            <select name="id_client" class="form-control" id="input-select" required>
                                <option value="">-Selectionner un client-</option>
                                <?php foreach($liste_client as $c){?>
                                <option value="<?=$c->getId()?>"><?=$c->getNom()?> <?=$c->getPrenom()?>
                                </option>
                                <?php }?>
                            </select>
                        </div>

                    </div>

                    
                    <br>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <label for="solde">Solde</label>
                        <input type="text" class="form-control" name="solde"  required>
                        
                    </div>

                </div>
                <br>
                <br>



                <button name="save" class="btn btn-primary" type="submit">Créer</button>
            </form>
        </div>


    </div>
</div>


<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<<?php include_once 'src/view/footer.php'?>
<!-- ============================================================== -->
<!-- end footer -->
<!-- ============================================================== -->