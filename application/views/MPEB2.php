<!DOCTYPE html>
<!--
Copyright (c) Oga Technologies Private Limited. All Rights Reserved.
Unauthorized copying of this file, via any medium is strictly prohibited
Proprietary and confidential.
Written by Oga Technologies, October 1,  2016.
-->
<html>

    <head>
        <title>MPEB Affidavit Sampada</title>
        <?php
        require_once('assets/html_head_links.php');
        ?>
        <style>

            @media print
            {
                /*@page {size: landscape}*/
                .non-printable { display: none; }
                #printable { display: block;}
                select::-ms-expand {	
                    display: none; 
                }
                select{
                    -webkit-appearance: none;
                    appearance: none;
                    width: auto;
                    border: none !important; 
                    box-shadow: none ;
                    font-size: 20px;
                }

            }
            @page {
                margin: 5mm 15mm 5mm 15mm;
            }

            .form-control{
                font-size: 20px;
                color: #000;
            }
            hr{
                margin-top: 0; 
                margin-bottom: 0; 
                border: 0;
                border-top: 1px solid #000;
            }

            p{             
                font-size: 20px;
                font-family: Kruti-Dev-010;
                font-weight: 600;
                text-align: justify;
            }

            .table-bordered {
                border: 1px solid #000 !important;
            }
            .table-bordered > thead > tr > th,
            .table-bordered > tbody > tr > th,
            .table-bordered > tfoot > tr > th,
            .table-bordered > thead > tr > td,
            .table-bordered > tbody > tr > td,
            .table-bordered > tfoot > tr > td {
                border: 1px solid #000 !important;
            }

          .table > tbody > tr > td{
                padding: 0px !important;
                border: none;
            }
        </style>
    </head>
    <body>
        <div class="non-printable">
            <?php
            require_once('assets/top_menu.php');
            require_once('assets/side_menu.php');
            ?>
        </div>
       
        <div class="main">
            <div class="container">
                <a href="javascript: history.go(-1)" class="btn btn-primary pull-right clickable non-printable" role="button"><i class="fa fa-arrow-left" aria-hidden="true"></i> &nbsp;&nbsp;Back&nbsp;&nbsp;&nbsp;</a>
                
                <?php
                $listing = explode('__', $ll);
                $userid = $listing[1];
                $unit_no = $listing[2];
                $doc_type = 'MPEB2';
                $pdf = $this->Search_all_form_model->first_check_pdf($userid, $doc_type);

                if ($pdf != 'error') {
                    $browsername = $_SERVER['HTTP_USER_AGENT'];
                    if (strpos($browsername, 'Chrome')) {
                        ?>
                        <iframe style="width: 1107px; height: 1200px;" src="<?php echo base_url($pdf); ?>"></iframe>
                        <?php
                    } else {
                        ?>
                        <OBJECT data="<?php echo base_url($pdf); ?>" TYPE="application/x-pdf" TITLE="SamplePdf" WIDTH=1000 HEIGHT=1500 style="margin-left:140px;">
                        <!--a href="<?php //echo base_url('uploads/uploaded_docs/Allotment Letter_144_ESSARJEE SAMPADA_20180131011018.pdf');                ?>">afdfdaf</a--> 
                        </object>
                        <?php
                    }
                } else {
                    ?>
                <br> <br> <br> 
            </div>
            <div id="printable">
                <div class="container">
                    
                    <p class="text-right">ifjf'k"V</p>
                    <br> <br> <br> <br> <br> <br> <br> <br> <br>
                    <p class="text-center"><b>fuEunkc ds miHkksDrkvksa dks fo|qr iznk; gsrq ekud vuqca/k izk:i</b></p>
                    <br><p>;g vuqca/k vkt fnukad ------------------ekg ------------------lu~ nks gtkj ------------------------------dks fd;k x;k A ftlesa ,d vksj e/;izns'k e/; {ks= fo|qr forj.k dEiuh fyfeVsM ¼vuqKfIr/kkjh dk uke½ ftls ,rn~ i'pkr ^^vuqKfIr/kkjh^^ dgk tk,xk] tks vfHkO;fDr tc rd fd og fo"k; vFkok lanHkZ ls foijhr u gksus dh fLFkfr esa mlds mRrjkf/kdkjh rFkk vfHkgLrkafdrh lfEefyr gksaxs rFkk nwljh vksj --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------¼miHkksDrk dk uke rFkk foLr`r irs dk mYys[k fd;k tk, A ,d iathd`r Hkkxhnkj laLFkk ds izdj.k esa laLFkk ds izca/kd Hkkxhnkj vFkok Hkkxhnkj] tks vuqca/k dk fu"iknu dj jgk gks dk uke rFkk mlds irs dk mYys[k fd;k tk;s A ,d daiuh ds izdj.k esa] tks daiuh vf/kfu;e 1956 ds mica/kksa ds varxZr fuxfer dh xbZ gS] daiuh dk iathd`r irk rFkk izca/k lapkyd dk uke vFkok ml vf/kdkjh dk uke] ftls vuqca/k ds fu"iknu gsrq lE;d :i ls izkf/kd`r fd;k x;k gS] mYysf[kr fd;k tk,½ ¼ftls ,rn~ i'pkr~ ^^miHkksDrk dgk tk,xk tks fo"k; ;k lanHkZ foijhr u gksus dh ifjfLFkfr esa] mlds okfjl] fu"iknu&drkZ] iz'kkld] dkuwuh izfrfuf/k] mRrjkf/kdkjh rFkk vfHkgLrkafdrh lfEefyr gksaxs½A</p>
                    <p>tSlk fd miHkksDrk }kjk vuqKfIr/kkjh dks miHkksDrk ds 'kgj@xzke --------------------------------------------------------------------------------------------------ftyk--------------------------------------------------------------------------------------------------fLFkr ifjlj esa ¼uD'kk layXu gS½ fo|qr ÅtkZ iznk; gsrq] vuqjks/k fd;k x;k gS rFkk bl ifjlj dks layXu uD'ks esa vf/kd lqLi"V :i ls n'kkZ;suqlkj fpfUgr dj jax ls vafdr fd;k x;k gS rFkk vuqKifIr/kkjh }kjk bls fo|qr iznk; gsrq ,rn~ }kjk fuEu n'kkZ;s vuqlkj fu/kkZfjr fuEu fuca/ku rFkk 'krkZsa ds v/khu lgefr nh gSA</p><br>
                    <p class="text-right"><b>gLrk- miHkksDrk</b></p>
                    <br> <br> <br> <br> <br> <br> <br> <br> <br>  <br>  <br>
                    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
                    <br> <br> <br> <br> <br> <br> <br> <br> <br>  <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 
                </div> 
                <hr class="non-printable">
   
                <div class="container">
                    <p>lHkh mifLFkr blds lk{kh gSa fd miHkksDrk }kjk ,rn~ i'pkr~ ;Fkkof.kZr fd;s tkus okys Hkqxrku ds izfrQy esa] ,rn~ }kjk fuEukafdr 'krksZa ds laca/k esa lgefr gqbZ gS fd % </p><br>
                    <p>1-  vuqca/k dh vof/k % ;g vuqca/k fo|qr iznk; dh fnukad ls ;k vuqKfIr/kkjh }kjk miHkksDrk dks vuqca/k ds v/khu fo|qr ÅtkZ ds iznk; miyC/k gksus laaca/kh nh xbZ lwpuk] ds 30 fnuksa dh vof/k lekIr gksus ds rRdky i'pkr~ dh fnukad ls buesa tks Hkh igys gks] ls izkjaHk gksxkA ;g vuqca/k] vuqca/k ds izkjaHk gksus dh frfFk ls nks o"kZ dh lekfIr rd ykxw jgsxk rFkk rRi'pkr~ o"kZ&izfr o"kZ rd pkyw ekuk tk,xk] tc rd bl vuqca/k dh df.Mdk 4 ds vuqlkj bl vuqca/k dks lekIr ugha dj fn;k tkrk gSA ¼?kjsyw rFkk ,dy Qsl xSj&?kjsyw miHkksDrk gsrq] vuqca/k dh dksbZ izkjafHkd vof/k ugh gksxh½A</p><br>
                    <p>e/;izns'k fo|qr fu;e vk;ksx ¼ftls ,rn~ i'pkr~ vk;ksx dgk tkosxk½ }kjk fu/kkZfjr vU; iz;ksT; fofu;eksa ds izko/kkuksa rFkk dksbZ la'kks/ku tSls fd os le; ij iz;ksT; gksa] dks vuqKfIr/kkjh }kjk miHkksDrk dks iznk; dj fn;k x;k gS rFkk miHkksDrk }kjk bldks le> fy;k x;k gS rFkk ,sls lHkh vuqca/kuksa ,oa 'krksZa ds ikyu dh lgefr ns nh gSA</p><br>
                    <p>3-  fo|qr iznk; dh ek= % ,rn~ i'pkr~ of.kZr izko/kkuksa ds v/;;hu rFkk vuqca/k ds pkyw jgus dh vof/k ds nkSjku] vuqKfIr/kkjh miHkksDrk dks fo|qr iznk; djsxk rFkk miHkksDrk vuqKfIr/kkjh ls] vU; fdlh izdkj ls tSlk fd mls fof/k ds vuqlkj vuqKs; fd;k x;k gS] vuqKfIr/kkjh ls lafonk ekax ------------------------------------------- dsoh,@------------------------------------------- fdyksokWV ¼ds-MCyq½@------------------------------------------------------------------v'o'kfDr ¼gklZ ikoj½ ------------------------------------------------ls rFkk --------------------------------------------------ls -------------------------------------dsoh,@ ------------------------------------------------------fdyksokV ¼ds-MCy;q½ -------------------------------------------------------------v'o'kfDr rd rFkk blls vf/kd u gks] fo|qr ÅtkZ izkIr djsxkA</p><br>
                    <p>4-  fo|qr iznk; dk izdkj % mijksDr fo|qr iznk;] 50 gV~Zt vkYVjusfVax djaV iz.kkyh ls ------------------------------------------------oksYVst ds lkekU; ncko rFkk ----------------------------------------------------Qst ij gksxhA iznk; ds fcUnq ij fo|qr iznk; dh vko`fRk ¼fÝDosalh½ ,oa ncko ¼izs'kj½ mu mrkj&p<+koksa ds v/;;hu gksaxs tks fo|qr ÅtkZ ds mRiknu ,oa ikjs"k.k ds vkuq"kafxd gSA ysfdu ,sls mrkj&p<+ko vuqKfIr/kkjh ds fu;a=.k ls ijs dkj.kksa dks NksM+dj] Hkkjrh; fo|qr fu;e] 1956 esa vFkok vU; dksbZ iz;ksT; fu;eksa rFkk fofu;eksa esa micaf/kr lhekvksa ls vf/kd u gksaxsA</p><br>
                    <p>5-  izfrHkwfr fu{ksi % miHkksDrk vk;ksx }kjk fofu;eksa ds varxZr fu/kkZfjr ^izfrHkwfr^ dk Hkqxrku djsxkA miHkksDrk vk;ksx }kjk tkjh fofu;eksa ds varxZr] tSls rFkk tc Hkh] vuqKfIr/kkjh }kjk izfrHkwfr fu{ksi dh ekax dh tkrh gS] Hkqxrku djus dk opu nsrk gSA izfrHkwfr fu{ksi dh 'ks"k vfrfjDr jkf'k tek u fd;s tkus dh n'kk esa] vuqKfIr/kkjh dks miHkksDrk dks 'ks"k vfrfjDr jkf'k dks tek fd;s tkus ds ifjikyu gsrq iwjs 15 fnolksa dh lwpuk nsdj] fo|qr iznk; foPNsn djus dk vf/kdkj gksxkA</p><br>
                    <p>6-  ehVfjax % miHkksDrk }kjk bl vuqca/k ds v/khu izkIr dh xbZ fo|qr ÅtkZ ds iathdj.k ds mn~ns'; ls] vuqKfIr/kkjh }kjk mi;qDr ehVj ¼eki;a=½ rFkk ehVfjax ¼eki;a=ksa½ midj.k iznk; rFkk la/kkfjr fd;s tk,axsA</p><br>
                    <p class="text-center"><b>gLrk- miHkksDrk</b></p><br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 
                    <p>7-  miHkksDrk }kjk Hkqxrku fd;s tkus okys izHkkj % miHkksDrk dks bl vuqca/k ds v/khu ekax dh xbZ ÅtkZ ,oa iznk; dh xbZ fo|qr ÅtkZ ds fy;s lsok dh -------------------- Js.kh ij ykxw fo|qr&nj ¼VSfjQ½ vuqlkj izHkkj vU; fuca/kuksa rFkk 'krksZa lfgr ,oa le; ij ykxw dh xbZ ^fofo/k izHkkjksa dh vuqlwph ^ ds vuqlkj Hkh mls vuqKfIr/kkjh dks Hkqxrku djuk gksxkA vuqca/k ds izkjaHk gks tkus ds i'pkr~] le; ij vk;ksx }kjk tkjh VSfjQ vkns'k esa fufnZ"V fodYi ds vfrfjDr] izkjafHkd vuqca/k dh 2 o"kZ dh le;kof/k esa dsoy ,d ckj dks NksM+dj oSdfYid VSfjQ ds p;u ds fodYi dh vuqefr ugha nh tk,xhA ijUrq izfrca/k ;g gS fd miHkksDrk dks e/;izns'k fo|qr iznk; lafgrk] 2013 VSfjQ] fofo/k izHkkjksa dh vuqlwph rFkk vU; izHkkj] tSlk fd os vk;ksx }kjk le; ij vuqeksfnr fd;s tk,a] ds vfrfjDr fo|qr 'kqYd] midj ds vfrfjDr] vU; fdlh fof/k ds v/khu fu/kkZfjr fd;s x;s vu; dksbZ ysOgh] vFkok 'kqYd dk Hkqxrku Hkh djuk gksxkA</p><br>
                    <p>8-  foPNsnu % miHkksDrk }kjk bl vuqca/k dh 'krksZa ;k fdlh Hkh 'krZ ds ikyu u djus dh n'kk esa] vuqKfIr/kkjh iz;ksT; fu;eksa rFkk fofu;eksa ds varxZr] miHkksDrk dk fo|qr iznk; foPNsn fd;s tkus ckor~ Lora= gksxk rFkk vuqKfIr/kkjh miHkksDrk dks bl izdkj gqbZ fdlh gkfu rFkk {kfr ds QyLo:Ik fdlh izdkj dh {kfriwfrZ djus gsrq ck/; u gksxk] rFkkfi blls vuqKfIr/kkjh ds cdk;k jkf'k ;k ,slh foPNsnu vof/k ds nkSjku ykxw ekax@U;wure izHkkjksa dh olwyh ds vf/kdkj izHkkfor u gksaxsA</p><br>
                    <p>9-  vuqKfIr/kkjh vFkok miHkksDrk esa ls fdlh ds }kjk vuqca/k dk lekiu % ?kjsyw ,oa ,dy Qst ds xSj&?kjsyw miHkksDrk Js.kh ds miHkksDrk vuqca/k dks 15 fnol dh lwpuk i'pkr~ lekIr dj ldrs gSaA vU; miHkksDrk nks o"kZ dh izkjafHkd vof/k ds lekIr gksus ds i'pkr~] ,d ekg dh lwpuk nsdj vuqca/k dk lekiu dj ldrs gSaA vuqKfIr/kkjh Hkh blh izdkj dh lwpuk nsdj fyf[kr dkj.k n'kkZrs gq,] vuqca/k dk lekiu dj ldrk gSA ijUrq izfrcU/k ;g gS fd ;fn cdk;k jkf'k ds Hkqxrku u gksus ds dkj.k ;k e/;izns'k fo|qr iznk; lafgrk] 2013 ds v/khu tkjh funZs'kksa ds xSj&vuqikyu ds dkj.k] 60 fnol dh vof/k ds fy;s foPNsfnr jgrh gS rFkk vuqKfIr/kkjh }kjk nh xbZ dkj.k crkvks lwpuk ds ckn Hkh] miHkksDrk }kjk foPNsnu ds fufeRrksa dks nwj djus gsrq vkSj lwpuk dh fofufnZ"V vof/k esa fo|qr iznk; cgky djus gsrq miHkksDrk }kjk dksbZ izHkko'kkyh dne ugha mBk;k tkrk gS] rks ,slh n'kk esa vuqKfIr/kkjh }kjk miHkksDrk ls fd;k x;k vuqca/k lwpuk easa fofufnZ"V dh xbZ vof/k ds lekiu mijkUr] Lo;aso lekIr gks x;k] le>k tk,xkA ^dkj.k crkvksa lwpuk^ dh vof/k lkr fnol gksxhA</p><br>
                    <p>rFkkfi] ?kjsyw rFkk ,dy Qst xSj&?kjsyw Js.kh ds  miHkksDrkvksa ds vykok vU; miHkksDrk Jsf.k;ksa ds vuqca/k dh izkjafHkd vof/k ls iwoZ vuqca/k dks lekIr fd;k tkuk gks] rks miHkksDrk dks vuqca/k dh 'ks"k vof/k gsrq VSfjQ vuqlkj izHkkjksa ds Hkqxrku dk nsunkj gksXkkA</p><br>
                    <p>10-  fo'ks"k 'krZsa % ¼izi= ds vUr eas Vhi ns[ksa½</p><br>
                    <p>11-  i= O;ogkj %</p><br>
                    <p>&nbsp;&nbsp;¼d½  miHkksDrk dks lEcksf/kr fd;s x;s fdlh i=] vkns'k ;k vfHkys[k dh rkehyh] fo|qr vf/kfu;e] 2003 dh /kkjk 171 esa fu/kkZfjr dh xbZ jhfr vuqlkj bl vuqca/k esa izLrkouk esa n'kkZ;sa x;s irs ij Mkd }kjk ;k mls lqiqnZ dj dh tk,xhA</p><br>
                    <p>&nbsp;&nbsp;¼[k½  vuqKfIr/kkjh dks leLr i= O;ogkj ----------------------------------------------------------------------------------------------------------------------------------------------dks vFkok bl laaca/k esa izkf/kd`r vFkok ukekafdr fd;s x;s dk;kZy; dks] lacksf/kr fd;s tk,axsA</p><br>
                    <p>12-  eqnzkad 'kqYd % miHkksDrk eqnzkad 'kqYd ¼LVkEi M~;wVh½ dh ykxr rFkk bl vuqca/k ds iw.kZ fu"iknu ls lacaf/kr leLr vkuq"kafxd O;;ksa dks ogu djus dh lgefr nsrk gSA</p><br>
                    <p class="text-center"><b>gLrk- miHkksDrk 	</b></p><br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 
                    <p>13-  fookn % ;g vuqca/k vuqKfIr/kkjh ds LFkkuh; iathd`r dk;kZy; esa fd;k x;k ekuk tk,xk rFkk bl vuqca/k ls lacaf/kr leLr fookn rFkk nkos] ;fn dksbZ gksa] rks budk fujkdj.k vuqKfIr/kkjh ds ,sls LFkkuh; dk;kZy; tks miHkksDrk dh f'kdk;r fuokj.k izfØ;k laca/kh fn'kk&funsZ'kksa esa mYysf[kr gS] esa fujkd`r fd;k tk,xk vFkok vuqKfIr/kkjh ds izpkyu {ks= ds varxZr fLFkfr fdlh l{ke U;k;ky; esa ijh{k.kh; gksxkA </p><br>
                    <p>mHk; Ik{kdkjksa }kjk fuEu lkf{k;ksa ds le{k  </p><br>
                    <p>fnukad ---------------------------- ekg ------------------------------ lu~ nks gtkj --------------------------- dks gLrk{kj fd;s x;s rFkk eqnzkafdr dh xbZA</p><br>
                    <table class="table table-bordered">
                        <tr>
                            <td><p class="text-center">miHkksDrk ds gLrk{kj] uke ,oa irk</p></td>
                            <td><p  class="text-center">vuqKfIr/kkjh ds izkf/kd`r gLrk{kjdrkZ ds            gLrk{kj uke ,oa irk</p></td>
                        </tr>
                        <tr>
                            <td><p> &nbsp;&nbsp;&nbsp;gLrk{kj %&</p></td>
                            <td><p> &nbsp;&nbsp;&nbsp;gLrk{kj %&</p></td>
                        </tr>
                        <tr>
                            <td><p> &nbsp;&nbsp;&nbsp;Uke %& </p></td>
                            <td><p> &nbsp;&nbsp;&nbsp;Uke %& </p></td>
                        </tr>
                        <tr>
                            <td><p> &nbsp;&nbsp;&nbsp;Ikrk %&</p></td>
                            <td><p> &nbsp;&nbsp;&nbsp;Ikrk %& </p></td>
                        </tr>
                    </table><br>
                    <table class="table table-bordered">
                        <tr>
                            <td><p class="text-center">miHkksDrk }kjk fd;s x;s fu"iknu ds lk{khx.kksa ds gLrk{kj ,o airs</p></td>
                            <td><p  class="text-center">vuqKfIr/kkjh }kjk fd;s x;s fu"iknu ds lk{khx.kksa ds gLrk{kj ,oa irsA</p></td>
                        </tr>
                        <tr>
                            <td><p>1<span style=" font-family: Titillium;">.</span> gLrk{kj %&</p></td>
                            <td><p>1<span style=" font-family: Titillium;">.</span> gLrk{kj %&</p></td>
                        </tr>
                        <tr>
                            <td><p>&nbsp;&nbsp;&nbsp;Ukke %& </p></td>
                            <td><p>&nbsp;&nbsp;&nbsp;Ukke %& </p></td>
                        </tr>
                        <tr>
                            <td><p>&nbsp;&nbsp;&nbsp;Ikrk %& </p><br></td>
                            <td><p>&nbsp;&nbsp;&nbsp;Ikrk %& </p><br></td>
                        </tr>
                        <tr>
                            <td><p>2<span style=" font-family: Titillium;">.</span> gLrk{kj %&</p></td>
                            <td><p>2<span style=" font-family: Titillium;">.</span> gLrk{kj %&</p></td>
                        </tr>
                        <tr>
                            <td><p>&nbsp;&nbsp;&nbsp;Ukke %& </p></td>
                            <td><p>&nbsp;&nbsp;&nbsp;Ukke %& </p></td>
                        </tr>
                        <tr>
                            <td><p>&nbsp;&nbsp;&nbsp;Ikrk %&</p><br></td>
                            <td><p>&nbsp;&nbsp;&nbsp;Ikrk %& </p><br></td>
                        </tr>
                    </table><br>
                    <p>&nbsp; lkekU; eqnzk ¼dkWeu lhy½ fuEu lkf{k;ksa ds le{k eqnzkafdr dh xbZ ¼dsoy fyfeVsM daifu;ksa ds izdj.kksa esa½</p><br>
                    <p>1<span style=" font-family: Titillium;">.</span></p><br>
                    <p>2<span style=" font-family: Titillium;">.</span><span class="pull-right">lkekU; eqnzk</span> </p><br><br>
                    <p>Vhi%</p><br>
                    <div class="row">
                        <div class="col-xs-1" style="width: 3.333333%;">
                            <p>•</p><br>
                        </div>
                        <div class="col-xs-11">
                            <p> vkosnu ds lkFk miHkksDrk }kjk layXu fd;k x;k ud'kk tks vuqKfIr/kkjh }kjk lR;kfir fd;k x;k gks rFkk ftl ij fo|qr iznk; fcUnq fpUgkafdr fd;k x;k gks] bl vuqca/k dk Hkkx ekuk tk,xk o mHk; i{kksa }kjk bls gLrk{kfjr fd;k tk,xkA</p><br>
                        </div>                       
                    </div>
                    <div class="row">
                        <div class="col-xs-1" style="width: 3.333333%;">
                            <p>•</p><br>
                        </div>
                        <div class="col-xs-11">
                            <p>,slh vU; ;k fo'ks"k 'krsZa ftu ij vuqKfIr/kkjh rFkk miHkksDrk ds chp lgefr gks vkSj tks fo|eku fu;eksa@fofu;eksa ds vuq:i gksA</p><br>
                        </div>                       
                    </div>
                    <div class="row">
                        <div class="col-xs-1" style="width: 3.333333%;">
                            <p>•</p><br>
                        </div>
                        <div class="col-xs-11">
                            <p> bl fuEunkc fo|qr iznk; ds vuqca/k i= ds fgUnh :ikarj.k dh O;k[;k ;k foospu ;k le>us dh fLFkfr esa fdlh izdkj dk fojks/kkHkkl ;k Hkzakfr gksus ij blds vaxzsth laLdj.k ¼ewy laLdj.k½ ds lacaf/kr izko/kkuksa esa nh xbZ foospuk ds vuqlkj gh mldk rkRi;Z ekuk tk,xkA</p><br>
                        </div>                       
                    </div><br>
                    <p class="text-center">gLrk- miHkksDrk</p><br>

                </div> <br><br><br><br><br><br><br><br><br><br>
                <hr class="non-printable">
                <div class="container">
                    <br>
                    <p class="pull-right" >ifjf'k"V & 1</p><br>
                    <p>laHkkx ----------------------------------------------------------------- <span style=" font-family: Titillium;">R-1</span> Øekad ---------------------------------------------- fnukad -------------------------------------------------</p><br>
                    <div class="row">
                        <div class="col-xs-10">
                            <p class="text-center">vkosnu izi= & fuEu nkc fo|qr la;kstu gsrq</p>
                            <p class="text-center" >uohu fo|qr la;kstu@ifjlj dk ifjorZu@lafonk ekax esa ifjorZu@</p>
                            <p class="text-center" >VSfjQ Js.kh esa ifjorZu@miHkksDrk ds uke easa ifjorZu</p>
                            <p class="text-center" >¼tks½ lacaf/kr u gks] mls d`i;k dkV nsa½</p><br>
                            <p>izfr]<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&
                            </p>
                        </div>
                        <div class="col-xs-2">
                            <div class="thumbnail">
                                <br><br><br>
                                <p class="text-center">ikliksVZ vkdkj <br>
                                    dk QksVks <br>
                                    ;gkWa fpidk,a
                                </p>
                                <br>
                            </div>
                        </div>
                    </div>

                    <p>egksn;]<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;eSa@ge] esjs gekjs ifjlj ds fo|qr la;kstu gsrq vkosnu djrk g¡w@djrs gSaA vko';d tkudkjh fuEufyf[kr gSa%&</p><br>
                    <p>1-   	miHkksDrk</p>
                    <div class="row">
                        <div class="col-xs-1" style="width: 3.333333%;">
                            <p> ¼v½ </p>
                        </div>
                        <div class="col-xs-5">
                            <p> vkosnd@laLFkk dk uke	</p>
                        </div>
                        <div class="col-xs-1" style="width: 3.333333%;">
                            <p>  %</p>
                        </div>
                        <div class="col-xs-5">
                            <p> &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-1" style="width: 3.333333%;">
                            <p>¼v½</p>
                        </div>
                        <div class="col-xs-5">
                            <p> vkosnd@laLFkk dk uke			</p>
                        </div>
                        <div class="col-xs-1" style="width: 3.333333%;">
                            <p>  %</p>
                        </div>
                        <div class="col-xs-5">
                            <p>  &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-1" style="width: 3.333333%;">
                            <p>¼c½</p>
                        </div>
                        <div class="col-xs-5">
                            <p> firk@ifr@lapkyd@lk>hnkj U;klh dk uke			</p>
                        </div>
                        <div class="col-xs-1" style="width: 3.333333%;">
                            <p>  %</p>
                        </div>
                        <div class="col-xs-5">
                            <p>  &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-1" style="width: 3.333333%;">
                            <p>¼l½ </p>
                        </div>
                        <div class="col-xs-5">
                            <p> ifjlj dk iw.kZ irk ¼fiu n'kkZrs gq,½			</p>
                        </div>
                        <div class="col-xs-1" style="width: 3.333333%;">
                            <p>  %</p>
                        </div>
                        <div class="col-xs-5">
                            <p>  &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-1" style="width: 3.333333%;">
                            <p> </p>
                        </div>
                        <div class="col-xs-5">
                            <p> tg¡k fo|qr la;kstu ds fy, vkosnu fd;k tkrk gS 			</p>
                        </div>
                        <div class="col-xs-1" style="width: 3.333333%;">
                            <p>  %</p>
                        </div>
                        <div class="col-xs-5">
                            <p>   &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-1" style="width: 3.333333%;">
                            <p> </p>
                        </div>
                        <div class="col-xs-5">
                            <p> ;k tg¡k ifjorZu izLrkfor gSA				</p>
                        </div>
                        <div class="col-xs-1" style="width: 3.333333%;">
                            <p>  %</p>
                        </div>
                        <div class="col-xs-5">
                            <p>   &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-1" style="width: 3.333333%;">
                            <p> </p>
                        </div>
                        <div class="col-xs-5">
                            <p> nwjHkk"k Øekad@eksckbZy ua-					</p>
                        </div>
                        <div class="col-xs-1" style="width: 3.333333%;">
                            <p>  %</p>
                        </div>
                        <div class="col-xs-5">
                            <p>   &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-1" style="width: 3.333333%;">
                            <p> ¼<span style=" font-family: Titillium;">i</span>½  </p>
                        </div>
                        <div class="col-xs-5">
                            <p> dkj[kkuk@ifjlj			</p>
                        </div>
                        <div class="col-xs-1" style="width: 3.333333%;">
                            <p>  %</p>
                        </div>
                        <div class="col-xs-5">
                            <p>   &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-1" style="width: 3.333333%;">
                            <p>¼<span style=" font-family: Titillium;">ii</span>½    </p>
                        </div>
                        <div class="col-xs-5">
                            <p>  iathd`r dk;kZy; ¼Mkd ds irk lfgr½		</p>
                        </div>
                        <div class="col-xs-1" style="width: 3.333333%;">
                            <p>  %</p>
                        </div>
                        <div class="col-xs-5">
                            <p>   &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-1" style="width: 3.333333%;">
                            <p>¼<span style=" font-family: Titillium;">iii</span>½       </p>
                        </div>
                        <div class="col-xs-5">
                            <p>  fuokl ¼Mkd dk irk½		</p>
                        </div>
                        <div class="col-xs-1" style="width: 3.333333%;">
                            <p>  %</p>
                        </div>
                        <div class="col-xs-5">
                            <p>   &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-1" style="width: 3.333333%;">
                            <p>¼<span style=" font-family: Titillium;">iv</span>½       </p>
                        </div>
                        <div class="col-xs-5">
                            <p> bZ&esy		</p>
                        </div>
                        <div class="col-xs-1" style="width: 3.333333%;">
                            <p>  %</p>
                        </div>
                        <div class="col-xs-5">
                            <p>   &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& </p>
                        </div>
                    </div>
                    <div class="row">                    
                        <div class="col-xs-5">
                            <p>cSad [kkrk Øekad rFkk cSad dk uke ¼,sfPNd½		</p>
                        </div>
                        <div class="col-xs-1" style="width: 3.333333%;">
                            <p></p>
                        </div>
                        <div class="col-xs-1" style="width: 3.333333%;">
                            <p>  %</p>
                        </div>

                        <div class="col-xs-5">
                            <p>   &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& </p>
                        </div>
                    </div>
                    <div class="row">                    
                        <div class="col-xs-5">
                            <p>fo|eku Lohd`r Hkkj@lafonk ekax] ;fn dksbZ gks			</p>
                        </div>
                        <div class="col-xs-1" style="width: 3.333333%;">
                            <p></p>
                        </div>
                        <div class="col-xs-1" style="width: 3.333333%;">
                            <p>  %</p>
                        </div>
                        <div class="col-xs-5">
                            <p>  &&&&&&&&&&&&&&&&&& ¼mPp nkc@fuEu nkc½ </p>
                        </div>
                    </div>
                    <div class="row">                    
                        <div class="col-xs-5">
                            <p>lsok la;kstu Øekad Øekad ¼fo|eku la;kstu gsrq½				</p>
                        </div>
                        <div class="col-xs-1" style="width: 3.333333%;">
                            <p></p>
                        </div>
                        <div class="col-xs-1" style="width: 3.333333%;">
                            <p>  %</p>
                        </div>
                        <div class="col-xs-5">
                            <p> </p>
                        </div>
                    </div>
                    <br>
                    <p><b>fuEu nkc iznk;%</b></p>
                    <br>
                    <div class="row">     
                        <div class="col-xs-1" style="width: 3.333333%;">
                            <p>2-</p>
                        </div>
                        <div class="col-xs-5">
                            <p>lehiLFk fo|qr [kEcs dk Øekad tgkWa ls dusD'ku<br> fy;k tkuk lEHkkfor gSA				</p>
                        </div>
                        <div class="col-xs-1" style="width: 3.333333%;">
                            <p>  %</p>
                        </div>
                        <div class="col-xs-5">
                            <p>  &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& </p>
                        </div>
                    </div>
                    <div class="row">     
                        <div class="col-xs-1" style="width: 3.333333%;">
                            <p>3-</p>
                        </div>
                        <div class="col-xs-5">
                            <p>ifjlj dk fufeZr {ks=Qy@IykWV dk {ks=Qy	</p>
                        </div>
                        <div class="col-xs-1" style="width: 3.333333%;">
                            <p>  %</p>
                        </div>
                        <div class="col-xs-5">
                            <p>  &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& </p>
                        </div>
                    </div>
                    <div class="row">     
                        <div class="col-xs-1" style="width: 3.333333%;">
                            <p>4-</p>
                        </div>
                        <div class="col-xs-5">
                            <p>fo|qr vkiwfrZ dh Js.kh ¼Jsf.k;ksa dh lwph layXu gS½</p>
                        </div>
                        <div class="col-xs-1" style="width: 3.333333%;">
                            <p>  %</p>
                        </div>
                        <div class="col-xs-5">
                            <p>  &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& </p>
                        </div>
                    </div>
                    <div class="row">     
                        <div class="col-xs-1" style="width: 3.333333%;">
                            <p>5-</p>
                        </div>
                        <div class="col-xs-5">
                            <p>fo|qr vkiwfrZ dk mn~ns'; ¼mi Jsf.k;ksa dh lwph layXu gSA½	</p>
                        </div>
                        <div class="col-xs-1" style="width: 3.333333%;">
                            <p>  %</p>
                        </div>
                        <div class="col-xs-5">
                            <p>  &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& </p>
                        </div>
                    </div>
                    <div class="row">     
                        <div class="col-xs-1" style="width: 3.333333%;">
                            <p>6-</p>
                        </div>
                        <div class="col-xs-5">
                            <p>fo|qr vkiwfrZ dk izdkj %	</p>
                        </div>

                        <div class="col-xs-5">
                            <p class=" text-right"> LFkkbZ@vLFkkbZ </p>
                        </div>
                    </div>
                    <div class="row">     
                        <div class="col-xs-1" style="width: 3.333333%;">
                            <p></p>
                        </div>
                        <div class="col-xs-11">
                            <p>¼tks ykxw gks mls fVd djsa vkSj ykxw u gks mls dkVsa½</p>
                        </div>
                    </div>
                    <div class="row">     
                        <div class="col-xs-1" style="width: 3.333333%;">
                            <p></p>
                        </div>
                        <div class="col-xs-11">
                            <p>;fn vLFkkbZ gS rks vof/k fy[ksa %& fnukad &&&&&&&&&&&&&&&&&&ls fnukad &&&&&&&&&&&&&&&&&&&rd</p>
                        </div>
                    </div>
                    <div class="row">     
                        <div class="col-xs-1" style="width: 3.333333%;">
                            <p>7-</p>
                        </div>
                        <div class="col-xs-11">
                            <p>izLrkfor Hkkj</p>
                        </div>
                    </div>
                    <div class="row">     
                        <div class="col-xs-1" style="width: 3.333333%;">
                            <p></p>
                        </div>
                        <div class="col-xs-11">
                            <div class="col-xs-1" style="width: 3.333333%;">
                                <p>¼v½  </p>
                            </div>
                            <div class="col-xs-11">
                                <p>?kjsyw miHkksDrkvksa ds fy, &&&&&&&&&&&&&&&&&&okWV <br> ¼d`i;k la;ksftr Hkkj dh x.kuk ds fy, izi= layXu djsa½  </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">     
                        <div class="col-xs-1" style="width: 3.333333%;">
                            <p></p>
                        </div>
                        <div class="col-xs-11">
                            <div class="col-xs-1" style="width: 3.333333%;">
                                <p>¼c½    </p>
                            </div>
                            <div class="col-xs-11">
                                <p> vU; Jsf.k;ksa ds miHkksDrk ¼?kjsyw dks NksM+dj½ fuEu lkj.kh esa fooj.k Hkjsa <br> ¼;fn vko';d gks rks gLrk{kj djds lwph vyx ls nh tkos½  </p>
                            </div>
                        </div>
                    </div>
                </div> 
                <hr class="non-printable">
                <div class="container">
                    <p class="text-right" >ifjf'k"V & 2</p><br>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <td><p class="text-center">midj.k</p></td>
                                <td><p class="text-center">fo|qr Hkkj izfr midj.k ¼okWV esa½</p> </td>
                                <td><p class="text-center">la[;k</p></td>
                                <td><p class="text-center">dqy fo|qr Hkkj ¼okWV esa½</p></td>
                            </tr>
                            <tr>

                                <td><span>&nbsp;</span></td>
                                <td><span>&nbsp;</span></td>
                                <td><span>&nbsp;</span></td>
                                <td><span>&nbsp;</span></td>
                            </tr>
                            <tr>
                                <td><span>&nbsp;</span></td>
                                <td><span>&nbsp;</span></td>
                                <td><span>&nbsp;</span></td>
                                <td><span>&nbsp;</span></td>
                            </tr>
                            <tr>
                                <td colspan="2"><span>&nbsp;</span></td>
                                <td><p class="text-center">;ksx</p></td>

                                <td><p class="text-center">;ksx</p></td>
                            </tr>
                        </tbody>
                    </table>
                    <p>leLr miHkksDrkvksa gsrq % </p><br>
                    <p>8-	D;k vuqKkfIr/kkjh ds {ks=kUrxZr vkosnd ds uke ij dksbZ fo|qr cdk;k jkf'k gSA	%	gkWa@ugha   fVd djsa </p>
                    <p>9-	D;k bl ifjlj ij dksbZ cdk;k jkf'k gSA tgkWa fo|qr la;kstu gsrq vkosnu fn;k gSA	%	gkWa@ugha</p>
                    <p>10-	D;k ,slh fdlh laLFkk] vkosnd ftldk Lokeh] lk>hnkjh] lapkyd ;k izca/k </p>
                    <p> &nbsp;&nbsp;&nbsp;&nbsp;lapkyd gS] ij vuqKfIr/kkjh ds {ks=karxZr dksbZ fo|qr cdk;k jkf'k gSA		%	gkWa@ugha</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;¼Øekad 7] 8 ,oa 9 ds fy, ;fn ^gkWa^ gks rks d`i;k fooj.k nsa½ </p>
                    <p>11-	eSa@ge ;g ?kks"k.kk djrk gWaw@djrs gSa fd</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;v½  mijksDr izi= esa fn;k x;k fooj.k esjh@gekjh tkudkjh ds vuqlkj lR; gSA</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;¼c½  eSa@geus e-iz- fo|qr iznk; lafgrk ds fo"k;&oLrq dks i<+ fy;k gS ,oa mlesa mYysf[kr 'krksZa dk ikyu djus ds   fy, lger gWaw@gSaA</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp¼n½  eSa@ge ehVj] dV vkmV ,oa mlds ckn dh laLFkkiuk dh izfrHkwfr ,oa lqj{kk ysus dh ftEesnkjh ysrk gWaw@ysrs gSaA</p><br>
                    <p>fnukad%</p><br>
                    <p><span class="pull-left">LFkku</span><span style=" font-family: Titillium;">:</span><span class="pull-right"><b>¼vkosnd@izkf/kd`r gLrk{kjdrkZ ds gLrk{kj½</b></span></p>
                    <br><p><b>uksV % vkosnu ds lkFk fuEufyf[kr nLrkost layXu djsa%&</b></p>
                    <p>1-	ifjlj ds LokfeRo dk izek.k A</p>
                    <p>2-	IykaV@dk;kZy; ds izLrkfor LFky ,oa izLrkfor fo|qr iznk; ds fcUnq dks n'kkZrk gqvk uD'kkA</p>
                    <p>3-	;fn vko';d gks rks oS/kkfud vf/kdkjh ls yk;lsal@vukifRr izek.k i= ;k vkosnd dk ?kks"k.kk&i= fd mlds dusD'ku ds fy;s fdlh izdkj dh oS/kkfud vuqefr dh vko';drk ugha gSA</p>
                    <p>4-	vkosnd ;fn Lo;a dh laLFkk ds fy;s fo|qr la;kstu pkgrk gS rks ,d 'kiFk i= ftlesa ;g mYysf[kr gks fd og ml laLFkk dk Lo;a ekfyd gSA</p>
                    <p>5-	lk>hnkjh laLFkk ds ekeysa esa lk>snkjh laca/kh nLrkostA</p>
                    <p>6-	e;kZfnr ¼fyfeVsM½ dEiuh ds ekeys esa le>kSrk i= rFkk vuqPNsn ,lksfl,'ku ,oa fu;e dh izfr ¼eseksjs.Me ,oa vkfVZdYl vkWQ ,lksfl,'ku ,oa lfVZfQdsV vkWQ budkWiksZjs'ku½A</p>
                    <p>7-	vkosnd ds LFkk;h fuokl ds irs dk izek.k ,oa vkosnd dk vk;dj dk LFkk;h ys[kk Øekad ¼ih,,u uacj½] ;fn dksbZ gksA LFkk;h fuokl ds irs esa Hkfo"; esa ;fn dksbZ cnyko gksrk gS rks vkosnd vuqKfIr/kkjh dks rn~uqlkj lwfpr djsxkA </p>
                    <p>8-	vkS|ksfxd la;kstu gsrq] mRiknu@mRiknu esa c<+ksRrjh ds fy, ySVj vkWQ bUVSaVA</p>
                    <p>9-	izLrkfor midj.kksa dh vuqekfur Hkkj lfgr lwphA</p>
                    <p>10-	tgkWa la;kstu QeZ] fyfeVsM@izk;osV fyfeVsM QeZ] dEiuh vkfn ds uke ls] ds laca/k esa izkf/kdkj ds laaca/k esa izLrkoA</p>
                    <p>11-	m|ksx foHkkx ls jftLVªs'ku ¼tgkWa ;g ykxw gks½A</p>
                    <p>12-	izkstsDV fjiksVZ dk og Hkkx] tks m|ksx ds fo|qr vko';drkvksa rFkk mRiknu dh izfdz;k ls lacaf/kr gks ¼m|ksxksa ds izdj.k esa½A</p>
                    <p>13-	VSfjQ vkns'k ds lacaf/kr vuqHkkx dh izfr] ftldks miHkksDrk }kjk p;fur dj gLrk{kfjr fd;k gksA bls vkSipkfjdrk,sa iw.kZ gksus ij vuqca/k dk fgLlk ekurs gq, vuqca/k ds ifjf'k"V ds :i esa layXu fd;k tkosxkA</p>


                </div> <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>    
                <hr class="non-printable">
                <div class="container">

                    <p class="pull-right">ifjf'k"V & 3</p><br><br>
                    <p class="text-center">lac) Hkkj dh x.kuk</p>
                    <p class="text-center">¼?kjsyw fo|qr la;kstu gsrq½</p><br>
                    <p>1-	miHkksDrk dk uke --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
                    <p>2-	&nbsp;irk &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&& <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&</p>
                    <p>3-	miHkksDrk Øekad &&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&</p>
                    <p>4-	mi;ksx gsrq izLrkfor fo|qr midj.k% d`i;k fuEufyf[kr rkfydk dks Hkjsa rkfd lac) Hkkj dh x.kuk dh tk ldsA <br>
                        &nbsp;&nbsp; lekU;r% lac) Hkkj dh x.kuk ds fy, ifjlj ds izR;sd fo|qr midj.k dk okLrfod vafdr lac) fo|qr Hkkj gh fy;k<br>
                        &nbsp;&nbsp; tk;sxkA ;fn fdlh midj.k dh fu/kkZfjr fo|qr {kerk vafdr ugah gS rks ,slh fLFkfr esa fuEufyf[kr rkfydk ds vk/kkj <br>
                        &nbsp;&nbsp; ij fo|qr Hkkj dh x.kuk dh tk ldrh gSA</p>

                    <table class="table">
                        <tbody>
                            <tr>
                                <td><p>fo|qr midj.k dk uke</p></td>
                                <td><p>fo|qr Hkkj<br>¼okWV~l esa½</p></td>
                                <td><p>l[;k</p> </td>
                                <td><p>dqy fo|qr Hkkj <br>¼okWV~l esa½</p> </td> 
                            </tr>
                            <tr>
                                <td><p>cYc</p> </td>
                                <td><p>60</p> </td>
                                <td><p></p> </td>
                                <td><p></p> </td> 
                            </tr>
                            <tr>
                                <td><p>V~;wc ykbZV</p> </td>
                                <td><p>40</p> </td>
                                <td><p></p> </td>
                                <td><p></p> </td> 
                            </tr>
                            <tr>
                                <td><p>ia[kk</p> </td>
                                <td><p>60</p> </td>
                                <td><p></p> </td>
                                <td><p></p> </td> 
                            </tr>
                            <tr>
                                <td><p>Vsi fjdkMZj@E;wftd flLVe</p> </td>
                                <td><p>40</p> </td>
                                <td><p></p> </td>
                                <td><p></p> </td> 
                            </tr>
                            <tr>
                                <td><p>Vsfyfotu</p> </td>
                                <td><p>100</p> </td>
                                <td><p></p> </td>
                                <td><p></p> </td> 
                            </tr>
                            <tr>
                                <td><p>feDlh	</p> </td>
                                <td><p>175</p> </td>
                                <td><p></p> </td>
                                <td><p></p> </td> 
                            </tr>
                            <tr>
                                <td><p>bysfDVªd vk;ju	</p> </td>
                                <td><p>1000@750</p> </td>
                                <td><p></p> </td>
                                <td><p></p> </td> 
                            </tr>
                            <tr>
                                <td><p>fQzt	</p> </td>
                                <td><p>375</p> </td>
                                <td><p></p> </td>
                                <td><p></p> </td> 
                            </tr>
                            <tr>
                                <td><p>dwyj</p> </td>
                                <td><p>750</p> </td>
                                <td><p></p> </td>
                                <td><p></p> </td> 
                            </tr>
                            <tr>
                                <td><p>ghVj ¼[kkuk idkus ,oa ikuh xeZ djus gsrq½</p> </td>
                                <td><p>1000</p> </td>
                                <td><p></p> </td>
                                <td><p></p> </td>  
                            </tr>
                            <tr>
                                <td><p>diM+s /kksus dh e'khu</p> </td>
                                <td><p>750</p> </td>
                                <td><p></p> </td>
                                <td><p></p> </td> 
                            </tr>
                            <tr>
                                <td><p>xhtj	</p> </td>
                                <td><p>2000</p> </td>
                                <td><p></p> </td>
                                <td><p></p> </td> 
                            </tr>
                            <tr>
                                <td><p>ekbZØksoso vksou	</p> </td>
                                <td><p>2000</p> </td>
                                <td><p></p> </td>
                                <td><p></p> </td>  
                            </tr>
                            <tr>
                                <td><p>,;j dafM'kuj ¼,d Vu½</p> </td>
                                <td><p>1500</p> </td>
                                <td><p></p> </td>
                                <td><p></p> </td> 
                            </tr>
                            <tr>
                                <td><p>,;j dafM'kuj ¼Ms<+ Vu½</p> </td>
                                <td><p>2250</p> </td>
                                <td><p></p> </td>
                                <td><p></p> </td> 
                            </tr>
                            <tr>
                                <td><p>dEI;wVj	</p> </td>
                                <td><p>100</p> </td>
                                <td><p></p> </td>
                                <td><p></p> </td>  
                            </tr>
                            <tr>
                                <td><p>fizUVj	</p> </td>
                                <td><p>1450</p> </td>
                                <td><p></p> </td>
                                <td><p></p> </td>  
                            </tr>
                            <tr>
                                <td><p>iEi lsV ¼vk/kk ,p-ih-@,d ,p-ih-½</p> </td>
                                <td><p>375@750</p> </td>
                                <td><p></p> </td>
                                <td><p></p> </td> 
                            </tr>
                            <tr>
                                <td><p></p> </td>
                                <td><p>;ksx </p> </td>
                                <td><p>;ksx </p> </td>
                                <td><p></p> </td> 
                            </tr>

                        </tbody>
                    </table>
                    <p>v-  vfrfjDr Iyx ikbaV@gksYMj dks lac) Hkkj esa ugha tksM+k tk;sxkA</p>
                    <p>c-  dfri; ?kjsyw ifjljksa esa xhtj@:e ghVj vkSj ,s;j daMh'kuj ¼fcuk ghVj ds½ esa LFkkfir gksrs gSaA ;fn xhtj :e ghVj <br>
                        &nbsp;&nbsp;  nksuksa gh fo|qr midj.k LFkkfir gks rks bu nksuksa ds dqy fo|qr Hkkj dks tksM+ dj budh rqyuk ,;j daMh'kuj ds fo|qr <br>
                        &nbsp;&nbsp;  Hkkj ls dh tkosxh ,oa rqyukRed :Ik ls tks Hkh vf/kd gksxk mls lac) Hkkj dh x.kuk esa tksM+k tkosxkA</p>
                    <div class="row">
                        <div class="col-xs-6">
                            <p>miHkksDrk ds gLrk{kj &&&&&&&&&&&&&&&&&&<br>
                                fnukad % &&&&&&&&&&&&&&&&&&&&&&&&&<br>
                                LFkku % &&&&&&&&&&&&&&&&&&&&&&&&&&</p>
                        </div>
                        <div class="col-xs-6">
                            <p>vuqKfIr/kkjh ds izfrfuf/k ds gLrk{kj &&&&&&&&&&&<br>
                                fnukad % &&&&&&&&&&&&&&&&&&&&&&&&&&&<br>
                                LFkku % &&&&&&&&&&&&&&&&&&&&&&&&&&&& </p>
                        </div>

                    </div>

                </div> <br><br> <br><br><br><br> 
                <hr class="non-printable">
                <br><br>
                <div class="container">
                    <!--p class="text-center" style="font-size: 30px; border: 1px solid #000; padding: 8px;">10@& :i;s ds LVkEi ij <br>'kiFk i= fuEu esa tks ykxw gksa mlh dh izfof"V dj fu"iknu djsaA</p-->
                    <p class="text-center" style="font-size: 40px;"><b>'kiFk i=</b></p>
                    <p>eSa -------------------------------------------------------------------------------------------------------------vkRe@iRuh --------------------------------------------------------------------------------------------------------<br>
                        fuoklh&edku ua- ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------Hkksiky <br>
                        'kiFk iwoZd dFku djrk gWaw fd %&</p>
                    <p>1-  eSaus e-iz-e-{ks- fo|qr forj.k daiuh fyfeVsM] Hkksiky ds laHkkx -----------------------------------------------------------esa e- ua- -----------------------------------------<br>&nbsp;&nbsp;
                        okMZ Øekad ------------------------------------------------eksgYyk ---------------------------------------------------------------------------------------------------------------------------------------Hkksiky <br>&nbsp;&nbsp;
                        flaxy@Fkzh Qsl esa ,d ---------------------------------------------------------------------------------------------------------------------------------------------------izdk'k@ikoj dusD'ku<br>&nbsp;&nbsp;
                        gsrq -------------------------------------------------------------------------------------------------------------------------------ds uke ls ,d LFkkbZ fo|qr dusD'ku dh ekax dh gSA </p>
                    <p>2-  mDr vkosfnr ifjlj esjs oS/k vkf/kiR; esa gS rFkk bl laca/k esa dksbZ Hkh okn fdlh U;k;ky; esa yfEcr ugha gSA</p>
                    <p>3-  eq>s esjs mDr ifjlj esa LFkkbZ dusD'ku fn, tkus ds mijkar LokfeRo ;k vU; fdlh laca/k esa fookn gksus dh fLFkfr esa] eSa<br>&nbsp;&nbsp;Lo;a mlds fy;s ftEesnkj jgWaswxk o ifjlj ij fo|qr forj.k daiuh fyfeVsM dh fdlh Hkh izdkj dh cdk;k jkf'k ugha gS vkSj<br>&nbsp;&nbsp;,sls fdlh fookn ds dkj.k daiuh fyfeVsM dks vf/kdkj gksxk fd eq>s fn, x, mDr dusD'ku dks fcuk fdlh iwoZ lwpuk ds
                        <br>&nbsp;&nbsp; foPNsfnr dj nsaA</p>
                    <p>4-  esjh leLr tkudkjh ds vuqlkj esjs ftl ifjlj esa mDr dusD'ku dh ekax dh xbZ gS] ml iwjs ifjlj esa esjs ;k vU; fdlh
                        <br>&nbsp;&nbsp; ds uke ls fo|qr forj.k daiuh fyfeVsM dh iqjkuh ;k pkyw fdlh Hkh izdkj dh cdk;k jkf'k ugha gS vkSj ,sls fdlh fookn
                        <br>&nbsp;&nbsp; ds dkj.k fo|qr forj.k daiuh fyfeVsM dks vf/kdkj gksxk] fd eq>s fn, x, mDr dusD'ku dks fcuk fdlh iwoZ lwpuk ds
                        <br>&nbsp;&nbsp; foPNsfnr dj nsA</p>
                    <p>5-  esjs ikl edku ds LokfeRo n'kkZus gsrq nLrkost jftLVªh@iV~Vk@olh;r ukek@lEifRrdj dh jlhn gSA</p>
                    <p>6-  mDr ifjlj esa eSa fdjk;snkj gWaw vkSj esjs edku ekfyd dks dksbZ vkifRr ugha gSA edku ekfyd dk vukifRr izek.k i=
                        <br>&nbsp;&nbsp; lacaf/kr nLrkost ds lkFk layXu gSA bl txg ij dusD'ku nsus ds mijkar ;fn ftyk/;{k utwy] Hkksiky vFkok fdlh 
                        <br>&nbsp;&nbsp; 'kkldh;@v)Z'kkldh;@xSj 'kkldh; dk;kZy; ;k laLFkk ;k O;fDr dks fdlh izdkj dh vkifRr gksxh mlds fy, eSa Lo;a 
                        <br>&nbsp;&nbsp; gh ftEesnkj jgWawxk@jgWawxhA ;fn fdlh laLFkk dks vkifRr gksxh rks e-iz-e-{ks- fo|qr forj.k daiuh fyfeVsM dks vf/kdkj gksxk 
                        <br>&nbsp;&nbsp; fd cxSj fdlh iwoZ lwpuk ds esjk dusD'ku dkV nsaa bl ij eq>s dksbZ vkifRr ugha gksxhA ml ij gksus okys O;;@uqdlku 

                        <br>&nbsp;&nbsp; vkfn ds fy;s iw.kZ :i ls ftEesnkj jgwawxk@jgWawxhA </p>
                    <p>7-  esjs edku ij dkMZ dusD'ku@iwoZ dusD'ku dh tks Hkh cdk;k jkf'k gksxhA mldk Hkqxrku eSa tek djkus dh lgefr nsrh <br>&nbsp;&nbsp; gWaw@nsrk gWawA</p>
                    <p class="text-right">      ¼gLrk{kj 'kiFkxzfgrk½ 
                        <br>&nbsp;&nbsp;&nbsp; Ukke %  -----------------------------------------------------
                        <br>&nbsp;&nbsp;irk % --------------------------------------------------------</p>
                    <p class="text-center">lR;kiu </p>
                    <p>eSa --------------------------------------------------------------------------------------------------------------------------------------------------------- mDr 'kiFk xzfgrk lR;kfir djrk gWaw@djrh gWaw fd mDr 'kiFk&i= esa pj.k Øekad 1 ls 6 esa nh xbZ tkudkjh esjs Kku ,oa fo'okl ds vuqlkj lgh gSA
                        lR;kiu vkt fnukad --------------------------------------------dks Hkksiky esa fd;k x;k A
                    </p><br>
                    <p>LFkku % <span class="pull-right">uke % -----------------------------------------------------</span></p>
                    <p>fnukad % <span class="pull-right">irk % -----------------------------------------------------</span></p>
                </div> 
            </div> 
                <?php } ?>
        </div> 


        <script type="text/javascript">

            $(document).ready(function () {
                $('#toppageheader').html('MPEB2<span class="pull-right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="print" id="btnprint" value="print" class="btn btn-sm btn-default" onClick="print_this_doc();">Print&nbsp;&nbsp;<i class="fa fa-print"></i></button></span>');
                $("a:contains(MPEB2)").parent().addClass('active');
            });
            function print_this_doc() {
                window.print();
                /*
                 var printContents = document.getElementById('printable').innerHTML;
                 var originalContents = document.body.innerHTML;
                 document.body.innerHTML = printContents;
                 var css = '@page { size: portrait; }',
                 head = document.head || document.getElementsByTagName('head')[0],
                 style = document.createElement('style');
                 
                 style.type = 'text/css';
                 style.media = 'print';
                 
                 if (style.styleSheet) {
                 style.styleSheet.cssText = css;
                 } else {
                 style.appendChild(document.createTextNode(css));
                 }
                 
                 head.appendChild(style);
                 window.print();
                 document.body.innerHTML = originalContents;
                 
                 */
            }
            function fixthis(arg)
            {
                $('#applid option[value=' + arg + ']').attr('selected', 'selected');
            }

        </script>
    </body>
</html>


