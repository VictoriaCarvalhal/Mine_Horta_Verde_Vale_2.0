<?php
if(!isset($n)) 
{
	$n = "";
    $data = "";
    $firma = "";
    $ender = "";
    $compl = "";
    $bairro = "";
    $cidade = "";
    $estado  = "";
    $cep  = "";
    $cnpj  = "";
    $inscr  = "";
    $tels  = "";
    $celular  = "";
    $email  = "";
    $obs  = ""; 
}
?>
<form method="post">
    <div class = "frame alert">

        <div class = "row">
            <div class = "form-group col-sm-3">
                <label class="control-label" for= "n">N:</label class= "control-label">
                <input type="number" class="form-control" name="n" size="80" value="<?=$n?>">
            </div>
            <div class = "form-group col-sm-3">
                <label class="control-label" for= "data">Data:</label class= "control-label">
                <input type="date" class="form-control data" name="data" size="80" value="<?=$data?>">
            </div>
        </div>
        <div class = "row">
            <div class = "form-group col-sm-12">
                <label class="control-label" for= "firma">Firma*:</label class= "control-label">
                <input type="text" class="form-control" name="firma" size="80" value="<?=$firma?>">
            </div>
        </div>
        <div class = "row">
            <div class = "form-group col-sm-7">
                <label class="control-label" for= "ender">Ender:</label class= "control-label">
                <input type="text" class="form-control" name="ender" size="80" value="<?=$ender?>">
            </div>
            <div class = "form-group col-sm-5">
                <label class="control-label" for= "compl">Compl:</label class= "control-label">
                <input type="text" class="form-control" name="compl" size="80" value="<?=$compl?>">
            </div>
        </div>
        <div class = "row">
            <div class = "form-group col-sm-5">
                <label class="control-label" for= "bairro">Bairro:</label class= "control-label">
                <input type="text" class="form-control" name="bairro" size="80" value="<?=$bairro?>">
            </div>
            <div class = "form-group col-sm-4">
                <label class="control-label" for= "cidade">Cidade:</label class= "control-label">
                <input type="text" class="form-control" name="cidade" size="80" value="<?=$cidade?>">
            </div>
            <div class = "form-group col-sm-3">
                <label class="control-label" for= "estado">Estado:</label class= "control-label">
                <input type="text" class="form-control" name="estado" size="80" value="<?=$estado?>">
            </div>
        </div>
        <div class = "row">
            <div class = "form-group col-sm-3">
                <label class="control-label" for= "cep">CEP:</label class= "control-label">
                <input type="text" class="form-control cep" name="cep" size="80" value="<?=$cep?>">
            </div>
            <div class = "form-group col-sm-4">
                <label class="control-label" for= "cnpj">CNPJ*:</label class= "control-label">
                <input type="text" class="form-control cnpj" name="cnpj" size="80" value="<?=$cnpj?>">
            </div>
            <div class = "form-group col-sm-5">
                <label class="control-label" for= "inscr">Inscr:</label class= "control-label">
                <input type="text" class="form-control" name="inscr" size="80" value="<?=$inscr?>">
            </div>
        </div>
        <div class = "row">
            <div class = "form-group col-sm-6">
                <label class="control-label" for= "tels">Tels*:</label class= "control-label">
                <input type="text" class="form-control telefoneFixo" name="tels" size="80" value="<?=$tels?>">
            </div>
            <div class = "form-group col-sm-6">
                <label class="control-label" for= "celular">Celular*:</label class= "control-label">
                <input type="text" class="form-control telefoneCelular" name="celular" size="80" value="<?=$celular?>">
            </div>
        </div>
        <div class = "row">
            <div class = "form-group col-sm-12">
                <label class="control-label" for= "email">E-Mail*:</label class= "control-label">
                <input type="text" class="form-control" name="email" size="80" value="<?=$email?>">
            </div>
        </div>
        <div class = "row">
            <div class = "form-group col-sm-12">
                <label class="control-label" for= "obs">OBS:</label class= "control-label">
                <input type="text" class="form-control" name="obs" rows="6" cols="80"></imput>
            </div>
        </div>
        <div class = "row">
            <div class = "form-group col-sm-4">
                <input type="submit" class="form-control" value="Salva">
            </div>
        </div>
    </div>
</form> 