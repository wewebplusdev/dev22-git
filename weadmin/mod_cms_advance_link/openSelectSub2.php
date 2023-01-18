<?
@include("../lib/session.php");
include("../lib/config.php");
include("../lib/connect.php");
include("../lib/function.php");
include("incModLang.php");
include("config.php");
		$sql_cat = "SELECT ";
		if($_REQUEST['inputLt']=="Thai"){
			$sql_cat .= "  ".$mod_tb_root_sub_group."_id,".$mod_tb_root_sub_group."_subject";
		}else if($_REQUEST['inputLt']=="Eng"){
			$sql_cat .= "  ".$mod_tb_root_sub_group."_id,".$mod_tb_root_sub_group."_subjecten";
		}else{
			$sql_cat .= " ".$mod_tb_root_sub_group."_id,".$mod_tb_root_sub_group."_subjectcn ";
		}
		$sql_cat .= "  FROM ".$mod_tb_root_sub_group." WHERE  ".$mod_tb_root_sub_group."_status !='Disable'    ";
		$sql_cat = $sql_cat."  AND ".$mod_tb_root_sub_group."_parentid ='".$_REQUEST['inputSubgroupID']."'   ";
	 	 $sql_cat = $sql_cat."  ORDER BY ".$mod_tb_root_sub_group."_order DESC  ";

?>
    <select name="inputSSubgroupID"  id="inputSSubgroupID"class="formSelectContantTb" >
        <option value="0"><?=$langMod["tit:selectsg"]?></option>
              <?
		$query_cat=wewebQueryDB($coreLanguageSQL,$sql_cat);
		while($row_cat=wewebFetchArrayDB($coreLanguageSQL,$query_cat)) {
		$row_catid=$row_cat[0];
		$valNamecShow=$row_cat[1];
		?>
        <option value="<?=$row_catid?>" <?  if($_REQUEST['inputTh']==$row_catid){ ?> selected="selected" <?  }?>><?=$valNamecShow?></option>
        <?  }?>

    </select>
<?
include("../lib/disconnect.php");
?>
