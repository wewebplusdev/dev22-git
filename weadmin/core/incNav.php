<div class="divRightNav">
  <?php if ($valClassNav == 1) { ?>
    <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center">
      <tr>
        <th class="divRightNavTb" align="left"><span class="fontContantTbNav"><?php echo $valNav1 ?></span></th>
        <th class="divRightNavTb" align="right"><?php echo DateFormat(date('d-m-Y h:i:s')) ?></th>
      </tr>
    </table>
  <?php } else { ?>
    <table width="96%" border="0" cellspacing="0" cellpadding="0" align="center">
      <tr>
        <th class="divRightNavTb" align="left"><span class="fontContantTbNav"><a href="<?php echo $valLinkNav1 ?>" target="_self"><?php echo $valNav1 ?></a> <img src="../img/btn/nav.png" align="absmiddle" vspace="5" /> <?php echo $valNav2 ?></span></th>
        <th class="divRightNavTb" align="right">
          <table border="0" cellspacing="0" cellpadding="0" align="right">
            <tr>
              <th align="right"><input name="" type="text" class="inputContantTb" /></th>
              <th align="right"><img src="../img/btn/search.png" align="absmiddle" /></th>
            </tr>
          </table>


        </th>
      </tr>
    </table>
  <?php } ?>
</div>