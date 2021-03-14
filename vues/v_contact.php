<?php
/**
 * Vue Nous contacter
 *
 * PHP Version 7
 *
 * @category  B13
 * @package   ChocolateIn
 * @author    José GIL <jgil@ac-nice.fr>
 * @copyright 2020 José GIL
 * @license   José GIL
 * @version   GIT: <0>
 * @link      https://chocolatein.gil83.fr Contexte « Chocolate'in »
 */
?>
<section class="row mt-2">
    <?php
    if (isset($envoiReussi)) {
        if ($envoiReussi) {
            ?>
            <div class="alert alert-success col-12" role="alert">
                Votre message a bien été envoyé ! Nous reviendrons vers vous rapidement !
            </div>
            <?php
        } else {
            ?>
            <div class="alert alert-danger col-12" role="alert">
                L'envoi de votre message a rencontré un problème, merci de rééssayer dans quelques instants...
            </div>
            <?php
        }
    }
    ?>
    <h1 class="col-md-12">Nous contacter</h1>
    <article class="col-md-12"> 
        <form role="form" data-toggle="validator" class="card bg-light card-body mb-3 needs-validation" action="?uc=contact&action=envoiContact" method="post">
            <p>Entreprise, comité d'entreprise (CE), collectivité locale ou école ? Vous souhaitez passer une commande ou un devis pour un évenement particulier ?</p>
            <p>Vous pouvez nous appeler au <a href="tel:+33512345678"><i class="fas fa-phone-square-alt"></i> 05 12 34 56 78</a>, ou nous contacter au travers du formulaire ci-dessous.</p>
            <div class="form-group col-md-8 mx-auto">
                <div class="input-group mb-3">
                    <label id="labelident" for="ident" class="col-form-label mr-2">Qui êtes-vous ?</label>
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input name="ident" id="ident" type="text" class="form-control" placeholder="Prénom NOM ou Raison sociale" aria-describedby="labelident" value="<?= $personne ?>" required>
                    <div class="invalid-feedback text-center">Veuillez saisir des informations d'identication.</div>
                </div>    
            </div>
            <div class="form-group col-md-8 mx-auto">
                <div class="input-group mb-3">
                    <label id="labelstatut" for="statut" class="col-form-label mr-2">Quel est votre statut ?</label>
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-chart-bar"></i></span>
                    </div>
                    <select class="custom-select" name="statut" id="statut" aria-describedby="labelstatut">
                        <option value="Particulier" <?php if($statut==="Particulier") { echo 'selected'; } ?>>Particulier</option>
                        <option value="Entreprise" <?php if($statut==="Entreprise") { echo 'selected'; } ?>>Entreprise</option>
                        <option value="Comité d'entreprise (CE)" <?php if($statut==="Comité d'entreprise (CE)") { echo 'selected'; } ?>>Comité d'entreprise (CE)</option>
                        <option value="Collectivité locale" <?php if($statut==="Collectivité locale") { echo 'selected'; } ?>>Collectivité locale</option>
                        <option value="École" <?php if($statut==="École") { echo 'selected'; } ?>>École</option>
                        <option value="Autres" <?php if($statut==="Autres") { echo 'selected'; } ?>>Autres</option>
                    </select>
                </div>    
            </div>
            <div class="form-group col-md-8 mx-auto">
                <div class="input-group mb-3">
                    <label id="labelemail" for="email" class="col-form-label mr-2">Votre adresse de courriel :</label>
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-at"></i></span>
                    </div>
                    <input name="email" id="email" type="text" class="form-control" placeholder="Adresse de courriel" aria-describedby="labelemail" value="<?= $mail ?>" pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+\.[a-z]{2,}$" required>
                    <div class="invalid-feedback text-center">Veuillez saisir un email valide.</div>
                </div>
            </div>
            <div class="form-group col-md-8 mx-auto">
                <div class="input-group mb-3">
                    <label id="labeltel" for="tel" class="col-form-label mr-2">Votre numéro de téléphone :</label>
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
                    </div>
                    <input name="tel" id="tel" type="text" class="form-control" placeholder="0601020304 ou +33601020304" aria-describedby="labeltel" value="<?= $tel ?>" pattern="^(0|\+33)[1-9]{1}[0-9]{8}$|^$">
                    <div class="invalid-feedback text-center">Veuillez saisir un numéro de téléphone valide.</div>
                </div>    
            </div>
            <div class="form-group col-md-8 mx-auto">
                <div class="input-group mb-3">
                    <label id="labelville" for="ville" class="col-form-label mr-2">Votre ville :</label>
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-map-marked-alt"></i></span>
                    </div>
                    <input name="ville" id="ville" type="text" class="form-control" placeholder="Ville" aria-describedby="labelville" value="<?= $ville ?>" pattern="^[a-zA-Z -]+$|^$">
                    <div class="invalid-feedback text-center">Veuillez saisir un nom de ville valide.</div>
                </div>    
            </div>
            <div class="form-group col-md-8 mx-auto">
                <div class="input-group mb-3">
                    <label id="labelsite" for="site" class="col-form-label mr-2">Votre site web :</label>
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-globe-europe"></i></span>
                    </div>
                    <input name="site" id="site" type="text" class="form-control" placeholder="https://..." aria-describedby="labelsite" value="<?= $site ?>" pattern="https?://.+[a-z0-9.-]+\.[a-z]{2,}$">
                    <div class="invalid-feedback text-center">Veuillez saisir une URL valide.</div>
                </div>    
            </div>
            <div class="form-group col-md-8 mx-auto">
                <div class="input-group mb-3">
                    <label id="labelmsg" for="msg" class="col-form-label mr-2">Votre message :</label>
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-pen-fancy"></i></span>
                    </div>
                    <textarea name="msg" id="msg" class="form-control" placeholder="Votre message..." aria-describedby="labelmsg" rows="5" required><?= $message ?></textarea>
                    <div class="invalid-feedback text-center">Veuillez saisir un message.</div>
                </div>    
            </div>
            <div class="form-group col-md-8 mx-auto">
                <div class="input-group mb-3">
                    <button type="submit" class="btn btn-choc mx-auto">Envoyer <i class="fas fa-paper-plane"></i></button>
                </div>    
            </div>
            <div id="feedback"></div>
        </form>
    </article>
</section>