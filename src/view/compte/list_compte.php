

<?php $liste_compte=$data;?>


<!-- ============================================================== -->
<!-- header -->
<!-- ============================================================== -->

<?php include_once 'src/view/header.php'?>
<!-- ============================================================== -->
<!-- end header -->
<!-- ============================================================== -->


 <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <a href="../Admin/accueil" class="btn btn-primary"> <i class="fas fa-arrow-left"></i> </a>

                            <div class="page-header">
                               
                                   
                                <h2 class="pageheader-title " align="center">Liste des comtpes </h2>
                                

                            
                                
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->



<!-- ##############################################################################" -->



<!-- recent orders  -->
<!-- ============================================================== -->
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<a href="add_compte" class="btn btn-primary"><i class="fas fa-plus-square"></i></i> Ajouter un compte</a>
    <div class="card">
       
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table">
                    <thead class="bg-light">
                        <tr class="border-0">
                        <th>Numero</th>
                            <th>Solde</th>
                            <th>Nom Client</th>
                            <th>Prenom Client</th>
                            <th>Détails</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <!-- A afficher si aucun compte n'a été créé -->
                        <?php if(count($liste_compte)==0) { ?>
                            <tr>
                                <td class="font-italic text-center" colspan="5">
                                    Aucun compte n'a été créé!
                                </td>
                            </tr>
                            <?php } ?>
                          

                            <?php foreach ($liste_compte as $c) { ?>
                                <tr>
                                <td> <?=$c->getNumero()?> </td>
                                <td> <?=$c->getSolde()?> </td>
                                <td> <?=$c->getClient()->getNom()?> </td>
                                <td> <?=$c->getClient()->getPrenom()?> </td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-warning text-white ml-2"><i class="fa fa-edit"></i>Modifier</a>
                                    <a href="#" class="btn btn-sm btn-danger text-white ml-2"><i class="fa fa-trash"></i>Supprimer</a>
                                </td>
                            </tr>
                            <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- end recent orders  -->

<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<?php include_once 'src/view/footer.php'?>
<!-- ============================================================== -->
<!-- end footer -->
<!-- ============================================================== -->