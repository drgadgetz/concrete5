<? defined('C5_EXECUTE') or die(_("Access Denied.")); ?> 
<?
$path = $fv->getRelativePath();
?>
<object width="500" height="42">
<param name="src" value="<?=$path?>">
<embed src="<?=$path?>" width="500" height="42" ></embed>
</object>