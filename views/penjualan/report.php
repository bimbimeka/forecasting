<?= yii\helpers\Html::img('@web/img/header.png');?>

<table border="0" width="500px">
    <tr>
        <td width="115px"><b>NAMA ORDER :</b></td>
        <td><?= $model->nama ?></td>
        <td width="85px"><b>TANGGAL : </b></td>
        <td><?= $model->tanggal ?></td>
    </tr>
</table>

<br>
<table border="1" width="220px">
    <tr>
        <td width="115px"><b>JUMLAH</b></td>
        <td class="text-right"><?= $model->qty ?></td>
    </tr>
    <tr>
        <td width="115px"><b>HARGA</b></td>
        <td class="text-right"><?=  Yii::$app->formatter->asCurrency($model->harga, 'Rp. ') ?></td>
    </tr>
    <tr>
        <td width="115px"><b>TOTAL HARGA</b></td> 
        <td>
        <?= $totalharga = $model->qty * $model->harga ?>    
       
        </td>
    </tr>
</table>

<br>
<table border="0" width="500px">
    <tr>
        <td align="center">RINCIAN MODAL</td>
    </tr>
</table>

<table border="1" width="500px">
    <tr>
        <td width="115px"><b>BAHAN</b></td>
         <td><?= $bahan = $model->harga_bahan * $model->qty ?></td>
         <td width="115px"><b>HARGA BAHAN</b></td>
         <td><?=$model->harga_bahan ?></td>
    </tr>
   <tr>
        <td width="115px"><b>SABLON</b></td>
         <td><?= $sablon = $model->sablon->total * $model->qty ?></td>
         <td width="115px"><b>HARGA SABLON</b></td>
         <td><?= $model->sablon->total ?></td>
    </tr>
    <tr>
        <td width="125px"><b>JAHIT</b></td>
        <td><?= $jahit = $model->jahit->total * $model->qty ?></td>
         <td width="115px"><b>HARGA JAHIT</b></td>
         <td><?= $model->jahit->total ?></td>
    </tr>
</table>

<br>

<table border="1" width="500px">
    <tr>
        <td width="145px"><b>TOTAL HARGA PRODUKSI</b></td>
        <td width="115px"><?= $thp = $bahan + $sablon + $jahit  ?></td>
        <td width="115px"><b>UNTUNG / PCS</b></td>
    </tr>
    <tr>
        <td width="115px"><b>TOTAL KEUNTUNGAN</b></td>
        <td width="115px"><?= $tk = $model->total - $thp?></td>
        <td width="115px"><?= $pcs = $tk / $model->qty  ?><b></b></td>
    </tr>
</table>

<br>

<table border="0" width="550px">
    <tr>
        <td align="center">RINCIAN PEMBAGIAN MODAL</td>
    </tr>
</table>
<?= yii\helpers\Html::img('@web/img/sablon.png');?>

<table border="1" width="550px">
    <tr>
        <td colspan="2" align="center">RINCIAN SABLON</td>
        <td rowspan="10" width="60px"> </td>
        <td colspan="2" align="center">TOTAL RINCIAN SABLON</td>
    </tr>
    <tr>
        <td><b>ONGKOS PEGAWAI</b></td>
        <td><?= $model->sablon->ongkos ?></td>
        <td><b>ONGKOS PEGAWAI </b></td>
        <td><?= $ongkos1 = $model->qty *  $model->sablon->ongkos  ?> </td>
    </tr>
     <tr>
         <td><b>CAT </b></td>
        <td><?= $model->sablon->cat ?> </td>
        <td><b>CAT </b></td>
        <td><?= $cat1 = $model->qty *  $model->sablon->cat  ?></td>
    </tr>
     <tr>
         <td><b>LISTRIK</b></td>
        <td><?= $model->sablon->listrik ?></td>
        <td><b>LISTRIK </b></td>
        <td><?= $listrik1 = $model->qty *  $model->sablon->listrik  ?></td>
    </tr>
     <tr>
         <td><b>MAKAN</b></td>
        <td><?= $model->sablon->makan ?></td>
        <td><b>MAKAN </b></td>
        <td><?= $makan1 = $model->qty *  $model->sablon->makan  ?></td>
    </tr>
     <tr>
         <td><b>QIURING & PRESS</b></td>
        <td><?= $model->sablon->press ?> </td>
        <td><b>QIURING & PRESS </b></td>
        <td><?= $press1 = $model->qty *  $model->sablon->press  ?> </td>
    </tr>
     <tr>
         <td><b>DLL</b></td>
        <td><?= $model->sablon->dll ?> </td>
        <td><b>DLL </b></td>
        <td><?= $dll1 = $model->qty *  $model->sablon->dll  ?> </td>
    </tr>
     <tr>
         <td align="right"><b>TOTAL </b></td>
        <td><?= $model->sablon->total ?> </td>
        <td align="right"><b>TOTAL </b></td>
        <td><?= $totalsablon = $model->qty *  $model->sablon->total  ?></td>
    </tr>
</table>

<br>

<?= yii\helpers\Html::img('@web/img/jahit.png');?>

<table border="1" width="550px">
    <tr>
        <td colspan="2" align="center">RINCIAN JAHIT</td>
        <td rowspan="10" width="60px"> </td>
        <td colspan="2" align="center">TOTAL RINCIAN JAHIT</td>
    </tr>
    <tr>
        <td><b>ONGKOS PEGAWAI</b></td>
        <td><?= $model->jahit->ongkos ?></td>
        <td><b>ONGKOS PEGAWAI </b></td>
        <td><?= $jahit1 = $model->qty *  $model->jahit->ongkos  ?> </td>
    </tr>
     <tr>
         <td><b>POTONG</b></td>
        <td><?= $model->jahit->potong ?> </td>
        <td><b>POTONG </b></td>
        <td><?= $potong1 = $model->qty *  $model->jahit->potong  ?></td>
    </tr>
     <tr>
         <td><b>STEAM</b></td>
        <td><?= $model->jahit->steam ?> </td>
        <td><b>STEAM</b></td>
        <td><?= $steam1 = $model->qty *  $model->jahit->steam  ?> </td>
    </tr>
     <tr>
         <td><b>PLASTIK</b></td>
        <td><?= $model->jahit->plastik ?> </td>
        <td><b>PLASTIK</b></td>
        <td><?= $plastik1 = $model->qty *  $model->jahit->plastik  ?> </td>
    </tr>
    <tr>
        <td><b>GAS</b></td>
        <td><?= $model->jahit->gas ?></td>
        <td><b>GAS </b></td>
        <td><?= $gas1 = $model->qty *  $model->jahit->gas  ?></td>
    </tr>
    <td><b>LISTRIK</b></td>
        <td><?= $model->jahit->listrik ?></td>
        <td><b>LISTRIK </b></td>
        <td><?= $listrik2 = $model->qty *  $model->jahit->listrik  ?></td>
    </tr>
     <tr>
         <td><b>MAKAN</b></td>
        <td><?= $model->jahit->makan ?></td>
        <td><b>MAKAN </b></td>
        <td><?= $makan2 = $model->qty *  $model->jahit->makan  ?></td>
    </tr>
    <tr>
         <td><b>BENANG</b></td>
        <td><?= $model->jahit->benang ?></td>
        <td><b>BENANG </b></td>
        <td><?= $benang1 = $model->qty *  $model->jahit->benang  ?></td>
    </tr>
     <tr>
        <td align="right"><b>TOTAL </b></td>
        <td><?= $model->jahit->total ?> </td>
        <td align="right"><b>TOTAL </b></td>
        <td><?= $totaljahit = $model->qty *  $model->jahit->total  ?></td>
    </tr>
</table>

<br>