<?php
class DisFuncion {
	public function fourpositionsmobile($positionsm, &$positionasm, &$positionbsm, &$positioncsm, &$positiondsm, $positionacount, $positionbcount, $positionccount, $positiondcount, $positionahidden, $positionbhidden, $positionchidden, $positiondhidden) {
		$pat = "/[1-9]/i";
		$checkfor= false;
		foreach ($positionsm as &$valor) {
			if (preg_match ($pat, $valor)){
				$checkfor = true; 
			}
		}
		if ($checkfor == true) {
			$positionaf = '';
			$positionbf = '';
			$positioncf = '';
			$positiondf = '';
			$patra = "/a/i";
			$patrb = "/b/i";
			$patrc = "/c/i";
			$patrd = "/d/i";
			foreach ($positionsm as &$valor) {
				if (preg_match ($patra, $valor)){
					$positionaf= substr($valor, 1); 
				}elseif (preg_match ($patrb, $valor)){
					$positionbf= substr($valor, 1);; 
				}elseif (preg_match ($patrc, $valor)){
					$positioncf= substr($valor, 1); 
				}elseif (preg_match ($patrd, $valor)){
					$positiondf= substr($valor, 1);
				}
			}
			if ($positionahidden != 1) {
				$positionasm = "col-xs-0";
			}else {
				$positionasm = "col-xs-". $positionaf;
			}
			if ($positionbhidden != 1) {
				$positionbsm = "col-xs-0";
			}else {
				$positionbsm = "col-xs-". $positionbf;
			}
			if ($positionchidden != 1) {
				$positioncsm = "col-xs-0";
			}else {
				$positioncsm = "col-xs-". $positioncf;
			}
			if ($positiondhidden != 1) {
				$positiondsm = "col-xs-0";
			}else {
				$positiondsm = "col-xs-". $positiondf;
			}
		}else {
		if($positionacount && !$positionbcount && !$positionccount && !$positiondcount){
			if ($positionahidden == 1){
				$positionasm = "col-xs-12";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-0"; 
			}else {
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-0";
			}
		}else if ($positionacount && $positionbcount && !$positionccount && !$positiondcount){
			if (($positionahidden == 1) && ($positionbhidden == 1)){ 
				$positionasm = "col-xs-12";
				$positionbsm = "col-xs-12";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-0";
			}else if(($positionahidden == 1) && ($positionbhidden != 1)){
				$positionasm = "col-xs-12";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-0";
			} else if(($positionahidden != 1) && ($positionbhidden == 1)){
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-12";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-0";
			}else {
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-0";
			}
		}else if ($positionacount && $positionbcount && $positionccount && !$positiondcount){
			if (($positionahidden == 1) && ($positionbhidden == 1) && ($positionchidden == 1)){
				$positionasm = "col-xs-12";
				$positionbsm = "col-xs-12";
				$positioncsm = "col-xs-12";
				$positiondsm = "col-xs-0"; 
			}else if(($positionahidden == 1) && ($positionbhidden == 1) && ($positionchidden != 1)){
				$positionasm = "col-xs-12";
				$positionbsm = "col-xs-12";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-0";
			}else if(($positionahidden == 1) && ($positionbhidden != 1) && ($positionchidden == 1)){
				$positionasm = "col-xs-12";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-12";
				$positiondsm = "col-xs-0";
			}else if(($positionahidden == 1) && ($positionbhidden != 1) && ($positionchidden != 1)){
				$positionasm = "col-xs-12";
				$positionbsm = "col-xs-0 ";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-0";
			}else if(($positionahidden != 1) && ($positionbhidden == 1) && ($positionchidden == 1)){
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-12";
				$positioncsm = "col-xs-12";
				$positiondsm = "col-xs-0";
			}else if(($positionahidden != 1) && ($positionbhidden == 1) && ($positionchidden != 1)){
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-12";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-0";
			}else if(($positionahidden != 1) && ($positionbhidden != 1) && ($positionchidden == 1)){
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-12";
				$positiondsm = "col-xs-0";
			}else {
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-0";
			}
		}elseif (($positionacount && $positionbcount && $positionccount && $positiondcount)){
			if (($positionahidden == 1) && ($positionbhidden == 1) && ($positionchidden == 1) && ($positiondhidden == 1)){
				$positionasm = "col-xs-12";
				$positionbsm = "col-xs-12";
				$positioncsm = "col-xs-12";
				$positiondsm = "col-xs-12"; 
			}else if(($positionahidden == 1) && ($positionbhidden == 1) && ($positionchidden == 1) && ($positiondhidden != 1)){
				$positionasm = "col-xs-12";
				$positionbsm = "col-xs-12";
				$positioncsm = "col-xs-12";
				$positiondsm = "col-xs-0"; 
			}else if(($positionahidden == 1) && ($positionbhidden == 1) && ($positionchidden != 1) && ($positiondhidden == 1)){
				$positionasm = "col-xs-12";
				$positionbsm = "col-xs-12";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-12"; 
			}else if(($positionahidden == 1) && ($positionbhidden == 1) && ($positionchidden != 1) && ($positiondhidden != 1)){
				$positionasm = "col-xs-12";
				$positionbsm = "col-xs-12";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-0"; 
			}else if(($positionahidden == 1) && ($positionbhidden != 1) && ($positionchidden == 1) && ($positiondhidden == 1)){
				$positionasm = "col-xs-12";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-12";
				$positiondsm = "col-xs-12"; 
			}else if(($positionahidden == 1) && ($positionbhidden != 1) && ($positionchidden == 1) && ($positiondhidden != 1)){
				$positionasm = "col-xs-12";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-12";
				$positiondsm = "col-xs-0"; 
			}else if(($positionahidden == 1) && ($positionbhidden != 1) && ($positionchidden != 1) && ($positiondhidden == 1)){
				$positionasm = "col-xs-12";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-12"; 
			}else if(($positionahidden == 1) && ($positionbhidden != 1) && ($positionchidden != 1) && ($positiondhidden != 1)){
				$positionasm = "col-xs-12";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-0"; 
			}else if(($positionahidden != 1) && ($positionbhidden == 1) && ($positionchidden == 1) && ($positiondhidden == 1)){
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-12";
				$positioncsm = "col-xs-12";
				$positiondsm = "col-xs-12 "; 
			}else if(($positionahidden != 1) && ($positionbhidden == 1) && ($positionchidden == 1) && ($positiondhidden != 1)){
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-12";
				$positioncsm = "col-xs-12";
				$positiondsm = "col-xs-0"; 
			}else if(($positionahidden != 1) && ($positionbhidden == 1) && ($positionchidden != 1) && ($positiondhidden == 1)){
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-12";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-12"; 
			}else if(($positionahidden != 1) && ($positionbhidden == 1) && ($positionchidden != 1) && ($positiondhidden != 1)){
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-12";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-0"; 
			}else if(($positionahidden != 1) && ($positionbhidden != 1) && ($positionchidden == 1) && ($positiondhidden == 1)){
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-12";
				$positiondsm = "col-xs-12"; 
			}else if(($positionahidden != 1) && ($positionbhidden != 1) && ($positionchidden == 1) && ($positiondhidden != 1)){
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-12";
				$positiondsm = "col-xs-0"; 
			}else if(($positionahidden != 1) && ($positionbhidden != 1) && ($positionchidden != 1) && ($positiondhidden == 1)){
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-12"; 
			}else if(($positionahidden != 1) && ($positionbhidden != 1) && ($positionchidden != 1) && ($positiondhidden != 1)){
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-0"; 
			}
			
		}elseif ($positionacount && !$positionbcount && $positionccount && !$positiondcount){
			if (($positionahidden == 1) && ($positionchidden == 1)){ 
				$positionasm = "col-xs-12";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-12";
				$positiondsm = "col-xs-0";
			}else if(($positionahidden == 1) && ($positionchidden != 1)){
				$positionasm = "col-xs-12";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-0";
			} else if(($positionahidden != 1) && ($positionchidden == 1)){
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-12";
				$positiondsm = "col-xs-0";
			}else {
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-0";
			} 
		}elseif ($positionacount && !$positionbcount && !$positionccount && $positiondcount){
			if (($positionahidden == 1) && ($positiondhidden == 1)){ 
				$positionasm = "col-xs-12";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-12";
			}else if(($positionahidden == 1) && ($positiondhidden != 1)){
				$positionasm = "col-xs-12";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-0";
			} else if(($positionahidden != 1) && ($positiondhidden == 1)){
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-12";
			}else {
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-0";
			} 
		}elseif ($positionacount && $positionbcount && !$positionccount && $positiondcount){
			if (($positionahidden == 1) && ($positionbhidden == 1) && ($positiondhidden == 1)){
				$positionasm = "col-xs-12";
				$positionbsm = "col-xs-12";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-12"; 
			}else if(($positionahidden == 1) && ($positionbhidden == 1) && ($positiondhidden != 1)){
				$positionasm = "col-xs-12";
				$positionbsm = "col-xs-12";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-0";
			}else if(($positionahidden == 1) && ($positionbhidden != 1) && ($positiondhidden == 1)){
				$positionasm = "col-xs-12";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-12";
			}else if(($positionahidden == 1) && ($positionbhidden != 1) && ($positiondhidden != 1)){
				$positionasm = "col-xs-12";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-0";
			}else if(($positionahidden != 1) && ($positionbhidden == 1) && ($positiondhidden == 1)){
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-12";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-12";
			}else if(($positionahidden != 1) && ($positionbhidden == 1) && ($positiondhidden != 1)){
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-12";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-0";
			}else if(($positionahidden != 1) && ($positionbhidden != 1) && ($positiondhidden == 1)){
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-12";
			}else {
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-0";
			}
		}elseif ($positionacount && !$positionbcount && $positionccount && $positiondcount){
			if (($positionahidden == 1) && ($positionchidden == 1) && ($positiondhidden == 1)){
				$positionasm = "col-xs-12";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-12";
				$positiondsm = "col-xs-12"; 
			}else if(($positionahidden == 1) && ($positionchidden == 1) && ($positiondhidden != 1)){
				$positionasm = "col-xs-12";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-12";
				$positiondsm = "col-xs-0";
			}else if(($positionahidden == 1) && ($positionchidden != 1) && ($positiondhidden == 1)){
				$positionasm = "col-xs-12";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-12";
			}else if(($positionahidden == 1) && ($positionchidden != 1) && ($positiondhidden != 1)){
				$positionasm = "col-xs-12";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-0";
			}else if(($positionahidden != 1) && ($positionchidden == 1) && ($positiondhidden == 1)){
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-12";
				$positiondsm = "col-xs-12";
			}else if(($positionahidden != 1) && ($positiocbhidden == 1) && ($positiondhidden != 1)){
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-12";
				$positiondsm = "col-xs-0";
			}else if(($positionahidden != 1) && ($positionchidden != 1) && ($positiondhidden == 1)){
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-12";
			}else {
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-0";
			}
		}elseif (!$positionacount && $positionbcount && !$positionccount && !$positiondcount){
			if ($positionbhidden == 1){
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-12";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-0"; 
			}else {
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-0";
			}
		}elseif (!$positionacount && $positionbcount && $positionccount && !$positiondcount){
			if (($positionbhidden == 1) && ($positionchidden == 1)){ 
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-12";
				$positioncsm = "col-xs-12";
				$positiondsm = "col-xs-0";
			}else if(($positionbhidden == 1) && ($positionchidden != 1)){
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-12";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-0";
			} else if(($positionbhidden != 1) && ($positionchidden == 1)){
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-12";
				$positiondsm = "col-xs-0";
			}else {
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-0";
			}
		}elseif (!$positionacount && $positionbcount && !$positionccount && $positiondcount) {
			if (($positionbhidden == 1) && ($positiondhidden == 1)){ 
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-12";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-12";
			}else if(($positionbhidden == 1) && ($positiondhidden != 1)){
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-12";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-0";
			} else if(($positionbhidden != 1) && ($positiondhidden == 1)){
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-12";
			}else {
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-0";
			}
		}elseif (!$positionacount && $positionbcount && $positionccount && $positiondcount) {
			if (($positionbhidden == 1) && ($positionchidden == 1) && ($positiondhidden == 1)){
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-12";
				$positioncsm = "col-xs-12";
				$positiondsm = "col-xs-12";
			}else if(($positionbhidden == 1) && ($positionchidden == 1) && ($positiondhidden != 1)){
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-12";
				$positioncsm = "col-xs-12";
				$positiondsm = "col-xs-0";
			}else if(($positionbhidden == 1) && ($positionchidden != 1) && ($positiondhidden == 1)){
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-12";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-12";
			}else if(($positionbhidden == 1) && ($positionchidden != 1) && ($positiondhidden != 1)){
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-12";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-0";
			}else if(($positionbhidden != 1) && ($positionchidden == 1) && ($positiondhidden == 1)){
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-12";
				$positiondsm = "col-xs-12";
			}else if(($positionbhidden != 1) && ($positiocbhidden == 1) && ($positiondhidden != 1)){
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-12";
				$positiondsm = "col-xs-0";
			}else if(($positionbhidden != 1) && ($positionchidden != 1) && ($positiondhidden == 1)){
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-12";
			}else {
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-0";
			}
		}elseif (!$positionacount && !$positionbcount && $positionccount && !$positiondcount) {
			if ($positionchidden == 1){
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-12";
				$positiondsm = "col-xs-0"; 
			}else {
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-0";
			}
		}elseif (!$positionacount && !$positionbcount && $positionccount && $positiondcount) {
			if (($positionchidden == 1) && ($positiondhidden == 1)){ 
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-12";
				$positiondsm = "col-xs-12";
			}else if(($positionchidden == 1) && ($positiondhidden != 1)){
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-12";
				$positiondsm = "col-xs-0";
			} else if(($positionchidden != 1) && ($positiondhidden == 1)){
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-12";
			}else {
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-0";
			}
		}elseif (!$positionacount && !$positionbcount && !$positionccount && $positiondcount) {
			if ($positiondhidden == 1){
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-12";
			}else {
				$positionasm = "col-xs-0";
				$positionbsm = "col-xs-0";
				$positioncsm = "col-xs-0";
				$positiondsm = "col-xs-0";
			}
		}
		}
	}
	public function fourpositionstablet($positionsm, &$positionasm, &$positionbsm, &$positioncsm, &$positiondsm, $positionacount, $positionbcount, $positionccount, $positiondcount, $positionahidden, $positionbhidden, $positionchidden, $positiondhidden) {
		$pat = "/[1-9]/i";
		$checkfor= false;
		foreach ($positionsm as &$valor) {
			if (preg_match ($pat, $valor)){
				$checkfor = true; 
			}
		}
		if ($checkfor == true) {
			$positionaf = '';
			$positionbf = '';
			$positioncf = '';
			$positiondf = '';
			$patra = "/a/i";
			$patrb = "/b/i";
			$patrc = "/c/i";
			$patrd = "/d/i";
			foreach ($positionsm as &$valor) {
				if (preg_match ($patra, $valor)){
					$positionaf= substr($valor, 1); 
				}elseif (preg_match ($patrb, $valor)){
					$positionbf= substr($valor, 1);; 
				}elseif (preg_match ($patrc, $valor)){
					$positioncf= substr($valor, 1); 
				}elseif (preg_match ($patrd, $valor)){
					$positiondf= substr($valor, 1);
				}
			}
			if ($positionahidden != 1) {
				$positionasm = "col-sm-0";
			}else {
				$positionasm = "col-sm-". $positionaf;
			}
			if ($positionbhidden != 1) {
				$positionbsm = "col-sm-0";
			}else {
				$positionbsm = "col-sm-". $positionbf;
			}
			if ($positionchidden != 1) {
				$positioncsm = "col-sm-0";
			}else {
				$positioncsm = "col-sm-". $positioncf;
			}
			if ($positiondhidden != 1) {
				$positiondsm = "col-sm-0";
			}else {
				$positiondsm = "col-sm-". $positiondf;
			}
		}else {
		if($positionacount && !$positionbcount && !$positionccount && !$positiondcount){
			if ($positionahidden == 1){
				$positionasm = "col-sm-12";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-0"; 
			}else {
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-0";
			}
		}else if ($positionacount && $positionbcount && !$positionccount && !$positiondcount){
			if (($positionahidden == 1) && ($positionbhidden == 1)){ 
				$positionasm = "col-sm-6";
				$positionbsm = "col-sm-6";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-0";
			}else if(($positionahidden == 1) && ($positionbhidden != 1)){
				$positionasm = "col-sm-12";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-0";
			} else if(($positionahidden != 1) && ($positionbhidden == 1)){
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-12";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-0";
			}else {
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-0";
			}
		}else if ($positionacount && $positionbcount && $positionccount && !$positiondcount){
			if (($positionahidden == 1) && ($positionbhidden == 1) && ($positionchidden == 1)){
				$positionasm = "col-sm-4";
				$positionbsm = "col-sm-4";
				$positioncsm = "col-sm-4";
				$positiondsm = "col-sm-0"; 
			}else if(($positionahidden == 1) && ($positionbhidden == 1) && ($positionchidden != 1)){
				$positionasm = "col-sm-6";
				$positionbsm = "col-sm-6";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-0";
			}else if(($positionahidden == 1) && ($positionbhidden != 1) && ($positionchidden == 1)){
				$positionasm = "col-sm-6";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-6";
				$positiondsm = "col-sm-0";
			}else if(($positionahidden == 1) && ($positionbhidden != 1) && ($positionchidden != 1)){
				$positionasm = "col-sm-12";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-0";
			}else if(($positionahidden != 1) && ($positionbhidden == 1) && ($positionchidden == 1)){
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-6";
				$positioncsm = "col-sm-6";
				$positiondsm = "col-sm-0";
			}else if(($positionahidden != 1) && ($positionbhidden == 1) && ($positionchidden != 1)){
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-12";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-0";
			}else if(($positionahidden != 1) && ($positionbhidden != 1) && ($positionchidden == 1)){
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-12";
				$positiondsm = "col-sm-0";
			}else {
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-0";
			}
		}elseif (($positionacount && $positionbcount && $positionccount && $positiondcount)){
			if (($positionahidden == 1) && ($positionbhidden == 1) && ($positionchidden == 1) && ($positiondhidden == 1)){
				$positionasm = "col-sm-6";
				$positionbsm = "col-sm-6";
				$positioncsm = "col-sm-6";
				$positiondsm = "col-sm-6"; 
			}else if(($positionahidden == 1) && ($positionbhidden == 1) && ($positionchidden == 1) && ($positiondhidden != 1)){
				$positionasm = "col-sm-4";
				$positionbsm = "col-sm-4";
				$positioncsm = "col-sm-4";
				$positiondsm = "col-sm-0"; 
			}else if(($positionahidden == 1) && ($positionbhidden == 1) && ($positionchidden != 1) && ($positiondhidden == 1)){
				$positionasm = "col-sm-4";
				$positionbsm = "col-sm-4";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-4"; 
			}else if(($positionahidden == 1) && ($positionbhidden == 1) && ($positionchidden != 1) && ($positiondhidden != 1)){
				$positionasm = "col-sm-6";
				$positionbsm = "col-sm-6";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-0"; 
			}else if(($positionahidden == 1) && ($positionbhidden != 1) && ($positionchidden == 1) && ($positiondhidden == 1)){
				$positionasm = "col-sm-4";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-4";
				$positiondsm = "col-sm-4"; 
			}else if(($positionahidden == 1) && ($positionbhidden != 1) && ($positionchidden == 1) && ($positiondhidden != 1)){
				$positionasm = "col-sm-6";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-6";
				$positiondsm = "col-sm-0"; 
			}else if(($positionahidden == 1) && ($positionbhidden != 1) && ($positionchidden != 1) && ($positiondhidden == 1)){
				$positionasm = "col-sm-6";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-6"; 
			}else if(($positionahidden == 1) && ($positionbhidden != 1) && ($positionchidden != 1) && ($positiondhidden != 1)){
				$positionasm = "col-sm-12";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-0"; 
			}else if(($positionahidden != 1) && ($positionbhidden == 1) && ($positionchidden == 1) && ($positiondhidden == 1)){
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-4";
				$positioncsm = "col-sm-4";
				$positiondsm = "col-sm-4"; 
			}else if(($positionahidden != 1) && ($positionbhidden == 1) && ($positionchidden == 1) && ($positiondhidden != 1)){
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-6";
				$positioncsm = "col-sm-6";
				$positiondsm = "col-sm-0"; 
			}else if(($positionahidden != 1) && ($positionbhidden == 1) && ($positionchidden != 1) && ($positiondhidden == 1)){
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-6";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-6"; 
			}else if(($positionahidden != 1) && ($positionbhidden == 1) && ($positionchidden != 1) && ($positiondhidden != 1)){
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-6";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-0"; 
			}else if(($positionahidden != 1) && ($positionbhidden != 1) && ($positionchidden == 1) && ($positiondhidden == 1)){
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-6";
				$positiondsm = "col-sm-6"; 
			}else if(($positionahidden != 1) && ($positionbhidden != 1) && ($positionchidden == 1) && ($positiondhidden != 1)){
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-12";
				$positiondsm = "col-sm-0"; 
			}else if(($positionahidden != 1) && ($positionbhidden != 1) && ($positionchidden != 1) && ($positiondhidden == 1)){
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-6"; 
			}else if(($positionahidden != 1) && ($positionbhidden != 1) && ($positionchidden != 1) && ($positiondhidden != 1)){
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-0"; 
			}
			
		}elseif ($positionacount && !$positionbcount && $positionccount && !$positiondcount){
			if (($positionahidden == 1) && ($positionchidden == 1)){ 
				$positionasm = "col-sm-6";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-6";
				$positiondsm = "col-sm-0";
			}else if(($positionahidden == 1) && ($positionchidden != 1)){
				$positionasm = "col-sm-12";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-0";
			} else if(($positionahidden != 1) && ($positionchidden == 1)){
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-12";
				$positiondsm = "col-sm-0";
			}else {
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-0";
			} 
		}elseif ($positionacount && !$positionbcount && !$positionccount && $positiondcount){
			if (($positionahidden == 1) && ($positiondhidden == 1)){ 
				$positionasm = "col-sm-6";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-6";
			}else if(($positionahidden == 1) && ($positiondhidden != 1)){
				$positionasm = "col-sm-12";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-0";
			} else if(($positionahidden != 1) && ($positiondhidden == 1)){
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-12";
			}else {
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-0";
			} 
		}elseif ($positionacount && $positionbcount && !$positionccount && $positiondcount){
			if (($positionahidden == 1) && ($positionbhidden == 1) && ($positiondhidden == 1)){
				$positionasm = "col-sm-4";
				$positionbsm = "col-sm-4";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-4"; 
			}else if(($positionahidden == 1) && ($positionbhidden == 1) && ($positiondhidden != 1)){
				$positionasm = "col-sm-6";
				$positionbsm = "col-sm-6";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-0";
			}else if(($positionahidden == 1) && ($positionbhidden != 1) && ($positiondhidden == 1)){
				$positionasm = "col-sm-6";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-6";
			}else if(($positionahidden == 1) && ($positionbhidden != 1) && ($positiondhidden != 1)){
				$positionasm = "col-sm-12";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-0";
			}else if(($positionahidden != 1) && ($positionbhidden == 1) && ($positiondhidden == 1)){
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-6";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-6";
			}else if(($positionahidden != 1) && ($positionbhidden == 1) && ($positiondhidden != 1)){
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-12";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-0";
			}else if(($positionahidden != 1) && ($positionbhidden != 1) && ($positiondhidden == 1)){
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-12";
			}else {
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-0";
			}
		}elseif ($positionacount && !$positionbcount && $positionccount && $positiondcount){
			if (($positionahidden == 1) && ($positionchidden == 1) && ($positiondhidden == 1)){
				$positionasm = "col-sm-4";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-4";
				$positiondsm = "col-sm-4"; 
			}else if(($positionahidden == 1) && ($positionchidden == 1) && ($positiondhidden != 1)){
				$positionasm = "col-sm-6";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-6";
				$positiondsm = "col-sm-0";
			}else if(($positionahidden == 1) && ($positionchidden != 1) && ($positiondhidden == 1)){
				$positionasm = "col-sm-6";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-6";
			}else if(($positionahidden == 1) && ($positionchidden != 1) && ($positiondhidden != 1)){
				$positionasm = "col-sm-12";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-0";
			}else if(($positionahidden != 1) && ($positionchidden == 1) && ($positiondhidden == 1)){
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-6";
				$positiondsm = "col-sm-6";
			}else if(($positionahidden != 1) && ($positiocbhidden == 1) && ($positiondhidden != 1)){
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-12";
				$positiondsm = "col-sm-0";
			}else if(($positionahidden != 1) && ($positionchidden != 1) && ($positiondhidden == 1)){
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-12";
			}else {
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-0";
			}
		}elseif (!$positionacount && $positionbcount && !$positionccount && !$positiondcount){
			if ($positionbhidden == 1){
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-12";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-0"; 
			}else {
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-0";
			}
		}elseif (!$positionacount && $positionbcount && $positionccount && !$positiondcount){
			if (($positionbhidden == 1) && ($positionchidden == 1)){ 
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-6";
				$positioncsm = "col-sm-6";
				$positiondsm = "col-sm-0";
			}else if(($positionbhidden == 1) && ($positionchidden != 1)){
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-12";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-0";
			} else if(($positionbhidden != 1) && ($positionchidden == 1)){
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-12";
				$positiondsm = "col-sm-0";
			}else {
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-0";
			}
		}elseif (!$positionacount && $positionbcount && !$positionccount && $positiondcount) {
			if (($positionbhidden == 1) && ($positiondhidden == 1)){ 
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-6";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-6";
			}else if(($positionbhidden == 1) && ($positiondhidden != 1)){
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-12";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-0";
			} else if(($positionbhidden != 1) && ($positiondhidden == 1)){
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-12";
			}else {
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-0";
			}
		}elseif (!$positionacount && $positionbcount && $positionccount && $positiondcount) {
			if (($positionbhidden == 1) && ($positionchidden == 1) && ($positiondhidden == 1)){
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-4";
				$positioncsm = "col-sm-4";
				$positiondsm = "col-sm-4";
			}else if(($positionbhidden == 1) && ($positionchidden == 1) && ($positiondhidden != 1)){
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-6";
				$positioncsm = "col-sm-6";
				$positiondsm = "col-sm-0";
			}else if(($positionbhidden == 1) && ($positionchidden != 1) && ($positiondhidden == 1)){
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-6";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-6";
			}else if(($positionbhidden == 1) && ($positionchidden != 1) && ($positiondhidden != 1)){
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-12";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-0";
			}else if(($positionbhidden != 1) && ($positionchidden == 1) && ($positiondhidden == 1)){
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-6";
				$positiondsm = "col-sm-6";
			}else if(($positionbhidden != 1) && ($positiocbhidden == 1) && ($positiondhidden != 1)){
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-12";
				$positiondsm = "col-sm-0";
			}else if(($positionbhidden != 1) && ($positionchidden != 1) && ($positiondhidden == 1)){
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-12";
			}else {
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-0";
			}
		}elseif (!$positionacount && !$positionbcount && $positionccount && !$positiondcount) {
			if ($positionchidden == 1){
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-12";
				$positiondsm = "col-sm-0"; 
			}else {
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-0";
			}
		}elseif (!$positionacount && !$positionbcount && $positionccount && $positiondcount) {
			if (($positionchidden == 1) && ($positiondhidden == 1)){ 
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-6";
				$positiondsm = "col-sm-6";
			}else if(($positionchidden == 1) && ($positiondhidden != 1)){
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-12";
				$positiondsm = "col-sm-0";
			} else if(($positionchidden != 1) && ($positiondhidden == 1)){
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-12";
			}else {
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-0";
			}
		}elseif (!$positionacount && !$positionbcount && !$positionccount && $positiondcount) {
			if ($positiondhidden == 1){
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-12";
			}else {
				$positionasm = "col-sm-0";
				$positionbsm = "col-sm-0";
				$positioncsm = "col-sm-0";
				$positiondsm = "col-sm-0";
			}
		}
		}
	}
	public function fourpositionsbig($positionmd, &$positionamd, &$positionbmd, &$positioncmd, &$positiondmd, $positionacount, $positionbcount, $positionccount, $positiondcount, $positionahidden, $positionbhidden, $positionchidden, $positiondhidden) {
		$pat = "/[1-9]/i";
		$checkfor= false;
		foreach ($positionmd as &$valor) {
			if (preg_match ($pat, $valor)){
				$checkfor = true; 
			}
		}
		if ($checkfor == true) {
			$positionaf = '';
			$positionbf = '';
			$positioncf = '';
			$positiondf = '';
			$patra = "/a/i";
			$patrb = "/b/i";
			$patrc = "/c/i";
			$patrd = "/d/i";
			foreach ($positionmd as &$valor) {
				if (preg_match ($patra, $valor)){
					$positionaf= substr($valor, 1); 
				}elseif (preg_match ($patrb, $valor)){
					$positionbf= substr($valor, 1);; 
				}elseif (preg_match ($patrc, $valor)){
					$positioncf= substr($valor, 1); 
				}elseif (preg_match ($patrd, $valor)){
					$positiondf= substr($valor, 1);
				}
			}
			if ($positionahidden != 1) {
				$positionamd = "col-md-0";
			}else {
				$positionamd = "col-md-". $positionaf;
			}
			if ($positionbhidden != 1) {
				$positionbmd = "col-md-0";
			}else {
				$positionbmd = "col-md-". $positionbf;
			}
			if ($positionchidden != 1) {
				$positioncmd = "col-md-0";
			}else {
				$positioncmd = "col-md-". $positioncf;
			}
			if ($positiondhidden != 1) {
				$positiondmd = "col-md-0";
			}else {
				$positiondmd = "col-md-". $positiondf;
			}
		}else {
			if($positionacount && !$positionbcount && !$positionccount && !$positiondcount){
				if ($positionahidden == 1){
					$positionamd = "col-md-12";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-0"; 
				}else {
					$positionamd = "col-md-0";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-0";
				}
			}else if ($positionacount && $positionbcount && !$positionccount && !$positiondcount){
				if (($positionahidden == 1) && ($positionbhidden == 1)){ 
					$positionamd = "col-md-6";
					$positionbmd = "col-md-6";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-0";
				}else if(($positionahidden == 1) && ($positionbhidden != 1)){
					$positionamd = "col-md-12";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-0";
				} else if(($positionahidden != 1) && ($positionbhidden == 1)){
					$positionamd = "col-md-0";
					$positionbmd = "col-md-12";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-0";
				}else {
					$positionamd = "col-md-0";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-0";
				}
			}else if ($positionacount && $positionbcount && $positionccount && !$positiondcount){
				if (($positionahidden == 1) && ($positionbhidden == 1) && ($positionchidden == 1)){
					$positionamd = "col-md-4";
					$positionbmd = "col-md-4";
					$positioncmd = "col-md-4";
					$positiondmd = "col-md-0"; 
				}else if(($positionahidden == 1) && ($positionbhidden == 1) && ($positionchidden != 1)){
					$positionamd = "col-md-6";
					$positionbmd = "col-md-6";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-0";
				}else if(($positionahidden == 1) && ($positionbhidden != 1) && ($positionchidden == 1)){
					$positionamd = "col-md-6";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-6";
					$positiondmd = "col-md-0";
				}else if(($positionahidden == 1) && ($positionbhidden != 1) && ($positionchidden != 1)){
					$positionamd = "col-md-12";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-0";
				}else if(($positionahidden != 1) && ($positionbhidden == 1) && ($positionchidden == 1)){
					$positionamd = "col-md-0";
					$positionbmd = "col-md-6";
					$positioncmd = "col-md-6";
					$positiondmd = "col-md-0";
				}else if(($positionahidden != 1) && ($positionbhidden == 1) && ($positionchidden != 1)){
					$positionamd = "col-md-0";
					$positionbmd = "col-md-12";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-0";
				}else if(($positionahidden != 1) && ($positionbhidden != 1) && ($positionchidden == 1)){
					$positionamd = "col-md-0";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-12";
					$positiondmd = "col-md-0";
				}else {
					$positionamd = "col-md-0";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-0";
				}
			}elseif (($positionacount && $positionbcount && $positionccount && $positiondcount)){
				if (($positionahidden == 1) && ($positionbhidden == 1) && ($positionchidden == 1) && ($positiondhidden == 1)){
					$positionamd = "col-md-3";
					$positionbmd = "col-md-3";
					$positioncmd = "col-md-3";
					$positiondmd = "col-md-3"; 
				}else if(($positionahidden == 1) && ($positionbhidden == 1) && ($positionchidden == 1) && ($positiondhidden != 1)){
					$positionamd = "col-md-4";
					$positionbmd = "col-md-4";
					$positioncmd = "col-md-4";
					$positiondmd = "col-md-0"; 
				}else if(($positionahidden == 1) && ($positionbhidden == 1) && ($positionchidden != 1) && ($positiondhidden == 1)){
					$positionamd = "col-md-4";
					$positionbmd = "col-md-4";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-4"; 
				}else if(($positionahidden == 1) && ($positionbhidden == 1) && ($positionchidden != 1) && ($positiondhidden != 1)){
					$positionamd = "col-md-6";
					$positionbmd = "col-md-6";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-0"; 
				}else if(($positionahidden == 1) && ($positionbhidden != 1) && ($positionchidden == 1) && ($positiondhidden == 1)){
					$positionamd = "col-md-4";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-4";
					$positiondmd = "col-md-4"; 
				}else if(($positionahidden == 1) && ($positionbhidden != 1) && ($positionchidden == 1) && ($positiondhidden != 1)){
					$positionamd = "col-md-6";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-6";
					$positiondmd = "col-md-0"; 
				}else if(($positionahidden == 1) && ($positionbhidden != 1) && ($positionchidden != 1) && ($positiondhidden == 1)){
					$positionamd = "col-md-6";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-6"; 
				}else if(($positionahidden == 1) && ($positionbhidden != 1) && ($positionchidden != 1) && ($positiondhidden != 1)){
					$positionamd = "col-md-12";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-0"; 
				}else if(($positionahidden != 1) && ($positionbhidden == 1) && ($positionchidden == 1) && ($positiondhidden == 1)){
					$positionamd = "col-md-0";
					$positionbmd = "col-md-4";
					$positioncmd = "col-md-4";
					$positiondmd = "col-md-4"; 
				}else if(($positionahidden != 1) && ($positionbhidden == 1) && ($positionchidden == 1) && ($positiondhidden != 1)){
					$positionamd = "col-md-0";
					$positionbmd = "col-md-6";
					$positioncmd = "col-md-6";
					$positiondmd = "col-md-0"; 
				}else if(($positionahidden != 1) && ($positionbhidden == 1) && ($positionchidden != 1) && ($positiondhidden == 1)){
					$positionamd = "col-md-0";
					$positionbmd = "col-md-6";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-6"; 
				}else if(($positionahidden != 1) && ($positionbhidden == 1) && ($positionchidden != 1) && ($positiondhidden != 1)){
					$positionamd = "col-md-0";
					$positionbmd = "col-md-6";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-0"; 
				}else if(($positionahidden != 1) && ($positionbhidden != 1) && ($positionchidden == 1) && ($positiondhidden == 1)){
					$positionamd = "col-md-0";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-6";
					$positiondmd = "col-md-6"; 
				}else if(($positionahidden != 1) && ($positionbhidden != 1) && ($positionchidden == 1) && ($positiondhidden != 1)){
					$positionamd = "col-md-0";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-12";
					$positiondmd = "col-md-0"; 
				}else if(($positionahidden != 1) && ($positionbhidden != 1) && ($positionchidden != 1) && ($positiondhidden == 1)){
					$positionamd = "col-md-0";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-6"; 
				}else if(($positionahidden != 1) && ($positionbhidden != 1) && ($positionchidden != 1) && ($positiondhidden != 1)){
					$positionamd = "col-md-0";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-0"; 
				}
				
			}elseif ($positionacount && !$positionbcount && $positionccount && !$positiondcount){
				if (($positionahidden == 1) && ($positionchidden == 1)){ 
					$positionamd = "col-md-6";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-6";
					$positiondmd = "col-md-0";
				}else if(($positionahidden == 1) && ($positionchidden != 1)){
					$positionamd = "col-md-12";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-0";
				} else if(($positionahidden != 1) && ($positionchidden == 1)){
					$positionamd = "col-md-0";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-12";
					$positiondmd = "col-md-0";
				}else {
					$positionamd = "col-md-0";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-0";
				} 
			}elseif ($positionacount && !$positionbcount && !$positionccount && $positiondcount){
				if (($positionahidden == 1) && ($positiondhidden == 1)){ 
					$positionamd = "col-md-6";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-6";
				}else if(($positionahidden == 1) && ($positiondhidden != 1)){
					$positionamd = "col-md-12";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-0";
				} else if(($positionahidden != 1) && ($positiondhidden == 1)){
					$positionamd = "col-md-0";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-12";
				}else {
					$positionamd = "col-md-0";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-0";
				} 
			}elseif ($positionacount && $positionbcount && !$positionccount && $positiondcount){
				if (($positionahidden == 1) && ($positionbhidden == 1) && ($positiondhidden == 1)){
					$positionamd = "col-md-4";
					$positionbmd = "col-md-4";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-4"; 
				}else if(($positionahidden == 1) && ($positionbhidden == 1) && ($positiondhidden != 1)){
					$positionamd = "col-md-6";
					$positionbmd = "col-md-6";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-0";
				}else if(($positionahidden == 1) && ($positionbhidden != 1) && ($positiondhidden == 1)){
					$positionamd = "col-md-6";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-6";
				}else if(($positionahidden == 1) && ($positionbhidden != 1) && ($positiondhidden != 1)){
					$positionamd = "col-md-12";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-0";
				}else if(($positionahidden != 1) && ($positionbhidden == 1) && ($positiondhidden == 1)){
					$positionamd = "col-md-0";
					$positionbmd = "col-md-6";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-6";
				}else if(($positionahidden != 1) && ($positionbhidden == 1) && ($positiondhidden != 1)){
					$positionamd = "col-md-0";
					$positionbmd = "col-md-12";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-0";
				}else if(($positionahidden != 1) && ($positionbhidden != 1) && ($positiondhidden == 1)){
					$positionamd = "col-md-0";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-12";
				}else {
					$positionamd = "col-md-0";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-0";
				}
				
			}elseif ($positionacount && !$positionbcount && $positionccount && $positiondcount){
				if (($positionahidden == 1) && ($positionchidden == 1) && ($positiondhidden == 1)){
					$positionamd = "col-md-4";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-4";
					$positiondmd = "col-md-4"; 
				}else if(($positionahidden == 1) && ($positionchidden == 1) && ($positiondhidden != 1)){
					$positionamd = "col-md-6";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-6";
					$positiondmd = "col-md-0";
				}else if(($positionahidden == 1) && ($positionchidden != 1) && ($positiondhidden == 1)){
					$positionamd = "col-md-6";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-6";
				}else if(($positionahidden == 1) && ($positionchidden != 1) && ($positiondhidden != 1)){
					$positionamd = "col-md-12";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-0";
				}else if(($positionahidden != 1) && ($positionchidden == 1) && ($positiondhidden == 1)){
					$positionamd = "col-md-0";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-6";
					$positiondmd = "col-md-6";
				}else if(($positionahidden != 1) && ($positiocbhidden == 1) && ($positiondhidden != 1)){
					$positionamd = "col-md-0";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-12";
					$positiondmd = "col-md-0";
				}else if(($positionahidden != 1) && ($positionchidden != 1) && ($positiondhidden == 1)){
					$positionamd = "col-md-0";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-12";
				}else {
					$positionamd = "col-md-0";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-0";
				}
			}elseif (!$positionacount && $positionbcount && !$positionccount && !$positiondcount){
				if ($positionbhidden == 1){
					$positionamd = "col-md-0";
					$positionbmd = "col-md-12";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-0"; 
				}else {
					$positionamd = "col-md-0";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-0";
				}
			}elseif (!$positionacount && $positionbcount && $positionccount && !$positiondcount){
				if (($positionbhidden == 1) && ($positionchidden == 1)){ 
					$positionamd = "col-md-0";
					$positionbmd = "col-md-6";
					$positioncmd = "col-md-6";
					$positiondmd = "col-md-0";
				}else if(($positionbhidden == 1) && ($positionchidden != 1)){
					$positionamd = "col-md-0";
					$positionbmd = "col-md-12";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-0";
				} else if(($positionbhidden != 1) && ($positionchidden == 1)){
					$positionamd = "col-md-0";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-12";
					$positiondmd = "col-md-0";
				}else {
					$positionamd = "col-md-0";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-0";
				}
			}elseif (!$positionacount && $positionbcount && !$positionccount && $positiondcount) {
				if (($positionbhidden == 1) && ($positiondhidden == 1)){ 
					$positionamd = "col-md-0";
					$positionbmd = "col-md-6";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-6";
				}else if(($positionbhidden == 1) && ($positiondhidden != 1)){
					$positionamd = "col-md-0";
					$positionbmd = "col-md-12";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-0";
				} else if(($positionbhidden != 1) && ($positiondhidden == 1)){
					$positionamd = "col-md-0";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-12";
				}else {
					$positionamd = "col-md-0";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-0";
				}
			}elseif (!$positionacount && $positionbcount && $positionccount && $positiondcount) {
				if (($positionbhidden == 1) && ($positionchidden == 1) && ($positiondhidden == 1)){
					$positionamd = "col-md-0";
					$positionbmd = "col-md-4";
					$positioncmd = "col-md-4";
					$positiondmd = "col-md-4";
				}else if(($positionbhidden == 1) && ($positionchidden == 1) && ($positiondhidden != 1)){
					$positionamd = "col-md-0";
					$positionbmd = "col-md-6";
					$positioncmd = "col-md-6";
					$positiondmd = "col-md-0";
				}else if(($positionbhidden == 1) && ($positionchidden != 1) && ($positiondhidden == 1)){
					$positionamd = "col-md-0";
					$positionbmd = "col-md-6";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-6";
				}else if(($positionbhidden == 1) && ($positionchidden != 1) && ($positiondhidden != 1)){
					$positionamd = "col-md-0";
					$positionbmd = "col-md-12";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-0";
				}else if(($positionbhidden != 1) && ($positionchidden == 1) && ($positiondhidden == 1)){
					$positionamd = "col-md-0";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-6";
					$positiondmd = "col-md-6";
				}else if(($positionbhidden != 1) && ($positiocbhidden == 1) && ($positiondhidden != 1)){
					$positionamd = "col-md-0";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-12";
					$positiondmd = "col-md-0";
				}else if(($positionbhidden != 1) && ($positionchidden != 1) && ($positiondhidden == 1)){
					$positionamd = "col-md-0";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-12";
				}else {
					$positionamd = "col-md-0";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-0";
				}
			}elseif (!$positionacount && !$positionbcount && $positionccount && !$positiondcount) {
				if ($positionchidden == 1){
					$positionamd = "col-md-0";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-12";
					$positiondmd = "col-md-0"; 
				}else {
					$positionamd = "col-md-0";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-0";
				}
			}elseif (!$positionacount && !$positionbcount && $positionccount && $positiondcount) {
				if (($positionchidden == 1) && ($positiondhidden == 1)){ 
					$positionamd = "col-md-0";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-6";
					$positiondmd = "col-md-6";
				}else if(($positionchidden == 1) && ($positiondhidden != 1)){
					$positionamd = "col-md-0";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-12";
					$positiondmd = "col-md-0";
				} else if(($positionchidden != 1) && ($positiondhidden == 1)){
					$positionamd = "col-md-0";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-12";
				}else {
					$positionamd = "col-md-0";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-0";
				}
			}elseif (!$positionacount && !$positionbcount && !$positionccount && $positiondcount) {
				if ($positiondhidden == 1){
					$positionamd = "col-md-0";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-12";
				}else {
					$positionamd = "col-md-0";
					$positionbmd = "col-md-0";
					$positioncmd = "col-md-0";
					$positiondmd = "col-md-0";
				}
			}
		}
	}
	public function mediumpositionsmobile(&$positionam, &$positionbm, &$positioncm, &$positiondm, &$positionm, $positionamcount, $positionbmcount, $positioncmcount, $positiondmcount, $positionahidden, $positionbhidden, $positionchidden, $positiondhidden, $positionehidden) {
		if($positionamcount && !$positionbmcount && !$positioncmcount && !$positiondmcount){
				if ($positionahidden == 1){
					$positionam = "col-xs-12";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-0";
					$positionm = "col-xs-12"; 
				}else {
					$positionam = "col-xs-0";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-0";
					$positionm = "col-xs-12";
				}
			}else if ($positionamcount && $positionbmcount && !$positioncmcount && !$positiondmcount){
				if (($positionahidden == 1) && ($positionbhidden == 1)){ 
					$positionam = "col-xs-12";
					$positionbm = "col-xs-12";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-0";
					$positionm = "col-xs-12";
				}else if(($positionahidden == 1) && ($positionbhidden != 1)){
					$positionam = "col-xs-12";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-0";
					$positionm = "col-xs-12";
				} else if(($positionahidden != 1) && ($positionbhidden == 1)){
					$positionam = "col-xs-0";
					$positionbm = "col-xs-12";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-0";
					$positionm = "col-xs-12";
				}else {
					$positionam = "col-xs-0";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-0";
				}
			}else if ($positionamcount && $positionbmcount && $positioncmcount && !$positiondmcount){
				if (($positionahidden == 1) && ($positionbhidden == 1) && ($positionchidden == 1)){
					$positionam = "col-xs-12";
					$positionbm = "col-xs-12";
					$positioncm = "col-xs-12";
					$positiondm = "col-xs-0";
					$positionm = "col-xs-12"; 
				}else if(($positionahidden == 1) && ($positionbhidden == 1) && ($positionchidden != 1)){
					$positionam = "col-xs-12";
					$positionbm = "col-xs-12";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-0";
					$positionm = "col-xs-12";
				}else if(($positionahidden == 1) && ($positionbhidden != 1) && ($positionchidden == 1)){
					$positionam = "col-xs-12";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-12";
					$positiondm = "col-xs-0";
					$positionm = "col-xs-12";
				}else if(($positionahidden == 1) && ($positionbhidden != 1) && ($positionchidden != 1)){
					$positionam = "col-xs-12";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-0";
					$positionm = "col-xs-12";
				}else if(($positionahidden != 1) && ($positionbhidden == 1) && ($positionchidden == 1)){
					$positionam = "col-xs-0";
					$positionbm = "col-xs-12";
					$positioncm = "col-xs-12";
					$positiondm = "col-xs-0";
					$positionm = "col-xs-12";
				}else if(($positionahidden != 1) && ($positionbhidden == 1) && ($positionchidden != 1)){
					$positionam = "col-xs-0";
					$positionbm = "col-xs-12";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-0";
					$positionm = "col-xs-12";
				}else if(($positionahidden != 1) && ($positionbhidden != 1) && ($positionchidden == 1)){
					$positionam = "col-xs-0";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-12";
					$positiondm = "col-xs-0";
					$positionm = "col-xs-12";
				}else {
					$positionam = "col-xs-0";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-0";
				}
			}elseif (($positionamcount && $positionbmcount && $positioncmcount && $positiondmcount)){
				if (($positionahidden == 1) && ($positionbhidden == 1) && ($positionchidden == 1) && ($positiondhidden == 1)){
					$positionam = "col-xs-12";
					$positionbm = "col-xs-12";
					$positioncm = "col-xs-12";
					$positiondm = "col-xs-12";
					$positionm = "col-xs-12"; 
				}else if(($positionahidden == 1) && ($positionbhidden == 1) && ($positionchidden == 1) && ($positiondhidden != 1)){
					$positionam = "col-xs-12";
					$positionbm = "col-xs-12";
					$positioncm = "col-xs-12";
					$positiondm = "col-xs-0"; 
					$positionm = "col-xs-12";
				}else if(($positionahidden == 1) && ($positionbhidden == 1) && ($positionchidden != 1) && ($positiondhidden == 1)){
					$positionam = "col-xs-12";
					$positionbm = "col-xs-12";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-12"; 
					$positionm = "col-xs-12";
				}else if(($positionahidden == 1) && ($positionbhidden == 1) && ($positionchidden != 1) && ($positiondhidden != 1)){
					$positionam = "col-xs-12";
					$positionbm = "col-xs-12";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-0"; 
					$positionm = "col-xs-12";
				}else if(($positionahidden == 1) && ($positionbhidden != 1) && ($positionchidden == 1) && ($positiondhidden == 1)){
					$positionam = "col-xs-12";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-12";
					$positiondm = "col-xs-12"; 
					$positionm = "col-xs-12";
				}else if(($positionahidden == 1) && ($positionbhidden != 1) && ($positionchidden == 1) && ($positiondhidden != 1)){
					$positionam = "col-xs-12";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-12";
					$positiondm = "col-xs-0";
					$positionm = "col-xs-12"; 
				}else if(($positionahidden == 1) && ($positionbhidden != 1) && ($positionchidden != 1) && ($positiondhidden == 1)){
					$positionam = "col-xs-12";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-12";
					$positionm = "col-xs-12"; 
				}else if(($positionahidden == 1) && ($positionbhidden != 1) && ($positionchidden != 1) && ($positiondhidden != 1)){
					$positionam = "col-xs-12";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-0";
					$positionm = "col-xs-12"; 
				}else if(($positionahidden != 1) && ($positionbhidden == 1) && ($positionchidden == 1) && ($positiondhidden == 1)){
					$positionam = "col-xs-0";
					$positionbm = "col-xs-12";
					$positioncm = "col-xs-12";
					$positiondm = "col-xs-12"; 
					$positionm = "col-xs-12";
				}else if(($positionahidden != 1) && ($positionbhidden == 1) && ($positionchidden == 1) && ($positiondhidden != 1)){
					$positionam = "col-xs-0";
					$positionbm = "col-xs-12";
					$positioncm = "col-xs-12";
					$positiondm = "col-xs-0";
					$positionm = "col-xs-12"; 
				}else if(($positionahidden != 1) && ($positionbhidden == 1) && ($positionchidden != 1) && ($positiondhidden == 1)){
					$positionam = "col-xs-0";
					$positionbm = "col-xs-12";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-12";
					$positionm = "col-xs-12"; 
				}else if(($positionahidden != 1) && ($positionbhidden == 1) && ($positionchidden != 1) && ($positiondhidden != 1)){
					$positionam = "col-xs-0";
					$positionbm = "col-xs-12";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-0";
					$positionm = "col-xs-12"; 
				}else if(($positionahidden != 1) && ($positionbhidden != 1) && ($positionchidden == 1) && ($positiondhidden == 1)){
					$positionam = "col-xs-0";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-12";
					$positiondm = "col-xs-12";
					$positionm = "col-xs-12"; 
				}else if(($positionahidden != 1) && ($positionbhidden != 1) && ($positionchidden == 1) && ($positiondhidden != 1)){
					$positionam = "col-xs-0";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-12";
					$positiondm = "col-xs-0";
					$positionm = "col-xs-12"; 
				}else if(($positionahidden != 1) && ($positionbhidden != 1) && ($positionchidden != 1) && ($positiondhidden == 1)){
					$positionam = "col-xs-0";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-12";
					$positionm = "col-xs-12"; 
				}else if(($positionahidden != 1) && ($positionbhidden != 1) && ($positionchidden != 1) && ($positiondhidden != 1)){
					$positionam = "col-xs-0";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-0"; 
				}
				
			}elseif ($positionamcount && !$positionbmcount && $positioncmcount && !$positiondmcount){
				if (($positionahidden == 1) && ($positionchidden == 1)){ 
					$positionam = "col-xs-12";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-12";
					$positiondm = "col-xs-0";
					$positionm = "col-xs-12";
				}else if(($positionahidden == 1) && ($positionchidden != 1)){
					$positionam = "col-xs-12";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-0";
					$positionm = "col-xs-12";
				} else if(($positionahidden != 1) && ($positionchidden == 1)){
					$positionam = "col-xs-0";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-12";
					$positiondm = "col-xs-0";
					$positionm = "col-xs-12";
				}else {
					$positionam = "col-xs-0";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-0";
				} 
			}elseif ($positionamcount && !$positionbmcount && !$positioncmcount && $positiondmcount){
				if (($positionahidden == 1) && ($positiondhidden == 1)){ 
					$positionam = "col-xs-12";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-12";
					$positionm = "col-xs-12";
				}else if(($positionahidden == 1) && ($positiondhidden != 1)){
					$positionam = "col-xs-12";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-0";
					$positionm = "col-xs-12";
				} else if(($positionahidden != 1) && ($positiondhidden == 1)){
					$positionam = "col-xs-0";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-12";
					$positionm = "col-xs-12";
				}else {
					$positionam = "col-xs-0";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-0";
				} 
			}elseif ($positionamcount && $positionbmcount && !$positioncmcount && $positiondmcount){
				if (($positionahidden == 1) && ($positionbhidden == 1) && ($positiondhidden == 1)){
					$positionam = "col-xs-12";
					$positionbm = "col-xs-12";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-12"; 
					$positionm = "col-xs-12";
				}else if(($positionahidden == 1) && ($positionbhidden == 1) && ($positiondhidden != 1)){
					$positionam = "col-xs-12";
					$positionbm = "col-xs-12";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-0";
					$positionm = "col-xs-12";
				}else if(($positionahidden == 1) && ($positionbhidden != 1) && ($positiondhidden == 1)){
					$positionam = "col-xs-12";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-12";
					$positionm = "col-xs-12";
				}else if(($positionahidden == 1) && ($positionbhidden != 1) && ($positiondhidden != 1)){
					$positionam = "col-xs-12";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-0";
					$positionm = "col-xs-12";
				}else if(($positionahidden != 1) && ($positionbhidden == 1) && ($positiondhidden == 1)){
					$positionam = "col-xs-0";
					$positionbm = "col-xs-12";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-12";
					$positionm = "col-xs-12";
				}else if(($positionahidden != 1) && ($positionbhidden == 1) && ($positiondhidden != 1)){
					$positionam = "col-xs-0";
					$positionbm = "col-xs-12";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-0";
					$positionm = "col-xs-12";
				}else if(($positionahidden != 1) && ($positionbhidden != 1) && ($positiondhidden == 1)){
					$positionam = "col-xs-0";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-12";
					$positionm = "col-xs-12";
				}else {
					$positionam = "col-xs-0";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-0";
				}
				
			}elseif ($positionamcount && !$positionbmcount && $positioncmcount && $positiondmcount){
				if (($positionahidden == 1) && ($positionchidden == 1) && ($positiondhidden == 1)){
					$positionam = "col-xs-12";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-12";
					$positiondm = "col-xs-12";
					$positionm = "col-xs-12"; 
				}else if(($positionahidden == 1) && ($positionchidden == 1) && ($positiondhidden != 1)){
					$positionam = "col-xs-12";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-12";
					$positiondm = "col-xs-0";
					$positionm = "col-xs-12";
				}else if(($positionahidden == 1) && ($positionchidden != 1) && ($positiondhidden == 1)){
					$positionam = "col-xs-12";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-12";
					$positionm = "col-xs-12";
				}else if(($positionahidden == 1) && ($positionchidden != 1) && ($positiondhidden != 1)){
					$positionam = "col-xs-12";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-0";
					$positionm = "col-xs-12";
				}else if(($positionahidden != 1) && ($positionchidden == 1) && ($positiondhidden == 1)){
					$positionam = "col-xs-0";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-12";
					$positiondm = "col-xs-12";
					$positionm = "col-xs-12";
				}else if(($positionahidden != 1) && ($positiocbhidden == 1) && ($positiondhidden != 1)){
					$positionam = "col-xs-0";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-12";
					$positiondm = "col-xs-0";
					$positionm = "col-xs-12";
				}else if(($positionahidden != 1) && ($positionchidden != 1) && ($positiondhidden == 1)){
					$positionam = "col-xs-0";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-12";
					$positionm = "col-xs-12";
				}else {
					$positionam = "col-xs-0";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-0";
				}
			}elseif (!$positionamcount && $positionbmcount && !$positioncmcount && !$positiondmcount){
				if ($positionbhidden == 1){
					$positionam = "col-xs-0";
					$positionbm = "col-xs-12";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-0"; 
					$positionm = "col-xs-12";
				}else {
					$positionam = "col-xs-0";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-0";
				}
			}elseif (!$positionamcount && $positionbmcount && $positioncmcount && !$positiondmcount){
				if (($positionbhidden == 1) && ($positionchidden == 1)){ 
					$positionam = "col-xs-0";
					$positionbm = "col-xs-12";
					$positioncm = "col-xs-12";
					$positiondm = "col-xs-0";
					$positionm = "col-xs-12";
				}else if(($positionbhidden == 1) && ($positionchidden != 1)){
					$positionam = "col-xs-0";
					$positionbm = "col-xs-12";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-0";
					$positionm = "col-xs-12";
				} else if(($positionbhidden != 1) && ($positionchidden == 1)){
					$positionam = "col-xs-0";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-12";
					$positiondm = "col-xs-0";
					$positionm = "col-xs-12";
				}else {
					$positionam = "col-xs-0";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-0";
				}
			}elseif (!$positionamcount && $positionbmcount && !$positioncmcount && $positiondmcount) {
				if (($positionbhidden == 1) && ($positiondhidden == 1)){ 
					$positionam = "col-xs-0";
					$positionbm = "col-xs-12";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-12";
					$positionm = "col-xs-12";
				}else if(($positionbhidden == 1) && ($positiondhidden != 1)){
					$positionam = "col-xs-0";
					$positionbm = "col-xs-12";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-0";
					$positionm = "col-xs-12";
				} else if(($positionbhidden != 1) && ($positiondhidden == 1)){
					$positionam = "col-xs-0";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-12";
					$positionm = "col-xs-12";
				}else {
					$positionam = "col-xs-0";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-0";
				}
			}elseif (!$positionamcount && $positionbmcount && $positioncmcount && $positiondmcount) {
				if (($positionbhidden == 1) && ($positionchidden == 1) && ($positiondhidden == 1)){
					$positionam = "col-xs-0";
					$positionbm = "col-xs-12";
					$positioncm = "col-xs-12";
					$positiondm = "col-xs-12";
					$positionm = "col-xs-12";
				}else if(($positionbhidden == 1) && ($positionchidden == 1) && ($positiondhidden != 1)){
					$positionam = "col-xs-0";
					$positionbm = "col-xs-12";
					$positioncm = "col-xs-12";
					$positiondm = "col-xs-0";
					$positionm = "col-xs-12";
				}else if(($positionbhidden == 1) && ($positionchidden != 1) && ($positiondhidden == 1)){
					$positionam = "col-xs-0";
					$positionbm = "col-xs-12";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-12";
					$positionm = "col-xs-12";
				}else if(($positionbhidden == 1) && ($positionchidden != 1) && ($positiondhidden != 1)){
					$positionam = "col-xs-0";
					$positionbm = "col-xs-12";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-0";
					$positionm = "col-xs-12";
				}else if(($positionbhidden != 1) && ($positionchidden == 1) && ($positiondhidden == 1)){
					$positionam = "col-xs-0";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-12";
					$positiondm = "col-xs-12";
					$positionm = "col-xs-12";
				}else if(($positionbhidden != 1) && ($positiocbhidden == 1) && ($positiondhidden != 1)){
					$positionam = "col-xs-0";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-12";
					$positiondm = "col-xs-0";
					$positionm = "col-xs-12";
				}else if(($positionbhidden != 1) && ($positionchidden != 1) && ($positiondhidden == 1)){
					$positionam = "col-xs-0";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-12";
					$positionm = "col-xs-12";
				}else {
					$positionam = "col-xs-0";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-0";
				}
			}elseif (!$positionamcount && !$positionbmcount && $positioncmcount && !$positiondmcount) {
				if ($positionchidden == 1){
					$positionam = "col-xs-0";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-12";
					$positiondm = "col-xs-0";
					$positionm = "col-xs-12"; 
				}else {
					$positionam = "col-xs-0";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-0";
				}
			}elseif (!$positionamcount && !$positionbmcount && $positioncmcount && $positiondmcount) {
				if (($positionchidden == 1) && ($positiondhidden == 1)){ 
					$positionam = "col-xs-0";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-12";
					$positiondm = "col-xs-12";
					$positionm = "col-xs-12";
				}else if(($positionchidden == 1) && ($positiondhidden != 1)){
					$positionam = "col-xs-0";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-12";
					$positiondm = "col-xs-0";
					$positionm = "col-xs-12";
				} else if(($positionchidden != 1) && ($positiondhidden == 1)){
					$positionam = "col-xs-0";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-12";
					$positionm = "col-xs-12";
				}else {
					$positionam = "col-xs-0";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-0";
				}
			}elseif (!$positionamcount && !$positionbmcount && !$positioncmcount && $positiondmcount) {
				if ($positiondhidden == 1){
					$positionam = "col-xs-0";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-12";
					$positionm = "col-xs-12";
				}else {
					$positionam = "col-xs-0";
					$positionbm = "col-xs-0";
					$positioncm = "col-xs-0";
					$positiondm = "col-xs-0";
				}
			}
	}
	public function mediumpositionstablet(&$positionam, &$positionbm, &$positioncm, &$positiondm, &$positionm, $positionamcount, $positionbmcount, $positioncmcount, $positiondmcount, $positionahidden, $positionbhidden, $positionchidden, $positiondhidden, $positionehidden) {
		if($positionamcount && !$positionbmcount && !$positioncmcount && !$positiondmcount){
				if ($positionahidden == 1){
					$positionam = "col-sm-4";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-0";
					$positionm = "col-sm-8"; 
				}else {
					$positionam = "col-sm-0";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-0";
					$positionm = "col-sm-12";
				}
			}else if ($positionamcount && $positionbmcount && !$positioncmcount && !$positiondmcount){
				if (($positionahidden == 1) && ($positionbhidden == 1)){ 
					$positionam = "col-sm-6";
					$positionbm = "col-sm-6";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-0";
					$positionm = "col-sm-12";
				}else if(($positionahidden == 1) && ($positionbhidden != 1)){
					$positionam = "col-sm-4";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-0";
					$positionm = "col-sm-8";
				} else if(($positionahidden != 1) && ($positionbhidden == 1)){
					$positionam = "col-sm-0";
					$positionbm = "col-sm-4";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-0";
					$positionm = "col-sm-8";
				}else {
					$positionam = "col-sm-0";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-0";
				}
			}else if ($positionamcount && $positionbmcount && $positioncmcount && !$positiondmcount){
				if (($positionahidden == 1) && ($positionbhidden == 1) && ($positionchidden == 1)){
					$positionam = "col-sm-4";
					$positionbm = "col-sm-4";
					$positioncm = "col-sm-4";
					$positiondm = "col-sm-0";
					$positionm = "col-sm-12"; 
				}else if(($positionahidden == 1) && ($positionbhidden == 1) && ($positionchidden != 1)){
					$positionam = "col-sm-6";
					$positionbm = "col-sm-6";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-0";
					$positionm = "col-sm-12";
				}else if(($positionahidden == 1) && ($positionbhidden != 1) && ($positionchidden == 1)){
					$positionam = "col-sm-6";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-6";
					$positiondm = "col-sm-0";
					$positionm = "col-sm-12";
				}else if(($positionahidden == 1) && ($positionbhidden != 1) && ($positionchidden != 1)){
					$positionam = "col-sm-4";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-0";
					$positionm = "col-sm-8";
				}else if(($positionahidden != 1) && ($positionbhidden == 1) && ($positionchidden == 1)){
					$positionam = "col-sm-0";
					$positionbm = "col-sm-6";
					$positioncm = "col-sm-6";
					$positiondm = "col-sm-0";
					$positionm = "col-sm-12";
				}else if(($positionahidden != 1) && ($positionbhidden == 1) && ($positionchidden != 1)){
					$positionam = "col-sm-0";
					$positionbm = "col-sm-4";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-0";
					$positionm = "col-sm-8";
				}else if(($positionahidden != 1) && ($positionbhidden != 1) && ($positionchidden == 1)){
					$positionam = "col-sm-0";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-4";
					$positiondm = "col-sm-0";
					$positionm = "col-sm-8";
				}else {
					$positionam = "col-sm-0";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-0";
				}
			}elseif (($positionamcount && $positionbmcount && $positioncmcount && $positiondmcount)){
				if (($positionahidden == 1) && ($positionbhidden == 1) && ($positionchidden == 1) && ($positiondhidden == 1)){
					$positionam = "col-sm-6";
					$positionbm = "col-sm-6";
					$positioncm = "col-sm-6";
					$positiondm = "col-sm-6";
					$positionm = "col-sm-12"; 
				}else if(($positionahidden == 1) && ($positionbhidden == 1) && ($positionchidden == 1) && ($positiondhidden != 1)){
					$positionam = "col-sm-4";
					$positionbm = "col-sm-4";
					$positioncm = "col-sm-4";
					$positiondm = "col-sm-0"; 
					$positionm = "col-sm-8";
				}else if(($positionahidden == 1) && ($positionbhidden == 1) && ($positionchidden != 1) && ($positiondhidden == 1)){
					$positionam = "col-sm-4";
					$positionbm = "col-sm-4";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-4"; 
					$positionm = "col-sm-12";
				}else if(($positionahidden == 1) && ($positionbhidden == 1) && ($positionchidden != 1) && ($positiondhidden != 1)){
					$positionam = "col-sm-6";
					$positionbm = "col-sm-6";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-0"; 
					$positionm = "col-sm-12";
				}else if(($positionahidden == 1) && ($positionbhidden != 1) && ($positionchidden == 1) && ($positiondhidden == 1)){
					$positionam = "col-sm-4";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-4";
					$positiondm = "col-sm-4"; 
					$positionm = "col-sm-12";
				}else if(($positionahidden == 1) && ($positionbhidden != 1) && ($positionchidden == 1) && ($positiondhidden != 1)){
					$positionam = "col-sm-6";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-6";
					$positiondm = "col-sm-0";
					$positionm = "col-sm-12"; 
				}else if(($positionahidden == 1) && ($positionbhidden != 1) && ($positionchidden != 1) && ($positiondhidden == 1)){
					$positionam = "col-sm-6";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-6";
					$positionm = "col-sm-12"; 
				}else if(($positionahidden == 1) && ($positionbhidden != 1) && ($positionchidden != 1) && ($positiondhidden != 1)){
					$positionam = "col-sm-4";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-0";
					$positionm = "col-sm-8"; 
				}else if(($positionahidden != 1) && ($positionbhidden == 1) && ($positionchidden == 1) && ($positiondhidden == 1)){
					$positionam = "col-sm-0";
					$positionbm = "col-sm-4";
					$positioncm = "col-sm-4";
					$positiondm = "col-sm-4"; 
					$positionm = "col-sm-12";
				}else if(($positionahidden != 1) && ($positionbhidden == 1) && ($positionchidden == 1) && ($positiondhidden != 1)){
					$positionam = "col-sm-0";
					$positionbm = "col-sm-6";
					$positioncm = "col-sm-6";
					$positiondm = "col-sm-0";
					$positionm = "col-sm-12"; 
				}else if(($positionahidden != 1) && ($positionbhidden == 1) && ($positionchidden != 1) && ($positiondhidden == 1)){
					$positionam = "col-sm-0";
					$positionbm = "col-sm-6";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-6";
					$positionm = "col-sm-12"; 
				}else if(($positionahidden != 1) && ($positionbhidden == 1) && ($positionchidden != 1) && ($positiondhidden != 1)){
					$positionam = "col-sm-0";
					$positionbm = "col-sm-4";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-0";
					$positionm = "col-sm-8"; 
				}else if(($positionahidden != 1) && ($positionbhidden != 1) && ($positionchidden == 1) && ($positiondhidden == 1)){
					$positionam = "col-sm-0";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-6";
					$positiondm = "col-sm-6";
					$positionm = "col-sm-12"; 
				}else if(($positionahidden != 1) && ($positionbhidden != 1) && ($positionchidden == 1) && ($positiondhidden != 1)){
					$positionam = "col-sm-0";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-4";
					$positiondm = "col-sm-0";
					$positionm = "col-sm-8"; 
				}else if(($positionahidden != 1) && ($positionbhidden != 1) && ($positionchidden != 1) && ($positiondhidden == 1)){
					$positionam = "col-sm-0";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-4";
					$positionm = "col-sm-8"; 
				}else if(($positionahidden != 1) && ($positionbhidden != 1) && ($positionchidden != 1) && ($positiondhidden != 1)){
					$positionam = "col-sm-0";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-0"; 
				}
				
			}elseif ($positionamcount && !$positionbmcount && $positioncmcount && !$positiondmcount){
				if (($positionahidden == 1) && ($positionchidden == 1)){ 
					$positionam = "col-sm-6";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-6";
					$positiondm = "col-sm-0";
					$positionm = "col-sm-12";
				}else if(($positionahidden == 1) && ($positionchidden != 1)){
					$positionam = "col-sm-4";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-0";
					$positionm = "col-sm-8";
				} else if(($positionahidden != 1) && ($positionchidden == 1)){
					$positionam = "col-sm-0";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-4";
					$positiondm = "col-sm-0";
					$positionm = "col-sm-8";
				}else {
					$positionam = "col-sm-0";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-0";
				} 
			}elseif ($positionamcount && !$positionbmcount && !$positioncmcount && $positiondmcount){
				if (($positionahidden == 1) && ($positiondhidden == 1)){ 
					$positionam = "col-sm-6";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-6";
					$positionm = "col-sm-12";
				}else if(($positionahidden == 1) && ($positiondhidden != 1)){
					$positionam = "col-sm-4";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-0";
					$positionm = "col-sm-8";
				} else if(($positionahidden != 1) && ($positiondhidden == 1)){
					$positionam = "col-sm-0";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-4";
					$positionm = "col-sm-8";
				}else {
					$positionam = "col-sm-0";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-0";
				} 
			}elseif ($positionamcount && $positionbmcount && !$positioncmcount && $positiondmcount){
				if (($positionahidden == 1) && ($positionbhidden == 1) && ($positiondhidden == 1)){
					$positionam = "col-sm-4";
					$positionbm = "col-sm-4";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-4"; 
					$positionm = "col-sm-12";
				}else if(($positionahidden == 1) && ($positionbhidden == 1) && ($positiondhidden != 1)){
					$positionam = "col-sm-6";
					$positionbm = "col-sm-6";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-0";
					$positionm = "col-sm-12";
				}else if(($positionahidden == 1) && ($positionbhidden != 1) && ($positiondhidden == 1)){
					$positionam = "col-sm-6";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-6";
					$positionm = "col-sm-12";
				}else if(($positionahidden == 1) && ($positionbhidden != 1) && ($positiondhidden != 1)){
					$positionam = "col-sm-4";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-0";
					$positionm = "col-sm-8";
				}else if(($positionahidden != 1) && ($positionbhidden == 1) && ($positiondhidden == 1)){
					$positionam = "col-sm-0";
					$positionbm = "col-sm-6";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-6";
					$positionm = "col-sm-12";
				}else if(($positionahidden != 1) && ($positionbhidden == 1) && ($positiondhidden != 1)){
					$positionam = "col-sm-0";
					$positionbm = "col-sm-4";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-0";
					$positionm = "col-sm-8";
				}else if(($positionahidden != 1) && ($positionbhidden != 1) && ($positiondhidden == 1)){
					$positionam = "col-sm-0";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-4";
					$positionm = "col-sm-8";
				}else {
					$positionam = "col-sm-0";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-0";
				}
				
			}elseif ($positionamcount && !$positionbmcount && $positioncmcount && $positiondmcount){
				if (($positionahidden == 1) && ($positionchidden == 1) && ($positiondhidden == 1)){
					$positionam = "col-sm-4";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-4";
					$positiondm = "col-sm-4";
					$positionm = "col-sm-12"; 
				}else if(($positionahidden == 1) && ($positionchidden == 1) && ($positiondhidden != 1)){
					$positionam = "col-sm-6";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-6";
					$positiondm = "col-sm-0";
					$positionm = "col-sm-12";
				}else if(($positionahidden == 1) && ($positionchidden != 1) && ($positiondhidden == 1)){
					$positionam = "col-sm-6";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-6";
					$positionm = "col-sm-12";
				}else if(($positionahidden == 1) && ($positionchidden != 1) && ($positiondhidden != 1)){
					$positionam = "col-sm-4";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-0";
					$positionm = "col-sm-8";
				}else if(($positionahidden != 1) && ($positionchidden == 1) && ($positiondhidden == 1)){
					$positionam = "col-sm-0";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-6";
					$positiondm = "col-sm-6";
					$positionm = "col-sm-12";
				}else if(($positionahidden != 1) && ($positiocbhidden == 1) && ($positiondhidden != 1)){
					$positionam = "col-sm-0";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-4";
					$positiondm = "col-sm-0";
					$positionm = "col-sm-8";
				}else if(($positionahidden != 1) && ($positionchidden != 1) && ($positiondhidden == 1)){
					$positionam = "col-sm-0";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-4";
					$positionm = "col-sm-8";
				}else {
					$positionam = "col-sm-0";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-0";
				}
			}elseif (!$positionamcount && $positionbmcount && !$positioncmcount && !$positiondmcount){
				if ($positionbhidden == 1){
					$positionam = "col-sm-0";
					$positionbm = "col-sm-4";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-0"; 
					$positionm = "col-sm-8";
				}else {
					$positionam = "col-sm-0";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-0";
				}
			}elseif (!$positionamcount && $positionbmcount && $positioncmcount && !$positiondmcount){
				if (($positionbhidden == 1) && ($positionchidden == 1)){ 
					$positionam = "col-sm-0";
					$positionbm = "col-sm-6";
					$positioncm = "col-sm-6";
					$positiondm = "col-sm-0";
					$positionm = "col-sm-12";
				}else if(($positionbhidden == 1) && ($positionchidden != 1)){
					$positionam = "col-sm-0";
					$positionbm = "col-sm-4";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-0";
					$positionm = "col-sm-8";
				} else if(($positionbhidden != 1) && ($positionchidden == 1)){
					$positionam = "col-sm-0";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-4";
					$positiondm = "col-sm-0";
					$positionm = "col-sm-8";
				}else {
					$positionam = "col-sm-0";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-0";
				}
			}elseif (!$positionamcount && $positionbmcount && !$positioncmcount && $positiondmcount) {
				if (($positionbhidden == 1) && ($positiondhidden == 1)){ 
					$positionam = "col-sm-0";
					$positionbm = "col-sm-6";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-6";
					$positionm = "col-sm-12";
				}else if(($positionbhidden == 1) && ($positiondhidden != 1)){
					$positionam = "col-sm-0";
					$positionbm = "col-sm-4";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-0";
					$positionm = "col-sm-8";
				} else if(($positionbhidden != 1) && ($positiondhidden == 1)){
					$positionam = "col-sm-0";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-4";
					$positionm = "col-sm-8";
				}else {
					$positionam = "col-sm-0";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-0";
				}
			}elseif (!$positionamcount && $positionbmcount && $positioncmcount && $positiondmcount) {
				if (($positionbhidden == 1) && ($positionchidden == 1) && ($positiondhidden == 1)){
					$positionam = "col-sm-0";
					$positionbm = "col-sm-4";
					$positioncm = "col-sm-4";
					$positiondm = "col-sm-4";
					$positionm = "col-sm-12";
				}else if(($positionbhidden == 1) && ($positionchidden == 1) && ($positiondhidden != 1)){
					$positionam = "col-sm-0";
					$positionbm = "col-sm-6";
					$positioncm = "col-sm-6";
					$positiondm = "col-sm-0";
					$positionm = "col-sm-12";
				}else if(($positionbhidden == 1) && ($positionchidden != 1) && ($positiondhidden == 1)){
					$positionam = "col-sm-0";
					$positionbm = "col-sm-6";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-6";
					$positionm = "col-sm-12";
				}else if(($positionbhidden == 1) && ($positionchidden != 1) && ($positiondhidden != 1)){
					$positionam = "col-sm-0";
					$positionbm = "col-sm-4";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-0";
					$positionm = "col-sm-8";
				}else if(($positionbhidden != 1) && ($positionchidden == 1) && ($positiondhidden == 1)){
					$positionam = "col-sm-0";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-6";
					$positiondm = "col-sm-6";
					$positionm = "col-sm-12";
				}else if(($positionbhidden != 1) && ($positiocbhidden == 1) && ($positiondhidden != 1)){
					$positionam = "col-sm-0";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-4";
					$positiondm = "col-sm-0";
					$positionm = "col-sm-8";
				}else if(($positionbhidden != 1) && ($positionchidden != 1) && ($positiondhidden == 1)){
					$positionam = "col-sm-0";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-4";
					$positionm = "col-sm-8";
				}else {
					$positionam = "col-sm-0";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-0";
				}
			}elseif (!$positionamcount && !$positionbmcount && $positioncmcount && !$positiondmcount) {
				if ($positionchidden == 1){
					$positionam = "col-sm-0";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-4";
					$positiondm = "col-sm-0";
					$positionm = "col-sm-8"; 
				}else {
					$positionam = "col-sm-0";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-0";
				}
			}elseif (!$positionamcount && !$positionbmcount && $positioncmcount && $positiondmcount) {
				if (($positionchidden == 1) && ($positiondhidden == 1)){ 
					$positionam = "col-sm-0";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-6";
					$positiondm = "col-sm-6";
					$positionm = "col-sm-12";
				}else if(($positionchidden == 1) && ($positiondhidden != 1)){
					$positionam = "col-sm-0";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-4";
					$positiondm = "col-sm-0";
					$positionm = "col-sm-8";
				} else if(($positionchidden != 1) && ($positiondhidden == 1)){
					$positionam = "col-sm-0";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-4";
					$positionm = "col-sm-8";
				}else {
					$positionam = "col-sm-0";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-0";
				}
			}elseif (!$positionamcount && !$positionbmcount && !$positioncmcount && $positiondmcount) {
				if ($positiondhidden == 1){
					$positionam = "col-sm-0";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-4";
					$positionm = "col-sm-8";
				}else {
					$positionam = "col-sm-0";
					$positionbm = "col-sm-0";
					$positioncm = "col-sm-0";
					$positiondm = "col-sm-0";
				}
			}
	}
	public function mediumpositionsbig($mainf, &$positionam, &$positionbm, &$positioncm, &$positiondm, &$positionm, $positionamcount, $positionbmcount, $positioncmcount, $positiondmcount, $positionahidden, $positionbhidden, $positionchidden, $positiondhidden, $positionehidden) {
		$pat = "/[1-9]/i";
		$checkfor= false;
		foreach ($mainf as &$valor) {
			if (preg_match ($pat, $valor)){
				$checkfor = true; 
			}
		}
		if ($checkfor == true) {
			$positionaf = '';
			$positionbf = '';
			$positioncf = '';
			$positiondf = '';
			$positionef = '';
			$patra = "/a/i";
			$patrb = "/b/i";
			$patrc = "/c/i";
			$patrd = "/d/i";
			$patre = "/e/i";
			foreach ($mainf as &$valor) {
				if (preg_match ($patra, $valor)){
					$positionaf= substr($valor, 1); 
				}elseif (preg_match ($patrb, $valor)){
					$positionbf= substr($valor, 1);; 
				}elseif (preg_match ($patrc, $valor)){
					$positioncf= substr($valor, 1); 
				}elseif (preg_match ($patrd, $valor)){
					$positiondf= substr($valor, 1);
				}elseif (preg_match ($patre, $valor)){
					$positionef= substr($valor, 1);
				}
			}
			if ($positionahidden != 1) {
				$positionam = "col-md-0";
			}else {
				$positionam = "col-md-". $positionaf;
			}
			if ($positionbhidden != 1) {
				$positionbm = "col-md-0";
			}else {
				$positionbm = "col-md-". $positionbf;
			}
			if ($positionchidden != 1) {
				$positioncm = "col-md-0";
			}else {
				$positioncm = "col-md-". $positioncf;
			}
			if ($positiondhidden != 1) {
				$positiondm = "col-md-0";
			}else {
				$positiondm = "col-md-". $positiondf;
			}
			if ($positionehidden != 1) {
				$positionm = "col-md-0";
			}else {
				$positionm = "col-md-". $positionef;
			}
		}else {
			if($positionamcount && !$positionbmcount && !$positioncmcount && !$positiondmcount){
				if ($positionahidden == 1){
					$positionam = "col-md-4";
					$positionbm = "col-md-0";
					$positioncm = "col-md-0";
					$positiondm = "col-md-0";
					$positionm = "col-md-8"; 
				}else {
					$positionam = "col-md-0";
					$positionbm = "col-md-0";
					$positioncm = "col-md-0";
					$positiondm = "col-md-0";
					$positionm = "col-md-12";
				}
			}else if ($positionamcount && $positionbmcount && !$positioncmcount && !$positiondmcount){
				if (($positionahidden == 1) && ($positionbhidden == 1)){ 
					$positionam = "col-md-3";
					$positionbm = "col-md-3";
					$positioncm = "col-md-0";
					$positiondm = "col-md-0";
					$positionm = "col-md-6";
				}else if(($positionahidden == 1) && ($positionbhidden != 1)){
					$positionam = "col-md-4";
					$positionbm = "col-md-0";
					$positioncm = "col-md-0";
					$positiondm = "col-md-0";
					$positionm = "col-md-8";
				} else if(($positionahidden != 1) && ($positionbhidden == 1)){
					$positionam = "col-md-0";
					$positionbm = "col-md-4";
					$positioncm = "col-md-0";
					$positiondm = "col-md-0";
					$positionm = "col-md-8";
				}else {
					$positionam = "col-md-0";
					$positionbm = "col-md-0";
					$positioncm = "col-md-0";
					$positiondm = "col-md-0";
				}
			}else if ($positionamcount && $positionbmcount && $positioncmcount && !$positiondmcount){
				if (($positionahidden == 1) && ($positionbhidden == 1) && ($positionchidden == 1)){
					$positionam = "col-md-2";
					$positionbm = "col-md-2";
					$positioncm = "col-md-2";
					$positiondm = "col-md-0";
					$positionm = "col-md-6"; 
				}else if(($positionahidden == 1) && ($positionbhidden == 1) && ($positionchidden != 1)){
					$positionam = "col-md-3";
					$positionbm = "col-md-3";
					$positioncm = "col-md-0";
					$positiondm = "col-md-0";
					$positionm = "col-md-6";
				}else if(($positionahidden == 1) && ($positionbhidden != 1) && ($positionchidden == 1)){
					$positionam = "col-md-3";
					$positionbm = "col-md-0";
					$positioncm = "col-md-3";
					$positiondm = "col-md-0";
					$positionm = "col-md-6";
				}else if(($positionahidden == 1) && ($positionbhidden != 1) && ($positionchidden != 1)){
					$positionam = "col-md-4";
					$positionbm = "col-md-0";
					$positioncm = "col-md-0";
					$positiondm = "col-md-0";
					$positionm = "col-md-8";
				}else if(($positionahidden != 1) && ($positionbhidden == 1) && ($positionchidden == 1)){
					$positionam = "col-md-0";
					$positionbm = "col-md-3";
					$positioncm = "col-md-3";
					$positiondm = "col-md-0";
					$positionm = "col-md-6";
				}else if(($positionahidden != 1) && ($positionbhidden == 1) && ($positionchidden != 1)){
					$positionam = "col-md-0";
					$positionbm = "col-md-4";
					$positioncm = "col-md-0";
					$positiondm = "col-md-0";
					$positionm = "col-md-8";
				}else if(($positionahidden != 1) && ($positionbhidden != 1) && ($positionchidden == 1)){
					$positionam = "col-md-0";
					$positionbm = "col-md-0";
					$positioncm = "col-md-4";
					$positiondm = "col-md-0";
					$positionm = "col-md-8";
				}else {
					$positionam = "col-md-0";
					$positionbm = "col-md-0";
					$positioncm = "col-md-0";
					$positiondm = "col-md-0";
				}
			}elseif (($positionamcount && $positionbmcount && $positioncmcount && $positiondmcount)){
				if (($positionahidden == 1) && ($positionbhidden == 1) && ($positionchidden == 1) && ($positiondhidden == 1)){
					$positionam = "col-md-2";
					$positionbm = "col-md-2";
					$positioncm = "col-md-2";
					$positiondm = "col-md-2";
					$positionm = "col-md-4"; 
				}else if(($positionahidden == 1) && ($positionbhidden == 1) && ($positionchidden == 1) && ($positiondhidden != 1)){
					$positionam = "col-md-4";
					$positionbm = "col-md-4";
					$positioncm = "col-md-4";
					$positiondm = "col-md-0"; 
					$positionm = "col-md-8";
				}else if(($positionahidden == 1) && ($positionbhidden == 1) && ($positionchidden != 1) && ($positiondhidden == 1)){
					$positionam = "col-md-2";
					$positionbm = "col-md-2";
					$positioncm = "col-md-0";
					$positiondm = "col-md-2"; 
					$positionm = "col-md-6";
				}else if(($positionahidden == 1) && ($positionbhidden == 1) && ($positionchidden != 1) && ($positiondhidden != 1)){
					$positionam = "col-md-3";
					$positionbm = "col-md-3";
					$positioncm = "col-md-0";
					$positiondm = "col-md-0"; 
					$positionm = "col-md-6";
				}else if(($positionahidden == 1) && ($positionbhidden != 1) && ($positionchidden == 1) && ($positiondhidden == 1)){
					$positionam = "col-md-2";
					$positionbm = "col-md-0";
					$positioncm = "col-md-2";
					$positiondm = "col-md-2"; 
					$positionm = "col-md-6";
				}else if(($positionahidden == 1) && ($positionbhidden != 1) && ($positionchidden == 1) && ($positiondhidden != 1)){
					$positionam = "col-md-3";
					$positionbm = "col-md-0";
					$positioncm = "col-md-3";
					$positiondm = "col-md-0";
					$positionm = "col-md-6"; 
				}else if(($positionahidden == 1) && ($positionbhidden != 1) && ($positionchidden != 1) && ($positiondhidden == 1)){
					$positionam = "col-md-3";
					$positionbm = "col-md-0";
					$positioncm = "col-md-0";
					$positiondm = "col-md-3";
					$positionm = "col-md-6"; 
				}else if(($positionahidden == 1) && ($positionbhidden != 1) && ($positionchidden != 1) && ($positiondhidden != 1)){
					$positionam = "col-md-4";
					$positionbm = "col-md-0";
					$positioncm = "col-md-0";
					$positiondm = "col-md-0";
					$positionm = "col-md-8"; 
				}else if(($positionahidden != 1) && ($positionbhidden == 1) && ($positionchidden == 1) && ($positiondhidden == 1)){
					$positionam = "col-md-0";
					$positionbm = "col-md-2";
					$positioncm = "col-md-2";
					$positiondm = "col-md-2"; 
					$positionm = "col-md-6";
				}else if(($positionahidden != 1) && ($positionbhidden == 1) && ($positionchidden == 1) && ($positiondhidden != 1)){
					$positionam = "col-md-0";
					$positionbm = "col-md-3";
					$positioncm = "col-md-3";
					$positiondm = "col-md-0";
					$positionm = "col-md-6"; 
				}else if(($positionahidden != 1) && ($positionbhidden == 1) && ($positionchidden != 1) && ($positiondhidden == 1)){
					$positionam = "col-md-0";
					$positionbm = "col-md-3";
					$positioncm = "col-md-0";
					$positiondm = "col-md-3";
					$positionm = "col-md-6"; 
				}else if(($positionahidden != 1) && ($positionbhidden == 1) && ($positionchidden != 1) && ($positiondhidden != 1)){
					$positionam = "col-md-0";
					$positionbm = "col-md-4";
					$positioncm = "col-md-0";
					$positiondm = "col-md-0";
					$positionm = "col-md-8"; 
				}else if(($positionahidden != 1) && ($positionbhidden != 1) && ($positionchidden == 1) && ($positiondhidden == 1)){
					$positionam = "col-md-0";
					$positionbm = "col-md-0";
					$positioncm = "col-md-3";
					$positiondm = "col-md-3";
					$positionm = "col-md-6"; 
				}else if(($positionahidden != 1) && ($positionbhidden != 1) && ($positionchidden == 1) && ($positiondhidden != 1)){
					$positionam = "col-md-0";
					$positionbm = "col-md-0";
					$positioncm = "col-md-4";
					$positiondm = "col-md-0";
					$positionm = "col-md-8"; 
				}else if(($positionahidden != 1) && ($positionbhidden != 1) && ($positionchidden != 1) && ($positiondhidden == 1)){
					$positionam = "col-md-0";
					$positionbm = "col-md-0";
					$positioncm = "col-md-0";
					$positiondm = "col-md-4";
					$positionm = "col-md-8"; 
				}else if(($positionahidden != 1) && ($positionbhidden != 1) && ($positionchidden != 1) && ($positiondhidden != 1)){
					$positionam = "col-md-0";
					$positionbm = "col-md-0";
					$positioncm = "col-md-0";
					$positiondm = "col-md-0"; 
				}
				
			}elseif ($positionamcount && !$positionbmcount && $positioncmcount && !$positiondmcount){
				if (($positionahidden == 1) && ($positionchidden == 1)){ 
					$positionam = "col-md-3";
					$positionbm = "col-md-0";
					$positioncm = "col-md-3";
					$positiondm = "col-md-0";
					$positionm = "col-md-6";
				}else if(($positionahidden == 1) && ($positionchidden != 1)){
					$positionam = "col-md-4";
					$positionbm = "col-md-0";
					$positioncm = "col-md-0";
					$positiondm = "col-md-0";
					$positionm = "col-md-8";
				} else if(($positionahidden != 1) && ($positionchidden == 1)){
					$positionam = "col-md-0";
					$positionbm = "col-md-0";
					$positioncm = "col-md-4";
					$positiondm = "col-md-0";
					$positionm = "col-md-8";
				}else {
					$positionam = "col-md-0";
					$positionbm = "col-md-0";
					$positioncm = "col-md-0";
					$positiondm = "col-md-0";
				} 
			}elseif ($positionamcount && !$positionbmcount && !$positioncmcount && $positiondmcount){
				if (($positionahidden == 1) && ($positiondhidden == 1)){ 
					$positionam = "col-md-3";
					$positionbm = "col-md-0";
					$positioncm = "col-md-0";
					$positiondm = "col-md-3";
					$positionm = "col-md-6";
				}else if(($positionahidden == 1) && ($positiondhidden != 1)){
					$positionam = "col-md-4";
					$positionbm = "col-md-0";
					$positioncm = "col-md-0";
					$positiondm = "col-md-0";
					$positionm = "col-md-8";
				} else if(($positionahidden != 1) && ($positiondhidden == 1)){
					$positionam = "col-md-0";
					$positionbm = "col-md-0";
					$positioncm = "col-md-0";
					$positiondm = "col-md-4";
					$positionm = "col-md-8";
				}else {
					$positionam = "col-md-0";
					$positionbm = "col-md-0";
					$positioncm = "col-md-0";
					$positiondm = "col-md-0";
				} 
			}elseif ($positionamcount && $positionbmcount && !$positioncmcount && $positiondmcount){
				if (($positionahidden == 1) && ($positionbhidden == 1) && ($positiondhidden == 1)){
					$positionam = "col-md-2";
					$positionbm = "col-md-2";
					$positioncm = "col-md-0";
					$positiondm = "col-md-2"; 
					$positionm = "col-md-6";
				}else if(($positionahidden == 1) && ($positionbhidden == 1) && ($positiondhidden != 1)){
					$positionam = "col-md-3";
					$positionbm = "col-md-3";
					$positioncm = "col-md-0";
					$positiondm = "col-md-0";
					$positionm = "col-md-6";
				}else if(($positionahidden == 1) && ($positionbhidden != 1) && ($positiondhidden == 1)){
					$positionam = "col-md-3";
					$positionbm = "col-md-0";
					$positioncm = "col-md-0";
					$positiondm = "col-md-3";
					$positionm = "col-md-6";
				}else if(($positionahidden == 1) && ($positionbhidden != 1) && ($positiondhidden != 1)){
					$positionam = "col-md-4";
					$positionbm = "col-md-0";
					$positioncm = "col-md-0";
					$positiondm = "col-md-0";
					$positionm = "col-md-8";
				}else if(($positionahidden != 1) && ($positionbhidden == 1) && ($positiondhidden == 1)){
					$positionam = "col-md-0";
					$positionbm = "col-md-3";
					$positioncm = "col-md-0";
					$positiondm = "col-md-3";
					$positionm = "col-md-6";
				}else if(($positionahidden != 1) && ($positionbhidden == 1) && ($positiondhidden != 1)){
					$positionam = "col-md-0";
					$positionbm = "col-md-4";
					$positioncm = "col-md-0";
					$positiondm = "col-md-0";
					$positionm = "col-md-8";
				}else if(($positionahidden != 1) && ($positionbhidden != 1) && ($positiondhidden == 1)){
					$positionam = "col-md-0";
					$positionbm = "col-md-0";
					$positioncm = "col-md-0";
					$positiondm = "col-md-4";
					$positionm = "col-md-8";
				}else {
					$positionam = "col-md-0";
					$positionbm = "col-md-0";
					$positioncm = "col-md-0";
					$positiondm = "col-md-0";
				}
				
			}elseif ($positionamcount && !$positionbmcount && $positioncmcount && $positiondmcount){
				if (($positionahidden == 1) && ($positionchidden == 1) && ($positiondhidden == 1)){
					$positionam = "col-md-2";
					$positionbm = "col-md-0";
					$positioncm = "col-md-2";
					$positiondm = "col-md-2";
					$positionm = "col-md-6"; 
				}else if(($positionahidden == 1) && ($positionchidden == 1) && ($positiondhidden != 1)){
					$positionam = "col-md-3";
					$positionbm = "col-md-0";
					$positioncm = "col-md-3";
					$positiondm = "col-md-0";
					$positionm = "col-md-6";
				}else if(($positionahidden == 1) && ($positionchidden != 1) && ($positiondhidden == 1)){
					$positionam = "col-md-3";
					$positionbm = "col-md-0";
					$positioncm = "col-md-0";
					$positiondm = "col-md-3";
					$positionm = "col-md-6";
				}else if(($positionahidden == 1) && ($positionchidden != 1) && ($positiondhidden != 1)){
					$positionam = "col-md-4";
					$positionbm = "col-md-0";
					$positioncm = "col-md-0";
					$positiondm = "col-md-0";
					$positionm = "col-md-8";
				}else if(($positionahidden != 1) && ($positionchidden == 1) && ($positiondhidden == 1)){
					$positionam = "col-md-0";
					$positionbm = "col-md-0";
					$positioncm = "col-md-3";
					$positiondm = "col-md-3";
					$positionm = "col-md-6";
				}else if(($positionahidden != 1) && ($positiocbhidden == 1) && ($positiondhidden != 1)){
					$positionam = "col-md-0";
					$positionbm = "col-md-0";
					$positioncm = "col-md-4";
					$positiondm = "col-md-0";
					$positionm = "col-md-8";
				}else if(($positionahidden != 1) && ($positionchidden != 1) && ($positiondhidden == 1)){
					$positionam = "col-md-0";
					$positionbm = "col-md-0";
					$positioncm = "col-md-0";
					$positiondm = "col-md-4";
					$positionm = "col-md-8";
				}else {
					$positionam = "col-md-0";
					$positionbm = "col-md-0";
					$positioncm = "col-md-0";
					$positiondm = "col-md-0";
				}
			}elseif (!$positionamcount && $positionbmcount && !$positioncmcount && !$positiondmcount){
				if ($positionbhidden == 1){
					$positionam = "col-md-0";
					$positionbm = "col-md-4";
					$positioncm = "col-md-0";
					$positiondm = "col-md-0"; 
					$positionm = "col-md-8";
				}else {
					$positionam = "col-md-0";
					$positionbm = "col-md-0";
					$positioncm = "col-md-0";
					$positiondm = "col-md-0";
				}
			}elseif (!$positionamcount && $positionbmcount && $positioncmcount && !$positiondmcount){
				if (($positionbhidden == 1) && ($positionchidden == 1)){ 
					$positionam = "col-md-0";
					$positionbm = "col-md-3";
					$positioncm = "col-md-3";
					$positiondm = "col-md-0";
					$positionm = "col-md-6";
				}else if(($positionbhidden == 1) && ($positionchidden != 1)){
					$positionam = "col-md-0";
					$positionbm = "col-md-4";
					$positioncm = "col-md-0";
					$positiondm = "col-md-0";
					$positionm = "col-md-8";
				} else if(($positionbhidden != 1) && ($positionchidden == 1)){
					$positionam = "col-md-0";
					$positionbm = "col-md-0";
					$positioncm = "col-md-4";
					$positiondm = "col-md-0";
					$positionm = "col-md-8";
				}else {
					$positionam = "col-md-0";
					$positionbm = "col-md-0";
					$positioncm = "col-md-0";
					$positiondm = "col-md-0";
				}
			}elseif (!$positionamcount && $positionbmcount && !$positioncmcount && $positiondmcount) {
				if (($positionbhidden == 1) && ($positiondhidden == 1)){ 
					$positionam = "col-md-0";
					$positionbm = "col-md-3";
					$positioncm = "col-md-0";
					$positiondm = "col-md-3";
					$positionm = "col-md-6";
				}else if(($positionbhidden == 1) && ($positiondhidden != 1)){
					$positionam = "col-md-0";
					$positionbm = "col-md-4";
					$positioncm = "col-md-0";
					$positiondm = "col-md-0";
					$positionm = "col-md-8";
				} else if(($positionbhidden != 1) && ($positiondhidden == 1)){
					$positionam = "col-md-0";
					$positionbm = "col-md-0";
					$positioncm = "col-md-0";
					$positiondm = "col-md-4";
					$positionm = "col-md-8";
				}else {
					$positionam = "col-md-0";
					$positionbm = "col-md-0";
					$positioncm = "col-md-0";
					$positiondm = "col-md-0";
				}
			}elseif (!$positionamcount && $positionbmcount && $positioncmcount && $positiondmcount) {
				if (($positionbhidden == 1) && ($positionchidden == 1) && ($positiondhidden == 1)){
					$positionam = "col-md-0";
					$positionbm = "col-md-2";
					$positioncm = "col-md-2";
					$positiondm = "col-md-2";
					$positionm = "col-md-6";
				}else if(($positionbhidden == 1) && ($positionchidden == 1) && ($positiondhidden != 1)){
					$positionam = "col-md-0";
					$positionbm = "col-md-3";
					$positioncm = "col-md-3";
					$positiondm = "col-md-0";
					$positionm = "col-md-6";
				}else if(($positionbhidden == 1) && ($positionchidden != 1) && ($positiondhidden == 1)){
					$positionam = "col-md-0";
					$positionbm = "col-md-3";
					$positioncm = "col-md-0";
					$positiondm = "col-md-3";
					$positionm = "col-md-6";
				}else if(($positionbhidden == 1) && ($positionchidden != 1) && ($positiondhidden != 1)){
					$positionam = "col-md-0";
					$positionbm = "col-md-4";
					$positioncm = "col-md-0";
					$positiondm = "col-md-0";
					$positionm = "col-md-8";
				}else if(($positionbhidden != 1) && ($positionchidden == 1) && ($positiondhidden == 1)){
					$positionam = "col-md-0";
					$positionbm = "col-md-0";
					$positioncm = "col-md-3";
					$positiondm = "col-md-3";
					$positionm = "col-md-6";
				}else if(($positionbhidden != 1) && ($positiocbhidden == 1) && ($positiondhidden != 1)){
					$positionam = "col-md-0";
					$positionbm = "col-md-0";
					$positioncm = "col-md-4";
					$positiondm = "col-md-0";
					$positionm = "col-md-8";
				}else if(($positionbhidden != 1) && ($positionchidden != 1) && ($positiondhidden == 1)){
					$positionam = "col-md-0";
					$positionbm = "col-md-0";
					$positioncm = "col-md-0";
					$positiondm = "col-md-4";
					$positionm = "col-md-8";
				}else {
					$positionam = "col-md-0";
					$positionbm = "col-md-0";
					$positioncm = "col-md-0";
					$positiondm = "col-md-0";
				}
			}elseif (!$positionamcount && !$positionbmcount && $positioncmcount && !$positiondmcount) {
				if ($positionchidden == 1){
					$positionam = "col-md-0";
					$positionbm = "col-md-0";
					$positioncm = "col-md-4";
					$positiondm = "col-md-0";
					$positionm = "col-md-8"; 
				}else {
					$positionam = "col-md-0";
					$positionbm = "col-md-0";
					$positioncm = "col-md-0";
					$positiondm = "col-md-0";
				}
			}elseif (!$positionamcount && !$positionbmcount && $positioncmcount && $positiondmcount) {
				if (($positionchidden == 1) && ($positiondhidden == 1)){ 
					$positionam = "col-md-0";
					$positionbm = "col-md-0";
					$positioncm = "col-md-3";
					$positiondm = "col-md-3";
					$positionm = "col-md-6";
				}else if(($positionchidden == 1) && ($positiondhidden != 1)){
					$positionam = "col-md-0";
					$positionbm = "col-md-0";
					$positioncm = "col-md-4";
					$positiondm = "col-md-0";
					$positionm = "col-md-8";
				} else if(($positionchidden != 1) && ($positiondhidden == 1)){
					$positionam = "col-md-0";
					$positionbm = "col-md-0";
					$positioncm = "col-md-0";
					$positiondm = "col-md-4";
					$positionm = "col-md-8";
				}else {
					$positionam = "col-md-0";
					$positionbm = "col-md-0";
					$positioncm = "col-md-0";
					$positiondm = "col-md-0";
				}
			}elseif (!$positionamcount && !$positionbmcount && !$positioncmcount && $positiondmcount) {
				if ($positiondhidden == 1){
					$positionam = "col-md-0";
					$positionbm = "col-md-0";
					$positioncm = "col-md-0";
					$positiondm = "col-md-4";
					$positionm = "col-md-8";
				}else {
					$positionam = "col-md-0";
					$positionbm = "col-md-0";
					$positioncm = "col-md-0";
					$positiondm = "col-md-0";
				}
			}
		}
	}
	public function mainpositionsmobile(&$positionam, &$positionbm, $positionamcount, $positionbmcount, $positionahidden, $positionbhidden) {
		if($positionamcount && !$positionbmcount){
			if ($positionahidden == 1){
				$positionam = "col-xs-12";
				$positionbm = "col-xs-0";
			}else {
				$positionam = "col-xs-0";
				$positionbm = "col-xs-0";
			}
		}elseif ($positionamcount && $positionbmcount){
			if (($positionahidden == 1) && ($positionbhidden == 1)){ 
				$positionam = "col-xs-12";
				$positionbm = "col-xs-12";
			}else if(($positionahidden == 1) && ($positionbhidden != 1)){
				$positionam = "col-xs-12";
				$positionbm = "col-xs-0";
			} else if(($positionahidden != 1) && ($positionbhidden == 1)){
				$positionam = "col-xs-0";
				$positionbm = "col-xs-12";
			}else {
				$positionam = "col-xs-0";
				$positionbm = "col-xs-0";
			}
		}elseif (!$positionamcount && $positionbmcount){
			if ($positionbhidden == 1){
				$positionam = "col-xs-0";
				$positionbm = "col-xs-12";
			}else {
				$positionam = "col-xs-0";
				$positionbm = "col-xs-0";
			}
		}
	}
	public function mainpositionstablet(&$positionam, &$positionbm, $positionamcount, $positionbmcount, $positionahidden, $positionbhidden) {
		if($positionamcount && !$positionbmcount){
			if ($positionahidden == 1){
				$positionam = "col-sm-12";
				$positionbm = "col-sm-0";
			}else {
				$positionam = "col-sm-0";
				$positionbm = "col-sm-0";
			}
		}elseif ($positionamcount && $positionbmcount){
			if (($positionahidden == 1) && ($positionbhidden == 1)){ 
				$positionam = "col-sm-6";
				$positionbm = "col-sm-6";
			}else if(($positionahidden == 1) && ($positionbhidden != 1)){
				$positionam = "col-sm-12";
				$positionbm = "col-sm-0";
			} else if(($positionahidden != 1) && ($positionbhidden == 1)){
				$positionam = "col-sm-0";
				$positionbm = "col-sm-12";
			}else {
				$positionam = "col-sm-0";
				$positionbm = "col-sm-0";
			}
		}elseif (!$positionamcount && $positionbmcount){
			if ($positionbhidden == 1){
				$positionam = "col-sm-0";
				$positionbm = "col-sm-12";
			}else {
				$positionam = "col-sm-0";
				$positionbm = "col-sm-0";
			}
		}
	}
	public function mainpositionsbig($maninp, &$positionam, &$positionbm, $positionamcount, $positionbmcount, $positionahidden, $positionbhidden) {
		$pat = "/[1-9]/i";
		$checkfor= false;
		foreach ($maninp as &$valor) {
			if (preg_match ($pat, $valor)){
				$checkfor = true; 
			}
		}
		if ($checkfor == true) {
			$positionaf = '';
			$positionbf = '';
			$patra = "/a/i";
			$patrb = "/b/i";
			foreach ($maninp as &$valor) {
				if (preg_match ($patra, $valor)){
					$positionaf= substr($valor, 1); 
				}elseif (preg_match ($patrb, $valor)){
					$positionbf= substr($valor, 1);; 
				}
			}
			if ($positionahidden != 1) {
				$positionam = "col-md-0";
			}else {
				$positionam = "col-md-". $positionaf;
			}
			if ($positionbhidden != 1) {
				$positionbm = "col-md-0";
			}else {
				$positionbm = "col-md-". $positionbf;
			}
		}else {
			if($positionamcount && !$positionbmcount){
				if ($positionahidden == 1){
					$positionam = "col-sm-12";
					$positionbm = "col-sm-0";
				}else {
					$positionam = "col-sm-0";
					$positionbm = "col-sm-0";
				}
			}elseif ($positionamcount && $positionbmcount){
				if (($positionahidden == 1) && ($positionbhidden == 1)){ 
					$positionam = "col-sm-6";
					$positionbm = "col-sm-6";
				}else if(($positionahidden == 1) && ($positionbhidden != 1)){
					$positionam = "col-sm-12";
					$positionbm = "col-sm-0";
				} else if(($positionahidden != 1) && ($positionbhidden == 1)){
					$positionam = "col-sm-0";
					$positionbm = "col-sm-12";
				}else {
					$positionam = "col-sm-0";
					$positionbm = "col-sm-0";
				}
			}elseif (!$positionamcount && $positionbmcount){
				if ($positionbhidden == 1){
					$positionam = "col-sm-0";
					$positionbm = "col-sm-12";
				}else {
					$positionam = "col-sm-0";
					$positionbm = "col-sm-0";
				}
			}
		}
	}
	public function positionhidden(&$positionmodule, $positionmhidden, $positionthidden, $positionphidden){
		if (($positionmhidden == 0) && !($positionmhidden)) {
			$positionmodule = " hidden-xs";
			if (($positionthidden == 0) && !($positionthidden)) {
				$positionmodule = $positionmodule. " hidden-sm";
				if (($positionphidden == 0) && !($positionphidden))  {
					$positionmodule = $positionmodule. " hidden-md hidden-lg";
				}
			}
		}else if (($positionthidden == 0) && !($positionthidden)) {
			$positionmodule = $positionmodule. " hidden-sm";
			if (($positionphidden == 0) && !($positionphidden))  {
				$positionmodule = $positionmodule. " hidden-md hidden-lg";
			}
		}else if (($positionphidden == 0) && !($positionphidden))  {
			$positionmodule = $positionmodule. " hidden-md hidden-lg";
		}else {
			$positionmodule = "";
		}
	}
}
	 	