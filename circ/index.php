<?php
/* This file is part of a copyrighted work; it is distributed with NO WARRANTY.
 * See the file COPYRIGHT.html for more details.
 */ 
  require_once("../shared/common.php");
  session_cache_limiter(null);
  $tab = "circulation";
  $nav = "searchform";
  $helpPage = "circulation";
  $focus_form_name = "barcodesearch";
  $focus_form_field = "searchText";

  require_once("../shared/logincheck.php");
  require_once("../shared/header.php");
  require_once("../classes/Localize.php");
  $loc = new Localize(OBIB_LOCALE,$tab);
?>


<div class="container-fluid">
  <h3><img src="../images/circ.png" border="0" width="30" height="30" align="top"> <?php echo $loc->getText("indexHeading"); ?></h3>

<!--
<form name="barcodesearch" method="POST" action="../circ/mbr_search.php">
<table class="primary">
  <tr>
    <th valign="top" nowrap="yes" align="left">
      <?php echo $loc->getText("indexCardHdr"); ?>
    </th>
  </tr>
  <tr>
    <td nowrap="true" class="primary">
      <?php echo $loc->getText("indexCard"); ?>
      <input type="text" name="searchText" size="20" maxlength="20">
      <input type="hidden" name="searchType" value="barcodeNmbr">
      <input type="submit" value="<?php echo $loc->getText("indexSearch"); ?>" class="button">
    </td>
  </tr>
</table>
</form>

<form name="phrasesearch" method="POST" action="../circ/mbr_search.php">
<table class="primary">
  <tr>
    <th valign="top" nowrap="yes" align="left">
      <?php echo $loc->getText("indexNameHdr"); ?>
    </td>
  </tr>
  <tr>
    <td nowrap="true" class="primary">
      <?php echo $loc->getText("indexName"); ?>
      <input type="text" name="searchText" size="30" maxlength="80">
      <input type="hidden" name="searchType" value="lastName">
      <input type="submit" value="<?php echo $loc->getText("indexSearch"); ?>" class="btn">
    </td>
  </tr>
</table>
</form>
-->

  <div class="row">
    <form name="phrasesearch" method="POST" action="../circ/mbr_search.php">
      <div class="form-group">
        <div>
          <h5>  
            <?php echo $loc->getText("indexCardHdr"); ?> 
          </h5>
        </div>    

        <div class="col-lg-6">
          <div class="input-group">
            <input type="text" name="searchText" class="form-control" placeholder="Numero de tarjeta">
            <input type="hidden" name="searchType" value="barcodeNmbr">
            <span class="input-group-btn">
              <input class="btn btn-primary" type="submit" value="<?php echo $loc->getText("indexSearch"); ?>">
              </input>
            </span>
          </div>
        </div>

            <!--  <div class="col-md-4 nav">
              <input type="text" name="searchText" class="form-control" placeholder="Numero de tarjeta">
              <input type="hidden" name="searchType" value="barcodeNmbr">
            </div>    
            <div class="col-md-2 nav">
              <input type="submit" value="<?php echo $loc->getText("indexSearch"); ?>" class="btn btn-primary">
            </div>-->
      </div>
    </form>
  </div>

  <div class="row">
    <form name="phrasesearch" method="POST" action="../circ/mbr_search.php">
      <div class="form-group">
        <div>
          <h5>
            <?php echo $loc->getText("indexNameHdr"); ?> 
          </h5>
        </div>

        <div class="col-lg-6">
          <div class="input-group">
            <input type="text" name="searchText" class="form-control" placeholder="Apellido">
            <input type="hidden" name="searchType" value="lastName">
            <span class="input-group-btn">
              <input class="btn btn-primary" type="submit" value="<?php echo $loc->getText("indexSearch"); ?>">
              </input>
            </span>
          </div>
        </div>



          <!--
          <div class="col-md-4 nav">
            <input type="text" name="searchText" class="form-control" placeholder="Apellido">
            <input type="hidden" name="searchType" value="lastName">
          </div>
          <div class="col-md-2 nav">
            <input type="submit" value="<?php echo $loc->getText("indexSearch"); ?>" class="btn btn-primary">
          </div>
          -->


      </div>
    </form>
  </div>

</div>


<?php include("../shared/footer.php"); ?>

