

<?php $liste_client=$data;?>



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
                               
                                   
                                <h2 class="pageheader-title " align="center">Liste des clients</h2>
                                

                            
                                
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->




<!-- ############################################################################################## -->


<!-- recent orders  -->
<!-- ============================================================== -->
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
<a href="add_client" class="btn btn-primary"><i class="fas fa-user-plus"></i> Ajouter un client</a>
    <div class="card">
       
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table">
                    <thead class="bg-light">
                        <tr class="border-0">
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Adresse</th>
                            <th>Numero</th>
                            <th>Détails</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- A afficher si aucun client n'a été créé -->
                        <?php if(count($liste_client)==0) { ?>
                        <tr>
                            <td class="font-italic text-center" colspan="5">
                                Aucun client n'a été ajouté!
                            </td>
                        </tr>
                        <?php } ?>

                        <?php foreach ($liste_client as $c) { ?>
                        <tr>
                            <td> <?=$c->getNom()?> </td>
                            <td> <?=$c->getPrenom()?> </td>
                            <td> <?=$c->getAdresse()?> </td>
                            <td> <?=$c->getNumero()?> </td>
                            <td>
                                <a href="#"
                                    class="btn btn-sm btn-success text-white squall"><i
                                    class="fab fa-fw fa-wpforms"></i>Compte(s)</a>
                                <a href="#"
                                    class="btn btn-sm btn-warning text-white ml-2"><i
                                    class="fa fa-edit"></i>Modifier</a>
                                <a href="#" class="btn btn-sm btn-danger text-white ml-2"><i
                                        class="fa fa-trash"></i>Supprimer</a>
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